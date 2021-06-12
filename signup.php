
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/LoginForm.css">
    <title>Sign up</title>
</head>
<body background="images/background.jpeg">
    <div class="SignUp-wrapper">
        <form action="" method="post" class="form">
          <img src="icon/avatar.png" alt="">
          <h2>Sign up</h2>
          <div class="input-group">
            <input type="text" name="user_name" id="UserName" required>
            <label for="UserName">Username</label>
          </div>

          <div class="input-group">
            <input type="email" name="email" id="email"  pattern="[a-zA-Z0-9._%+-]+@[a-z0-9]+\.[a-z]{2,3}"required>
            <label for="email">Email</label>
          </div>

          <div class="input-group">
            <input type="contacno" name="contacno" id="contacno"  pattern="[0][0-9]{9}" required>
            <label for="contacno">Contac Number</label>
          </div>
         
          <div class="input-group">
            <input type="password" name="password" id="SignUpPassword"  pattern="[A-Za-z0-9]{5,8}" required>
            <label for="SignUpPassword">Password</label>
          </div>
         
          <input type="submit" value="SignUp" name="signUp" class="submit-btn">
          <p class="sign_in">Already have an account?<a href="login.php" class="signUp">Sign in</a></p>
        </form>
</body>
</html>

<?php 
session_start();

if(isset($_POST['signUp']))
{ 
  include("dbconfig.php");
	include("functions.php");

   //something was posted
    $user_id = random_num(20);
    $email=$_POST['email'];
    $user_name = $_POST['user_name'];
    $contacno=$_POST['contacno'];
    $password = $_POST['password'];

   //save to database
   $sql = "INSERT INTO users  VALUES ('','$user_id','$email','$user_name','$contacno','$password')";
   //only the image name have been saved in database
     
   if(mysqli_query($conn, $sql)){
       echo"Success";//store claim images in uploads folder 
       header("Location: login.php");

   } else{
       echo "ERROR:Try again $sql. " 
           . mysqli_error($conn);
   }
     
   
   // Close connection
   mysqli_close($conn);
}
   ?>