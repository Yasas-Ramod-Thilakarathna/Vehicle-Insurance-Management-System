<?php

include('dbconfig.php');

if(isset($_GET['deleteinsurance'])){


    $deleteinsurance=$_GET['deleteinsurance'];
    $sql = "DELETE FROM requestinsurance WHERE nic='$deleteinsurance'";
      
    if(mysqli_query($conn, $sql)){
        echo "Succes";
        header("Location: " . "viewinsurancerequests.php"); 
       

    } else{
        echo "ERROR:Try again $sql. " 
            . mysqli_error($conn);
    }
      




 
}


?>