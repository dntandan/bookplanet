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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
    <link rel="stylesheet" href="css/fontawesome-all.css">



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
              <li class="nav-item" > <a href="index.html" class="nav-link active" style="color:#e7475e!important;"><i class="fas fa-sign-in-alt mr-2">
              </i>Welcome,
              <?php echo $username ?></a></li>
          </ul><a href="contact.php"  class="btn btn-primary navbar-btn ml-0 ml-lg-3">Contact </a>
        </ul><a href="index.php"  class="btn btn-primary navbar-btn ml-0 ml-lg-3">Logout </a>
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
          <p  class="font-italic text-muted mb-0">An awesome collection of books with variant content from all over the planet.
          </p>
        </header>
        <!-- Start First Row [Books]-->
        <h2 id="poetry" class="font-weight-bold mb-2">Poetry
        </h2>
        <p class="font-italic text-muted mb-4">Read literary work in which the expression of feelings and ideas is given intensity by the use of distinctive style and rhythm; poems collectively or as a genre of literature.
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
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star-half text-success-c">
                    </i>
                  </li>
                </ul>
              </div>
              <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                <form action="checkout.php?username=<?php echo $username ?>&bookid=1" method="post">
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
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star-half text-success-c">
                    </i>
                  </li>
                </ul>
              </div>
              <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                <form action="checkout.php?username=<?php echo $username ?>&bookid=2" method="post">
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
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star-half text-success-c">
                    </i>
                  </li>
                </ul>
              </div>
              <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                <form action="checkout.php?username=<?php echo $username ?>&bookid=3" method="post">
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
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star-half text-success-c">
                    </i>
                  </li>
                </ul>
              </div>
              <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                <form action="checkout.php?username=<?php echo $username ?>&bookid=4" method="post">
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
        <h2 id="thriller" class="font-weight-bold mb-2">Thriller
        </h2>
        <p class="font-italic text-muted mb-4">Read a novel, play, or film with an exciting plot, typically involving crime or espionage.
        </p>
        <div class="row pb-5 mb-4">
          <!-- Start Book Card -->
          <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card rounded shadow-sm border-0">
              <div class="card-body p-4">
                <h5><span class="badge badge-pill badge-info mb-2">₹ 240.00</span></h5>
                <img src="images/books/thriller/bluemoon.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                <h5>
                  <a href="single.php?username=<?php echo $username ?>&bookid=5" class="link-product-add-cart text-dark">Blue Moon
                  </a>
                </h5>
                <p class="small text-muted font-italic">By : Lee Child
                </p>
                <ul class="list-inline small">
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star-half text-success-c">
                    </i>
                  </li>
                </ul>
              </div>
              <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                <form action="checkout.php?username=<?php echo $username ?>&bookid=5" method="post">
                  <fieldset>
                    <input type="hidden" name="item_name" value="Blue Moon" />
                    <input type="hidden" name="amount" value="240" />
                    <input type="hidden" name="uid" value=
                           <?php echo $uid?>>
                    <input type="hidden" name="username" value=
                           <?php echo $username?>>
                    <input type="hidden" name="bookid" value=5>
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
                <img src="images/books/thriller/thefuries.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                <h5>
                  <a href="single.php?username=<?php echo $username ?>&bookid=6" class="link-product-add-cart text-dark">The Furies
                  </a>
                </h5>
                <p class="small text-muted font-italic">By : Katie Lowe
                </p>
                <ul class="list-inline small">
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star-half text-success-c">
                    </i>
                  </li>
                </ul>
              </div>
              <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                <form action="checkout.php?username=<?php echo $username ?>&bookid=6" method="post">
                  <fieldset>
                    <input type="hidden" name="item_name" value="The Furies" />
                    <input type="hidden" name="amount" value="180" />
                    <input type="hidden" name="uid" value=
                           <?php echo $uid?>>
                    <input type="hidden" name="username" value=
                           <?php echo $username?>>
                    <input type="hidden" name="bookid" value=6>
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
                <h5><span class="badge badge-pill badge-info mb-2">₹ 360.00</span></h5>
                <img src="images/books/thriller/ghoster.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                <h5>
                  <a href="single.php?username=<?php echo $username ?>&bookid=7" class="link-product-add-cart text-dark">Ghoster
                  </a>
                </h5>
                <p class="small text-muted font-italic">By : Jason Arnoop
                </p>
                <ul class="list-inline small">
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star-half text-success-c">
                    </i>
                  </li>
                </ul>
              </div>
              <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                <form action="checkout.php?username=<?php echo $username ?>&bookid=7" method="post">
                  <fieldset>
                    <input type="hidden" name="item_name" value="Ghoster" />
                    <input type="hidden" name="amount" value="360" />
                    <input type="hidden" name="uid" value=
                           <?php echo $uid?>>
                    <input type="hidden" name="username" value=
                           <?php echo $username?>>
                    <input type="hidden" name="bookid" value=7>
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
                <h5><span class="badge badge-pill badge-info mb-2">₹ 265.00</span></h5>
                <img src="images/books/thriller/tenthgirl.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                <h5>
                  <a href="single.php?username=<?php echo $username ?>&bookid=8" class="link-product-add-cart text-dark">The Tenth Girl
                  </a>
                </h5>
                <p class="small text-muted font-italic">By : Sara Faring
                </p>
                <ul class="list-inline small">
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star-half text-success-c">
                    </i>
                  </li>
                </ul>
              </div>
              <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                <form action="checkout.php?username=<?php echo $username ?>&bookid=8" method="post">
                  <fieldset>
                    <input type="hidden" name="item_name" value="The Tenth Girl" />
                    <input type="hidden" name="amount" value="265" />
                    <input type="hidden" name="uid" value=
                           <?php echo $uid?>>
                    <input type="hidden" name="username" value=
                           <?php echo $username?>>
                    <input type="hidden" name="bookid" value=8>
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
        <h2 id="history" class="font-weight-bold mb-2">History
        </h2>
        <p class="font-italic text-muted mb-4">Historical novel, a novel that has as its setting a period of history and that attempts to convey the spirit, manners, and social conditions of a past age with realistic detail and fidelity (which is in some cases only apparent fidelity) to historical fact.
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
                <p class="small text-muted font-italic">By : Yuval Noah Harari
                </p>
                <ul class="list-inline small">
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                </ul>
              </div>
              <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                <form action="checkout.php?username=<?php echo $username ?>&bookid=9" method="post">
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
                <p class="small text-muted font-italic">By : Christopher Edmund
                <ul class="list-inline small">
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star-half text-success-c">
                    </i>
                  </li>
                </ul>
              </div>
              <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                <form action="checkout.php?username=<?php echo $username ?>&bookid=10" method="post">
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
                <p class="small text-muted font-italic">By : Edmund Morris
                </p>
                <ul class="list-inline small">
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                </ul>
              </div>
              <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                <form action="checkout.php?username=<?php echo $username ?>&bookid=11" method="post">
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
                <p class="small text-muted font-italic">By : Richard Bell
                </p>
                <ul class="list-inline small">
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                </ul>
              </div>
              <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                <form action="checkout.php?username=<?php echo $username ?>&bookid=12" method="post">
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
        <h2 id="shortstory" class="font-weight-bold mb-2">Short Story
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
                <p class="small text-muted font-italic">By : Alice Munro
                </p>
                <ul class="list-inline small">
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star-half text-success-c">
                    </i>
                  </li>
                </ul>
              </div>
              <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                <form action="checkout.php?username=<?php echo $username ?>&bookid=13" method="post">
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
                <p class="small text-muted font-italic">By : Neil Gaiman
                </p>
                <ul class="list-inline small">
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                </ul>
              </div>
              <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                <form action="checkout.php?username=<?php echo $username ?>&bookid=14" method="post">
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
                <p class="small text-muted font-italic">By : Gillian Flyn
                <ul class="list-inline small">
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                </ul>
              </div>
              <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                <form action="checkout.php?username=<?php echo $username ?>&bookid=15" method="post">
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
                <p class="small text-muted font-italic">By : Kerry Link
                </p>
                <ul class="list-inline small">
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star text-success-c">
                    </i>
                  </li>
                  <li class="list-inline-item m-0">
                    <i class="fa fa-star-half text-success-c">
                    </i>
                  </li>
                </ul>
              </div>
              <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                <form action="checkout.php?username=<?php echo $username ?>&bookid=16" method="post">
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

    <!-- CLients Section-->
    <section class="bg-gray">
      <div class="container">  <!-- //top products -->
        <!-- middle section -->
        <div class="join-w3l1">

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
      </div>
    </section>



    <!-- Integrations Section-->
    <section>
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
    </section>




    <!-- Divider Section-->
    <section class="bg-primary text-white">
      <div style="margin-left:125px;">
          <!-- footer categories -->
          <div class="col-md-12 col-sm-12 footer-grids ">
            <h3 class="text-white font-weight-bold mb-3" style="margin-left:40px;">Get In Touch With Us.
            </h3>
            <ul style="list-style-type: none;">
              <li class="mb-3">
                <i class="fas fa-map-marker">
                </i>&nbsp;&nbsp; Location: Sir M. Visvesvaraya Institute Of Technology, Bangalore &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <i class="fas fa-mobile">
                </i>&nbsp;&nbsp;Contact: 9982 xxx xxxx &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <i class="fas fa-phone">
                </i>&nbsp;&nbsp;Phone: 0746 xx xxxx &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <i class="fas fa-envelope-open">
                </i>
                <a style="color:white!important;"href="mailto:example@mail.com">&nbsp;&nbsp;Email: admin@bookplanet.ml
                </a>
              </li>
            </ul>
          </div>
          <!-- //social icons -->

      </div>

    </section>




    <!-- How it works section-->
    <section>
      <div class="container">
        <div class="text-center">
          <h2 class="mb-4">Payment Methods</h2>
          <div class="row">
            <div class="col-lg-9 mx-auto">
              <div class="row bg-white p-0 h-100">
                <!-- lg circle buttons-->
                <div class="col"><img src="images/pay1.png" alt=""></div>
                <div class="col"><img src="images/pay2.png" alt=""></div>
                <div class="col"><img src="images/pay3.png" alt=""></div>
                <div class="col"><img src="images/pay4.png" alt=""></div>
                <div class="col"><img src="images/pay5.png" alt=""></div>
                <div class="col"><img src="images/pay6.png" alt=""></div>
                <div class="col"><img src="images/pay7.png" alt=""></div>
                <div class="col"><img src="images/pay8.png" alt=""></div>
                <div class="col"><img src="images/pay9.png" alt=""></div>
              </div>
            </div>
        </div>
      </div>
    </section>


    <footer class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 mb-5 mb-lg-0">
            <!-- <div class="footer-logo"><img src="images/bp-globe.png" alt="..." class="img-fluid"></div> -->
          </div>
          <div class="col-lg-3 mb-5 mb-lg-0">
            <h5 class="footer-heading">Site pages</h5>
            <ul class="list-unstyled">
              <li> <a href="bookplanet.php" class="footer-link">Home</a></li>
              <li> <a href="contact.php" class="footer-link">Contact</a></li>
              <li> <a href="index.php" class="footer-link">Logout</a></li>
            </ul>
          </div>
          <div class="col-lg-3 mb-5 mb-lg-0">
            <h5 class="footer-heading">Section</h5>
            <ul class="list-unstyled">
              <li> <a href="#poetry" class="footer-link">Poetry</a></li>
              <li> <a href="#thriller" class="footer-link">Thriller</a></li>
              <li> <a href="#history" class="footer-link">History</a></li>
              <li> <a href="#shortstory" class="footer-link">Short Story</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
            <h5 class="footer-heading">Social</h5>
            <ul class="list-unstyled">
              <li> <a  class="footer-link">Facebook</a></li>
              <li> <a  class="footer-link">Twitter</a></li>
              <li> <a  class="footer-link">Instagram</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="copyrights">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
              <p class="copyrights-text mb-3 mb-lg-0">&copy; Book Planet <span id="year"></span>. All rights reserved. </p>
              <!-- If you want to remove the backlink, please purchase a license for this template @ https://bootstrapious.com/attribution-free-license. Big thanks!-->

            </div>
            <div class="col-lg-6 text-center text-lg-right">
              <ul class="list-inline social mb-0">
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-facebook"></i></a><a href="#" class="social-link"><i class="fab fa-twitter"></i></a><a href="#" class="social-link"><i class="fab fa-instagram"></i></a></li>
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
    <script>document.getElementById("year").innerHTML = new Date().getFullYear();</script>
  </body>
</html>
