@extends('layouts.sidebar')
@section('konten')
<!-- Main content -->

<!-- CSS tombol -->
<style>
  .button-container {
    display: flex;         
    gap: 10px;             /
    align-items: center;   
  }
  .btn {
    padding: 5px 10px; 
  }
</style>

 <link href="assets/cp/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
 <script type="text/javascript" src="assets/cp/jquery.filer/js/jquery.filer.min.js"></script>
 <div class="content-wrapper">
     <!-- Header area -->

     <div class="page-header-content page-header page-header-defaultborder-bottom-lg border-bottom-primary">
         <div class="page-title">
            <h4> <span class="text-semibold">Jurnal</span> - Mahasiswa Tempat Magang</h4>
         </div>
     </div>

     <!-- Content area -->
     <div class="content">
         <div class="panel panel-default">
             <div class="panel-heading">
                <h5 class="panel-title">Jurnal Mahasiswa Tempat Magang</h5>

                 <div class="heading-elements ">
                     <a href="#" id="openModalBtn" class="act-tambah btn btn-success btn-xs btn-raised legitRipple "><i class="icon-add position-left"></i> Tambah Data</a>
                     <button onclick="reload_page();" class="btn btext-warning-600 btn-flat btn-icon legitRipple" data-popup="tooltip" data-placement="bottom" data-original-title="Refresh Halaman">
    <i class="icon-reload-alt"></i>
</button>

                 </div>
             </div>

             <div class="panel-body" style="padding-top: 0px">



                 <div class="panel-body" style="background-color: #ffffff; padding: 20px; border-radius: 8px;">
    <div style="background-color: #e8f1fb; border-left: 6px solid #007bff; padding: 15px 20px; border-radius: 6px;">
        <div style="display: flex; align-items: center;">
            <!-- Ikon -->
            <i class="icon-info22" style="font-size: 32px; color: #007bff; margin-right: 12px;"></i>
            
            <!-- Judul dan Deskripsi -->
            <div>
                <div style="display: flex; align-items: center;">
                    <h5 style="margin: 0; color: #004085; font-weight: 600;">Info Penting</h5>
                </div>
                <p style="margin: 4px 0 0; color: #333;">
                    Silakan masukkan semua bentuk kegiatan sehari-hari yang dilakukan di Tempat Magang secara singkat dan jelas.
                </p>
            </div>
        </div>
    </div>
</div>

                    <div class="panel-body">
                     <table id="datatable" class="table datatable-responsive">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tempat Magang</th>
                                <th>Tanggal</th>
                                <th>Nama Jurnal</th>
                                <th>Isi Jurnal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
    
    
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Tempat Magang</th>
                                <th>Tanggal</th>
                                <th>Nama Jurnal</th>
                                <th>Isi Jurnal</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                     </table>
                 </div>

 <!-- Modal (Bootstrap 3 Modal) -->
