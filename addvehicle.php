<?php 
        include('header.php');
        include('navbar.php');

        // define variables and set to empty values
        $vbrand = $vmodel = $vprice = $vdistric = $vdescription = $varea = $vyear = $vcondition = $vengine = "";
    ?>

  





<div class="container">

    <form enctype="multipart/form-data" class="well form-horizontal" style="align: center" action="vehicleprocess.php" method="post"  id="contact_form">
        <fieldset>

        <!-- Form Name -->
        <legend>Add post form</legend>
        <?php
            if(isset($_GET['num'])){
                echo '
                    <div class="alert alert-danger">
                        <strong>Engine capacity, Year and Price must be a number!</strong>
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

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Price</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input value="<?php echo $vprice; ?>"  name="vprice" placeholder="Enter total price in Rupees" class="form-control"  type="text">

    </div>
  </div>
</div>

<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">Brand</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select value="<?php echo $vbrand; ?>" name="vbrand" class="form-control selectpicker" >
      <option>Please select Vehicle brand</option>
      <option value="Bajaj">Bajaj</option>
      <option value="Yamaha">Yamaha</option>
      <option value="TVS">TVS</option>
      <option value="Hero Honda">Hero Honda</option>
      <option value="Piaggio">Piaggio</option>
      <option value="Mahendra">Mahendra</option>

      <option value="Audi">Audi</option>
      <option value="BMW">BMW</option>
      <option value="Bugati">Bugati</option>
      <option value="Ford">Ford</option>
      <option value="Honda">Honda</option>
      <option value="Hyundai">Hyundai</option>
      <option value="Land Rover">Land Rover</option>
      <option value="Mazda">Mazda</option>
      <option value="Mercedes-Ben">Mercedes-Ben</option>
      <option value="Mini">Mini</option>
      <option value="Mitsubishi">Mitsubishi</option>
      <option value="Nissan">Nissan</option>
      <option value="Rolls Royce">Rolls Royce</option>
      <option value="Suzuki">Suzuki</option>
      <option value="Tata">Tata</option>
      <option value="Tesla">Tesla</option>
      <option value="Toyata">Toyata</option>
      <option value=">Volkswagen">Volkswagen</option>
      <option value="*">Other</option>
    </select>
  </div>
</div>
</div>

<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">Model</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
        <input value="<?php echo $vmodel; ?>" name="vmodel" placeholder="Enter the model" class="form-control"  type="text" >
    
  </div>
</div>
</div>

<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">Engine Capacity</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
        <input value="<?php echo $vengine; ?>" name="vengine" placeholder="Enter the engine capacity" class="form-control"  type="text" >
    
  </div>
</div>
</div>




<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">Distric</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select value="<?php echo $vdistric; ?>" name="vdistric" class="form-control selectpicker" >
      <option>Please select your distric</option>
      
                                <option value="Ampara">Ampara</option>
                                <option value="Anuradhapura">Anuradhapura</option>
                                <option value="Badulla">Badulla</option>
                                <option value="Batticaloa">Batticaloa</option>
                                <option value="Colombo">Colombo</option>
                                <option value="Galle">Galle</option>
                                <option value="Gampaha">Gampaha</option>
                                <option value="Hambantota">Hambantota</option>
                                <option value="Jaffna">Jaffna</option>
                                <option value="Kalutara">Kalutara</option>
                                <option value="Kandy">Kandy</option>
                                <option value="Kegalle">Kegalle</option>
                                <option value="Kilinochchi">Kilinochchi</option>
                                <option value="Kurunegala">Kurunegala</option>
                                <option value="Mannar">Mannar</option>
                                <option value="Matale">Matale</option>
                                <option value="Matara">Matara</option>
                                <option value="Monaragala">Monaragala</option>
                                <option value="Mullaitivu">Mullaitivu</option>
                                <option value="Nuwara Eliya">Nuwara Eliya</option>
                                <option value="Polonnaruwa">Polonnaruwa</option>
                                <option value="Puttalam">Puttalam</option>
                                <option value="Ratnapura">Ratnapura</option>
                                <option value="Trincomalee">Trincomalee</option>
                                <option value="Vavuniya">Vavuniya</option>
    </select>
  </div>
</div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">Town</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input value="<?php echo $varea; ?>" name="varea" placeholder="Enter the nearest town" class="form-control"  type="text">
 
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">Year</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
        <input value="<?php echo $vyear; ?>" name="vyear" placeholder="Enter the produced year" class="form-control"  type="text">
 
    </div>
  </div>
</div>

<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">Condition</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select value="<?php echo $vcondition; ?>" name="vcondition" class="form-control selectpicker" >
      <option value="">Please select the condition</option>
      <option value="Used">Used</option>
      <option value="Brand new">Brand New</option>
    </select>
  </div>
</div>
</div>





<!-- Text area -->
  
<div class="form-group">
  <label class="col-md-4 control-label">Description</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        	<textarea rows="12" class="form-control" name="vdescription" placeholder="Enter Full Description"></textarea>
  </div>
  </div>
</div>


Select image to upload: <br>
    <input type="file" name="image1" id="image1"><br>
    <input type="file" name="image2" id="image2"><br>
    <input type="file" name="image3" id="image3"><br>
    <input type="file" name="image4" id="image4"> <br>
    <input type="file" name="image5" id="image5">
    




<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"> </i> Your data sent successfully...</div>
 



<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <input type="submit" name="vehiclesubmit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></input>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->




    <?php include('footer.php'); ?>









