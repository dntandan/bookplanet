<?php
if(isset($_POST)){
  $item_name= $_POST['item_name'];
  $amount= $_POST['amount'];



  $uid=$_POST['uid'];



  $username=$_POST['username'];
  $bookid= $_POST['bookid'];


  // $item_name=myUrlEncode($item_name);

}

$con=mysqli_connect("localhost","root","","shop");

  $sql="select * from book where book_id='$bookid'";

  $res=$con->query($sql);

  if($res->num_rows>0)
   		{
   			while($row=$res->fetch_assoc())
   			{

   				$count=$row['book_count'];
   			}
   		}
?>



<?php
function myUrlEncode($string) {
    $entities = array('%21', '%2A', '%27', '%28', '%29', '%3B', '%3A', '%40', '%26', '%3D', '%2B', '%24', '%2C', '%2F', '%3F', '%25', '%23', '%5B', '%5D');
    $replacements = array('!', '*', "'", "(", ")", ";", ":", "@", "&", "=", " ", "$", ",", "/", "?", "%", "#", "[", "]");
    return str_replace($entities, $replacements, urlencode($string));
}
?>




<!doctype html>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Book Planet | Checkout</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>

	<style>
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

	<!-- //navigation -->

	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l">

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
					<li>Checkout</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- checkout page -->
	<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>C</span>heckout
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<h4 class="mb-sm-4 mb-3">Your shopping cart contains:
					<span>1 Product</span>
				</h4>
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>SL No.</th>
								<th>Product Name</th>
								<th>Price</th>




							</tr>
						</thead>
						<tbody>
							<tr class="rem1">
								<td class="invert">1</td>




								<td class="invert"><?php echo $item_name?></td>
								<td class="invert">₹<?php echo $amount?>.00</td>


							</tr>

						</tbody>
					</table>
				</div>
			</div>

			<div class="checkout-left">
				<div class="address_form_agile mt-sm-5 mt-4">
					<h4 class="mb-sm-4 mb-3">Please enter shipping details</h4>
          <form action="payment.php" method="post">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label >First Name</label>
                <input type="text" class="form-control" name="firstname" id="inputEmail4" placeholder="Stephen" required="">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Last Name</label>
                <input type="text" class="form-control" name="lastname" placeholder="Kowaski" required="">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Address</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="add1" required="">
            </div>
            <div class="form-group">
              <label for="inputAddress2">Address 2</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="add2" required="">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label >Email</label>
                <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="user@domain.tlds" required="">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Phone Number</label>
                <input type="tel" class="form-control" name="number" placeholder="99-82-xxx-xxx" required="">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity" placeholder="Bangalore" name="city"required="">
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <input type="text" class="form-control" id="inputState" placeholder="Karnataka" name="state"required="">
              </div>
              <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip" placeholder="562157" name="pin"required="">
              </div>
            </div>

            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="inlineRadio1" name="gender" value="m" checked>
            <label class="form-check-label" for="inlineRadio1">Male</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio"  id="inlineRadio2" name="gender" value="f">
            <label class="form-check-label" for="inlineRadio2">Female</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio"  id="inlineRadio3" name="gender" value="0">
            <label class="form-check-label" for="inlineRadio3">Other</label>
            </div>
            <input type="hidden" name="bookid" value=<?php echo $bookid ?>>

            <input type="hidden" name="bookname" value=<?php echo $item_name ?>>

            <input type="hidden" name="amount" value=<?php echo $amount ?>>

            <input type="hidden" name="username" value=<?php echo $username?>>

            <input type="hidden" name="uid" value=<?php echo $uid?>>
            <br>
            <br>
            <?php if ($count==0):?>
              <p>Sorry! The book is sold out </p>

            <?php else: ?>
            <input type="submit" value="Pay Now" class="btn btn-success btn-lg"></input>

          <?php endif; ?>

          </form>



					<!--<div class="checkout-right-basket">
						<a href="payment.html">Make a Payment
							<span class="far fa-hand-point-right"></span>
						</a>
					</div>-->
				</div>
			</div>
		</div>
	</div>
	<!-- //checkout page -->

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

	<!-- js-files -->
	<!-- jquery -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //jquery -->

	<!-- nav smooth scroll -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
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
		$(document).ready(function () {
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

		paypals.minicarts.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- password-script -->
	<script>
		window.onload = function () {
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

	<!-- quantity -->
	<script>
		$('.value-plus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) + 1;
			divUpd.text(newVal);
		});

		$('.value-minus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) - 1;
			if (newVal >= 1) divUpd.text(newVal);
		});
	</script>
	<!--quantity-->
	<script>
		$(document).ready(function (c) {
			$('.close1').on('click', function (c) {
				$('.rem1').fadeOut('slow', function (c) {
					$('.rem1').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close2').on('click', function (c) {
				$('.rem2').fadeOut('slow', function (c) {
					$('.rem2').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close3').on('click', function (c) {
				$('.rem3').fadeOut('slow', function (c) {
					$('.rem3').remove();
				});
			});
		});
	</script>
	<!-- //quantity -->

	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
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
		$(document).ready(function () {
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