<div id="modal-form" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h5 class="modal-title"> <span id="act_judul"><i class="icon-add"></i> Tambah</span> Mahasiswa Tempat Magang</h5>
        </div>
        <form class="form-horizontal" id="frm_act">
  <div class="modal-body">
    <div class="form-group">
      <label class="control-label col-sm-4">Tanggal Jurnal</label>
      <div class="col-sm-8">
        <input type="date" id="tanggal" class="form-control" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-4">Nama Jurnal</label>
      <div class="col-sm-8">
        <input type="text" id="namaJurnal" class="form-control" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-4">Isi Jurnal</label>
      <div class="col-sm-8">
        <textarea id="isiJurnal" class="form-control" rows="3" required></textarea>
      </div>
    </div>
  </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cancel-circle2"></i> Tutup</button>
            <button type="submit" class="btn btn_submit btn-primary"><i class="icon-check" id="btn_tambah"></i> Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Bootstrap 3 JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- DataTables JS -->
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <!-- DataTables Responsive JS -->
  <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
  <!-- SweetAlert2 JS -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.2/dist/sweetalert2.all.min.js"></script>
  
  <script>
    const table = $('#datatable').DataTable({
    responsive: true,
    language: {
      paginate: {
        previous: '←',
        next: '→'
      }
    }});
  
    // Modal references
    const modal = $('#modal-form');
    const openModalBtn = $('#openModalBtn');
    const frmAct = $('#frm_act');
  
    let editingRow = null;  
  
    openModalBtn.click(function() {
      modal.modal('show'); 
      $('#act_judul').html('<i class="icon-add"></i> Tambah');  
      editingRow = null;  
      clearErrors(); 
    });
  

    function clearErrors() {
      $('#tanggal-error').hide();
      $('#namaJurnal-error').hide();
      $('#isiJurnal-error').hide();
    }
  

    frmAct.submit(function(event) {
      event.preventDefault();

      clearErrors();
  
      const tanggal = $('#tanggal').val();
      const namaJurnal = $('#namaJurnal').val();
      const isiJurnal = $('#isiJurnal').val();

      let isValid = true;
  
      if (!tanggal) {
        isValid = false;
        $('#tanggal-error').show();  
      }
  
      if (!namaJurnal) {
        isValid = false;
        $('#namaJurnal-error').show();  
      }
  
      if (!isiJurnal) {
        isValid = false;
        $('#isiJurnal-error').show();  
      }
  
      if (!isValid) {
        return; 
      }
  
      const newData = [
        table.rows().count() + 1,  
        "Tempat Magang",          
        tanggal,
        namaJurnal,
        isiJurnal,
        ` 
          <button class="editBtn btn btn-primary btn-xs btn-raised legitRipple"><i class="icon-pencil"></i></button>
          <button class="deleteBtn btn  btn-danger btn-xs btn-raised legitRipple"><i class="icon-trash"></i></button>
        `  
      ];
  
      if (editingRow) {
        
        table.row(editingRow).data(newData).draw();
        $('#act_judul').html('<i class="icon-add"></i> Tambah');  
  
        SweetAlert.fire({
          icon: 'success',
          title: 'Data berhasil diubah!',
          text: 'Perubahan data berhasil disimpan.',
          showConfirmButton: false,
          timer: 1500
        });
  
      } else {

        table.row.add(newData).draw();
  
        SweetAlert.fire({
          icon: 'success',
          title: 'Data berhasil ditambahkan!',
          text: 'Data baru berhasil ditambahkan ke tabel.',
          showConfirmButton: false,
          timer: 1500
        });
      }

      $('#tanggal').val('');
      $('#namaJurnal').val('');
      $('#isiJurnal').val('');
  
   
      modal.modal('hide');
    });
  
 
    $('#datatable tbody').on('click', '.editBtn', function() {
      const row = $(this).closest('tr');
      const rowData = table.row(row).data();
  

      $('#tanggal').val(rowData[2]);
      $('#namaJurnal').val(rowData[3]);
      $('#isiJurnal').val(rowData[4]);
      editingRow = row;  
      $('#act_judul').html('<i class="icon-edit"></i> Edit Data');
      modal.modal('show');
    });
  
 
    $('#datatable tbody').on('click', '.deleteBtn', function() {
      const row = $(this).closest('tr');
      const rowData = table.row(row).data();
  
      SweetAlert.fire({
        title: 'Apakah Anda yakin?',
        text: 'Data ini akan dihapus secara permanen!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Hapus',
        cancelButtonText: 'Batal',
        reverseButtons: true
      }).then((result) => {
        if (result.isConfirmed) {
      
          table.row(row).remove().draw();
  
          SweetAlert.fire({
            icon: 'success',
            title: 'Data berhasil dihapus!',
            text: 'Data telah dihapus dari tabel.',
            showConfirmButton: false,
            timer: 1500
          });
        }
      });
    });
  </script>
                
</div>

<script type="text/javascript" src="assets/cp/js/pages/dashboard.js"></script>
<script>
 
  function reload_page() {
    location.reload();  
  }
  
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

