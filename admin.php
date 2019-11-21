<html>

   <head>
      <title>User Login | Book Planet</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js" type="text/javascript"></script>

<style>
:root {
--input-padding-x: 1.5rem;
--input-padding-y: .75rem;
}

body {
background: #007bff;
background: linear-gradient(to right, #0062E6, #33AEFF);
}

.card-signin {
border: 0;
border-radius: 1rem;
box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.card-signin .card-title {
margin-bottom: 2rem;
font-weight: 300;
font-size: 1.5rem;
}

.card-signin .card-body {
padding: 2rem;
}

.form-signin {
width: 100%;
}

.form-signin .btn {
font-size: 80%;
border-radius: 5rem;
letter-spacing: .1rem;
font-weight: bold;
padding: 1rem;
transition: all 0.2s;
}

.form-label-group {
position: relative;
margin-bottom: 1rem;
}

.form-label-group input {
height: auto;
border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
position: absolute;
top: 0;
left: 0;
display: block;
width: 100%;
margin-bottom: 0;
/* Override default `<label>` margin */
line-height: 1.5;
color: #495057;
border: 1px solid transparent;
border-radius: .25rem;
transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
color: transparent;
}

.form-label-group input:-ms-input-placeholder {
color: transparent;
}

.form-label-group input::-ms-input-placeholder {
color: transparent;
}

.form-label-group input::-moz-placeholder {
color: transparent;
}

.form-label-group input::placeholder {
color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
padding-top: calc(var(--input-padding-y) / 3);
padding-bottom: calc(var(--input-padding-y) / 3);
font-size: 12px;
color: #777;
}

.btn-google {
color: white;
background-color: #ea4335;
}

.btn-facebook {
color: white;
background-color: #3b5998;
}

/* Fallback for Edge
-------------------------------------------------- */

@supports (-ms-ime-align: auto) {
.form-label-group>label {
  display: none;
}
.form-label-group input::-ms-input-placeholder {
  color: #777;
}
}

/* Fallback for IE
-------------------------------------------------- */

@media all and (-ms-high-contrast: none),
(-ms-high-contrast: active) {
.form-label-group>label {
  display: none;
}
.form-label-group input:-ms-input-placeholder {
  color: #777;
}
}
</style>
</head>

   <body>

     <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <img src="images/logo-bookplanet.png" style="max-height:120px;padding:15px;margin-top:12px">

            <h5 class="card-title text-center">Admin Login Panel</h5>
            <form class="form-signin" name="loginForm" method="post" action="sales.php" style="">
              <div class="form-label-group">
                <input name="username" type="text" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail">Username</label>
              </div>

              <div class="form-label-group">
                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" onclick="return check(this.form)" value="Login">Sign in</button>
            </form>
            <div class="form-signin">
              <hr class="my-4">
              <button onclick="window.location.href = 'register.php';" class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fas fa-user-plus mr-2"></i> Register Now</button>
              <button onclick="window.location.href = 'index.php';" class="btn btn-lg btn-facebook btn-block text-uppercase" ><i class="fas fa-user mr-2"></i> Login As User</button>
            </div>
          </div>
        </div>
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
