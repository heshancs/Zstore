
<?php

session_start();
include('connection.php');

if(!isset(S_SESSION['username'])){
    header("Location: login.php");
}





if (isset($_POST['homesubmit'])) {

    if(empty($_POST['price']) || empty($_POST['type']) ||empty($_POST['distric']) ||empty($_POST['size']) ||empty($_POST['town']) ||empty($_POST['description'])){
        header("Location: addhome.php?form=false");

    }else{

        if (!is_numeric($_POST['size']) || !is_numeric($_POST['price']))
        {
            header("Location: addhome.php?num=false");
        }else{
                     
             $price = $_POST['price'];
             $type = $_POST['type'];
             $distric = $_POST['distric'];
             $size = $_POST['size'];
             $description = $_POST['description'];
             $town = $_POST['town'];
             $today = date("Y-m-d");
             $userid = $_SESSION['userid'];
             $file1 = addslashes(file_get_contents($_FILES['image1']['tmp_name']));
             $file2 = addslashes(file_get_contents($_FILES['image2']['tmp_name']));
             $file3 = addslashes(file_get_contents($_FILES['image3']['tmp_name']));
             $file4 = addslashes(file_get_contents($_FILES['image4']['tmp_name']));
             $file5 = addslashes(file_get_contents($_FILES['image5']['tmp_name']));




            $auth2 = "INSERT INTO homeandlearn (htype,hsize,hdistric,harea,hdescription,hprice,userid,hdate,himage1,himage2,himage3,himage4,himage5) VALUES('$type','$size','$distric','$town','$description','$price','$userid','$today','$file1','$file2','$file3','$file4','$file5')"; 
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


  