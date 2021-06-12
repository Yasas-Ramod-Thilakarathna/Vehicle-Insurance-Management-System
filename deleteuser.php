<?php
include('dbconfig.php');

$deleteuser=$_GET['deleteuser']; //Getting insurance number from fetch page(ins nu is primary key)

?>

<!--Update form-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete User</title>

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
  <form action="" method="post">
  <center>
  <label>User ID:</label>
  <input type="text" id="deleteuser" name="deleteuser" value="<?php echo $deleteuser ?>"><br><br>
  <!--Display insurance number inside place holder(value=...)-->

  <label>Are you sure want to delete account:</label><!--Take inputs to update field-->
  
 <input id="btns" type="submit" name="submit" value="Submit"> <input id="btns" type="submit" name="cancel" value="Cancel">
 </center>
  
</form>

</body>
</html>
<?php

include('dbconfig.php');

if( isset($_POST['submit']) )//if user click submit button in form this will execute.
{
    //Get value from form
    $deleteuser=$_POST['deleteuser'];
   
    $sql = "DELETE FROM users WHERE user_id='$deleteuser'";
      
    if(mysqli_query($conn, $sql)){
        echo "Succes";
        header("Location: " . "logout.php"); 
       

    } else{
        echo "ERROR:Try again $sql. " 
            . mysqli_error($conn);
    }

}  
elseif( isset($_POST['cancel']) ){
    header("Location: " . "useraccount.php");

}  
      
?>






