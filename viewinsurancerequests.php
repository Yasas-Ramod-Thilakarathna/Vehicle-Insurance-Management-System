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
            <!--Insurance policy list-->
            <td>
                <main>
                    <h1>Insurance Request Manage </h1>
                    <table  class= "insList">
                    <tr>
        <th>NIC</th>
        <th>Full Name</th>
        <th>Name With Initials</th>
        <th>email</th>
        <th>Address</th>
        <th>City</th>
        <th>Postal code</th>
        <th>Ins Policy</th>
        <th>Ins Type</th>
        <th>Vehicle No</th>
        <th>Chassis No</th>
        <th>Engine No</th>
        <th>CR No</th>
        <th colspan="3">Status</th>
        
      
    </tr>
    <?php
include('dbconfig.php');

$records = mysqli_query($conn,"select * from requestinsurance"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['nic']; ?></td>
    <td><?php echo $data['fname']; ?></td>
    <td><?php echo $data['iname']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['address']; ?></td>
    <td><?php echo $data['city']; ?></td>
    <td><?php echo $data['pcode']; ?></td>
    <td><?php echo $data['ipolicy']; ?></td>
    <td><?php echo $data['itype']; ?></td>
    <td><?php echo $data['vnum']; ?></td>
    <td><?php echo $data['cnum']; ?></td>
    <td><?php echo $data['enum']; ?></td>
    <td><?php echo $data['crnum']; ?></td>
    <td><?php echo $data['stat']; ?></td>


    <td><a href="acceptinsurancepolicy.php?acceptinsurance=<?php echo $data['nic'] ?>">Update status</a></td>
    <td><a href="deleteinsurancerequest.php?deleteinsurance=<?php echo $data['nic']; ?>">Delete claim req</a></td>
  </tr>	
<?php
}
?>           
                       
                    </table>    
                </main>
            </td>    
        </tr> 
    </table>    
    
    
<!-- Footer -->
<?php include('footer.php'); ?>