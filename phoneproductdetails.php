
<?php
include('connection.php');
include('header.php');
include('navbar.php');



$eid = $_GET['eid'];


$sq2 = "SELECT * FROM electronic WHERE eid = '$eid' ";
    $result = mysqli_query($conn,$sq2);

while($row=mysqli_fetch_array($result)){

    
    echo '

    


<div class="container">
		<div class="qcard">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="data:image;base64,'.base64_encode($row["eimage1"]).'"  /></div>
						  <div class="tab-pane" id="pic-2"><img src="data:image;base64,'.base64_encode($row["eimage2"]).'"  /></div>
						  <div class="tab-pane" id="pic-3"><img src="data:image;base64,'.base64_encode($row["eimage3"]).'"  /></div>
						  <div class="tab-pane" id="pic-4"><img src="data:image;base64,'.base64_encode($row["eimage4"]).'"  /></div>
						  <div class="tab-pane" id="pic-5"><img src="data:image;base64,'.base64_encode($row["eimage5"]).'"  /></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="data:image;base64,'.base64_encode($row["eimage1"]).'"  /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="data:image;base64,'.base64_encode($row["eimage2"]).'"  /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="data:image;base64,'.base64_encode($row["eimage3"]).'" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="data:image;base64,'.base64_encode($row["eimage4"]).'"  /></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="data:image;base64,'.base64_encode($row["eimage5"]).'" /></a></li>
						</ul>
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">'.$row['ebrand'].' <span style=" font-size: 20px;">'.$row["emodel"].' </span></h3>

						<p class="product-description">'.$row["edescription"].'</p>
                        <h4 class="price"><span style=" font-size: 30px;">Rs '.$row["eprice"].'</span></h4>
                        <p class="product-description">Distric :'.$row["edistric"].'</p>
                        <p class="product-description">Town :'.$row["earea"].'</p>
                        <p class="product-description">Condition :'.$row["econdition"].'</p>
                        <p class="product-description">Year :'.$row["eyear"].'</p>
                        <p class="product-description"><span class="fa fa-phone"></span> Telephone : <span id="demo"></span></p> <button class="btn btn-primary" onclick="myFunction()">View</button>
                        <!-- Modal HTML -->
 
					</div>
				</div>
			</div>
		</div>
    </div>
    ';
}

$sq3 = "SELECT * FROM user WHERE userid = '$eid' ";
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

