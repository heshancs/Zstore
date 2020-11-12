
<?php
  session_start();
?>


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

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Custom fonts for this theme -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="css/freelancer.min.css" rel="stylesheet">

  

</head>


<?php include('navbar.php'); ?>

 <!-- Masthead -->
 <header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

      <!-- Masthead Avatar Image -->
      <img class="masthead-avatar mb-5" src="img/avataaars.svg" alt="">

      <!-- Masthead Heading -->
      <h1 class="masthead-heading text-uppercase mb-0">Completely Free !!!</h1>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Masthead Subheading -->
      <p class="masthead-subheading font-weight-light mb-0">This offer is valid for few months</p>

    </div>
  </header>
 
 
 
 <!-- Portfolio Section -->
 <section class="page-section portfolio" id="portfolio">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Select Category</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Portfolio Grid Items -->
      <div class="row">

        <!-- Portfolio Item 1 -->

        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
           
            <a href="addhome.php"><img class="img-fluid" src="img/portfolio/cabin.png" alt=""></a>            <p class="adtext">Home and Land</p>
          </div>
        </div>
        

        

        

        <!-- Portfolio Item 4 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
            
            <a href="addmobile.php"><img class="img-fluid" src="img/portfolio/game.png" alt=""></a>
            <p class="adtext">Mobile</p>
          </div>
        </div>

        

        <!-- Portfolio Item 6 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
           
            <a href="addvehicle.php"><img class="img-fluid" src="img/portfolio/submarine.png" alt=""></a>
            <p class="adtext">Vehicle</p>
          </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
  </section>

  <?php include('footer.php') ?>