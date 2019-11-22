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



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Checkout | Book Planet</title>
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
          <h1 class="display-4 font-weight-bold">Checkout Detail
          </h1>
          <p  class="font-italic text-muted mb-0">Fill all the details carefully befor procedding further.
          </p>
        </header>



<!-- Start Checkout Details-->

<div class="px-4 px-lg-0">

<div class="pb-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

        <!-- Shopping cart table -->
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col" class="border-0 bg-light">
                  <div class="p-2 px-3 text-uppercase">Product</div>
                </th>
                <th scope="col" class="border-0 bg-light">
                  <div class="py-2 text-uppercase">Price</div>
                </th>
                <th scope="col" class="border-0 bg-light">
                  <div class="py-2 text-uppercase">Quantity</div>
                </th>
                <th scope="col" class="border-0 bg-light">
                  <div class="py-2 text-uppercase">Stock Status</div>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="border-0">
                  <div class="p-2">
                    <img src='<?php echo $img ?>' alt="" width="70" class="img-fluid rounded shadow-sm">
                    <div class="ml-3 d-inline-block align-middle">
                      <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle"><?php echo $bname ?></a></h5><span class="text-muted font-weight-normal font-italic d-block"><?php echo $publication ?></span>
                    </div>
                  </div>
                </th>
                <td class="border-0 align-middle"><strong>INR ₹ <?php echo $bookprice ?>.00</strong></td>
                <td class="border-0 align-middle"><strong>1</strong></td>
                <td class="border-0 align-middle"><a href="#" class="text-dark">

                  <?php if ($count==0):?>
                    <i class="fa text-danger fa-times-circle"></i>
                    <?php else: ?>
                      <i class="fa text-success fa-check-circle"></i>
                  <?php endif; ?>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- End -->
      </div>
    </div>

    <div class="row py-5 p-4 bg-white rounded shadow-sm">
      <div class="col-lg-7">
        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Shipping Details</div>
        <form action="payment.php" method="post">
          <div class="form-row mt-3">
            <div class="form-group col-md-6 input-group mb-4 border rounded-pill p-2">
              <input type="text" class="form-control border-0" name="firstname" id="inputEmail4" placeholder="First Name" required="">
            </div>
            <div class="form-group col-md-6 input-group mb-4 border rounded-pill p-2">
              <input type="text" class="form-control border-0" name="lastname" placeholder="Last Name" required="">
            </div>
          </div>
          <div class="form-group input-group mb-4 border rounded-pill p-2">
            <input type="text" class="form-control border-0" id="inputAddress" placeholder="Address Line 1" name="add1" required="">
          </div>
          <div class="form-group input-group mb-4 border rounded-pill p-2">
            <input type="text" class="form-control border-0" id="inputAddress2" placeholder="Address Line 2" name="add2" required="">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6 input-group mb-4 border rounded-pill p-2">
              <input type="email" class="form-control border-0" name="email" id="inputEmail4" placeholder="Email Address" required="">
            </div>
            <div class="form-group col-md-6 input-group mb-4 border rounded-pill p-2">
              <input type="tel" class="form-control border-0" name="number" placeholder="Phone" required="">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6 input-group mb-4 border rounded-pill p-2">
              <input type="text" class="form-control border-0" id="inputCity" placeholder="City" name="city"required="">
            </div>
            <div class="form-group col-md-6 input-group mb-4 border rounded-pill p-2">
              <input type="text" class="form-control border-0" id="inputState" placeholder="State" name="state"required="">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4 input-group mb-4 border rounded-pill p-2">
              <input type="text" class="form-control border-0" id="inputZip" placeholder="Zip Code" name="pin"required="">
            </div>
            <div class="form-group col-md-8 input-group mb-4 border rounded-pill p-2">
              <div class="form-check form-check-inline" style="margin-left: 75px;">
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
            </div>
          </div>



          <input type="hidden" name="bookid" value=<?php echo $bookid ?>>

          <input type="hidden" name="bookname" value=<?php echo $item_name ?>>

          <input type="hidden" name="amount" value=<?php echo $amount ?>>

          <input type="hidden" name="username" value=<?php echo $username?>>

          <input type="hidden" name="uid" value=<?php echo $uid?>>
          <br>
          <br>
          <?php if ($count==0):?>
          <input disabled value="Sorry! The book is sold out" class="btn btn-danger rounded-pill py-2 btn-block"></input>


          <?php else: ?>
          <input type="submit" value="Pay Now" class="btn btn-dark rounded-pill py-2 btn-block"></input>

        <?php endif; ?>

        </form>
      </div>
      <div class="col-lg-5" style="margin-top:12%">
        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Ammount Summary </div>
        <div class="p-4">
          <ul class="list-unstyled mb-4">
            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>INR ₹ <?php echo $bookprice ?>.00</strong></li>
            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping </strong><strong>INR ₹ 00.00</strong></li>
            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>INR ₹ 00.00</strong></li>
            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
              <h5 class="font-weight-bold">INR ₹ <?php echo $bookprice ?></h5>
            </li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</div>
</div>

<!-- End Checkout Details-->


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
