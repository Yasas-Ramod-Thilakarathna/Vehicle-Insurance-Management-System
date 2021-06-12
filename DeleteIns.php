<?php

include('dbconfig.php');

if(isset($_GET['Delete'])){


    $p_ID=$_GET['Delete'];
    $sql = "DELETE FROM insurance_policy WHERE p_ID='$p_ID'";
      
    if(mysqli_query($conn, $sql)){
        echo "Success";
        header("Location: " . "insurance_policy.php"); 
       

    } else{
        echo "ERROR:Try again $sql. " 
            . mysqli_error($conn);
    }
      




 
}


?>