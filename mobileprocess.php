
<?php

session_start();
include('connection.php');

if(!isset(S_SESSION['username'])){
    header("Location: login.php");
}





if (isset($_POST['mobilesubmit'])) {

 if(empty($_POST['eprice']) || empty($_POST['emodel']) ||empty($_POST['edistric']) || empty($_POST['econdition']) || empty($_POST['earea']) || empty($_POST['edescription']) || empty($_POST['eyear']) ||empty($_POST['ebrand'])){
       header("Location: addmobile.php?fill=false");

 }else{

        if (!is_numeric($_POST['eyear']) || !is_numeric($_POST['eprice']))
        {
             header("Location: addmobile.php?num=false");
       }else{
                     
             $eprice = $_POST['eprice'];
             $emodel = $_POST['emodel'];
             $econdition = $_POST['econdition'];
             $eyear = $_POST['eyear'];
             $edistric = $_POST['edistric'];
             $ebrand = $_POST['ebrand'];
             $edescription = $_POST['edescription'];
             $earea = $_POST['earea'];
             $today = date("Y-m-d");
             $userid = $_SESSION['userid'];
             $file1 = addslashes(file_get_contents($_FILES['image1']['tmp_name']));
             $file2 = addslashes(file_get_contents($_FILES['image2']['tmp_name']));
             $file3 = addslashes(file_get_contents($_FILES['image3']['tmp_name']));
             $file4 = addslashes(file_get_contents($_FILES['image4']['tmp_name']));
             $file5 = addslashes(file_get_contents($_FILES['image5']['tmp_name']));




            $auth2 = "INSERT INTO electronic (eprice,emodel,econdition,eyear,edistric,ebrand,edescription,earea,userid,eimage1,edate,eimage2,eimage3,eimage4,eimage5) VALUES('$eprice','$emodel','$econdition','$eyear','$edistric','$ebrand','$edescription','$earea','$userid','$file1','$today','$file2','$file3','$file4','$file5')"; 
            $result1 = mysqli_query($conn,$auth2);

    
            if($result1){
                header("Location: postadd.php?success=true");
            }else{
    
                header("Location: test.php");
            }
        }
   

    
   }
    


}

?>


  