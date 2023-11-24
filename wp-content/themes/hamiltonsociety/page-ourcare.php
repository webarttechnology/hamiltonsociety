<?php /* Template Name: Our Care */

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
                                    <a href="tel:610 421 1999" class="text-decoration-none">Call Us</a>
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

<section class="care-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4">
                <div class="lft-image">
                    <img src="<?php echo get_field('our_care_image'); ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="content">
                    <p><?php echo get_field('our_care_content'); ?></p>
                    <?php echo get_field('our_care_point'); ?>
                    <p><?php echo get_field('our_care_content2'); ?></p>
                    <?php echo get_field('our_care_point2'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="touch-section py-5" style="background-image:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url(<?php echo get_field('touch_section_image'); ?>)">
    <div class="container">
        <div class="touch-content">
            <h4><?php echo get_field('touch_section_heading'); ?></h4>
            <a href="mailto:<?php echo get_field('email',52); ?>">support@hamiltonsocietyhousing.org</a>
            <p>610-421-1999</p>
        </div>
    </div>
</section>








<?php get_footer(); ?>