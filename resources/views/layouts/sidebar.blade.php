<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


<title>Magang - Undiksha</title>

<!-- Favicon -->
<link rel="shortcut icon" href="assets/logo.png">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet">

<!-- Global Stylesheets -->
<link href="assets/cp/css/icons/icomoon/styles.css" rel="stylesheet">
<link href="assets/cp/css/bootstrap.css" rel="stylesheet">
<link href="assets/cp/css/core.css" rel="stylesheet">
<link href="assets/cp/css/components.css" rel="stylesheet">
<link href="assets/cp/css/colors.css" rel="stylesheet">
<link href="assets/cp/css/bootstrap-switch.min.css" rel="stylesheet">
<link href="assets/bs/bootstrap-switch.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.2/dist/sweetalert2.min.css" rel="stylesheet">

<!-- Core JS Files -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="assets/cp/js/plugins/loaders/pace.min.js"></script>
<script src="assets/cp/js/plugins/loaders/blockui.min.js"></script>

<!-- Plugin JS Files -->
<script src="assets/cp/js/plugins/forms/styling/switchery.min.js"></script>
<script src="assets/cp/js/plugins/forms/styling/uniform.min.js"></script>
<script src="assets/cp/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
<script src="assets/cp/js/plugins/forms/selects/select2.min.js"></script>
<script src="assets/cp/js/plugins/ui/moment/moment.min.js"></script>
<script src="assets/cp/js/plugins/pickers/daterangepicker.js"></script>
<script src="assets/cp/js/plugins/ui/nicescroll.min.js"></script>
<script src="assets/cp/js/plugins/tables/datatables/datatables.min.js"></script>
<script src="assets/cp/js/plugins/tables/datatables/extensions/responsive.min.js"></script>
<script src="assets/cp/js/plugins/buttons/spin.min.js"></script>
<script src="assets/cp/js/plugins/buttons/ladda.min.js"></script>
<script src="assets/cp/js/plugins/notifications/pnotify.min.js"></script>
<script src="assets/cp/js/plugins/notifications/sweet_alert.min.js"></script>
<script src="assets/bs/bootstrap-switch.min.js"></script>
<script src="assets/cp/js/plugins/ui/ripple.min.js"></script>
<script src="assets/cp/js/plugins/loaders/progressbar.min.js"></script>

<!-- CDN Plugin JS -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.2/dist/sweetalert2.all.min.js"></script>

<!-- App Scripts -->
<script src="assets/cp/js/core/app.js"></script>
<script src="assets/cp/js/pages/layout_fixed_custom.js"></script>
<script src="assets/cp/js/pages/datatables_responsive.js"></script>
<script src="assets/cp/js/pages/form_multiselect.js"></script>

    <script type="text/javascript">
        var base_url_core = 'https://magang.undiksha.ac.id/';
        var base_url = 'https://magang.undiksha.ac.id/cp/beranda';
        var controler = 'cp/beranda';
        var url_progress_loading = "https://magang.undiksha.ac.id/cp/sinkron/cek_kirim";
    </script>

    <script type="text/javascript" src="assets/cp/js/core-function.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

        });
    </script>

<script>
    var currentPath = window.location.pathname;
    var menuItems = document.querySelectorAll('.menu li');

  
    menuItems.forEach(function(item) {
        var link = item.querySelector('a');
        if (link && link.getAttribute('href') === currentPath) {
            item.classList.add('active'); 
        }
    });
</script>


<script>
window.addEventListener('load', function() {
  const loadingBarContainer = document.getElementById('loading-bar-container');
  setTimeout(() => {
    loadingBarContainer.style.transition = 'opacity 0.5s ease';
    loadingBarContainer.style.opacity = 0;
    setTimeout(() => loadingBarContainer.style.display = 'none', 500);
  }, 1500);
});
  </script>
</head>

<body class="navbar-top">
<div id="loading-bar-container">
  <div id="loading-bar"></div>
