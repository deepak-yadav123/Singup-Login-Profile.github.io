<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GUVI-Singup</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<div class="container">
  <div class="row">
  <div class="col-md-5 mx-auto mt-5">
  <div class="card">
  <div class="card-header">
  <h3>Signup User</h3>
  </div>
  <div class="card-body">
  <form>
  <div class="form-group">
  <input type="text" id="name" class="form-control name" placeholder="Name">
  <div class="invalid-feedback" style="font-size:16px;">Name is required</div>
  </div>
  <!-- Close form-group -->
  <div class="form-group">
  <input type="email" id="email" class="form-control email" placeholder="Email">
  <div class="invalid-feedback emailError" style="font-size:16px;">Email is required</div>
  </div>
  <!-- Close form-group -->
  <div class="form-group">
  <input type="password" id="password" class="form-control password" placeholder="Password">
  <div class="invalid-feedback" style="font-size:16px;">Password is required</div>
  </div>
  <br>
  <!-- Close form-group -->
  <div class="form-group">
   <button type="button" id="signup" class="btn btn-info">Signup &rarr;</button>
   <a href="login.php" style="float:right;margin-top:10px;">Already have an account ?</a>
  </div>
  <!-- Close form-group -->
  </form>
  </div>
  <!-- Close card-body -->
  </div>
  <!-- Close card -->
  </div>
  <!-- Close col-md-5 -->
  </div>
  <!-- Close row -->
  </div>
  <!-- Close container -->


  <script src="jquery.min.js"></script>
  <script src="app.js"></script>
</body>
</html>