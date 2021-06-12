
<!DOCTYPE html>
    <head>
        <title>Payment</title>
        <link rel="stylesheet" href="css/payment.css">
        
            <form action="Paymentdetails.php" method="post">
                <div class = "mid">
                    <h1>ENTER YOUR CARD DETAILS</h1>
                    <input type ="text" placeholder="Card Holeder Name" class = "cardholder" name="name" required><br>
                    <input type = "text"placeholder="Card Number" class = "cardnumber" name="no" required>
                     <h3 class="date">Expire Date</h3> 
                     
                     <select name = "month" class = "months" required>
                         <option value="Jan">01</option>
                         <option value="Feb">02</option>
                         <option value="Mar">03</option>
                         <option value="Apr">04</option>
                         <option value="May">05</option>
                         <option value="Jun">06</option>
                         <option value="Jul">07</option>
                         <option value="Aug">08</option>
                         <option value="Sep">09</option>
                         <option value="Oct">10</option>
                         <option value="Nov">11</option>
                         <option value="Dec">12</option>
                      </select>

                    <select name = "year" class = "year" required>
                        <option value = "2021">2021</option>
                        <option value = "2022">2022</option>
                        <option value = "2023">2023</option>
                        <option value = "2024">2024</option>
                        <option value = "2025">2025</option>
                    </select>

                    <input type= "text" placeholder="CVV" class = "cvv" name="cvv" required>
                    <br>
                    
                    <input type = "submit"  value = "Finish & Pay" placeholder="BUY NOW" name="buynow" class = "butn">
                    </div>

                    
                   


                            
                               


 
            






            </body>
            </html>