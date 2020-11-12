    <?php 
        include('header.php');
        include('navbar.php');

        // define variables and set to empty values
$typeErr = $sizeErr = $districErr = $townErr = $descriptionErr = $priceErr = "";
$type = $size = $distric = $town = $description = $price = "";
    ?>







<div class="container">

    <form enctype="multipart/form-data" class="well form-horizontal" style="align: center" action="homeprocess.php" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Add post form</legend>

<?php
  if(isset($_GET['num'])){
    echo '
    <div class="alert alert-danger">
      <strong>Land size and Price must be a number!</strong>
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
  <input value="<?php echo $price; ?>"  name="price" placeholder="Enter total price in Rupees" class="form-control"  type="text">
  <span class="error">* <?php echo $priceErr;?></span>
    </div>
  </div>
</div>

<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">Type</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select value="<?php echo $type; ?>" name="type" class="form-control selectpicker" >
      <option>Please select type</option>
      <option value="Land">Land</option>
      <option value="Home">Home</option>
    </select>
    <span class="error">* <?php echo $typeErr;?></span>
  </div>
</div>
</div>

<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">Distric</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="distric" class="form-control selectpicker" value="<?php echo $distric; ?>" >
      <option value="" >Please select your distric</option>
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
    <span class="error">* <?php echo $districErr;?></span>
  </div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Town</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input value="<?php echo $town; ?>" name="town" placeholder="Enter your nearest town" class="form-control"  type="text" >
  <span class="error">* <?php echo $townErr;?></span>
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">Land size</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input value="<?php echo $size; ?>" name="size" placeholder="Enter size in perches" class="form-control"  type="text">
  <span class="error">* <?php echo $sizeErr;?></span>
    </div>
  </div>
</div>





<!-- Text area -->
  
<div class="form-group">
  <label class="col-md-4 control-label">Description</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        	<textarea rows="12" class="form-control" name="description" placeholder="Enter Full Description"></textarea>
          <span class="error">* <?php echo $descriptionErr;?></span>
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
    <button type="submit" name="homesubmit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->




    <?php include('footer.php'); ?>









