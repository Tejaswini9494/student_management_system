<!DOCTYPE html>
<head>
<title>Sign_In</title>
<link rel="stylesheet" href="bootstrap.css"/>
<link rel="stylesheet" href="logincss.css"/>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body card bg-light">
            <h5 class="card-title text-center"><b>Sign In</b></h5>
            <form class="form-signin">
              <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" style="border-radius:40px;" placeholder="Email address" required autofocus>
              <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" style="border-radius:40px;" placeholder="Password" required>
              <label for="inputPassword">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
              <input type="checkbox" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" style="border-radius:40px;" type="submit">Sign in</button>
			 <center><h6>Don't have account!!</h6></center>
			 <center><a href="signup.php">Sign Up here</a></center>
              <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase btn btn-danger" style="border-radius:40px; btn-color:red;" type="submit">
			  <i class="fab fa-google mr-2"></i> Sign in with Google</button>
             
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>