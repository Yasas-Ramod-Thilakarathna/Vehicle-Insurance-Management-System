<?php include('header.php'); ?>
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
                </nav> 
            </td>      
            <!-- Update Insurance Form-->
            <td>
                
                <main>
                    <h1>Update Insurance Policy<span><a href="insurancepolicy.php"><button> Back to Insurance Management</button></a></span></h1>

                    
                    
                        <div class="updateINS">
                            <form action="connectModify.php" method="post" class= "insList">
                                <label for="">Policy No : </label>
                                <input type="text" name="p_ID" id="p_ID"  ><br><br>

                                <label for="">Insurance Name : </label>
                                <input type="text" name="ins_name" id="ins_name"  ><br><br>

                                <label for="">Insurance Type : </label>
                                <input type="text" name="ins_type" id="ins_type" ><br><br>

                                <label for="">Vehicle Category : </label>
                                <input type="text" name="vehicle_cate" id="vehicle_cate" ><br><br>
                    
                                <label for="">Min_grossAmount : </label>
                                <input type="number" name="min_grossAmount" id="min_grossAmount" min="0.00" step="0.01" ><br><br>
                            
                                <label for="">Max_grossAmount : </label>
                                <input type="number" name="max_grossAmount" id="max_grossAmount" min="0.00" step="0.01" ><br><br>
                            
                                <label for="">Start date : </label>
                                <input type="date" name="start_date" id="start_date" ><br><br>

                                <label for="">Conditions : </label>
                                <textarea name="conditions" id="conditions" cols="90" rows="6" ></textarea><br><br>

                                <label for="">Description : </label>
                                <textarea name="description" id="description" cols="90" rows="6" ></textarea><br><br>

                            <!--Display insurance policy details inside placeholder(value=...)-->

                                <label for="">&nbsp;</label>
                                <button type="submit" name="submit" id="submit">Save</button>
                            </form>
                        </div>
                   
                </main>       
            </td>
        </tr>
    </table>    
    

<!-- Footer main -->
<?php include('footer.php'); ?>