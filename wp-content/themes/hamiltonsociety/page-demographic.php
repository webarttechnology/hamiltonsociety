<?php /* Template Name: Demographic We Serve */

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
<section class="we-serve">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="serve-content text-center pt-4">
				<h2>
					DEMOGRAPHIC WE SERVE
				</h2>
				<p>
					Welcome to Hamilton Society Housing, where we strive to provide affordable and inclusive housing options for individuals receiving government assistance such as Supplemental Security Income (SSI), Social Security Disability (SSD), or other forms of government support. We understand the importance of having a safe and comfortable place to call home, and our mission is to ensure that all residents have equal access to quality housing.
				</p>
			</div>
		</div>
	</div>
	</div>
</section>
<section class="care-section py-5">
    <div class="container">

        <?php  
 $fields = CFS()->get( 'demographic_loop' );
 if(is_array($fields) || is_object($fields)){
foreach ( $fields as $field ) {

?>
        <div class="row align-items-center py-5">
            <div class="col-md-6 mb-4">
                <div class="lft-image">
                    <img src="<?php echo $field['demographic_image']; ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="content">
					<h4><?php echo $field['demographic_subheading']; ?></h4>
                    <?php echo $field['demographic_content']; ?>
                    <div class="banner-btn discover-btn-banner">
                                    <a href="tel:<?php echo get_field('phone_number',52); ?>" class="text-decoration-none"><?php echo $field['demographic_button']; ?></a>
                                </div>
                </div>
            </div>
        </div>

        <?php }  } ?>
        <!-- <div class="row align-items-center py-5">
            <div class="col-md-6">
                <div class="content">
                    <p class="mt-5">We are the premier MHMR housing organization catering to the special needs of people diagnosed with mental health, mental retardation, mental illness and other developmental and behavioral health related issues. Our MHMR group homes and other special needs and disabled group homes have allowed us to become the most highly regarded MHMR housing organization in the local area. We are committed to providing a caring and compassionate environment for all our special needs clients.</p>
            <p><strong>Do you know someone with a cognitive or behavioral health condition in need of housing? Click here now to contact us immediately and schedule a free intake appointment at one of our group homes and residential care homes.</strong></p>

            <div class="banner-btn discover-btn-banner">
                                    <a href="tel:610 421 1999" class="text-decoration-none">Call Us</a>
                                </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="lft-image">
                    <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/demog-2-min.jpg">
                </div>
            </div>
        </div> -->

        <!-- <div class="row align-items-center py-5">
            <div class="col-md-6 mb-4">
                <div class="lft-image">
                    <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/demog-3-min.jpg">
                </div>
            </div>
            <div class="col-md-6">
                <div class="content">
                    <p>We have been the premier provider of housing and related services for the “special needs” population since we set up our first group home. In fact, many people in the community refer to us as the pioneers in the industry!</p>
                    <p>Our operations team has a background in providing housing for the following target demographics:</p>
                    <h4>MHMR With Cognitive and Behavioral Health Conditions</h4>
                    <div class="banner-btn discover-btn-banner">
                                    <a href="tel:610 421 1999" class="text-decoration-none">Call Us</a>
                                </div>
                </div>
            </div>
        </div> -->

        <!-- <div class="row align-items-center py-5">
            
            <div class="col-md-6">
                <div class="content">
                    <p>We have been the premier provider of housing and related services for the “special needs” population since we set up our first group home. In fact, many people in the community refer to us as the pioneers in the industry!</p>
                    <p>Our operations team has a background in providing housing for the following target demographics:</p>
                    <h4>MHMR With Cognitive and Behavioral Health Conditions</h4>
                    <div class="banner-btn discover-btn-banner">
                                    <a href="tel:610 421 1999" class="text-decoration-none">Call Us</a>
                                </div>
                </div>
            </div>
        <div class="col-md-6 mb-4">
                <div class="lft-image">
                    <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/demog-4-min.jpg">
                </div>
            </div>
        </div> -->

        <!-- <div class="row align-items-center py-5">
            <div class="col-md-6 mb-4">
                <div class="lft-image">
                    <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/demog-5-min.jpg">
                </div>
            </div>
            <div class="col-md-6">
                <div class="content">
                    <p>We have been the premier provider of housing and related services for the “special needs” population since we set up our first group home. In fact, many people in the community refer to us as the pioneers in the industry!</p>
                    <p>Our operations team has a background in providing housing for the following target demographics:</p>
                    <h4>MHMR With Cognitive and Behavioral Health Conditions</h4>
                    <div class="banner-btn discover-btn-banner">
                                    <a href="tel:610 421 1999" class="text-decoration-none">Call Us</a>
                                </div>
                </div>
            </div>
        </div> -->

        <!-- <div class="row align-items-center py-5">
            <div class="col-md-6">
                <div class="content">
                    <p>We have been the premier provider of housing and related services for the “special needs” population since we set up our first group home. In fact, many people in the community refer to us as the pioneers in the industry!</p>
                    <p>Our operations team has a background in providing housing for the following target demographics:</p>
                    <h4>MHMR With Cognitive and Behavioral Health Conditions</h4>
                    <div class="banner-btn discover-btn-banner">
                                    <a href="tel:610 421 1999" class="text-decoration-none">Call Us</a>
                                </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="lft-image">
                    <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/demog-6-min.jpg">
                </div>
            </div>
        </div> -->
    </div>
</section>


<section class="touch-section py-5" style="background-image:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url(<?php echo get_field('touch_section_image',41); ?>)">
    <div class="container">
        <div class="touch-content">
            <h4><?php echo get_field('touch_section_heading',41); ?></h4>
            <a href="mailto:<?php echo get_field('email',52); ?>">support@hamiltonsocietyhousing.org</a>
            <p>718-974-4993</p>
        </div>
    </div>
</section>



<?php get_footer(); ?>