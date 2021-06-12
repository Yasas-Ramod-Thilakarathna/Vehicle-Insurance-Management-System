
<?php

include('dbconfig.php');

if(isset($_GET['deleteuser'])){


    $deleteuser=$_GET['deleteuser']; 
    $sql = "DELETE FROM users WHERE user_id='$deleteuser'";
      
    if(mysqli_query($conn, $sql)){
        echo "Succes";
        header("Location: " . "usermanage.php"); 
       

    } else{
        echo "ERROR:Try again $sql. " 
            . mysqli_error($conn);
    }
 
}


?>