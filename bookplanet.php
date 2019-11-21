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
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home | Book Planet</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="dashboard/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="dashboard/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Poppins-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,600">
    <!-- Lightbox-->
    <link rel="stylesheet" href="dashboard/vendor/lightbox2/css/lightbox.css">
    <!-- Custom font icons-->
    <link rel="stylesheet" href="dashboard/css/fontastic.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="dashboard/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="dashboard/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="dashboard/img/favicon.png">


    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="dashboard/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="dashboard/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container"><a href="bookplanet.php" class="navbar-brand"><img src="images/logo-bookplanet.png" alt="" class="img-fluid"></a>
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">Menu<i class="fa fa-bars ml-2"></i></button>
          <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <!-- Link-->
              <li class="nav-item"> <a href="index.html" class="nav-link active"><i class="fas fa-sign-in-alt mr-2">
              </i>Welcome,
              <?php echo $username ?></a></li>
          </ul><a href="contact.php" data-toggle="modal" data-target="#login" class="btn btn-primary navbar-btn ml-0 ml-lg-3">Contact </a>
        </ul><a href="index.php" data-toggle="modal" data-target="#login" class="btn btn-primary navbar-btn ml-0 ml-lg-3">Logout </a>
          </div>
        </div>
      </nav>
    </header>
    <!-- Hero Section-->
    <section class="hero">
      <div class="container mb-5">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <h1 class="hero-heading mb-0">Online Book <br> Store</h1>
            <div class="row">
              <div class="col-lg-10">
                <p class="lead text-muted mt-4 mb-4">Shop books online and get it delivered across the planet. No hidden charges.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-7"><img src="images/bp-globe.png" alt="..." class="hero-image img-fluid d-none d-lg-block"></div>
        </div>
      </div>
    </section>



    <!-- bOOKS list -->
    <!-- top Products -->
    <div class="ads-grid py-sm-5 py-4" style="margin-top:-6%">
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
                <p class="small text-muted font-italic">By : Sharon Olds.</p>
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
                    <input type="submit" name="submit" value="Buy Now" class="mb-3 ml-5 btn btn-primary navbar-btn" />
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
                <p class="small text-muted font-italic">By : Lang Leav.</p>
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
                    <input type="submit" name="submit" value="Buy Now" class="mb-3 ml-5 btn btn-primary navbar-btn" />
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
                <p class="small text-muted font-italic">By : Michelle Stradford.</p>
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
                    <input type="submit" name="submit" value="Buy Now" class="mb-3 ml-5 btn btn-primary navbar-btn" style="margin-top:9px;" />
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

                <p class="small text-muted font-italic">By : Xandria Phillips.</p>
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
                    <input type="submit" name="submit" value="Buy Now" class="mb-3 ml-5 btn btn-primary navbar-btn" style="margin-top:-8px;" />
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
                    <input type="submit" name="submit" value="Buy Now" class="mb-3 ml-5 btn btn-primary navbar-btn" />
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
                    <input type="submit" name="submit" value="Buy Now" class="mb-3 ml-5 btn btn-primary navbar-btn" />
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
                    <input type="submit" name="submit" value="Buy Now" class="mb-3 ml-5 btn btn-primary navbar-btn" />
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
                    <input type="submit" name="submit" value="Buy Now" class="mb-3 ml-5 btn btn-primary navbar-btn" />
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
                    <input type="submit" name="submit" value="Buy Now" class="mb-3 ml-5 btn btn-primary navbar-btn" />
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
                    <input type="submit" name="submit" value="Buy Now" class="mb-3 ml-5 btn btn-primary navbar-btn" />
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
                    <input type="submit" name="submit" value="Buy Now" class="mb-3 ml-5 btn btn-primary navbar-btn" />
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
                    <input type="submit" name="submit" value="Buy Now" class="mb-3 ml-5 btn btn-primary navbar-btn" />
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
                    <input type="submit" name="submit" value="Buy Now" class="mb-3 ml-5 btn btn-primary navbar-btn" />
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
                    <input type="submit" name="submit" value="Buy Now" class="mb-3 ml-5 btn btn-primary navbar-btn" />
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
                    <input type="submit" name="submit" value="Buy Now" class="mb-3 ml-5 btn btn-primary navbar-btn" />
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
                    <input type="submit" name="submit" value="Buy Now" class="mb-3 ml-5 btn btn-primary navbar-btn" />
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


    <!-- Intro Section-->
    <section>
      <div class="container">
        <div class="text-center">
          <h2>Track projects from start to finish </h2>
          <p class="lead text-muted mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p><a href="#" class="btn btn-primary">Learn More</a>
        </div>
        <div class="row">
          <div class="col-lg-7 mx-auto mt-5"><img src="dashboard/img/illustration-1.svg" alt="..." class="intro-image img-fluid"></div>
        </div>
      </div>
    </section>
    <!-- Divider Section-->
    <section class="bg-primary text-white">
      <div class="container">
        <div class="text-center">
          <h2>Do great things together</h2>
          <div class="row">
            <div class="col-lg-9 mx-auto">
              <p class="lead text-white mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor. eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
          </div><a href="#" class="btn btn-outline-light">Learn More</a>
        </div>
      </div>
    </section>
    <!-- Integrations Section-->
    <section>
      <div class="container">
        <div class="text-center">
          <h2>Integrations</h2>
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <p class="lead text-muted mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod. eiusmod tempor incididunt ut labore.</p>
            </div>
          </div>
        </div>
        <div class="integrations mt-5">
          <div class="row">
            <div class="col-lg-4">
              <div class="box text-center">
                <div class="icon d-flex align-items-end"><img src="dashboard/img/monitor.svg" alt="..." class="img-fluid"></div>
                <h3 class="h4">Web desgin</h3>
                <p class="text-small font-weight-light">Lorem Ipsum has been the industry's standard dummy text ever.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="box text-center">
                <div class="icon d-flex align-items-end"><img src="dashboard/img/target.svg" alt="..." class="img-fluid"></div>
                <h3 class="h4">Print</h3>
                <p class="text-small font-weight-light">Lorem Ipsum has been the industry's standard dummy text ever.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="box text-center">
                <div class="icon d-flex align-items-end"><img src="dashboard/img/chat.svg" alt="..." class="img-fluid"></div>
                <h3 class="h4">SEO and SEM</h3>
                <p class="text-small font-weight-light">Lorem Ipsum has been the industry's standard dummy text ever.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="box text-center">
                <div class="icon d-flex align-items-end"><img src="dashboard/img/idea.svg" alt="..." class="img-fluid"></div>
                <h3 class="h4">Consulting</h3>
                <p class="text-small font-weight-light">Lorem Ipsum has been the industry's standard dummy text ever.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="box text-center">
                <div class="icon d-flex align-items-end"><img src="dashboard/img/coffee-cup.svg" alt="..." class="img-fluid"></div>
                <h3 class="h4">Email Marketing</h3>
                <p class="text-small font-weight-light">Lorem Ipsum has been the industry's standard dummy text ever.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="box text-center">
                <div class="icon d-flex align-items-end"><img src="dashboard/img/pen.svg" alt="..." class="img-fluid"></div>
                <h3 class="h4">UX &amp; UI</h3>
                <p class="text-small font-weight-light">Lorem Ipsum has been the industry's standard dummy text ever.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- CLients Section-->
    <section class="bg-gray">
      <div class="container">
        <div class="text-center">
          <h2>Trusted by teams everywhere</h2>
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <p class="lead text-muted mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. sed do eiusmod tempor incididunt..</p>
            </div>
          </div>
        </div>
        <div class="clients mt-5">
          <div class="row">
            <div class="col-lg-2"><img src="dashboard/img/client-1.svg" alt="" class="client-image img-fluid"></div>
            <div class="col-lg-2"><img src="dashboard/img/client-2.svg" alt="" class="client-image img-fluid"></div>
            <div class="col-lg-2"><img src="dashboard/img/client-3.svg" alt="" class="client-image img-fluid"></div>
            <div class="col-lg-2"><img src="dashboard/img/client-4.svg" alt="" class="client-image img-fluid"></div>
            <div class="col-lg-2"><img src="dashboard/img/client-5.svg" alt="" class="client-image img-fluid"></div>
            <div class="col-lg-2"><img src="dashboard/img/client-6.svg" alt="" class="client-image img-fluid"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- How it works section-->
    <section>
      <div class="container">
        <div class="text-center">
          <h2>Curious how Appton works for <br>large organizations?</h2>
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <p class="lead text-muted mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod. Eiusmod tempor incididunt ut labore.</p>
            </div>
          </div><a href="#" class="btn btn-primary mt-4">Get Started</a>
        </div>
      </div>
    </section>
    <!-- How it works Section-->
    <section class="bg-gray">
      <div class="container text-center text-lg-left">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <h2 class="divider-heading">Curious how Appton <br>works for large</h2>
            <div class="row">
              <div class="col-lg-10">
                <p class="lead divider-subtitle mt-2 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing. Vitae animi mollitia cumque sunt soluta. consectetur adipisicing.</p>
              </div>
            </div><a href="#" class="btn btn-primary">Learn More</a>
          </div>
          <div class="col-lg-5 mt-5 mt-lg-0"><img src="dashboard/img/illustration-2.svg" alt="" class="divider-image img-fluid"></div>
        </div>
      </div>
    </section>
    <!-- Portfolio Section-->
    <section class="pb-0">
      <div class="container">
        <div class="text-center">
          <h2>Portfolio</h2>
          <p class="lead text-muted mt-2">You can make also a portfolio or image gallery.</p>
        </div>
        <div class="portfolio mt-5">
          <div class="row">
            <div class="col-lg-4 p-0"><a href="dashboard/img/portfolio-1.jpg" data-lightbox="image-1" data-title="Some footer information" class="portfolio-item"><img src="dashboard/img/portfolio-1.jpg" alt="image" class="img-fluid"></a></div>
            <div class="col-lg-4 p-0"><a href="dashboard/img/portfolio-2.jpg" data-lightbox="image-1" data-title="Some footer information" class="portfolio-item"><img src="dashboard/img/portfolio-2.jpg" alt="image" class="img-fluid"></a></div>
            <div class="col-lg-4 p-0"><a href="dashboard/img/portfolio-3.jpg" data-lightbox="image-1" data-title="Some footer information" class="portfolio-item"><img src="dashboard/img/portfolio-3.jpg" alt="image" class="img-fluid"></a></div>
            <div class="col-lg-4 p-0"><a href="dashboard/img/portfolio-4.jpg" data-lightbox="image-1" data-title="Some footer information" class="portfolio-item"><img src="dashboard/img/portfolio-4.jpg" alt="image" class="img-fluid"></a></div>
            <div class="col-lg-4 p-0"><a href="dashboard/img/portfolio-5.jpg" data-lightbox="image-1" data-title="Some footer information" class="portfolio-item"><img src="dashboard/img/portfolio-5.jpg" alt="image" class="img-fluid"></a></div>
            <div class="col-lg-4 p-0"><a href="dashboard/img/portfolio-6.jpg" data-lightbox="image-1" data-title="Some footer information" class="portfolio-item"><img src="dashboard/img/portfolio-6.jpg" alt="image" class="img-fluid"></a></div>
          </div>
        </div>
      </div>
    </section>
    <!-- Get Started Section-->
    <section class="get-started">
      <div class="container text-center">
        <h2>Get started today</h2>
        <div class="row">
          <div class="col-lg-8 m-auto">
            <p class="lead text-muted mt-2">If you can make a list or send an email, you can use Appton. Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mx-auto">
            <form action="#" class="subscription-form mt-5">
              <div class="form-group">
                <input type="email" name="email" placeholder="Name@company.com" class="form-control">
                <button type="submit" class="btn btn-primary">Get Started</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 mb-5 mb-lg-0">
            <div class="footer-logo"><img src="images/bp-globe.png" alt="..." class="img-fluid"></div>
          </div>
          <div class="col-lg-3 mb-5 mb-lg-0">
            <h5 class="footer-heading">Site pages</h5>
            <ul class="list-unstyled">
              <li> <a href="index.html" class="footer-link">Home</a></li>
              <li> <a href="faq.html" class="footer-link">FAQ</a></li>
              <li> <a href="contact.html" class="footer-link">Contact</a></li>
              <li> <a href="text.html" class="footer-link">Text Page</a></li>
            </ul>
          </div>
          <div class="col-lg-3 mb-5 mb-lg-0">
            <h5 class="footer-heading">Product</h5>
            <ul class="list-unstyled">
              <li> <a href="#" class="footer-link">Why Appton?</a></li>
              <li> <a href="#" class="footer-link">Enterprise</a></li>
              <li> <a href="#" class="footer-link">Blog</a></li>
              <li> <a href="#" class="footer-link">Pricing</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
            <h5 class="footer-heading">Resources</h5>
            <ul class="list-unstyled">
              <li> <a href="#" class="footer-link">Download</a></li>
              <li> <a href="#" class="footer-link">Help Center</a></li>
              <li> <a href="#" class="footer-link">Guides</a></li>
              <li> <a href="#" class="footer-link">Partners</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="copyrights">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
              <p class="copyrights-text mb-3 mb-lg-0">&copy; All rights reserved. Appton.co. Design by <a href="https://bootstrapious.com/p/big-bootstrap-tutorial" class="external footer-link">Bootstrapious </a></p>
              <!-- If you want to remove the backlink, please purchase a license for this template @ https://bootstrapious.com/attribution-free-license. Big thanks!-->

            </div>
            <div class="col-lg-6 text-center text-lg-right">
              <ul class="list-inline social mb-0">
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook"></i></a><a href="#" class="social-link"><i class="fa fa-twitter"></i></a><a href="#" class="social-link"><i class="fa fa-youtube-play"></i></a><a href="#" class="social-link"><i class="fa fa-vimeo"></i></a><a href="#" class="social-link"><i class="fa fa-pinterest"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
    <script src="dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="dashboard/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="dashboard/vendor/lightbox2/js/lightbox.js"></script>
    <script src="dashboard/js/front.js"></script>
  </body>
</html>
