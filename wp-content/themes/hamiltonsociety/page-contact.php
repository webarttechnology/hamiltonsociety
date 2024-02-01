<?php /* Template Name: Contact */

get_header();

 ?>


<!-- BANNER-SECTION -->
         <div class="home-banner-section overflow-hidden d-none">
            <div class="banner-container-box">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 mb-md-0 mb-4 text-lg-left text-center">
                            <div class="home-banner-text"  data-aos="fade-up">
                                <h1>Welcome to Hamilton Society</h1>
                                <p class="banner-paragraph"></p>
                                <div class="banner-btn discover-btn-banner">
                                    <a href="tel:6104211999" class="text-decoration-none">Call Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- offer-section -->
    <div class="offer-section offer-section1 about-offer-section contact-offer-section"  data-aos="fade-up">
        <h2 class="offer-heading">We alway here to<span class="support"> help you</span></h2>
       <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 mb-lg-0 mb-md-0 mb-3">
                <div class="offer-section-box">
                    <h5>Address</h5>
                    <p>926 N 7th Street Allentown, PA 18102</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 mb-lg-0 mb-md-0 mb-3">
                <div class="offer-section-box">
                    <h5>Phone</h5>
                    <p>610 421 1999</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 mb-lg-0 mb-md-0 mb-0">
                <div class="offer-section-box">
                    <h5>Email</h5>
                    <p>support@hamiltonsocietyhousing.org</p>
                </div>
            </div>
        </div>
       </div>
    </div>

    <!--Happy-Clients-Section  -->
<section class="happy-clients-section happy-clients-section3 contact-form-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h2  data-aos="fade-up">Contact Form</h2>
                    <div class="carousel-card-form position-relative"> 
                        <?php echo do_shortcode('[contact-form-7 id="5dd00bc" title="Contact Page Form"]'); ?>
                            <!-- <form method="post" action="https://html.designingmedia.com/sencare/contact-form.php">
                                <div class="row">                           
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                       <div class="border-bottom-outer position-relative">
                                        <input class="form-input-fields" type="text" id="fname" name="fname" placeholder="First Name">
                                       </div>
                                        <input class="form-input-fields" type="text" id="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <input class="form-input-fields" type="text" id="lname" name="lname" placeholder="Last Name">
                                        <input class="form-input-fields" type="text" id="phone" name="phone" placeholder="Phone">
                                    </div>                         
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <input type="text" id="message" name="message" class="message-field" placeholder="Message">
                                        <div class="popup-btn">
                                            <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
                                        </div>
                                    </div>
                                    <figure class="carousel-bottom-fig">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/transparent.png" alt="" class="img-fluid" style="width:200px;">
                                        </figure>
                                </div>
                            </form> -->
                    </div>
            </div> 
        </div>
    </div>
</section> 



 <?php get_footer(); ?>