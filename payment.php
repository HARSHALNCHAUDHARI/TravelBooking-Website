<!DOCTYPE html> 
<html lang="en"> 

<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Online Payment-Page</title> 
    <link rel="stylesheet" href="payment.css"> 
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
</head> 

<body> 
    <div class="container"> 

        <form id="paymentForm" action="process_payment.php" method="POST"> 

            <div class="row"> 

                <div class="col">                                                                          
                    <h3 class="title"> 
                        Billing Address 
                    </h3> 

                    <div class="inputBox"> 
                        <label for="name"> Full Name:</label> 
                        <input name="name" type="text" id="name" placeholder="Enter your full name" required> 
                    </div> 

                    <div class="inputBox"> 
                        <label for="email"> 
                            Email: 
                        </label> 
                        <input type="email" name="email" id="email"
                            placeholder="Enter email address"
                            required> 
                    </div> 

                    <div class="inputBox"> 
                        <label for="address"> 
                            Address: 
                        </label> 
                        <input type="text" id="address" name="address"
                            placeholder="Enter address"
                            required> 
                    </div> 

                    <div class="inputBox"> 
                        <label for="city"> 
                            City: 
                        </label> 
                        <input type="text" id="city" name="city"
                            placeholder="Enter city"
                            required> 
                    </div> 

                    <div class="flex"> 

                        <div class="inputBox"> 
                            <label for="state"> 
                                State: 
                            </label> 
                            <input type="text" id="state" name="state"
                                placeholder="Enter state"
                                required> 
                        </div> 

                        <div class="inputBox"> 
                            <label for="zip"> 
                                Zip Code: 
                            </label> 
                            <input type="number" id="zip" name="zip"
                                placeholder="123 456"
                                required> 
                        </div> 

                    </div> 

                </div> 
                <div class="col"> 
                    <h3 class="title">Payment</h3> 

                    <div class="inputBox"> 
                        <label for="name"> 
                            UPI Accepted: 
                        </label> 
                        <img src="assets/images/upi.jpeg"
                            style="width: 100px;"> 
                    </div> 

                    <div class="inputBox"> 
                        <label for="cardName"> 
                            UPI ID: 
                        </label> 
                        <input type="text" id="cardName" name="upi_id"
                            placeholder="Enter UPI ID"
                            required> 
                    </div> 

                    <div class="inputBox"> 
                        <label for="cardNum"> 
                            Mobile Number: 
                        </label> 
                        <input type="text" id="cardNum" name="mobile_no"
                            placeholder="12345-67890"
                            maxlength="19" required> 
                    </div>  

                </div> 

            </div> 

            <input type="submit" value="Proceed to Checkout"
                class="submit_btn"> 
        </form> 

    </div> 
    <script type="text/javascript" src="payment.js"></script> 
</body> 

</html>
