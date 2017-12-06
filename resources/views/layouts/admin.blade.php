<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Bazar</title>

	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="{{asset('components/bootstrap/dist/css/bootstrap.min.css')}}" />

	<!-- RTL support - for demo only -->
	<script src="{{asset('js/demo-rtl.js')}}"></script>
	<!--
	If you need RTL support just include here RTL CSS file <link rel="stylesheet" type="text/css" href="css/libs/bootstrap-rtl.min.css" />
	And add "rtl" class to <body> element - e.g. <body class="rtl">
	-->

	<!-- libraries -->
	<link rel="stylesheet" type="text/css" href="{{asset('components/font-awesome/css/font-awesome.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/libs/nanoscroller.css')}}" />

	<!-- global styles -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/compiled/theme_styles.css')}}" />

	<!-- this page specific styles -->
	<link rel="stylesheet" type="text/css" href="{{asset('components-custom/jquery-jvectormap-2.0.3/jquery-jvectormap-2.0.3.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('components/weather-icons/css/weather-icons.min.css')}}" />

	<!-- Favicon -->
	<link type="image/x-icon" href="{{asset('favicon.png')}}" rel="shortcut icon" />

	<!-- google font libraries -->
	

	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div id="theme-wrapper">
		<header class="navbar" id="header-navbar">
			<div class="container">
				<a href="index.html" id="logo" class="navbar-brand">
					<img src="img/logo.png" alt="" class="normal-logo logo-white"/>
					<img src="img/logo-black.png" alt="" class="normal-logo logo-black"/>
					<img src="img/logo-small.png" alt="" class="small-logo hidden-xs hidden-sm hidden"/>
				</a>

				<div class="clearfix">
				<button class="navbar-toggle" data-target=".navbar-ex1-collapse" data-toggle="collapse" type="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="fa fa-bars"></span>
				</button>

				<div class="nav-no-collapse navbar-left pull-left hidden-sm hidden-xs">
					<ul class="nav navbar-nav pull-left">
						<li>
							<a class="btn" id="make-small-nav">
								<i class="fa fa-bars"></i>
							</a>
						</li>
						<li class="dropdown hidden-xs">
							<a class="btn dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-bell"></i>
								<span class="count">8</span>
							</a>
							<ul class="dropdown-menu notifications-list">
								<li class="pointer">
									<div class="pointer-inner">
										<div class="arrow"></div>
									</div>
								</li>
								<li class="item">
									<a href="#">
										<i class="fa fa-comment"></i>
										<span class="content">New comment on ‘Awesome P...</span>
										<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
									</a>
								</li>
								<li class="item">
									<a href="#">
										<i class="fa fa-plus"></i>
										<span class="content">New user registration</span>
										<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
									</a>
								</li>
								<li class="item">
									<a href="#">
										<i class="fa fa-envelope"></i>
										<span class="content">New Message from George</span>
										<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
									</a>
								</li>
								<li class="item">
									<a href="#">
										<i class="fa fa-money"></i>
										<span class="content">New purchase</span>
										<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
									</a>
								</li>
								<li class="item">
									<a href="#">
										<i class="fa fa-eye"></i>
										<span class="content">New order</span>
										<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
									</a>
								</li>
								<li class="item-footer">
									<a href="#">
										Ver todas las notificaciones
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>

				<div class="nav-no-collapse pull-right" id="header-nav">
					<ul class="nav navbar-nav pull-right">
						<li class="mobile-search">
							<a class="btn">
								<i class="fa fa-search"></i>
							</a>

							<div class="drowdown-search">
								<form role="search">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Search...">
										<i class="fa fa-search nav-search-icon"></i>
									</div>
								</form>
							</div>

						</li>
						<li class="dropdown profile-dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="img/samples/scarlet-19.png" alt=""/>
								<span class="hidden-xs">Usuario</span> <b class="caret"></b>
							</a>
							<ul class="dropdown-menu dropdown-menu-right">
								<li><a href="user-profile.html"><i class="fa fa-user"></i>Perfil</a></li>
								<li><a href="#"><i class="fa fa-cog"></i>Configuración</a></li>
								<li><a href="#"><i class="fa fa-power-off"></i>Cerrar sesión</a></li>
							</ul>
						</li>
						<li class="hidden-xxs">
							<a class="btn">
								<i class="fa fa-power-off"></i>
							</a>
						</li>
					</ul>
				</div>
				</div>
			</div>
		</header>
		<div id="page-wrapper" class="container">
			<div class="row">
				<div id="nav-col">
					<section id="col-left" class="col-left-nano">
						<div id="col-left-inner" class="col-left-nano-content">
							<div id="user-left-box" class="clearfix hidden-sm hidden-xs dropdown profile2-dropdown">
								<img alt="" src="img/samples/scarlet-59.png" />
								<div class="user-box">
									<span class="name">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											Usuario
											<i class="fa fa-angle-down"></i>
										</a>
										<ul class="dropdown-menu">
											<li><a href="user-profile.html"><i class="fa fa-user"></i>Perfil</a></li>
											<li><a href="#"><i class="fa fa-cog"></i>Configuración</a></li>
											<li><a href="#"><i class="fa fa-power-off"></i>Cerrar sesión</a></li>
										</ul>
									</span>
									<span class="status">
										<i class="fa fa-circle"></i> En línea
									</span>
								</div>
							</div>
							<div class="collapse navbar-collapse navbar-ex1-collapse" id="sidebar-nav">
								<ul class="nav nav-pills nav-stacked">
									<li class="active">
										<a href="index.html">
											<i class="fa fa-home"></i>
											<span>Inicio</span>
										</a>
									</li>
									<li>
										<a href="#" class="dropdown-toggle">
											<i class="fa fa-user"></i>
											<span>Clientes</span>
										</a>
									</li>
									<li>
										<a href="#" class="dropdown-toggle">
											<i class="fa fa-barcode"></i>
											<span>Artículos</span>
										</a>
									</li>
									<li>
										<a href="#" class="dropdown-toggle">
											<i class="fa fa-shopping-cart"></i>
											<span>Compras</span>
										</a>
									</li>
									<li>
										<a href="#" class="dropdown-toggle">
											<i class="fa fa-tag"></i>
											<span>Ventas</span>
										</a>
									</li>
									<li>
										<a href="#" class="dropdown-toggle">
											<i class="fa fa-copy"></i>
											<span>Reportes</span>
											<i class="fa fa-angle-right drop-icon"></i>
										</a>
										<ul class="submenu">
											<li>
												<a href="calendar.html">
													Calendar
												</a>
											</li>
											<li>
												<a href="gallery.html">
													Gallery
												</a>
											</li>
											<li>
												<a href="gallery-v2.html">
													Gallery v2
												</a>
											</li>
											<li>
												<a href="pricing.html">
													Pricing
												</a>
											</li>
											<li>
												<a href="projects.html">
													Projects
												</a>
											</li>
											<li>
												<a href="team-members.html">
													Team Members
												</a>
											</li>
											<li>
												<a href="timeline.html">
													Timeline
												</a>
											</li>
											<li>
												<a href="timeline-grid.html">
													Timeline Grid
												</a>
											</li>
											<li>
												<a href="user-profile.html">
													User Profile
												</a>
											</li>
											<li>
												<a href="search.html">
													Search Results
												</a>
											</li>
											<li>
												<a href="invoice.html">
													Invoice
												</a>
											</li>
											<li>
												<a href="intro.html">
													Tour Layout
												</a>
											</li>
										</ul>
									</li>

							</div>
						</div>
					</section>
					<div id="nav-col-submenu"></div>
				</div>
				<div id="content-wrapper">
					<div class="row">
						<div class="col-lg-12">
							<div class="row">
								<div class="col-lg-12">
									<div id="content-header" class="clearfix">
										<div class="pull-left">
											<ol class="breadcrumb">
											</ol>

											<h1>Inicio</h1>
										</div>
									</div>
								</div>
							</div>

            @yield('contenido')
						</div>
					</div>

					<footer id="footer-bar" class="row">
						<p id="footer-copyright" class="col-xs-12">
							Bazar de la esquina
						</p>
					</footer>
				</div>
			</div>
		</div>
	</div>

		<!-- global scripts -->
	<script src="{{asset('js/demo-skin-changer.js')}}"></script> <!-- only for demo -->

	<script src="{{asset('components/jquery/dist/jquery.min.js')}}"></script>
	<script src="{{asset('components/bootstrap/dist/js/bootstrap.js')}}"></script>
	<script src="{{asset('components/nanoscroller/bin/javascripts/jquery.nanoscroller.min.js')}}"></script>

	<script src="{{asset('js/demo.js')}}"></script> <!-- only for demo -->

	<!-- this page specific scripts -->
	<script src="{{asset('components/moment/min/moment.min.js')}}"></script>
	<script src="{{asset('components-custom/jquery-jvectormap-2.0.3/jquery-jvectormap-2.0.3.min.js')}}"></script>
	<script src="{{asset('components-custom/jvectormap-maps/jquery-jvectormap-world-merc.js')}}"></script>
	<script src="{{asset('components-custom/jvectormap-maps/gdp-data.js')}}"></script>
	<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="components/flot/excanvas.min.js"></script><![endif]-->
	<script src="{{asset('components/flot/jquery.flot.js')}}"></script>
	<script src="{{asset('components/flot/jquery.flot.resize.js')}}"></script>
	<script src="{{asset('components/flot/jquery.flot.time.js')}}"></script>
	<script src="{{asset('components/flot/jquery.flot.threshold.js')}}"></script>
	<script src="{{asset('components/flot-axislabels/jquery.flot.axislabels.js')}}"></script>
	<script src="{{asset('components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
	<script src="{{asset('components/skycons/skycons.js')}}"></script>

	<!-- theme scripts -->
	<script src="{{asset('js/scripts.js')}}"></script>
	<script src="{{asset('components/PACE/pace.min.js')}}"></script>

	<!-- this page specific inline scripts -->
	<script>
	$(document).ready(function() {

	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}

		if ($('#graph-bar').length) {
			var data1 = [
			    [gd(2015, 1, 1), 838], [gd(2015, 1, 2), 749], [gd(2015, 1, 3), 634], [gd(2015, 1, 4), 1080], [gd(2015, 1, 5), 850], [gd(2015, 1, 6), 465], [gd(2015, 1, 7), 453], [gd(2015, 1, 8), 646], [gd(2015, 1, 9), 738], [gd(2015, 1, 10), 899], [gd(2015, 1, 11), 830], [gd(2015, 1, 12), 789]
			];

			var data2 = [
			    [gd(2015, 1, 1), 342], [gd(2015, 1, 2), 721], [gd(2015, 1, 3), 493], [gd(2015, 1, 4), 403], [gd(2015, 1, 5), 657], [gd(2015, 1, 6), 782], [gd(2015, 1, 7), 609], [gd(2015, 1, 8), 543], [gd(2015, 1, 9), 599], [gd(2015, 1, 10), 359], [gd(2015, 1, 11), 783], [gd(2015, 1, 12), 680]
			];

			var series = new Array();

			series.push({
				data: data1,
				bars: {
					show : true,
					barWidth: 24 * 60 * 60 * 12000,
					lineWidth: 1,
					fill: 1,
					align: 'center'
				},
				label: 'Revenues'
			});
			series.push({
				data: data2,
				color: '#e84e40',
				lines: {
					show : true,
					lineWidth: 3,
				},
				points: {
					fillColor: "#e84e40",
					fillColor: '#ffffff',
					pointWidth: 1,
					show: true
				},
				label: 'Orders'
			});

			$.plot("#graph-bar", series, {
				colors: ['#03a9f4', '#f1c40f', '#2ecc71', '#3498db', '#9b59b6', '#95a5a6'],
				grid: {
					tickColor: "#f2f2f2",
					borderWidth: 0,
					hoverable: true,
					clickable: true
				},
				legend: {
					noColumns: 1,
					labelBoxBorderColor: "#000000",
					position: "ne"
				},
				shadowSize: 0,
				xaxis: {
					mode: "time",
					tickSize: [1, "month"],
					tickLength: 0,
					// axisLabel: "Date",
					axisLabelUseCanvas: true,
					axisLabelFontSizePixels: 12,
					axisLabelFontFamily: 'Open Sans, sans-serif',
					axisLabelPadding: 10
				}
			});

			var previousPoint = null;
			$("#graph-bar").bind("plothover", function (event, pos, item) {
				if (item) {
					if (previousPoint != item.dataIndex) {

						previousPoint = item.dataIndex;

						$("#flot-tooltip").remove();
						var x = item.datapoint[0],
						y = item.datapoint[1];

						showTooltip(item.pageX, item.pageY, item.series.label, y );
					}
				}
				else {
					$("#flot-tooltip").remove();
					previousPoint = [0,0,0];
				}
			});

			function showTooltip(x, y, label, data) {
				$('<div id="flot-tooltip">' + '<b>' + label + ': </b><i>' + data + '</i>' + '</div>').css({
					top: y + 5,
					left: x + 20
				}).appendTo("body").fadeIn(200);
			}
		}

		//WORLD MAP
		$('#world-map').vectorMap({
			map: 'world_merc',
			backgroundColor: '#ffffff',
			zoomOnScroll: false,
			regionStyle: {
				initial: {
					fill: '#e1e1e1',
					stroke: 'none',
					"stroke-width": 0,
					"stroke-opacity": 1
				},
				hover: {
					"fill-opacity": 0.8
				},
				selected: {
					fill: '#8dc859'
				},
				selectedHover: {
				}
			},
			markerStyle: {
				initial: {
					fill: '#e84e40',
					stroke: '#e84e40'
				}
			},
			markers: [
				{latLng: [38.35, -121.92], name: 'Los Angeles - 23'},
				{latLng: [39.36, -73.12], name: 'New York - 84'},
				{latLng: [50.49, -0.23], name: 'London - 43'},
				{latLng: [36.29, 138.54], name: 'Tokyo - 33'},
				{latLng: [37.02, 114.13], name: 'Beijing - 91'},
				{latLng: [-32.59, 150.21], name: 'Sydney - 22'},
			],
			series: {
				regions: [{
					values: gdpData,
					scale: ['#6fc4fe', '#2980b9'],
					normalizeFunction: 'polynomial'
				}]
			},
			onRegionLabelShow: function(e, el, code){
				el.html(el.html()+' ('+gdpData[code]+')');
			}
		});

		/* SPARKLINE - graph in header */
		var orderValues = [10,8,5,7,4,4,3,8,0,7,10,6,5,4,3,6,8,9];

		$('.spark-orders').sparkline(orderValues, {
			type: 'bar',
			barColor: '#ced9e2',
			height: 25,
			barWidth: 6
		});

		var revenuesValues = [8,3,2,6,4,9,1,10,8,2,5,8,6,9,3,4,2,3,7];

		$('.spark-revenues').sparkline(revenuesValues, {
			type: 'bar',
			barColor: '#ced9e2',
			height: 25,
			barWidth: 6
		});

		/* ANIMATED WEATHER */
		var skycons = new Skycons({"color": "#03a9f4"});
		// on Android, a nasty hack is needed: {"resizeClear": true}

		// you can add a canvas by it's ID...
		skycons.add("current-weather", Skycons.SNOW);

		// start animation!
		skycons.play();

	});
	</script>

</body>
</html>
