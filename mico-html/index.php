<?php
// connecting data and functions
include 'data.php';      // contains arrays 
include 'functions.php'; // contains reusable functions

?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Mico</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container">
          <div class="contact_nav">
              <?php renderContactInfo($contactInfo); ?>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.php">
              <img src="images/logo.png" alt="">
            </a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav  ">
                   <?php renderNavMenu($navItems); ?>
                </ul>
              </div>
              <div class="quote_btn-container">
                 <?php renderAuthLinks($authLinks); ?>
                <form class="form-inline">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->

    <!-- slider section -->
    <section class="slider_section ">
      <div class="dot_design">
        <img src="images/dots.png" alt="">
      </div>
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
         <?php renderCarousel($slides); ?>
                
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <img src="images/prev.png" alt="">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <img src="images/next.png" alt="">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>


  
  <!-- book section -->
<section class="book_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <form method="POST" action="booking-confirmation.php">
                    <h4>
                        BOOK <span>APPOINTMENT</span>
                    </h4>

                    <!-- First row: Patient, Doctor, Department -->
                    <div class="form-row">
                        <div class="form-group col-lg-4">
                            <label for="inputPatientName">Patient Name</label>
                            <input type="text" class="form-control" id="inputPatientName" name="patient_name" placeholder="<?php echo $formFields[0]['placeholder']; ?>">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="inputDoctorName">Doctor's Name</label>
                            <select class="form-control" id="inputDoctorName" name="doctor">
                                <?php renderSelectOptions($doctors); ?>
                            </select>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="inputDepartmentName">Department's Name</label>
                            <select class="form-control" id="inputDepartmentName" name="department">
                                <?php renderSelectOptions($departments); ?>
                            </select>
                        </div>
                    </div>

                    <!-- Second row: Phone, Symptoms, Date -->
                    <div class="form-row">
                        <div class="form-group col-lg-4">
                            <label for="inputPhone">Phone Number</label>
                            <input type="number" class="form-control" id="inputPhone" name="phone" placeholder="<?php echo $formFields[1]['placeholder']; ?>">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="inputSymptoms">Symptoms</label>
                            <input type="text" class="form-control" id="inputSymptoms" name="symptoms" placeholder="<?php echo $formFields[2]['placeholder']; ?>">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="inputDate">Choose Date</label>
                            <div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy">
                                <input type="text" class="form-control" name="appointment_date" readonly>
                                <span class="input-group-addon date_icon">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <div class="btn-box">
                        <button type="submit" class="btn"><?php echo $submitButton['text']; ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- end book section -->

  


  <!-- about section -->
   <section class="about_section">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About <span>Hospital</span>
              </h2>
            </div>
            <p>
              has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors
            </p>
            <a href="about.php">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
    </section>

  <!-- end about section -->


  <!-- treatment section -->

  <section class="treatment_section layout_padding">
    <div class="side_img">
      <img src="images/treatment-side-img.jpg" alt="">
    </div>
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Hospital <span>Treatment</span>
        </h2>
      </div>
      <div class="row">
        <?php renderTreatments($treatments); ?>

</div>
</div>
  </section>

  <!-- end treatment section -->

  <!-- team section -->

  <section class="team_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our <span>Doctors</span>
        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel team_carousel">
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/team1.jpg" alt="" />
              </div>
              <div class="detail-box">
                <h5>
                  Hennry
                </h5>
                <h6>
                  MBBS
                </h6>
                <div class="social_box">
                  <a href="">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/team2.jpg" alt="" />
              </div>
              <div class="detail-box">
                <h5>
                  Jenni
                </h5>
                <h6>
                  MBBS
                </h6>
                <div class="social_box">
                  <a href="">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/team3.jpg" alt="" />
              </div>
              <div class="detail-box">
                <h5>
                  Morco
                </h5>
                <h6>
                  MBBS
                </h6>
                <div class="social_box">
                  <a href="">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end team section -->


  <!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          <span>Testimonial</span>
        </h2>
      </div>
    </div>
    <div class="container px-0">
      <div id="customCarousel2" class="carousel  carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Morijorch
                  </h5>
                  <h6>
                    Default model text
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Rochak
                  </h5>
                  <h6>
                    Default model text
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Brad Johns
                  </h5>
                  <h6>
                    Default model text
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy, editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various
              </p>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end client section -->

  <!-- contact section -->
  <section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Get In Touch
        </h2>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="form_container">
            <form action="">
              <div>
                <input type="text" placeholder="Full Name" />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" placeholder="Phone Number" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-5">
          <div class="img-box">
            <img src="images/contact-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="info_top">
        <div class="info_logo">
          <a href="">
            <img src="images/logo.png" alt="">
          </a>
        </div>
        <div class="info_form">
          <form action="">
            <input type="email" placeholder="Your email">
            <button>
              Subscribe
            </button>
          </form>
        </div>
      </div>
      <div class="info_bottom layout_padding2">
        <div class="row info_main_row">
           <?php 
            render_contact_section($address['contacts'], $address['social']);
            render_links_section($useful_links);
            render_posts_section($posts);
        ?>
        </div>
    </div>
  </section>
  <!-- end info_section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- datepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>


</body>

</html>