<html>

<head>
    <title> Register | Book Planet </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



    <style>
        * {
            box-sizing: border-box
        }

        /* Add padding to containers */
        .container {
            padding: 16px;
        }

        /* Full-width input fields */
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for the submit/register button */
        .registerbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }

        /* Set a grey background color and center the text of the "sign in" section */
        .signin {
            background-color: #f1f1f1;
            text-align: center;
        }
    </style>

</head>


<body>

	<div class="conatiner-fluid">
		<form action="registered.php" method="post">
				<div class="container-fluid">
						<div class="row">
								<div class="col-md-3">

								</div>
								<div class="col-md-6 container-fluid mt-4 pl-5 pr-5">
                    <hr>
										<center>
                      <h1>Register To Book Planet</h1>
  										<p>Please fill in this form to create an account.</p>
                    </center>
										<hr>

										<div class="row">
                      <div class="col">
                        <label><b>First Name</b></label>
    										<input type="text" placeholder="Enter First Name" name="fname" required>

                      </div>
                      <div class="col">
    										<label><b>Last Name</b></label>
    										<input type="text" placeholder="Last Name" name="lname" required>
                      </div>

                    </div>
										<label><b>Email</b></label>
										<input type="text" placeholder="Enter Email" name="mail" required>

                    <div class="row">
                      <div class="col">
                        <label><b>Password</b></label>
    										<input type="password" placeholder="Enter Password" name="psw" required>
                      </div>
                      <div class="col">
                        <label for="psw-repeat"><b>Repeat Password</b></label>
    										<input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                      </div>
                    </div>

										<hr>
										<button type="submit" class="registerbtn mb-3">Register</button>
                    <div class="container signin">
            						<h5>Already have an account? <a href="index.php">Sign in</a>.</h5>
            				</div>

								</div>
								<div class="col-md-3">

								</div>

						</div>

				</div>

		</form>

	</div>
