
<?php
include('connection.php');
include('header.php');
include('navbar.php');



$vid = $_GET['vid'];



if(isset($_POST['deletebtn']))
{
	$s1 = "DELETE FROM vehicle WHERE vid = '$vid' ";
	$res = mysqli_query($conn,$s1);
	if($res){ 
		header('Location: myads.php?del=success');
	}else{
		header('Location: test.php');
	}
	
}



$sq2 = "SELECT * FROM vehicle WHERE vid = '$vid' ";
    $result = mysqli_query($conn,$sq2);

while($row=mysqli_fetch_array($result)){

    
    echo '

    


<div class="container">
		<div class="qcard">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="data:image;base64,'.base64_encode($row["vimage1"]).'"  /></div>
						  <div class="tab-pane" id="pic-2"><img src="data:image;base64,'.base64_encode($row["vimage2"]).'"  /></div>
						  <div class="tab-pane" id="pic-3"><img src="data:image;base64,'.base64_encode($row["vimage3"]).'"  /></div>
						  <div class="tab-pane" id="pic-4"><img src="data:image;base64,'.base64_encode($row["vimage4"]).'"  /></div>
						  <div class="tab-pane" id="pic-5"><img src="data:image;base64,'.base64_encode($row["vimage5"]).'"  /></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="data:image;base64,'.base64_encode($row["vimage1"]).'"  /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="data:image;base64,'.base64_encode($row["vimage2"]).'"  /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="data:image;base64,'.base64_encode($row["vimage3"]).'" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="data:image;base64,'.base64_encode($row["vimage4"]).'"  /></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="data:image;base64,'.base64_encode($row["vimage5"]).'" /></a></li>
						</ul>
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">'.$row['vbrand'].' <span style=" font-size: 20px;">'.$row["vmodel"].' </span></h3>

						<p class="product-description">'.$row["vdescription"].'</p>
                        <h4 class="price"><span style=" font-size: 30px;">Rs '.$row["vprice"].'</span></h4>
                        <p class="product-description">Distric :'.$row["vdistric"].'</p>
                        <p class="product-description">Town :'.$row["varea"].'</p>
                        <p class="product-description">Engine Capacity:'.$row["vengine"].'</p>
                        <p class="product-description">Condition :'.$row["vcondition"].'</p>
                        <p class="product-description">Year :'.$row["vyear"].'</p>
                        <p class="product-description"><span class="fa fa-phone"></span> Telephone : <span id="demo"></span></p> 
						<button class="btn btn-primary" onclick="myFunction()">View</button>
						
						';

						if( $row["userid"] == $_SESSION["userid"]){
							echo '
							<form method="post" action="vehicleproductdetails.php">
							<input type="submit" name="deletebtn" value="Delete this ad">
							</form>
							';
						}
						
						echo '
					</div>
				</div>
			</div>
		</div>
    </div>
    ';
}

$sq3 = "SELECT * FROM user WHERE userid = '$vid' ";
    $result2 = mysqli_query($conn,$sq3);

while($r=mysqli_fetch_array($result2)){
        $ph = $r['phone'];
}



           
        ?>

<?php include('footer.php'); ?>

<script>
   
function myFunction() {
  
  document.getElementById("demo").innerHTML = <?php echo $ph; ?>
}
</script>

