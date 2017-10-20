<?php



// Include MySQL class
require_once('connect.php');

session_start();


		


$sql = "SELECT * FROM admin WHERE email='".$_SESSION['email']."'";
			$query 	= mysqli_query($con, $sql);
			$rw = mysqli_fetch_array($query);


if (!isset($_SESSION['email'])){
header('location:index.php');
}

			//if ($_SESSION=="") {
				//echo "<script>alert('good back'); </script";
			//}
//if($_SESSION=="" && $price==""){
     // echo "<script>alert('Fields are empty');  </script>";
      //$msg = "Fields are empty!";
   // }



?>










<!DOCTYPE html>
<!-- Template Name: Rapido - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.2 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->
	<!-- start: HEAD -->
	
<!-- Mirrored from www.cliptheme.com/demo/rapido/pages_blank_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Apr 2016 13:55:55 GMT -->
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
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="stylesheet" href="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css">
		<link rel="stylesheet" href="assets/plugins/select2/select2.css">
		<link rel="stylesheet" href="assets/plugins/datepicker/css/datepicker.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css">
		<link rel="stylesheet" href="assets/plugins/jQuery-Tags-Input/jquery.tagsinput.css">
		<!-- start: CORE CSS -->
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/styles-responsive.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-style8.css" type="text/css" id="skin_color">
		<link rel="stylesheet" href="assets/css/print.css" type="text/css" media="print"/>

		 <link href="assets/plugins/sweetalert/lib/sweet-alert.css" rel="stylesheet" />
		<!-- end: CORE CSS -->
		<link rel="shortcut icon" href="favicon.ico" />
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
<body>
		<!-- start: SLIDING BAR (SB) -->
		<div id="slidingbar-area">
			<div id="slidingbar">
				<div class="row">
					<!-- start: SLIDING BAR FIRST COLUMN -->
					<div class="col-md-4 col-sm-4">
						<h2>My Options</h2>
						<div class="row">
							<div class="col-xs-6 col-lg-3">
								<button class="btn btn-icon btn-block space10">
									<i class="fa fa-folder-open-o"></i>
									Projects <span class="badge badge-info partition-red"> 4 </span>
								</button>
							</div>
							<div class="col-xs-6 col-lg-3">
								<button class="btn btn-icon btn-block space10">
									<i class="fa fa-envelope-o"></i>
									Messages <span class="badge badge-info partition-red"> 23 </span>
								</button>
							</div>
							<div class="col-xs-6 col-lg-3">
								<button class="btn btn-icon btn-block space10">
									<i class="fa fa-calendar-o"></i>
									Calendar <span class="badge badge-info partition-blue"> 5 </span>
								</button>
							</div>
							<div class="col-xs-6 col-lg-3">
								<button class="btn btn-icon btn-block space10">
									<i class="fa fa-bell-o"></i>
									Notifications <span class="badge badge-info partition-red"> 9 </span>
								</button>
							</div>
						</div>
					</div>
					<!-- end: SLIDING BAR FIRST COLUMN -->
					<!-- start: SLIDING BAR SECOND COLUMN -->
					<div class="col-md-4 col-sm-4">
						<h2>My Recent Works</h2>
						<div class="blog-photo-stream margin-bottom-30">
							<ul class="list-unstyled">
								<li>
									<a href="#"><img alt="" src="assets/images/image01_th.jpg"></a>
								</li>
								<li>
									<a href="#"><img alt="" src="assets/images/image02_th.jpg"></a>
								</li>
								<li>
									<a href="#"><img alt="" src="assets/images/image03_th.jpg"></a>
								</li>
								<li>
									<a href="#"><img alt="" src="assets/images/image04_th.jpg"></a>
								</li>
								<li>
									<a href="#"><img alt="" src="assets/images/image05_th.jpg"></a>
								</li>
								<li>
									<a href="#"><img alt="" src="assets/images/image06_th.jpg"></a>
								</li>
								<li>
									<a href="#"><img alt="" src="assets/images/image07_th.jpg"></a>
								</li>
								<li>
									<a href="#"><img alt="" src="assets/images/image08_th.jpg"></a>
								</li>
								<li>
									<a href="#"><img alt="" src="assets/images/image09_th.jpg"></a>
								</li>
								<li>
									<a href="#"><img alt="" src="assets/images/image10_th.jpg"></a>
								</li>
							</ul>
						</div>
					</div>
					<!-- end: SLIDING BAR SECOND COLUMN -->
					<!-- start: SLIDING BAR THIRD COLUMN -->
					<div class="col-md-4 col-sm-4">
						<h2>My Info</h2>
						<address class="margin-bottom-40">
							Peter Clark
							<br>
							12345 Street Name, City Name, United States
							<br>
							P: (641)-734-4763
							<br>
							Email:
							<a href="#">
								peter.clark@example.com
							</a>
						</address>
						<a class="btn btn-transparent-white" href="#">
							<i class="fa fa-pencil"></i> Edit
						</a>
					</div>
					<!-- end: SLIDING BAR THIRD COLUMN -->
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
						
					</div>
					<div class="topbar-tools">
						<!-- start: TOP NAVIGATION MENU -->
						<ul class="nav navbar-right">
							<!-- start: USER DROPDOWN -->
							<li class="dropdown current-user">
								<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
									<?php 
								echo '<img src="images/'.$rw['picture'].'" alt="" width="30" height="30">';
									?> <span class="username hidden-xs"> <?php echo $rw['name'] ?>   </span> <i class="fa fa-caret-down "></i>
								</a>
								<ul class="dropdown-menu dropdown-dark">
									<li>
										<a href="#">
											My Profile
										</a>
									</li>
									
									<li>
										<a href="logout.php">
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
			<!-- end: TOPBAR -->
			<!-- start: PAGESLIDE LEFT -->
			<a class="closedbar inner hidden-sm hidden-xs" href="#">
			</a>
			<nav id="pageslide-left" class="pageslide inner">
				<div class="navbar-content">
					<!-- start: SIDEBAR -->
					<div class="main-navigation left-wrapper transition-left">
						<div class="navigation-toggler hidden-sm hidden-xs">
							<a href="#main-navbar" class="sb-toggle-left">
							</a>
						</div>
						<div class="user-profile border-top padding-horizontal-10 block">
							<div class="inline-block">
								<?php 
							echo '<img src="images/'.$rw['picture'].'" alt="" width="150" height="150">';
									?>
							</div>
							<div class="inline-block">
								<h5 class="no-margin"> Welcome </h5>
								<h4 class="no-margin">    <?php echo $rw['name'] ?> </h4>
								
							</div>
						</div>
						<!-- start: MAIN NAVIGATION MENU -->
						<ul class="main-navigation-menu">
							<li>
								<a href="dashboard.php"><i class="fa fa-home"></i> <span class="title"> Home </span> </a>
							</li>
					
							<li>
                                <a href="javascript:void(0)"><i class="fa fa-film"></i> <span class="title"> Gallery </span><i class="icon-arrow"></i> </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="pictures.php">
                                            <span class="title"> pictures</span>
                                        </a>
                                    </li>


                                    <li>
                                        <a href="videos.php">
                                            <span class="title"> videos</span>
                                        </a>
                                    </li>


                                     <li>
                                        <a href="slides.php">
                                            <span class="title"> Slides</span>
                                        </a>
                                    </li>

                                    </ul>
                                    </li>



							<li>
								 <a href="javascript:void(0)"><i class="fa fa-users"></i> <span class="title"> Customers </span><i class="icon-arrow"></i> </a>

								<ul class="sub-menu">
                                    <li>
                                        <a href="buses.php">
                                            <span class="title"> Reservation</span>
                                        </a>
                                    </li>


                                    <li>
                                        <a href="customers.php">
                                            <span class="title"> Customers list</span>
                                        </a>
                                    </li>


                                    

                                    </ul>
								
							</li>

								<li>
								<a href="services.php"><i class="fa fa-user"></i> <span class="title"> Services </span><i class="icon-"></i> </a>
								
							</li>




							</li>

								<li>
								<a href="products.php"><i class="fa fa-shopping-cart"></i> <span class="title"> Product </span><i class="icon-"></i> </a>
								
							</li>

							

							
						</ul>
						<!-- end: MAIN NAVIGATION MENU -->
					</div>
					<!-- end: SIDEBAR -->
				</div>
				<div class="slide-tools">
					<div class="col-xs-6 text-left no-padding">
						
					</div>
					<div class="col-xs-6 text-right no-padding">
						<a class="btn btn-sm log-out text-right" href="logout.php">
							<i class="fa fa-power-off"></i> Log Out
						</a>
					</div>
				</div>
			</nav>
			<!-- end: PAGESLIDE LEFT -->
			<!-- start: PAGESLIDE RIGHT -->
			<div id="pageslide-right" class="pageslide slide-fixed inner">
				<div class="right-wrapper">
					<ul class="nav nav-tabs nav-justified" id="sidebar-tab">
						<li class="active">
							<a href="#users" role="tab" data-toggle="tab"><i class="fa fa-users"></i></a>
						</li>
						<li>
							<a href="#notifications" role="tab" data-toggle="tab"><i class="fa fa-bookmark "></i></a>
						</li>
						<li>
							<a href="#settings" role="tab" data-toggle="tab"><i class="fa fa-gear"></i></a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="users">
							<div class="users-list">
								<h5 class="sidebar-title">On-line</h5>
								<ul class="media-list">
									<li class="media">
										<a href="#">
											<i class="fa fa-circle status-online"></i>
											<img alt="..." src="assets/images/avatar-2.jpg" class="media-object">
											<div class="media-body">
												<h4 class="media-heading">Nicole Bell</h4>
												<span> Content Designer </span>
											</div>
										</a>
									</li>
									<li class="media">
										<a href="#">
											<div class="user-label">
												<span class="label label-default">3</span>
											</div>
											<i class="fa fa-circle status-online"></i>
											<img alt="..." src="assets/images/avatar-3.jpg" class="media-object">
											<div class="media-body">
												<h4 class="media-heading">Steven Thompson</h4>
												<span> Visual Designer </span>
											</div>
										</a>
									</li>
									<li class="media">
										<a href="#">
											<i class="fa fa-circle status-online"></i>
											<img alt="..." src="assets/images/avatar-4.jpg" class="media-object">
											<div class="media-body">
												<h4 class="media-heading">Ella Patterson</h4>
												<span> Web Editor </span>
											</div>
										</a>
									</li>
									<li class="media">
										<a href="#">
											<i class="fa fa-circle status-online"></i>
											<img alt="..." src="assets/images/avatar-5.jpg" class="media-object">
											<div class="media-body">
												<h4 class="media-heading">Kenneth Ross</h4>
												<span> Senior Designer </span>
											</div>
										</a>
									</li>
								</ul>
								<h5 class="sidebar-title">Off-line</h5>
								<ul class="media-list">
									<li class="media">
										<a href="#">
											<img alt="..." src="assets/images/avatar-6.jpg" class="media-object">
											<div class="media-body">
												<h4 class="media-heading">Nicole Bell</h4>
												<span> Content Designer </span>
											</div>
										</a>
									</li>
									<li class="media">
										<a href="#">
											<div class="user-label">
												<span class="label label-default">3</span>
											</div>
											<img alt="..." src="assets/images/avatar-7.jpg" class="media-object">
											<div class="media-body">
												<h4 class="media-heading">Steven Thompson</h4>
												<span> Visual Designer </span>
											</div>
										</a>
									</li>
									<li class="media">
										<a href="#">
											<img alt="..." src="assets/images/avatar-8.jpg" class="media-object">
											<div class="media-body">
												<h4 class="media-heading">Ella Patterson</h4>
												<span> Web Editor </span>
											</div>
										</a>
									</li>
									<li class="media">
										<a href="#">
											<img alt="..." src="assets/images/avatar-9.jpg" class="media-object">
											<div class="media-body">
												<h4 class="media-heading">Kenneth Ross</h4>
												<span> Senior Designer </span>
											</div>
										</a>
									</li>
									<li class="media">
										<a href="#">
											<img alt="..." src="assets/images/avatar-10.jpg" class="media-object">
											<div class="media-body">
												<h4 class="media-heading">Ella Patterson</h4>
												<span> Web Editor </span>
											</div>
										</a>
									</li>
									<li class="media">
										<a href="#">
											<img alt="..." src="assets/images/avatar-5.jpg" class="media-object">
											<div class="media-body">
												<h4 class="media-heading">Kenneth Ross</h4>
												<span> Senior Designer </span>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="user-chat">
								<div class="sidebar-content">
									<a class="sidebar-back" href="#"><i class="fa fa-chevron-circle-left"></i> Back</a>
								</div>
								<div class="user-chat-form sidebar-content">
									<div class="input-group">
										<input type="text" placeholder="Type a message here..." class="form-control">
										<div class="input-group-btn">
											<button class="btn btn-blue no-radius" type="button">
												<i class="fa fa-chevron-right"></i>
											</button>
										</div>
									</div>
								</div>
								<ol class="discussion sidebar-content">
									<li class="other">
										<div class="avatar">
											<img src="assets/images/avatar-4.jpg" alt="">
										</div>
										<div class="messages">
											<p>
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
											</p>
											<span class="time"> 51 min </span>
										</div>
									</li>
									<li class="self">
										<div class="avatar">
											<img src="assets/images/avatar-1.jpg" alt="">
										</div>
										<div class="messages">
											<p>
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
											</p>
											<span class="time"> 37 mins </span>
										</div>
									</li>
									<li class="other">
										<div class="avatar">
											<img src="assets/images/avatar-4.jpg" alt="">
										</div>
										<div class="messages">
											<p>
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
											</p>
										</div>
									</li>
								</ol>
							</div>
						</div>
						<div class="tab-pane" id="notifications">
							<div class="notifications">
								<div class="pageslide-title">
									You have 11 notifications
								</div>
								<ul class="pageslide-list">
									<li>
										<a href="javascript:void(0)">
											<span class="label label-primary"><i class="fa fa-user"></i></span> <span class="message"> New user registration</span> <span class="time"> 1 min</span>
										</a>
									</li>
									<li>
										<a href="javascript:void(0)">
											<span class="label label-success"><i class="fa fa-comment"></i></span> <span class="message"> New comment</span> <span class="time"> 7 min</span>
										</a>
									</li>
									<li>
										<a href="javascript:void(0)">
											<span class="label label-success"><i class="fa fa-comment"></i></span> <span class="message"> New comment</span> <span class="time"> 8 min</span>
										</a>
									</li>
									<li>
										<a href="javascript:void(0)">
											<span class="label label-success"><i class="fa fa-comment"></i></span> <span class="message"> New comment</span> <span class="time"> 16 min</span>
										</a>
									</li>
									<li>
										<a href="javascript:void(0)">
											<span class="label label-primary"><i class="fa fa-user"></i></span> <span class="message"> New user registration</span> <span class="time"> 36 min</span>
										</a>
									</li>
									<li>
										<a href="javascript:void(0)">
											<span class="label label-warning"><i class="fa fa-shopping-cart"></i></span> <span class="message"> 2 items sold</span> <span class="time"> 1 hour</span>
										</a>
									</li>
									<li class="warning">
										<a href="javascript:void(0)">
											<span class="label label-danger"><i class="fa fa-user"></i></span> <span class="message"> User deleted account</span> <span class="time"> 2 hour</span>
										</a>
									</li>
								</ul>
								<div class="view-all">
									<a href="javascript:void(0)">
										See all notifications <i class="fa fa-arrow-circle-o-right"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="settings">
							<h5 class="sidebar-title">General Settings</h5>
							<ul class="media-list">
								<li class="media">
									<div class="checkbox sidebar-content">
										<label>
											<input type="checkbox" value="" class="green" checked="checked">
											Enable Notifications
										</label>
									</div>
								</li>
								<li class="media">
									<div class="checkbox sidebar-content">
										<label>
											<input type="checkbox" value="" class="green" checked="checked">
											Show your E-mail
										</label>
									</div>
								</li>
								<li class="media">
									<div class="checkbox sidebar-content">
										<label>
											<input type="checkbox" value="" class="green">
											Show Offline Users
										</label>
									</div>
								</li>
								<li class="media">
									<div class="checkbox sidebar-content">
										<label>
											<input type="checkbox" value="" class="green" checked="checked">
											E-mail Alerts
										</label>
									</div>
								</li>
								<li class="media">
									<div class="checkbox sidebar-content">
										<label>
											<input type="checkbox" value="" class="green">
											SMS Alerts
										</label>
									</div>
								</li>
							</ul>
							<div class="sidebar-content">
								<button class="btn btn-success">
									<i class="icon-settings"></i> Save Changes
								</button>
							</div>
						</div>
					</div>
					<div class="hidden-xs" id="style_selector">
						<div id="style_selector_container">
							<div class="pageslide-title">
								Style Selector
							</div>
							<div class="box-title">
								Choose Your Layout Style
							</div>
							<div class="input-box">
								<div class="input">
									<select name="layout" class="form-control">
										<option value="default">Wide</option><option value="boxed">Boxed</option>
									</select>
								</div>
							</div>
							<div class="box-title">
								Choose Your Header Style
							</div>
							<div class="input-box">
								<div class="input">
									<select name="header" class="form-control">
										<option value="fixed">Fixed</option><option value="default">Default</option>
									</select>
								</div>
							</div>
							<div class="box-title">
								Choose Your Sidebar Style
							</div>
							<div class="input-box">
								<div class="input">
									<select name="sidebar" class="form-control">
										<option value="fixed">Fixed</option><option value="default">Default</option>
									</select>
								</div>
							</div>
							<div class="box-title">
								Choose Your Footer Style
							</div>
							<div class="input-box">
								<div class="input">
									<select name="footer" class="form-control">
										<option value="default">Default</option><option value="fixed">Fixed</option>
									</select>
								</div>
							</div>
							<div class="box-title">
								10 Predefined Color Schemes
							</div>
							<div class="images icons-color">
								<a href="#" id="default"><img src="assets/images/color-1.png" alt="" class="active"></a>
								<a href="#" id="style2"><img src="assets/images/color-2.png" alt=""></a>
								<a href="#" id="style3"><img src="assets/images/color-3.png" alt=""></a>
								<a href="#" id="style4"><img src="assets/images/color-4.png" alt=""></a>
								<a href="#" id="style5"><img src="assets/images/color-5.png" alt=""></a>
								<a href="#" id="style6"><img src="assets/images/color-6.png" alt=""></a>
								<a href="#" id="style7"><img src="assets/images/color-7.png" alt=""></a>
								<a href="#" id="style8"><img src="assets/images/color-8.png" alt=""></a>
								<a href="#" id="style9"><img src="assets/images/color-9.png" alt=""></a>
								<a href="#" id="style10"><img src="assets/images/color-10.png" alt=""></a>
							</div>
							<div class="box-title">
								Backgrounds for Boxed Version
							</div>
							<div class="images boxed-patterns">
								<a href="#" id="bg_style_1"><img src="assets/images/bg.png" alt=""></a>
								<a href="#" id="bg_style_2"><img src="assets/images/bg_2.png" alt=""></a>
								<a href="#" id="bg_style_3"><img src="assets/images/bg_3.png" alt=""></a>
								<a href="#" id="bg_style_4"><img src="assets/images/bg_4.png" alt=""></a>
								<a href="#" id="bg_style_5"><img src="assets/images/bg_5.png" alt=""></a>
							</div>
							<div class="style-options">
								<a href="#" class="clear_style">
									Clear Styles
								</a>
								<a href="#" class="save_style">
									Save Styles
								</a>
							</div>
						</div>
						<div class="style-toggle open"></div>
					</div>
				</div>
			</div>
			<!-- end: PAGESLIDE RIGHT -->