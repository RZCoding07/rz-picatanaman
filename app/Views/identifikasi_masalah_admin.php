<?= $this->extend("layouts/master_app") ?>

<?= $this->section("content") ?>
<!-- Main content -->

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-info alert-dismissible">
          <form action="<?= base_url('your-controller/your-method') ?>" method="post">
            <div class="row">
              <div class="col-md-4">
                <label for="rpc" class="form-label">RPC:</label>
                <select name="rpc" id="rpc" class="form-select">
                  <option value="" disabled>Pilih RPC</option>
                  <option value="RPC1">RPC1</option>
                  <!-- Populate options dynamically if needed -->
                </select>
              </div>
              <div class="col-md-4">
                <label for="kebun" class="form-label">Kebun:</label>
                <select name="kebun" id="kebun" class="form-select">
                  <option value="" disabled>Pilih Kebun</option>
                  <option value="KSD">Sei Daun</option>
                  <option value="KTO">Torgamba</option>
                  <option value="KSB">Sei Baruhur</option>
                  <!-- Populate options dynamically if needed -->
                </select>
              </div>
              <div class="col-md-4">
                <label for="afd" class="form-label">Afdeling:</label>
                <select name="afd" id="afd" class="form-select">
                  <option value="" disabled>Pilih Afdeling</option>
                  <option value="AFD01">Afd 1</option>
                  <!-- Populate options dynamically if needed -->
                </select>
              </div>
              <!-- <div class="col-md-4">
                <label for="blok" class="form-label">Blok:</label>
                <select name="blok" id="blok" class="form-select">
                  <option value="" disabled>Pilih Blok</option>
                  <option value="AA13">AA13</option>
                  <option value="AA14">AA14</option>
                  <option value="BB13">BB13</option>
                </select>
              </div> -->
            </div>
            <div class="mt-3">
              <button type="submit" class="btn btn-primary form-control" id="cari">Cari</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <div class="box">
    <div class="box-header with-border">
      <h4 class="box-title text-capitalize">Data Identifikasi Masalah</h4>
      <button type="button" class="btn float-end btn-primary btn-sm" onclick="save()" title="<?= lang("App.new") ?>"> <?= lang('App.new') ?></button>
    </div>
    <div class="box-body">
      <table id="data_table" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>RPC</th>
            <th>Kebun</th>
            <th>Afd</th>
            <th>Tahun Tanam</th>
            <th>No Blok</th>
            <th>Luas Ha</th>
            <th>Jlh Pokok</th>
            <th>Pkk Ha</th>
            <th>Realisasi Angka S/D</th>
            <th>Kriteria</th>
            <th>W1</th>
            <th>W2</th>
            <th>W3</th>
            <th>Measurement</th>
            <th>Keterangan</th>
            <th>Aksi</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
</section>

<!-- /Main content -->

<!-- ADD modal content -->
<div id="data-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md">
    <div class="modal-content">
      <div class="text-center bg-info p-3" id="model-header">
        <h4 class="modal-title text-white" id="info-header-modalLabel"></h4>
      </div>
      <div class="modal-body">
        <form id="data-form" class="pl-3 pr-3">
          <?= csrf_field() ?>
          <div class="row">
            <input type="hidden" id="id" name="id" class="form-control" placeholder="Id" required>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group mb-3">
                <label for="RPC" class="col-form-label"> RPC: <span class="text-danger">*</span> </label>
                <input type="text" id="RPC" name="RPC" class="form-control" placeholder="RPC" minlength="0" maxlength="255" required>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group mb-3">
                <label for="Kebun" class="col-form-label"> Kebun: </label>
                <input type="text" id="Kebun" name="Kebun" class="form-control" placeholder="Kebun" minlength="0" maxlength="255">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group mb-3">
                <label for="Afd" class="col-form-label"> Afd: </label>
                <input type="text" id="Afd" name="Afd" class="form-control" placeholder="Afd" minlength="0" maxlength="255">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group mb-3">
                <label for="Tahun_Tanam" class="col-form-label"> Tahun Tanam: </label>
                <input type="date" id="Tahun_Tanam" name="Tahun_Tanam" class="form-control" dateISO="true">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group mb-3">
                <label for="No_Blok" class="col-form-label"> No Blok: </label>
                <input type="text" id="No_Blok" name="No_Blok" class="form-control" placeholder="No Blok" minlength="0" maxlength="255">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group mb-3">
                <label for="Luas_Ha" class="col-form-label"> Luas Ha: </label>
                <input type="text" id="Luas_Ha" name="Luas_Ha" class="form-control" placeholder="Luas Ha" minlength="0" maxlength="10">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group mb-3">
                <label for="Jlh_Pokok" class="col-form-label"> Jlh Pokok: </label>
                <input type="number" id="Jlh_Pokok" name="Jlh_Pokok" class="form-control" placeholder="Jlh Pokok" minlength="0">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group mb-3">
                <label for="Pkk_Ha" class="col-form-label"> Pkk Ha: </label>
                <input type="number" id="Pkk_Ha" name="Pkk_Ha" class="form-control" placeholder="Pkk Ha" minlength="0">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group mb-3">
                <label for="Realisasi" class="col-form-label"> Realisasi: <span class="text-danger">*</span> </label>
                <input type="number" id="Realisasi" name="Realisasi" class="form-control" placeholder="Realisasi" minlength="0" required>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group mb-3">
                <label for="Kriteria" class="col-form-label"> Kriteria: </label>
                <input type="text" id="Kriteria" name="Kriteria" class="form-control" placeholder="Kriteria" minlength="0" maxlength="255">
              </div>
            </div>
          </div>

          <div class="form-group text-center">
            <div class="btn-group">
              <button type="submit" class="btn btn-success mr-2" id="form-btn"><?= lang("App.save") ?></button>
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><?= lang("App.cancel") ?></button>
            </div>
          </div>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
