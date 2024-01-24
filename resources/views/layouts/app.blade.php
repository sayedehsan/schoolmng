<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>{{!empty($header_title) ? $header_title : ""}}| School</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{url('/global_assets/css/icons/icomoon/styles.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{url('assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{url('assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{url('assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{url('assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{url('/global_assets/js/main/jquery.min.js')}}"></script>
	<script src="{{url('/global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
	<script src="{{url('/global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{url('/global_assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
	<script src="{{url('/global_assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
	<script src="{{url('/global_assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
	<script src="{{url('/global_assets/js/plugins/ui/moment/moment.min.js')}}"></script>
	<script src="{{url('/global_assets/js/plugins/pickers/daterangepicker.js')}}"></script>

	<script src="{{url('assets/js/app.js')}}"></script>
	<script src="{{url('/global_assets/js/demo_pages/dashboard.js')}}"></script>
	<script src="{{url('/global_assets/js/demo_charts/pages/dashboard/light/streamgraph.js')}}"></script>
	<script src="{{url('/global_assets/js/demo_charts/pages/dashboard/light/sparklines.js')}}"></script>
	<script src="{{url('/global_assets/js/demo_charts/pages/dashboard/light/lines.js')}}"></script>	
	<script src="{{url('/global_assets/js/demo_charts/pages/dashboard/light/areas.js')}}"></script>
	<script src="{{url('/global_assets/js/demo_charts/pages/dashboard/light/donuts.js')}}"></script>
	<script src="{{url('/global_assets/js/demo_charts/pages/dashboard/light/bars.js')}}"></script>
	<script src="{{url('/global_assets/js/demo_charts/pages/dashboard/light/progress.js')}}"></script>
	<script src="{{url('/global_assets/js/demo_charts/pages/dashboard/light/heatmaps.js')}}"></script>
	<script src="{{url('/global_assets/js/demo_charts/pages/dashboard/light/pies.js')}}"></script>
	<script src="{{url('/global_assets/js/demo_charts/pages/dashboard/light/bullets.js')}}"></script>
	<script src="{{url('global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
	<script src="{{url('global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>

	<script src="{{url('assets/js/app.js')}}"></script>
	<script src="{{url('global_assets/js/demo_pages/datatables_basic.js')}}"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	@include('layouts.header')
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<a href="#"><img src="{{url('/global_assets/images/placeholders/placeholder.jpg')}}" width="38" height="38" class="rounded-circle" alt=""></a>
							</div>

							<div class="media-body">
								<div class="media-title font-weight-semibold">{{Auth::user()->name}}</div>
								<div class="font-size-xs opacity-50">
									<i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<a href="#" class="text-white"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
						@if(Auth::user()->type == 1)
						<li class="nav-item ">
							<a href="{{url('admin/dashboard')}}" class="nav-link" @if (request()->segment(2) == "dashbord") active @endif><i class="icon-copy"></i> <span>Dashboard</span></a>
						</li>
						@endif
						@if(Auth::user()->type == 2)
						<li class="nav-item ">
							<a href="{{url('office/dashboard')}}" class="nav-link" @if (request()->segment(2) == "dashbord") active @endif><i class="icon-copy"></i> <span>Dashboard</span></a>
						</li>
						@endif
						@if(Auth::user()->type == 3)
						<li class="nav-item ">
							<a href="{{url('parent/dashboard')}}" class="nav-link" @if (request()->segment(2) == "dashbord") active @endif><i class="icon-copy"></i> <span>Dashboard</span></a>
						</li>
						@endif
						@if(Auth::user()->type == 4)
						<li class="nav-item ">
							<a href="{{url('student/dashboard')}}" class="nav-link" @if (request()->segment(2) == "dashbord") active @endif><i class="icon-copy"></i> <span>Dashboard</span></a>
						</li>
						@endif
						@if(Auth::user()->type == 5)
						<li class="nav-item ">
							<a href="{{url('teacher/dashboard')}}" class="nav-link" @if (request()->segment(2) == "dashbord") active @endif><i class="icon-copy"></i> <span>Dashboard</span></a>
						</li>
						@endif

						@if(Auth::user()->type == 1)
						<li class="nav-item ">
							<a href="{{url('admin/list')}}" class="nav-link" @if (request()->segment(2) == "admin") active @endif><i class="icon-copy"></i> <span>Admin</span></a>
						</li>
						<li class="nav-item ">
							<a href="{{url('class/list')}}" class="nav-link" @if (request()->segment(2) == "class") active @endif><i class="icon-copy"></i> <span>Class</span></a>
						</li>
						<li class="nav-item ">
							<a href="{{url('subject/list')}}" class="nav-link" @if (request()->segment(2) == "subject") active @endif><i class="icon-copy"></i> <span>Subject</span></a>
						</li>
						@endif
						@if(Auth::user()->type == 2)
						<li class="nav-item ">
							<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Office</span></a>
						</li>
						@endif
						@if(Auth::user()->type == 3)
						<li class="nav-item ">
							<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Parent</span></a>
						</li>
						@endif
						@if(Auth::user()->type == 4)
						<li class="nav-item ">
							<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Student</span></a>
						</li>
						@endif
						@if(Auth::user()->type == 4)
						<li class="nav-item ">
							<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Teacher</span></a>
						</li>
						@endif

						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Layouts</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="index.html" class="nav-link active">Default layout</a></li>
								<li class="nav-item"><a href="../../../../layout_2/LTR/default/full/index.html" class="nav-link">Layout 2</a></li>
								<li class="nav-item"><a href="../../../../layout_3/LTR/default/full/index.html" class="nav-link">Layout 3</a></li>
								<li class="nav-item"><a href="../../../../layout_4/LTR/default/full/index.html" class="nav-link">Layout 4</a></li>
								<li class="nav-item"><a href="../../../../layout_5/LTR/default/full/index.html" class="nav-link">Layout 5</a></li>
								<li class="nav-item"><a href="../../../../layout_6/LTR/default/full/index.html" class="nav-link disabled">Layout 6 <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-color-sampler"></i> <span>Themes</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<li class="nav-item"><a href="index.html" class="nav-link active">Default</a></li>
								<li class="nav-item"><a href="../../../LTR/material/full/index.html" class="nav-link">Material</a></li>
								<li class="nav-item"><a href="../../../LTR/dark/full/index.html" class="nav-link">Dark</a></li>
								<li class="nav-item"><a href="../../../LTR/clean/full/index.html" class="nav-link disabled">Clean <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="changelog.html" class="nav-link">
								<i class="icon-list-unordered"></i>
								<span>Changelog</span>
								<span class="badge bg-blue-400 align-self-center ml-auto">2.3</span>
							</a>
						</li>
					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			{{-- body --}}
			<div class="page-header page-header-light">
				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Dashboard</span>
						</div>
			
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>
				</div>
			</div>
			<!-- /page header -->
			
			
			<!-- Content area -->
			<div class="content">
            @yield('context')
		</div>
		<!-- /content area -->


			<!-- Footer -->
			@include('layouts.footer')
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
