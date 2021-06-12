<?php

    include("connection.php")

    // Check if form is submitted for insurance update, then redirect to insurance after update
    if(isset($_GET['Edit']))
    {	
        $p_ID = $_GET['p_ID'];
        $ins_name = $_GET['ins_name'];
        $ins_type = $_GET['ins_type'];
        $vehicle_cate= $_GET['vehicle_cate'];
        $min_grossAmount = $_GET['min_grossAmount'];
        $max_grossAmount = $_GET['max_grossAmount'];
        $start_date = $_GET['start_date'];
        $conditions = $_GET['conditions'];                     
        $description = $_GET['description'];
            
        // update insurance data
        $sql = mysqli_query($connection, "UPDATE insurance SET ins_name='$ins_name',ins_type='$ins_type', vehicle_cate='$vehicle_cate', min_grossAmount='$min_grossAmount'
                    ,max_grossAmount='$max_grossAmount',start_date='$start_date',conditions='$conditions',description='$description' WHERE p_ID='$p_ID' ");
        if(mysqli_query($connection,$sql)){
            // Redirect to Insurance page to display updated insurance in list
            header("Location: insurance.php");
        } else{
            echo "ERROR:Try again. " //if error display error.
                . mysqli_error($connection);
                header("Location: insurance.php");
            }
        

          //close connection
          mysqli_close($condition);  
    }
    ?>
    