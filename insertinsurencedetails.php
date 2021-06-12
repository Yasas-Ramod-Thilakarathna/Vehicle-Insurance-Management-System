<?php
  include('dbconfig.php');
      
    if (isset($_POST['insert']))   {
        //variable and value parsing
        $NIC=$_POST['NIC'];
		$fname=$_POST['fname'];
        $iname=$_POST['iname'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $city=$_POST['city'];
        $pcode=$_POST['pcode'];
        $inspolicy=$_POST['ipolicy'];
        $instype=$_POST['itype'];
        $vnum=$_POST['vnum'];
        $cnum=$_POST['cnum'];
        $enum=$_POST['enum'];
        $crnum=$_POST['crnum'];
        $defaultstat=1;
          
        //insert data
        $sql = "INSERT INTO requestinsurance  VALUES ('$NIC','$fname','$iname','$email',' $address','$city','$pcode','$inspolicy',' $instype','$vnum','$cnum','$enum','$crnum',' $defaultstat')";
        //only the image name have been saved in database
          
        if(mysqli_query($conn, $sql)){
            echo "Succes";
            header("Location: " . "insurance.php");
  
        } else{
            echo "ERROR:Try again $sql. " 
                . mysqli_error($conn);
                header("Location: " . "insurance.php");
        }
          
        
        // Close connection
        mysqli_close($conn);
    }
        ?>