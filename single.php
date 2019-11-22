<?php
	$username=$_GET['username'];
	$bookid=$_GET['bookid'];
	$con=mysqli_connect("localhost","root","","shop");
   		$fetchUID="select * from book where book_id='$bookid'";
   		$res=$con->query($fetchUID);
   		if($res->num_rows>0)
   		{
   			while($row=$res->fetch_assoc())
   			{
   				$bname=$row["book_name"];
   				$bookdesc=$row["book_desc"];
   				$bookprice=$row["book_price"];
   				$img=$row['book_img'];
   				$count=$row['book_count'];
					$isbn=$row['book_isbn'];
					$publication=$row['book_publ'];
   			}
   		}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Description | Book Planet</title>
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
          <h1 class="display-4 font-weight-bold">Book Detail
          </h1>
          <p  class="font-italic text-muted mb-0">Find complete detail about the <?php echo $bname ?> by <?php echo $publication ?> .
          </p>
        </header>

<!-- Start Book Details-->
	<div class="container">
	 <div class="card">
			<div class="row">
				 <aside class="col-sm-5 border-right">
						<article class="gallery-wrap">
							 <div class="img-big-wrap">
									<div> <img src='<?php echo $img?>' style="height: 700px;margin-top:35px;max-width: 445px;width:auto;"></div>
							 </div>

							 <!-- slider-nav.// -->
						</article>
						<!-- gallery-wrap .end// -->
				 </aside>
				 <aside class="col-sm-7">
						<article class="card-body p-5">
							 <h3 class="title mb-3"><?php echo $bname ?></h3>
							 <p class="price-detail-wrap">
									<span class="price h3 text-warning">
									<span class="currency">INR ₹</span><span class="num"><?php echo $bookprice ?></span>
									</span>
									<span>.00</span>
							 </p>
							 <!-- price-detail-wrap .// -->
							 <dl class="item-property">
									<dt>Description</dt>
									<dd>
										 <p><?php echo $bookdesc ?>
										 </p>
									</dd>
							 </dl>
							 <dl class="param param-feature">
									<dt>ISBN#</dt>
									<dd><?php echo $isbn ?></dd>
							 </dl>
							 <!-- item-property-hor .// -->
							 <dl class="param param-feature">
									<dt>Publication</dt>
									<dd><?php echo $publication ?></dd>
							 </dl>

							 <!-- item-property-hor .// -->
							 <hr>
							 <div class="row">
									<div class="col-sm-5">
										 <dl class="param param-inline">
												<dt>In Stock: </dt>
												<dd>
													 <p><?php echo $count ?></p>
												</dd>
										 </dl>
										 <!-- item-property .// -->
									</div>
									<!-- col.// -->

							 </div>
							 <!-- row.// -->
						</article>
						<!-- card-body.// -->
				 </aside>
				 <!-- col.// -->
			</div>
			<!-- row.// -->
	 </div>
	 <!-- card.// -->
	</div>
	<!--container.//-->

<!-- End Book Details-->


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
