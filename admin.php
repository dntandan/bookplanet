<html>

   <head>
      <title>Admin Login | Book Planet</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


      <style>
      body {
 width: 100%;
height: 100%;
font-family: "Helvetica Neue", Helvetica, sans-serif;
color: #444;
-webkit-font-smoothing: antialiased;    background:  #ecf0f1
;
}



   #container {
position: fixed;
width: 340px;
height: 280px;
top: 50%;
left: 50%;
margin-top: -140px;
margin-left: -170px;
}



   form {
    margin: 0 auto;
    margin-top: 20px;
}
label {
    color: #555;
    display: inline-block;
    margin-left: 18px;
    padding-top: 10px;
    font-size: 14px;
}



   p a {
    font-size: 11px;
    color: #aaa;
    float: right;
    margin-top: -13px;
    margin-right: 20px;
}
p a:hover {
    color: #555;
}
input {
    font-family: "Helvetica Neue", Helvetica, sans-serif;
    font-size: 12px;
    outline: none;
}
input[type=text],
input[type=password] {
    color: #777;
    padding-left: 10px;
    margin: 10px;
    margin-top: 12px;
    margin-left: 18px;
    width: 290px;
    height: 35px;
}

#lower {
    background: #ecf2f5;
    width: 100%;
    height: 69px;
    margin-top: 20px;
}
input[type=checkbox] {
    margin-left: 20px;
    margin-top: 30px;
}
.check {
    margin-left: 3px;
}
input[type=submit] {
    float: right;
    margin-right: 20px;
    margin-top: 20px;
    width: 304px;
    height: 30px;
}

button
{
   float: right;
    margin-right: 20px;
    margin-top: 20px;
    width: 304px;
    height: 30px;

    background-color: #4CAF50; /* Green */ color: white;
}



background: #fff;
    border-radius: 3px;
    border: 1px solid #ccc;
    box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
   </style>
   </head>

   <body>

      <div class="row">
        <div class="col-lg-4">
        </div>
          <div class="col-lg-3" style="padding-left:1.6rem!important;margin-top:55px;margin-left:5.5rem;padding-bottom:25px;border: 5px solid black;">
            <img src="images/logo-bookplanet.png" style="max-height:120px;padding:15px;margin-top:12px">
             <div style = "background-color:#333333; color:#FFFFFF; padding:3px; padding-left:28%;"><b>Admin Login Panel</b></div>
             <form name="loginForm" method="post" action="sales.php" style="">
               <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" size=25 name="userid" placeholder="Enter Username">
                  <small id="emailHelp" class="form-text text-muted">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We'll never share your details with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" size=25 name="pwd" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-success btn-sm" onclick="return check(this.form)" value="Login">Login</button>
             </form>
             <a href="register.php"><button type="button" class="btn btn-outline-primary btn-sm" width="304px" height="30px">Register Now!</button></a>
             <a href="index.php"><button type="button" class="btn btn-outline-dark btn-sm " width="304px" height="30px">Login as User</button></a>
          </div>
          <div class="col-lg-5">

          </div>
        </div>
      </div>
   </body>
	 <script language="javascript">
	 function check(form)
	 {

	 if(form.userid.value == "dntandan" && form.pwd.value == "login@time")
	 {
	 	return true;
	 }
	 else
	 {
	 	alert("Error Password or Username")
	 	return false;
	 }
	 }
	 </script>
</html>