</div>

    <style type="text/css" media="screen">
        .media {
            margin-top: 5px;
            padding-right: 15;
            padding-left: 15px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
    </style>
    <!-- Main navbar -->
    <div class="navbar navbar-default navbar-fixed-top header-highlight">
        <div class="navbar-header">
            <a class="navbar-brand" target="_blank" href="https://magang.undiksha.ac.id/">
               <img src="assets/logo-magang.png" style="float: left;margin-right: 5px;height: 20px;margin-top: -1px;" alt="">
			 

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
            </ul>
        </div>

        <div class="navbar-collapse collapse" id="navbar-mobile">
            <ul class="nav navbar-nav">
                <li><a id="btn_menu_sidebar" class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-earth"></i>
						<span class="visible-xs-inline-block position-right">Navigasi Sistem</span>
						<span class="status-mark border-pink-300"></span>
					</a>

                    <div class="dropdown-menu dropdown-content">
                        <div class="dropdown-content-heading">
                            Navigasi Sistem
                        </div>

                        <ul class="media-list dropdown-content-body width-350">

                            <div class="col-sm-4 text-center">
                                <a href="https://mahasiswa.undiksha.ac.id/sso_login" target="_blank">
                                  
                                    <img height="80" width="80" src="https://sso.undiksha.ac.id/cas/assets/images/sistem/1987_graduate.png" class="" alt="PDM">
                               
                               
                                  <span style="color: #333; font-size: 12px;" class="text-center">
                                    PDM                                  </span>
                                </a>

                            </div>

                            <div class="col-sm-4 text-center">
                                <a href="#" target="_blank">
                                  
                                    <img height="80" width="80" src="https://sso.undiksha.ac.id/cas/assets/images/sistem/6915_128x128.png" class="" alt="Sistem Notifikasi ">
                               
                               
                                  <span style="color: #333; font-size: 12px;" class="text-center">
                                    Sistem Notifikasi                                   </span>
                                </a>

                            </div>

                            <div class="col-sm-4 text-center">
                                <a href="https://plaza.undiksha.ac.id/sso/login" target="_blank">
                                  
                                    <img height="80" width="80" src="https://sso.undiksha.ac.id/cas/assets/images/sistem/564_tutorial-preview-large-1.png" class="" alt="Plaza (Smart Payment)">
                               
                               
                                  <span style="color: #333; font-size: 12px;" class="text-center">
                                    Plaza (Smart Payment)                                  </span>
                                </a>

                            </div>

                            <div class="col-sm-4 text-center">
                                <a href="https://kkn.undiksha.ac.id/userpage" target="_blank">
                                  
                                    <img height="80" width="80" src="https://sso.undiksha.ac.id/cas/assets/images/sistem/7790_256.png" class="" alt="KKN Undiksha">
                               
                               
                                  <span style="color: #333; font-size: 12px;" class="text-center">
                                    KKN Undiksha                                  </span>
                                </a>

                            </div>

                            <div class="col-sm-4 text-center">
                                <a href="https://kuisioner.undiksha.ac.id/login/sso" target="_blank">
                                  
                                    <img height="80" width="80" src="https://sso.undiksha.ac.id/cas/assets/images/sistem/4539_kuisioner.png" class="" alt="Kuisioner UNDIKSHA">
                               
                               
                                  <span style="color: #333; font-size: 12px;" class="text-center">
                                    Kuisioner UNDIKSHA                                  </span>
                                </a>

                            </div>

                            <div class="col-sm-4 text-center">
                                <a href="https://magang.undiksha.ac.id/cp/login/sso" target="_blank">
                                  
                                    <img height="80" width="80" src="https://sso.undiksha.ac.id/cas/assets/images/sistem/1056_work.png" class="" alt="Magang">  
                                  <span style="color: #333; font-size: 12px;" class="text-center">
                                    Magang                                  </span>
                                </a>
                            </div>
                        </ul>
                       
                    </div>
                </li>
                <li>
                    <p class="navbar-text"><span class="label bg-primary"> S1 Sistem Informasi</span></p>
                </li>
            </ul>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="https://drive.google.com/file/d/1aSh1PNd0rXGcGJqtOnVMZ5_v_tFmqVy1/view?usp=sharing" target="_blank" >
							<i class="icon-help"></i>
							<span>USER MANUAL</span>
						</a>
                    </li>
                    <li class="dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-bell2"></i>
							<span class="visible-xs-inline-block position-right">Notifikasi E-Ganesha</span>
							<span class="status-mark border-pink-300"></span>
						</a>

                        <div class="dropdown-menu dropdown-content">
                            <div class="dropdown-content-heading">
                                Notifikasi E-Ganesha
                                <ul class="icons-list">
                                    <li><a href="#"></a></li>
                                </ul>
                            </div>
                            <ul class="media-list dropdown-content-body width-350" id="content_notifikasi" style="padding:0px">
                                <li class="media">
                                    <div class="media-body">
                                        <a href="#">Sistem .....</a> Tes Isi ........
                                        <div class="media-annotation">4 minutes ago</div>
                                    </div>
                                </li>


                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /main navbar -->



    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">


            <!-- Main sidebar -->
            <div class="sidebar sidebar-main sidebar-fixed">
                <div class="sidebar-content">




                    <!-- User menu -->
                    <div class="sidebar-user-material">
                        <div class="category-content" style="padding:0px">
                            <div style="padding:20px;background-color: rgba(0, 0, 0, 0.4);">
                                <div class="sidebar-user-material-content">
                                    <a href="#"><img src="assets/logo.png" class="img-circle img-responsive" alt=""></a>
                                    <h6>Mahasiswa</h6>
                                    <span class="text-size-small">Gede Contoh</span><br>
                                    <span class="text-size-small">contoh@undiksha.ac.id </span>
                                </div>

                                <div class="sidebar-user-material-menu">
                                    <a href="/"><span class="menu-text"><i class="icon-switch2"></i> <span class="menu-text">Logout</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="navigation-wrapper collapse" id="user-nav">
                            <ul class="navigation">
                                <li><a href="https://magang.undiksha.ac.id/profil"><i class="icon-user-plus"></i> <span>Profil</span></a></li>
                                <li><a href="https://magang.undiksha.ac.id/pengaturan"><i class="icon-cog5"></i> <span>Pengaturan</span></a></li>
                                <li><a href="https://magang.undiksha.ac.id/cp/logout"><i class="icon-switch2"></i> <span>Logout</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /user menu -->


                    <!-- Main navigation -->
                    <div class="sidebar-category sidebar-category-visible">
                        <div class="category-content no-padding">
                            <ul class="navigation navigation-main navigation-accordion">
                                    <li class="{{ request()->is('admin') ? 'active' : '' }}">
                                        <a href="/admin"><i class="icon-home4"></i><span class="menu-text">Dashboard</span></a>
                                    </li>
                                    <li class="{{ request()->is('admin_tempat') ? 'active' : '' }}">
                                        <a href="/admin_tempat"><i class="icon-location4"></i><span class="menu-text">Tempat Magang</span></a>
                                    </li>
                                    <li class="{{ request()->is('admin_pembimbing') ? 'active' : '' }}">
                                        <a href="/admin_pembimbing"><i class="icon-user-tie"></i><span class="menu-text">Pembimbing, Penguji, dan Mentor Magang</span></a>
                                    </li>
                                    <li class="{{ request()->is('admin_laporan') ? 'active' : '' }}">
                                        <a href="/admin_laporan"><i class="icon-book3"></i><span class="menu-text">Surat, Proposal Magang, dan Laporan Akhir Magang</span></a>
                                    </li>
                                    <li class="{{ request()->is('jurnal') ? 'active' : '' }}">
                                        <a href="/jurnal"><i class="icon-bookmark"></i><span class="menu-text">Jurnal Harian Magang</span></a>
                                    </li>
                                </ul>
                        </div>
                    </div>
                    <!-- /main navigation -->

                </div>
            </div>
            <!-- /main sidebar -->

            @yield('konten')
</body>
</html>