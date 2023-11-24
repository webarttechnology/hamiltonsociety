<?php /* Template Name: Continue Education */

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

<section class="image-text-section py-5">
    <div class="container">
        <?php  
 $fields = CFS()->get( 'education_page_loop' );
 if(is_array($fields) || is_object($fields)){
foreach ( $fields as $field ) {

?>
        <div class="row align-items-center mb-5">
            <div class="col-md-6 mb-4">
                <div class="image">
                    <img src="<?php echo $field['education_page_image']; ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="content">
                    <h3><?php echo $field['education_page_heading']; ?></h3>
                    <p><?php echo $field['education_page_content']; ?></p>
                    <div class="banner-btn discover-btn-banner">
                                    <a href="tel:<?php echo get_field('phone_number',52); ?>" class="text-decoration-none"><?php echo $field['education_page_button']; ?></a>
                                </div>
                </div>
            </div>
        </div>
        <?php }  } ?>
        <!-- <div class="row align-items-center mb-5">
            <div class="col-md-6 mb-4">
                <div class="image">
                    <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/ed2.jpg">
                </div>
            </div>
            <div class="col-md-6">
                <div class="content">
                    <h3>Partnering for Success</h3>
                    <p>At Hamilton Society, we value collaboration and transparency. We work closely with you, your caregivers, and other support networks to ensure that your financial management aligns with your unique goals and needs. We are dedicated to building a trusting and respectful relationship with our beneficiaries, placing their best interests at the forefront of everything we do.

</p>
                    <div class="banner-btn discover-btn-banner">
                                    <a href="tel:610 421 1999" class="text-decoration-none">Call Us</a>
                                </div>
                </div>
            </div>
        </div> -->
    </div>
</section>

 <?php get_footer(); ?>