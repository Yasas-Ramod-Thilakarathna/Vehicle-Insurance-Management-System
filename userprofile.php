<?php include('header.php'); ?>
<?php 
session_start();

	include("dbconfig.php");
	include("functions.php");

	$user_data = check_login($conn);
   

?>
<link rel="stylesheet" type="text/css" href="css/userprofile.css">


<body>
<center>
    <br><br>

<table  class= "insList">
<tr>
    <th>Insurance Number</th>
    <th>Type Of Insurance</th> 
    <th>Vehicle Number</th>
    <th>Date Of Renewal</th>
<tr> 
<?php 
	
		$records = mysqli_query($conn,"select * from insurence");
		
		while($data = mysqli_fetch_array($records))
		{
     $logname = $user_data['user_name'];//logname = name in session 
     $name = $data['username'];//name = name in insurance table
		 if($logname==$name){
		 
		?>
		<tr>
			<td><?php echo $data['ins_nu']; ?></td>
			<td><?php echo $data['ins_type']; ?></td>
      <td><?php echo $data['vehicle_no']; ?></td>
			<td><?php echo $data['expire_date']; ?></td>
		
		</tr>
		<?php
			}
		}
		?>


<tr>
</table><br><br>
<a href="requestinsurance.php"><button class="button button1" >Request Insurance</button></a>
<button class="button button1"><b>Renew Insurance</b></button><br><br>
<br></br><br></br>
<form action="insertfeedback.php" method="POST">
<label> Name :</label> <input type="text" name="username"value="<?php echo $user_data['user_name']; ?> "><br><br>
<textarea name="feedback" cols="100" rows="8"></textarea><br><br>
<button type="submit" name="insert" class="button button1"><b>Send feedback</b></button>
</form>
</center>
  </div>
</div>
<br>
<br>

<?php include('footer.php'); ?>
 