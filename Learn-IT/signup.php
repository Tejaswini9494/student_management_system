<!DOCTYPE html>
<head>
<title>Sign Up</title>
<link rel="stylesheet" href="bootstrap.css"/>
<link rel="stylesheet" href="logincss.css"/>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body card bg-light">
            <h5 class="card-title text-center"><b>Sign Up</b></h5>
            <form class="form-signin">
              <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" style="border-radius:40px;" placeholder="Email address" required autofocus/>
              <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" style="border-radius:40px;" placeholder="Password" required/>
              <label for="inputPassword">Password</label>
              </div>
			  
			  <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" style="border-radius:40px;" placeholder="Password" required/>
              <label for="inputPassword">Re-enter password</label>
              </div>
			  
			  <div class="form-label-group">
              <select class="form-control" style="border-radius:40px;">
			  <option id="check">Student</option>
			  <option>Teacher</option>
			  </select>
              </div>
			  
			  <script>
			  var val = document.getElementById("check");
               alert(val);
			  }
			  
			  
			  </script>
			  
			  

             
           
              <hr class="my-4">
              <button class="btn btn-lg btn-block text-uppercase btn btn-danger" style="border-radius:40px; btn-color:red;" type="submit">
			  Submit</button>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>