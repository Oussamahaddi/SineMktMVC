<?php
	include_once APPROOT . '/views/inc/header.php';
?>
	
		<!--welcome-hero start -->
		<header id="home" class="welcome-hero">

			<div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
				<!--/.carousel-indicator -->
				 <ol class="carousel-indicators">
					<li data-target="#header-carousel" data-slide-to="0" class="active"><span class="small-circle"></span></li>
					<li data-target="#header-carousel" data-slide-to="1"><span class="small-circle"></span></li>
					<li data-target="#header-carousel" data-slide-to="2"><span class="small-circle"></span></li>
				</ol><!-- /ol-->
				<!--/.carousel-indicator -->

				<!--/.carousel-inner -->
				

			</div><!--/#header-carousel-->

			<!-- top-area Start -->
			<div class="top-area">
				<div class="header-area">
					<!-- Start Navigation -->
				    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

				        <!-- Start Top Search -->
				        <div class="top-search">
				            <div class="container">
				                <div class="input-group">
				                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
				                    <input type="text" class="form-control" placeholder="Search">
				                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
				                </div>
				            </div>
				        </div>
				        <!-- End Top Search -->

				        <div class="container">            
				            <!-- Start Atribute Navigation -->
				            <div class="attr-nav">
				                <ul style="display: flex; align-items: center;">
				                	<li class="search">
				                		<a href="#"><span class="lnr lnr-magnifier"></span></a>
				                	</li><!--/.search-->
				                	<li class="nav-setting">
				                		<a href="#"><span class="lnr lnr-cog"></span></a>
				                	</li><!--/.search-->
				                    <li class="dropdown">
				                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
				                            <span class="lnr lnr-cart"></span>
											<span class="badge badge-bg-1">2</span>
				                        </a>
				                        <ul class="dropdown-menu cart-list s-cate">
				                            <li class="single-cart-list">
				                                <a href="#" class="photo"><img src="<?php echo URLROOT; ?>/assets/images/collection/arrivals1.png" class="cart-thumb" alt="image" /></a>
				                                <div class="cart-list-txt">
				                                	<h6><a href="#">arm <br> chair</a></h6>
				                                	<p>1 x - <span class="price">$180.00</span></p>
				                                </div><!--/.cart-list-txt-->
				                                <div class="cart-close">
				                                	<span class="lnr lnr-cross"></span>
				                                </div><!--/.cart-close-->
				                            </li><!--/.single-cart-list -->
				                            <li class="single-cart-list">
				                                <a href="#" class="photo"><img src="<?php echo URLROOT; ?>/assets/images/collection/arrivals2.png" class="cart-thumb" alt="image" /></a>
				                                <div class="cart-list-txt">
				                                	<h6><a href="#">single <br> armchair</a></h6>
				                                	<p>1 x - <span class="price">$180.00</span></p>
				                                </div><!--/.cart-list-txt-->
				                                <div class="cart-close">
				                                	<span class="lnr lnr-cross"></span>
				                                </div><!--/.cart-close-->
				                            </li><!--/.single-cart-list -->
				                            <li class="single-cart-list">
				                                <a href="#" class="photo"><img src="<?php echo URLROOT; ?>/assets/images/collection/arrivals3.png" class="cart-thumb" alt="image" /></a>
				                                <div class="cart-list-txt">
				                                	<h6><a href="#">wooden arn <br> chair</a></h6>
				                                	<p>1 x - <span class="price">$180.00</span></p>
				                                </div><!--/.cart-list-txt-->
				                                <div class="cart-close">
				                                	<span class="lnr lnr-cross"></span>
				                                </div><!--/.cart-close-->
				                            </li><!--/.single-cart-list -->
				                            <li class="total">
				                                <span>Total: $0.00</span>
				                                <button class="btn-cart pull-right" onclick="window.location.href='#'">view cart</button>
				                            </li>
				                        </ul>
				                    </li><!--/.dropdown-->
									<?php if (isset($_SESSION['Email'])) { ?> 
										<div class="admin_icon">
											<img src="<?php echo URLROOT; ?>/img/admin.jpg" alt="" width="30px" class="admin" style="border-radius: 50%; margin: 0 1rem;">
											<a href="<?php echo URLROOT; ?>/Authentification/logOutAdmin" title="logout"><div class="logout"><i class="fa-solid fa-arrow-right-from-bracket"></i></div></a>
										</div>
									<?php } else { ?>
										<a href="<?= URLROOT; ?>/Authentification/login" ><li title="Login" style="padding: 20px 10px; font-size: 18px; margin-left: 20px; cursor: pointer;"><i class="fa-regular fa-user"></i></li></a>
									<?php } ?>
				                </ul>
				            </div><!--/.attr-nav-->
				            <!-- End Atribute Navigation -->

				            <!-- Start Header Navigation -->
				            <div class="navbar-header">
				                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
				                    <i class="fa fa-bars"></i>
				                </button>
				                <a class="navbar-brand" href="<?php echo URLROOT; ?>/index"><img src="<?php echo URLROOT; ?>/assets/logo/black logo.png" alt="" width="30px" class="logo"></a>

				            </div><!--/.navbar-header-->
				            <!-- End Header Navigation -->

				            <!-- Collect the nav links, forms, and other content for toggling -->
				            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
				                <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
								<?php if (isset($_SESSION['Email'])) { ?>
									<li><a href="<?php echo URLROOT; ?>/allPages/index">home</a></li>
									<li><a href="<?php echo URLROOT; ?>/allPages/New_arrival">new arrival</a></li>
									<li><a href="<?php echo URLROOT; ?>/allPages/feature">features</a></li>
									<li><a href="<?php echo URLROOT; ?>/allPages/blog">blog</a></li>
									<li><a href="<?php echo URLROOT; ?>/allPages/contact" style="color: #e99c2f;">contact</a></li>
									<li><a href="<?php echo URLROOT; ?>/Dashboard/Statistique">Dashboard</a></li>
								<?php } else { ?>
									<li><a href="<?php echo URLROOT; ?>/allPages/index">home</a></li>
									<li><a href="<?php echo URLROOT; ?>/allPages/New_arrival">new arrival</a></li>
									<li><a href="<?php echo URLROOT; ?>/allPages/feature">features</a></li>
									<li><a href="<?php echo URLROOT; ?>/allPages/blog">blog</a></li>
									<li><a href="<?php echo URLROOT; ?>/allPages/contact" style="color: #e99c2f;">contact</a></li>
								<?php } ?>
				                </ul><!--/.nav -->
				            </div><!-- /.navbar-collapse -->
				        </div><!--/.container-->
				    </nav><!--/nav-->
				    <!-- End Navigation -->
				</div><!--/.header-area-->
			    <div class="clearfix"></div>

			</div><!-- /.top-area-->
			<!-- top-area End -->

		</header><!--/.welcome-hero-->
		<!--welcome-hero end -->

		
		
		<!--newsletter strat -->
		<section id="newsletter"  class="newsletter contact">
			<div class="container">

                <div class="header_contact">
                    <h3>Contact Us</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt voluptatem possimus consectetur. </p>
                </div>
				
                <div class="inp">
                    <form action="" method="get">
                        <div>
                            <label for="name">Name</label> <br>
                            <input type="text" name="name" id="name" placeholder="Jhon Doe">
                        </div>
                        <div>
                            <label for="email">Email</label> <br>
                            <input type="email" name="email" id="email" placeholder="jhon@gmail.com">
                        </div>
                        <div>
                            <label for="message">Name</label> <br>
                            <textarea name="message" id="message" cols="30" rows="5" placeholder="Enter your message here..."></textarea>
                        </div>
                        <div class="btn">
                            <input type="submit" value="Send">
                        </div>
                    </form>
                </div>

			</div><!--/.container-->

		</section><!--/newsletter-->	
		<!--newsletter end -->
		
		
<?php
	include_once APPROOT . '/views/inc/footer.php';
?>