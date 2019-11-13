<?php
	$con=mysqli_connect("localhost","root","","shop");
	$sql="select * from shipping";
	$res=$con->query($sql);
	$currentsales=0;
	while ($row = $res->fetch_assoc()) {
     $currentsales=$currentsales+1;
	}
	$sql2="SELECT * FROM shipping ORDER BY sid DESC LIMIT 1";
	$res=$con->query($sql2);
	while ($row = $res->fetch_assoc()) {
    	$totalsales=$row['sid']."<br>";
    }
    $sqluser="select * from user";
    $customercount=0;
    $res=$con->query($sqluser);
    while ($row = $res->fetch_assoc()) {
     $customercount=$customercount+1;
	}

	$sqlcat="SELECT * FROM sub_cat ORDER BY subcat_id DESC LIMIT 1";
	$res=$con->query($sqlcat);
	while ($row = $res->fetch_assoc()) {
    	$totalsubcat=$row['subcat_id']."<br>";
    }

    $queriescount=0;
    $sqlq="SELECT * FROM contact";
	$res=$con->query($sqlq);
	while ($row = $res->fetch_assoc()) {
    	$queriescount=$queriescount+1;
    }

    $stockcount=0;

    $sqlbook="select * from book";

    $res=$con->query($sqlbook);

    while($row= $res->fetch_assoc())
    {
    	$stockcount=$stockcount+$row['book_count'];
    }
    $sale=0;
    $book1=0;
    $book2=0;
    $book3=0;
    $book4=0;
    $book5=0;
    $book6=0;
    $book7=0;
    $book8=0;
    $book9=0;
    $sqlsale="select * from shipping";
    $res=$con->query($sqlsale);
    while($row= $res->fetch_assoc())
    {
    	if($row['b_id']==1)
    		$book1=$book1+1;
    	if($row['b_id']==2)
    		$book2=$book2+1;
    	if($row['b_id']==3)
    		$book3=$book3+1;
    	if($row['b_id']==4)
    		$book4=$book4+1;
    	if($row['b_id']==5)
    		$book5=$book5+1;
    	if($row['b_id']==6)
    		$book6=$book6+1;
    	if($row['b_id']==7)
    		$book7=$book7+1;
    	if($row['b_id']==8)
    		$book8=$book8+1;
    	if($row['b_id']==9)
    		$book9=$book9+1;
    }

    $sale=($book1*161)+($book2*249)+($book3*200)+($book4*299)+($book5*500)+($book6*449)+($book7*90)+($book8*699)+($book9*199);
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Book Planet | Online Book Store</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>

	<style>

	h2 {
    border: 1px solid powderblue;
    padding: 30px;








    margin: 50px;
}
	.round-img
	{

		border-radius: 50%;

		height: 100;

		width: 100;
	}

