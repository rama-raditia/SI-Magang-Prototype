
@extends('layouts.sidebar')
@section('konten')
       
       <!-- Main content -->

            <div class="content-wrapper">
  <!-- Header area -->
  <div class="page-header-content">
    <div class="page-title">
      <h4><i class="icon-home position-left"></i> <span class="text-semibold">Dashboard</span> - Selamat datang Di Sistem Magang Undiksha</h4>
      <a class="heading-elements-toggle"><i class="icon-more"></i></a>
    </div>
  </div>

  <!-- Content area -->
  <div class="content" style="padding-left: 20px; padding-right: 20px;">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading d-flex justify-content-between align-items-center">
            <div class="panel-title">
              <i class="fas fa-user"></i> INFO DATA USER
              <span class="label label-success" style="margin-left: 8px;">Mahasiswa</span>
            </div>
            <div class="heading-elements">
              <ul class="icons-list" style="margin: 0; padding: 0; list-style: none;">
                <li><a data-action="collapse" href="#" style="color: #fff;"><i class="fas fa-minus"></i></a></li>
              </ul>
            </div>
          </div>

          <div class="ktp-card row" style="padding: 15px;">
            <div class="col-lg-3 col-md-4 text-center">
              <div class="ktp-photo">
                <img src="assets/cp/images/user_icon.png" alt="Foto Profil" class="img-fluid" />
              </div>
            </div>

            <div class="col-lg-9 col-md-8 ktp-data">
              <div class="ktp-row">
                <div class="ktp-label"><i class="fas fa-user"></i> Nama Lengkap</div>
                <div class="ktp-value">Gede Contoh</div>
              </div>
              <div class="ktp-row">
                <div class="ktp-label"><i class="fas fa-id-card"></i> NIM</div>
                <div class="ktp-value">007</div>
              </div>
              <div class="ktp-row">
                <div class="ktp-label"><i class="fas fa-building"></i> Fakultas</div>
                <div class="ktp-value">Fakultas Teknik dan Kejuruan</div>
              </div>
              <div class="ktp-row">
                <div class="ktp-label"><i class="fas fa-graduation-cap"></i> Jurusan</div>
                <div class="ktp-value">Sistem Informasi (SI) (S1)</div>
              </div>
              <div class="ktp-row">
                <div class="ktp-label"><i class="fas fa-book"></i> Prodi</div>
                <div class="ktp-value">Sistem Informasi (SI) (S1)</div>
              </div>
              <div class="ktp-row">
                <div class="ktp-label"><i class="fas fa-phone"></i> No HP</div>
                <div class="ktp-value">081234567890</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row" style="margin-top: 10px;">
      <div class="col-md-12">
        <div class="panel panel-default" style="padding: 15px;">
          <hr style="margin: 10px 0;" />
          <div class="row">
            <div class="col-sm-12">
              <div class="alert" style="
                  background-color: #ffffff;
                  color: #2c3e50;
                  border-left: 4px solid #007bff;
                  padding: 12px 16px;
                  border-radius: 6px;
                  display: flex;
                  align-items: center;
                  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                  font-size: 14px;
                ">
                <i class="icon-users" style="font-size: 18px; color: #007bff; margin-right: 10px;"></i>
                <span><strong>Rekan Kerja</strong> yang berada di tempat magang ini:</span>
              </div>
            </div>
          </div>

          <table class="table table-striped table-bordered table-hover datatable-responsive" style="margin-top: 10px;">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>No HP</th>
              </tr>
            </thead>
            <tbody>
              <!-- Isi data -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


                <script type="text/javascript" src="assets/cp/js/pages/dashboard.js"></script>
                <script>
                    // $("#frm_act").attr("action", base_url + "/update_blog");
                    table = $('.datatable-responsive').DataTable({});
                </script>
                

                <!-- Loading Sinkron -->
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
                <!-- Loading Sinkron -->


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
