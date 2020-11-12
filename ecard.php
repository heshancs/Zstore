<?php

echo '



<!-- Page Content -->
<div class="container">


 <div class="container">
 <!-- main container-->
   <div class="row">
';

$sq2 = "SELECT * FROM electronic";
    $result = mysqli_query($conn,$sq2);

while($row=mysqli_fetch_array($result)){

    $eid = $row['eid'];
    echo '

   





    <div class="col-md-3">
	<figure class="card card-product">
		<div class="img-wrap"> 
			<img src="data:image;base64,'.base64_encode($row["eimage1"]).'" >
		
		</div>
		<figcaption class="info-wrap">
			<h6 class="title text-dots"><a href="#"><span style=" font-size: 20px;">'.$row["ebrand"].' </span>'.$row["emodel"].'</a></h6>
			<div class="action-wrap">
				<a href="phoneproductdetails.php?eid='.$eid.'" class="btn btn-primary btn-sm float-right"> Details </a>
				<div class="price-wrap h5">
					<span class="price-new">Rs '.$row["eprice"].'</span>
					
				</div> <!-- price-wrap.// -->
			</div> <!-- action-wrap -->
		</figcaption>
	</figure> <!-- card // -->
</div> <!-- col // -->
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



<!-- /.row -->
</div>
';
?>