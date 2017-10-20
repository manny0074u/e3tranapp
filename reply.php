<?php
$pageTitle = "Admin Portal";

$menu = "message";

include('inc/head.php');

include('inc/connect.php');

$rwid = $_GET['id'];

$sql = "SELECT * FROM message WHERE id='".$_GET['id']."'";
$query 	= mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);


include('inc/send_email.php');
?>
			<!-- start: MAIN CONTAINER -->
			<div class="main-container inner">
				<!-- start: PAGE -->
				<div class="main-content">
					<!-- start: PANEL CONFIGURATION MODAL FORM -->
					<div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										&times;
									</button>
									<h4 class="modal-title">Panel Configuration</h4>
								</div>
								<div class="modal-body">
									Here will be a configuration form
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">
										Close
									</button>
									<button type="button" class="btn btn-primary">
										Save changes
									</button>
								</div>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div>
					<!-- /.modal -->
					<!-- end: SPANEL CONFIGURATION MODAL FORM -->
					<div class="container">
						<!-- start: PAGE HEADER -->
						<!-- start: TOOLBAR -->
						<div class="toolbar row">
							<div class="col-sm-6 hidden-xs">
								<div class="page-header">
									<h1> Reply Message </h1>
								</div>
							</div>
							<div class="col-sm-6 col-xs-12">
								<a href="#" class="back-subviews">
									<i class="fa fa-chevron-left"></i> BACK
								</a>
								<a href="#" class="close-subviews">
									<i class="fa fa-times"></i> CLOSE
								</a>
								<div class="toolbar-tools pull-right">
									
								</div>
							</div>
						</div>
						<!-- end: TOOLBAR -->
						<!-- end: PAGE HEADER -->
						<!-- start: BREADCRUMB -->
						<div class="row">
							<div class="col-md-12">
								<ol class="breadcrumb">
									<li>
										<a href="dashboard.php">
											Dashboard
										</a>
									</li>
									<li>
									<a href="messages.php">
										Messages
										</a>
									</li>
									</li>
									<li class="active">
										Reply Messages
									</li>
									
								</ol>
							</div>
						</div>
						<!-- end: BREADCRUMB -->
						<!-- start: PAGE CONTENT -->
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-white">
									<div class="panel-body">
									<form method="post" action="reply.php">
									<div class="form-group">
									<label>Name</label>
									<input type="text" class="form-control" id="name" readonly  value="<?php echo $row['name'] ?>" required name="name" >
									</div>
									<div class="form-group">
									<label>Email</label>
									<input type="text" class="form-control" readonly  id="name" value="<?php echo $row['email'] ?>" required name="email">
									</div>

									<div class="form-group">
									<label>Subject</label>
									<input type="text" class="form-control"  id="name"  required name="subject" placeholder="Enter subject here">
									</div>
										<textarea class="summernote" name="message" placeholder="Write note here..."></textarea>
									</div>
									<div class="modal-footer">
									
									<input  name="submit" type="submit" value="Submit" class="btn btn-primary">
										
								</div>
									</form>
								</div>
							</div>
						</div>
						<!-- end: PAGE CONTENT-->
					</div>
					<div class="subviews">
						<div class="subviews-container"></div>
					</div>
				</div>
				<!-- end: PAGE -->
			</div>
			<!-- end: MAIN CONTAINER -->
			<?php
			include('inc/footer.php');

			?>