<!DOCTYPE html>
<html lang="en">
<head>
  <title>VIKI-Voice AI Companion For Seniors</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="Cache-control" content="public">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="shortcut icon" href="images/favicon.png">
  <link media="all" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  <link rel="stylesheet" type="text/css" href="css/reboot.css">
  <meta name="google-site-verification" content="jX6thsDUjM4lr-SO76mShUWe8jz1-LtCVFXgyxh4OXk" />
</head>

<body>
  <!--navbar menu-->
<!--   <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-white"> <a class="navbar-brand" href="#">
    <img src="images/viki_logo.png" alt="viki_logo" style="width:20%;height: auto"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
    </button>
  </nav> -->
  <?php
  if(isset($_POST['submit'])){
  $msg = 'First Name: ' .$_POST['first_name'] ."\n"
      .'Last Name: ' .$_POST['last_name'] ."\n"
      .'Email: ' .$_POST['email'] ."\n"
      .'Message: ' .$_POST['message'];
      if(mail('presales@airodigitallabs.com', 'VIKI Contact Us Form', $msg)){
        echo "<script>alert('Thank You for your interest, we will get back to you soon!!');</script>";
        // header('location: index.php');
      }
    } 
    // else
    // {
    //   header('location: index.php');
    //   exit(0);
    // }
?>


  <header class="header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 align-items-start"  style="border:0px solid red">
        <div class="logo"><a href="#"><img src="images/logo_white.png" alt="viki_logo" class="viki_logo"></a></div>
      </div>

      <div class="col-lg-6 align-items-end" style="border:0px solid red">
        <div class="logo2 float-left ml-auto"><a href="https://www.airodigitallabs.com" target="_blank">
          <img src="images/airo_logo_white.png" alt="airo_logo" class="airo_logo"></a></div>
      </div>
    </div>
    <!-- <div class="logo"><a href="#"><img src="images/logo_white.png" alt="viki_logo" style="width:22%;height: auto;margin: 0 0 0 3%;"></a></div> -->
   <!--  <nav>
      <ul>
        <li><a href="#">About</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav> -->
  </div>
</header>


<div class="main-container">
  <section class="hero-banner">
    <div class="container-fluid">
      <div class="row text-left text-white">
        <!-- <h2>Animated Header On Scroll</h2> -->
      <!-- <div class="carousel-caption">
          <p class="head">World's First 24/7 Voice-AI</p>
          <p class="cust-head">Companion for the Elderly</p>
          <p class="sub-head">To enhance the Physical and Emotional<br> Well-being of the seniors in your care</p>
          <div class="col">
            <a href="#video">
            <button type="button" name="submit" class="header-button ml-auto btn-lg">See the video</button>
          </a>
          </div>
        </div> -->
        <div class="col-lg-6" style="transform: translate(4%);">
          <div class="head-caption">
            <p class="header-head">World's First 24/7 Voice-AI</p>
            <p class="header-head-child">Companion for the Elderly</p>
            <p class="sub-heading">To enhance the Physical and Emotional<br> Well-being of the seniors in your care</p>
            <a href="#video">
            <button type="button" name="submit" class="header-button ml-auto btn-lg">See the video</button>
          </a>
          </div>
        </div>

        <!-- <div class="col">B</div>
        <div class="col">C</div> -->
      </div>
    </div>
  </section>
</div>









