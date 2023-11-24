<?php /* Template Name: Housing Program */

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
        <div class="row align-items-center mb-5 shadows">
            <div class="col-md-12">
                <div class="content">
                    <p><?php echo get_field('housing_top_content'); ?></p>
                </div>
            </div>
        </div>
<?php  
 $fields = CFS()->get( 'housing_page_loop' );
 if(is_array($fields) || is_object($fields)){
foreach ( $fields as $field ) {

?>
        <div class="row align-items-center mb-5">
            <div class="col-md-6 mb-4">
                <div class="image">
                    <img src="<?php echo $field['housing_page_image']; ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="content">
                    <h3><?php echo $field['housing_page_heading']; ?></h3>
                    <p><?php echo $field['housing_page_content']; ?></p>
                    <div class="banner-btn discover-btn-banner">
                                    <a href="tel:<?php echo get_field('phone_number',52); ?>" class="text-decoration-none"><?php echo $field['housing_page_button']; ?></a>
                                </div>
                </div>
            </div>
        </div>
<?php }  } ?>
        <!-- <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <div class="image">
                    <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/download-3.jpg">
                </div>
            </div>
            <div class="col-md-6">
                <div class="content">
                    <h3>Transitional Housing:</h3>
                    <p>If you are in need of temporary housing during a transitional period, our transitional housing options are here to support you. Whether you are transitioning from homelessness, leaving a rehabilitation program, or going through a life change, our transitional housing provides a stable and supportive environment to help you regain independence and stability.</p>
                    <div class="banner-btn discover-btn-banner">
                                    <a href="tel:610 421 1999" class="text-decoration-none">Call Us</a>
                                </div>
                </div>
            </div>
        </div> -->

        <!-- <div class="row align-items-center mb-5">
            <div class="col-md-6 mb-4">
                <div class="image">
                    <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/AdobeStock_243447334-2-scaled.jpeg">
                </div>
            </div>
            <div class="col-md-6">
                <div class="content">
                    <h3>Veteran Housing:</h3>
                    <p>We proudly offer housing options specifically tailored to meet the unique needs of our veterans. Our veteran housing provides a safe and welcoming environment for those who have served our country. We offer supportive services, including counseling, job placement assistance, and connections to veteran resources, to help veterans successfully reintegrate into civilian life.</p>
                    <div class="banner-btn discover-btn-banner">
                                    <a href="tel:610 421 1999" class="text-decoration-none">Call Us</a>
                                </div>
                </div>
            </div>
        </div> -->
        <!-- <div class="row align-items-center mb-5">
            <div class="col-md-6 mb-4">
                <div class="image">
                    <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/assisted_living_in_florida.jpg">
                </div>
            </div>
            <div class="col-md-6">
                <div class="content">
                    <h3>Group Homes:</h3>
                    <p>Our group homes provide a supportive living environment for individuals who benefit from a communal setting. Whether you have a developmental disability, mental health condition, or other special needs, our group homes offer a sense of community, companionship, and round-the-clock support. Our outsourced service providers ensures that each resident receives individualized care and assistance tailored to their specific needs.</p>
                    <div class="banner-btn discover-btn-banner">
                                    <a href="tel:610 421 1999" class="text-decoration-none">Call Us</a>
                                </div>
                </div>
            </div>
        </div> -->
        <div class="row align-items-center py-5 shadows mb-5">
            <div class="col-md-12">
                <div class="content">
                    <h3><?php echo get_field('sobar_home_heading'); ?></h3>
                    <p><?php echo get_field('sobar_home_content'); ?></p>
                    <div class="banner-btn discover-btn-banner">
                                    <a href="tel:<?php echo get_field('phone_number',52); ?>" class="text-decoration-none"><?php echo get_field('sobar_home_button'); ?></a>
                                </div>
                </div>
            </div>
        </div>

        <?php  
 $fields = CFS()->get( 'housing_page_loop2' );
 if(is_array($fields) || is_object($fields)){
foreach ( $fields as $field ) {

?>
        <div class="row align-items-center mb-5">
            <div class="col-md-6 mb-4">
                <div class="image">
                    <img src="<?php echo $field['housing_page_image2']; ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="content">
                    <h3><?php echo $field['housing_page_heading2']; ?></h3>
                    <?php echo $field['housing_page_content2']; ?>
                    <div class="banner-btn discover-btn-banner">
                                    <a href="tel:<?php echo get_field('phone_number',52); ?>" class="text-decoration-none"><?php echo $field['housing_page_button2']; ?></a>
                                </div>
                </div>
            </div>
        </div>
        <?php }  } ?>
        <!-- <div class="row align-items-center mb-5">
            <div class="col-md-6 mb-4">
                <div class="image">
                    <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/Senior-and-Elderly-Care.jpg">
                </div>
            </div>
            <div class="col-md-6">
                <div class="content">
                    <h3>Aging Out of Foster Care</h3>
                    <p>Congratulations on reaching this important milestone in your life. As you transition out of foster care and prepare to embark on your journey into adulthood, we are here to provide you with a safe, supportive, and nurturing environment at Hamilton Society Housing.</p>
                    <p>At Hamilton Society Housing, we understand the unique challenges that come with aging out of foster care. We are committed to providing you with a place to call home, where you can thrive and reach your full potential. Here's what our program offers:</p>
                    <div class="banner-btn discover-btn-banner">
                                    <a href="tel:610 421 1999" class="text-decoration-none">Call Us</a>
                                </div>
                </div>
            </div>
        </div>  --> 
        <!-- <div class="row align-items-center mb-5">
            <div class="col-md-6 mb-4">
                <div class="image">
                    <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/1-1000x675.png">
                </div>
            </div>
            <div class="col-md-6">
                <div class="content">
                    <h3> Safe and Affordable Housing:</h3>
                    <p>We provide safe and affordable housing options specifically designed for youth aging out of foster care. Our comfortable  are fully furnished and equipped with all the essentials to ensure you have a comfortable living space. We prioritize your safety and security, and our staff is available 24/7 to address any concerns or emergencies.</p>
                    <div class="banner-btn discover-btn-banner">
                                    <a href="tel:610 421 1999" class="text-decoration-none">Call Us</a>
                                </div>
                </div>
            </div>
        </div> --> 
        <!-- <div class="row align-items-center mb-5">
            <div class="col-md-6 mb-4">
                <div class="image">
                    <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/467305389-1024x683.jpg">
                </div>
            </div>
            <div class="col-md-6">
                <div class="content">
                    <h3>Emotional Support and Mentoring:</h3>
                    <p>We understand that the transition from foster care to independent living can be emotionally challenging. Our program offers access to counseling services and support groups to help you navigate any emotional hurdles you may encounter. Additionally, we provide mentoring programs that connect you with experienced adults who can offer guidance, encouragement, and a listening ear. We believe in the power of a supportive community to help you thrive.</p>
                    <div class="banner-btn discover-btn-banner">
                                    <a href="tel:610 421 1999" class="text-decoration-none">Call Us</a>
                                </div>
                </div>
            </div>
        </div> -->
        <div class="row align-items-center py-5 shadows">
            <div class="col-md-12">
                <div class="content">
                    <h3><?php echo get_field('join_society_heading'); ?></h3>
                    <?php echo get_field('join_society_content'); ?>
                    <div class="banner-btn discover-btn-banner">
                                    <a href="tel:<?php echo get_field('phone_number',52); ?>" class="text-decoration-none"><?php echo get_field('join_society_button'); ?></a>
                                </div>
                </div>
            </div>
        </div>
        
    </div>
</section>

<section class="many-more py-5">
    <div class="container">
        <div class="col-md-12">
                <div class="content">
                    <h3><?php echo get_field('many_more_heading'); ?></h3>
                    <p><?php echo get_field('many_more_content'); ?></p>
                </div>
            </div>
    </div>
</section>

<section class="contact-section py-5">
    <div class="container">
        <div class="col-md-12">
                <div class="content">
                    <h3><?php echo get_field('contact_heading'); ?></h3>
                    <?php echo get_field('contact_content'); ?>
                </div>
            </div>
    </div>
</section>


 <?php get_footer(); ?>