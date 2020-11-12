
<?php
include('connection.php');
include('header.php');
include('navbar.php');



$hid = $_GET['hid'];


$sq2 = "SELECT * FROM homeandlearn WHERE hid = '$hid' ";
    $result = mysqli_query($conn,$sq2);

while($row=mysqli_fetch_array($result)){

    
    echo '

    


<div class="container">
		<div class="qcard">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="data:image;base64,'.base64_encode($row["himage1"]).'"  /></div>
						  <div class="tab-pane" id="pic-2"><img src="data:image;base64,'.base64_encode($row["himage2"]).'"  /></div>
						  <div class="tab-pane" id="pic-3"><img src="data:image;base64,'.base64_encode($row["himage3"]).'"  /></div>
						  <div class="tab-pane" id="pic-4"><img src="data:image;base64,'.base64_encode($row["himage4"]).'"  /></div>
						  <div class="tab-pane" id="pic-5"><img src="data:image;base64,'.base64_encode($row["himage5"]).'"  /></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="data:image;base64,'.base64_encode($row["himage1"]).'"  /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="data:image;base64,'.base64_encode($row["himage2"]).'"  /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="data:image;base64,'.base64_encode($row["himage3"]).'" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="data:image;base64,'.base64_encode($row["himage4"]).'"  /></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="data:image;base64,'.base64_encode($row["himage5"]).'" /></a></li>
						</ul>
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">'.$row['htype'].' <span style=" font-size: 20px;">'.$row["hdistric"].' </span></h3>

						<p class="product-description">'.$row["hdescription"].'</p>
                        <h4 class="price"><span style=" font-size: 30px;">Rs '.$row["hprice"].'</span></h4>
                        <p class="product-description">Town :'.$row["harea"].'</p>
                        <p class="product-description"><span class="fa fa-phone"></span> Telephone : <span id="demo"></span></p> <button class="btn btn-primary" onclick="myFunction()">View</button>
                        <!-- Modal HTML -->
 
					</div>
				</div>
			</div>
		</div>
    </div>
    ';
}

$sq3 = "SELECT * FROM user WHERE userid = '$hid' ";
    $result2 = mysqli_query($conn,$sq3);

while($r=mysqli_fetch_array($result2)){
        $ph = $r['phone'];
}

  include('footer.php');

?>



<script>
   
function myFunction() {
  
  document.getElementById("demo").innerHTML = <?php echo $ph; ?>
}
</script>

