<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>ON GRADE CIVIL & HIRE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <!-- css parts start -->
    <?php include('inc/css.php') ?>
    <!-- css part ends -->
</head>

<body>

    <!-- header parts start -->
    <?php include('inc/header.php') ?>
    <!-- header part ends -->

    <!-- banner and headre page  -->
    <?php
    $page_name = 'Contact Us';
    include('inc/breadcrumb.php');
    ?>
    <!-- banner and header page -->

    <section class="contact-page py-5">
        <!-- Contact Start -->
        <div class="container-fluid bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="d-flex flex-column justify-content-center h-100 p-3">
                            <div class="d-inline-flex border p-4 mb-4" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                                <span class="flaticon font-weight-normal text-secondary m-0 mr-3">
                                    <img src="assets/img/icon/location.png" alt="">
                                </span>
                                <div class="d-flex flex-column contact-info-box pl-2">
                                    <h4>Our Office</h4>
                                    <p class="m-0">Duncraig, WA 6023</p>
                                </div>
                            </div>
                            <div class="d-inline-flex border p-4 mb-4" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                                <span class="flaticon font-weight-normal text-secondary m-0 mr-3">
                                    <img src="assets/img/icon/email.png" alt="">
                                </span>
                                <div class="d-flex flex-column contact-info-box pl-2">
                                    <h4>Email Us</h4>
                                    <p class="m-0">demo@example.com</p>
                                </div>
                            </div>
                            <div class="d-inline-flex border p-4 mb-4" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                                <span class="flaticon font-weight-normal text-secondary m-0 mr-3">
                                    <img src="assets/img/icon/phone-call.png" alt="">
                                </span>
                                <div class="d-flex flex-column contact-info-box pl-2">
                                    <h4>Call Us Today</h4>
                                    <p class="m-0"><a href="tel:0434406455">0434406455</a></p>
                                </div>
                            </div>
                            <div class="d-inline-flex border p-4" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                                <span class="flaticon font-weight-normal text-secondary m-0 mr-3">
                                    <img src="assets/img/icon/clock.png" alt="">
                                </span>
                                <div class="d-flex flex-column contact-info-box pl-2">
                                    <h4>Monday - Friday</h4>
                                    <p class="m-0"> 9 AM - 5 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 mb-5 my-lg-2 py-3 pl-lg-3">
                        <h3 class="mb-4 section-title">
                        Contact Us
                        </h3>
                        <div class="contact-form">
                            <div id="success"></div>
                            <form name="sentMessage" id="contactForm" novalidate="novalidate" action="php/contact-form.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="control-group">
                                            <input name="frmfullName" type="text" class="form-control p-4" id="fullname" placeholder="Full Name" required="required" data-validation-required-message="Please enter your full name" aria-invalid="false">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="control-group">
                                            <input name="frmphoneNumber" type="tel" class="form-control p-4" id="phone" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number" aria-invalid="false">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="control-group">
                                            <input name="frmEmail" type="email" class="form-control p-4" id="email" placeholder="Email" required="required" data-validation-required-message="Please enter your email" aria-invalid="false">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="control-group">
                                            <input name="frmSubject" type="text" class="form-control p-4" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" aria-invalid="false">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <textarea name="frmMessage" class="form-control p-4" rows="6" id="message" placeholder="Your Message" required="required" data-validation-required-message="Please enter your message" aria-invalid="false"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="home-form-btn">
                                    <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton">
                                        Send Message
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
    </section>

    <!-- ---------------------------footer starts--------------------- -->
    <?php

    include('inc/footer.php');
    include('inc/js.php')
    ?>

    <script>
        const navItems = document.querySelectorAll('.navbar-nav > a ');
        if (navItems.length >= 5) {
            navItems[4].classList.add("active");
        }
    </script>

</body>

</html>