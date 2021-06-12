<?php
  include('dbconfig.php');
      
    if (isset($_POST['insert']))   {
        //variable and value parsing
		$ins_no=$_POST['insurancenumber'];
		$contact_no=$_POST['contactnumber'];
		$locat=$_POST['location'];
		$descrip=$_POST['description'];
		$photo=$_FILES['photo']['name'];
		$defaultstat=1;
          
        //insert data
        $sql = "INSERT INTO claimdata  VALUES ('$ins_no','$contact_no','$locat','$descrip','$photo',$defaultstat)";
        //only the image name have been saved in database
          
        if(mysqli_query($conn, $sql)){
            move_uploaded_file($_FILES['photo']['tmp_name'],'uploads/'.$photo);//store claim images in uploads folder 
            header("Location: " . "claim.php");
  
        } else{
            echo "ERROR:Try again $sql. " 
                . mysqli_error($conn);
                header("Location: " . "claim.php");
        }
          
        
        // Close connection
        mysqli_close($conn);
    }
        ?>

        

      
          
        
       
        