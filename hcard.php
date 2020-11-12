<?php

echo '
  <div class="product-items">
    <h2 class="product-header">Property</h2>
    <div class="row">
      <div id="product-slider-women" class="owl-carousel">
';

    $sq2 = "SELECT * FROM homeandlearn";
    $result = mysqli_query($conn,$sq2);

    while($row=mysqli_fetch_array($result)){
    
  echo '
    <div class="col-md-4">
      <div class="single-product">
        <div class="single-product-img">
          <a href="#">
            <img class="primary-img" src="data:image;base64,'.base64_encode($row["himage1"]).'" alt="product">
            <img class="secondary-img" src="data:image;base64,'.base64_encode($row["himage1"]).'" alt="product">
          </a>
          <div class="single-product-action">
            <a href="#"><i class="fa fa-external-link"></i></a>
            <a href="#"><i class="fa fa-shopping-cart"></i></a>
          </div>
        </div>
        <div class="single-product-content">
          <div class="product-content-left">
            <h2><a href="#">'.$row["hdisplayname"].'</a></h2>
          </div>
          <div class="product-content-left">
            <h3> Rs '.$row['hprice'].'</h3>
          </div>
          <div class="product-content-right-distric">
            <ul>
              ';
              if($row['member']==true){
                echo '
                <h6>member</h6>
                <h6>'.$row['hdistric'].'</h6>
                ';
              }else{
                echo '<h6>'.$row['hdistric'].'</h6>';
              }
              
             echo '
            </ul>
          </div>
        </div>
      </div>
    </div>
  ';
}

echo '
</div>
</div>
</div>
';



  ?>