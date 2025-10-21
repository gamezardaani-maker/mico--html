<?php
// Include data and functions to use navigation items
include_once 'data.php';
include_once 'functions.php';

// Sanitize POST data
$patientName = htmlspecialchars($_POST['patient_name'] ?? '');
$doctor = htmlspecialchars($_POST['doctor'] ?? '');
$department = htmlspecialchars($_POST['department'] ?? '');
$phone = htmlspecialchars($_POST['phone'] ?? '');
$symptoms = htmlspecialchars($_POST['symptoms'] ?? '');
$appointmentDate = htmlspecialchars($_POST['appointment_date'] ?? '');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Booking Confirmation</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
</head>
<body>

<!-- Header Navigation -->
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

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                    <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav">
                            <?php renderNavMenu($navItems); ?>
                        </ul>
                    </div>
                    <div class="quote_btn-container">
                        <?php renderAuthLinks($authLinks); ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- End Header Navigation -->

<!-- Booking Confirmation Section -->
<section class="book_section layout_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="form_container p-4" style="background: #fff; border-radius: 10px; box-shadow: 0 0 15px rgba(0,0,0,0.1);">
                    <h4 class="text-center mb-4">
                        BOOK <span>APPOINTMENT</span> - <small>Confirmed</small>
                    </h4>
                    <p class="text-center mb-4">Thank you, <strong><?php echo $patientName; ?></strong>! Your booking has been received with the following details:</p>
                    
                    <form>
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label>Doctor:</label>
                                <input type="text" class="form-control" value="<?php echo $doctor; ?>" readonly>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Department:</label>
                                <input type="text" class="form-control" value="<?php echo $department; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label>Phone:</label>
                                <input type="text" class="form-control" value="<?php echo $phone; ?>" readonly>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Appointment Date:</label>
                                <input type="text" class="form-control" value="<?php echo $appointmentDate; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Symptoms:</label>
                            <textarea class="form-control" rows="3" readonly><?php echo $symptoms; ?></textarea>
                        </div>

                        <div class="text-center mt-4">
                            <a href="index.php" class="btn"><?php echo $submitButton['text']; ?> Another</a>
                        </div>
                    </form>

                    <p class="text-center mt-3 text-muted">
                        We will contact you shortly to confirm your appointment.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Optional Footer -->
<footer class="footer_section">
    <div class="container">
        <p>
            &copy; <span id="displayYear"></span> All Rights Reserved By
            <a href="https://html.design/">Free Html Templates</a>
        </p>
    </div>
</footer>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
