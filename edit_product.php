<?php
$pageTitle = "Admin Portal";

$menu = "product";

include('inc/head.php');


include('inc/connect.php');





$rowid = $_GET['id'];

$sql = "SELECT * FROM product WHERE id=".$rowid;
$query 	= mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);





if (isset($_POST['submit'])) {
	

	$name = trim($_POST["name"]);
	$price = trim($_POST["price"]);
	


	

 $sql = "UPDATE product SET name='".$name."', price='".$price."' WHERE id=".$rowid;
			$query = mysqli_query($con, $sql);

		echo "<script>alert('Update Successful!!'); window.location='product.php' </script>";

}

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
									<h4 class="modal-title">Add product</h4>
								</div>
								<form method="post" action="product.php"  enctype="multipart/form-data" role="form"  id="form" >
								<div class="modal-body">

								<div class="form-group">
									
									
									</div>
								
									<div class="form-group">
									
									
									</div>
									
									
															
														
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">
										Close
									</button>
									
										
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
									<h1> Edit Product</h1>
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
									<a href="product.php">
										Products
										</a>
									</li>
									<li class="active">
										Edit Product
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
												
												<div class="btn-group pull-right">
												
													
													<ul class="dropdown-menu dropdown-light pull-right">
														<li>
															<a href="#" class="export-pdf" data-table="#sample-table-2" >
																Save as PDF
															</a>
														</li>
														<li>
															<a href="#" class="export-png" data-table="#sample-table-2" data-ignoreColumn ="3,4">
																Save as PNG
															</a>
														</li>
														<li>
															<a href="#" class="export-csv" data-table="#sample-table-2" data-ignoreColumn ="3,4">
																Save as CSV
															</a>
														</li>
														<li>
															<a href="#" class="export-txt" data-table="#sample-table-2" data-ignoreColumn ="3,4">
																Save as TXT
															</a>
														</li>
														<li>
															<a href="#" class="export-xml" data-table="#sample-table-2" data-ignoreColumn ="3,4">
																Save as XML
															</a>
														</li>
														<li>
															<a href="#" class="export-sql" data-table="#sample-table-2" data-ignoreColumn ="3,4">
																Save as SQL
															</a>
														</li>
														<li>
															<a href="#" class="export-json" data-table="#sample-table-2" data-ignoreColumn ="3,4">
																Save as JSON
															</a>
														</li>
														<li>
															<a href="#" class="export-excel" data-table="#sample-table-2" data-ignoreColumn ="3,4">
																Export to Excel
															</a>
														</li>
														<li>
															<a href="#" class="export-doc" data-table="#sample-table-2" data-ignoreColumn ="3,4">
																Export to Word
															</a>
														</li>
														<li>
															<a href="#" class="export-powerpoint" data-table="#sample-table-2" data-ignoreColumn ="3,4">
																Export to PowerPoint
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
												

									<?php echo '<form method="post" action="edit_product.php?action=update&id='.$rowid.'" enctype="multipart/form-data" role="form" id="form">'?>
												<div class="row">
													<div class="col-md-12">
														<h3>Edit Product</h3>
														<hr>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">
																Product Name
															</label>
															<input type="text"  value="<?php echo $row['name'] ?>" class="form-control" id="p_name" name="name">
														</div>

														<div class="form-group">
															<label class="control-label">
																Price
															</label>
															<input type="text"  value="<?php echo $row['price'] ?>" class="form-control" id="p_name" name="price">
														</div>
														
														
														
														
														
														<div class="form-group">
															
														</div>



														

													</div>


													<div class="col-md-6">
														<div class="form-group connected-group">
															
															<div class="row">
																<div class="col-md-3">
																	
																</div>
																<div class="col-md-3">
																	
																</div>
																
															</div>
														</div>
														<div class="form-group">
															
															<div>
																
																
															</div>
														</div>
														<div class="row">
															<div class="col-md-4">
																<div class="form-group">
																	
																</div>
															</div>
															<div class="col-md-8">
																<div class="form-group">
																	
																</div>
															</div>
														</div>
														<div class="form-group">
															<label>
																Product picture
															</label>
															<div class="fileupload fileupload-new" data-provides="fileupload">
																<div class="fileupload-new thumbnail"><img src="images/product/<?php echo $row['picture'] ?>" alt="">
																</div>
																<div class="fileupload-preview fileupload-exists thumbnail"></div>
																
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
													
														
													</div>
													<div class="col-md-6">
														<div class="form-group">
															
														</div>
														<div class="form-group">
															
														</div>
														<div class="form-group">
															
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															
														</div>
														<div class="form-group">
															
														</div>
														<div class="form-group">
															
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div>
															
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-8">
														
													</div>
													<div class="col-md-4">
														<button class="btn btn-green btn-block" name="submit" type="submit">
															Update <i class="fa fa-arrow-circle-right"></i>
														</button>
													</div>
												</div>
											</form>
											
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