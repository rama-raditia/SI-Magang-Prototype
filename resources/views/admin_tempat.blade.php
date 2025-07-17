
@extends('layouts.sidebar')
@section('konten')
       
       <!-- Main content -->

            <div class="content-wrapper">
                <!-- Header area -->
                <div class="page-header-content">
                    <div class="page-title">
                        <h4><span class="text-semibold">Data</span> - Data Tempat Magang</h4>
                        <a class="heading-elements-toggle"><i class="icon-more"></i></a></div>
                </div>
                <!-- Content area -->
                <div class="content">

                    <div class="col-md-12">
                        
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 class="panel-title"><i class="icon-location4"></i> Lokasi Tempat Magang<span class="label label-default position-right"></span> </h6>
                                <div class="heading-elements">
                                  
                                </div>
                            </div>
                            
                          



                            <table class="table ">
                                <tbody>

                                    <tr style="display: none;">
                                        <td style="width: 30%;"><b>Nama Pembimbing  Magang</b></td>
                                        <td> </td>
                                    </tr>
                                    <tr style="display: none;">
                                        <td><b>No HP Pembimbing  Magang</b></td>
                                        <td> </td>

                                    </tr>
                                    <tr>
                                        <td style="width: 30%;"><b>Nama Tempat Magang</b></td>
                                        <td> Kantor Kecamatan Sawan </td>
                                    </tr>

                                    <tr>
                                        <td><b>Alamat</b></td>
                                        <td> Jl. Sangsit Raya, Kerobokan, Kec. Sawan, Kabupaten Buleleng, Bali 81170 </td>
                                    </tr>
                                    <tr>
                                        <td><b>Peta Lokasi</b></td>
                                        <td>
                                            <div id="map" class="map-wrapper content-group-sm"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Kontak</b></td>
                                        <td> 036221745 </td>

                                    </tr>



                                </tbody>
                            </table>


                        </div>
                    </div>

                </div>


                <script type="text/javascript" src="assets/cp/js/pages/dashboard.js"></script>
                <script>
                    table = $('.datatable-responsive').DataTable({});

                    function initMap() {

                        var latng1 = -8.0898077;
                        var long1 = 115.1281483;

                        var map = new google.maps.Map(document.getElementById('map'), {
                            center: {
                                lat: latng1,
                                lng: long1
                            },
                            zoom: 13
                        });

                        var latLng = new google.maps.LatLng(latng1, long1);


                        var infowindow = new google.maps.InfoWindow();

                        var marker = new google.maps.Marker({
                            position: latLng,
                            map: map
                        });

                        map.setCenter(latLng);
                        marker.setPosition(latLng);
                        infowindow.setContent('<div><strong> Kantor Kecamatan Sawan </strong><br>  Jl. Sangsit Raya, Kerobokan, Kec. Sawan, Kabupaten Buleleng, Bali 81170');
                        infowindow.open(map, marker);

                        marker.setVisible(true);


                    }
                </script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGaUKXD69waSE2vExaZzYKNI16QYLDKXY&libraries=places&callback=initMap" async defer></script>

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
