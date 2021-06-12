<?php 

session_start();

  include('dbconfig.php');
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$sql = "SELECT * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($conn, $sql);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: useraccount.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
    
	}
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/loginform.css">
  <title>Login Form </title>
</head>
<body background="images/background.jpeg">
  <div class="login-wrapper">
    <form method="post" class="form">
      <img src="icon/avatar.png" alt="">
      <h2>Login</h2>
      <div class="input-group">
        <input type="text" name="user_name" id="loginUser" required>
        <label for="loginUser">Username</label>
      </div>
      <div class="input-group">
        <input type="password" name="password" id="loginPassword" required>
        <label for="loginPassword">Password</label>
      </div>
      <input type="submit" value="Login" class="submit-btn"> <br> <a href="adminlogin.php" class="signUp">Admin Login</a><br>
      <a href="#forgot-pw" class="forgot-pw">Forgot Password?</a>
      <p class="sign_up">Need and account?<a href="signUp.php" class="signUp">Sign up</a></p>
    </form>
    <!--forgot password-->
    <div id="forgot-pw" >
      <form action="" class="form">
        <a href="#" class="close">&times;</a>
        <h2>Reset Password</h2>
        <div class="input-group">
          <input type="email" name="email" id="email" required>
          <label for="email">E-mail</label>
        </div>
        <input type="submit" value="Submit" class="submit-btn" onclick="myFunction()">
       <script>
         function myFunction() {
           alert("Reset Link Sended to the email!");
}
</script>>
      </form>
    </div>
  </div>
</body>
</html>