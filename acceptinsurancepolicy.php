<?php
include('dbconfig.php');

$nic=$_GET['acceptinsurance']; //Getting insurance number from fetch page(ins nu is primary key)

?>

<!--Update form-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accept Insurance</title>
</head>
<body>
   <!--No action.process in same page-->

   <div class="updatedataformstyle">  
  <form action="" method="post" >
  <label>NIC:</label>
  <input type="text" id="nic" name="nic" value="<?php echo $nic ?>"><br><br>
  <!--Display insurance number inside place holder(value=...)-->

  <label>Accept/Reject:</label><!--Take inputs to update field-->
    <select name="insaction">
      <option value="1">Pending</option>
      <option value="2">Accept</option>
      <option value="3">Reject</option>
    </select><br><br>
  <input type="submit" name="submit"></input>
</form>
</div>

</body>
</html>
<?php

include('dbconfig.php');

if( isset($_POST['submit']) )//if user click submit button in form this will execute.
{
    //Get value from form
    $nic=$_POST['nic'];
    $stat=$_POST['insaction'];

    //SQL query to update data
    $sql="UPDATE requestinsurance SET stat = '$stat' WHERE nic='$nic'";
    if(mysqli_query($conn, $sql)){
      header("Location: " . "viewinsurancerequests.php"); //if update success redirect to fetch page
        
       

    } else{
        echo "ERROR:Try again $sql. " //if error display error.
            . mysqli_error($conn);
    }

}    
      
?>
