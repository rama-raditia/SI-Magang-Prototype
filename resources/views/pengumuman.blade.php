@extends('layouts.menu')
@section('content')

 
	<!-- Page header -->
			<div class="text-center" style="color: #00325e; animation: fadeInUp 1s ease-out; padding-bottom: 40px;">
    <h3 class="offline-title f-header">Pengumuman
				</h3>	
				<h4>Pengumuman yang ditampilakan adalah informasi dan kegiatan - kegiatan pelaksanaan Magang. </h4>
			</div>

			</div>

			</div>
	</div>
	<!-- /page header -->


<!-- Page container -->
	<div class="page-container">

      
		<!-- Page content -->
		<div class="page-content">

	 	
			<!-- Main content -->
		
					
<!-- Main sidebar -->
<div class="sidebar sidebar-main sidebar-default">
	<div class="sidebar-fixed">
		<div class="sidebar-content">
			<!-- /sidebar search -->
			<div class="sidebar-category">
				<div class="category-title">
					<span>Pencarian Pengumuman</span>
					<ul class="icons-list">
						<li><a href="#" data-action="collapse"></a></li>
					</ul>
				</div>
				<div class="category-content">
					<form action="" >
						<div class="has-feedback has-feedback-left">
							<input type="search" class="form-control" name="katakunci" value="" placeholder="Pencarian Pengumuman">
							<div class="form-control-feedback">
								<i class="icon-search4 text-size-base text-muted"></i>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- /sidebar search -->
			<!-- Categories -->
			<div class="sidebar-category">
				<div class="category-title">
					<span>Tahun </span>
					<ul class="icons-list">
						<li><a href="#" data-action="collapse"></a></li>
					</ul>
				</div>
				<div class="category-content no-padding">
					<ul class="navigation">

						<li>
							<a href="#">
								<span class="text-muted text-size-small text-regular pull-right">0</span>
								<i class="icon-price-tags"></i>
								2018
							</a>
						</li>

							<li>
							<a href="#">
								<span class="text-muted text-size-small text-regular pull-right">0</span>
								<i class="icon-price-tags"></i>
								2019
							</a>
						</li>

						<li>
							<a href="#">
								<span class="text-muted text-size-small text-regular pull-right">0</span>
									<i class="icon-price-tags"></i>
								2020
							</a>
						</li>

					</ul>
				</div>
			</div>
			<!-- /categories -->

			<!-- Share -->
				<div class="sidebar-category">
					<div class="category-title">
						<span>Bagikan</span>
						<ul class="icons-list">
							<li><a href="#" data-action="collapse"></a></li>
						</ul>
					</div>

					<div class="category-content no-padding-bottom text-center">
						<ul class="list-inline no-margin">
							<li>
			
								<a  id="fb" class="btn bg-indigo btn-icon content-group">
									<i class="icon-facebook"></i>
								</a>
							</li>
							<li>
								<a  id="twitter" class="btn bg-info btn-icon content-group">
									<i class="icon-twitter"></i>
								</a>
							</li>
							
						</ul>
					</div>
				</div>
			<!-- /share -->
	
		</div>
	</div>
</div>
<!-- /main sidebar -->

<script type="text/javascript">

