<?php
     include("function.php");
     require("server.php");
     include("smtp_mailer.php");

     if (isset($_POST["submit"])) {
        $username = $_POST["name"];
        $email = $_POST["email"];
        $subject=$_POST["subject"];
        $msg = $_POST["msg"];
        // echo $msg;
        // echo $email;
        $mail_status=smtp_mailer($email,$subject,$msg);
        if($mail_status==1){
            echo'<script>alert("Mail Sent")</script>';
            
        }else{
            echo'<script>alert("Mail not Sent")</script>';
          
          }


        $sql = "INSERT INTO form(name,email,subject,message) VALUES ('$username', '$email','$subject', '$msg')";
        
        if(mysqli_query($con, $sql)){
        //    echo "Success";
        }
        else{
            echo "Error";
        }
        mysqli_close($con);
        redirect("./index.php");
    }
     


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">
    <title>Document</title>
</head>
<body>




    
    <div class="row">
        <div class="offset-1 col-12 col-sm-5">

            <div class="container">
                <p>If You Have Any Questions don't Hesitate To Contact Us </br>
                    Have a Good Day
                </P>
                <div class="row row-content">
                    <div class="col-12 col-md-12">
                        <form class="contact" method="POST">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="Name" name="name" placeholder="Full Name">
                                    </br>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="email" class="form-control" id="Email" name="email" placeholder="Email">
                                    </br>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input class="form-control" id="Phone" name="subject" placeholder="Subject">
                                    </br>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea name="msg" class="form-control" id="Message"  rows="8" placeholder="Message"></textarea>
                                    </br>
                                </div>
                            </div>
                           
                            <input type="submit" name="submit" class="btn btn-secondary btn-lg send-btn" value="Send">
                        </form>
                    </div>

                </div>
            </div>
        </div>
    
    
    
    
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>