<!--   <header class="py-5 bg-image-full img-fluid img-fill" style="background-image: url('images/viki-hero-image31.jpg');">
    <section class="hero">
      <div class="container-fluid">
        <div class="carousel-caption">
          <p class="head">World's First 24/7 Voice-AI</p>
          <p class="cust-head">Companion for the Elderly</p>
          <p class="sub-head">To enhance the Physical and Emotional<br> Well-being of the seniors in your care</p>
          <a href="#video">
            <button type="button" class="btn btn-lg btn-primary ml-auto header-button">See the video</button>
          </a>
        </div>
      </div>
    </section>
  </header> -->


  <!-- <div class="container-full-bg" style="background-image:url('images/viki-hero-image.jpg');">
   <div class="container special">
      <div class="jumbotron">One</div>
  </div> -->
  <!-- <section class="hero shadow">
         <div class="container-fluid">
            <div class="carousel-caption">
               <p class="head">World’s First 24/7</p> 
               <p class="cust-head">Voice-AI Buddy for the Elderly</p>
               <p class="sub-head">Digital health concierge for managing health and personal life while engaging the elderly at their convenience.</p>
               <a href="#video"><button type="button" class="btn btn-lg btn-primary ml-auto header-button">See the video</button></a>
            </div>
         </div>
      </section> -->
  <!-- <section>
            <div class="container-fluid text-center">
               <button type="button" class="btn btn-lg btn-dark  mx-auto" data-toggle="modal" data-target="#exampleModalCenter">Click to play
               </button> -->
  <!-- Modal -->
  <!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Video Title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <iframe id="myFrame" src="http://www.youtube.com/embed/W7qWa52k-nE" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
            </div>
            </div>
         </section>
         
         <section>
            <div class="container-fluid pattern text-white pattern-top">
               <div class="row mx-auto text-center pattern-bottom">
                  <div class="col-lg-6 ml-auto mt-6" data-aos="fade-up" data-aos-duration="3200">
                     <img src="images/viki_main_png.png" style="width:100%;height:100%">
                  </div>
                  <div class="col-lg-5 mt-5 mt-6">
                     <ul class="w3l-right-book mt-6">
                        <li data-aos="fade-left" data-aos-duration="3200">Long- Term Care Facilities</li>
                        <li data-aos="fade-right" data-aos-duration="3200">Short- Term Care Facilities</li>
                        <li data-aos="fade-left" data-aos-duration="3200">Assisted Living Facilities</li>
                        <li data-aos="fade-right" data-aos-duration="3200">Adult Day Care Facilities</li>
                        <li data-aos="fade-left" data-aos-duration="3200">Home- based Senior Care</li>
                        <li data-aos="fade-right" data-aos-duration="3200">Senior care facilities of Large Hospital Chains</li>
                     </ul>
                  </div>
               </div>
            
               <div class="row" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="3100">
                  <div class="col-md-6 pattern-bottom offset-md-1 mt-5">
                     <img src="images/viki_base_img.png" style="width:100%;height:100%">
                  </div>
               </div>
            </div>
         </section> -->
  <section id="video" class="texture">
    <div class="container mt-4 mb-4">
      <div class="row">
        <div class="col-md-9 mx-auto">
          <iframe id="myFrame" src="https://www.youtube.com/embed/5BzuuQrsMxs?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>
  <!-- Viki Slider -->
  <!-- <section>
         <div class="container-fluid pattern text-white pattern-top mt-0">
            <div class="row pattern-bottom">
               <div class="col-lg-8 mt-5" data-aos="fade-up" data-aos-duration="3200">
                  <img src="images/viki_slider.jpg" class="img-fluid" style="width:100%;height:100%">
               </div>

               <div class="col-lg-4 mgrn-custom" style="text-align: left">
                  <p data-aos="fade-left" data-aos-duration="3200" class="text-dark">Long- Term Care Facilities</p>
                  <p data-aos="fade-right" data-aos-duration="3200" class="text-dark">Short- Term Care Facilities</p>
                  <p data-aos="fade-left" data-aos-duration="3200" class="text-dark">Assisted Living Facilities</p>
                  <p data-aos="fade-right" data-aos-duration="3200" class="text-dark">Adult Day Care Facilities</p>
                  <p data-aos="fade-left" data-aos-duration="3200" class="text-dark">Home- based Senior Care</p>
                  <p data-aos="fade-right" data-aos-duration="3200" class="text-dark">Senior care facilities of Large Hospital Chains</p>
               </div>
            </div>
         </div>
      </section> -->
  <section class="texture">
    <div class="container">
      <div class="row slider-font text-center mb-0">
        <div class="col"><strong>Long- Term Care Facilities</strong></div>
        <div class="col"><strong>Short- Term Care Facilities</strong></div>
        <div class="col"><strong>Assisted Living Facilities</strong></div>
      </div>
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <picture>
            <source srcset="images/viki-banner.webp" type="image/webp">
            <source srcset="images/viki-banner.png" type="image/png">
            <img src="images/viki-banner.webp" class="img-fluid img-fluid-cust slider-banner" alt="viki_slider">
          </picture>
          <!-- <img src="images/viki-banner.png" class="img-fluid img-fluid-cust"> -->
        </div>
        <!-- <div class="col-lg-4 mx-auto">
          <div class="mt-5 mgrn-custom">
            <p data-aos="fade-left" data-aos-duration="3200" class="text-dark">Long- Term Care Facilities</p>
            <p data-aos="fade-right" data-aos-duration="3200" class="text-dark">Short- Term Care Facilities</p>
            <p data-aos="fade-left" data-aos-duration="3200" class="text-dark">Assisted Living Facilities</p>

            <p data-aos="fade-right" data-aos-duration="3200" class="text-dark">Adult Day Care Facilities</p>
            <p data-aos="fade-left" data-aos-duration="3200" class="text-dark">Home- based Senior Care</p>
            <p data-aos="fade-right" data-aos-duration="3200" class="text-dark">Senior care facilities of Large Hospital Chains</p>
          </div>
        </div> -->
      </div>
      <div class="row slider-font text-center mb-4 mt-3">
            <div class="col"><strong>Adult Day Care Facilities</strong></div>
          <div class="col"><strong>Home- based Senior Care</strong></div>
          <div class="col"><strong>Senior care facilities of Large Hospital Chains</strong></div>
      </div>
    </div>
  </section>
  <!-- Viki Slider -->

  <section class="texture">
    <div class="container mb-4">
      <div class="row mx-auto">
        <div class="col-lg-7 ml-auto">
          <picture>
            <source srcset="images/collaborativeSummit.jpg" type="image/jpg" class="img-fluid" alt="collaborativeSummit">
            <img src="images/collaborativeSummit.jpg" class="img-fluid" alt="collaborativeSummit">
          </picture>
        </div>
        <div class="col-lg-5 mt-4 mr-auto slider-font text-center">
          <a href="#contact">
            <picture>
              <source srcset="images/Airo_Latest.jpg" type="image/jpg">
              <img src="images/Airo_Latest.jpg" alt="Airo_Latest" class="img-fluid">
            </picture>
          </a>
        </div>
      </div>
    </div>
  </section>




  <!-- Benefits -->
  <section class="bg-benefit pb-5 pt-5 text-white shadow texture">
    <div class="container-fluid">
      <div class="col-md-12 text-center">
        <h2 class="underline ls-1"><strong>Benefits</strong></h2>
      </div>
      <div class="row mt-5">
        <div class="col-lg-4 col-md-6 col-sm-6 service-grid-wthree text-center">
          <div class="ser-Agriculture-grid">
            <div class="about-icon mb-md-4 mb-3"> <i class="fa fa-area-chart" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000" style="font-size:63px"></i>
            </div>
            <div class="ser-sevice-grid">
              <p>Deep learning and Analytics for Healthcare Providers</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 service-grid-wthree text-center">
          <div class="ser-Agriculture-grid">
            <div class="about-icon mb-md-4 mb-3"> <i class="fa fa-bullseye" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000" style="font-size:63px"></i>
            </div>
            <div class="ser-sevice-grid">
              <p>Improved First pass rates with Payers</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 service-grid-wthree text-center">
          <div class="ser-Agriculture-grid">
            <div class="about-icon mb-md-4 mb-3"> <i class="fa fa-bullhorn" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000" style="font-size:63px"></i>
            </div>
            <div class="ser-sevice-grid">
              <p>25-30% Savings for Providers through voice-based notes dictation for Care partner</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 mt-lg-4 mt-3 service-grid-wthree text-center">
          <div class="ser-Agriculture-grid">
            <div class="about-icon mb-md-4 mb-3"> <i class="fa fa-users" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000" style="font-size:63px"></i>
            </div>
            <div class="ser-sevice-grid">
              <p>Access to Web based interface for families</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 mt-lg-4 mt-3 service-grid-wthree text-center">
          <div class="ser-Agriculture-grid">
            <div class="about-icon mb-md-4 mb-3"> <i class="fa fa-tv" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000" style="font-size:63px"></i>
            </div>
            <div class="ser-sevice-grid">
              <p>Easy Integration with enterprise systems</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 mt-lg-4 mt-3 service-grid-wthree text-center">
          <div class="ser-Agriculture-grid">
            <div class="about-icon mb-md-4 mb-3"> <i class="fa fa-blind" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000" style="font-size:63px"></i>
            </div>
            <div class="ser-sevice-grid">
              <p>Significant improvement in patient outcome and satisfaction</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Benefits -->
  <!-- <section>
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12 text-center mb-4 mt-4">
                  <h3 data-aos="flip-right" class="text-center">Modules</h3>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4 mb-5">
                  <div class="card shadow">
                     <img src="images/Lifestyle Module.jpg" class="card-img-top shadow" alt="..." style="height: auto;">
                     <div class="card-body cust-card-body">
                        <h4 class="card-title mb-4" data-aos="fade-up" data-aos-duration="2000">Lifestyle Modules</h4>
                        <span>
                           <h5>Patient</h5>
                        </span>
                        <p>Compatible with multiple wearables</p>
                        <p>Calendar for wellness schedules</p>
                        <p>Entertainment options based on patient preferences</p>
                        <span>
                           <h5>Care Giver</h5>
                        </span>
                        <p>Access to patient's activity log</p>
                        <p>Access to population health reports</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 mb-5">
                  <div class="card shadow">
                     <img src="images/Care Module.jpg" class="card-img-top shadow" alt="..." style="height: auto;">
                     <div class="card-body cust-card-body">
                        <h4 class="card-title mb-4" data-aos="fade-right" data-aos-duration="2000">Care Module</h4>
                        <span>
                           <h5>Patient</h5>
                        </span>
                        <p>Reminders for medication and appointments</p>
                        <p>Automatic acquisition of data from wearables</p>
                        <p>Intelligent symptoms checker</p>
                        <span>
                           <h5>Care Giver</h5>
                        </span>
                        <p>Voice based interaction</p>
                        <p>Transcription Service</p>
                        <p>Automatic patient health report downloads</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 mb-5">
                  <div class="card shadow">
                     <img src="images/Emergency module.jpg" class="card-img-top shadow" alt="..." style="height: auto;">
                     <div class="card-body cust-card-body">
                        <h4 class="card-title mb-4" data-aos="fade-up" data-aos-duration="2000">Emergency Module</h4>
                        <span>
                           <h5>Patient</h5>
                        </span>
                        <p>Voice enabled phone call, video or text</p>
                        <p>Automatic notification to caregiver</p>
                        <span>
                           <h5>Care Giver</h5>
                        </span>
                        <p>Access to patient information through portal</p>
                        <p>Notification on patient symptoms</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section> -->
  <!-- Modules -->
  <section style="background-color: #fff" class="texture">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center mb-5 mt-4">
          <h2 class="text-center text-dark underline ls-1"><strong>Modules</strong></h2>
        </div>
      </div>
      <div class="row module-style shadow">
        <div class="col-lg-6">
          <picture>
            <source type='image/webp' srcset="images/Lifestyle Module.webp" />
            <source type='image/jpg'  srcset="images/Lifestyle Module.jpg" />
            <img src="images/Lifestyle Module.webp" class="img-grid rounded img-thumbnail" alt="" />
          </picture>
          <!-- <img src="images/Lifestyle Module.jpg" class="img-grid rounded img-thumbnail" alt=""> -->
          <!-- <img src="images/Lifestyle Module.jpg" class="img-grid rounded img-thumbnail" alt=""> -->
        </div>
        <div class="col-lg-6 ml-auto mt-2 text-dark">
          <h3 class="mb-4 ls-1"><strong>Lifestyle Modules</strong></h3>
          <h4 class="mb-3 ls-1">Patient</h4>
          <p>Compatible with multiple wearables</p>
          <p>Calendar for wellness schedules</p>
          <p>Entertainment options based on patient preferences</p> 
          <h4 class="mt-4 mb-3 ls-1">Care Giver</h4>
          <p>Access to patient's activity log</p>
          <p>Access to population health reports</p>
        </div>
      </div>
      <div class="row mt-5 module-style shadow">
        <div class="col-lg-6 mr-auto mt-2 text-dark">
          <h3 class="mb-4 ls-1"><strong>Care Module</strong></h3>
          <h4 class="mb-3 ls-1">Patient</h4>
          <p>Reminders for medication and appointments</p>
          <p>Automatic acquisition of data from wearables</p>
          <p>Intelligent symptoms checker</p> 
          <h4 class="mt-4 mb-3 ls-1">Care Giver</h4>
          <p>Voice based interaction</p>
          <p>Transcription Service</p>
          <p>Automatic patient health report downloads</p>
        </div>
        <div class="col-lg-6 mr-auto order-lg-2">
          <picture>
            <source srcset="images/Care Module.webp" type="image/webp">
            <source srcset="images/Care Module.jpg" type="image/jpg">
            <img src="images/Care Module.webp" class="img-grid rounded img-thumbnail" alt="">
          </picture>
        </div>
      </div>

      <div class="row mt-5 mb-5 module-style shadow">
        <div class="col-lg-6">
          <picture>
            <source srcset="images/Emergency module.webp" type="image/webp">
            <source srcset="images/Emergency module.jpg" type="image/jpg">
            <img src="images/Emergency module.webp" class="img-grid rounded img-thumbnail" alt="">
          </picture>
          <!-- <img src="images/Emergency module.jpg" class="img-grid rounded img-thumbnail" alt=""> -->
        </div>
        <div class="col-lg-6 ml-auto mt-2 text-dark">
          <h3 class="mb-4 ls-1"><strong>Emergency Module</strong></h3>
          <h4 class="mb-3 ls-1">Patient</h4>
          <p>Voice enabled phone call, video or text</p>
          <p>Automatic notification to caregiver</p> 
          <h4 class="mt-4 mb-3 ls-1">Care Giver</h4>
          <p>Access to patient information through portal</p>
          <p>Notification on patient symptoms</p>
        </div>
      </div>
    </div>
  </section>
  <!-- <section>
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center mb-3 mt-4">
                  <h3 data-aos="flip-right" class="text-center">Modules</h3>
               </div>
            </div>
        <div class="row working-process-wrap mt-5 mb-5">
          <div class="col-lg-5"><img src="images/Lifestyle Module.jpg" class="img-grid" alt=""></div>
              <div class="col-lg-7">
                <div class="custom-left-card">
                   <div class="working-process"><span>Lifestyle Modules</span>
                      <p>Loss of hair and hair-fall has become quite normal among people. You may count on numerous reasons for it, but lastly, you look for some reliable solution for that. Hair transplant is one such option and it can make you regain your lost hair and its volume. Being a clinical procedure, it is quite sa...</p>
                   </div>
               </div>
          </div>
      </div>

      <div class="row working-process-wrap mt-5">
        <div class="col-lg-7 custom-right-part">
           <div class="custom-right-card">
              <div class="working-process-cust inner-custom-right-card">
                   <span class="text-cust">SCAR TREATMENTS</span>
                   <p>Scars have always been undesirable. Its only moon who gets an appreciation of its scars. It can occur in various forms like acne scars, stretch marks or any other pigmentation laden scar. It gives you embarrassing situations in social and family gatherings as well as daily lives. But, you should not...</p>
              </div>
           </div>
        </div>
        <div class="col-lg-5 right-grid"><img src="images/g6.jpg" class="img-grid" alt=""></div>
      </div>


      <div class="row working-process-wrap mt-5">
          <div class="col-lg-5"><img src="images/g1.jpg" class="img-grid" alt=""></div>
              <div class="col-lg-7">
                <div class="custom-left-card">
                   <div class="working-process"><span>Hair Transplant</span>
                      <p>Loss of hair and hair-fall has become quite normal among people. You may count on numerous reasons for it, but lastly, you look for some reliable solution for that. Hair transplant is one such option and it can make you regain your lost hair and its volume. Being a clinical procedure, it is quite sa...</p>
                   </div>
               </div>
          </div>
      </div>
    </div>
      </section>
       -->
  <section class="bg-contact texture" id="contact">
    <div class="container mt-4">
      <div class="row">
        <div class="col-lg-6 mt-6 text-white">
          <h3>Get in touch with us!</h3>
          <p class="mt-4 footer-text">Looking for more information on VIKI or want to try VIKI for someone you care? Submit your information and our representative will contact you as soon as possible.</p>
          
          <p class="footer-text">Experience VIKI 24*7 in action. We welcome pilot customers. Connect with us at 
            <a href="mailto:contact@vikihealth.ai?Subject=Contact%20us" target="_top" class="text-white">contact@vikihealth.ai</a>
          </p>
        </div>
        <div class="col-lg-5 mt-4 ml-auto">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" role="form">
            <label for="first_name">
              <p class="label-txt">ENTER YOUR FIRST NAME</p>
              <input type="text" id="first_name" name="first_name" class="input" required>
              <div class="line-box">
                <div class="line"></div>
              </div>
            </label>
            <label for="last_name">
              <p class="label-txt">ENTER YOUR LAST NAME</p>
              <input type="text" id="last_name" name="last_name" class="input" required>
              <div class="line-box">
                <div class="line"></div>
              </div>
            </label>
            <label for="email">
              <p class="label-txt">ENTER YOUR EMAIL</p>
              <input type="email" id="email" name="email" class="input" required>
              <div class="line-box">
                <div class="line"></div>
              </div>
            </label>
            <label for="message">
              <p class="label-txt">WRITE YOUR MESSAGE</p>
              <textarea class="input" id="message" name="message" rows="2" cols="50" required></textarea>
              <div class="line-box">
                <div class="line"></div>
              </div>
            </label>
            <button type="submit" name="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!--footer starts from here-->
  <footer class="footer texture">
    <!-- <div class="container bottom_border">
            <div class="row">
            <div class=" col-sm-4 col-md col-sm-4  col-12 col">
            <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
            
            <p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            <p><i class="fa fa-location-arrow"></i> 9878/25 sec 9 rohini 35 </p>
            <p><i class="fa fa-phone"></i>  +91-9999878398  </p>
            <p><i class="fa fa fa-envelope"></i> info@example.com  </p>
            
            
            </div>
            
            
            <div class=" col-sm-4 col-md  col-6 col">
            <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
            
            <ul class="footer_ul_amrc">
            <li><a href="http://webenlance.com">Image Rectoucing</a></li>
            <li><a href="http://webenlance.com">Clipping Path</a></li>
            <li><a href="http://webenlance.com">Hollow Man Montage</a></li>
            <li><a href="http://webenlance.com">Ebay & Amazon</a></li>
            <li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
            <li><a href="http://webenlance.com">Image Cropping</a></li>
            </ul>
            
            </div>
            
            
            <div class=" col-sm-4 col-md  col-6 col">
            <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
            
            <ul class="footer_ul_amrc">
            <li><a href="http://webenlance.com">Remove Background</a></li>
            <li><a href="http://webenlance.com">Shadows & Mirror Reflection</a></li>
            <li><a href="http://webenlance.com">Logo Design</a></li>
            <li><a href="http://webenlance.com">Vectorization</a></li>
            <li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
            <li><a href="http://webenlance.com">Image Cropping</a></li>
            </ul>
            
            </div>
            
            
            <div class=" col-sm-4 col-md  col-12 col">
            <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
            
            
            <ul class="footer_ul2_amrc">
            <li><a href="#"><i class="fa fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
            <li><a href="#"><i class="fa fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
            <li><a href="#"><i class="fa fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
            </ul>
            
            </div>
            </div>
            </div> -->
    <div class="container">
      <!-- <ul class="foote_bottom_ul_amrc">
               <li><a href="http://webenlance.com">Home</a></li>
               <li><a href="http://webenlance.com">About</a></li>
               <li><a href="http://webenlance.com">Services</a></li>
               <li><a href="http://webenlance.com">Pricing</a></li>
               <li><a href="http://webenlance.com">Blog</a></li>
               <li><a href="http://webenlance.com">Contact</a></li>
               </ul> -->
      <!--foote_bottom_ul_amrc ends here-->
      <div class="row text-white">
        <!-- <div class="text-white"> -->
        <!--  <div class="col-md-4">VIKI -Voice AI Companion For Seniors</div>
                  <div class="col-md-4">IP, Copyright 2019 Owned By AiRo Digital Labs LLC</div>
                  <a href='#top'><div class="col-md-4"><span class="scroll-top"><i class="fa fa-angle-up"></i></span></div></a>
 -->
        <!-- <a href='#top'><span class="scroll-top"><i class="fa fa-angle-up"></i></span></a> -->
        <!-- </div> -->
        <div class="col">
          <div class="copyright-text">
            <!-- <p>IP, Copyright 2019 Owned By AiRo Digital Labs LLC</p>
            <p>VIKI -Voice AI Companion For Seniors</p> -->
            <img src="images/viki_logo_footer.png" alt="viki_footer" class="img-fluid img-fluid-cust footer-logo logo-footer">
          </div>
        </div>

        <div class="col">
         <!--  <ul class="social-link pull-right">
            <li><a href="#top"><span class="scroll-top"><i class="fa fa-angle-up"></i></span></a>
            </li>
          </ul> -->
        </div>
        <!-- End Col -->
        <div class="col">
          
          <div class="copyright-text">
            <p><strong>Copyright &copy; 2019 Owned By AiRo Digital Labs LLC</strong></p>
            <!-- <p>VIKI -Voice AI Companion For Seniors</p> -->
          </div>
        </div>
        <!-- End Col -->
      </div>
    </div>
    <!-- <p class="text-center">VIKI</p>
            <p class="text-center">Voice AI Based Companion For Seniors</p>
            <p class="text-center copyright">Copyright @2019 VIKI</p> -->
    <!-- <ul class="social_footer_ul">
               <li><a href="http://webenlance.com"><i class="fa fa-facebook-f"></i></a></li>
               <li><a href="http://webenlance.com"><i class="fa fa-twitter"></i></a></li>
               <li><a href="http://webenlance.com"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="http://webenlance.com"><i class="fa fa-instagram"></i></a></li>
               </ul> -->
    <!--social_footer_ul ends here-->
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- <script src="js/script.min.js"></script> -->
    <script type="text/javascript">
    AOS.init();
  </script>
  <script type="text/javascript">
    $(window).scroll(function() {
  var header = $(document).scrollTop();
  var headerHeight = $(".header").outerHeight();
  var firstSection = $(".main-container section:nth-of-type(1)").outerHeight();
  if (header > headerHeight) {
    $(".header").addClass("fixed");
  } else {
    $(".header").removeClass("fixed");
  }
  if (header > firstSection) {
    $(".header").addClass("in-view");
  } else {
    $(".header").removeClass("in-view");
  }
});
  </script>
  <script type="text/javascript">
    $(function () { 
    $(window).scroll(function () {
        if ($(this).scrollTop() < 20000) { 
            $('.logo img').attr('src','images/viki_logo_white.png');
            $('.logo2 img').attr('src','images/airologo.png');
        }
        if ($(this).scrollTop() == 0) { 
            $('.logo img').attr('src','images/logo_white.png');
            $('.logo2 img').attr('src','images/airo_logo_white.png');
        }
    })
});
  </script>
</body>
</html>