$('#fb').click(function(event) {

		window.open("http://www.facebook.com/sharer/sharer.php?u="+window.location+"&t="+document.title+"",'_blank');
	});
	$('#twitter').click(function(event) {
		window.open("http://www.twitter.com/intent/tweet?url="+window.location+"&text="+document.title+"",'_blank');
	});

    function miniSidebar() {
        if ($('body').hasClass('sidebar-xs')) {
            $('.sidebar-main .sidebar-fixed .sidebar-content').on('mouseenter', function () {
                if ($('body').hasClass('sidebar-xs')) {

                    $('body').removeClass('sidebar-xs').addClass('sidebar-fixed-expanded');
                }
            }).on('mouseleave', function () {
                if ($('body').hasClass('sidebar-fixed-expanded')) {

                 
                    $('body').removeClass('sidebar-fixed-expanded').addClass('sidebar-xs');
                }
            });
        }
    }

    $('.sidebar-main-toggle').on('click', function (e) {

        miniSidebar();
    });


	function initScroll() {
	    $(".sidebar-fixed .sidebar-content").niceScroll({
	        mousescrollstep: 100,
	        cursorcolor: '#ccc',
	        cursorborder: '',
	        cursorwidth: 3,
	        hidecursordelay: 100,
	        autohidemode: 'scroll',
	        horizrailenabled: false,
	        preservenativescrolling: false,
	        railpadding: {
	        	right: 0.5,
	        	top: 1.5,
	        	bottom: 1.5
	        }
	    });
	}


	function resizeScroll() {
		$('.sidebar-fixed .sidebar-content').getNiceScroll().resize();
	}


	function removeScroll() {
		$(".sidebar-fixed .sidebar-content").getNiceScroll().remove();
		$(".sidebar-fixed .sidebar-content").removeAttr('style').removeAttr('tabindex');
	}


    function resizeDetached() {
		$(window).on('scroll', function() {
		  if ($(window).scrollTop() > $(document).height() - $(window).height() - 40) {
		    $('.sidebar-fixed').addClass('fixed-sidebar-space');
		    resizeScroll();
		  }
		  else {
		    $('.sidebar-fixed').removeClass('fixed-sidebar-space');
		    resizeScroll();
		  }
		});
    }


	$('.sidebar-fixed').on('affix.bs.affix', function() {
		initScroll();
		resizeDetached();
		miniSidebar();
	});

 
    $('.sidebar-main .sidebar-fixed').on('affix.bs.affix', function() {
        miniSidebar();
    });

   
    $('.sidebar-fixed').on('affix-top.bs.affix', function() {
		removeScroll();

        $(".sidebar-fixed .sidebar-content").removeAttr('style').removeAttr('tabindex');
    });

	$('.sidebar-fixed').affix({
		offset: {
			top: $('.sidebar-fixed').offset().top - 20 
		}
	});

    $(window).on('resize', function() {
        setTimeout(function() {            
            if($(window).width() <= 768) {

                
                removeScroll();

              
                $(window).off('.affix')
                $('.sidebar-fixed').removeData('affix').removeClass('affix affix-top affix-bottom');
            }
        }, 100);
    }).resize();

  menu_aktif('https://magang.undiksha.ac.id/pengumuman');
</script><!-- Main content -->
<div class="content-wrapper">
	<!-- Post grid -->
	<div class="row">
				<div class="col-md-6">
			<div class="panel panel-flat">
				<div class="panel-body">
											<h5 class="text-semibold mb-5">
					<a href=""  class="text-default">PENGUMUMAN 1</a>
					</h5>
					<ul class="list-inline list-inline-separate text-muted content-group">
						<li>Oleh : <a href="#" class="text-muted">Admin</a></li>
						<li><i class=" icon-calendar22 text-size-base  position-left"></i> 2040-02-31</li>
					</ul>
				...</div>
				<div class="panel-footer panel-footer-condensed">
					<div class="heading-elements not-collapsible">
						
						<a href="" class="heading-text pull-right">Read more <i class="icon-arrow-right14 position-right"></i></a>
					</div>
				</div>
			</div>
		</div>
				<div class="col-md-6">
			<div class="panel panel-flat">
				<div class="panel-body">
											<h5 class="text-semibold mb-5">
					<a href=""  class="text-default">PENGUMUMAN 2</a>
					</h5>
					<ul class="list-inline list-inline-separate text-muted content-group">
						<li>Oleh : <a href="#" class="text-muted">Admin</a></li>
						<li><i class=" icon-calendar22 text-size-base  position-left"></i> 2050-05-05</li>
					</ul>
				 ....</div>
				<div class="panel-footer panel-footer-condensed">
					<div class="heading-elements not-collapsible">

						<a href="" class="heading-text pull-right">Read more <i class="icon-arrow-right14 position-right"></i></a>
					</div>
				</div>
			</div>
		</div>
				
			</div>
		</div>
			</div>

</div>
<!-- /main content -->

					

<footer class="text-center text-muted" style="margin-top: 50px; font-size: 13px; color:#00325e;" >
    &copy; 2025 <a href="https://upttik.undiksha.ac.id/" target="_blank" style="color: #0396FF;">UPT-TIK UNDIKSHA</a> &nbsp;&nbsp;|&nbsp;&nbsp;
    <a href="http://lp3m.undiksha.ac.id/" target="_blank" style="color: #0396FF;">LP3M UNDIKSHA</a>
  </footer>
				</div>
	   			
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

@endsection




