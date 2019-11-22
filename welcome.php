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
    <title>Book Planet | Online Book Store
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
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
      }
                       , false);
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
                <i class="fas fa-sign-in-alt mr-2">
                </i>Welcome,
                <?php echo $username ?>
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
            <h5 class="modal-title text-center">Log In
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;
              </span>
            </button>
          </div>
          <div class="modal-body">
            <form action="checkout.php" method="post">
              <div class="form-group">
                <label class="col-form-label">E-mail
                </label>
                <input type="text" class="form-control" placeholder=" " name="email" required="">
              </div>
              <div class="form-group">
                <label class="col-form-label">Password
                </label>
                <input type="password" class="form-control" placeholder=" " name="pw" required="">
              </div>
              <div class="right-w3l">
                <input type="submit" class="form-control" value="Log in">
              </div>
              <div class="sub-w3l">
                <div class="custom-control custom-checkbox mr-sm-2">
                  <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                  <label class="custom-control-label" for="customControlAutosizing">Remember me?
                  </label>
                </div>
              </div>
              <p class="text-center dont-do mt-3">Don't have an account?
                <a href="#" data-toggle="modal" data-target="#exampleModal2">
                  Register Now
                </a>
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
            <span class="navbar-toggler-icon">
            </span>
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
                  <span class="sr-only">(current)
                  </span>
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
                <a class="nav-link" href="contact.php?uname=<?php echo $username?>">Contact Us
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php">Logout
                </a>
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
          <div class="container py-5">
            <!-- For Demo Purpose-->
            <header class="text-center mb-5">
              <h1 class="display-4 font-weight-bold">Books In Our Planet
              </h1>
              <p class="font-italic text-muted mb-0">An awesome collection of books with variant content from all over the planet.
              </p>
            </header>
            <!-- Start First Row [Books]-->
            <h2 class="font-weight-bold mb-2">Poetry
            </h2>
            <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
            </p>
            <div class="row pb-5 mb-4">
              <!-- Start Book Card -->
              <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                  <div class="card-body p-4">
                    <h5><span class="badge badge-pill badge-info mb-2">₹ 196.00</span></h5>
                    <img src="images/books/poetry/arias.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                    <h5>
                      <a href="single.php?username=<?php echo $username ?>&bookid=1" class="link-product-add-cart text-dark">Arias
                      </a>
                    </h5>
                    <p class="small text-muted font-italic">Following her recent Odes, the Pulitzer Prize-winning poet Sharon Olds gives us radical new poems of intimate life and political conscience, of race and class and a mother's violence.
                    </p>
                    <ul class="list-inline small">
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star-half text-success">
                        </i>
                      </li>
                    </ul>
                  </div>
                  <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                    <form action="checkout.php" method="post">
                      <fieldset>
                        <input type="hidden" name="item_name" value="Arias" />
                        <input type="hidden" name="amount" value="196" />
                        <input type="hidden" name="uid" value=
                               <?php echo $uid?>>
                        <input type="hidden" name="username" value=
                               <?php echo $username?>>
                        <input type="hidden" name="bookid" value=1>
                        <input type="submit" name="submit" value="Buy Now" class="mt-2 mb-3 btn-block btn btn-outline-success" />
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
              <!-- End Book Card -->
              <!-- Start Book Card -->
              <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                  <div class="card-body p-4">
                    <h5><span class="badge badge-pill badge-info mb-2">₹ 120.00</span></h5>
                    <img src="images/books/poetry/poemsia.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                    <h5>
                      <a href="single.php?username=<?php echo $username ?>&bookid=2" class="link-product-add-cart text-dark">Poemsia
                      </a>
                    </h5>
                    <p class="small text-muted font-italic">From award-winning author and poet Lang Leav a mysterious book, Poemsia, she finds herself suddenly thrust into the dizzying world of social media stardom, where poets are the new rock stars.
                    <ul class="list-inline small">
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star-half text-success">
                        </i>
                      </li>
                    </ul>
                  </div>
                  <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                    <form action="checkout.php" method="post">
                      <fieldset>
                        <input type="hidden" name="item_name" value="Poemsia" />
                        <input type="hidden" name="amount" value="120" />
                        <input type="hidden" name="uid" value=
                               <?php echo $uid?>>
                        <input type="hidden" name="username" value=
                               <?php echo $username?>>
                        <input type="hidden" name="bookid" value=2>
                        <input type="submit" name="submit" value="Buy Now" class="mt-2 mb-3 btn-block btn btn-outline-success" />
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
              <!-- End Book Card -->
              <!-- Start Book Card -->
              <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                  <div class="card-body p-4">
                    <h5><span class="badge badge-pill badge-info mb-2">₹ 140.00</span></h5>
                    <img src="images/books/poetry/imrising.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                    <h5>
                      <a href="single.php?username=<?php echo $username ?>&bookid=3" class="link-product-add-cart text-dark">I'm Rising
                      </a>
                    </h5>
                    <p class="small text-muted font-italic">Bestselling author Michelle Stradford follows “I'm Rising: Determined. Confident. Powerful.” tells an emotive journey of empowerment through life’s countless triumphs and tribulations.
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star-half text-success">
                        </i>
                      </li>
                    </ul>
                  </div>
                  <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                    <form action="checkout.php" method="post">
                      <fieldset>
                        <input type="hidden" name="item_name" value="I'm Rising" />
                        <input type="hidden" name="amount" value="140" />
                        <input type="hidden" name="uid" value=
                               <?php echo $uid?>>
                        <input type="hidden" name="username" value=
                               <?php echo $username?>>
                        <input type="hidden" name="bookid" value=3>
                        <input type="submit" name="submit" value="Buy Now" class="mb-3 btn-block btn btn-outline-success" />
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
              <!-- End Book Card -->
              <!-- Start Book Card -->
              <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                  <div class="card-body p-4">
                    <h5><span class="badge badge-pill badge-info mb-2">₹ 100.00</span></h5>
                    <img src="images/books/poetry/hull.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                    <h5>
                      <a href="single.php?username=<?php echo $username ?>&bookid=4" class="link-product-add-cart text-dark">Hull
                      </a>
                    </h5>
                    <p class="small text-muted font-italic">Hull by African American poet Xandria Phillips explores the present-day emotional impacts of enslavement and colonization on the Black queer body in urban, rural, and international settings.
                    <ul class="list-inline small">
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star-half text-success">
                        </i>
                      </li>
                    </ul>
                  </div>
                  <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                    <form action="checkout.php" method="post">
                      <fieldset>
                        <input type="hidden" name="item_name" value="Hull" />
                        <input type="hidden" name="amount" value="100" />
                        <input type="hidden" name="uid" value=
                               <?php echo $uid?>>
                        <input type="hidden" name="username" value=
                               <?php echo $username?>>
                        <input type="hidden" name="bookid" value=4>
                        <input type="submit" name="submit" value="Buy Now" class="mb-3 btn-block btn btn-outline-success" />
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
              <!-- End Book Card -->
            </div>
            <!-- End First Row [Books]-->

            <!-- Start Second Row [Books]-->
            <h2 class="font-weight-bold mb-2">Thriller
            </h2>
            <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
            </p>
            <div class="row pb-5 mb-4">
              <!-- Start Book Card -->
              <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                  <div class="card-body p-4">
                    <h5><span class="badge badge-pill badge-info mb-2">₹ 90.00</span></h5>
                    <img src="images/m1.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                    <h5>
                      <a href="single.php?username=<?php echo $username ?>&bookid=1" class="link-product-add-cart text-dark">The Time Machine
                      </a>
                    </h5>
                    <p class="small text-muted font-italic">The Time Machine is a science fiction novella by H. G. Wells, published in 1895 and written as a frame narrative.
                    </p>
                    <ul class="list-inline small">
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star-half text-success">
                        </i>
                      </li>
                    </ul>
                  </div>
                  <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                    <form action="checkout.php" method="post">
                      <fieldset>
                        <input type="hidden" name="item_name" value="The Time Machine" />
                        <input type="hidden" name="amount" value="161" />
                        <input type="hidden" name="uid" value=
                               <?php echo $uid?>>
                        <input type="hidden" name="username" value=
                               <?php echo $username?>>
                        <input type="hidden" name="bookid" value=1>
                        <input type="submit" name="submit" value="Buy Now" class="mb-3 btn-block btn btn-outline-success" />
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
              <!-- End Book Card -->
              <!-- Start Book Card -->
              <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                  <div class="card-body p-4">
                    <h5><span class="badge badge-pill badge-info mb-2">₹ 90.00</span></h5>
                    <img src="images/m1.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                    <h5>
                      <a href="single.php?username=<?php echo $username ?>&bookid=1" class="link-product-add-cart text-dark">The Time Machine
                      </a>
                    </h5>
                    <p class="small text-muted font-italic">The Time Machine is a science fiction novella by H. G. Wells, published in 1895 and written as a frame narrative.
                    </p>
                    <ul class="list-inline small">
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star-half text-success">
                        </i>
                      </li>
                    </ul>
                  </div>
                  <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                    <form action="checkout.php" method="post">
                      <fieldset>
                        <input type="hidden" name="item_name" value="The Time Machine" />
                        <input type="hidden" name="amount" value="161" />
                        <input type="hidden" name="uid" value=
                               <?php echo $uid?>>
                        <input type="hidden" name="username" value=
                               <?php echo $username?>>
                        <input type="hidden" name="bookid" value=1>
                        <input type="submit" name="submit" value="Buy Now" class="mb-3 btn-block btn btn-outline-success" />
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
              <!-- End Book Card -->
              <!-- Start Book Card -->
              <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                  <div class="card-body p-4">
                    <h5><span class="badge badge-pill badge-info mb-2">₹ 90.00</span></h5>
                    <img src="images/m1.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                    <h5>
                      <a href="single.php?username=<?php echo $username ?>&bookid=1" class="link-product-add-cart text-dark">The Time Machine
                      </a>
                    </h5>
                    <p class="small text-muted font-italic">The Time Machine is a science fiction novella by H. G. Wells, published in 1895 and written as a frame narrative.
                    </p>
                    <ul class="list-inline small">
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star-half text-success">
                        </i>
                      </li>
                    </ul>
                  </div>
                  <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                    <form action="checkout.php" method="post">
                      <fieldset>
                        <input type="hidden" name="item_name" value="The Time Machine" />
                        <input type="hidden" name="amount" value="161" />
                        <input type="hidden" name="uid" value=
                               <?php echo $uid?>>
                        <input type="hidden" name="username" value=
                               <?php echo $username?>>
                        <input type="hidden" name="bookid" value=1>
                        <input type="submit" name="submit" value="Buy Now" class="mb-3 btn-block btn btn-outline-success" />
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
              <!-- End Book Card -->
              <!-- Start Book Card -->
              <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                  <div class="card-body p-4">
                    <h5><span class="badge badge-pill badge-info mb-2">₹ 90.00</span></h5>
                    <img src="images/m1.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                    <h5>
                      <a href="single.php?username=<?php echo $username ?>&bookid=1" class="link-product-add-cart text-dark">The Time Machine
                      </a>
                    </h5>
                    <p class="small text-muted font-italic">The Time Machine is a science fiction novella by H. G. Wells, published in 1895 and written as a frame narrative.
                    </p>
                    <ul class="list-inline small">
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star-half text-success">
                        </i>
                      </li>
                    </ul>
                  </div>
                  <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                    <form action="checkout.php" method="post">
                      <fieldset>
                        <input type="hidden" name="item_name" value="The Time Machine" />
                        <input type="hidden" name="amount" value="161" />
                        <input type="hidden" name="uid" value=
                               <?php echo $uid?>>
                        <input type="hidden" name="username" value=
                               <?php echo $username?>>
                        <input type="hidden" name="bookid" value=1>
                        <input type="submit" name="submit" value="Buy Now" class="mb-3 btn-block btn btn-outline-success" />
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
              <!-- End Book Card -->
            </div>
            <!-- End Second Row [Prosucts]-->

            <!-- Start Third Row [Books]-->
            <h2 class="font-weight-bold mb-2">History
            </h2>
            <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
            </p>
            <div class="row pb-5 mb-4">
              <!-- Start Book Card -->
              <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                  <div class="card-body p-4">
                    <h5><span class="badge badge-pill badge-info mb-2">₹ 365.00</span></h5>
                    <img src="images/books/history/sapiens.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                    <h5>
                      <a href="single.php?username=<?php echo $username ?>&bookid=9" class="link-product-add-cart text-dark">Sapiens
                      </a>
                    </h5>
                    <p class="small text-muted font-italic">Sapiens by Yuval Noah Harari tells about why did our foraging ancestors come together to create cities and kingdoms?
                    </p>
                    <ul class="list-inline small">
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                    </ul>
                  </div>
                  <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                    <form action="checkout.php" method="post">
                      <fieldset>
                        <input type="hidden" name="item_name" value="Sapiens" />
                        <input type="hidden" name="amount" value="365" />
                        <input type="hidden" name="uid" value=
                               <?php echo $uid?>>
                        <input type="hidden" name="username" value=
                               <?php echo $username?>>
                        <input type="hidden" name="bookid" value=9>
                        <input type="submit" name="submit" value="Buy Now" class="mb-3 btn-block btn btn-outline-success" />
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
              <!-- End Book Card -->
              <!-- Start Book Card -->
              <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                  <div class="card-body p-4">
                    <h5><span class="badge badge-pill badge-info mb-2">₹ 186.00</span></h5>
                    <img src="images/books/history/nosurrender.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                    <h5>
                      <a href="single.php?username=<?php echo $username ?>&bookid=10" class="link-product-add-cart text-dark">No Surrender
                      </a>
                    </h5>
                    <p class="small text-muted font-italic">No Surrender is an unforgettable story of a father’s extraordinary acts of valor during World War II by Christopher Edmonds .
                    <ul class="list-inline small">
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star-half text-success">
                        </i>
                      </li>
                    </ul>
                  </div>
                  <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                    <form action="checkout.php" method="post">
                      <fieldset>
                        <input type="hidden" name="item_name" value="No Surrender" />
                        <input type="hidden" name="amount" value="186" />
                        <input type="hidden" name="uid" value=
                               <?php echo $uid?>>
                        <input type="hidden" name="username" value=
                               <?php echo $username?>>
                        <input type="hidden" name="bookid" value=10>
                        <input type="submit" name="submit" value="Buy Now" class="mb-3 btn-block btn btn-outline-success" />
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
              <!-- End Book Card -->
              <!-- Start Book Card -->
              <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                  <div class="card-body p-4">
                    <h5><span class="badge badge-pill badge-info mb-2">₹ 255.00</span></h5>
                    <img src="images/books/history/edison.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                    <h5>
                      <a href="single.php?username=<?php echo $username ?>&bookid=11" class="link-product-add-cart text-dark">Edison
                      </a>
                    </h5>
                    <p class="small text-muted font-italic">From Pulitzer Prize-winning author Edmund Morris comes the biography of Thomas Alva Edison, the most prolific genius in American history.
                    </p>
                    <ul class="list-inline small">
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                    </ul>
                  </div>
                  <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                    <form action="checkout.php" method="post">
                      <fieldset>
                        <input type="hidden" name="item_name" value="Edison" />
                        <input type="hidden" name="amount" value="255" />
                        <input type="hidden" name="uid" value=
                               <?php echo $uid?>>
                        <input type="hidden" name="username" value=
                               <?php echo $username?>>
                        <input type="hidden" name="bookid" value=11>
                        <input type="submit" name="submit" value="Buy Now" class="mb-3 btn-block btn btn-outline-success" />
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
              <!-- End Book Card -->
              <!-- Start Book Card -->
              <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                  <div class="card-body p-4">
                    <h5><span class="badge badge-pill badge-info mb-2">₹ 90.00</span></h5>
                    <img src="images/books/history/stolen.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                    <h5>
                      <a href="single.php?username=<?php echo $username ?>&bookid=12" class="link-product-add-cart text-dark">Stolen
                      </a>
                    </h5>
                    <p class="small text-muted font-italic">A gripping and true story by Richard Bell, about five boys who were kidnapped in the North and smuggled into slavery in the Deep South.
                    </p>
                    <ul class="list-inline small">
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                    </ul>
                  </div>
                  <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                    <form action="checkout.php" method="post">
                      <fieldset>
                        <input type="hidden" name="item_name" value="Stolen" />
                        <input type="hidden" name="amount" value="310" />
                        <input type="hidden" name="uid" value=
                               <?php echo $uid?>>
                        <input type="hidden" name="username" value=
                               <?php echo $username?>>
                        <input type="hidden" name="bookid" value=12>
                        <input type="submit" name="submit" value="Buy Now" class="mb-3 btn-block btn btn-outline-success" />
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
              <!-- End Book Card -->
            </div>
            <!-- End Third Row [Prosucts]-->

            <!-- Start Fourth Row [Books]-->
            <h2 class="font-weight-bold mb-2">Short Story
            </h2>
            <p class="font-italic text-muted mb-4">Short story is a piece of prose fiction that typically can be read in one sitting and focuses on <br>a self-contained incident or series of linked incidents.
            </p>
            <div class="row pb-5 mb-4">
              <!-- Start Book Card -->
              <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                  <div class="card-body p-4">
                    <h5><span class="badge badge-pill badge-info mb-2">₹ 250.00</span></h5>
                    <img src="images/books/shortstory/dearlife.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                    <h5>
                      <a href="single.php?username=<?php echo $username ?>&bookid=13" class="link-product-add-cart text-dark">Dear Life
                      </a>
                    </h5>
                    <p class="small text-muted font-italic">Dear Life is a short story collection by Canadian writer Alice Munro, published in 2012 by McClelland and Stewart.
                    </p>
                    <ul class="list-inline small">
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star-half text-success">
                        </i>
                      </li>
                    </ul>
                  </div>
                  <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                    <form action="checkout.php" method="post">
                      <fieldset>
                        <input type="hidden" name="item_name" value="Dear Life" />
                        <input type="hidden" name="amount" value="250" />
                        <input type="hidden" name="uid" value=
                               <?php echo $uid?>>
                        <input type="hidden" name="username" value=
                               <?php echo $username?>>
                        <input type="hidden" name="bookid" value=13>
                        <input type="submit" name="submit" value="Buy Now" class="mb-3 btn-block btn btn-outline-success" />
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
              <!-- End Book Card -->
              <!-- Start Book Card -->
              <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                  <div class="card-body p-4">
                    <h5><span class="badge badge-pill badge-info mb-2">₹ 180.00</span></h5>
                    <img src="images/books/shortstory/fragilethings.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                    <h5>
                      <a href="single.php?username=<?php echo $username ?>&bookid=14" class="link-product-add-cart text-dark">Fragile Things
                      </a>
                    </h5>
                    <p class="small text-muted font-italic">Short Fictions and Wonders is a collection of short stories and poetry by English author Neil Gaiman in the year 2006.
                    </p>
                    <ul class="list-inline small">
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                    </ul>
                  </div>
                  <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                    <form action="checkout.php" method="post">
                      <fieldset>
                        <input type="hidden" name="item_name" value="Fragile Things" />
                        <input type="hidden" name="amount" value="180" />
                        <input type="hidden" name="uid" value=
                               <?php echo $uid?>>
                        <input type="hidden" name="username" value=
                               <?php echo $username?>>
                        <input type="hidden" name="bookid" value=14>
                        <input type="submit" name="submit" value="Buy Now" class="mb-3 btn-block btn btn-outline-success" />
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
              <!-- End Book Card -->
              <!-- Start Book Card -->
              <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                  <div class="card-body p-4">
                    <h5><span class="badge badge-pill badge-info mb-2">₹ 220.00</span></h5>
                    <img src="images/books/shortstory/thegrownup.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                    <h5>
                      <a href="single.php?username=<?php echo $username ?>&bookid=15" class="link-product-add-cart text-dark">The Grownup
                      </a>
                    </h5>
                    <p class="small text-muted font-italic">The Grownup, like others of Gillian Flynn's works, leaves us unprepared for the journey we are embarking on.
                    </p>
                    <ul class="list-inline small">
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                    </ul>
                  </div>
                  <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                    <form action="checkout.php" method="post">
                      <fieldset>
                        <input type="hidden" name="item_name" value="The Grownup" />
                        <input type="hidden" name="amount" value="220" />
                        <input type="hidden" name="uid" value=
                               <?php echo $uid?>>
                        <input type="hidden" name="username" value=
                               <?php echo $username?>>
                        <input type="hidden" name="bookid" value=15>
                        <input type="submit" name="submit" value="Buy Now" class="mb-3 btn-block btn btn-outline-success" />
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
              <!-- End Book Card -->
              <!-- Start Book Card -->
              <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                  <div class="card-body p-4">
                    <h5><span class="badge badge-pill badge-info mb-2">₹ 120.00</span></h5>
                    <img src="images/books/shortstory/getintrouble.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                    <h5>
                      <a href="single.php?username=<?php echo $username ?>&bookid=16" class="link-product-add-cart text-dark">Get In Trouble
                      </a>
                    </h5>
                    <p class="small text-muted font-italic">Get in Trouble is a collection of short stories by author Kelly Link. It contains nine short stories.
                    </p>
                    <ul class="list-inline small">
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star text-success">
                        </i>
                      </li>
                      <li class="list-inline-item m-0">
                        <i class="fa fa-star-half text-success">
                        </i>
                      </li>
                    </ul>
                  </div>
                  <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                    <form action="checkout.php" method="post">
                      <fieldset>
                        <input type="hidden" name="item_name" value="Get In Trouble" />
                        <input type="hidden" name="amount" value="120" />
                        <input type="hidden" name="uid" value=
                               <?php echo $uid?>>
                        <input type="hidden" name="username" value=
                               <?php echo $username?>>
                        <input type="hidden" name="bookid" value=16>
                        <input type="submit" name="submit" value="Buy Now" class="mb-3 btn-block btn btn-outline-success" />
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
              <!-- End Book Card -->
            </div>
            <!-- End Fourth Row [Prosucts]-->

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
      <!-- Third Row [Profiles]-->
      <h2 class="font-weight-bold mb-2">Famous Quotes
      </h2>
      <p class="font-italic text-muted mb-4">Some of the famous quotes of novelist, writer eassyist and renowned persons.
      </p>
      <div class="row pb-5 mb-4">
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <!-- Card-->
          <div class="card rounded shadow-sm border-0">
            <div class="card-body p-0">
              <div class="bg-primary px-5 py-4 text-center card-img-top">
                <img src="images/amour.png" alt="..." width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                <h5 class="text-white mb-0">– Louis L’Amour
                </h5>
                <p class="small text-white mb-0">Novelist
              </div>
              <div class="p-4 d-flex justify-content-center">
                <p>“Once you have read a book you care about, some part of it is always with you.”</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <!-- Card-->
          <div class="card rounded shadow-sm border-0">
            <div class="card-body p-0">
              <div class="bg-success px-5 py-4 text-center card-img-top">
                <img src="images/emerson.png" alt="..." width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                <h5 class="text-white mb-0">– R.W Emerson
                </h5>
                <p class="small text-white mb-0">Essayist
                </p>
              </div>
              <div class="p-4 d-flex justify-content-center">
                <p>“If we encounter a man of rare intellect, we should ask him what books he reads.”</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <!-- Card-->
          <div class="card rounded shadow-sm border-0">
            <div class="card-body p-0">
              <div class="bg-info px-5 py-4 text-center card-img-top">
                <img src="images/mark.png" alt="..." width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                <h5 class="text-white mb-0">– Mark Twain
                </h5>
                <p class="small text-white mb-0">Writer
                </p>
              </div>
              <div class="p-4 d-flex justify-content-center">
                <p>“The man who does not read good books is no better than the man who can’t.”</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <!-- Card-->
          <div class="card rounded shadow-sm border-0">
            <div class="card-body p-0">
              <div class="bg-warning px-5 py-4 text-center card-img-top">
                <img src="images/rourke.png" alt="..." width="100" class="rounded-circle mb-2 img-thumbnail d-block mx-auto">
                <h5 class="text-white mb-0">– P.J. O’Rourke
                </h5>
                <p class="small text-white mb-0">Journalist
                </p>
              </div>
              <div class="p-4 d-flex justify-content-center">
                <p class="bold">“Always read something that will make you look good if you die in the middle of it.”</p>
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

    <!-- First Row [Statistics]-->
    <div class="container py-5">
    <h2 class="font-weight-bold mb-2">Book Planet
    </h2>
    <p class="font-italic text-muted mb-4">“Sometimes, you read a book and it fills you with this weird evangelical zeal, and you become convinced that the shattered world will never be put back together unless and until all living humans read the book.”</p>
    <div class="row pb-5">
      <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <!-- Card-->
        <div class="card rounded shadow-sm border-0">
          <div class="card-body p-5">
            <i class="fa fa-dolly fa-4x mb-3 text-primary">
            </i>
            <h5>Free Shipping
            </h5>
            <p class="small pb-3 pt-1 text-muted font-italic">Enjoy free shipping on 90% of our online books across India.
            </p>
            <div class="progress rounded-pill">
              <div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 90%;" class="progress-bar rounded-pill">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <!-- Card -->
        <div class="card rounded shadow-sm border-0">
          <div class="card-body p-5">
            <i class="fa fa-thumbs-up fa-4x mb-3 text-success">
            </i>
            <h5>Trusted
            </h5>
            <p class="small pt-1 pb-3 text-muted font-italic">India's most trusted online book store from last 18 years.
            </p>
            <div class="progress rounded-pill">
              <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%;" class="progress-bar bg-success rounded-pill">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <!-- Card -->
        <div class="card rounded shadow-sm border-0">
          <div class="card-body p-5">
            <i class="fa fa-shipping-fast fa-4x mb-3 text-info">
            </i>
            <h5>Fast Delivery
            </h5>
            <p class="small pb-3 pt-1 text-muted font-italic">Enjoy 2 day delivery option on 80% of our books across India.
            </p>
            <div class="progress rounded-pill">
              <div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 80%;" class="progress-bar bg-info rounded-pill">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Card -->
      <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <div class="card rounded shadow-sm border-0">
          <div class="card-body p-5">
            <i class="fa fa-shield-alt fa-4x mb-3 text-warning">
            </i>
            <h5>Secured
            </h5>
            <p class="small pb-3 pt-1 text-muted font-italic">All the transactions on our server are highly secured.
            </p>
            <div class="progress rounded-pill">
              <div role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;" class="progress-bar bg-warning rounded-pill">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>











    <!-- footer third section -->
    <div class="w3l-middlefooter-sec">
      <div class="container py-md-5 py-sm-4 py-3">
        <div class="row footer-info w3-agileits-info">
          <!-- footer categories -->
          <div class="col-md-12 col-sm-12 footer-grids mt-md-0 mt-4">
            <h3 class="text-white font-weight-bold mb-3">Get In Touch With Us.
            </h3>
            <ul>
              <li class="mb-3">
                <i class="fas fa-map-marker">
                </i> Location: Sir M. Visvesvaraya Institute Of Technology, Bangalore &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <i class="fas fa-mobile">
                </i>Contact: 9982 xxx xxxx &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <i class="fas fa-phone">
                </i>Phone: 0746 xx xxxx &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <i class="fas fa-envelope-open">
                </i>
                <a href="mailto:example@mail.com">Email: admin@bookplanet.ml
                </a>
              </li>
            </ul>
          </div>
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
          <h5 class="font-weight-bold mb-3">Payment Methods :
          </h5>
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
      <a href="https://dntandan.ml"> Book Planet Team
      </a>
    </p>
  </div>
