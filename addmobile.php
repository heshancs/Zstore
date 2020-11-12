<?php 
        include('header.php');
        include('navbar.php');

        // define variables and set to empty values
        $ebrand = $emodel = $eprice = $edistric = $edescription = $earea = $eyear = $econdition = "";
    ?>

    





<div class="container">

    <form enctype="multipart/form-data" class="well form-horizontal" style="align: center" action="mobileprocess.php" method="post"  id="contact_form">
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
  <input value="<?php echo $eprice; ?>"  name="eprice" placeholder="Enter total price in Rupees" class="form-control"  type="text">

    </div>
  </div>
</div>

<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">Brand</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select value="<?php echo $ebrand; ?>" name="ebrand" class="form-control selectpicker" >
      <option>Please select mobile brand</option>
      <option value="Huawei">Huawei</option>
      <option value="Apple">Apple</option>
      <option value="Samsung">Samsung</option>
      <option value="Nokia">Nokia</option>
      <option value="Sony">Sony</option>
      <option value="htc">htc</option>
      <option value="Xiomi">Xiomi</option>
      <option value="Oppo">Oppo</option>
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
        <input value="<?php echo $emodel; ?>" name="emodel" placeholder="Enter the model" class="form-control"  type="text" >
    
  </div>
</div>
</div>



<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">Distric</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select value="<?php echo $edistric; ?>" name="edistric" class="form-control selectpicker" >
      <option>Please select mobile brand</option>
      <option value="">Select Distric</option>
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
  <input value="<?php echo $earea; ?>" name="earea" placeholder="Enter the nearest town" class="form-control"  type="text">
 
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">Year</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
        <input value="<?php echo $eyear; ?>" name="eyear" placeholder="Enter the produced year" class="form-control"  type="text">
 
    </div>
  </div>
</div>

<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">Condition</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select value="<?php echo $econdition; ?>" name="econdition" class="form-control selectpicker" >
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
        	<textarea rows="12" class="form-control" name="edescription" placeholder="Enter Full Description"></textarea>
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
    <button type="submit" name="mobilesubmit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->




    <?php include('footer.php'); ?>









