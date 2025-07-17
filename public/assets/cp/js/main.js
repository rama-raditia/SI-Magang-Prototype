// Variabel global URL
var base_url_core = 'https://magang.undiksha.ac.id/';
var base_url = 'https://magang.undiksha.ac.id/cp/beranda';
var controler = 'cp/beranda';
var url_progress_loading = "https://magang.undiksha.ac.id/cp/sinkron/cek_kirim";

$(document).ready(function() {
  // Kode jQuery untuk inisialisasi halaman
});

// Aktifkan menu sesuai URL saat ini
var currentPath = window.location.pathname;
var menuItems = document.querySelectorAll('.menu li');

menuItems.forEach(function(item) {
  var link = item.querySelector('a');
  if (link && link.getAttribute('href') === currentPath) {
    item.classList.add('active');
  }
});

// Loading bar fade out setelah load
window.addEventListener('load', function() {
  const loadingBarContainer = document.getElementById('loading-bar-container');
  setTimeout(() => {
    loadingBarContainer.style.transition = 'opacity 0.5s ease';
    loadingBarContainer.style.opacity = 0;
    setTimeout(() => loadingBarContainer.style.display = 'none', 500);
  }, 1500);
});

// Fungsi aktifkan menu sesuai URL
function menu_aktif(newURL) {
  var str = location.href.toLowerCase();
  str = newURL;
  var item  = $('ul li a[href="' + str  + '"]');
  if(item.length){
    $("li.active").removeClass("active");
    item.parent().addClass("active");
  }
}

// Set default DataTable (plugin jQuery DataTables)
$.extend($.fn.dataTable.defaults, {
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

$(document).ready(function() {
  if (!$.fn.dataTable.isDataTable('#example')) {
    $('#example').DataTable({
      responsive: true,
      language: {
        oPaginate: {
          sNext: "<i class='fas fa-chevron-right'></i>",
          sPrevious: "<i class='fas fa-chevron-left'></i>"
        }
      }
    });
  }
});

// Animasi fade-in + slide-up untuk judul & subtitle saat load halaman
window.onload = function() {
  document.getElementById('welcome-title').style.opacity = 1;
  document.getElementById('welcome-title').style.transform = 'translateY(0)';

  setTimeout(() => {
    document.getElementById('welcome-subtitle').style.opacity = 1;
    document.getElementById('welcome-subtitle').style.transform = 'translateY(0)';
  }, 500);
};

// Animasi count up pada angka statistik
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
  onScroll(); // langsung cek tanpa scroll juga
});

// Loading bar fade out setelah halaman load
window.addEventListener('load', function() {
  const loadingBarContainer = document.getElementById('loading-bar-container');
  setTimeout(() => {
    loadingBarContainer.style.transition = 'opacity 0.5s ease';
    loadingBarContainer.style.opacity = 0;
    setTimeout(() => loadingBarContainer.style.display = 'none', 500);
  }, 1500);
});
s