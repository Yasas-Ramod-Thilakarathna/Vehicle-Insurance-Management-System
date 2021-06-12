<?php

    $p_ID = $_POST['p_ID'];
    $ins_name = $_POST['ins_name'];
    $ins_type = $_POST['ins_type'];
    $vehicle_cate= $_POST['vehicle_cate'];
    $min_grossAmount = $_POST['min_grossAmount'];
    $max_grossAmount = $_POST['max_grossAmount'];
    $start_date = $_POST['start_date'];
    $conditions = $_POST['conditions'];
    $description = $_POST['description'];

    
    $conn = new mysqli ('localhost', 'root','', 'ysn' );

    if($conn->connect_error) {

        die('Connection Failed : ' .$conn->connection_error);

    }else {

        $stmt = $conn->prepare("insert into insurance(p_ID, ins_name,ins_type, vehicle_cate, min_grossAmount,max_grossAmount,start_date, conditions, description)values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
        $stmt->bind_param("sssssssss",  $p_ID, $ins_name,  $ins_type, $vehicle_cate,$min_grossAmount, $max_grossAmount, $start_date ,$conditions, $description);
        $stmt->execute();
    
        echo "<h1>Insurance Successfully...</h1>";
        $stmt->close();
        $conn->close();


    }
   


?>