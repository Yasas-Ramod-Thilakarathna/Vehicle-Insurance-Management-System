<?php
  
        $conn = mysqli_connect("localhost", "root", "", "request");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all values from the form data(input)
        $fname =  $_POST['fname'];
        $iname =  $_POST['iname'];
        $NIC =  $_POST['NIC'];
        $email =  $_POST['email'];
        $address =  $_POST['address'];
        $city =  $_POST['city'];
        $pcode =  $_POST['pcode'];

        $ipolicy =  $_POST['ipolicy'];
        $itype =  $_POST['itype'];

        $vnum =  $_POST['vnum'];
        $cnum =  $_POST['cnum'];
        $enum =  $_POST['enum'];
        $crnum =  $_POST['crnum'];
          
        // Performing insert query execution
        $sql = "INSERT INTO requestInsurance  VALUES ('$fname', 
            '$iname','$NIC','$email','$address','$city','$pcode','$ipolicy','$itype','$vnum','$cnum','$enum','$crnum')";
          
        if(mysqli_query($conn, $sql)){
            echo "data stored in a database successfully."; 
            header("Location: " . "http://localhost/IWT%20final%20project/request.php");
          
  
        } else{
            echo "ERROR:Try again $sql. " 
                . mysqli_error($conn);
                header("Location: " . "http://localhost/IWT%20final%20project/request.php");

        }
          
        
        // Close connection
        mysqli_close($conn);

        ?>