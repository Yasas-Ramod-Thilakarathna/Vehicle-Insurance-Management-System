<?php

include('dbconfig.php');

if(isset($_GET['delete'])){


    $ins_nu=$_GET['delete'];
    $sql = "DELETE FROM claimdata WHERE ins_nu='$ins_nu'";
      
    if(mysqli_query($conn, $sql)){
        echo "Succes";
        header("Location: " . "claimmanage.php"); 
       

    } else{
        echo "ERROR:Try again $sql. " 
            . mysqli_error($conn);
    }
      




 
}


?>