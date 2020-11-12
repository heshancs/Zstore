<?php 
  include('connection.php');
  include('header.php');
  include('navbar.php');

?>
 
<section>
    <div id="carouselExampleFade" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://pbs.twimg.com/media/EGHYvttU4AAYKb7?format=jpg&name=large" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://pbs.twimg.com/media/EGHYvtkUcAAuc8T?format=jpg&name=large" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://pbs.twimg.com/media/EGHYvtjU0AAO8w1?format=jpg&name=large" class="d-block w-100" alt="...">
            </div>
            <!--https://upload.wikimedia.org/wikipedia/commons/8/8d/Yarra_Night_Panorama%2C_Melbourne_-_Feb_2005.jpg-->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>


<section class="search-sec">
    <div class="container">
        <form action="searchresult.php" method="post" novalidate="novalidate">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select class="form-control search-slt" id="" name="scategory">
                                <option value="">Select Category</option>
                                <option value="electronic">Electronics</option>
                                <option value ="vehicle">Vehicles</option>
                                <option value="homeandland">Home and Lands</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select class="form-control search-slt" id="" name="sdistric">
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
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select class="form-control search-slt" id="" name="sprice">
                                <option value ="">Select Price Range</option>
                                <option value ="1">Rs 1 - 500 </option>
                                <option value ="2">Rs 500 - 5 000</option>
                                <option value ="3">Rs 5 000 - 50 000</option>
                                <option value ="4">Rs 50 000 - 500 000</option>
                                <option value ="5">Rs 500 000 - 5M</option>
                                <option value ="6">About Rs 5M</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <button type="submit" name="search" class="btn btn-danger wrn-btn">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">Home and Land</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Mobile</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Vehicle</button>
</div>

<div  style="background-image: url('img/back.jpeg');" id="London" class="tabcontent">
  <?php
   
    include('hcard.php');
  ?>
</div>

<div id="Paris" class="tabcontent">
      <?php
       
        include('ecard.php');
      ?>
</div>

<div id="Tokyo" class="tabcontent">    
  <?php
   
    include('vcard.php');
  ?>
</div>



  <!-- /.container -->

  <!-- Second Container -->
<div class="container-fluid bg-2 text-center" style="background-color: #E5E5E5;">
  <h3 class="margin">Completely free</h3>
  <p> Posting your ad is completely free for a limited time period. So don't mis and get this valuable chance.</p>
  <a href="postadd.php" class="btn btn-default btn-lg">
    <span class="glyphicon glyphicon-search"></span> Post your ad
  </a>
</div>



  <?php
    include('footer.php');
  ?>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
  
  

  
