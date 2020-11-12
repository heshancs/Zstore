<?php
include('connection.php');
include('header.php');
include('navbar.php');

    if(isset($_POST['search'])){
    
        $distric = $_POST['sdistric'];

        if($_POST['sprice']==1){
            $min = 1;
            $max=500;
        }else if($_POST['sprice']==2){
            $min = 500;
            $max=5000;
        }else if($_POST['sprice']==3){
            $min = 5000;
            $max=50000;
        }else if($_POST['sprice']==4){
            $min = 50000;
            $max=500000;
        }else if($_POST['sprice']==5){
            $min = 500000;
            $max=5000000;
        }else if($_POST['sprice']==6){
            $min = 5000000;
            $max=50000000;
        }else{
            $min = 1;
            $max=50000000;
        }

        if($_POST["scategory"] == "homeandland"){
            $sq = "SELECT * FROM homeandlearn WHERE hdistric = '$distric' AND hprice BETWEEN '$min' AND '$max' ";
            $result = mysqli_query($conn,$sq);
            while($row=mysqli_fetch_array($result)){
    
            echo '
        

       
        <hr><hr><hr>

        <!-- Page Content -->
     <div class="container">
       <div class="row">
         <div class="col-md-10">
   
         <div class="container">
         <!-- main container-->
           <div class="row">
        

        
        

            <div class="col-sm-4">
                <div class="card">
                    <div class="image">
                        <img src="data:image;base64,'.base64_encode($row["himage1"]).'" alt="Image" />
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
    }
    
    }else{
        header("Location: register.php");
    }
    
    include('footer.php');
    
    ?>
    