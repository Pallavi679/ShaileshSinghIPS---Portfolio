<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Shailesh Singh | Contact Me</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Consulting Website Template Free Download" name="keywords">
    <meta content="Consulting Website Template Free Download" name="description">

    <!-- Favicon -->
    <link href="./img/img/icon.png" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald:wght@200;300;400&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>


        <?php
        function Alert($message)
        {
          echo
          "<SCRIPT>
                alert('$message');
            </SCRIPT>";
        }
           function RedirectWithMessage($message, $location)
           {
             Alert($message);
             echo "<SCRIPT>window.location = '$location';</SCRIPT>";
           }
            // function alert($message){
            //     echo
            //     "<SCRIPT>
            //         alert('$message');
            //     </SCRIPT>";
            // }
            if(($_SERVER['REQUEST_METHOD']=="POST")&&isset($_POST['sendMessageButton'])){
                if(empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                    http_response_code(500);
                    exit();
                    // headers("Location: index.php");
                    }
                    $name = strip_tags(htmlspecialchars($_POST['name']));
                    $email = strip_tags(htmlspecialchars($_POST['email']));
                    $subject = strip_tags(htmlspecialchars($_POST['subject']));
                    $message = strip_tags(htmlspecialchars($_POST['message']));
                    
                    $headers = "From: lalchandchandu382@gmail.com";
                    $headers.= "Cc: lalchandchandu382@gmail.com";
                    $headers.="MIME-VERSION: IPR SAKEC"."\r\n";
                    $headers.="Content-type:text/html;charset=UTF-8"."\r\n";
                    $body="Hey $name "."\r\n\r\n"." This is to acknowledge you that we received your query as follows."."\r\n"." .Subject : $subject \r\n\r\n . Message:$message \n\n Our coordinators will get back to you soon\n\n Thank you for your paitence and time";
                    //alert($email);
                    
                    if(mail($email,"Acknowledgement", $body, $headers)){
                    //     echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    //     <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                    //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    //   </div>';
                      header("Location: thankyou.html");
                    //   RedirectWithMessage('We will contact you', "index.php");
                    }else{
                        echo $email.$headers;
                        echo"fail";
                        // alert("email sending failed please check your email id");
                        http_response_code(500);
                    }
            }
        ?>
<body class="page">
<?php
    include 'navbar.php';
    ?>

    <!-- Contact Start -->
    <div class="contact mt-125">
        <div class="container">
            <div class="section-header">
                <p>Get In Touch</p>
                <h2>Get In Touch For Any Query</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <i class="fa fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Our Head Office</h3>
                            <p>DG in Police Reforms at Police Headquarters, Bhopal</p>
                        </div>
                    </div>
                    <!-- <div class="contact-info">
                        <div class="contact-icon">
                            <i class="fa fa-phone-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Call for Help</h3>
                            <p>+91 79778 24184</p>
                        </div>
                    </div> -->
                    <div class="contact-info">
                        <div class="contact-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Email for Information</h3>
                            <p>kodarishailesh@yahoo.co.in</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                <div class="control-group">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required >
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control"  name="email" id="email" placeholder="Your Email" required>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control"  name="subject" id="subject" placeholder="Subject" required>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control"  name="message" id="message" placeholder="Message" required></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <button class="btn" type="submit" name="sendMessageButton" id="sendMessageButton">Send Message</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <?php
   include 'footer.php';
   ?>
   
</body>


</html>