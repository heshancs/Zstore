<?php
include('connection.php');
include('header.php');
include('navbar.php');

    if(isset($_SESSION['username'])){
    
        $id=$_SESSION['userid'];

        $sq = "SELECT * FROM homeandlearn WHERE userid='$id'";
        $result = mysqli_query($conn,$sq);
        include('hcard.php');

        $sq1 = "SELECT * FROM electronic WHERE userid='$id'";
        $result = mysqli_query($conn,$sq1);
        include('ecard.php');

        $sq2 = "SELECT * FROM vehicle WHERE userid='$id'";
        $result = mysqli_query($conn,$sq2);
        include('vcard.php');
      
 
    
    }else{
        header("Location: register.php");
    }
    
    include('footer.php');
    
    ?>
    