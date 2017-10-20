<!-- start: MAIN NAVIGATION MENU -->
						<ul class="main-navigation-menu">
							<li class="<?php if ($menu == "home") { echo "active"; } ?>">
								<a href="dashboard.php"><i class="fa fa-home"></i> <span class="title"> Dashboard </span> </a>
							</li>
							<li class="<?php if ($menu == "product") { echo "active"; } ?>">
								<a href="product.php"><i class="fa fa-desktop"></i> <span class="title"> Product </span></a>
								
							</li>
							<!--<li class="<?php if ($menu == "service") { echo "active"; } ?>">
								<a href="service.php"><span class="title"> Services </span> </a>
								
							</li>-->
							<li class="<?php if ($menu == "gallery") { echo "active"; } ?>">
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
							<li class="<?php if ($menu == "service") { echo "active"; } ?>">
								<a href="services.php"><i class="fa fa-th-large"></i> <span class="title"> Services </span> </a>
								
							</li>
							<!--<li class="<?php if ($menu == "blog") { echo "active"; } ?>">
								<a href="blog.php""><i class="fa fa-pencil-square-o"></i> <span class="title"> Blog </span> </a>
								
							</li>

							<li class="<?php if ($menu == "message") { echo "active"; } ?>">
								<a href="messages.php""><i class="fa fa-envelope-o"></i> <span class="title"> Messages </span> </a>
								
							</li>-->
							<li>
								 <a href="javascript:void(0)"><i class="fa fa-users"></i> <span class="title"> Customers </span><i class="icon-arrow"></i> </a>

								<ul class="sub-menu">
                                    <li>
                                        <a href="#">
                                            <span class="title"> Reservation</span>
                                        </a>
                                    </li>

                                     <li>
                                        <a href="#">
                                            <span class="title"> Order</span>
                                        </a>
                                    </li>


                                    <li>
                                        <a href="customers.php">
                                            <span class="title"> Customers list</span>
                                        </a>
                                    </li>


                                    

                                    </ul>
								
							</li>
							
						</ul>
						<!-- end: MAIN NAVIGATION MENU -->