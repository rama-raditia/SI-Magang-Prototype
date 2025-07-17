@extends('layouts.sidebar')
@section('konten')
<!-- Main content -->


 <link href="assets/cp/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
 <script type="text/javascript" src="assets/cp/jquery.filer/js/jquery.filer.min.js"></script>
 <div class="content-wrapper">
     <!-- Header area -->

     <div class="page-header-content page-header page-header-defaultborder-bottom-lg border-bottom-primary">
         <div class="page-title">
             <h4> <span class="text-semibold">Manajemen</span> - Data Surat, Proposal , Sertifikat ,Laporan Akhir Magang dan MoU/MoA/PKS</h4>
         </div>
     </div>

     <!-- Content area -->
     <div class="content">

         <!-- Dashboard content -->

         <div class="row info-download-wrapper" style="display: flex; gap: 20px;">

  <!-- KIRI: INFORMASI PENTING -->
  <div class="col-md-7">
    <div class="info-container">
      <h5><i class="icon-info22"></i> Panduan Pengisian & Upload Dokumen</h5>
      <p><strong>Perhatikan hal berikut sebelum upload:</strong></p>
      <ul>
        <li>Link blog harus aktif dan berisi catatan kegiatan magang.</li>
        <li>Dokumen harus sesuai format dan diisi dengan data yang lengkap.</li>
        <li>Unggah semua dokumen melalui tombol "<strong>Tambah Data</strong>".</li>
      </ul>

      <p><strong>Link Blog Anda:</strong><br>
        <a href="#" target="_blank" id="displayBlogLink">https://contoh.blogspot.com/</a>
        <a class="btn btn-sm btn-primary"
           onclick="$('#i_link_blog').val($('#link_blog').html());$('#modal-form1').modal('show');">
          <i class="icon-pencil"></i> Edit
        </a>
      </p>
    </div>
  </div>

  <!-- KANAN: FORMAT DOKUMEN -->
  <div class="col-md-5">
    <div class="download-container">
      <h5><i class="icon-download7"></i> Unduh Format Dokumen</h5>
      <a href="#" class="btn btn-info btn-sm">
        📄 Surat Ijin Orang Tua & Sertifikat Vaksin
      </a>
      <a href="#" class="btn btn-info btn-sm">
        📄 Proposal Magang
      </a>
      <a href="#" class="btn btn-info btn-sm">
        📄 Laporan Akhir Magang
      </a>
      <a href="#" class="btn btn-info btn-sm">
        📄 Pedoman Magang
      </a>
    </div>
  </div>

</div>


         <div class="panel panel-default">
             <div class="panel-heading">
                 <h5 class="panel-title">Data Surat, Proposal , Sertifikat ,Laporan Akhir Magang dan MoU/MoA/PKS </h5>

                 <div class="heading-elements ">
                     <a href="#" data-toggle="modal" data-target="#modalTambah" class="btn btn-success btn-xs btn-raised legitRipple">
  <i class="icon-add position-left"></i> Tambah Data
</a>
                     <button onclick="reload_tabel();" class="btn btext-warning-600 btn-flat btn-icon legitRipple" data-popup="tooltip" data-placement="bottom" data-original-title="Refresh Tabel"><i class="icon-reload-alt"></i></button>

                 </div>
             </div>

             <div class="panel-body" style="padding-top: 0px">



                 <div class="panel-body">


                     <table class="table datatable-responsive">
                         <thead>
                             <tr>
                                 <th>No</th>
                                 <th>Jenis</th>
                                 <th>Komentar</th>
                                 <th>File Dokumen</th>
                                 <th>Aksi</th>
                             </tr>
                         </thead>
                         <tbody>


                         </tbody>
                         <tfoot>
                             <tr>
                                 <th>No</th>
                                 <th>Jenis</th>
                                 <th>Komentar</th>
                                 <th>File Dokumen</th>
                                 <th>Aksi</th>
                             </tr>
                         </tfoot>
                     </table>
                 </div>


                
