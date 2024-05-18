<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Excel File</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
</head>

<body>
    <form id="templateFormForm2" action="<?= base_url('/upload') ?>" method="post" enctype="multipart/form-data">
        <label for="excelFile">Select Excel File:</label>
        <input type="file" name="excelFile" id="excelFile">
        <input type="submit" value="Upload" id="btnUpload">
    </form>

    <script src="js/uploadScript.js"></script>
    <script>
        async function excelProcessor(file) {
            if (!file) {
                return Promise.reject(new Error('File not found'));
            }
            let reader = new FileReader();
            return new Promise((resolve, reject) => {
                reader.onload = function(e) {
                    try {
                        let workbook = XLSX.read(e.target.result, {
                            type: 'binary'
                        });
                        let sheet = workbook.Sheets[workbook.SheetNames[0]];
                        if (!sheet) {
                            return reject(new Error('Invalid file, make sure the file matches the template'));
                        }
                        let data = XLSX.utils.sheet_to_json(sheet, {
                            header: 1,
                            blankrows: false,
                            range: 1,
                            raw: true,
                            defval: ''
                        });
                        resolve(data);
                    } catch (error) {
                        reject(error);
                    }
                };
                reader.readAsBinaryString(file);
            });
        }

        $(document).ready(function() {
            $('#templateFormForm2').on('submit', async function(e) {
                e.preventDefault();
                let formData = new FormData(e.target);
                let btnSend = $(e.target).find('#btnUpload');
                loadMaker(btnSend);
                let fileform = $('#excelFile').get(0).files[0];
                $('#excelFile').text(fileform.name);
                let file = await excelProcessor(fileform);
                console.log(file);
                // return;
                formData.append('data', JSON.stringify(file));

                await $.ajax({
                    url: "<?= base_url('/uploadKuadran') ?>",
                    type: 'POST',
                    contentType: false,
                    processData: false,
                    data: formData,
                    timeout: 10000,
                    success: function(res) {
                        showToast('success', res.message);
                        // $('#templateFormForm2').trigger('submit');
                    },
                    error: function(err) {
                        showToast('fail', 'Error');
                        throw err;
                    }
                }).always(function() {
                    loadMaker(btnSend);
                });
            });
        });

        function loadMaker(button) {
            if (button.prop('disabled')) {
                button.prop('disabled', false);
                button.val('Upload');
            } else {
                button.prop('disabled', true);
                button.val('Uploading...');
            }
        }

        function showToast(type, message) {
            // Placeholder for a function to show a toast notification
            alert(`${type.toUpperCase()}: ${message}`);
        }
    </script>
</body>

</html>