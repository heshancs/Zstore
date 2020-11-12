<?php
  if(isset($_SESSION['username'])){

    
  
  echo '
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand logo" href="index.php"><span style="color: red;">L</span>anka<span style="color: red;">L</span>ands.lk</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
        
          <li class="nav-item">
            <p class="nav-link">' ; echo 'Hello '.$_SESSION['username']; echo '</p>
          </li>
          <li class="nav-item">
            <a href="myads.php" class="nav-link">My ads</a>
          </li>
          <li class="nav-item">
            
            <a href="postadd.php" class="btn btn-default btn-lg nav-link">
              <span class="glyphicon glyphicon-search"></span> Post your ad
            </a>

          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br><br>
  ';
  }else{?>
  
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand logo" href="index.php"><span style="color: red;">L</span>anka<span style="color: red;">L</span>ands.lk</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
          
            
            <li class="nav-item">
              <a href="myads.php" class="nav-link">My ads</a>
            </li>
            <li class="nav-item">
              
              <a href="postadd.php" class="btn btn-default btn-lg nav-link">
                <span class="glyphicon glyphicon-search"></span> Post your ad
              </a>
  
            </li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br><br>
    <?php
  }

?>
   
   
  