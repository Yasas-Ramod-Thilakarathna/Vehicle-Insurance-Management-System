<?php include('header.php'); ?>
<?php 
session_start();

	include("dbconfig.php");
	include("functions.php");

	$user_data = check_login($conn);
   

?>

<body>

<center>
<br>
<img src="icon/avatar.png" class="logo" width=100px; height=100px; alt="logo" ></a>
    <br>
	Hello, <?php echo $user_data['user_name']; ?><br>

   

    

<div class="sidenav">
  <a href="updatepassword.php?updatepass=<?php echo $user_data['user_id'] ?>">Change Password</a>
  <a href="deleteuser.php?deleteuser=<?php echo $user_data['user_id'] ?>">Delete Account</a>
  <a href="userprofile.php">My Insurance</a>
</div>

<div class="main"><br>
  <label>Full Name:</label>
  <label style="border: 1px solid" ><?php echo $user_data['user_name']; ?></label><br><br>
  <label>Email:</label>
  <label style="border: 1px solid" ><?php echo $user_data['email']; ?></label><br><br>
  <label>Contact Number:</label>
  <label style="border: 1px solid" ><?php echo $user_data['contacno']; ?></label>
 </div>
 <br>
 <a href="logout.php">Logout</a>
</center>
   
</body>

<?php include('footer.php'); ?>