<?php
   include('session.php');
   if(isset($_POST))
   {
   		$username=$_SESSION['login_user'];
   		$con=mysqli_connect("localhost","root","","shop");
   		$fetchUID="select user_id from user where user_email='$username'";
   		$res=$con->query($fetchUID);
   		if($res->num_rows>0)
   		{
   			while($row=$res->fetch_assoc())
   			{
   				$uid=$row["user_id"];
   			}
   		}
   }
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Book Planet | Online Book Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <style>
        .round-img {

            border-radius: 50%;

            height: 100;

            width: 100;
        }
    </style>
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Main css -->
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <!-- Font-Awesome-Icons-CSS -->
    <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
    <!-- pop-up-box -->
    <link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
    <!-- menu style -->
    <!-- //Custom-Files -->

    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <!-- //web fonts -->

</head>

<body>
    <!-- top-header -->
    <div class="agile-main-top">
        <div class="container-fluid">
            <div class="row main-top-w3l py-2">
                <div class="col-lg-4 header-most-top">
                    <!--<p class="text-white text-lg-left text-center">Offer Zone Top Deals & Discounts
						<i class="fas fa-shopping-cart ml-1"></i>
					</p>-->
                </div>
                <div class="col-lg-8 header-right mt-lg-0 mt-2">
                    <!-- header lists -->
                    <ul>
                        <!--<li class="text-center border-right text-white">
							<a class="play-icon popup-with-zoom-anim text-white" href="#small-dialog1">
								<i class="fas fa-map-marker mr-2"></i>Select Location</a>
						</li>-->
                        <li class="text-center border-right text-white">
                            <a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
                                <!--<i class="fas fa-truck mr-2"></i>Track Order</a>-->
                        </li>
                        <!--<li class="text-center border-right text-white">
							<i class="fas fa-phone mr-2"></i>
						</li>-->

                        <li class="text-center text-white">
                            <a href="#" data-toggle="modal" data-target="#exampleModal2" class="text-white">
                                <!--<i class="fas fa-sign-out-alt mr-2"></i>Register </a>-->
                        </li>


                        <li class="text-center text-white">
                            <!--<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">-->
                            <i class="fas fa-sign-in-alt mr-2"></i>Welcome, <?php echo $username ?>
                        </li>

                    </ul>
                    <!-- //header lists -->
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center">Log In</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="checkout.php" method="post">
                        <div class="form-group">
                            <label class="col-form-label">E-mail</label>
                            <input type="text" class="form-control" placeholder=" " name="email" required="">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder=" " name="pw" required="">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control" value="Log in">
                        </div>
                        <div class="sub-w3l">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                <label class="custom-control-label" for="customControlAutosizing">Remember me?</label>
                            </div>
                        </div>
                        <p class="text-center dont-do mt-3">Don't have an account?
                            <a href="#" data-toggle="modal" data-target="#exampleModal2">
                                Register Now</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- navigation -->


    <div class="navbar-inner">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">


                <!--<div class="agileits-navi_search">
					<form action="checkout.php" method="post">
						<select id="agileinfo-nav_search" name="agileinfo_search" class="border" required="">
							<option value="">All Categories</option>
							<option value="Televisions">Televisions</option>
							<option value="Headphones">Headphones</option>
							<option value="Computers">Computers</option>
							<option value="Appliances">Appliances</option>
							<option value="Mobiles">Mobiles</option>
							<option value="Fruits &amp; Vegetables">Tv &amp; Video</option>
							<option value="iPad & Tablets">iPad & Tablets</option>
							<option value="Cameras & Camcorders">Cameras & Camcorders</option>
							<option value="Home Audio & Theater">Home Audio & Theater</option>
						</select>
					</form>
				</div>-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="col-md-3 logo_agile">
                    <h1 class="text-center">
                        <a href="welcome.php" class="font-weight-bold font-italic">
                            <img src="images/logo-bookplanet.png" alt=" " class="img-fluid">
                        </a>
                    </h1>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto text-center mr-xl-5">
                        <li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
                            <a class="nav-link" href="welcome.php?username=<?php echo $username ?>">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <!--<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Genres
							</a>
							<div class="dropdown-menu">
								<div class="agile_inner_drop_nav_info p-4">
									<div class="row">
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li>
													<a href="productsf.html">Science-Fiction</a>
												</li>
												<li>
													<a href="product.html">Mystery</a>
												</li>
												<li>
													<a href="product.html">Romantic</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>-->
                        <!--<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Appliances
							</a>
							<div class="dropdown-menu">
								<div class="agile_inner_drop_nav_info p-4">
									<h5 class="mb-3">TV, Appliances, Electronics</h5>
									<div class="row">
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li>
													<a href="product2.html">Televisions</a>
												</li>
												<li>
													<a href="product2.html">Home Entertainment Systems</a>
												</li>
												<li>
													<a href="product2.html">Headphones</a>
												</li>
												<li>
													<a href="product2.html">Speakers</a>
												</li>
												<li>
													<a href="product2.html">MP3, Media Players & Accessories</a>
												</li>
												<li>
													<a href="product2.html">Audio & Video Accessories</a>
												</li>
												<li>
													<a href="product2.html">Cameras</a>
												</li>
												<li>
													<a href="product2.html">DSLR Cameras</a>
												</li>
												<li>
													<a href="product2.html">Camera Accessories</a>
												</li>
											</ul>
										</div>
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li>
													<a href="product2.html">Musical Instruments</a>
												</li>
												<li>
													<a href="product2.html">Gaming Consoles</a>
												</li>
												<li>
													<a href="product2.html">All Electronics</a>
												</li>
												<li>
													<a href="product2.html">Air Conditioners</a>
												</li>
												<li>
													<a href="product2.html">Refrigerators</a>
												</li>
												<li>
													<a href="product2.html">Washing Machines</a>
												</li>
												<li>
													<a href="product2.html">Kitchen & Home Appliances</a>
												</li>
												<li>
													<a href="product2.html">Heating & Cooling Appliances</a>
												</li>
												<li>
													<a href="product2.html">All Appliances</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>-->
                        <!--<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="about.php">About Us</a>
						</li>-->
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php?uname=<?php echo $username?>">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- //navigation -->

    <!-- banner -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">


        <div class="carousel-inner">
            <div class="carousel-item item1 active">
                <div class="container">
                    <div class="w3l-space-banner">
                    </div>
                </div>
            </div>


            <div class="col-md-9 header mt-4 mb-md-0 mb-4">
                <div class="row">
                </div>
            </div>
            <!-- //banner -->

            <!-- top Products -->

            <div class="ads-grid py-sm-5 py-4" style="margin-top:25%">
                <div class="container py-xl-4 py-lg-2">
                    <!-- tittle heading -->
                    <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                        <span>B</span>ooks
                        <span>I</span>n
                        <span>O</span>ur
                        <span>P</span>lanet</h3>




                    <!-- //tittle heading -->
                    <div class="row">
                        <!-- product left -->
                        <div class="agileinfo-ads-display col-lg-12">
                            <div class="wrapper">
                                <!-- first section -->


                                <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
                                    <h3 class="heading-tittle text-center font-italic">Fiction</h3>
                                    <div class="row">
                                        <div class="col-md-4 product-men mt-5">
                                            <div class="men-pro-item simpleCart_shelfItem">
                                                <div class="men-thumb-item text-center">
                                                    <img src="images/m1.jpg" alt="" height="201px" width="135px">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.php?username=<?php echo $username ?>&bookid=1" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-info-product text-center border-top mt-4">
                                                    <h4 class="pt-1">
                                                        <a href="single.php?username=<?php echo $username ?>&bookid=1" class="link-product-add-cart">The Time Machine -H.G. Wells</a>
                                                    </h4>
                                                    <div class="info-product-price my-2">
                                                        <span class="item_price">₹161.00</span>
                                                    </div>
                                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                        <form action="checkout.php" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="item_name" value="The Time Machine" />
                                                                <input type="hidden" name="amount" value="161" />

                                                                <input type="hidden" name="uid" value=<?php echo $uid?>>

                                                                <input type="hidden" name="username" value=<?php echo $username?>>



                                                                <input type="hidden" name="bookid" value=1>
                                                                <input type="submit" name="submit" value="Buy Now!" class="button btn" />
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 product-men mt-5">
                                            <div class="men-pro-item simpleCart_shelfItem">
                                                <div class="men-thumb-item text-center">
                                                    <img src="images/m2.jpg" alt="" height="201px" width="135px">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.php?username=<?php echo $username ?>&bookid=2" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>

                                                </div>
                                                <div class="item-info-product text-center border-top mt-4">
                                                    <h4 class="pt-1">
                                                      <a href="single.php?username=<?php echo $username ?>&bookid=2" class="link-product-add-cart">The Forever War - Joe Haldeman</a>
                                                    </h4>
                                                    <div class="info-product-price my-2">
                                                        <span class="item_price">₹249.00</span>
                                                    </div>
                                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                        <form action="checkout.php" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="item_name" value="The Forever War" />
                                                                <input type="hidden" name="amount" value="249" />
                                                                <input type="hidden" name="uid" value=<?php echo $uid?>>

                                                                <input type="hidden" name="username" value=<?php echo $username?>>

                                                                <input type="hidden" name="bookid" value=2>
                                                                <input type="submit" name="submit" value="Buy Now!" class="button btn" />
                                                            </fieldset>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 product-men mt-5">
                                            <div class="men-pro-item simpleCart_shelfItem">
                                                <div class="men-thumb-item text-center">
                                                    <img src="images/m3.jpg" alt="" height="201px" width="135px">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.php?username=<?php echo $username ?>&bookid=3" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>

                                                </div>
                                                <div class="item-info-product text-center border-top mt-4">
                                                    <h4 class="pt-1">
                                                        <a href="single.php?username=<?php echo $username ?>&bookid=3" class="link-product-add-cart">Dune - Frank Herbert</a>
                                                    </h4>
                                                    <div class="info-product-price my-2">
                                                        <span class="item_price">₹200.00</span>
                                                    </div>
                                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                        <form action="checkout.php" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="item_name" value="Dune" />
                                                                <input type="hidden" name="amount" value="200" />
                                                                <input type="hidden" name="uid" value=<?php echo $uid?>>

                                                                <input type="hidden" name="username" value=<?php echo $username?>>

                                                                <input type="hidden" name="bookid" value=3>
                                                                <input type="submit" name="submit" value="Buy Now!" class="button btn" />
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- //first section -->
                                <!-- second section -->
                                <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
                                    <h3 class="heading-tittle text-center font-italic">Mystery</h3>
                                    <div class="row">
                                        <div class="col-md-4 product-men mt-5">
                                            <div class="men-pro-item simpleCart_shelfItem">
                                                <div class="men-thumb-item text-center">
                                                    <img src="images/m4.jpg" alt="" height="201px" width="135px">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.php?username=<?php echo $username ?>&bookid=4" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-info-product text-center border-top mt-4">
                                                    <h4 class="pt-1">
                                                        <a href="single.php?username=<?php echo $username ?>&bookid=4" class="link-product-add-cart">Murder is Easy - Agatha Christie</a>
                                                    </h4>
                                                    <div class="info-product-price my-2">
                                                        <span class="item_price">₹299.00</span>
                                                    </div>
                                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                        <form action="checkout.php" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="item_name" value="Murder is Easy" />
                                                                <input type="hidden" name="amount" value="299" />
                                                                <input type="hidden" name="uid" value=<?php echo $uid?>>

                                                                <input type="hidden" name="username" value=<?php echo $username?>>

                                                                <input type="hidden" name="bookid" value=4>
                                                                <input type="submit" name="submit" value="Buy Now!" class="button btn" />
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 product-men mt-5">
                                            <div class="men-pro-item simpleCart_shelfItem">
                                                <div class="men-thumb-item text-center">
                                                    <img src="images/m5.jpg" alt="" height="201px" width="135px">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.php?username=<?php echo $username ?>&bookid=5" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>

                                                </div>
                                                <div class="item-info-product text-center border-top mt-4">
                                                    <h4 class="pt-1">
                                                      <a href="single.php?username=<?php echo $username ?>&bookid=5" class="link-product-add-cart">Lethal White - J.K. Rowling</a>
                                                    </h4>
                                                    <div class="info-product-price my-2">
                                                        <span class="item_price">₹500.00</span>
                                                    </div>
                                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                        <form action="checkout.php" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="item_name" value="Lethal White" />
                                                                <input type="hidden" name="amount" value="500" />




                                                                <input type="hidden" name="uid" value=<?php echo $uid?>>

                                                                <input type="hidden" name="username" value=<?php echo $username?>>




                                                                <input type="hidden" name="bookid" value=5>
                                                                <input type="submit" name="submit" value="Buy Now!" class="button btn" />
                                                            </fieldset>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 product-men mt-5">
                                            <div class="men-pro-item simpleCart_shelfItem">
                                                <div class="men-thumb-item text-center">
                                                    <img src="images/m6.jpg" alt="" height="201px" width="135px">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.php?username=<?php echo $username ?>&bookid=6" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-info-product text-center border-top mt-4">
                                                    <h4 class="pt-1">
                                                        <a href="single.php?username=<?php echo $username ?>&bookid=6" class="link-product-add-cart">Dark Sacred Night - Michael Connelly</a>
                                                    </h4>
                                                    <div class="info-product-price my-2">
                                                        <span class="item_price">₹449.00</span>
                                                    </div>
                                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                        <form action="checkout.php" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="item_name" value="Dark Sacred Night" />
                                                                <input type="hidden" name="amount" value="449" />

                                                                <input type="hidden" name="uid" value=<?php echo $uid?>>

                                                                <input type="hidden" name="username" value=<?php echo $username?>>

                                                                <input type="hidden" name="bookid" value=6>
                                                                <input type="submit" name="submit" value="Buy Now!" class="button btn" />
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- //second section -->
                                <!-- third section -->
                                <!--<div class="product-sec1 product-sec2 px-sm-5 px-3">
							<div class="row">
								<h3 class="col-md-4 effect-bg">Summer Carnival</h3>
								<p class="w3l-nut-middle">Get Extra 10% Off</p>
								<div class="col-md-8 bg-right-nut">
									<img src="images/image1.png" alt="">
								</div>
							</div>
						</div>-->
                                <!-- //third section -->
                                <!-- fourth section -->
                                <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mt-4">
                                    <h3 class="heading-tittle text-center font-italic">Romantic</h3>
                                    <div class="row">
                                        <div class="col-md-4 product-men mt-5">
                                            <div class="men-pro-item simpleCart_shelfItem">
                                                <div class="men-thumb-item text-center">
                                                    <img src="images/m7.jpg" alt="" height="201px" width="135px">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.php?username=<?php echo $username ?>&bookid=7" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="product-new-top">New</span>
                                                <div class="item-info-product text-center border-top mt-4">
                                                    <h4 class="pt-1">
                                                        <a href="single.php?username=<?php echo $username ?>&bookid=7" class="link-product-add-cart">Half Girlfriend - Chetan Bhagat</a>
                                                    </h4>
                                                    <div class="info-product-price my-2">
                                                        <span class="item_price">₹90.00</span>
                                                    </div>
                                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                        <form action="checkout.php" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="item_name" value="Half Girlfriend" />
                                                                <input type="hidden" name="amount" value="90" />

                                                                <input type="hidden" name="uid" value=<?php echo $uid?>>

                                                                <input type="hidden" name="username" value=<?php echo $username?>>

                                                                <input type="hidden" name="bookid" value=7>
                                                                <input type="submit" name="submit" value="Buy Now!" class="button btn" />
                                                            </fieldset>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 product-men mt-5">
                                            <div class="men-pro-item simpleCart_shelfItem">
                                                <div class="men-thumb-item text-center">
                                                    <img src="images/m8.jpg" alt="" height="201px" width="135px">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.php?username=<?php echo $username ?>&bookid=8" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-info-product text-center border-top mt-4">
                                                    <h4 class="pt-1">
                                                      <a href="single.php?username=<?php echo $username ?>&bookid=8" class="link-product-add-cart">Pride and Prejudice - Jane Austen</a>
                                                    </h4>
                                                    <div class="info-product-price my-2">
                                                        <span class="item_price">₹699.00</span>
                                                    </div>
                                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                        <form action="checkout.php" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="item_name" value="Pride and Prejudice" />
                                                                <input type="hidden" name="amount" value="699" />

                                                                <input type="hidden" name="uid" value=<?php echo $uid?>>

                                                                <input type="hidden" name="username" value=<?php echo $username?>>

                                                                <input type="hidden" name="bookid" value=8>
                                                                <input type="submit" name="submit" value="Buy Now!" class="button btn" />
                                                            </fieldset>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 product-men mt-5">
                                            <div class="men-pro-item simpleCart_shelfItem">
                                                <div class="men-thumb-item text-center">
                                                    <img src="images/m9.jpg" alt="" height="201px" width="135px">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.php?username=<?php echo $username ?>&bookid=9" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-info-product text-center border-top mt-4">
                                                    <h4 class="pt-1">
                                                        <a href="single.php?username=<?php echo $username ?>&bookid=9" class="link-product-add-cart">I too had a love story - Ravinder Singh</a>
                                                    </h4>
                                                    <div class="info-product-price my-2">
                                                        <span class="item_price">₹199.00</span>
                                                    </div>
                                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                        <form action="checkout.php" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="item_name" value="I too had a love story" />
                                                                <input type="hidden" name="amount" value="199.00" />

                                                                <input type="hidden" name="uid" value=<?php echo $uid?>>

                                                                <input type="hidden" name="username" value=<?php echo $username?>>

                                                                <input type="hidden" name="bookid" value=9>
                                                                <input type="submit" name="submit" value="Buy Now!" class="button btn" />
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- //fourth section -->
                            </div>
                        </div>
                        <!-- //product left -->

                        <!-- product right -->
                        <!--<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
					<div class="side-bar p-sm-4 p-3">
						<div class="search-hotel border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Search Here..</h3>
							<form action="checkout.php" method="post">
								<input type="search" placeholder="Product name..." name="search" required="">
								<input type="submit" value=" ">
							</form>
						</div>
						 price -->


                        <!--<div class="range border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Price</h3>
							<div class="w3l-range">
								<ul>
									<li>
										<a href="#">Under $1,000</a>
									</li>
									<li class="my-1">
										<a href="#">$1,000 - $5,000</a>
									</li>
									<li>
										<a href="#">$5,000 - $10,000</a>
									</li>
									<li class="my-1">
										<a href="#">$10,000 - $20,000</a>
									</li>
									<li>
										<a href="#">$20,000 $30,000</a>
									</li>
									<li class="mt-1">
										<a href="#">Over $30,000</a>
									</li>
								</ul>
							</div>
						</div>

						-->
                        <!-- //price -->
                        <!-- discounts -->
                        <!--<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Discount</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">5% or More</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">10% or More</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">20% or More</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">30% or More</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">50% or More</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">60% or More</span>
								</li>
							</ul>
						</div>

						-->


                        <!-- //discounts -->
                        <!-- reviews -->


                        <!--<div class="customer-rev border-bottom left-side py-2">
							<h3 class="agileits-sear-head mb-3">Customer Review</h3>
							<ul>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span>5.0</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span>4.0</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star-half"></i>
										<span>3.5</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span>3.0</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star-half"></i>
										<span>2.5</span>
									</a>
								</li>
							</ul>
						</div>

						-->


                        <!-- //reviews -->
                        <!-- electronics -->


                        <!--<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Electronics</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Accessories</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Cameras & Photography</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Car & Vehicle Electronics</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Computers & Accessories</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">GPS & Accessories</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Headphones</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Home Audio</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Home Theater, TV & Video</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Mobiles & Accessories</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Portable Media Players</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Tablets</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Telephones & Accessories</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Wearable Technology</span>
								</li>
							</ul>
						</div>
						 //electronics -->
                        <!-- delivery -->
                        <!--
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Cash On Delivery</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Eligible for Cash On Delivery</span>
								</li>
							</ul>
						</div>
						//delivery -->
                        <!-- arrivals -->
                        <!--
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">New Arrivals</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Last 30 days</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Last 90 days</span>
								</li>
							</ul>
						</div>
						 //arrivals -->
                        <!-- best seller -->
                        <!--<div class="f-grid py-2">
							<h3 class="agileits-sear-head mb-3">Best Seller</h3>
							<div class="box-scroll">
								<div class="scroll">
									<div class="row">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="images/k1.jpg" alt="" class="img-fluid">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href="">Samsung Galaxy On7 Prime (Gold, 4GB RAM + 64GB Memory)</a>
											<a href="" class="price-mar mt-2">$12,990.00</a>
										</div>
									</div>
									<div class="row my-4">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="images/k2.jpg" alt="" class="img-fluid">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href="">Haier 195 L 4 Star Direct-Cool Single Door Refrigerator</a>
											<a href="" class="price-mar mt-2">$12,499.00</a>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="images/k3.jpg" alt="" class="img-fluid">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href="">Ambrane 13000 mAh Power Bank (P-1310 Premium)</a>
											<a href="" class="price-mar mt-2">$1,199.00 </a>
										</div>
									</div>
								</div>
							</div>
						</div>-->
                        <!-- //best seller -->
                    </div>
                    <!-- //product right -->
                </div>
            </div>
        </div>
    </div>





    </center>

    <br>




    <!-- //tittle heading -->



    <!-- //top products -->

    <!-- middle section -->
    <div class="join-w3l1 py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <div class="row">
                <div class="col-lg-6">
                    <div class="join-agile text-left p-4">
                        <div class="row">
                            <div class="col-sm-7 offer-name">
                                <h4 class="mt-2 mb-3">“I often carry things to read so that I will not have to look at people.”</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-Charles Bukowski</p>
                            </div>
                            <div class="col-sm-5 offerimg-w3l">
                                <img src="images/charles-b.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5">
                    <div class="join-agile text-left p-4">
                        <div class="row ">
                            <div class="col-sm-7 offer-name">
                                <h4 class="mt-2 mb-3">“A book worth reading is worth buying.”</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-John Ruskin</p>
                            </div>

                            <div class="col-sm-5 offerimg-w3l">
                                <img src="images/j-ruskin.jpg" style="max-height:245px;" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- middle section -->

    <!-- footer -->
    <footer>
        <div class="footer-top-first">
            <div class="container py-md-5 py-sm-4 py-3">
                <!-- footer first section -->
                <h2 class="footer-top-head-w3l font-weight-bold mb-2">Books :</h2>
                <p class="footer-main mb-4">“Sometimes, you read a book and it fills you with this weird evangelical zeal, and you become convinced that the shattered world will never be put back together unless and until all living humans read the book.” </p>
                <!-- //footer first section -->
                <!-- footer second section -->
                <div class="row w3l-grids-footer border-top border-bottom py-sm-4 py-3">
                    <div class="col-md-4 offer-footer">
                        <div class="row">
                            <div class="col-4 icon-fot">
                                <i class="fas fa-dolly"></i>
                            </div>
                            <div class="col-8 text-form-footer">
                                <h3>Free Shipping</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 offer-footer my-md-0 my-4">
                        <div class="row">
                            <div class="col-4 icon-fot">
                                <i class="fas fa-shipping-fast"></i>
                            </div>
                            <div class="col-8 text-form-footer">
                                <h3>Fast Delivery</h3>
                                <p>Across India</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 offer-footer">
                        <div class="row">
                            <div class="col-4 icon-fot">
                                <i class="far fa-thumbs-up"></i>
                            </div>
                            <div class="col-8 text-form-footer">
                                <h3>Big Choice</h3>
                                <p>of Products</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //footer second section -->
            </div>
        </div>
        <!-- footer third section -->
        <div class="w3l-middlefooter-sec">
            <div class="container py-md-5 py-sm-4 py-3">
                <div class="row footer-info w3-agileits-info">
                    <!-- footer categories -->
                    <!--<div class="col-md-3 col-sm-6 footer-grids">
						<h3 class="text-white font-weight-bold mb-3">Categories</h3>
						<ul>
							<li class="mb-3">
								<a href="product.html">Mobiles </a>
							</li>
							<li class="mb-3">
								<a href="product.html">Computers</a>
							</li>
							<li class="mb-3">
								<a href="product.html">TV, Audio</a>
							</li>
							<li class="mb-3">
								<a href="product2.html">Smartphones</a>
							</li>
							<li class="mb-3">
								<a href="product.html">Washing Machines</a>
							</li>
							<li>
								<a href="product2.html">Refrigerators</a>
							</li>
						</ul>
					</div>

					-->
                    <!-- //footer categories -->
                    <!-- quick links -->


                    <!--<div class="col-md-3 col-sm-6 footer-grids mt-sm-0 mt-4">
						<h3 class="text-white font-weight-bold mb-3">Quick Links</h3>
						<ul>
							<li class="mb-3">
								<a href="about.html">About Us</a>
							</li>
							<li class="mb-3">
								<a href="contact.html">Contact Us</a>
							</li>
							<li class="mb-3">
								<a href="help.html">Help</a>
							</li>
							<li class="mb-3">
								<a href="faqs.html">Faqs</a>
							</li>
							<li class="mb-3">
								<a href="terms.html">Terms of use</a>
							</li>
							<li>
								<a href="privacy.html">Privacy Policy</a>
							</li>
						</ul>
					</div>
					-->
                    <div class="col-md-12 col-sm-12 footer-grids mt-md-0 mt-4">
                        <h3 class="text-white font-weight-bold mb-3">Get In Touch With Us.</h3>
                        <ul>
                            <li class="mb-3">
                                <i class="fas fa-map-marker"></i> Location: Sir M. Visvesvaraya Institute Of Technology, Bangalore &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                <i class="fas fa-mobile"></i>Contact: 9982 xxx xxxx &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                <i class="fas fa-phone"></i>Phone: 0746 xx xxxx &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                <i class="fas fa-envelope-open"></i>
                                <a href="mailto:example@mail.com">Email: admin@bookplanet.ml </a>
                            </li>
                        </ul>
                    </div>
                    <!--<div class="col-md-3 col-sm-6 footer-grids w3l-agileits mt-md-0 mt-4">
						newsletter -->

                    <!--
						<h3 class="text-white font-weight-bold mb-3">Newsletter</h3>
						<p class="mb-3">Free Delivery on your first order!</p>
						<form action="checkout.php" method="post">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email" name="email" required="">
								<input type="submit" value="Go">
							</div>
						</form>-->
                    <!-- //newsletter -->
                    <!-- social icons -->


                    <!--<div class="footer-grids  w3l-socialmk mt-3">
							<h3 class="text-white font-weight-bold mb-3">Follow Us on</h3>
							<div class="social">
								<ul>
									<li>
										<a class="icon fb" href="#">
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a class="icon tw" href="#">
											<i class="fab fa-twitter"></i>
										</a>
									</li>
									<li>
										<a class="icon gp" href="#">
											<i class="fab fa-google-plus-g"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>

						-->
                    <!-- //social icons -->
                </div>
            </div>
            <!-- //quick links -->
        </div>
        </div>
        <!-- //footer third section -->

        <!-- footer fourth section -->
        <div class="agile-sometext py-md-5 py-sm-4 py-3">
            <div class="container">
              <!-- //brands -->
              <div class="row sub-some child-momu mt-4">
                <div class="col-xl-4">
                  <h5 class="font-weight-bold mb-3">Payment Methods :</h5>
                </div>
                <div class="col-xl-8">
                  <!-- payment -->

                    <ul>
                      <li>
                        <img src="images/pay2.png" alt="">
                      </li>
                      <li>
                        <img src="images/pay5.png" alt="">
                      </li>
                      <li>
                        <img src="images/pay1.png" alt="">
                      </li>
                      <li>
                        <img src="images/pay4.png" alt="">
                      </li>
                      <li>
                        <img src="images/pay6.png" alt="">
                      </li>
                      <li>
                        <img src="images/pay3.png" alt="">
                      </li>
                      <li>
                        <img src="images/pay7.png" alt="">
                      </li>
                      <li>
                        <img src="images/pay8.png" alt="">
                      </li>
                      <li>
                        <img src="images/pay9.png" alt="">
                      </li>
                    </ul>
                  <!-- //payment -->

                </div>
              </div>

            </div>
        </div>
        <!-- //footer fourth section (text) -->
    </footer>
    <!-- //footer -->
    <!-- copyright -->
    <div class="copy-right py-3">
        <div class="container">
            <p class="text-center text-white">© Book Planet. All rights reserved | Design by
                <a href="https://dntandan.ml"> Book Planet Team</a>
            </p>
        </div>
    </div>
    <!-- //copyright -->

    <!-- js-files -->
    <!-- jquery -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //jquery -->

    <!-- nav smooth scroll -->
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //nav smooth scroll -->

    <!-- popup modal (for location)-->
    <script src="js/jquery.magnific-popup.js"></script>
    <script>
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

        });
    </script>
    <!-- //popup modal (for location)-->

    <!-- cart-js -->
    <script src="js/minicart.js"></script>
    <script>
        paypals.minicarts.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

        paypals.minicarts.cart.on('checkout', function(evt) {
            var items = this.items(),
                len = items.length,
                total = 0,
                i;

            // Count the number of each item in the cart
            for (i = 0; i < len; i++) {
                total += items[i].get('quantity');
            }
        });
    </script>
    <!-- //cart-js -->

    <!-- password-script -->
    <script>
        window.onload = function() {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- //password-script -->

    <!-- scroll seller -->
    <script src="js/scroll.js"></script>
    <!-- //scroll seller -->

    <!-- smoothscroll -->
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smoothscroll -->

    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->

    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function() {
            /*
            var defaults = {
            	containerID: 'toTop', // fading element id
            	containerHoverID: 'toTopHover', // fading element hover id
            	scrollSpeed: 1200,
            	easingType: 'linear'
            };
            */
            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!-- //smooth-scrolling-of-move-up -->

    <!-- for bootstrap working -->
    <script src="js/bootstrap.js"></script>
    <!-- //for bootstrap working -->
    <!-- //js-files -->
</body>

</html>
