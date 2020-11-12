<?php
include('connection.php');
include('header.php');
include('navbar.php');

    if(isset($_SESSION['username'])){
    
        $id=$_GET['userid'];

        $sq = "SELECT * FROM homeandlearn,vehicle,electronic WHERE userid='$id'";
        $result = mysqli_query($conn,$sq);

        echo '
        <hr><hr><hr>

        <!-- Page Content -->
     <div class="container">
       <div class="row">
         <div class="col-md-10">
   
         <div class="container">
         <!-- main container-->
           <div class="row">
        ';

        while($row=mysqli_fetch_array($result)){
            echo '

            <div class="col-sm-4">
                <div class="card">
                    <div class="image">
                        <img src="data:image;,base64,'.base64_encode($row["himage1"]).'" alt="Image" />
                    </div>
                     <div class="card-inner">
                        <div class="header">
                            <h2>'.$row["htype"].'</h2>
                            <h3>'.$row["hsize"].'</h2>
                            <p>'.$row["hprice"].'</p>
                            <p>'.$row["hdate"].'</p>
                            <p>'.$row["hdistric"].'</p>
                            <p>'.$row["harea"].'</p>
                        </div>
                        <div class="content">
                            <p>'.$row["hdescription"].'</p>
                        </div>
                    </div>
                </div>
            </div>
            ';
        }

        echo '
        </div>
              
        <nav aria-label="...">
          <ul class="pagination">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active">
              <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
      
      </div>
  

      </div>
        <!-- right side bar -->

      <div class="col-md-2">
        <a href="register.php">Register</a>
      </div>

    </div>
    <!-- /.row -->
 </div>
        ';
    
    }else{
        header("Location: register.php");
    }
    
    include('footer.php');
    
    ?>
    