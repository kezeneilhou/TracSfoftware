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
		<link rel="stylesheet" href="{{asset('backend/vendor/animate/animate.compat.css')}}">

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
		<script src="{{asset('backend/vendor/modernizr/modernizr.js')}}"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../3.1.0" class="logo">
						<img src="img/logo.png" width="75" height="35" alt="Porto Admin" />
					</a>
					<div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fas fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>

				<!-- start: search & user box -->
				<div class="header-right">

					<form action="pages-search-results.html" class="search nav-form">
						<div class="input-group">
							<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
							<span class="input-group-append">
								<button class="btn btn-default" type="submit"><i class="bx bx-search"></i></button>
							</span>
						</div>
					</form>

					<span class="separator"></span>

					<ul class="notifications">
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="bx bx-list-ol"></i>
								<span class="badge">3</span>
							</a>

							<div class="dropdown-menu notification-menu large">
								<div class="notification-title">
									<span class="float-right badge badge-default">3</span>
									Tasks
								</div>

								<div class="content">
									<ul>
										<li>
											<p class="clearfix mb-1">
												<span class="message float-left">Generating Sales Report</span>
												<span class="message float-right text-dark">60%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
											</div>
										</li>

										<li>
											<p class="clearfix mb-1">
												<span class="message float-left">Importing Contacts</span>
												<span class="message float-right text-dark">98%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
											</div>
										</li>

										<li>
											<p class="clearfix mb-1">
												<span class="message float-left">Uploading something big</span>
												<span class="message float-right text-dark">33%</span>
											</p>
											<div class="progress progress-xs light mb-1">
												<div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="bx bx-envelope"></i>
								<span class="badge">4</span>
							</a>

							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="float-right badge badge-default">230</span>
									Messages
								</div>

								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="img/!sample-user.jpg" alt="Joseph Doe Junior" class="rounded-circle" />
												</figure>
												<span class="title">Joseph Doe</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="img/!sample-user.jpg" alt="Joseph Junior" class="rounded-circle" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="img/!sample-user.jpg" alt="Joe Junior" class="rounded-circle" />
												</figure>
												<span class="title">Joe Junior</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="img/!sample-user.jpg" alt="Joseph Junior" class="rounded-circle" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
											</a>
										</li>
									</ul>

									<hr />

									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="bx bx-bell"></i>
								<span class="badge">3</span>
							</a>

							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="float-right badge badge-default">3</span>
									Alerts
								</div>

								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fas fa-thumbs-down bg-danger text-light"></i>
												</div>
												<span class="title">Server is Down!</span>
												<span class="message">Just now</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="bx bx-lock bg-warning text-light"></i>
												</div>
												<span class="title">User Locked</span>
												<span class="message">15 minutes ago</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fas fa-signal bg-success text-light"></i>
												</div>
												<span class="title">Connection Restaured</span>
												<span class="message">10/10/2017</span>
											</a>
										</li>
									</ul>

									<hr />

									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
					</ul>

					<span class="separator"></span>

					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="img/!logged-user.jpg" alt="Joseph Doe" class="rounded-circle" data-lock-picture="img/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name">John Doe Junior</span>
								<span class="role">Administrator</span>
							</div>

							<i class="fa custom-caret"></i>
						</a>

						<div class="dropdown-menu">
							<ul class="list-unstyled mb-2">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="bx bx-user-circle"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="bx bx-lock"></i> Lock Screen</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="bx bx-power-off"></i> Logout</a>
								</li>
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
				                        <a class="nav-link" href="layouts-default.html">
				                            <i class="bx bx-home-alt" aria-hidden="true"></i>
				                            <span>Dashboard</span>
				                        </a>
				                    </li>
				                    <li class="nav-parent">
				                        <a class="nav-link" href="#">
				                            <i class="bx bx-cart-alt" aria-hidden="true"></i>
				                            <span>eCommerce</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
				                                <a class="nav-link" href="ecommerce-dashboard.html">
				                                    Dashboard
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ecommerce-products-list.html">
				                                    Products List
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ecommerce-products-form.html">
				                                    Products Form
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ecommerce-category-list.html">
				                                    Categories List
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ecommerce-category-form.html">
				                                    Category Form
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ecommerce-coupons-list.html">
				                                    Coupons List
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ecommerce-coupons-form.html">
				                                    Coupons Form
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ecommerce-orders-list.html">
				                                    Orders List
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ecommerce-orders-detail.html">
				                                    Orders Detail
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ecommerce-customers-list.html">
				                                    Customers List
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ecommerce-customers-form.html">
				                                    Customers Form
				                                </a>
				                            </li>
				                        </ul>
				                    </li>
				                    <li>
				                        <a class="nav-link" href="mailbox-folder.html">
				                            <span class="float-right badge badge-primary">182</span>
				                            <i class="bx bx-envelope" aria-hidden="true"></i>
				                            <span>Mailbox</span>
				                        </a>
				                    </li>
				                    <li class="nav-parent nav-expanded nav-active">
				                        <a class="nav-link" href="#">
				                            <i class="bx bx-layout" aria-hidden="true"></i>
				                            <span>Layouts</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
				                                <a class="nav-link" href="index.html">
				                                    Landing Page
				                                </a>
				                            </li>
				                            <li class="nav-active">
				                                <a class="nav-link" href="layouts-default.html">
				                                    Default
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="layouts-modern.html">
				                                    Modern
				                                </a>
				                            </li>
				                            <li class="nav-parent">
				                                <a>
				                                    Boxed
				                                </a>
				                                <ul class="nav nav-children">
				                                    <li>
				                                        <a class="nav-link" href="layouts-boxed.html">
				                                            Static Header
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="layouts-boxed-fixed-header.html">
				                                            Fixed Header
				                                        </a>
				                                    </li>
				                                </ul>
				                            </li>
				                            <li class="nav-parent">
				                                <a>
				                                    Horizontal Menu Header
				                                </a>
				                                <ul class="nav nav-children">
				                                    <li>
				                                        <a class="nav-link" href="layouts-header-menu.html">
				                                            Pills
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="layouts-header-menu-stripe.html">
				                                            Stripe
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="layouts-header-menu-top-line.html">
				                                            Top Line
				                                        </a>
				                                    </li>
				                                </ul>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="layouts-dark.html">
				                                    Dark
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="layouts-dark-header.html">
				                                    Dark Header
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="layouts-two-navigations.html">
				                                    Two Navigations
				                                </a>
				                            </li>
				                            <li class="nav-parent">
				                                <a>
				                                    Tab Navigation
				                                </a>
				                                <ul class="nav nav-children">
				                                    <li>
				                                        <a class="nav-link" href="layouts-tab-navigation-dark.html">
				                                            Tab Navigation Dark
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="layouts-tab-navigation.html">
				                                            Tab Navigation Light
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="layouts-tab-navigation-boxed.html">
				                                            Tab Navigation Boxed
				                                        </a>
				                                    </li>
				                                </ul>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="layouts-light-sidebar.html">
				                                    Light Sidebar
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="layouts-left-sidebar-collapsed.html">
				                                    Left Sidebar Collapsed
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="layouts-left-sidebar-scroll.html">
				                                    Left Sidebar Scroll
				                                </a>
				                            </li>
				                            <li class="nav-parent">
				                                <a>
				                                    Left Sidebar Big Icons
				                                </a>
				                                <ul class="nav nav-children">
				                                    <li>
				                                        <a class="nav-link" href="layouts-left-sidebar-big-icons.html">
				                                            Left Sidebar Big Icons Dark
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="layouts-left-sidebar-big-icons-light.html">
				                                            Left Sidebar Big Icons Light
				                                        </a>
				                                    </li>
				                                </ul>
				                            </li>
				                            <li class="nav-parent">
				                                <a>
				                                    Left Sidebar Panel
				                                </a>
				                                <ul class="nav nav-children">
				                                    <li>
				                                        <a class="nav-link" href="layouts-left-sidebar-panel.html">
				                                            Left Sidebar Panel Dark
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="layouts-left-sidebar-panel-light.html">
				                                            Left Sidebar Panel Light
				                                        </a>
				                                    </li>
				                                </ul>
				                            </li>
				                            <li class="nav-parent">
				                                <a>
				                                    Left Sidebar Sizes
				                                </a>
				                                <ul class="nav nav-children">
				                                    <li>
				                                        <a class="nav-link" href="layouts-sidebar-sizes-xs.html">
				                                            Left Sidebar XS
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="layouts-sidebar-sizes-sm.html">
				                                            Left Sidebar SM
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="layouts-sidebar-sizes-md.html">
				                                            Left Sidebar MD
				                                        </a>
				                                    </li>
				                                </ul>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="layouts-square-borders.html">
				                                    Square Borders
				                                </a>
				                            </li>
				                        </ul>
				                    </li>
				                    <li class="nav-parent">
				                        <a class="nav-link" href="#">
				                            <i class="bx bx-file" aria-hidden="true"></i>
				                            <span>Pages</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
				                                <a class="nav-link" href="pages-signup.html">
				                                    Sign Up
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-signin.html">
				                                    Sign In
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-recover-password.html">
				                                    Recover Password
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-lock-screen.html">
				                                    Locked Screen
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-user-profile.html">
				                                    User Profile
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-session-timeout.html">
				                                    Session Timeout
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-calendar.html">
				                                    Calendar
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-timeline.html">
				                                    Timeline
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-media-gallery.html">
				                                    Media Gallery
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-invoice.html">
				                                    Invoice
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-blank.html">
				                                    Blank Page
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-404.html">
				                                    404
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-500.html">
				                                    500
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-log-viewer.html">
				                                    Log Viewer
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-search-results.html">
				                                    Search Results
				                                </a>
				                            </li>
				                        </ul>
				                    </li>
				                    <li class="nav-parent">
				                        <a class="nav-link" href="#">
				                            <i class="bx bx-cube" aria-hidden="true"></i>
				                            <span>UI Elements</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
				                                <a class="nav-link" href="ui-elements-typography.html">
				                                    Typography
				                                </a>
				                            </li>
				                            <li class="nav-parent">
				                                <a class="nav-link" href="#">
				                                    Icons <span class="mega-sub-nav-toggle toggled float-right" data-toggle="collapse" data-target=".mega-sub-nav-sub-menu-1"></span>
				                                </a>
				                                <ul class="nav nav-children">
				                                    <li>
				                                        <a class="nav-link" href="ui-elements-icons-elusive.html">
				                                            Elusive
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="ui-elements-icons-font-awesome.html">
				                                            Font Awesome
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="ui-elements-icons-line-icons.html">
				                                            Line Icons
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="ui-elements-icons-meteocons.html">
				                                            Meteocons
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="ui-elements-icons-box-icons.html">
				                                            Box Icons
				                                        </a>
				                                    </li>
				                                </ul>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-tabs.html">
				                                    Tabs
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-cards.html">
				                                    Cards
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-widgets.html">
				                                    Widgets
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-portlets.html">
				                                    Portlets
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-buttons.html">
				                                    Buttons
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-alerts.html">
				                                    Alerts
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-notifications.html">
				                                    Notifications
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-modals.html">
				                                    Modals
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-lightbox.html">
				                                    Lightbox
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-progressbars.html">
				                                    Progress Bars
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-sliders.html">
				                                    Sliders
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-carousels.html">
				                                    Carousels
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-accordions.html">
				                                    Accordions
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-toggles.html">
				                                    Toggles
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-nestable.html">
				                                    Nestable
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-tree-view.html">
				                                    Tree View
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-scrollable.html">
				                                    Scrollable
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-grid-system.html">
				                                    Grid System
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-charts.html">
				                                    Charts
				                                </a>
				                            </li>
				                            <li class="nav-parent">
				                                <a class="nav-link" href="#">
				                                    Animations <span class="mega-sub-nav-toggle toggled float-right" data-toggle="collapse" data-target=".mega-sub-nav-sub-menu-2"></span>
				                                </a>
				                                <ul class="nav nav-children">
				                                    <li>
				                                        <a class="nav-link" href="ui-elements-animations-appear.html">
				                                            Appear
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="ui-elements-animations-hover.html">
				                                            Hover
				                                        </a>
				                                    </li>
				                                </ul>
				                            </li>
				                            <li class="nav-parent">
				                                <a class="nav-link" href="#">
				                                    Loading <span class="mega-sub-nav-toggle toggled float-right" data-toggle="collapse" data-target=".mega-sub-nav-sub-menu-3"></span>
				                                </a>
				                                <ul class="nav nav-children">
				                                    <li>
				                                        <a class="nav-link" href="ui-elements-loading-overlay.html">
				                                            Overlay
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="ui-elements-loading-progress.html">
				                                            Progress
				                                        </a>
				                                    </li>
				                                </ul>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-extra.html">
				                                    Extra
				                                </a>
				                            </li>
				                        </ul>
				                    </li>
				                    <li class="nav-parent">
				                        <a class="nav-link" href="#">
				                            <i class="bx bx-map" aria-hidden="true"></i>
				                            <span>Maps</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
				                                <a class="nav-link" href="maps-google-maps.html">
				                                    Basic
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="maps-google-maps-builder.html">
				                                    Map Builder
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="maps-vector.html">
				                                    Vector
				                                </a>
				                            </li>
				                        </ul>
				                    </li>
				                    <li>
				                        <a class="nav-link" href="extra-ajax-made-easy.html">
				                            <i class="bx bx-loader-circle" aria-hidden="true"></i>
				                            <span>Ajax</span>
				                        </a>
				                    </li>
				                    <li class="nav-parent">
				                        <a class="nav-link" href="#">
				                            <i class="bx bx-detail" aria-hidden="true"></i>
				                            <span>Forms</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
				                                <a class="nav-link" href="forms-basic.html">
				                                    Basic
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="forms-advanced.html">
				                                    Advanced
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="forms-validation.html">
				                                    Validation
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="forms-layouts.html">
				                                    Layouts
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="forms-wizard.html">
				                                    Wizard
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="forms-code-editor.html">
				                                    Code Editor
				                                </a>
				                            </li>
				                        </ul>
				                    </li>
				                    <li class="nav-parent">
				                        <a class="nav-link" href="#">
				                            <i class="bx bx-table" aria-hidden="true"></i>
				                            <span>Tables</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
				                                <a class="nav-link" href="tables-basic.html">
				                                    Basic
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="tables-advanced.html">
				                                    Advanced
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="tables-responsive.html">
				                                    Responsive
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="tables-editable.html">
				                                    Editable
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="tables-ajax.html">
				                                    Ajax
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="tables-pricing.html">
				                                    Pricing
				                                </a>
				                            </li>
				                        </ul>
				                    </li>
				                    <li class="nav-parent">
				                        <a class="nav-link" href="#">
				                            <i class="bx bx-collection" aria-hidden="true"></i>
				                            <span>Menu Levels</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
				                                <a>
				                                    First Level
				                                </a>
				                            </li>
				                            <li class="nav-parent">
				                                <a class="nav-link" href="#">
				                                    Second Level
				                                </a>
				                                <ul class="nav nav-children">
				                                    <li>
				                                        <a>
				                                            Second Level Link #1
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a>
				                                            Second Level Link #2
				                                        </a>
				                                    </li>
				                                    <li class="nav-parent">
				                                        <a class="nav-link" href="#">
				                                            Third Level
				                                        </a>
				                                        <ul class="nav nav-children">
				                                            <li>
				                                                <a>
				                                                    Third Level Link #1
				                                                </a>
				                                            </li>
				                                            <li>
				                                                <a>
				                                                    Third Level Link #2
				                                                </a>
				                                            </li>
				                                        </ul>
				                                    </li>
				                                </ul>
				                            </li>
				                        </ul>
				                    </li>
				                    <li>
				                        <a class="nav-link" href="http://themeforest.net/item/porto-responsive-html5-template/4106987?ref=Okler">
				                            <i class="bx bx-window-alt" aria-hidden="true"></i>
				                            <span>Front-End <em class="not-included">(Not Included)</em></span>
				                        </a>
				                    </li>
				                    <li>
				                        <a class="nav-link" href="extra-changelog.html">
				                            <i class="bx bx-book-alt" aria-hidden="true"></i>
				                            <span>Changelog</span>
				                        </a>
				                    </li>

				                </ul>
				            </nav>

				            <hr class="separator" />

				            <div class="sidebar-widget widget-tasks">
				                <div class="widget-header">
				                    <h6>Projects</h6>
				                    <div class="widget-toggle">+</div>
				                </div>
				                <div class="widget-content">
				                    <ul class="list-unstyled m-0">
				                        <li><a href="#">Porto HTML5 Template</a></li>
				                        <li><a href="#">Tucson Template</a></li>
				                        <li><a href="#">Porto Admin</a></li>
				                    </ul>
				                </div>
				            </div>

				            <hr class="separator" />

				            <div class="sidebar-widget widget-stats">
				                <div class="widget-header">
				                    <h6>Company Stats</h6>
				                    <div class="widget-toggle">+</div>
				                </div>
				                <div class="widget-content">
				                    <ul>
				                        <li>
				                            <span class="stats-title">Stat 1</span>
				                            <span class="stats-complete">85%</span>
				                            <div class="progress">
				                                <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
				                                    <span class="sr-only">85% Complete</span>
				                                </div>
				                            </div>
				                        </li>
				                        <li>
				                            <span class="stats-title">Stat 2</span>
				                            <span class="stats-complete">70%</span>
				                            <div class="progress">
				                                <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
				                                    <span class="sr-only">70% Complete</span>
				                                </div>
				                            </div>
				                        </li>
				                        <li>
				                            <span class="stats-title">Stat 3</span>
				                            <span class="stats-complete">2%</span>
				                            <div class="progress">
				                                <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
				                                    <span class="sr-only">2% Complete</span>
				                                </div>
				                            </div>
				                        </li>
				                    </ul>
				                </div>
				            </div>
				        </div>

				        <script>
				            // Maintain Scroll Position
				            if (typeof localStorage !== 'undefined') {
				                if (localStorage.getItem('sidebar-left-position') !== null) {
				                    var initialPosition = localStorage.getItem('sidebar-left-position'),
				                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');

				                    sidebarLeft.scrollTop = initialPosition;
				                }
				            }
				        </script>


				    </div>

				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Default Layout</h2>

						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="bx bx-home-alt"></i>
									</a>
								</li>
								<li><span>Layouts</span></li>
								<li><span>Default</span></li>
							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<div class="row">
						<div class="col-lg-6 mb-3">
							<section class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-8">
											<div class="chart-data-selector" id="salesSelectorWrapper">
												<h2>
													Sales:
													<strong>
														<select class="form-control" id="salesSelector">
															<option value="Porto Admin" selected>Porto Admin</option>
															<option value="Porto Drupal" >Porto Drupal</option>
															<option value="Porto Wordpress" >Porto Wordpress</option>
														</select>
													</strong>
												</h2>

												<div id="salesSelectorItems" class="chart-data-selector-items mt-3">
													<!-- Flot: Sales Porto Admin -->
													<div class="chart chart-sm" data-sales-rel="Porto Admin" id="flotDashSales1" class="chart-active" style="height: 203px;"></div>
													<script>

														var flotDashSales1Data = [{
														    data: [
														        ["Jan", 140],
														        ["Feb", 240],
														        ["Mar", 190],
														        ["Apr", 140],
														        ["May", 180],
														        ["Jun", 320],
														        ["Jul", 270],
														        ["Aug", 180]
														    ],
														    color: "#0088cc"
														}];

														// See: js/examples/examples.dashboard.js for more settings.

													</script>

													<!-- Flot: Sales Porto Drupal -->
													<div class="chart chart-sm" data-sales-rel="Porto Drupal" id="flotDashSales2" class="chart-hidden"></div>
													<script>

														var flotDashSales2Data = [{
														    data: [
														        ["Jan", 240],
														        ["Feb", 240],
														        ["Mar", 290],
														        ["Apr", 540],
														        ["May", 480],
														        ["Jun", 220],
														        ["Jul", 170],
														        ["Aug", 190]
														    ],
														    color: "#2baab1"
														}];

														// See: js/examples/examples.dashboard.js for more settings.

													</script>

													<!-- Flot: Sales Porto Wordpress -->
													<div class="chart chart-sm" data-sales-rel="Porto Wordpress" id="flotDashSales3" class="chart-hidden"></div>
													<script>

														var flotDashSales3Data = [{
														    data: [
														        ["Jan", 840],
														        ["Feb", 740],
														        ["Mar", 690],
														        ["Apr", 940],
														        ["May", 1180],
														        ["Jun", 820],
														        ["Jul", 570],
														        ["Aug", 780]
														    ],
														    color: "#734ba9"
														}];

														// See: js/examples/examples.dashboard.js for more settings.

													</script>
												</div>

											</div>
										</div>
										<div class="col-xl-4 text-center">
											<h2 class="card-title mt-3">Sales Goal</h2>
											<div class="liquid-meter-wrapper liquid-meter-sm mt-3">
												<div class="liquid-meter">
													<meter min="0" max="100" value="35" id="meterSales"></meter>
												</div>
												<div class="liquid-meter-selector mt-4 pt-1" id="meterSalesSel">
													<a href="#" data-val="35" class="active">Monthly Goal</a>
													<a href="#" data-val="28">Annual Goal</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
						<div class="col-lg-6">
							<div class="row mb-3">
								<div class="col-xl-6">
									<section class="card card-featured-left card-featured-primary mb-3">
										<div class="card-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-primary">
														<i class="fas fa-life-ring"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Support Questions</h4>
														<div class="info">
															<strong class="amount">1281</strong>
															<span class="text-primary">(14 unread)</span>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase" href="#">(view all)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-xl-6">
									<section class="card card-featured-left card-featured-secondary">
										<div class="card-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-secondary">
														<i class="fas fa-dollar-sign"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Total Profit</h4>
														<div class="info">
															<strong class="amount">$ 14,890.30</strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase" href="#">(withdraw)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-6">
									<section class="card card-featured-left card-featured-tertiary mb-3">
										<div class="card-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-tertiary">
														<i class="fas fa-shopping-cart"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Today's Orders</h4>
														<div class="info">
															<strong class="amount">38</strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase" href="#">(statement)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-xl-6">
									<section class="card card-featured-left card-featured-quaternary">
										<div class="card-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-quaternary">
														<i class="fas fa-user"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Today's Visitors</h4>
														<div class="info">
															<strong class="amount">3765</strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase" href="#">(report)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
						</div>
					</div>

					<div class="row pt-4">
						<div class="col-lg-6 mb-4 mb-lg-0">
							<section class="card">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Best Seller</h2>
									<p class="card-subtitle">Customize the graphs as much as you want, there are so many options and features to display information using Porto Admin Template.</p>
								</header>
								<div class="card-body">

									<!-- Flot: Basic -->
									<div class="chart chart-md" id="flotDashBasic"></div>
									<script>

										var flotDashBasicData = [{
											data: [
												[0, 170],
												[1, 169],
												[2, 173],
												[3, 188],
												[4, 147],
												[5, 113],
												[6, 128],
												[7, 169],
												[8, 173],
												[9, 128],
												[10, 128]
											],
											label: "Series 1",
											color: "#0088cc"
										}, {
											data: [
												[0, 115],
												[1, 124],
												[2, 114],
												[3, 121],
												[4, 115],
												[5, 83],
												[6, 102],
												[7, 148],
												[8, 147],
												[9, 103],
												[10, 113]
											],
											label: "Series 2",
											color: "#2baab1"
										}, {
											data: [
												[0, 70],
												[1, 69],
												[2, 73],
												[3, 88],
												[4, 47],
												[5, 13],
												[6, 28],
												[7, 69],
												[8, 73],
												[9, 28],
												[10, 28]
											],
											label: "Series 3",
											color: "#734ba9"
										}];

										// See: js/examples/examples.dashboard.js for more settings.

									</script>

								</div>
							</section>
						</div>
						<div class="col-lg-6">
							<section class="card">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>
									<h2 class="card-title">Server Usage</h2>
									<p class="card-subtitle">It's easy to create custom graphs on Porto Admin Template, there are several graph types that you can use.</p>
								</header>
								<div class="card-body">

									<!-- Flot: Curves -->
									<div class="chart chart-md" id="flotDashRealTime"></div>

								</div>
							</section>
						</div>
					</div>

					<div class="row pt-4 mt-2">
						<div class="col-lg-6 col-xl-3">
							<section class="card card-transparent">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">My Profile</h2>
								</header>
								<div class="card-body">
									<section class="card card-group">
										<header class="card-header bg-primary w-100">

											<div class="widget-profile-info">
												<div class="profile-picture">
													<img src="img/!logged-user.jpg">
												</div>
												<div class="profile-info">
													<h4 class="name font-weight-semibold">John Doe</h4>
													<h5 class="role">Administrator</h5>
													<div class="profile-footer">
														<a href="#">(edit profile)</a>
													</div>
												</div>
											</div>

										</header>
										<div id="accordion" class="w-100">
											<div class="card card-accordion card-accordion-first">
												<div class="card-header border-bottom-0">
													<h4 class="card-title">
														<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1One">
															<i class="fas fa-check mr-1"></i> Tasks
														</a>
													</h4>
												</div>
												<div id="collapse1One" class="accordion-body collapse show">
													<div class="card-body">
														<ul class="widget-todo-list">
															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" checked="" id="todoListItem1" class="todo-check">
																	<label class="todo-label" for="todoListItem1"><span>Curabitur ac sem at nibh egestas urabitur ac sem at nibh egestas.</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fas fa-times"></i>
																	</a>
																</div>
															</li>
															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" id="todoListItem2" class="todo-check">
																	<label class="todo-label" for="todoListItem2"><span>Lorem ipsum dolor sit amet</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fas fa-times"></i>
																	</a>
																</div>
															</li>
															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" id="todoListItem3" class="todo-check">
																	<label class="todo-label" for="todoListItem3"><span>Curabitur ac sem at nibh egestas</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fas fa-times"></i>
																	</a>
																</div>
															</li>
															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" id="todoListItem4" class="todo-check">
																	<label class="todo-label" for="todoListItem4"><span>Lorem ipsum dolor sit amet</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fas fa-times"></i>
																	</a>
																</div>
															</li>
															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" id="todoListItem5" class="todo-check">
																	<label class="todo-label" for="todoListItem5"><span>Curabitur ac sem at nibh egestas.</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fas fa-times"></i>
																	</a>
																</div>
															</li>
															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" id="todoListItem6" class="todo-check">
																	<label class="todo-label" for="todoListItem6"><span>Lorem ipsum dolor sit amet</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fas fa-times"></i>
																	</a>
																</div>
															</li>
															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" id="todoListItem7" class="todo-check">
																	<label class="todo-label" for="todoListItem7"><span>Curabitur ac sem at nibh egestas.</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fas fa-times"></i>
																	</a>
																</div>
															</li>
														</ul>
														<hr class="solid mt-3 mb-3">
														<form method="get" class="form-horizontal form-bordered">
															<div class="form-group row">
																<div class="col-sm-12">
																	<div class="input-group mb-3">
																		<input type="text" class="form-control">
																		<div class="input-group-append">
																			<button type="button" class="btn btn-primary" tabindex="-1">Add</button>
																		</div>
																	</div>
																</div>
															</div>
														</form>
													</div>
												</div>
											</div>
											<div class="card card-accordion">
												<div class="card-header border-bottom-0">
													<h4 class="card-title">
														<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1Two">
															 <i class="fas fa-comment mr-1"></i> Messages
														</a>
													</h4>
												</div>
												<div id="collapse1Two" class="accordion-body collapse">
													<div class="card-body">
														<ul class="simple-user-list mb-3">
															<li>
																<figure class="image rounded">
																	<img src="img/!sample-user.jpg" alt="Joseph Doe Junior" class="rounded-circle">
																</figure>
																<span class="title">Joseph Doe Junior</span>
																<span class="message">Lorem ipsum dolor sit.</span>
															</li>
															<li>
																<figure class="image rounded">
																	<img src="img/!sample-user.jpg" alt="Joseph Junior" class="rounded-circle">
																</figure>
																<span class="title">Joseph Junior</span>
																<span class="message">Lorem ipsum dolor sit.</span>
															</li>
															<li>
																<figure class="image rounded">
																	<img src="img/!sample-user.jpg" alt="Joe Junior" class="rounded-circle">
																</figure>
																<span class="title">Joe Junior</span>
																<span class="message">Lorem ipsum dolor sit.</span>
															</li>
															<li>
																<figure class="image rounded">
																	<img src="img/!sample-user.jpg" alt="Joseph Doe Junior" class="rounded-circle">
																</figure>
																<span class="title">Joseph Doe Junior</span>
																<span class="message">Lorem ipsum dolor sit.</span>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</section>

								</div>
							</section>
						</div>
						<div class="col-lg-6 col-xl-3">
							<section class="card card-transparent">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">My Stats</h2>
								</header>
								<div class="card-body">
									<section class="card">
										<div class="card-body">
											<div class="small-chart float-right" id="sparklineBarDash"></div>
											<script type="text/javascript">
												var sparklineBarDashData = [5, 6, 7, 2, 0, 4 , 2, 4, 2, 0, 4 , 2, 4, 2, 0, 4];
											</script>
											<div class="h4 font-weight-bold mb-0">488</div>
											<p class="text-3 text-muted mb-0">Average Profile Visits</p>
										</div>
									</section>
									<section class="card">
										<div class="card-body">
											<div class="circular-bar circular-bar-xs m-0 mt-1 mr-4 mb-0 float-right">
												<div class="circular-bar-chart" data-percent="45" data-plugin-options='{ "barColor": "#2baab1", "delay": 300, "size": 50, "lineWidth": 4 }'>
													<strong>Average</strong>
													<label><span class="percent">45</span>%</label>
												</div>
											</div>
											<div class="h4 font-weight-bold mb-0">12</div>
											<p class="text-3 text-muted mb-0">Working Projects</p>
										</div>
									</section>
									<section class="card">
										<div class="card-body">
											<div class="small-chart float-right" id="sparklineLineDash"></div>
											<script type="text/javascript">
												var sparklineLineDashData = [15, 16, 17, 19, 10, 15, 13, 12, 12, 14, 16, 17];
											</script>
											<div class="h4 font-weight-bold mb-0">89</div>
											<p class="text-3 text-muted mb-0">Pending Tasks</p>
										</div>
									</section>
								</div>
							</section>
							<section class="card mb-3">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">
										<span class="badge badge-primary font-weight-normal va-middle p-2 mr-2">298</span>
										<span class="va-middle">Friends</span>
									</h2>
								</header>
								<div class="card-body">
									<div class="content">
										<ul class="simple-user-list">
											<li>
												<figure class="image rounded">
													<img src="img/!sample-user.jpg" alt="Joseph Doe Junior" class="rounded-circle">
												</figure>
												<span class="title">Joseph Doe Junior</span>
												<span class="message truncate">Lorem ipsum dolor sit.</span>
											</li>
											<li>
												<figure class="image rounded">
													<img src="img/!sample-user.jpg" alt="Joseph Junior" class="rounded-circle">
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message truncate">Lorem ipsum dolor sit.</span>
											</li>
											<li>
												<figure class="image rounded">
													<img src="img/!sample-user.jpg" alt="Joe Junior" class="rounded-circle">
												</figure>
												<span class="title">Joe Junior</span>
												<span class="message truncate">Lorem ipsum dolor sit.</span>
											</li>
										</ul>
										<hr class="dotted short">
										<div class="text-right">
											<a class="text-uppercase text-muted" href="#">(View All)</a>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<div class="input-group">
										<input type="text" class="form-control" name="s" id="s" placeholder="Search...">
										<span class="input-group-append">
											<button class="btn btn-default" type="submit"><i class="bx bx-search"></i>
											</button>
										</span>
									</div>
								</div>
							</section>
						</div>
						<div class="col-lg-12 col-xl-6">
							<section class="card">
								<header class="card-header card-header-transparent">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Company Activity</h2>
								</header>
								<div class="card-body">
									<div class="timeline timeline-simple mt-3 mb-3">
										<div class="tm-body">
											<div class="tm-title">
												<h5 class="m-0 pt-2 pb-2 text-uppercase">November 2017</h5>
											</div>
											<ol class="tm-items">
												<li>
													<div class="tm-box">
														<p class="text-muted mb-0">7 months ago.</p>
														<p>
															Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas hendrerit augue at leo viverra, aliquam egestas lectus laoreet. Donec vehicula vestibulum ipsum, tincidunt ultrices elit suscipit ac. Sed eget risus laoreet, varius nibh id, luctus ligula. Nulla facilisi. <span class="text-primary">#awesome</span>
														</p>
													</div>
												</li>
												<li>
													<div class="tm-box">
														<p class="text-muted mb-0">7 months ago.</p>
														<p>
															Checkout! How cool is that! Etiam efficitur, sapien eget vehicula gravida, magna neque volutpat risus, vitae tempus odio arcu ac elit. Aenean porta orci eu mi fermentum varius. Curabitur ac sem at nibh egestas. Curabitur ac sem at nibh egestas.
														</p>
														<div class="thumbnail-gallery">
															<a class="img-thumbnail lightbox" href="img/projects/project-4.jpg" data-plugin-options='{ "type":"image" }'>
																<img class="img-fluid" width="215" src="img/projects/project-4.jpg">
																<span class="zoom">
																	<i class="bx bx-search"></i>
																</span>
															</a>
														</div>
													</div>
												</li>
											</ol>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
					<div class="row pt-4 mt-1">
						<div class="col-xl-6">
							<section class="card card-transparent mb-3">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Global Stats</h2>
								</header>
								<div class="card-body">
									<div id="vectorMapWorld" style="height: 350px; width: 100%;"></div>
								</div>
							</section>
						</div>
						<div class="col-xl-6">
							<section class="card">
								<header class="card-header card-header-transparent">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>

									<h2 class="card-title">Projects Stats</h2>
								</header>
								<div class="card-body">
									<table class="table table-responsive-md table-striped mb-0">
										<thead>
											<tr>
												<th>#</th>
												<th>Project</th>
												<th>Status</th>
												<th>Progress</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Porto - Responsive HTML5 Template</td>
												<td><span class="badge badge-success">Success</span></td>
												<td>
													<div class="progress progress-sm progress-half-rounded m-0 mt-1 light">
														<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
															100%
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Porto - Responsive Drupal 7 Theme</td>
												<td><span class="badge badge-success">Success</span></td>
												<td>
													<div class="progress progress-sm progress-half-rounded m-0 mt-1 light">
														<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
															100%
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Tucson - Responsive HTML5 Template</td>
												<td><span class="badge badge-warning">Warning</span></td>
												<td>
													<div class="progress progress-sm progress-half-rounded m-0 mt-1 light">
														<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
															60%
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>4</td>
												<td>Tucson - Responsive Business WordPress Theme</td>
												<td><span class="badge badge-success">Success</span></td>
												<td>
													<div class="progress progress-sm progress-half-rounded m-0 mt-1 light">
														<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
															90%
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>5</td>
												<td>Porto - Responsive Admin HTML5 Template</td>
												<td><span class="badge badge-warning">Warning</span></td>
												<td>
													<div class="progress progress-sm progress-half-rounded m-0 mt-1 light">
														<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
															45%
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>6</td>
												<td>Porto - Responsive HTML5 Template</td>
												<td><span class="badge badge-danger">Danger</span></td>
												<td>
													<div class="progress progress-sm progress-half-rounded m-0 mt-1 light">
														<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
															40%
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>7</td>
												<td>Porto - Responsive Drupal 7 Theme</td>
												<td><span class="badge badge-success">Success</span></td>
												<td>
													<div class="progress progress-sm progress-half-rounded mt-1 light">
														<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
															95%
														</div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</section>
						</div>
					</div>
					<!-- end: page -->
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close d-md-none">
							Collapse <i class="fas fa-chevron-right"></i>
						</a>

						<div class="sidebar-right-wrapper">

							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark"></div>

								<ul>
									<li>
										<time datetime="2017-04-19T00:00+00:00">04/19/2017</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>

							<div class="sidebar-widget widget-friends">
								<h6>Friends</h6>
								<ul>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</aside>

		</section>

		<!-- Vendor -->
		<script src="{{asset('backend/vendor/jquery/jquery.js')}}"></script>
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
		<script src="{{asset('backend/vendor/jquery.easy-pie-chart/jquery.easypiechart.js')}}"></script>
		<script src="{{asset('backend/vendor/flot/jquery.flot.js')}}"></script>
		<script src="{{asset('backend/vendor/flot.tooltip/jquery.flot.tooltip.js')}}"></script>
		<script src="{{asset('backend/vendor/flot/jquery.flot.pie.js')}}"></script>
		<script src="{{asset('backend/vendor/flot/jquery.flot.categories.js')}}"></script>
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


		<!--(remove-empty-lines-end)-->

		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Theme Custom -->
		<script src="js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

		<!-- Examples -->
		<script src="js/examples/examples.dashboard.js"></script>

	</body>
</html>
