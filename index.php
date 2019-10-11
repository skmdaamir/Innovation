<?php
// include("connect.php");
// $name = $email = $subject= $message = "";
    if(isset($_POST["submit"]))
    {
        include("connect.php");
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $interest = $_POST["interest"];
        $message = $_POST["message"];
        
        $sel = "INSERT INTO `student` (`firstname`, `lastname`, `email`, `phone`, `interest`, `message`) 
        VALUES ('$firstname', '$lastname', '$email', '$phone', '$interest', '$message')";
        
        $sell =mysqli_query($con , $sel);
        
        if($sell == 1)
        {
            // echo "<script>alert(successful);</script>";
            echo "success";
           
        }
        else
        {
            echo "<script>alert(successful);</script>";
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP Contact Form Script With Validation - reusable form</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
        <style>
            body{
                padding:100px;
                background-image: url("background-image1.jpg");
            }
            
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2 align="center">Contact Us</h2> 
                    <p align="center"> Send us your message and we will get back to you as soon as possible </p>
                    <form action="index.php" method="post">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name"> First Name:</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" maxlength="50">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="name"> Last Name:</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" maxlength="50">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="email"> Email:</label>
                                <input type="email" class="form-control" id="email" name="email" maxlength="50">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="phone"> Phone:</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required maxlength="50">
                            </div>
                        </div>
                            
                            <label>Select Your Choice:</label><br>
                            <select id = "myList" name="interest" style="width: 550px; height: 30px;">
                            <option value = "1">Artificial Intelligence</option>
                            <option value = "2">Machine Learning</option>
                            <option value = "Data Mining">Data Mining</option>
                            <option value = "Big data">Big Data</option>
                            </select><br><br>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="name"> Dream Project:</label>
                                <textarea class="form-control" type="textarea" id="msg" name="message" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" class="btn btn-lg btn-success btn-block" name="submit" id="btnContactUs">Post It! </button>
                            </div>
                        </div>
                    </form>
                    <!-- <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Sent your message successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div> -->
                </div>
            </div>
        </div>
        <?php include("footer.php");?>
    </body>
</html>