
<?php include('header.php'); ?>

<body>

  <link rel="stylesheet" type="text/css" href="css/claim.css">
  <script src="js/newform.js"></script>
  
    <div class="container">
        <img src="images/claimbg.jpg" alt="" style="width:100%">
        
        <button class="open-button" onclick="openForm()">Claim Here</button> <!--claim button-->
       
        <div class="centered">
            <h2>Was the vehicle involved in accident?
            Is the agent late?</h2><br>
            <h4>No need to worry about that anymore.
            YSN Insurance has introduced the latest 
            claim method <br>to our valuble customers.</h4><br>
            <h4>Personal Accident Cover</h4><br>
            <h3>This secures your family's future in the event of a permanent disablement or in the unfortunate circumstance of your death. You can get coverage of up to 2 lakhs for any damage caused to the driver while travelling, mounting, or dismounting from the car. Some insurers also offer optional accidental covers for co-passengers.</h3><br>
            <h4>Third Party Legal Liability</h4><br>
            <h3>Mandatory by law, this cover protects you against the legal liability of accidental damages that have resulted in permanent injury or death of a third party. It also covers damage caused to any surrounding property.</h4>
        </div>

      </div>

<div class="form-popup" id="myForm">
  <form action="insert.php" method="POST" enctype="multipart/form-data" class="form-container">
    <h2>Claim Form</h2><br>

    <label for="insurancenumber"><b>Insurance Number</b></label>
    <input type="text" placeholder="Enter Insurance Number" name="insurancenumber" pattern="[y][s][n][0-9]{7}" required>

    <label for="contacnumber"><b>Contact Number</b></label>
    <input type="text" placeholder="Contac Number" name="contactnumber" pattern="[0][0-9]{9}"required>

    <label for="location"><b>Location</b></label>
    <input type="text" placeholder="Location" name="location" required>

    <label for="description"><b>Description</b></label>
    <input type="text" placeholder="Description" name="description" required>

    <label for="uploadphoto"><b>Upload Photo</b></label><br><br>
    <input type="file" name="photo" required><br><br>

   

    <button type="submit" name="insert" class="btn">Submit</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>

  </form>

</div>
</body>

<!-- Footer -->
<?php include('footer.php'); ?>
