<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LanksLands.lk</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/usiness-frontpage.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/login.css" rel="stylesheet">

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand logo" href="#"><span style="color: red;">L</span>anka<span style="color: red;">L</span>ands.lk</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">register</a>
          </li>
          <li class="nav-item">
            
            <a href="#" class="btn btn-default btn-lg nav-link">
              <span class="glyphicon glyphicon-search"></span> Post your ad
            </a>

          </li>
        </ul>
      </div>
    </div>
  </nav>


<hr><hr><hr><hr>

<div class="container">
	
		<form action="registerprocess.php" method="post">
  <h2>Register</h2>

  <?php
  if(isset($_GET['error'])){
    echo '
    <div class="alert alert-danger">
      <strong>Email address already exists</strong>
    </div>
    ';
  }else if(isset($_GET['fill'])){
    echo '
    <div class="alert alert-danger">
      <strong>Please fill every columns!</strong>
    </div>
    ';
  }

  ?>

  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="username">
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email">
  </div>

  <div class="input-container">
    <i class="fa fa-phone icon"></i>
    <input class="input-field" type="text" placeholder="Phone" name="phone">
  </div>

  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="password">
  </div>

  <button name="register" type="submit" class="btn">Register</button>

  <p>Already have an account. <a href="login.php">Login here</a></p>

  <a href="#" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
	</a>
        <a href="#" class="google btn"><i class="fa fa-google fa-fw">
          </i> Login with Google+
        </a>
</form>

		
		
	
</div>






  <!-- /.container -->

  <!-- Second Container -->
<div class="container-fluid bg-2 text-center" style="background-color: #E5E5E5;">
  <h3 class="margin">Completely free</h3>
  <p> Posting your ad is completely free for a limited time period. So don't mis and get this valuable chance.</p>
  <a href="#" class="btn btn-default btn-lg">
    <span class="glyphicon glyphicon-search"></span> Post your ad
  </a>
</div>




  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; lankalands.lk 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  

  
</body>

</html>
