<!DOCTYPE html><html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>Magang Undiksha </title>
    <!-- App Favicon -->
    <link rel="shortcut icon" href="images/logo.png">		
    <meta name="author" content="Rinocomp">
    <meta name="keywords" content="magang, undiksha, Magang Undiksha, sistem informasi Magang Undiksha">
    <meta name="description" content="Sistem Informasi Magang Universitas Pendidikan Ganesha (Undiksha) Singaraja">

    <meta property="og:url" content="/">
    <meta property="og:type" content="website">
    <meta property="og:title" content=" - Magang Undiksha ">
    <meta property="og:description" content="Web Magang Undiksha">
    <meta property="og:image" content="images/placeholder.png">

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/core.css" rel="stylesheet" type="text/css">
    <link href="css/components.css" rel="stylesheet" type="text/css">
    <link href="css/colors.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- /global stylesheets -->
    <!-- Core JS files -->
    <script type="text/javascript" src="js/pace.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/blockui.min.js"></script>
    <script type="text/javascript" src="js/nicescroll.min.js"></script>
    <script type="text/javascript" src="js/drilldown.js"></script>
    <!-- /core JS files -->
    <!-- Theme JS files -->
    <script type="text/javascript" src="js/d3.min.js"></script>
    <script type="text/javascript" src="js/d3_tooltip.js"></script>
    <script type="text/javascript" src="js/switchery.min.js"></script>
    <script type="text/javascript" src="js/uniform.min.js"></script>
    <script type="text/javascript" src="js/bootstrap_multiselect.js"></script>
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="js/daterangepicker.js"></script>
    <script type="text/javascript" src="js/datatables.min.js"></script>
    <script type="text/javascript" src="js/responsive.min.js"></script>
    <script type="text/javascript" src="js/select2.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/dashboard_boxed.js"></script>
    <script type="text/javascript" src="js/ripple.min.js"></script>
    <script type="text/javascript" src="js/datatables_responsive.js"></script>

    <!-- /theme JS files -->



    
    <script>
    function menu_aktif(newURL) {
    var str = location.href.toLowerCase();
    str = newURL;
    var item  = $('ul li a[href="' + str  + '"]');
    if(item.length){
    $("li.active").removeClass("active");
    item.parent().addClass("active");
    }
    };

      $.extend( $.fn.dataTable.defaults, {
autoWidth: false,
responsive: true,
dom: '<"datatable-header"fl><"datatable-scroll-wrap"t><r><"datatable-footer"ip>',
language: {
    processing: "Mohon Tunggu",
    search: '<span>Filter:</span> _INPUT_',
    searchPlaceholder: 'Type to filter...',
    lengthMenu: '<span>Show:</span> _MENU_',
    paginate: { 'first': 'First', 'last': 'Last', 'next': '�', 'previous': '�' }
},
drawCallback: function () {
    $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').addClass('dropup');
},
preDrawCallback: function() {
    $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').removeClass('dropup');
}
});
    </script>



<script>
  window.onload = function() {
    document.getElementById('welcome-title').style.opacity = 1;
    document.getElementById('welcome-title').style.transform = 'translateY(0)';

    setTimeout(() => {
      document.getElementById('welcome-subtitle').style.opacity = 1;
      document.getElementById('welcome-subtitle').style.transform = 'translateY(0)';
    }, 500);  
  };
  </script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const statsContainer = document.querySelector('.stats-container');
    const countTempat = document.getElementById('count-tempat');
    const countMahasiswa = document.getElementById('count-mahasiswa');
    const countJurusan = document.getElementById('count-jurusan');

    function animateCount(el, start, end, duration) {
      let startTime = null;

      function step(timestamp) {
        if (!startTime) startTime = timestamp;
        const progress = Math.min((timestamp - startTime) / duration, 1);
        el.textContent = Math.floor(progress * (end - start) + start);
        if (progress < 1) {
          window.requestAnimationFrame(step);
        }
      }
      window.requestAnimationFrame(step);
    }

    function onScroll() {
      const rect = statsContainer.getBoundingClientRect();
      const windowHeight = window.innerHeight || document.documentElement.clientHeight;

      if (rect.top <= windowHeight * 0.85) {
        statsContainer.classList.add('visible');
        animateCount(countTempat, 0, 2408, 1500);
        animateCount(countMahasiswa, 0, 6926, 1500);
        animateCount(countJurusan, 0, 17, 1500);
        window.removeEventListener('scroll', onScroll);
      }
    }

    window.addEventListener('scroll', onScroll);

 
    onScroll();
  });

  
</script>