</div>
<!-- //copyright -->
<!-- js-files -->
<!-- jquery -->
<script src="js/jquery-2.2.3.min.js">
</script>
<!-- //jquery -->
<!-- nav smooth scroll -->
<script>
  $(document).ready(function() {
    $(".dropdown").hover(
      function() {
        $('.dropdown-menu', this).stop(true, true).slideDown("fast");
        $(this).toggleClass('open');
      }
      ,
      function() {
        $('.dropdown-menu', this).stop(true, true).slideUp("fast");
        $(this).toggleClass('open');
      }
    );
  }
                   );
</script>
<!-- //nav smooth scroll -->
<!-- popup modal (for location)-->
<script src="js/jquery.magnific-popup.js">
</script>
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
    }
                                            );
  }
                   );
</script>
<!-- //popup modal (for location)-->
<!-- cart-js -->
<script src="js/minicart.js">
</script>
<script>
  paypals.minicarts.render();
  //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js
  paypals.minicarts.cart.on('checkout', function(evt) {
    var items = this.items(),
        len = items.length,
        total = 0,
        i;
    // Count the number of each item in the cart
    for (i = 0; i < len; i++) {
      total += items[i].get('quantity');
    }
  }
                           );
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
<script src="js/scroll.js">
</script>
<!-- //scroll seller -->
<!-- smoothscroll -->
<script src="js/SmoothScroll.min.js">
</script>
<!-- //smoothscroll -->
<!-- start-smooth-scrolling -->
<script src="js/move-top.js">
</script>
<script src="js/easing.js">
</script>
<script>
  jQuery(document).ready(function($) {
    $(".scroll").click(function(event) {
      event.preventDefault();
      $('html,body').animate({
        scrollTop: $(this.hash).offset().top
      }
                             , 1000);
    }
                      );
  }
                        );
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
    }
               );
  }
                   );
</script>
<!-- //smooth-scrolling-of-move-up -->
<!-- for bootstrap working -->
<script src="js/bootstrap.js">
</script>
<!-- //for bootstrap working -->
<!-- //js-files -->
</body>
</html>
