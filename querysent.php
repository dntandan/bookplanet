<?php

if(isset($_POST))
{

	$fullname=$_POST['fullname'];

	$mail=$_POST['mail'];

	$query=$_POST['query'];
}

	$conn = mysqli_connect("localhost","root","","shop");
	$sql = "INSERT INTO contact(cont_name,cont_email,query) VALUES('$fullname','$mail', '$query')";
	if($conn->query($sql) === TRUE) {
    	echo '
	    <div class="alert alert-success" role="alert" style="margin: 15 300 15 300;">
	      <center> Your Query Was Successfully Sent!</center>
	    </div>';

	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();

	?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Book Planet | Query Confirmation</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		<center><a class="btn btn-outline-info" href="bookplanet.php" role="button">Back To Home</a></center>


	</body>
</html>
