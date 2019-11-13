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
<?php
$conn = mysqli_connect("localhost","root","","shop");
	$sql = "INSERT INTO shipping(b_id,u_id,sf_name,sl_name,ssex,smobile,semail,saddress1,saddress2,stown,sstate,spin) VALUES('$bookid','$uid','$firstname','$lastname','$gender','$number','$email','$add1','$add2','$city','$state','$pin')";
	if($conn->query($sql) === TRUE) {
    	echo '';
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
?>
<?php
      // Account details
      $apiKey = urlencode('aJOo8nc0mC4-jEfXsyRa5E5OOs1z1L9CLte7wyZWVY');

      // Message details
      $numbers = array($number);
      $sender = urlencode('TXTLCL');
      $message = rawurlencode("Hi $firstname, your WishList package has been confirmed. Estimated delievery: 48 hours. For any queries, contact 9876543210");

      $numbers = implode(',', $numbers);

      // Prepare data for POST request
      $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);

      // Send the POST request with cURL
      $ch = curl_init('https://api.textlocal.in/send/');
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $response = curl_exec($ch);
      curl_close($ch);

      // Process your response here
      // echo $response;
?>
<?php
  $con=mysqli_connect("localhost","root","","shop");
  $sql2="SELECT book_count from book where book_id='$bookid'";
  $res=$con->query($sql2);
  if($res->num_rows>0)
      {
        while($row=$res->fetch_assoc())
        {
          $count=$row["book_count"];
        }
      }
  $count=$count-1;
  $sql3="UPDATE book SET book_count='$count' WHERE book_id='$bookid'";
  if($con->query($sql3)===TRUE)
  {
    echo '
    <div class="alert alert-success" role="alert" style="margin: 15 300 15 300;">
      <center> Payment Successful! Your order has been placed. Thank you for using Book Planet!</center>
    </div>';
  }
  else
  {
     echo "Database error";
  }
  $con->close();
?>
<html>
<head>
	<title> Book Planet | Order Details </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>


  <div class="container">
    <div class="card-header">
        <h3 class="text-xs-center"><strong> <center> Book Planet Invoice <center></strong></h3>
    </div>
    <div class="row mb-5 mt-3">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h3 class="text-xs-center"><strong>Shipping Address</strong></h3>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <td><strong>SI No.</strong></td>
                                    <td class="text-xs-center"><strong>Info</strong></td>
                                    <td class="text-xs-center"><strong>Detail</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td class="text-xs-center">Name</td>
                                    <td class="text-xs-center"><?php echo $firstname ?>&nbsp;<?php echo $lastname ?></td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td class="text-xs-center">Email</td>
                                    <td class="text-xs-center"><?php echo $email?></td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td class="text-xs-center">Address</td>
                                    <td class="text-xs-center"><?php echo $add1?>, <?php echo $add2?> , <?php echo $city?> , <?php echo $state?>, <?php echo $pin?></td>
                                </tr>
                                <tr>
                                    <td>04</td>
                                    <td class="text-xs-center">Phone</td>
                                    <td class="text-xs-center"><?php echo $number?></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h3 class="text-xs-center"><strong>Book Order summary</strong></h3>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <td><strong>Book Name</strong></td>
                                    <td class="text-xs-center"><strong>Book Price</strong></td>
                                    <td class="text-xs-center"><strong>Book Quantity</strong></td>
                                    <td class="text-xs-right"><strong>Total</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $bookname?></td>
                                    <td class="text-xs-center">Rs.<?php echo $amount?>.00</td>
                                    <td class="text-xs-center">01</td>
                                    <td class="text-xs-right">Rs.<?php echo $amount?>.00</td>
                                </tr>

                                <tr>
                                    <td class="highrow"></td>
                                    <td class="highrow"></td>
                                    <td class="highrow text-xs-center"><strong>Subtotal</strong></td>
                                    <td class="highrow text-xs-right">Rs.<?php echo $amount?>.00</td>
                                </tr>
                                <tr>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow text-xs-center"><strong>Shipping</strong></td>
                                    <td class="emptyrow text-xs-right">Rs. 00.00</td>
                                </tr>
                                <tr>
                                    <td class="emptyrow"><i class="fa fa-barcode iconbig"></i></td>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow text-xs-center"><strong>Total</strong></td>
                                    <td class="emptyrow text-xs-right">Rs.<?php echo $amount?>.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.height {
    min-height: 200px;
}

.icon {
    font-size: 47px;
    color: #5CB85C;
}

.iconbig {
    font-size: 77px;
    color: #5CB85C;
}

.table > tbody > tr > .emptyrow {
    border-top: none;
}

.table > thead > tr > .emptyrow {
    border-bottom: none;
}

.table > tbody > tr > .highrow {
    border-top: 3px solid;
}
</style>


<center class="mt-3 mb-3">
  <div id="editor"></div>
<button onclick="printPage()" class="btn btn-warning">Print as PDF</button>
<a class="btn btn-outline-info" href="welcome.php" role="button">Back To Home</a>
  </center>
</body>
</html>
<script>
        function printPage() {
            window.print();
        }
</script>
