@extends('layouts.menu')
@section('content')

<!-- Page container -->
<div class="page-container">

<div class="text-center" style="color: #00325e; animation: fadeInUp 1s ease-out; padding-bottom: 40px;">
    <h3 class="offline-title f-header">Tempat Magang</h3>
    <h4>Data Yang ditampilkan adalah Tempat Magang berdasarkan jurusan.</h4>
</div>


    <!-- Page content -->
    <div class="page-content">

     
        <!-- Main content -->
    
                

<style type="text/css" media="screen">
.pac-container {
background-color: #FFF;
z-index: 10000000;
position: fixed;
display: inline-block;
float: left;
}
.controls {
margin-top: 10px;
border: 1px solid transparent;
border-radius: 2px 0 0 2px;
box-sizing: border-box;
-moz-box-sizing: border-box;
height: 32px;
outline: none;
box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
}

#searchInput {
background-color: #fff;
font-family: Roboto;
font-size: 15px;
font-weight: 300;
margin-left: 12px;
padding: 0 11px 0 13px;
text-overflow: ellipsis;
width: 50%;
}
#searchInput:focus {
border-color: #4d90fe;
}

</style>

<div class="content-wrapper">
<!-- Header area -->



<!-- Content area -->
<div class="content">

    <!-- Dashboard content -->
    <div class="panel panel-success" style="box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); border-radius: 8px;">
        <div class="panel-heading" style="background-color: #034081; color: white;">
            <h5 class="panel-title">Data Tempat Magang</h5>
            <div class="heading-elements">
                <button onclick="reload_tabel();" class="btn btext-warning-600 btn-flat btn-icon legitRipple" 
                        data-popup="tooltip" data-placement="bottom" 
                        data-original-title="Refresh Tabel">
                    <i class="icon-reload-alt"></i>
                </button>
            </div>
        </div>

        <div class="table-responsive">
            <table id="example" class="table datatable-responsive display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Tempat</th>
                <th>Alamat</th>
                <th>Jurusan</th>
                <th>Peta</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><center>1</center></td>
                <td>Kantor Imigrasi Kelas II TPI Singaraja</td>
                <td>l. Seririt, Desa Pemaron, Singaraja, Pemaron, Kec. Buleleng, Kabupaten Buleleng, Bali 81119</td>
                <td>Ilmu Hukum (S1)</td>
               <td>
  <a class="btn btn-xs btn-raised legitRipple" 
     href="#"
     onclick="get_map('2aae7f5b1874aa3b63e5480557282175b4f4b9de638afb5c210b98f23d6348dadb16bc9ac520465b916e670a5cf7ecce77b1c496dda7fdde48334a62b04c6ecdcyNDSbfqyhEGWpZ47p.HjmU5Egw0wv6QeJSz8IQhkXg-')" 
     style="background-color: #0564a0; color: white; border: none;"
     data-popup="tooltip" 
     data-placement="bottom" 
     data-original-title="Kordinat Lokasi Tempat Magang">
      <i class="icon-location4"></i>
  </a>
</td>
            </tr>
            <tr>
                <td><center>2</center></td>
                <td>Pengadilan Negeri Singaraja Kelas I B</td>
                <td>JL. Kartini, No. 2, Singaraja, Buleleng, Bali, Kaliuntu, Buleleng Sub-District, Buleleng Regency, Bali 81116</td>
                <td>Ilmu Hukum (S1)</td>
                <td>
                    <a class="btn btn-primary btn-xs btn-raised legitRipple" href="#" onclick="get_map('0a8d3490baab2b04165019cb6057760b23fb5b08eb3abdd5ca1a79336250d7a39eee704f4a33e499a50a0b3d2fd68b0bc42fd2b55062dda8b3cc2623767e1c7cr.Z.o4jermKtO~.6O.Nk.oKGMlTZsyTF4v0NwbUsppo-')" data-popup="tooltip" data-placement="bottom" data-original-title="Kordinat Lokasi Tempat Magang" style="background-color: #0564a0; color: white; border: none;">
                        
                      <i class="icon-location4"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td><center>3</center></td>
                <td>Kantor Pertanahan Kabupaten Buleleng</td>
                <td>Jalan Dewi Sartika No. 24, Kaliuntu, Singaraja</td>
                <td>Ilmu Hukum (S1)</td>
                <td>
                    <a class="btn btn-primary btn-xs btn-raised legitRipple" href="#" onclick="get_map('eb6753a21164ff3020f794ece79ba3fd0360e29295833be9342f1af9f911a69de53f1d2cafe49c24a8b99d8e03a08f51de53abf377c4c66eb9561f6955689c36.IKuoeGcBY5ArC1W5ddhnj9EHIdHxVvfBzrFZuXxTvo-')" data-popup="tooltip" data-placement="bottom" data-original-title="Kordinat Lokasi Tempat Magang" style="background-color: #0564a0; color: white; border: none;">
                        <i class="icon-location4"></i>
                    </a>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Nama Tempat</th>
                <th>Alamat</th>
                <th>Jurusan</th>
                <th>Peta</th>
            </tr>
        </tfoot>
    </table>
</div>


    </div>


<!-- Primary modal -->
<div id="modal-map" class="modal fade" data-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary" style="background-color: #007dca; color: white;">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h5 class="modal-title"><i class="icon-map4"></i> Peta Lokasi Tempat Magang</h5>
      </div>

     <div class="modal-body">
  <div class="alert alert-custom-blue alert-styled-left position-relative">
    <button type="button" class="close" data-dismiss="alert" style="position: absolute; top: 12px; right: 16px;">×</button>
    <strong>Info:</strong> Berikut ini adalah peta lokasi tempat magang</span>.
  </div>
</div>

        <center id="loading_map" style="display:none;">
          <h1><i class="icon-spinner2 icon-2x spinner"></i></h1>
        </center>

        <div id="map" style="height: 400px; border-radius: 8px;"></div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">
          <i class="icon-cancel-circle2"></i> Tutup
        </button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" />

<script>
  function getRandomLatLng() {
    const baseLat = -8.65;
    const baseLng = 115.22;
    const lat = baseLat + (Math.random() - 0.5) * 0.1;
    const lng = baseLng + (Math.random() - 0.5) * 0.1;
    return { lat, lng };
  }

let map;
let mapInitialized = false;

function get_map(id) {
  $('#modal-map').modal('show');

  $('#modal-map').one('shown.bs.modal', function () {
    if (!mapInitialized) {
      $('#loading_map').show();

      setTimeout(() => {
        $('#loading_map').hide();

        const pos = getRandomLatLng();

        const lat = pos.lat.toFixed(6);
        const lng = pos.lng.toFixed(6);

        map = L.map('map').setView([lat, lng], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([lat, lng]).addTo(map)
          .bindPopup('<b>Lokasi</b><br>Koordinat: ' + lat + ', ' + lng)
          .openPopup();

        mapInitialized = true;
      }, 800);
    } else {
      $('#loading_map').hide();
    }
  });
}
</script>




<!-- Footer -->
<footer class="text-center text-muted" style="margin-top: 50px; margin-bottom: 0px font-size: 13px; color:black;" >
    &copy; 2025 <a href="https://upttik.undiksha.ac.id/" target="_blank" style="color: #0396FF;">UPT-TIK UNDIKSHA</a> &nbsp;&nbsp;|&nbsp;&nbsp;
    <a href="http://lp3m.undiksha.ac.id/" target="_blank" style="color: #0396FF;">LP3M UNDIKSHA</a>
  </footer>

<!-- /footer -->
            </div>
               
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->
@endsection