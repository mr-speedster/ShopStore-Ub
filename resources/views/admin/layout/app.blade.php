<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from educhamp.themetrades.com/demo/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:08:15 GMT -->
<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	
	<!-- DESCRIPTION -->
	
	<!-- OG -->
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="../error-404.html" type="image/x-icon" />
	<link rel="icon" href="https://img.icons8.com/ios-glyphs/30/000000/shopping-cart-loaded.png">
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>ZonKart </title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/assets.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/calendar/fullcalendar.css') }}">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/typography.css') }}">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/shortcodes/shortcodes.css') }}">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dashboard.css') }}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{ asset('assets/css/color/color-1.css') }}">
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="ttr-opened-sidebar ttr-pinned-sidebar">
	
	<!-- header start -->
	<header class="ttr-header">
		<div class="ttr-header-wrapper">
			<!--sidebar menu toggler start -->
			<div class="ttr-toggle-sidebar ttr-material-button">
				<i class="ti-close ttr-open-icon"></i>
				<i class="ti-menu ttr-close-icon"></i>
			</div>
			<!--sidebar menu toggler end -->
			<!--logo start -->
			
			<!--logo end -->
			<!--header search panel start -->
			<div class="ttr-search-bar">
				<form class="ttr-search-form">
					<div class="ttr-search-input-wrapper">
						<input type="text" name="qq" placeholder="search something..." class="ttr-search-input">
						<button type="submit" name="search" class="ttr-search-submit"><i class="ti-arrow-right"></i></button>
					</div>
					<span class="ttr-search-close ttr-search-toggle">
						<i class="ti-close"></i>
					</span>
				</form>
			</div>
			<!--header search panel end -->
		</div>
	</header>
	<!-- header end -->
	<!-- Left sidebar menu start -->
	<div class="ttr-sidebar">
		<div class="ttr-sidebar-wrapper content-scroll">
			<!-- side menu logo end -->
			<!-- sidebar menu start -->
			<nav class="ttr-sidebar-navi">
				<ul>
					<li>
						<a href="{{ route('AdminProduct') }}" class="ttr-material-button">
							<span class="ttr-icon"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAAoElEQVRIiWNgGAUEACMWsf/UNJOJQsMIAhY8cth8hw9g9TnNfYBugToS+z+JGAY08VkQTrGTGRhC8ElehrrGgwyDPaF6L+FSoA5V8J6BgYGNDAtYGRgY3kLNgAcTchDBgmcdAwPDLzIs+M3AwLARysYaTJQEDwxgBBNyWqc0B6MDRgYGOuQDdICepimWp3tOHnoW4CpNqZai6J6KRgEGAADSIiej8R2m5gAAAABJRU5ErkJggg=="/></span>
		                	<span class="ttr-label">Add+ Product</span>
		                </a>
		            </li>
					<!--<li>
						<a href="" class="ttr-material-button">
							<span class="ttr-icon"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAABf0lEQVRIib3VsU9UQRAG8N9J8ApMgEuMsTRQ0ZEQTIwmxsKItVBB/AusiRUNCdZ2tLYUVlQ0Fv4DGEMDGOVIjA2htXoWO+/ueLwHt+HkSyZvd3Z2vt1vNvO4ZbxGF8WQdo7nOQRdPMmIL/Anh6TIOU3EPw2SF/+LQA5JLkE3kpNkulauXIIlnLhc+FpMNBDM4ihsFu8irpzXHXKinLTiO4ed+LYqG97jYYx/ox3jTsy3aggOsIyDO+H8iv2Gm7VxFtYe8Ffng9iPnEqCaSzE+G7Nho2wQXTwt+Ir9y5Ezp4cBabwKRaWpRdB0ryKjziUinwcvgeSzGd4KxW7J3dZ3BbW8QuLNYmbMI8f+KCvyoUHU309SzjF6hDJ1yL2ZcV/JQHM4Du2MV6zPhYn/oZHNevXEsA9fMYX3B/wd7CHXUw27B2KgKTpllTUx1JrOMamvt43IiixIrWFn3gzRHw2QS4Krr7iSHBrBKf6fX0UeCb9K3qo6+s3sRO8GuGBm/EP5wR1vJXtFRYAAAAASUVORK5CYII="/></i></span>
		                	<span class="ttr-label">Add+ Advertisement</span>
		                </a>
		            </li>-->
					<li>
						<a href="{{ route('AdminProductView') }}" class="ttr-material-button">
							<span class="ttr-icon"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAABmJLR0QA/wD/AP+gvaeTAAABh0lEQVRIie3WS05UURAG4I9H0ia8Eh1p7BDtAEZ3oDwcEVbhgAkOHclAd4ErIOIajLHVxLgANTHIwAdMGCAJkBBNhGZwqpvu672d7oaZ/LM6VfVX1f3r5Nw+xRjHPO7iFm5gCMM4wCG+Yx0f8AqbbfhacB9V7OA5ljCNqxiJmJGwp8O/FvFVzLUjH8Cz6O4BSp12FShF3g+sBN8/eIp3GOuSPIux4HmS59zCzTMWqKOiSZ/+Jsd19J1TESjnHdac7+eq1Q/6MwGf8VFvwl+KvE/Bk4t65TmnK7yGh5jFNYxGzGjYs+F/gV9aV7gxSbMGtYxdli7jPUxJSzEk3ZF96TJ+w1enl3GrDV/jsFI0ZpeoaJokW+RC+Avhe8Z/IvxvadQ/YZ9F+BL2YroWVLFYNGaXWMTrPMcdbOMRBnskH4z87eDLxQTeYgOPMdkh+RSWI+9N8DRQ9BLOSJuyEN19wU9J3CPpJ+GK9Nt0G3/xEqt4nyXr5Lkdj07LuCyt/TF2pXd8IxooxAl1G38E8zXm/gAAAABJRU5ErkJggg=="/></span>
		                	<span class="ttr-label">View All</span>
		                </a>
		            </li>
				</ul>
				<!-- sidebar menu end -->
			</nav>
			<!-- sidebar menu end -->
		</div>
	</div>
	<!-- Left sidebar menu end -->

	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">	
			<!-- Card -->
			<div class="row">
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">

                    
                    @yield('form')
                

                </div>
			</div>
			<!-- Card END -->
		</div>
	</main>
	<div class="ttr-overlay"></div>

