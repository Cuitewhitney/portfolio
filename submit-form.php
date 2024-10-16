<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:",$name."<".$email.">\r\n"

$recipient = "bolarinwabisola@yahoo.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo'
    <!DOCTYPE html>
            <html lang="en">
            <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Bisola Bolarinwa | Designer & Web Developer</title>
            <link href="/images/logo.png" rel="shortcut icon" type="image/png">

            <!-- bootstrap link -->
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <script defer src="js/bootstrap.bundle.min.js"></script>
            <!-- css style link -->
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/responsiveness.css">
            <!-- javascript link -->
            <script defer src="js/script.js"></script>
            <!-- font family link -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">   
            <!-- font awesome icon link -->
            <link rel="stylesheet" href="css/font-awesome.min.css">
            <link rel="stylesheet" href="css/flaticon.css">
            <link rel="stylesheet" href="css/owl.carousel.min.css">
            <link rel="stylesheet" href="css/owl.theme.default.min.css">
            <script src="https://kit.fontawesome.com/92bce6a2a9.js" crossorigin="anonymous"></script>
            <style>
                body{
                    background-color: black;
                }
                a{
                    color: #828282;
                    font-style: italic;
                }
                a:hover{
                    color: #fff;
                }
            </style>
        </head>
        <body>
            
            <div class="bg-dark pt-5 text-center" id="bg-dark">
                <div class="container">
                <h1>Thank you for contacting me. I wil get back to you as soon as possible!</h1>
                <p class="back">Go back to the <a href="index.html">homepage</a></p>
                </div>
            </div>
        </body>
        </html>
';
?>






