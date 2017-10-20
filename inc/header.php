<?php

include('include/dbcon.php');

// Include MySQL class
require_once('inc/mysql.class.php');
// Include database connection
require_once('inc/global.inc.php');

$sql="SELECT * from admin where a_code='".$_SESSION['admin']"' ";
$logininfo = $db->query($sql);
$rw = $logininfo->fetch();

?>








<!DOCTYPE html>
<!-- Template Name: Rapido - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.2 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->
	<!-- start: HEAD -->
	
<!-- Mirrored from www.cliptheme.com/demo/rapido/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Apr 2016 13:49:52 GMT -->
<head>
		<title>Rapido - Responsive Admin Template</title>
		<!-- start: META -->
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: MAIN CSS -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,200,100,800' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/plugins/iCheck/skins/all.css">
		<link rel="stylesheet" href="assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css">
		<link rel="stylesheet" href="assets/plugins/animate.css/animate.min.css">
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR SUBVIEW CONTENTS -->
		<link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.theme.css">
		<link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.transitions.css">
		<link rel="stylesheet" href="assets/plugins/summernote/dist/summernote.css">
		<link rel="stylesheet" href="assets/plugins/fullcalendar/fullcalendar/fullcalendar.css">
		<link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-select/bootstrap-select.min.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css">
		<link rel="stylesheet" href="assets/plugins/DataTables/media/css/DT_bootstrap.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css">
		<!-- end: CSS REQUIRED FOR THIS SUBVIEW CONTENTS-->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="stylesheet" href="assets/plugins/weather-icons/css/weather-icons.min.css">
		<link rel="stylesheet" href="assets/plugins/nvd3/nv.d3.min.css">
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CORE CSS -->
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/styles-responsive.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-style8.css" type="text/css" id="skin_color">
		<link rel="stylesheet" href="assets/css/print.css" type="text/css" media="print"/>
		<!-- end: CORE CSS -->
		<link rel="shortcut icon" href="favicon.ico" />






<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="DataTables-1.10.4/media/css/jquery.dataTables.css" />
  
<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="DataTables-1.10.4/media/js/jquery.js"></script>
  
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="DataTables-1.10.4/media/js/jquery.dataTables.js"></script>

<script type="text/javascript">
$.extend( $.fn.dataTable.defaults, {
    //searching: false,
    ordering:  false
} );
</script>

<script type="text/javascript">
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>