<script>
$(document).ready(function() {
    if (!$.fn.dataTable.isDataTable('#example')) {
        $('#example').DataTable({
            "responsive": true,
            "language": {
                "oPaginate": {
                    "sNext": "<i class='fas fa-chevron-right'></i>", // Tombol Next
                    "sPrevious": "<i class='fas fa-chevron-left'></i>" // Tombol Previous
                }
            }
        });
        
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

<style>
  .stats-container {
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 0.8s ease, transform 0.8s ease;
  }
  .stats-container.visible {
    opacity: 1;
    transform: translateY(0);
  }

 #map {
    width: 100%;
    height: 400px; 
  }
  .sidebar-fixed.affix {
            top:120px;
        }
        .g-header {
            background-image: linear-gradient( 135deg, #3C8CE7 10%, #00EAFF 100%);
        }
        .f-header {
            font-size: 32px;margin:0; font-weight: bold;
        }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(30px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }
    

    .text-center {
        padding-bottom: 50px; 
    }

.table-responsive {
        padding: 20px;
    }

.alert-custom-blue {
    background-color: #e6f0fb;        
    border-left: 5px solid #007bff;   
    color: #004085;                   
    padding: 16px 20px 16px 20px;
    border-radius: 6px;
    font-size: 15px;
    line-height: 1.5;
    box-shadow: 0 2px 6px rgba(0, 123, 255, 0.1);
    margin-bottom: 20px;
    position: relative;
}

.alert-custom-blue .text-highlight {
    font-weight: 600;
    color: #0056b3; 
}


.alert-custom-blue {
    background-color: #e6f0fb;
    border-left: 5px solid #007bff;
    color: #004085;
    padding: 20px 24px;
    border-radius: 6px;
    font-size: 15px;
    line-height: 1.5;
    box-shadow: 0 2px 6px rgba(0, 123, 255, 0.1);
    margin-bottom: 20px;
    position: relative;
}

.alert-custom-blue .text-icon-blue {
    color: #007bff;
}

.media-heading {
    font-size: 16px;
    margin-bottom: 6px;
}

@media (max-width: 768px) {
    .stack-media-on-mobile {
        flex-direction: column;
        align-items: flex-start;
    }

    .media-left.media-middle {
        margin-bottom: 10px;
    }
}
#loading-bar-container {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 7px;
  background-color: rgba(255, 255, 255, 0.3);
  z-index: 9999;
  overflow: hidden;
}

#loading-bar {
  height: 7px;
  width: 0%;
  background: linear-gradient(90deg, #ffffff, #a8d0f5); /* hijau toska gradasi */
  animation: loading-animation 2s ease-in-out infinite;
  transform-origin: left;
  border-radius: 1.5px;
  box-shadow: 0 0 8px #2583fd;
}



@keyframes loading-animation {
  0% {
    width: 0%;
    opacity: 1;
  }
  50% {
    width: 70%;
    opacity: 0.8;
  }
  100% {
    width: 100%;
    opacity: 0;
  }
}
  </style>

</head>

<body class="layout-boxed navbar-top-md-md" style="background-color: #f2f6f9; font-family: 'Roboto', sans-serif;" >
<div id="loading-bar-container">
  <div id="loading-bar"></div>
</div>
<!-- Fixed Navbar Wrapper -->
<nav class="navbar navbar-default navbar-fixed-top" style="background: #023882; border: none; height: 70px;">
  <div class="container-fluid navbar-boxed" style="height: 70px;">

    <!-- Brand and toggle get grouped -->
    <div class="navbar-header" style="height: 70px; display: flex; align-items: center;">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main" aria-expanded="false" aria-controls="navbar-main" style="margin-top: 12px;">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar" style="background-color: white;"></span>
        <span class="icon-bar" style="background-color: white;"></span>
        <span class="icon-bar" style="background-color: white;"></span>
      </button>
      <a class="navbar-brand" href="https://magang.undiksha.ac.id/" 
         style="color: #fff; font-weight: 700; font-size: 22px; display: flex; align-items: center; gap: 8px; text-shadow: 0 2px 4px rgba(0,0,0,0.3); height: 70px; line-height: 70px;">
        <i class="fas fa-briefcase" style="font-size: 24px;"></i>Magang <span style="font-weight: 300;">Undiksha</span>
      </a>
    </div>

    <!-- Navbar Links -->
    <div id="navbar-main" class="navbar-collapse collapse" style="height: 70px; display: flex; align-items: center;">
      <ul class="nav navbar-nav" style="height: 70px; display: flex; align-items: center;">
        <li class="@if(request()->is('/')) active @endif">
          <a href="/" style="color: #fff; font-weight: 500; padding-top: 20px; padding-bottom: 20px;">
            <i class="icon-display4 position-left"></i> Home
          </a>
        </li>
        <li class="@if(request()->is('pengumuman')) active @endif">
          <a href="/pengumuman" style="color: #fff; font-weight: 500; padding-top: 20px; padding-bottom: 20px;">
            <i class="icon-info22 position-left"></i> Pengumuman
          </a>
        </li>
        <li class="@if(request()->is('tempat_pkl')) active @endif">
          <a href="/tempat_pkl" style="color: #fff; font-weight: 500; padding-top: 20px; padding-bottom: 20px;">
            <i class="icon-location3 position-left"></i> Tempat Magang
          </a>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right" style="height: 70px; display: flex; align-items: center;">
        <li>
          <a href="https://drive.google.com/file/d/1aSh1PNd0rXGcGJqtOnVMZ5_v_tFmqVy1/view?usp=sharing" target="_blank" style="color: #fff; font-weight: 500; padding-top: 20px; padding-bottom: 20px;">
            <i class="icon-help position-left"></i> Manual
          </a>
        </li>
        <li>
          <a href="/admin" style="color: #fff; font-weight: 500; padding-top: 20px; padding-bottom: 20px;">
            <i class="icon-user-lock position-left"></i> Login
          </a>
        </li>
      </ul>
    </div>

  </div>
</nav>



<!-- Page Content -->
@yield('content')

</body>

</html>