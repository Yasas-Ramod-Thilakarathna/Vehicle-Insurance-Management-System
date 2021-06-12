<?php
include('dbconfig.php');

$insnu=$_GET['update']; //Getting insurance number from fetch page(ins nu is primary key)

?>

<!--Update form-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Claim Manage</title>


  <style>
form
{
	width:500px;
	margin:auto;
	padding:20px;
	background:#663366;
	font-size:14px;
	font-family:verdana;
	color:white;
  left      : 50%;
  top       : 50%;
  position  : absolute;
  transform : translate(-50%, -50%);
	
}

</style>

</head>
<body style="background-color:powderblue;">
   <!--No action.process in same page-->
   <center>
   <div class="updatedataformstyle">  
  <form action="" method="post" >
  <label>Insurance Number:</label>
  <input type="text" id="insnu" name="insnu" value="<?php echo $insnu ?>"><br><br>
  <!--Display insurance number inside place holder(value=...)-->

  <label>Update Status:</label><!--Take inputs to update field-->
    <select name="statusvalue">
      <option value="1">Pending</option>
      <option value="2">Accept</option>
      <option value="3">Reject</option>
    </select><br><br>

    <button type="submit" name="submit" >Update</button>
    <button type="cancel" name="cancel" >Cancel</button>
     
</form>
</div>
</center>

</body>
</html>
<?php

include('dbconfig.php');

if( isset($_POST['submit']) )//if user click submit button in form this will execute.
{
    //Get value from form
    $insnu=$_POST['insnu'];
    $stat=$_POST['statusvalue'];

    //SQL query to update data
    $sql="UPDATE claimdata SET stat = '$stat' WHERE ins_nu = '$insnu'";
    if(mysqli_query($conn, $sql)){
      header("Location: " . "claimmanage.php"); //if update success redirect to fetch page
        
       

    } else{
        echo "ERROR:Try again $sql. " //if error display error.
            . mysqli_error($conn);
    }

}
elseif( isset($_POST['cancel']) )
{
  header("Location: " . "claimmanage.php");
}   
      
?>














