<?php

$pageTitle = "Admin Portal";

$menu = "message";

include('inc/head.php');


include('inc/connect.php');

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
									<h4 class="modal-title">Send New Message</h4>
								</div>
								<form method="post" action="messages.php"  enctype="multipart/form-data" role="form"  id="form" >
								<div class="modal-body">

								<input type="text" class="form-control" id="name" value="NO NAME" required name="name" >
								
									<div class="form-group">
									<label>Email</label>
									<input type="text" class="form-control" id="name" required name="email" >
									</div>
									<div class="form-group">
									<label>Subject</label>
									<input type="text" class="form-control" id="name" required name="subject" >
									</div>
									
									<textarea class="summernote" name="message" placeholder="Write your message  here..."></textarea>
														
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">
										Close
									</button>
									<input  name="submit" type="submit" value="Submit" class="btn btn-primary">
										
								</div>
							</div>
							</form>
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
									<h1>Messages</h1>
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
									<!-- start: TOP NAVIGATION MENU -->
									
									<!-- end: TOP NAVIGATION MENU -->
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
									<li class="active">
										 Sent Messages
									</li>
								</ol>
							</div>
						</div>
						<!-- end: BREADCRUMB -->
						<!-- start: PAGE CONTENT -->
						<div class="row">
							<div class="col-md-12">
								
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<!-- start: EXPORT DATA TABLE PANEL  -->
								<div class="panel panel-white">
									<div class="panel-heading">
										
										
									</div>
									<div class="panel-body">
										<div class="row">
											<div class="col-md-12 space20">
												<a href="#panel-config" data-toggle="modal">
												<button class="btn btn-blue">
													Send Email <i class="fa fa-envelope-o"></i>
												</button>
												</a>
												<div class="btn-group pull-right">
												
													
													
												</div>
											</div>
										</div>
											<?php
								$sql = 'SELECT * FROM sent_message';
								$query = mysqli_query($con, $sql);

									


								echo '
										<div class="table-responsive">
											<table class="table table-striped table-hover" id="sample-table-2">
										<thead>
													<tr>
														
														
														<th>Sender Name</th>
														<th>Email</th>
														
														<th> Date</th>
														<th>time</th>
														
														
														
														<th>Read</th>
													
														<th>Delete</th>


																												
														
													</tr>
												</thead>
												<tbody>';
												while ($row = mysqli_fetch_array($query)) {
													echo '<tr>
													
													
														<td>'.$row['name'].'</td>
														<td>'.$row['email'].'</td>
														
														<td>'.$row['date'].'</td>
														<td>'.$row['time'].'</td>
														';

														

														echo '

													



														<td>
			<a href="read_sentmsg.php?id='.$row['id'].'"  class="btn btn-blue">
										               <i class="glyphicon glyphicon-search icon-white"></i>
														</a></td>


														<td>
			<a href="inc/delete_sentmsg.php?id='.$row['id'].'" onclick="return confirm(\'Are you sure you want to DELETE this Message ?\');" class="btn btn-danger">
										               <i class="glyphicon glyphicon-trash icon-white"></i>
														</a></td>


														


													</tr>';

												}
													
												echo '</tbody>
											</table>';

								?>
										</div>
									</div>
								</div>
								<!-- end: EXPORT DATA TABLE PANEL -->
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