<!-- MODAL TAMBAH -->
<div id="modalTambah" class="modal fade" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-horizontal" id="formTambah" enctype="multipart/form-data">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h5 class="modal-title"><i class="icon-add"></i> Tambah Dokumen</h5>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label class="control-label col-sm-4">Jenis Dokumen</label>
            <div class="col-sm-8">
              <select name="jenis" class="form-control" required>
                <option value="">- Pilih Jenis Dokumen -</option>
                <option value="Surat">Surat</option>
                <option value="Proposal">Proposal</option>
                <option value="Sertifikat">Sertifikat</option>
                <option value="Laporan Akhir Magang">Laporan Akhir Magang</option>
                <option value="MoU/MoA/PKS">MoU/MoA/PKS</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4">Upload File</label>
            <div class="col-sm-8">
              <input type="file" name="file" class="form-control" required>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cancel-circle2"></i>  Tutup</button>
          <button type="submit" class="btn btn-primary"><i class="icon-check"></i>  Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- MODAL EDIT -->
<div id="modalEdit" class="modal fade" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-horizontal" id="formEdit">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h5 class="modal-title"><i class="icon-pencil"></i> Edit Dokumen</h5>
        </div>
        <div class="modal-body">
          <input type="hidden" id="editIndex">
          <div class="form-group">
            <label class="control-label col-sm-4">Jenis Dokumen</label>
            <div class="col-sm-8">
              <select id="editJenis" class="form-control" required>
                <option value="">- Pilih Jenis Dokumen -</option>
                <option value="Surat">Surat</option>
                <option value="Proposal">Proposal</option>
                <option value="Sertifikat">Sertifikat</option>
                <option value="Laporan Akhir Magang">Laporan Akhir Magang</option>
                <option value="MoU/MoA/PKS">MoU/MoA/PKS</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4">Komentar</label>
            <div class="col-sm-8">
              <input type="text" id="editKomentar" class="form-control">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cancel-circle2"></i>  Tutup</button>
          <button type="submit" class="btn btn-primary"><i class="icon-check"></i>  Update</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- SCRIPT -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  let no = 1;
  const table = $('.datatable-responsive').DataTable({ responsive: true });

  $('#formTambah').on('submit', function (e) {
  e.preventDefault();

  const jenis = this.jenis.value;
  const file = this.file.files[0];

  if (!jenis || !file) {
    Swal.fire('Lengkapi Data', 'Jenis dokumen dan file wajib diisi.', 'warning');
    return;
  }

  const fileName = file.name;
  const komentar = '-';

  table.row.add([
    no++,
    jenis,
    komentar,
    fileName,
    `
    <button class="editBtn btn btn-primary btn-xs btn-raised legitRipple" onclick="editData(this)"><i class="icon-pencil"></i></button>
    <button class="deleteBtn btn  btn-danger btn-xs btn-raised legitRipple" onclick="hapusData(this)"><i class="icon-trash"></i></button>
    `
  ]).draw(false);

  $('#modalTambah').modal('hide');
  this.reset();

  
  $('#modalTambah').on('hidden.bs.modal', function () {
    Swal.fire('Berhasil!', 'Dokumen berhasil ditambahkan.', 'success');

  
    $('.modal-backdrop').remove();
    $('body').removeClass('modal-open');
  });
});


 
  function hapusData(btn) {
    const row = $(btn).closest('tr');
    Swal.fire({
      title: 'Yakin ingin menghapus?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Ya, hapus',
      cancelButtonText: 'Batal'
    }).then(result => {
      if (result.isConfirmed) {
        table.row(row).remove().draw();
        Swal.fire('Dihapus!', 'Data telah dihapus.', 'success');
      }
    });
  }


  function editData(btn) {
    const row = $(btn).closest('tr');
    const rowIndex = table.row(row).index();
    const data = table.row(row).data();

    $('#editIndex').val(rowIndex);
    $('#editJenis').val(data[1]);
    $('#editKomentar').val(data[2]);
    $('#modalEdit').modal('show');
  }

  
  $('#formEdit').on('submit', function (e) {
    e.preventDefault();

    const index = $('#editIndex').val();
    const jenis = $('#editJenis').val();
    const komentar = $('#editKomentar').val();

    let row = table.row(index);
    let data = row.data();
    data[1] = jenis;
    data[2] = komentar;
    row.data(data).draw(false);

    $('#modalEdit').modal('hide');
    Swal.fire('Berhasil!', 'Data berhasil diperbarui.', 'success');
  });