</style>
	<script>
		addEventListener("load", function () {
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
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
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
                          <i class="fas fa-sign-in-alt mr-2"></i>Welcome, dntandan
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
										<li class="nav-item">

											Welcome To Admin Panel Of BookPlanet ! &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										</li>
										<li class="nav-item">

											<a href='index.php'>Logout </a>
										</li>
                  </ul>
              </div>
          </nav>
      </div>
  </div>
  <!-- //navigation -->

	<!-- banner -->

	<!-- //navigation -->

	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l" style="min-height: 475px!important;">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="welcome.php">Home</a>
						<i>|</i>
					</li>
					<li>Admin Panel Report & Total sales and performance record of Book Planet</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

	<div class="container mt-5">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-lg-4">
            <div class="box">
                <div class="icon">
                    <div class="image"><i class="glyphicon glyphicon-list-alt btn-lg white fas fa-cart-plus"></i></div>
                    <div class="info">
                        <h4 class="title mt-3">₹ <?php echo $sale ?>.00</h4>
                        <p>
                            Total sales made this order cycle.
                        </p>

                    </div>
                </div>
                <div class="space"></div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-4">
            <div class="box">
                <div class="icon">
                    <div class="image"><i class="glyphicon glyphicon-list-alt btn-lg white fas fa-book"></i></div>
                    <div class="info">
                        <h4 class="title mt-3"><?php echo $totalsales ?></h4>
                        <p>
                            Total number of books sold.
                        </p>

                    </div>
                </div>
                <div class="space"></div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-4">
            <div class="box">
                <div class="icon">
                    <div class="image"><i class="glyphicon glyphicon-list-alt btn-lg white fas fa-rupee-sign"></i></div>
                    <div class="info">
                        <h4 class="title mt-3"><?php echo $currentsales ?></h4>
                        <p>
                            Current active orders.
                        </p>

                    </div>
                </div>
                <div class="space"></div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-lg-4">
            <div class="box">
                <div class="icon">
                    <div class="image"><i class="glyphicon glyphicon-list-alt btn-lg white fas fa-user"></i></div>
                    <div class="info">
                        <h4 class="title mt-3"><?php echo $customercount ?></h4>
                        <p>
                            Total number of customers.
                        </p>

                    </div>
                </div>
                <div class="space"></div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-4">
            <div class="box">
                <div class="icon">
                    <div class="image"><i class="glyphicon glyphicon-list-alt btn-lg white fas fa-list-alt"></i></div>
                    <div class="info">
                        <h4 class="title mt-3"><?php echo $totalsubcat ?></h4>
                        <p>
                            Total categories of books available.
                        </p>

                    </div>
                </div>
                <div class="space"></div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-4">
            <div class="box">
                <div class="icon">
                    <div class="image"><i class="glyphicon glyphicon-list-alt btn-lg white fab fa-facebook-messenger"></i></div>
                    <div class="info">
                        <h4 class="title mt-3"><?php echo $queriescount ?></h4>
                        <p>
                            Unsolved queries from customers.
                        </p>

                    </div>
                </div>
                <div class="space"></div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-lg-4">
            <div class="box">
                <div class="icon">
                    <div class="image"><i class="glyphicon glyphicon-list-alt btn-lg white fas fa-check"></i></div>
                    <div class="info">
                        <h4 class="title mt-3"><?php echo $stockcount ?></h4>
                        <p>
                            Total count of books in stock.
                        </p>

                    </div>
                </div>
                <div class="space"></div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-4">
            <div class="box">
                <div class="icon">
                    <div class="image"><i class="glyphicon glyphicon-list-alt btn-lg white fas fa-bolt"></i></div>
                    <div class="info">
                        <h4 class="title mt-3">09</h4>
                        <p>
                          Total number of types of books .
                        </p>

                    </div>
                </div>
                <div class="space"></div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-4">
            <div class="box">
                <div class="icon">
                    <div class="image"><i class="glyphicon glyphicon-list-alt btn-lg white fas fa-lock"></i></div>
                    <div class="info">
                        <h4 class="title mt-3">01</h4>
                        <p>
                            Total number of active admin.
                        </p>

                    </div>
                </div>
                <div class="space"></div>
            </div>
        </div>

    </div>
</div>

<style>
    .white {
        color: white;
    }

    .btn-lg {
        font-size: 38px;
        line-height: 1.33;
        border-radius: 6px;
    }

    .box > .icon {
        text-align: center;
        position: relative;
    }

    .box > .icon > .image {
        position: relative;
        z-index: 2;
        margin: auto;
        width: 88px;
        height: 88px;
        border: 7px solid white;
        line-height: 88px;
        border-radius: 50%;
        background: #63B76C;
        vertical-align: middle;
    }

    .box > .icon:hover > .image {
        border: 4px solid black;
    }

    .box > .icon > .image > i {
        font-size: 40px !important;
        color: #fff !important;
    }

    .box > .icon:hover > .image > i {
        color: white !important;
    }

    .box > .icon > .info {
        margin-top: -24px;
        background: rgba(0, 0, 0, 0.04);
        border: 1px solid #e0e0e0;
        padding: 15px 0 10px 0;
    }

        .box > .icon > .info > h3.title {
            color: #222;
            font-weight: 500;
        }

        .box > .icon > .info > p {
            color: #666;
            line-height: 1.5em;
            margin: 20px;
        }

    .box > .icon:hover > .info > h3.title, .box > .icon:hover > .info > p, .box > .icon:hover > .info > .more > a {
        color: #222;
    }

    .box > .icon > .info > .more a {
        color: #222;
        line-height: 12px;
        text-transform: uppercase;
        text-decoration: none;
    }

    .box > .icon:hover > .info > .more > a {
        color: #000;
        padding: 6px 8px;
        border-bottom: 4px solid black;
    }

    .box .space {
        height: 30px;
    }
</style>

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
								<p></p>
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
								<p>World Wide</p>
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


					<!-- //footer categories -->
					<!-- quick links -->

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

					<div class="col-md-3 col-sm-6 footer-grids w3l-agileits mt-md-0 mt-4">
						<!-- newsletter -->


						<!-- //newsletter -->

					</div>
				</div>
				<!-- //quick links -->
			</div>
		</div>
		<!-- //footer third section -->

		<!-- footer fourth section -->
		<div class="agile-sometext py-md-5 py-sm-4 py-3">
			<div class="container">
				<!-- brands -->




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

</body>

</html>
