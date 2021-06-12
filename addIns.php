
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Insurance</title>

     <!-- style sheet links -->
    <link rel="stylesheet" type="text/css" href="css/insStyles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="css/Header footer.css"><!--Header footer-->
    <link rel="stylesheet" type="text/css" href="css/adminNav.css"> <!--Admin vertical nav-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--Admin vertical nav-->
    <link rel="stylesheet" type="text/css" href="css/addIns.css"><!--Add Insurance -->

    <!-- Devide header to two sections -->

    <div class="headerer-dec"></div>
    <section class="headerdevide">

        <div class="headerdevide1"><!--Logo side-->
            <div class="logoalign"></div>
                <a href="Header footer.html"><img src="Header-Footer icon/aia.png" class="logo" width=210px; height=36px; alt="logo" ></a>
            </div>
        </div>

        <div class="headerdevide1"><!--Login side-->
        <div class="loginalign">
            <img src="Header-Footer icon/log.png" class="logo" width="40px" height="40px" alt="logo" >
        </div>
        </div>

    </section>
    <!-- End of header devide -->
</head>    

<body>  
    
<!--Navigation bar-->
<ul div class="navi">
        
        <li div class="navi"> <a href="Header footer.html"> Home </a> </li>
        <li div class="navi"> <a href="#"> Insurance </a> </li>
        <li div class="navi"> <a href="claim.php"> Claim </a> </li>
        <li div class="navi"> <a href="About Us.html"> About Us </a> </li>
        <li div class="navi"> <a href="#"> Contact Us </a> </li>
        <!--Navigation bar-->

        <div class="search">
        <form class="example" action="action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </search>
        
    </navi>

    </ul>
    
    <table class="content" >
        <tr >
            <td class="vertical">
            <!--admin vertical navi-->
                <nav>
                    <a href=""><i class="fa fa-group" style="font-size:24px"></i> User Details</a><br>
                    <a href=""><i class="fa fa-angellist" style="font-size:24px"></i> Claim </a><br>
                    <a href=""><i class="fa fa-comments-o" style="font-size:24px"></i> Feedback </a><br>
                    <a href=""><i class="fa fa-handshake-o" style="font-size:24px"></i> Policy Holder </a><br>
                    <a href=""><i class="fa fa-automobile" style="font-size:24px"></i> Insurance Policy</a><br>
                </nav> 
            </td>      
            <!-- Add Insurance Form-->
            <td>
                <main>
                    <h1>Add New Insurance <span><a href="insurance.php"><button> Back to Insurance Management</button></a></span></h1>

                
                    <form action="connectINS.php" method="post" class="insForm">

                        <p>
                            <label for="">Policy No : </label>
                            <input type="text" name="p_ID" id="p_ID" placeholder="Insurance Policy No" required>
                        </p>

                        <p>
                            <label for="">Insurance Name : </label>
                            <input type="text" name="ins_name" id="ins_name" placeholder="Insurance Name" required>
                        </p>

                        <p>
                            <label for="">Insurance Type : </label>
                            
                            <input type="text" name="ins_type" id="ins_type" placeholder="Insurance Name" required>
                            
                        </p>

                        <p>
                            <label for="">Vehicle Category : </label>
                            <input type="text" name="vehicle_cate" id="vehicle_cate" placeholder="Full Insurance / Third party Insurance" required>
                        </p>

                        <p>
                            <label for="">Min_grossAmount : </label>
                            <input type="number" name="min_grossAmount" id="min_grossAmount" min="0.00" step="0.01" placeholder="LKR : xxxx.xx" required>
                        </p>

                        <p>
                            <label for="">Max_grossAmount : </label>
                            <input type="number" name="max_grossAmount" id="max_grossAmount" min="0.00" step="0.01" placeholder="LKR : xxxxxx.xx" required>
                        </p>
                        
                        <p>
                            <label for="">Start date : </label>
                            <input type="date" name="start_date" id="start_date" required>
                        </p>

                        <p>
                            <label for="">Conditions : </label>
                            <textarea name="conditions" id="conditions" cols="90" rows="6" placeholder="Add Conditions...."  required></textarea>
                        </p>

                        <p>
                            <label for="">Description : </label>
                            <textarea name="description" id="description" cols="90" rows="6" placeholder="Add Description...."  required></textarea>
                        </p>

                        <p>
                            <label for="">&nbsp;</label>
                            <button type="submit" name="submit" id="submit">Save</button>
                        </p>




                    </form>                   
                </main>
            </td>    
        </tr> 
        
    </table>
    
    <!-- Footer main -->
    <div class="footer-dec"></div>
    <footer>
        <section class="footerdevide">
        <div class="footerdevide1">
            <h2 class="footer-title">Quick Links</h2>
            <!--<ul>-->
            <br><br>
            <a href="index.html">Home</a>  <br><br><br>
          <a href="insurance.php">Insurance</a>  <br><br><br>
          <a href="claim.php"> Claim</a>  <br><br><br>
          <a href="aboutus.php">About Us</a></li><br><br><br>
          <a href="contactus.php">Contact Us</a></li>
            <!--  </ul> -->
        </div>
        <div class="footerdevide1">
            <h2 class="footer-title">Contact US</h2>
            
            <address>
                <br><br>
                <a href="mailto:ashanknimsara@gmail.com">ashanknimsara@gmail.com</a><br><br><br><br>
                <a href="tel:+13115552368">071-8980895</a>
            </address>
            
            
        </div>
        <div class="footerdevide1">
            <h2 class="footer-title"></h2>
            <ul>
            <br>

            <a href ="https://www.instagram.com/nimsara.99/"><img src="Header-Footer icon/intt.png" width="50px" height="50px" hspace="1" align="center" alt="instagram" ></a> 
            <a href ="https://www.facebook.com/ashan.kavinda.1257"><img src="Header-Footer icon/fbb.png" width="50px" height="50px" hspace="1" align="center"alt="facebook" ></a>  
            <a href ="https://wa.link/2271zy"><img src="Header-Footer icon/wtt.png" width="46px" height="46px" hspace="1" align="center"  >
            


            </ul>
        
        </section>
    </footer>     
            
</body>
</html>