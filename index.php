<!DOCTYPE html>

<html lang="bn">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">
    
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Stint+Ultra+Condensed&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
    #popup_this {
    top: 50%;
    left: 10%;
    text-align:center;
    margin-top: 50px;
    margin-left:0px;
    position: fixed;
    background: #f7f2be  url(img/logo/main.png) no-repeat center;
    /* background: url(img/logo/main.jpg) center ; */
    padding: 30px;
    }
    .b-close {
    position: absolute;
    right: 0;
    top: 0;
    cursor: pointer;
    color: #fff;
    background: #fa1007;
    padding: 5px 10px;
    }
    .highlights{
        list-style-type:none;
        font-size:20px;
        color:#eef740;
    }
    .slides{
        margin-top:125px;
    }
    
    .highlights li{
        color: black;
        font-size:20px;
        line-height:40px;
        font-weight:bold;
        font-size: 20px;
    }
    body {
        /* background: url(img/home_slide/wallpaper.jpg) repeat; */
        background: #f7ebda;
    }
    .text h3{
    color: black;
    font-weight:bold;font-family: 'Lora', serif;
  }
  .head-line{
        color: black;font-family: 'Stint Ultra Condensed', cursive; 
        color: black;
        font-size:30px;
        margin-left: -200px;
    }

 
    .nav-list{
        margin-top: -75px;
    }
  @media only screen and (max-width: 350px){
    .mrq{
            margin-left: 450px;
        }

  }
  @media only screen and (max-width: 600px){
    .imgs img{
      height:200px;
      width:400px;
    }
    .head-line{
            margin-top:-15px; 
            color: black;
            font-family: 'Stint Ultra Condensed', cursive; 
            font-size:30px;
            margin-left: 0px;
        }
        .wlcm h2{
            font-size:33px;
            color: green;
        }
        .mrq{
            margin-left: 400px;
        }
        .nav-list{
            margin-top: 19px;
        }
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
    </style>
</head>

<body>

    
    <div >
        <!-- Fixed navbar -->
        <?php require "partial/_header.php"?>

        <section class="flexslider" style="margin-bottom:-40px;">
            <ul class="slides" style="">
                <li style="background: url(img/home_slide/6.jpeg) no-repeat; background-size: 100% 80%;"></li>
                <li style="background: url(img/home_slide/f2.jpg) no-repeat; background-size: 100% 80%;"></li>
                <li style="background: url(img/home_slide/f4.jpg)no-repeat; background-size: 100% 80%;"></li>
            </ul>
        </section>

        <marquee width="100%" direction="left" height="10%" style="background-color:;margin-top:-45px;" class="probootstrap-section probootstrap-section-colored">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6 col-md-push-2">
                            <h2 data-animate-effect="fadeInRight" style="font-size:50px;color:#e3d840;margin-bottom:-150px;"><b><i>Get your admission now!</i></b></h2>
                        </div>
                        <div class="col-xs-6" >
                            <center><a href="admission-info.php" role="button" style="margin-top:18px;" class="btn btn-primary btn-lg btn-ghost probootstrap-animate mrq" data-animate-effect="fadeInLeft">Enroll</a></center>
                        </div>
                    </div>
                </div>
            </section>
        </marquee>

        <section class="probootstrap-section probootstrap-section-colored" style="margin-top:-9px;">
            <div class="container" >
                <div class="row">
                    <div class="col-md-12 text-left section-heading probootstrap-animate wlcm" >
                        <h2 style="font-family: 'Stint Ultra Condensed', cursive; font-size:33px;" >Welcome to Vidyavharcha's Virtual Campus</h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="probootstrap-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="probootstrap-flex-block">
                            <div class="probootstrap-text probootstrap-animate">
                                <h3 style="color:black;"><b>About Institutions</b></h3>
                                <p style="color:black;">Bharatiya Vidyacharcha is an educational Institute for higher education which provides classroom coaching to help the students to qualify NET, SET, SLST , WB TET etc. Hard- working faculties are here to teach the subject thoroughly, helps the students to clearing their doubts through  interacting session in a friendly way. Group study is an another most important part of this institute which helps the students to express their innovative ideas and short out the problems easily. The classes take place throughout the week and weekend batches in this institute at Belurmath, Rasmandir road,  Kolkata and also in Purulia.</p>
                                <p><a href="about.php" class="btn btn-primary">Learn More</a></p>
                            </div>
                            <div class="probootstrap-image probootstrap-animate" style="background: url(img/logo/video_logo.jpg) center no-repeat;background-size: cover">
                                <a href="https://www.youtube.com/embed/1eNa8-Btrw0" class="btn-video"><i class="icon-play3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- new -->
        <section class="probootstrap-section probootstrap-bg probootstrap-section-colored probootstrap-testimonial" style="background: #c44023;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                        <h1 style="font-family: 'Stint Ultra Condensed', cursive;font-size:50px;"><b>Our Trick Our Success</b></h1>
                        <!-- <p class="lead"><b>OUR STUDENT OUR PROUD</b></p> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 probootstrap-animate">
                        <div class="owl-carousel owl-carousel-testimony owl-carousel-fullwidth">
                            <div class="item">
                               <img src="img/feedback/1.jpeg" class="d-block" height="300" width="200" alt="Student Feedback">
                                    

                            </div>
                            <div class="item">
                                <!-- <div class="probootstrap-testimony-wrap text-center">
                                    <figure>
                                        <img src="img/person_2.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                                    </figure>
                                    <blockquote class="quote">&ldquo;Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after
                                        a while.&rdquo; <cite class="author"> &mdash;<span>Jorge Smith</span></cite></blockquote>
                                </div> -->
                                
                               <img src="img/feedback/2.jpeg" class="d-block" height="300" width="200" alt="Student Feedback">
                            </div>
                            <div class="item">
                                <!-- <div class="probootstrap-testimony-wrap text-center">
                                    <figure>
                                        <img src="img/person_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                                    </figure>
                                    <blockquote class="quote">&ldquo;I think design would be better if designers were much more skeptical about its applications. If you believe in the potency of your craft, where you choose to dole it out is not something to take lightly.&rdquo;
                                        <cite class="author">&mdash; <span>Brandon White</span></cite></blockquote>
                                </div> -->
                                
                               <img src="img/feedback/3.jpeg" class="d-block" height="300" width="200" alt="Student Feedback">
                            </div>
                            

                        </div>
                    </div>
                </div>
                <!-- END row -->
            </div>
        </section> 


        <section class="probootstrap-section probootstrap-bg-white probootstrap-border-top" style="background-color: #f7ebda">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                        <h1 style="color: black;font-family: 'Stint Ultra Condensed', cursive;font-size:40px;"><b>Our Featured Courses</b></h1>
                        <!-- <p class="lead">Sed a repudiandae impedit voluptate nam Deleniti dignissimos perspiciatis nostrum porro nesciunt</p> -->
                    </div>
                </div>
                <!-- END row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="probootstrap-service-2 probootstrap-animate"  style="background-color: #c2d43b">
                            <div class="image">
                            <div class="image-bg imgs">
                                <img src="img/course/4.jpeg" height="250" width="250" alt="Free Bootstrap Template by ProBootstrap.com">
                            </div>
                            </div>
                            <div class="text">
                            <!-- <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>-->
                            <h3 style="font-family:'Bree Serif', serif;">NTA NET SANSKRIT</h3>
                            <p style="color:black">Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam quos quis nisi voluptatum architecto rerum error.</p>
                            <div class="container">
                                <div class="row">
                                <div class="col-md-3">
                                    <a href="admission-info.php" class="btn btn-primary">Enroll now</a>
                                    <a href="nta-net-snaskrit.php" class="btn btn-info">More info </a> 
                                    <!-- <span class="enrolled-count">2,928 students enrolled</span> -->
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="probootstrap-service-2 probootstrap-animate"  style="background-color: #c2d43b">
                        <div class="image">
                        <div class="image-bg imgs">
                            <img src="img/course/5.jpeg" height="250" width="250"alt="Free Bootstrap Template by ProBootstrap.com">
                        </div>
                        </div>
                        <div class="text">
                        <!-- <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span> -->
                        <h3  style="font-family:'Bree Serif', serif;">NTA NET- General Paper </h3>
                        <p style="color:black">Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam quos quis nisi voluptatum architecto rerum error.</p>
                        <div class="container">
                            <div class="row">
                            <div class="col-md-3">
                                <a href="admission-info.php" class="btn btn-primary">Enroll now</a>
                                <a href="nta-general-paper.php" class="btn btn-info">More info </a> 
                                <!-- <span class="enrolled-count">2,928 students enrolled</span> -->
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                    </div>
                </div>
            </div>
        </section>


        <section class="probootstrap-section probootstrap-bg probootstrap-section-colored probootstrap-testimonial" style="background: #c44023;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                        <h2 style="font-family: 'Stint Ultra Condensed', cursive;font-size:40px;"><b>Alumni Testimonial</b></h2>
                        <p class="lead"><b>OUR STUDENT OUR PROUD</b></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 probootstrap-animate">
                        <div class="owl-carousel owl-carousel-testimony owl-carousel-fullwidth">
                            <div class="item">
                               <img src="img/feedback/1.jpeg" class="d-block" height="300" width="200" alt="Student Feedback">
                                    

                            </div>
                            <div class="item">
                                <!-- <div class="probootstrap-testimony-wrap text-center">
                                    <figure>
                                        <img src="img/person_2.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                                    </figure>
                                    <blockquote class="quote">&ldquo;Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after
                                        a while.&rdquo; <cite class="author"> &mdash;<span>Jorge Smith</span></cite></blockquote>
                                </div> -->
                                
                               <img src="img/feedback/2.jpeg" class="d-block" height="300" width="200" alt="Student Feedback">
                            </div>
                            <div class="item">
                                <!-- <div class="probootstrap-testimony-wrap text-center">
                                    <figure>
                                        <img src="img/person_3.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                                    </figure>
                                    <blockquote class="quote">&ldquo;I think design would be better if designers were much more skeptical about its applications. If you believe in the potency of your craft, where you choose to dole it out is not something to take lightly.&rdquo;
                                        <cite class="author">&mdash; <span>Brandon White</span></cite></blockquote>
                                </div> -->
                                
                               <img src="img/feedback/3.jpeg" class="d-block" height="300" width="200" alt="Student Feedback">
                            </div>
                            <div class="item">
                                <!-- <div class="probootstrap-testimony-wrap text-center">
                                    <figure>
                                        <img src="img/person_2.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                                    </figure>
                                    <blockquote class="quote">&ldquo;Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after
                                        a while.&rdquo; <cite class="author"> &mdash;<span>Jorge Smith</span></cite></blockquote>
                                </div> -->
                                
                               <img src="img/feedback/4.jpeg" class="d-block" height="300" width="200" alt="Student Feedback">
                            </div>
                            <div class="item">
                                <!-- <div class="probootstrap-testimony-wrap text-center">
                                    <figure>
                                        <img src="img/person_2.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                                    </figure>
                                    <blockquote class="quote">&ldquo;Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after
                                        a while.&rdquo; <cite class="author"> &mdash;<span>Jorge Smith</span></cite></blockquote>
                                </div> -->
                                
                               <img src="img/feedback/5.jpeg" class="d-block" height="300" width="200" alt="Student Feedback">
                            </div>
                            <div class="item">
                                <!-- <div class="probootstrap-testimony-wrap text-center">
                                    <figure>
                                        <img src="img/person_2.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                                    </figure>
                                    <blockquote class="quote">&ldquo;Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after
                                        a while.&rdquo; <cite class="author"> &mdash;<span>Jorge Smith</span></cite></blockquote>
                                </div> -->
                                
                               <img src="img/feedback/6.jpeg" class="d-block" height="300" width="200" alt="Student Feedback">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END row -->
            </div>
        </section>


         


        <section class="probootstrap-section">
            <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                <h2 style= "color:black; font-weight:bold;font-size:40px; font-family: 'Stint Ultra Condensed', cursive;">Why are we different from others?</h2>
                <p class="lead" style="color:black;">Look at a glance the services provide by us....</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                <div class="service left-icon probootstrap-animate">
                    <div class="icon"><i class="icon-checkmark"></i></div>
                    <div class="text">
                    <h3>All the faculties of the institution are Highly  Qualified & Experienced more than 4 years.</h3>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p> -->
                    </div>  
                </div>
                <div class="service left-icon probootstrap-animate">
                    <div class="icon"><i class="icon-checkmark"></i></div>
                    <div class="text">
                    <h3>The faculties are empaneled from Top Universities of India.</h3>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p> -->
                    </div>
                </div>
                <div class="service left-icon probootstrap-animate">
                    <div class="icon"><i class="icon-checkmark"></i></div>
                    <div class="text">
                    <h3>NET-JRF Qualified, assistant professors are involved with us.</h3>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p> -->
                    </div>
                </div>
                <div class="service left-icon probootstrap-animate">
                    <div class="icon"><i class="icon-checkmark"></i></div>
                    <div class="text">
                    <h3>Subject specific modern faculties are allotted for Every Special Paper.</h3>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p> -->
                    </div>  
                </div>
                
                <div class="service left-icon probootstrap-animate">
                    <div class="icon"><i class="icon-checkmark"></i></div>
                    <div class="text">
                    <h3>The smart classrooms are well designed with Audio-Video classes & effective teaching tools. </h3>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p> -->
                    </div>
                </div>
                
                <div class="service left-icon probootstrap-animate">
                    <div class="icon"><i class="icon-checkmark"></i></div>
                    <div class="text">
                    <h3>Unit wise,Chapter wise High Standard Printed up to date Study materials are available here.</h3>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p> -->
                    </div>
                </div>
                <div class="service left-icon probootstrap-animate">
                    <div class="icon"><i class="icon-checkmark"></i></div>
                    <div class="text">
                    <h3> Regular Mock Tests & proper Evaluation of these tests will be available properly. </h3>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p> -->
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                
                <div class="service left-icon probootstrap-animate">
                    <div class="icon"><i class="icon-checkmark"></i></div>
                    <div class="text">
                    <h3>Model Test Papers /Sample test papers will also be provided by the faculties. </h3>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p> -->
                    </div>
                </div>
                <div class="service left-icon probootstrap-animate">
                    <div class="icon"><i class="icon-checkmark"></i></div>
                    <div class="text">
                    <h3>Previous Year Papers with solution Key for paper 1 & paper 2 will also be provided.</h3>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p> -->
                    </div>
                </div>
                <div class="service left-icon probootstrap-animate">
                    <div class="icon"><i class="icon-checkmark"></i></div>
                    <div class="text">
                    <h3> For practicing questions OMR sheets are available .</h3>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p> -->
                    </div>
                </div>
                <div class="service left-icon probootstrap-animate">
                    <div class="icon"><i class="icon-checkmark"></i></div>
                    <div class="text">
                    <h3> Unlimited back up classes are available here.</h3>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p> -->
                    </div>
                </div>
                <div class="service left-icon probootstrap-animate">
                    <div class="icon"><i class="icon-checkmark"></i></div>
                    <div class="text">
                    <h3>For the purpose of the aspirants the faculties 
                        provide  24*7 doubt clearing sessions.    </h3>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p> -->
                    </div>
                </div>
                <div class="service left-icon probootstrap-animate">
                    <div class="icon"><i class="icon-checkmark"></i></div>
                    <div class="text">
                    <h3>Unlimited online Group Discussion & Mock tests are also available through Whats App</h3>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p> -->
                    </div>
                </div>
                <div class="service left-icon probootstrap-animate">
                    <div class="icon"><i class="icon-checkmark"></i></div>
                    <div class="text">
                    <h3>Online classes are available with recordings.</h3>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p> -->
                    </div>
                </div>
                </div>
            </div>
            <!-- END row -->
            </div>
        </section>

        
        
        <?php require "partial/_footer.php"?>

    </div>
    <!-- END wrapper -->
    
    <!-- <div id="popup_this">
    <span class="button b-close">
        <span>X</span>
    </span>
    <h3 style="color:#807612;">Hello <i>students</i>, welcome to <b style="color:#0d5fa6">Bharatiya Vidyacharcha Research Academy .</b> </h3>
    <ol type="" class="highlights">
    <li>আপনি কি  NET JRF, SET WBSLST, WBTET, WBPET and CTET পরীক্ষায় অংশগ্রহণ করতে চান?</li>
    <li>কোথায়  পড়াশুনো করবেন সেই বিষয়ে চিন্তিত?</li>
    <li>কোথা থেকে আদর্শ গাইড পাবেন সেই বিষয়ে চিন্তিত?</li>
    <li>পাহাড় সম সিলেবাস কিভাবে আয়ত্তে আনবেন  তা নিয়ে চিন্তিত?</li>
    <li>কিভাবে স্মার্টলি পড়াশুনো করবেন সেই বিষয়ে চিন্তিত?</li>
    <li>কিভাবে সাফল্য পাবেন  শেষমেষ? চিন্তিত?</li>
    <li>কিভাবে উচ্চ শিক্ষায় শিক্ষিত হবেন? চিন্তিত? </li>
    </ol>
    <h3 style="color:#0b7d04">যদি উত্তর " হ্যাঁ" হয় , চিন্তা করবেন না।  সঠিক সময় সঠিক জায়গায় আপনি এসে গেছেন।<br>আমরা আছি <b>BVRA</b>.</h3>
    </div> -->
    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/bpopup/jquery.bpopup.min.js"></script>
    <script>
    $( document ).ready(function() {
        $('#popup_this').bPopup();
    });
    </script>
</body>


</html>