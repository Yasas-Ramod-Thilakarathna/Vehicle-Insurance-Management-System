<?php
include('dbconfig.php');

$user_id=$_GET['updatepass']; //Getting insurance number from fetch page(ins nu is primary key)

?>

<!--Update form-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Password</title>

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
<center> 
   <!--No action.process in same page-->
  <form action="" method="post">
  <label>User ID:</label>
  <input type="text" id="userid" name="userid" value="<?php echo $user_id ?>"><br><br>
  <!--Display insurance number inside place holder(value=...)-->

  <label>Enter New Password:</label><!--Take inputs to update field-->
  <input type="text" id="newpass" name="newpass" value=""><br><br>
  <input type="submit" name="submit"></input>
  </center>
</form>
</div>

</body>
</html>
<?php

include('dbconfig.php');

if( isset($_POST['submit']) )//if user click submit button in form this will execute.
{
    //Get value from form
    $user_id=$_POST['userid'];
    $newpass=$_POST['newpass'];

    //SQL query to update data
    $sql="UPDATE users SET password = '$newpass' WHERE user_id = '$user_id'";
    if(mysqli_query($conn, $sql)){
      header("Location: " . "useraccount.php"); //if update success redirect to fetch page
        
       

    } else{
        echo "ERROR:Try again $sql. " //if error display error.
            . mysqli_error($conn);
    }

}    
      
?>
