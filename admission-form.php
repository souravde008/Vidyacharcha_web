<?php
use phpmailer\phpMailer\PHPMailer;

require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';
$snd = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $whats = $_POST["whats"];
    $course = $_POST["course"];
    $t_id = $_POST["t_id"];
    $t_date = $_POST["t_date"];
    $addr = $_POST["village"]." ".$_POST["dist"]." ".$_POST["pin"];
    $wano = $_POST["wano"];





    try{
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'souravdey.student@gmail.com'; // Gmail address which you want to use as SMTP server
      $mail->Password = '89001922'; // Gmail address Password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = '587';
  
      $mail->setFrom('souravdey.student@gmail.com'); // Gmail address which you used as SMTP server
      $mail->addAddress('souravdey.student@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)
  
      $mail->isHTML(true);
      $mail->Subject = 'Student Enrolled';
      $mail->Body = "<h1><center>1 More student Enrolled</center></h1><br><h3>Name : $name <br>Email: $email <br>Phone : $phone<br>Address : $addr<br>Course : $course<br>Transactin ID : $t_id<br>Transaction Date: $t_date</h3>";
  
      $mail->send();
      echo '<script>alert("after clicking ok please you will redirect to whatsapp. then you have to send a pre-written code.")</script>';
    } catch (Exception $e){
      $alert = '<div class="alert-error">
                  <span>'.$e->getMessage().'</span>
                </div>';
    }

    



    // try{
    //   $mail->isSMTP();
    //   $mail->Host = 'smtp.gmail.com';
    //   $mail->SMTPAuth = true;
    //   $mail->Username = 'souravdey.student@gmail.com'; // Gmail address which you want to use as SMTP server
    //   $mail->Password = '89001922'; // Gmail address Password
    //   $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    //   $mail->Port = '587';
  
    //   $mail->setFrom('souravdey.student@gmail.com'); // Gmail address which you used as SMTP server
    //   $mail->addAddress('souravdey.student@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)
  
    //   $mail->isHTML(true);
    //   $mail->Subject = 'Student Enrolled';
    //   $mail->Body = "<h3>Name : $name <br>Email: $email <br>Phone : $phone<br>Address : $addr<br>Course : $course<br>Transactin ID : $t_id<br>Transaction Date: $t_date</h3>";
  
    //   $mail->send();
    //   echo '<script>alert("after clicking ok please you will redirect to whatsapp. then you have to send a pre-written code.")</script>';
    // } catch (Exception $e){
    //   $alert = '<div class="alert-error">
    //               <span>'.$e->getMessage().'</span>
    //             </div>';
    // }




    header("Location:https://api.whatsapp.com/send?phone=$wano&text=Name:%20$name%20%0DEmail:%20$email%20%0DPhone:%20$phone%20%0DAddress:%20$addr%20%0DCourse:%20$course%20%0DTransactionID:%20$t_id%20%0DTransactionDate:%20$t_date%20%0D" );
}
?>




<!DOCTYPE html>

<html lang="en">  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMISSION || VIDYACHARCHA</title>
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
    body {
        /* background: url(img/home_slide/wallpaper.jpg) repeat; */
        background: #f7ebda;
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
    .head-line{
        color: black;font-family: 'Stint Ultra Condensed', cursive; 
        color: black;
        font-size:30px;
        margin-left: -200px;
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
              <h1 class="mb0"><b>Enrollment Form</b></h1>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-section-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              
                <div class="col-md-7 col-md-push-2  probootstrap-animate" id="probootstrap-content">
                  <h2 style="font-family: 'Stint Ultra Condensed', cursive;font-size:50px;"><b><center>Fill This form Carefully</center></b></h2>
                  <ol>
                    <li style="text-align:justify;color:red;font-weight:bold">Make sure that your payment is done through online. if not <a href="admission-info.php">Click Here</a></li>
                    <li style="text-align:justify;color:red;font-weight:bold">After successful transaction you will get a transaction Id. put it into said column.</li>
                    <!-- <li>Milk</li> -->
                  </ol>
                  <form action="admission-form.php" method="post">
                    <div class="form-group">
                      <label for="name">Full Name*</label>
                      <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email*</label>
                      <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                      <label for="email">Phone No.*</label>
                      <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="form-group">
                      <label for="email">Whatsapp No.*</label>
                      <input type="text" class="form-control" id="whats" name="whats">
                    </div>

                    <div class="form-group">
                      <label for="course">Cousre*</label>
                      <input type="text" class="form-control" id="course" name="course">
                    </div>

                    <div class="form-group">
                      <label for="village">Village/Town*</label>
                      <input type="text" class="form-control" id="village" name="village">
                      <label for="dist">District*</label>
                      <input type="text" class="form-control" id="dist" name="dist">
                      <label for="pin">Pincode*</label>
                      <input type="text" class="form-control" id="pin" name="pin">
                      
                    </div>
                    <div class="form-group">
                      <label for="subject">Teansaction ID*</label>
                      <input type="text" class="form-control" id="t_id" name="t_id">
                    </div>
                    <div class="form-group">
                      <label for="subject">Teansaction Date*</label>
                      <input type="date" class="form-control" id="t_date" name="t_date">
                    </div>
                    <div class="form-group">
                      <input type="hidden" class="form-control" name="wano" value="918348263967">
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-success btn-lg" id="submit" name="submit" value="Submit">
                      <input type="reset" class="btn btn-danger btn-lg" id="submit" name="submit" value="Reset">
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
              <h2 class="probootstrap-animate" data-animate-effect="fadeInRight" style="font-family:'Bree Serif', serif;">Get your admission now!</h2>
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