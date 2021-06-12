<?php
  include('dbconfig.php');
  
    
    if (isset($_POST['insert']))   {
        //variable and value parsing
		$username=$_POST['username'];
		$feedback=$_POST['feedback'];

	
          
        //insert data
        $sql = "INSERT INTO userfeedback  VALUES ('','$username','$feedback')";
        //only the image name have been saved in database
          
        if(mysqli_query($conn, $sql)){
            header("Location: " . "userprofile.php");
  
        } else{
            echo "ERROR:Try again $sql. " 
                . mysqli_error($conn);
              
        }
          
        
        // Close connection
        mysqli_close($conn);
    }
        ?>

        