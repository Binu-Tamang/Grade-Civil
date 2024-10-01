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
    $page_name = 'Get a Quote';
    include('inc/breadcrumb.php');
    ?>
    <!-- banner and header page -->

    <section class="quote-page py-5">
        <!-- Quote Start -->
        <div class="container">
            <div class="quote-form">
                <h3 class="mb-3 sub-hhd text-center">Get a Free Quote</h3>
                <p class="text-center">Fill out the form below to receive a detailed and personalized quote for your project. Our team will review your information and get back to you as soon as possible. We look forward to working with you!</p>
                <div id="quote-success"></div>
                <form name="getQuoteForm" id="getQuoteForm" action="php/quote-form.php" method="POST" novalidate="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="control-group">
                                <input type="text" class="form-control p-3" id="fullname" name="fullname" placeholder="Full Name" required aria-label="Full Name">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="control-group">
                                <input type="tel" class="form-control p-3" id="phone" name="phone" placeholder="Phone Number" required aria-label="Phone Number">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="control-group">
                                <input type="email" class="form-control p-3" id="email" name="email" placeholder="Email" required aria-label="Email">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="control-group">
                                <input type="text" class="form-control p-3" id="location" name="location" placeholder="Project Location" required aria-label="Project Location">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <select class="form-control p-3" id="service" name="service" required aria-label="Select Service">
                            <option value="" disabled selected>Select Service</option>
                            <option value="land-clearing">Land Clearing</option>
                            <option value="small-subdivisions">Small Subdivisions</option>
                            <option value="site-preparation">Site Preparation</option>
                            <option value="sand-pads">Sand Pads</option>
                            <option value="compaction-certificates">Compaction and Compaction Certificates</option>
                            <option value="basements-undercrofts">Basements and Undercrofts</option>
                            <option value="bulk-earthworks">Bulk Earthworks</option>
                            <option value="cut-fill">Cut and Fill</option>
                            <option value="stormwater-drainage">Stormwater Drainage / Soakwells</option>
                            <option value="swimming-pools">Swimming Pools Excavated and Filled In</option>
                            <option value="retaining-walls">Retaining Walls</option>
                        </select>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control p-3" rows="6" id="description" name="description" placeholder="Project Description" required aria-label="Project Description"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>

                    <div class="col-12 mb-3 d-flex justify-content-center">
                        <div id="google_recaptcha"></div>
                    </div>

                    <div class="home-form-btn text-center">
                        <button class="btn btn-primary py-3 px-5" type="submit" id="quoteButton">
                            Submit Now
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Quote End -->
    </section>

    <!-- ---------------------------footer starts--------------------- -->
    <?php

    include('inc/footer.php');
    include('inc/js.php')
    ?>

    <!-- FOR THE RECAPTCHA FORM -->
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>

    <script>
        var onloadCallback = function() {
            grecaptcha.render('google_recaptcha', {
                'sitekey': '6LeYZVMqAAAAAOXUGhz7h6taYsM-NpuJHTjFwt_l'
            });
        };

        // Form Submit Event
        $("#submit-form").click(function(event) { // Added 'event' as a parameter
            event.preventDefault(); // Prevent default form submission
            var form = $('#contactForm');
            if (form[0].checkValidity() === false) {
                alert('Please check the form for any errors!');
            } else {
                var rcres = grecaptcha.getResponse();
                if (rcres.length) {
                    grecaptcha.reset();
                    form.submit();
                    // showHideMsg("Form Submitted!", "success");
                } else {
                    alert("Please verify reC    APTCHA");
                }
            }
        });
    </script>

</body>

</html>