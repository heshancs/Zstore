
<?php

session_start();
include('connection.php');

if(!isset($_SESSION['username'])){
    header("Location: login.php");
}





if (isset($_POST['vehiclepost'])) {

 if(empty($_POST['vprice']) || empty($_POST['vmodel'])  || empty($_POST['vcondition']) || empty($_POST['vdescription']) || empty($_POST['vyear']) || empty($_POST['vbrand'])){
       header("Location: addvehicle.php?fill=false");

 }else{

        if (!is_numeric($_POST['vyear']) || !is_numeric($_POST['vprice']) || !is_numeric($_POST['vengine']))
        {
             header("Location: addvehicle.php?num=false");
       }else{
            $vdisplayname = $_POST['vdisplayname'];       
             $vtype = $_POST['vtype'];
             $vbrand = $_POST['vbrand'];
             $vmodel = $_POST['vmodel'];
             $vprice = $_POST['vprice'];
             $vengine = $_POST['vengine'];
             $vyear = $_POST['vyear'];
             $vcondition = $_POST['vcondition'];
             $vdescription = $_POST['vdescription'];       
             $today = date("Y-m-d");
             $userid = $_SESSION['userid'];
             $file1 = addslashes(file_get_contents($_FILES['image1']['tmp_name']));
             $file2 = addslashes(file_get_contents($_FILES['image2']['tmp_name']));
             $file3 = addslashes(file_get_contents($_FILES['image3']['tmp_name']));
             $file4 = addslashes(file_get_contents($_FILES['image4']['tmp_name']));
             $file5 = addslashes(file_get_contents($_FILES['image5']['tmp_name']));





            $auth2 = "INSERT INTO vehicle (vdisplayname,vtype,vbrand,vmodel,vprice,vengine,vyear,vcondition,vdescription,today,userid,vimage1,vimage2,vimage3,vimage4,vimage5) VALUES('$vdisplayname','$vtype','$vbrand','$vmodel','$vprice','$vengine','$vyear','$vcondition','$vdescription','$today','$userid','$file1','$file2','$file3','$file4','$file5')"; 
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


  