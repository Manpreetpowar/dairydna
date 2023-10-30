
<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Dairy DNA</title>
		<meta name="keywords" content="DairyDNA" />
		<meta name="description" content="Dairy DNA">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="{{asset('vendor/select2/css/select2.css')}}" />
		<link rel="stylesheet" href="{{asset('vendor/select2-bootstrap-theme/select2-bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('vendor/jquery-datatables-bs3/assets/css/datatables.css')}}" />
		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="{{asset('vendor/pnotify/pnotify.custom.css')}}" />

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.css')}}" />
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"> 

		 <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.css')}}" />
		<link rel="stylesheet" href="{{asset('vendor/magnific-popup/magnific-popup.css')}}" />
		<link rel="stylesheet" href="{{asset('vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="{{asset('vendor/bootstrap-fileupload/bootstrap-fileupload.min.css')}}" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="{{asset('vendor/jquery-ui/jquery-ui.css')}}" />
		<link rel="stylesheet" href="{{asset('vendor/jquery-ui/jquery-ui.theme.css')}}" />
		<link rel="stylesheet" href="{{asset('vendor/bootstrap-multiselect/bootstrap-multiselect.css')}}" />
		<link rel="stylesheet" href="{{asset('vendor/morris.js/morris.css')}}" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('stylesheets/theme.css')}}" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{asset('stylesheets/skins/default.css')}}" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('stylesheets/theme-custom.css')}}">

		<!-- Head Libs -->
		<script src="{{asset('vendor/modernizr/modernizr.js')}}"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="javascript::void()" class="logo">
						<img src="{{asset('images/cow.png')}}" width="67" height="65" alt="Porto Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="javascript::void()" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="{{asset('images/!logged-user.jpg')}}" alt="Joseph Doe" class="img-circle" data-lock-picture="{{asset('images/!logged-user.jpg')}}" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name">{{strtoupper(auth()->user()->name)}}</span>
								<span class="role">{{strtoupper(auth()->user()->role)}}</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<!-- <li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
								</li> -->
								<li>
                                    <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a role="menuitem" tabindex="-1" href="{{route('logout')}}"  onclick="event.preventDefault();
                                    this.closest('form').submit();"><i class="fa fa-power-off"></i>{{trans('global.logout')}}</a>
                                    </form> 
									
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
				        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
				            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
				        </div>
				    </div>
				
				    <div class="nano">
				        <div class="nano-content">
				            <nav id="menu" class="nav-main" role="navigation">
				            
				                <ul class="nav nav-main">
                                    @if(auth()->user()->role == "admin")
				                    <li>
				                        <a href="{{route('admin.dashboard')}}">
				                            <i class="fa fa-home" aria-hidden="true"></i>
				                            <span>Dashboard</span>
				                        </a>                        
				                    </li>
                                    @else
                                    <li>
				                        <a href="{{route('emplyee.dashboard')}}">
				                            <i class="fa fa-home" aria-hidden="true"></i>
				                            <span>{{trans('global.dashboard')}}</span>
				                        </a>                        
				                    </li>
                                    @endif
									<li class="nav-parent nav-expanded nav-active">
				                        <a href="javascript::void()">
				                            <i class="fa fa-users" aria-hidden="true"></i>
				                            <span>{{trans('global.users')}}</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
				                                <a href="{{route('users.create')}}">
                                                    {{trans('global.create_user')}}
				                                </a>
				                            </li>
				                            <li class="nav-active">
				                                <a href="{{route('users.index')}}">
												{{trans('global.view_users')}}
				                                </a>
				                            </li>
				                     
				                     
				                        </ul>
				                    </li>
				                    <li class="nav-parent nav-expanded nav-active">
				                        <a href="javascript::void()">
										<i class="fa-solid fa-cow"></i>
				                            <!-- <i class="fas fa-cow" aria-hidden="true"></i> -->
				                            <span>{{trans('global.farm_animals')}}</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
				                                <a href="{{route('animals.create')}}">
                                                {{trans('global.create_animal')}}
				                                </a>
				                            </li>
				                            <li class="nav-active">
				                                <a href="{{route('animals.index')}}">
												{{trans('global.view_animals')}}
				                                </a>
				                            </li>
				                     
				                     
				                        </ul>
				                    </li>
		
				
				                </ul>
				            </nav>
				
				 
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

				<!-- <section role="main" class="content-body">
					<header class="page-header">
						<h2>{{ucfirst(auth()->user()->role)}} Dashboard</h2>
					 -->
						<!-- <div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Layouts</span></li>
								<li><span>Default</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div> -->
					<!-- </header> -->

					<!-- start: page -->
                    @yield('content')
					<!-- end: page -->
				<!-- </section> -->
			</div>


		</section>

		<!-- Vendor -->
		<script src="{{asset('vendor/jquery/jquery.js')}}"></script>
		
		<script src="{{asset('vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
		<script src="{{asset('vendor/bootstrap/js/bootstrap.js')}}"></script>
		<script src="{{asset('vendor/nanoscroller/nanoscroller.js')}}"></script>
		<script src="{{asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
		<script src="{{asset('vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>
		<script src="{{asset('vendor/jquery-placeholder/jquery-placeholder.js')}}"></script>
		

        <!-- Specific Page Vendor -->
		<script src="{{asset('vendor/select2/js/select2.js')}}"></script>
		<script src="{{asset('vendor/jquery-datatables/media/js/jquery.dataTables.js')}}"></script>
		<script src="{{asset('vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js')}}"></script>
		<script src="{{asset('vendor/jquery-datatables-bs3/assets/js/datatables.js')}}"></script>
		

		<!-- Specific Page Vendor -->
		<script src="{{asset('vendor/jquery-ui/jquery-ui.js')}}"></script>
		<script src="{{asset('vendor/jqueryui-touch-punch/jqueryui-touch-punch.js')}}"></script>
		<script src="{{asset('vendor/jquery-appear/jquery-appear.js')}}"></script>
		<script src="{{asset('vendor/bootstrap-multiselect/bootstrap-multiselect.js')}}"></script>
		<script src="{{asset('vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
		<script src="{{asset('vendor/flot/jquery.flot.js')}}"></script>
		<script src="{{asset('vendor/flot.tooltip/flot.tooltip.js')}}"></script>
		<script src="{{asset('vendor/flot/jquery.flot.pie.js')}}"></script>
		<script src="{{asset('vendor/flot/jquery.flot.categories.js')}}"></script>
		<script src="{{asset('vendor/flot/jquery.flot.resize.js')}}"></script>
		<script src="{{asset('vendor/jquery-sparkline/jquery-sparkline.js')}}"></script>
		<script src="{{asset('vendor/raphael/raphael.js')}}"></script>
		<script src="{{asset('vendor/morris.js/morris.js')}}"></script>
		<script src="{{asset('vendor/gauge/gauge.js')}}"></script>
		<script src="{{asset('vendor/snap.svg/snap.svg.js')}}"></script>
		<script src="{{asset('vendor/liquid-meter/liquid.meter.js')}}"></script>
		<script src="{{asset('vendor/jqvmap/jquery.vmap.js')}}"></script>
		<script src="{{asset('vendor/jqvmap/data/jquery.vmap.sampledata.js')}}"></script>
		<script src="{{asset('vendor/jqvmap/maps/jquery.vmap.world.js')}}"></script>
		<script src="{{asset('vendor/jqvmap/maps/continents/jquery.vmap.africa.js')}}"></script>
		<script src="{{asset('vendor/jqvmap/maps/continents/jquery.vmap.asia.js')}}"></script>
		<script src="{{asset('vendor/jqvmap/maps/continents/jquery.vmap.australia.js')}}"></script>
		<script src="{{asset('vendor/jqvmap/maps/continents/jquery.vmap.europe.js')}}"></script>
		<script src="{{asset('vendor/jqvmap/maps/continents/jquery.vmap.north-america.js')}}"></script>
		<script src="{{asset('vendor/jqvmap/maps/continents/jquery.vmap.south-america.js')}}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('javascripts/theme.js')}}"></script>
		
		<!-- Theme Custom -->
		<script src="{{asset('javascripts/theme.custom.js')}}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{asset('javascripts/theme.init.js')}}"></script>

		<!-- Examples -->
		<script src="{{asset('javascripts/dashboard/examples.dashboard.js')}}"></script>

        <!-- Examples -->
		<script src="{{asset('javascripts/tables/examples.datatables.default.js')}}"></script>
		<script src="{{asset('javascripts/tables/examples.datatables.row.with.details.js')}}"></script>
		<script src="{{asset('javascripts/tables/examples.datatables.tabletools.js')}}"></script>
		
		<script src="{{asset('javascripts/ui-elements/examples.modals.js')}}"></script>

		<!-- Specific Page Vendor -->
		<script src="{{asset('vendor/autosize/autosize.js')}}"></script>
		<script src="{{asset('vendor/bootstrap-fileupload/bootstrap-fileupload.min.js')}}"></script>

		<!-- Specific Page Vendor -->
		<script src="{{asset('vendor/jquery-validation/jquery.validate.js')}}"></script>
		
		<script src="{{asset('javascripts/forms/examples.validation.js')}}"></script>

		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
		@yield('scripts')
	</body>
</html>