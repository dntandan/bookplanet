<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Book Planet | Contact Us</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>


	<style media="screen">
	.border-md {
	border-width: 2px;
}

.btn-facebook {
	background: #405D9D;
	border: none;
}

.btn-facebook:hover, .btn-facebook:focus {
	background: #314879;
}

.btn-twitter {
	background: #42AEEC;
	border: none;
}

.btn-twitter:hover, .btn-twitter:focus {
	background: #1799e4;
}



/*
*
* ==========================================
* FOR DEMO PURPOSES
* ==========================================
*
*/

body {
	min-height: 100vh;
}

.form-control:not(select) {
	padding: 1.5rem 0.5rem;
}

select.form-control {
	height: 52px;
	padding-left: 0.5rem;
}

.form-control::placeholder {
	color: #ccc;
	font-weight: bold;
	font-size: 0.9rem;
}
.form-control:focus {
	box-shadow: none;
}
	</style>
	<script type="text/javascript">
	$(function () {
	$('input, select').on('focus', function () {
			$(this).parent().find('.input-group-text').css('border-color', '#80bdff');
	});
	$('input, select').on('blur', function () {
			$(this).parent().find('.input-group-text').css('border-color', '#ced4da');
	});
});
	</script>

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

</head>








<body>

	<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container">
            <!-- Navbar Brand -->
            <a href="#" class="navbar-brand">
                <img src="images/logo-bookplanet.png" alt="logo" width="230">
            </a>
        </div>
    </nav>
</header>


<div class="container">
    <div class="row py-3 align-items-center">
        <!-- For Demo Purpose -->
        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
            <img src="images/query.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
            <center><h1>Ask your query!</h1></center>

        </div>

        <!-- Registeration Form -->
        <div class="col-md-7 col-lg-6 ml-auto">
            <form action="querysent.php" method="post">
                <div class="row">

                    <!-- First Name -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="firstName" type="text" name="fullname" placeholder="Full Name" class="form-control bg-white border-left-0 border-md">
                    </div>


                    <!-- Email Address -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                        </div>
                        <input id="email" type="email" name="mail" placeholder="Email Address" class="form-control bg-white border-left-0 border-md">
                    </div>


										<!-- Query Name -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-black-tie text-muted"></i>
                            </span>
                        </div>
                        <textarea rows="4" id="firstName" type="text" name="query" placeholder="Enter your query" class="form-control bg-white border-left-0 border-md"></textarea>
                    </div>






                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
											<center> <input type="submit" value="Submit Your Query" class="btn btn-primary btn-block py-2"> </center>
                    </div>

                    <!-- Divider Text -->
                    <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                        <div class="border-bottom w-100 ml-5"></div>
                        <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                        <div class="border-bottom w-100 mr-5"></div>
                    </div>

                    <!-- Social Login -->
                    <div class="form-group col-lg-12 mx-auto">
                        <a href="welcome.php" class="btn btn-primary btn-block py-2 btn-facebook">
                            <i class="fa fa-home mr-2"></i>
                            <span class="font-weight-bold">Back To Home</span>
                        </a>
                    </div>


                </div>
            </form>
        </div>
    </div>
</div>


</body>

</html>
