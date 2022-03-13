<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>TRAC: Nagaland</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="TRAC Software">
		<meta name="author" content="Kezeneilhour">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('backend/vendor/bootstrap/css/bootstrap.css')}}" />
		<!-- <link rel="stylesheet" href="{{asset('backend/vendor/animate/animate.compat.css')}}"> -->

		<link rel="stylesheet" href="{{asset('backend/vendor/font-awesome/css/all.min.css')}}" />
		<link rel="stylesheet" href="{{asset('backend/vendor/boxicons/css/boxicons.min.css')}}" />
		<link rel="stylesheet" href="{{asset('backend/vendor/magnific-popup/magnific-popup.css')}}" />
		<link rel="stylesheet" href="{{asset('backend/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="{{asset('backend/vendor/jquery-ui/jquery-ui.css')}}" />
		<link rel="stylesheet" href="{{asset('backend/vendor/jquery-ui/jquery-ui.theme.css')}}" />
		<link rel="stylesheet" href="{{asset('backend/vendor/bootstrap-multiselect/css/bootstrap-multiselect.css')}}" />
		<link rel="stylesheet" href="{{asset('backend/vendor/morris/morris.css')}}" />

		<!--(remove-empty-lines-end)-->

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('backend/css/theme.css')}}" />
		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{asset('backend/css/skins/default.css')}}" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('backend/css/custom.css')}}">

		<!-- Head Libs -->
		<script src="{{asset('backend/vendor/jquery/jquery.js')}}"></script>
		<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
		<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
		<script src="{{asset('backend/vendor/modernizr/modernizr.js')}}"></script>
		@livewireStyles
	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../3.1.0" class="logo">
						<img src="{{asset('backend/img/trac-logo.jpg')}}" width="75" alt="Porto Admin" />
					</a>
					<div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fas fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>

				<!-- start: search & user box -->
				<div class="header-right">

					<span class="separator"></span>


					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<!-- <figure class="profile-picture">
								<img src="img/!logged-user.jpg" alt="Joseph Doe" class="rounded-circle" data-lock-picture="img/!logged-user.jpg" />
							</figure> -->
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name">{{Auth::user()->name}}</span>
								<span class="role">{{Auth::user()->role}}</span>
							</div>

							<i class="fa custom-caret"></i>
						</a>

						<div class="dropdown-menu">
							<ul class="list-unstyled mb-2">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="#"><i class="bx bx-user-circle"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="bx bx-lock"></i> Lock Screen</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bx bx-power-off"></i> Logout</a>
								</li>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">
								    {{ csrf_field() }}
								</form>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">

				    <div class="sidebar-header">
				        <div class="sidebar-title">
				            Navigation
				        </div>
				        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
				            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
				        </div>
				    </div>

				    <div class="nano">
				        <div class="nano-content">
				            <nav id="menu" class="nav-main" role="navigation">

				                <ul class="nav nav-main">
				                    <li>
				                        <a class="nav-link" href="{{route('dashboard')}}">
				                            <i class="bx bx-home-alt" aria-hidden="true"></i>
				                            <span>Dashboard</span>
				                        </a>
				                    </li>
														<li>
				                        <a class="nav-link" href="{{route('liasonOfficer.index')}}">
				                            <i class="bx bx-envelope" aria-hidden="true"></i>
				                            <span>Liason Officer</span>
				                        </a>
				                    </li>
														<li>
				                        <a class="nav-link" href="{{route('hotels.index')}}">
				                            <i class="bx bx-home" aria-hidden="true"></i>
				                            <span>Hotels</span>
				                        </a>
				                    </li>
				                    <li>
				                        <a class="nav-link" href="{{route('rooms.index')}}">
				                            <i class="bx bx-envelope" aria-hidden="true"></i>
				                            <span>Rooms</span>
				                        </a>
				                    </li>
				                    <li>
				                        <a class="nav-link" href="{{route('vehicles.index')}}">
				                            <i class="bx bx-car" aria-hidden="true"></i>
				                            <span>Vehicles</span>
				                        </a>
				                    </li>
				                    <li>
				                        <a class="nav-link" href="{{route('applicants.index')}}">
				                            <i class="bx bx-user" aria-hidden="true"></i>
				                            <span>Participants</span>
				                        </a>
				                    </li>
				                </ul>
				            </nav>

				            <hr class="separator" />
				        </div>



				    </div>

				</aside>
				<!-- end: sidebar -->
        <section role="main" class="content-body">
					<header class="page-header">
						<h2>@if(isset($pageTitle)) {{$pageTitle}} @else Dashboard @endif</h2>

						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="bx bx-home-alt"></i>
									</a>
								</li>
								<li><span>Dashboard</span></li>
								<li><span class="pr-4">@if(isset($pageTitle)) {{$pageTitle}} @else Page @endif</span></li>
							</ol>
						</div>
					</header>
          @yield('content')
          </section>
      </div>

    </section>

    <!-- Vendor -->

    <script src="{{asset('backend/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
    <script src="{{asset('backend/vendor/popper/umd/popper.min.js')}}"></script>
    <script src="{{asset('backend/vendor/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('backend/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('backend/vendor/common/common.js')}}"></script>
    <script src="{{asset('backend/vendor/nanoscroller/nanoscroller.js')}}"></script>
    <script src="{{asset('backend/vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('backend/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>

    <!-- Specific Page Vendor -->
    <script src="{{asset('backend/vendor/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('backend/vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js')}}"></script>
    <script src="{{asset('backend/vendor/jquery-appear/jquery.appear.js')}}"></script>
    <script src="{{asset('backend/vendor/bootstrap-multiselect/js/bootstrap-multiselect.js')}}"></script>
    <script src="{{asset('backend/vendor/flot/jquery.flot.categories.js')}}"></script>``
    <script src="{{asset('backend/vendor/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('backend/vendor/jquery-sparkline/jquery.sparkline.js')}}"></script>
    <script src="{{asset('backend/vendor/raphael/raphael.js')}}"></script>
    <script src="{{asset('backend/vendor/morris/morris.js')}}"></script>
    <script src="{{asset('backend/vendor/gauge/gauge.js')}}"></script>
    <script src="{{asset('backend/vendor/snap.svg/snap.svg.js')}}"></script>
    <script src="{{asset('backend/vendor/liquid-meter/liquid.meter.js')}}"></script>
    <script src="{{asset('backend/vendor/jqvmap/jquery.vmap.js')}}"></script>
    <script src="{{asset('backend/vendor/jqvmap/data/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset('backend/vendor/jqvmap/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('backend/vendor/jqvmap/maps/continents/jquery.vmap.africa.js')}}"></script>
    <script src="{{asset('backend/vendor/jqvmap/maps/continents/jquery.vmap.asia.js')}}"></script>
    <script src="{{asset('backend/vendor/jqvmap/maps/continents/jquery.vmap.australia.js')}}"></script>
    <script src="{{asset('backend/vendor/jqvmap/maps/continents/jquery.vmap.europe.js')}}"></script>
    <script src="{{asset('backend/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js')}}"></script>
    <script src="{{asset('backend/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js')}}"></script>
    <!-- Theme Base, Components and Settings -->
    <script src="{{asset('backend/js/theme.js')}}"></script>
    <!-- Theme Custom -->
    <script src="{{asset('backend/js/custom.js')}}"></script>
    <!-- Theme Initialization Files -->
    <script src="{{asset('backend/js/theme.init.js')}}"></script>
    <!-- Examples -->
    <script src="{{asset('backend/js/examples/examples.dashboard.js')}}"></script>
		@livewireScripts

		<script type="text/javascript">
			$(document).ready(function(){
				$('.datatable').DataTable({
				dom: 'Bfrtip',
				buttons: [
        	'copy','csv', 'print', 'pdfHtml5'
    		]
				});
			});
		</script>
  </body>
</html>