<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>





		
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body>
		<!-- start: SLIDING BAR (SB) -->
		<div id="slidingbar-area">
			<div id="slidingbar">
				<div class="row">
				
				</div>
				<div class="row">
					<!-- start: SLIDING BAR TOGGLE BUTTON -->
					<div class="col-md-12 text-center">
						<a href="#" class="sb_toggle"><i class="fa fa-chevron-up"></i></a>
					</div>
					<!-- end: SLIDING BAR TOGGLE BUTTON -->
				</div>
			</div>
		</div>
		<!-- end: SLIDING BAR -->
		<div class="main-wrapper">
			<!-- start: TOPBAR -->
			<header class="topbar navbar navbar-inverse navbar-fixed-top inner">
				<!-- start: TOPBAR CONTAINER -->
				<div class="container">
					<div class="navbar-header">
						<a class="sb-toggle-left hidden-md hidden-lg" href="#main-navbar">
							<i class="fa fa-bars"></i>
						</a>
						<!-- start: LOGO -->
						
						<!-- end: LOGO -->
					</div>
					<div class="topbar-tools">
						<!-- start: TOP NAVIGATION MENU -->
						<ul class="nav navbar-right">
							<!-- start: USER DROPDOWN -->
							<li class="dropdown current-user">
								<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
								<?php 
																	
									echo '<img src="images/'.$rw['picture'].'" alt="" width="30" height="30">';
									?>
									 <span class="username hidden-xs"><?php echo $rw['firstname'] ?>  <?php echo $rw['lastname'] ?></span> <i class="fa fa-caret-down "></i>
								</a>
								<ul class="dropdown-menu dropdown-dark">
									<li>
									<a href="admin_profile.php">
											My Profile
										</a>
									</li>
									<li>
										<a href="pages_calendar.html">
											My Calendar
										</a>
									</li>
									<li>
										<a href="pages_messages.html">
											My Messages (3)
										</a>
									</li>
									<li>
										<a href="login_lock_screen.html">
											Lock Screen
										</a>
									</li>
									<li>
										<a href="login_login.html">
											Log Out
										</a>
									</li>
								</ul>
							</li>
							<!-- end: USER DROPDOWN -->
							
						</ul>
						<!-- end: TOP NAVIGATION MENU -->
					</div>
				</div>
				<!-- end: TOPBAR CONTAINER -->
			</header>


			<a class="closedbar inner hidden-sm hidden-xs" href="#">
			</a>
			<nav id="pageslide-left" class="pageslide inner">
				<div class="navbar-content">
					<!-- start: SIDEBAR -->
					<div class="main-navigation left-wrapper transition-left">
						<div class="navigation-toggler hidden-sm hidden-xs">
							
						</div>
						<div class="user-profile border-top padding-horizontal-10 block">
							<div class="inline-block">
								<?php 
																	
									echo '<img src="images/'.$rw['picture'].'" alt="" width="150" height="150">';
									?>
							</div>
							<div class="inline-block">
								<h5 class="no-margin"> Welcome </h5>
								<h4 class="no-margin"> <?php echo $rw['firstname'] ?>  <?php echo $rw['lastname'] ?> </h4>
								
							</div>
						</div>
						<!-- start: MAIN NAVIGATION MENU -->
						<ul class="main-navigation-menu">
							<li class="active open">
								<a href="dashboard.php"><i class="fa fa-home"></i> <span class="title"> Dashboard </span> </a>
							</li>
							<li>
								<a href="javascript:void(0)"><i class="fa fa-bus"></i> <span class="title"> Bus </span><i class="icon-arrow"></i> </a>
								<ul class="sub-menu">
									 
									<li>
										<a href="t.php">
											<span class="title"> Add / View Bus </span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="title"> Book Bus </span>
										</a>
									</li>
									
								</ul>
							</li>
							<li >
								<a href="dashboard.php"><i class="fa fa-table"></i> <span class="title"> Reservation </span> </a>
							</li>
							<li >
								<a href="dashboard.php"><i class="fa fa-money"></i> <span class="title"> Transactions </span> </a>
							</li>


							<li>
								<a href="javascript:void(0)"><i class="fa fa-user"></i> <span class="title"> Agents </span><i class="icon-arrow"></i> </a>
								<ul class="sub-menu">
									<li>
										<a href="#">
											<span class="title"> Add / View Agents</span>
										</a>
									</li>
									
								</ul>
							</li>
							<!--<li>
								<a href="javascript:void(0)"><i class="fa fa-user"></i> <span class="title">Login</span><i class="icon-arrow"></i> </a>
								<ul class="sub-menu">
									<li>
										<a href="login_login.html">
											<span class="title"> Login Form </span>
										</a>
									</li>
									<li>
										<a href="login_login6cf4.html?box=register">
											<span class="title"> Registration Form </span>
										</a>
									</li>
									<li>
										<a href="login_login6255.html?box=forgot">
											<span class="title"> Forgot Password Form </span>
										</a>
									</li>
									<li>
										<a href="login_lock_screen.html">
											<span class="title">Lock Screen</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0)"><i class="fa fa-code"></i> <span class="title">Pages</span><i class="icon-arrow"></i> </a>
								<ul class="sub-menu">
									<li>
										<a href="pages_user_profile.html">
											<span class="title">User Profile</span>
										</a>
									</li>
									<li>
										<a href="pages_invoice.html">
											<span class="title">Invoice</span>
										</a>
									</li>
									<li>
										<a href="pages_gallery.html">
											<span class="title">Gallery</span>
										</a>
									</li>
									<li>
										<a href="pages_timeline.html">
											<span class="title">Timeline</span>
										</a>
									</li>
									<li>
										<a href="pages_calendar.html">
											<span class="title">Calendar</span>
										</a>
									</li>
									<li>
										<a href="pages_messages.html">
											<span class="title">Messages</span>
										</a>
									</li>
									<li>
										<a href="pages_blank_page.html">
											<span class="title">Blank Page</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0)"><i class="fa fa-cubes"></i> <span class="title">Utility</span><i class="icon-arrow"></i> </a>
								<ul class="sub-menu">
									<li>
										<a href="utility_faq.html">
											<span class="title">Faq</span>
										</a>
									</li>
									<li>
										<a href="utility_search_result.html">
											<span class="title">Search Results </span>
										</a>
									</li>
									<li>
										<a href="utility_404_example1.html">
											<span class="title">Error 404 Example 1</span>
										</a>
									</li>
									<li>
										<a href="utility_404_example2.html">
											<span class="title">Error 404 Example 2</span>
										</a>
									</li>
									<li>
										<a href="utility_404_example3.html">
											<span class="title">Error 404 Example 3</span>
										</a>
									</li>
									<li>
										<a href="utility_500_example1.html">
											<span class="title">Error 500 Example 1</span>
										</a>
									</li>
									<li>
										<a href="utility_500_example2.html">
											<span class="title">Error 500 Example 2</span>
										</a>
									</li>
									<li>
										<a href="utility_pricing_table.html">
											<span class="title">Pricing Table</span>
										</a>
									</li>
									<li>
										<a href="utility_coming_soon.html">
											<span class="title">Cooming Soon</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript:;" class="active">
									<i class="fa fa-folder"></i> <span class="title"> 3 Level Menu </span> <i class="icon-arrow"></i>
								</a>
								<ul class="sub-menu">
									<li>
										<a href="javascript:;">
											Item 1 <i class="icon-arrow"></i>
										</a>
										<ul class="sub-menu">
											<li>
												<a href="#">
													Sample Link 1
												</a>
											</li>
											<li>
												<a href="#">
													Sample Link 2
												</a>
											</li>
											<li>
												<a href="#">
													Sample Link 3
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="javascript:;">
											Item 1 <i class="icon-arrow"></i>
										</a>
										<ul class="sub-menu">
											<li>
												<a href="#">
													Sample Link 1
												</a>
											</li>
											<li>
												<a href="#">
													Sample Link 1
												</a>
											</li>
											<li>
												<a href="#">
													Sample Link 1
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">
											Item 3
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript:;">
									<i class="fa fa-folder-open"></i> <span class="title"> 4 Level Menu </span><i class="icon-arrow"></i> <span class="arrow "></span>
								</a>
								<ul class="sub-menu">
									<li>
										<a href="javascript:;">
											Item 1 <i class="icon-arrow"></i>
										</a>
										<ul class="sub-menu">
											<li>
												<a href="javascript:;">
													Sample Link 1 <i class="icon-arrow"></i>
												</a>
												<ul class="sub-menu">
													<li>
														<a href="#"><i class="fa fa-times"></i> Sample Link 1</a>
													</li>
													<li>
														<a href="#"><i class="fa fa-pencil"></i> Sample Link 1</a>
													</li>
													<li>
														<a href="#"><i class="fa fa-edit"></i> Sample Link 1</a>
													</li>
												</ul>
											</li>
											<li>
												<a href="#">
													Sample Link 1
												</a>
											</li>
											<li>
												<a href="#">
													Sample Link 2
												</a>
											</li>
											<li>
												<a href="#">
													Sample Link 3
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="javascript:;">
											Item 2 <i class="icon-arrow"></i>
										</a>
										<ul class="sub-menu">
											<li>
												<a href="#">
													Sample Link 1
												</a>
											</li>
											<li>
												<a href="#">
													Sample Link 1
												</a>
											</li>
											<li>
												<a href="#">
													Sample Link 1
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">
											Item 3
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="maps.html"><i class="fa fa-map-marker"></i> <span class="title">Maps</span> </a>
							</li>
							<li>
								<a href="charts.html"><i class="fa fa-bar-chart-o"></i> <span class="title">Charts</span> </a>
							</li>-->
						</ul>
						<!-- end: MAIN NAVIGATION MENU -->
					</div>
					<!-- end: SIDEBAR -->
				</div>
				<div class="slide-tools">
					<div class="col-xs-6 text-left no-padding">
						<a class="btn btn-sm status" href="#">
							Status <i class="fa fa-dot-circle-o text-green"></i> <span>Online</span>
						</a>
					</div>
					<div class="col-xs-6 text-right no-padding">
						<a class="btn btn-sm log-out text-right" href="index.php">
							<i class="fa fa-power-off"></i> Log Out
						</a>
					</div>
				</div>
			</nav>