<!-- External JavaScripts -->
<script src="{{ asset('assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('assets/vendors/bootstrap/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script src="{{ asset('assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script>
<script src="{{ asset('assets/vendors/magnific-popup/magnific-popup.js')}}"></script>
<script src="{{ asset('assets/vendors/counter/waypoints-min.js')}}"></script>
<script src="{{ asset('assets/vendors/counter/counterup.min.js')}}"></script>
<script src="{{ asset('assets/vendors/imagesloaded/imagesloaded.js')}}"></script>
<script src="{{ asset('assets/vendors/masonry/masonry.js')}}"></script>
<script src="{{ asset('assets/vendors/masonry/filter.js')}}"></script>
<script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.js')}}"></script>
<script src='{{ asset('assets/vendors/scroll/scrollbar.min.js')}}'></script>
<script src="{{ asset('assets/js/functions.js')}}"></script>
<script src="{{ asset('assets/vendors/chart/chart.min.js')}}"></script>
<script src="{{ asset('assets/js/admin.js')}}"></script>
<script src='{{ asset('assets/vendors/calendar/moment.min.js')}}'></script>
<script src='{{ asset('assets/vendors/calendar/fullcalendar.js')}}'></script>
<script src='{{ asset('assets/vendors/switcher/switcher.js')}}'></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {

    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
      },
      defaultDate: '2019-03-12',
      navLinks: true, // can click day/week names to navigate views

      weekNumbers: true,
      weekNumbersWithinDays: true,
      weekNumberCalculation: 'ISO',

      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2019-03-01'
        },
        {
          title: 'Long Event',
          start: '2019-03-07',
          end: '2019-03-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2019-03-09T16:00:00'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2019-03-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2019-03-11',
          end: '2019-03-13'
        },
        {
          title: 'Meeting',
          start: '2019-03-12T10:30:00',
          end: '2019-03-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2019-03-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2019-03-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2019-03-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2019-03-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2019-03-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2019-03-28'
        }
      ]
    });

  });

</script>
</body>

<!-- Mirrored from educhamp.themetrades.com/demo/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->
</html>