<!-- /ADD modal content -->


<?= $this->endSection() ?>
<!-- page script -->
<?= $this->section("script") ?>

<!-- cari script -->
<script>
  let csrfHash = '<?= csrf_hash(); ?>'
  let csrfToken = '<?= csrf_token(); ?>'
  // if button with id cari clicked
  // get ajax data from server
  // and populate the datatable
  // host/identifikasi-masalah/get-data
  $(document).on('click', '#cari', function(e) {
    e.preventDefault();
    var rpc = $('#rpc').val();
    var kebun = $('#kebun').val();
    var afd = $('#afd').val();
    var blok = $('#blok').val();
    $.ajax({
      url: '<?= base_url('identifikasi-masalah/get-data') ?>',
      type: 'post',
      data: {
        rpc: rpc,
        kebun: kebun,
        afd: afd,
        blok: blok,
        [csrfToken]: csrfHash
      },
      dataType: 'json',
      success: function(response) {
        console.log(response);
        var dataTable = $('#data_table').DataTable();
        dataTable.clear().draw(); // Clear existing table data

        // Loop through the response data and add rows to the table
        $.each(response, function(index, row) {
          dataTable.row.add([
            index + 1,
            row.RPC,
            row.Kebun,
            row.Afd,
            row.Tahun_Tanam,
            row.No_Blok,
            row.Luas_Ha,
            row.Jlh_Pokok,
            row.Pkk_Ha,
            row.Realisasi,
            row.Kriteria,
            row.w1,
            row.w2,
            row.w3,
            row.measurement,
            row.keterangan,
            '<button class="btn btn-danger btn-sm" onclick="remove(' + row.id + ')">Delete</button>' +
            '<button class="btn btn-info btn-sm">Edit</button>' // Add your action buttons here
          ]).draw(false);
        });
      }
    });
  });
</script>


