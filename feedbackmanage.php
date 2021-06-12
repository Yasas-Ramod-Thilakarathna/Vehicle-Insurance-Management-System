<?php include('header.php'); ?>
<?php 
session_start();

	include("dbconfig.php");
	include("adminfunctions.php");

	$user_data = check_login($conn);
   

?>
<link rel="stylesheet" type="text/css" href="css/insStyles.css">
<link rel="stylesheet" type="text/css" href="css/adminNav.css"> <!--Admin vertical nav-->

 <!--navi begin-->
<table  class="content"  >
        <tr>
            <td class="vertical">
            <!--admin vertical navi-->
                <nav>
                    <a href="usermanage.php"><i class="fa fa-group" style="font-size:24px"></i> User Details</a><br>
                    <a href="claimmanage.php"><i class="fa fa-angellist" style="font-size:24px"></i> Claim </a><br>
                    <a href="feedbackmanage.php"><i class="fa fa-comments-o" style="font-size:24px"></i> Feedback </a><br>
                    <a href="viewinsurancerequests.php"><i class="fa fa-handshake-o" style="font-size:24px"></i> Policy Holder </a><br>
                    <a href="insurancepolicy.php"><i class="fa fa-automobile" style="font-size:24px"></i> Insurance Policy</a><br>
                    <a href="adminlogout.php">Logout</a>
                </nav> 
            </td>   
            <td>
                <main>
                    <h1>Feedback Manage </h1>
                    <table  class= "insList">
                        <tr>
                            <th>ID</th>
                            <th>User Name</th>
                            <th>Feedback</th>
                            <th>Action</th>
                        </tr>
                        <?php
include('dbconfig.php');

$records = mysqli_query($conn,"select * from userfeedback"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['username']; ?></td>
    <td><?php echo $data['feedback']; ?></td>
    <td><a href="deletefeedback.php?feedbackid=<?php echo $data['id']; ?>">Delete Feedback</a></td>
  </tr>	
<?php
}
?>

                        </table>    
                </main>
            </td>    
        </tr> 
    </table>   

<?php include('footer.php'); ?>                        

