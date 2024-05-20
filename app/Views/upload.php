<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Excel File</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
</head>

<body>

    <div class="container py-3">
        <div class="row">
            <form id="templateFormForm2" action="<?= base_url('/upload') ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-10">
                        <label class="form-label" for="excelFile">Select Excel File:</label>
                        <input type="file" name="excelFile" id="excelFile" class="form-control">
                    </div>
                    <div class="col-2"><br>
                        <input type="submit" value="Upload" id="btnUpload" class="btn btn-primary float-start mt-2">
                    </div>
                </div>
            </form>
        </div>
        <div class="row mt-5">
            <div class="progress px-0">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
            </div>
            <strong class="text-primary" id="status"></strong>
        </div>
    </div>

    <script src="/js/uploadScript.js"></script>
    <script>
        const CHUNK_SIZE = 50; // 50 bytes chunks

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

        function chunkArray(array, size) {
            if (!Array.isArray(array) || size <= 0) {
                throw new Error('Invalid input: array must be an array and size must be a positive number');
            }

            const result = [];
            for (let i = 0; i < array.length; i += size) {
                const chunk = array.slice(i, i + size);
                result.push(chunk);
            }
            return result;
        }

        $(document).ready(function() {
            $('#templateFormForm2').on('submit', async function(e) {
                e.preventDefault();
                let btnSend = $(e.target).find('#btnUpload');
                loadMaker(btnSend);
                let fileform = $('#excelFile').get(0).files[0];
                $('#excelFile').text(fileform.name);
                $('#status').text('Converting, please wait...');
                let file = await excelProcessor(fileform);
                let fileChunks = chunkArray(file, 1000);
                console.log(fileChunks);
                let response = [];
                let progress = 0;
                $('.progress-bar').css('width', `${progress}%`);
                $('.progress-bar').text(`${progress}%`);
                $('#status').text('Uploading, please wait...');
                for (let i = 0; i < fileChunks.length; i++) {
                    let chunk = fileChunks[i];
                    let data = JSON.stringify(chunk);
                    await $.ajax({
                        url: "<?= base_url('/upload') ?>",
                        type: 'POST',
                        data: {
                            data: data
                        },
                        dataType: 'json',
                        timeout: 10000,
                    }).then((res) => {
                        response = res;
                    }).fail((err) => {
                        console.log(err);
                        response.push([]);
                    })
                    progress = Math.round(((i + 1) / fileChunks.length) * 100 * 100) / 100;
                    $('.progress-bar').css('width', `${progress}%`);
                    $('.progress-bar').text(`${progress}%`);
                    console.log(i, response);
                    if (progress >= 100) {
                        $('#status').text('Upload completed...');
                        loadMaker(btnSend);
                    }
                }
            });
        });

        async function uploadChunk(chunkFormData) {
            return $.ajax({
                url: "<?= base_url('/upload') ?>", // Ensure your server is set to handle this endpoint for chunked uploads
                type: 'POST',
                contentType: false,
                processData: false,
                data: chunkFormData,
                timeout: 10000
            });
        }

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
            alert(`${type.toUpperCase()}: ${message}`);
        }
    </script>

</body>

</html>