<!-- <script>
  // dataTables
  $(function() {
    var table = $('#data_table').removeAttr('width').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "scrollY": '45vh',
      "scrollX": true,
      "scrollCollapse": false,
      "responsive": false,
      destroy: true,
      processing: true,
      serverSide: true,
      ajax: '<?= base_url($controller . "/getAll") ?>',
      order: [],
      columnDefs: [{
        targets: 0,
        orderable: false
      }, ],
    });
  });

  var urlController = '';
  var submitText = '';

  function getUrl() {
    return urlController;
  }

  function getSubmitText() {
    return submitText;
  }

  function save(id) {
    // reset the form 
    $("#data-form")[0].reset();
    $(".form-control").removeClass('is-invalid').removeClass('is-valid');
    if (typeof id === 'undefined' || id < 1) { //add
      urlController = '<?= base_url($controller . "/add") ?>';
      submitText = '<?= lang("App.save") ?>';
      $("#info-header-modalLabel").text('<?= lang("App.add") ?>');
      $("#form-btn").text(submitText);
      $('#data-modal').modal('show');
    } else { //edit
      urlController = '<?= base_url($controller . "/edit") ?>';
      submitText = '<?= lang("App.update") ?>';
      $.ajax({
        url: '<?= base_url($controller . "/getOne") ?>',
        type: 'post',
        data: {
          id: id,
          [csrfToken]: csrfHash
        },
        dataType: 'json',
        success: function(response) {
          $("#info-header-modalLabel").text('<?= lang("App.edit") ?>');
          $("#form-btn").text(submitText);
          $('#data-modal').modal('show');
          //insert data to form
          $("#data-form #id").val(response.id);
          $("#data-form #RPC").val(response.RPC);
          $("#data-form #Kebun").val(response.Kebun);
          $("#data-form #Afd").val(response.Afd);
          $("#data-form #Tahun_Tanam").val(response.Tahun_Tanam);
          $("#data-form #No_Blok").val(response.No_Blok);
          $("#data-form #Luas_Ha").val(response.Luas_Ha);
          $("#data-form #Jlh_Pokok").val(response.Jlh_Pokok);
          $("#data-form #Pkk_Ha").val(response.Pkk_Ha);
          $("#data-form #Realisasi").val(response.Realisasi);
          $("#data-form #Kriteria").val(response.Kriteria);


        }
      });
    }
    $.validator.setDefaults({
      highlight: function(element) {
        $(element).addClass('is-invalid').removeClass('is-valid');
      },
      unhighlight: function(element) {
        $(element).removeClass('is-invalid').addClass('is-valid');
      },
      errorElement: 'div ',
      errorClass: 'invalid-feedback',
      errorPlacement: function(error, element) {
        if (element.parent('.input-group').length) {
          error.insertAfter(element.parent());
        } else if ($(element).is('.select')) {
          element.next().after(error);
        } else if (element.hasClass('select2')) {
          //error.insertAfter(element);
          error.insertAfter(element.next());
        } else if (element.hasClass('selectpicker')) {
          error.insertAfter(element.next());
        } else {
          error.insertAfter(element);
        }
      },
      submitHandler: function(form) {
        var form = $('#data-form');
        $(".text-danger").remove();
        $.ajax({
          // fixBug get url from global function only
          // get global variable is bug!
          url: getUrl(),
          type: 'post',
          data: form.serialize(),
          cache: false,
          dataType: 'json',
          beforeSend: function() {
            $('#form-btn').html('<i class="fad fa-spinner fa-spin"></i>');
          },
          success: function(response) {
            if (response.success === true) {
              $('#data-modal').modal('hide');
              Swal.fire({
                toast: true,
                position: 'bottom-end',
                icon: 'success',
                title: response.messages,
                showConfirmButton: false,
                timer: 1500
              }).then(function() {
                $('#data_table').DataTable().ajax.reload(null, false).draw(false);
              })
            } else {
              if (response.messages instanceof Object) {
                $.each(response.messages, function(index, value) {
                  var ele = $("#" + index);
                  ele.closest('.form-control')
                    .removeClass('is-invalid')
                    .removeClass('is-valid')
                    .addClass(value.length > 0 ? 'is-invalid' : 'is-valid');
                  ele.after('<div class="invalid-feedback">' + response.messages[index] + '</div>');
                });
              } else {
                Swal.fire({
                  toast: false,
                  position: 'bottom-end',
                  icon: 'error',
                  title: response.messages,
                  showConfirmButton: false,
                  timer: 3000
                })

              }
            }
            $('#form-btn').html(getSubmitText());
          }
        }).fail(function(res) {
          console.log(res);
        });
        return false;
      }
    });

    $('#data-form').validate({

      //insert data-form to database

    });
  }

  function remove(id) {
    Swal.fire({
      title: "<?= lang("App.remove-title") ?>",
      text: "<?= lang("App.remove-text") ?>",
      icon: 'warning',
      showCancelButton: true,
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      },
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: '<?= lang("App.confirm") ?>',
      cancelButtonText: '<?= lang("App.cancel") ?>'
    }).then((result) => {

      if (result.value) {
        $.ajax({
          url: '<?php echo base_url($controller . "/remove") ?>',
          type: 'post',
          data: {
            id: id,
            [csrfToken]: csrfHash
          },
          dataType: 'json',
          success: function(response) {
            if (response.success === true) {
              Swal.fire({
                toast: true,
                position: 'bottom-end',
                icon: 'success',
                title: response.messages,
                showConfirmButton: false,
                timer: 1500
              }).then(function() {
                $('#data_table').DataTable().ajax.reload(null, false).draw(false);
              })
            } else {
              Swal.fire({
                toast: false,
                position: 'bottom-end',
                icon: 'error',
                title: response.messages,
                showConfirmButton: false,
                timer: 3000
              })
            }
          }
        });
      }
    })
  }
</script> -->


<?= $this->endSection() ?>