<!--header-->
<?php include('header.php'); ?>
<link rel="stylesheet" type="text/css" href="css/requestinsurance.css">
<div class="back">
        <!--request form-->
        <div class="request">
            
            <form action="insertinsurencedetails.php" method="POST" >
            <br><center><h4>Request for Insurance</h4></center><br>
                <fieldset id="field 1">
                    <legend>Personal details*</legend>
                    <br>
                    <lable>Full Name:</lable>
                    <input type="text" name="fname"><br>
                    <label> Name with Initials:</label>
                    <input type="text" name="iname"><br>
                    <label>NIC: </label>
                    <input type="text" name="NIC"><br>
                    <label>E_mail:</label>
                    <input type="text" name="email"><br>
                    <label>Address:</label>
                    <input type="text" name="address"><br>
                    <input type="text" name="city" placeholder="City"><br>
                    <input type="text" name="pcode" placeholder="Postal code"><br>
                </fieldset>
                <br>
                <fieldset id="field 2">
                    <legend>Insurance details*</legend>
                    <br>
                    <div class="ipolicy">
                    <label>Select Insurance policy</label>
                        <select id="cars" name="ipolicy">
                        <option value="1">Rider insurance</option>
                        <option value="2">Tuk Tuk insurance</option>
                        <option value="3">Car insurance</option>
                        <option value="4">Commercial insurance</option>
                        </select>
                    </div>
                    <div class="itype"><label>Insurance type</label><br>
                    <select id="cars" name="itype">
                        <option value="1">Full</option>
                        <option value="2">Third Party</option>
                        </select>    
                      
                    </div>
                </fieldset>
                    <br>
                <fieldset id="field 3">
                    <legend>Vehicle details*</legend>
                    <br>
                    <label>Vehicle number:</label>
                    <input type="text" name="vnum"><br> 
                    <label>Chassis number:</label>
                    <input type="text" name="cnum"><br> 
                    <label>Engine number:</label>
                    <input type="text" name="enum"><br> 
                    <label>CR number:</label>
                    <input type="text" name="crnum"><br>
                </fieldset>
                <br>
                <input id="btnr" type="reset">
                <input id="btns" type="submit" name="insert"value="Submit">
            </form>
            
        </div>
</div>
<!-- Footer -->
<?php include('footer.php'); ?>