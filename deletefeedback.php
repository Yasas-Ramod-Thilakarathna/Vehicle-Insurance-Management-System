
<?php

include('dbconfig.php');

if(isset($_GET['feedbackid'])){


    $feedbackid=$_GET['feedbackid']; 
    $sql = "DELETE FROM users WHERE id='$feedbackid'";
      
    if(mysqli_query($conn, $sql)){
        echo "Succes";
        header("Location: " . "feedbackmanage.php"); 
       

    } else{
        echo "ERROR:Try again $sql. " 
            . mysqli_error($conn);
    }
 
}


?>