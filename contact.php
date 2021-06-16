<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $whats = $_POST["whats"];
  $sub = $_POST["subject"];
  $msg = $_POST["msg_line1"];
  $wano = $_POST["wano"];

  header("Location:https://api.whatsapp.com/send?phone=$wano&text=Name:%20$name%20%0DEmail:%20$email%20%0DPhone:%20$phone%20%0DWhatsapp.:%20$whats%20%0DSubject:%20$sub%20%0DMassage:%20$msg" );
}

?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Stint+Ultra+Condensed&display=swap" rel="stylesheet">
    <style>
    .head-line{
        color: black;font-family: 'Stint Ultra Condensed', cursive; 
        color: black;
        font-size:30px;
        margin-left: -200px;
    }
  .whats-app {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 40px;
    background-color: #25d366;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    font-size: 30px;
    box-shadow: 2px 2px 3px #999;
    z-index: 100;
    left: 15px;
}

.my-float {
    margin-top: 16px;
}
.nav-list{
        margin-top: -75px;
    }
  @media only screen and (max-width: 600px){
    .head-line{
            margin-top:-15px; 
            color: black;
            font-family: 'Stint Ultra Condensed', cursive; 
            font-size:30px;
            margin-left: 0px;
        }
        .nav-list{
        margin-top: 19px;
    }
    
  }
  body {
        /* background: url(img/home_slide/wallpaper.jpg) repeat; */
        background: #f7ebda;
    }
    .form-group label{
      color:black;
      font-size:20px;
    }
    </style>
  </head>
  <body>
 
    <div>
      <!-- Fixed navbar -->
      
      
      <?php require "partial/_header.php"?>
      
      <section class="probootstrap-section probootstrap-section-colored"style="margin-top:130px">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center section-heading probootstrap-animate">
              <h1 class="mb0"><b><i>Contact Us</b></i></h1>
            </div>
          </div>
        </div>
      </section>

      

      <section class="probootstrap-section probootstrap-section-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              
                <div class="col-md-7 col-md-push-2  probootstrap-animate" id="probootstrap-content">
                  <h2 style="color:blue;"><b><i><center>Get In Touch</center></b></i></h2>
                  <p style="color:black;" class="text-center">Please fill this form for getting more information.</p>
                  <form action="contact.php" method="POST">
                    <div class="form-group">
                      <label for="name">Full Name</label>
                      <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                      <label for="whats">Whatsapp No.</label>
                      <input type="text" class="form-control" id="whats" name="whats">
                    </div>
                    <div class="form-group">
                      <label for="phone">Phone No.</label>
                      <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="form-group">
                      <label for="subject">Subject</label>
                      <input type="text" class="form-control" id="subject" name="subject">
                    </div>
                    <div class="form-group">
                      <label for="msg">Message</label>
                      <input type="text" class="form-control" id="msg" name="msg_line1">
                      <!-- <input type="text" class="form-control" name="msg_line2">
                      <input type="text" class="form-control" name="msg_line3"> -->
                    </div>
                    <div class="form-group">
                      <input type="hidden" class="form-control" name="wano" value="918348263967">
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Send Message">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <section class="probootstrap-cta">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Get your admission now!</h2>
              <a href="admission-info.php" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">Enroll</a>
            </div>
          </div>
        </div>
      </section>



      <?php require "partial/_footer.php"?>

    </div>
    <!-- END wrapper -->
    

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>