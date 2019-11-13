<?php


if(isset($_POST))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$psw=$_POST['psw'];
	$mail=$_POST['mail'];
}
$conn = mysqli_connect("localhost","root","","shop");
	$sql = "INSERT INTO user(user_fname,user_lname,user_pw,user_email) VALUES('$fname','$lname','$psw','$mail')";
	if($conn->query($sql) === TRUE) {
    	echo '
	    <div class="alert alert-success" role="alert" style="margin: 15 300 15 300;">
	      <center> Your account was successfully created! Please log in to continue!</center>
	    </div>';

	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
?>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Book Planet | Query Confirmation</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		<center><a class="btn btn-outline-info" href="index.php" role="button">Login Now</a></center>


	</body>
</html>