</script>

                 
<div id="modal-form1" class="modal fade" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <form class="form-horizontal" id="frm_act_blog">
      
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h5 class="modal-title">
            <span><i class="glyphicon glyphicon-pencil" style="transform: rotate(120deg);"></i> Edit</span> Link Blog
          </h5>
        </div>

        <div class="modal-body">
          <div class="alert alert-warning text-center" 
               style="background-color: #e8f1fb; border: 2px solid #007bff; color: #004085; padding: 20px; border-radius: 8px;">
            <strong style="color: #004085; background-color: transparent;">Masukkan URL Blog</strong> <br> 
            Contoh: <code style="color: #007bff; background-color: transparent;">coba123.blogspot.com</code>
          </div>

          <div class="form-group" style="margin-top: 20px;">
            <label class="control-label col-sm-4">Link Blog</label>
            <div class="col-sm-8">
              <input type="text" id="i_link_blog" class="form-control" placeholder="contohblog.blogspot.com" required>
            </div>
          </div>
        </div> <!-- END modal-body -->

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">
            <i class="icon-cancel-circle2"></i> Tutup
          </button>
          <button type="submit" class="btn btn-primary">
            <i class="icon-check"></i> Simpan
          </button>
        </div>

      </form>
    </div>
  </div>
</div>



            <!-- JS (jQuery, Bootstrap 3, SweetAlert2) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

            <script>
            $('#frm_act_blog').on('submit', function (e) {
                e.preventDefault();

                const link = $('#i_link_blog').val().trim();

                if (!link) {
                Swal.fire('Error', 'Link blog tidak boleh kosong!', 'error');
                return;
                }

               
                if (!link.match(/^[a-zA-Z0-9\-_.]+\.(blogspot\.com|wordpress\.com)$/)) {
                Swal.fire('Format Salah', 'Masukkan link yang valid, contoh: namablog.blogspot.com', 'warning');
                return;
                }

           
                $('#displayBlogLink').html(`<a href="https://${link}" target="_blank">${link}</a>`);

          
                $('#modal-form1').modal('hide');
                Swal.fire('Berhasil', 'Link blog berhasil disimpan!', 'success');

              
                $('#frm_act_blog')[0].reset();
            });
            </script>


             </script>
             <div id="modal_loading" class="modal fade" data-backdrop="static">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header bg-green">

                             <h5 class="modal-title"><i class="icon-sync"></i> Loading</h5>
                         </div>
                         <div class="modal-body">
                             <center>
                                 <h1> <i class="icon-spinner4 icon-3x spinner"></i></h1>
                                 <div id="info_loading"></div>
                                 <h1> Mohon Tunggu, Sedang Proses ...</h1>
                             </center>

                         </div>

                     </div>
                 </div>
             </div>

             </div>
             <!-- Footer -->
             <div class="footer text-muted">
                 &copy; 2025 <a href="#">Sistem Magang Undiksha - UPT TIK</a>
             </div>
             <!-- /footer -->

             <div id="respon">

             </div>
             <script type="text/javascript">
                 function blockUI(item, loading_ui = false, url_loading = '') {
                     if (loading_ui) {
                         downloadComplete = false;
                         download_progress = true;
                         url_progress_loading = url_loading;
                     }

                     $(item).block({
                         message: '<center id="loading_ui"><i class="icon-spinner3 icon-3x spinner"></i><b>Loading <span id="c_loading_p"></span></b></center> ',
                         css: {
                             border: 'none',
                             width: '14px',
                             backgroundColor: 'none'
                         },
                         overlayCSS: {
                             backgroundColor: '#fff',
                             opacity: 0.6,
                             cursor: 'wait'
                         }
                     });
                 }

                 function unblockUI(item) {
                     downloadComplete = true;
                     download_progress = false;
                     $(item).unblock();
                 }
             </script>
         </div>

         <!-- /content area -->

     </div>
     <!-- /main content -->

 </div>
 <!-- /page content -->

</div>
<!-- /page container -->
@endsection

