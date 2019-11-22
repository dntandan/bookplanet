<?php
if(isset($_POST))
{
  $bookid= $_POST['bookid'];
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $gender=$_POST['gender'];
  $number=$_POST['number'];
  $email=$_POST['email'];
  $add1=$_POST['add1'];
  $add2=$_POST['add2'];
  $city=$_POST['city'];
  $state=$_POST['state'];
  $pin=$_POST['pin'];

  $uid=$_POST['uid'];

  $username=$_POST['username'];


  $bookname=$_POST['bookname'];

  $amount=$_POST['amount'];
  $bookname=myUrlEncode($bookname);
  $add1=myUrlEncode($add1);

  $add2=myUrlEncode($add2);

}
?>

<?php
function myUrlEncode($string) {
    $entities = array('%21', '%2A', '%27', '%28', '%29', '%3B', '%3A', '%40', '%26', '%3D', '%2B', '%24', '%2C', '%2F', '%3F', '%25', '%23', '%5B', '%5D');
    $replacements = array('!', '*', "'", "(", ")", ";", ":", "@", "&", "=", " ", "$", ",", "/", "?", "%", "#", "[", "]");
    return str_replace($entities, $replacements, urlencode($string));
}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Payment | Book Planet</title>
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
          <h1 class="display-4 font-weight-bold">Payment Process
          </h1>
          <p  class="font-italic text-muted mb-0">Fill all the details regarding cards carefully befor procedding further.
          </p>
        </header>



<!-- Start Payment Details-->

<div class="px-4 px-lg-0">
  <div class="container">
    <div class="row">
        <div class="col-lg-7 mx-auto">
            <div class="bg-white rounded-lg shadow-sm p-5">
                <!-- Credit card form tabs -->
                <ul role="tablist" class="nav bg-light nav-pills rounded-pill nav-fill mb-3">
                    <li class="nav-item">
                        <a data-toggle="pill" href="#nav-tab-card" class="nav-link active rounded-pill">
                            <i class="fa fa-credit-card"></i> Card Payment
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="pill" href="#nav-tab-paypal" class="nav-link rounded-pill">
                            <i class="fab fa-paypal"></i> Paypal
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="pill" href="#nav-tab-bank" class="nav-link rounded-pill">
                            <i class="fas fa-university"></i> Bank Transfer
                        </a>
                    </li>
                </ul>
                <!-- End -->

                <!-- Credit card form content -->
                <div class="tab-content">

                    <!-- credit card info-->
                    <div id="nav-tab-card" class="tab-pane fade show active">
                        <form role="form" action="orderplaced.php" method="post">
                            <div class="form-group input-group mb-4 border rounded-pill p-2">
                                <input type="text" name="username" placeholder="Full Name (As On Card)" required class="form-control border-0">
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group mb-4 border rounded-pill p-2">
                                    <input minlength="16" size="10" maxlength="16" type="text" name="cardNumber" placeholder="Your Card Number" class="form-control border-0" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text text-muted">
                                                <i class="fab fa-cc-visa mx-1"></i>
                                                <i class="fab fa-cc-amex mx-1"></i>
                                                <i class="fab fa-cc-mastercard mx-1"></i>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <div class="input-group input-group mb-4 border rounded-pill p-2">
                                            <input minlength="2" size="10" maxlength="2" type="text" placeholder="MM" name="" class="form-control border-0" required>
                                            <input minlength="2" size="10" maxlength="2" type="text" placeholder="YY" name="" class="form-control border-0" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group input-group mb-4 border rounded-pill p-2">
                                      <input minlength="3" size="10" maxlength="3" type="text" placeholder="CVV"required class="form-control border-0">
                                    </div>
                                </div>

                            </div>
                            <input type="hidden" name="firstname" value=<?php echo $firstname ?>>

                            <input type="hidden" name="lastname" value=<?php echo $lastname?>>

                            <input type="hidden" name="bookid" value=<?php echo $bookid ?>>

                            <input type="hidden" name="gender" value=<?php echo $gender ?>>

                            <input type="hidden" name="number" value=<?php echo $number ?>>

                            <input type="hidden" name="email" value=<?php echo $email ?>>

                            <input type="hidden" name="add1" value=<?php echo $add1 ?>>

                            <input type="hidden" name="add2" value=<?php echo $add2 ?>>

                            <input type="hidden" name="city" value=<?php echo $city ?>>

                            <input type="hidden" name="state" value=<?php echo $state ?>>

                            <input type="hidden" name="pin" value=<?php echo $pin?>>

                            <input type="hidden" name="bookname" value=<?php echo $bookname?>>

                            <input type="hidden" name="amount" value=<?php echo $amount?>>

                            <input type="hidden" name="username" value=<?php echo $username?>>

                            <input type="hidden" name="uid" value=<?php echo $uid?>>
                            <button type="submit" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm"> Confirm </button>
                        </form>
                    </div>
                    <!-- End -->

                    <!-- Paypal info -->
                    <div id="nav-tab-paypal" class="tab-pane fade">
                        <p>Paypal is easiest way to pay online</p>
                        <p>
                            <button type="button" class="btn btn-primary rounded-pill"><i class="fab fa-paypal mr-2"></i> Log into my Paypal</button>
                        </p>
                        <p class="text-muted"><center>PayPal Holdings Inc trading as PayPal, is an American company operating a worldwide online payments system that supports online money transfers and serves as an electronic alternative to traditional paper methods like checks and money orders.</center>
                        </p>
                    </div>
                    <!-- End -->

                    <!-- bank transfer info -->
                    <div id="nav-tab-bank" class="tab-pane fade">
                        <h6>Bank account details</h6>
                        <p class="text-muted">The World Bank is an international financial institution that provides loans and grants to the governments of poorer countries for the purpose of pursuing capital projects.
                        </p>

                        <dl>
                            <dt>Bank</dt>
                            <dd> THE WORLD BANK</dd>
                        </dl>
                        <dl>
                            <dt>Account number</dt>
                            <dd>7775877975</dd>
                        </dl>
                        <dl>
                            <dt>IBAN</dt>
                            <dd>CZ7775877975656</dd>
                        </dl>
                    </div>
                    <!-- End -->
                </div>
                <!-- End -->

            </div>
        </div>
    </div>
</div>

</div>

<!-- End Payment Details-->


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
              <i class="fa fa-dolly fa-2x mb-3 text-primary">
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
              <i class="fa fa-thumbs-up fa-2x mb-3 text-success">
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
              <i class="fa fa-shipping-fast fa-2x mb-3 text-info">
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
              <i class="fa fa-shield-alt fa-2x mb-3 text-warning">
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
