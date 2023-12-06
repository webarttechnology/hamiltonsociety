<?php /* Template Name: About */

get_header();

 ?>

    <!-- offer-section -->
    <div class="offer-section offer-section1 about-offer-section d-none" data-aos="fade-up">
        <h2 class="offer-heading"><?php echo get_field('about_heading'); ?></h2>
       <div class="container">
        <div class="row">
            <?php  
 $fields = CFS()->get( 'about_support_loop' );
 if(is_array($fields) || is_object($fields)){
foreach ( $fields as $field ) {

?>
            <div class="col-lg-4 col-md-4 col-sm-6 mb-lg-0 mb-md-0 mb-3">
                <div class="offer-section-box">
                    <!-- <div class="offer-section-inner">
                        <figure>
                            <img src="assets/images/offer-section-img1.png" alt="" class="img-fluid">
                        </figure>
                    </div> -->
                    <h5><?php echo $field['about_support_heading']; ?></h5>
                    <p><?php echo $field['about_support_content']; ?></p>
                </div>
            </div>
<?php }  } ?>
            <!-- <div class="col-lg-4 col-md-4 col-sm-6 mb-lg-0 mb-md-0 mb-3">
                <div class="offer-section-box">
                    <h5>Our Mission</h5>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                </div>
            </div> -->
            <!-- <div class="col-lg-4 col-md-4 col-sm-6 mb-lg-0 mb-md-0 mb-3">
                <div class="offer-section-box">
                    <h5>Careers</h5>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                </div>
            </div> -->
        </div>
       </div>
    </div>
    <!-- Popup-Section -->
    <div class="offer-section popup-section position-relative d-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 mb-lg-0 mb-md-0 mb-3">
                    <h2  data-aos="fade-up"><?php echo get_field('clinical_advice_heading'); ?></h2>
                    <p><?php echo get_field('clinical_advice_content'); ?></p>
                  <div class="popup-btn">
                      <a href="tel:<?php echo get_field('phone_number',52); ?>"><?php echo get_field('top_banner_button',5); ?></a>
                  </div>
                  <h4>Need clinical advice?</h4>
                  <a href="tel:<?php echo get_field('phone_number',52); ?>" class="text-decoration-none phn-no"><?php echo get_field('phone_number',52); ?></a>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 mb-lg-0 mb-md-0 mb-3">
                    <div class="video-section-box">
                           
                            <a class="popup-vimeo" href="<?php echo get_field('clinical_advice_video_link'); ?>">
                                <figure class="mb-0">
                                    <img src="<?php echo get_field('clinical_advice_video_image1'); ?>" style="cursor: pointer" alt="" class="img-fluid video-img">
                                </figure>
                            </a>
                            <figure class="position-absolute popup-top-figure">
                                <img src="<?php echo get_field('clinical_advice_video_image2'); ?>" alt="" class="img-fluid">
                            </figure>
                            <figure class="position-absolute popup-bottom-figure">
                                <img src="<?php echo get_field('clinical_advice_video_image3'); ?>" alt="" class="img-fluid">
                            </figure>
                    </div>
                </div>
            </div>
        </div>           
    </div>
    <!-- Counter-Section -->
    <div class="counter-section2 d-none">
        <div class="container">
            <div class="counter-inner-row">
            <div class="row">
<?php  
 $fields = CFS()->get( 'counter_loop' );
 if(is_array($fields) || is_object($fields)){
foreach ( $fields as $field ) {

?>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-lg-0 mb-md-0 mb-sm-2">
                        <div class="counter-inner-box vl-border">
                            <h5><?php echo $field['counter_number']; ?></h5>
                            <p><?php echo $field['counter_text']; ?></p>
                        </div>
                    </div>
                    <?php }  } ?>
                    <!-- <div class="col-lg-3 col-md-6 col-sm-12 mb-lg-0 mb-md-0 mb-sm-2">
                        <div class="counter-inner-box vl-right-border">
                            <h5><span class="counter">690</span></h5>
                            <p>Great Local Volunteers</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-lg-0 mb-md-0 mb-sm-2">
                        <div class="counter-inner-box">
                            <h5><span class="counter">437</span></h5>
                            <p>Face to Face Visits</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-lg-0 mb-md-0 mb-sm-2">
                        <div class="counter-inner-box border-right-box">
                            <h5><span class="counter">170</span></h5>
                            <p>Organized Local Events</p>
                        </div>
                    </div> -->
                </div>
             </div>
        </div>
    </div>  
<div class="aboutus pt-4">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-12">
				<div class="about-content">
					<h1>
						ABOUT US
					</h1>
					<h3>
						Our Mission
					</h3>
					<h2>
						Welcome to Hamilton Society Housing!
					</h2>
					<p class="pt-4">
						Our mission is to provide affordable and inclusive housing options to individuals and families in the Hamilton Society community. We understand the importance of having a safe and comfortable place to call home, regardless of income or circumstances.
					</p>
					<p>
						At Hamilton Society Housing, we offer a range of housing options to meet the diverse needs of our residents. Our low-income housing program aims to provide affordable housing to individuals and families who may be facing financial challenges. We believe that everyone deserves a chance to live in a quality home, and we strive to create a supportive and inclusive community for our residents.
					</p>
					<p>
						For those seeking single room or double room occupancy, we have a variety of options available. Whether you are transitioning from being homeless or aging out of foster care or a veteran seeking a home our housing options cater to your needs. We ensure that all our rooms are well-maintained, comfortable, and equipped with essential amenities.
					</p>
					<p>
						In addition to providing housing, we understand the importance of access to supportive social services. We offer a range of support programs to assist our residents in their personal and professional development. These services may include career counseling, life skills workshops, financial literacy programs, and access to community resources. Our goal is to empower our residents and help them thrive in all aspects of their lives.
					</p>
					<p>
						Hamilton Society Housing is committed to fostering a sense of community and belonging. We believe that everyone deserves a safe and supportive environment to grow and flourish. Our dedicated team is here to assist you throughout your stay, ensuring that your housing experience is positive and fulfilling.
					</p>
					<p>
						Join us at Hamilton Society Housing and discover a place where affordability meets quality, and where support services are readily available. We invite you to explore our website and learn more about the housing options and services we provide. Together, let's create a community where everyone has a place to call home.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>


    <!-- Service-Offer-Section -->
  <div class="service-offer-section service-offer-section2 sencare-tem-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                   <div class="service-offer-content"  data-aos="fade-up">
                    <h2><?php echo get_field('team_section_heading'); ?></h2>
                    <p><?php echo get_field('team_section_content'); ?></p>
                   </div>
                    <div class="service-inner">
                        <div class="row">
                            <?php  
 $fields = CFS()->get( 'team_section_loop' );
 if(is_array($fields) || is_object($fields)){
foreach ( $fields as $field ) {

?>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                               <div class="sencare-team-inner">
                                <figure class="service-figure-mb">
                                    <img src="<?php echo $field['team_image']; ?>" alt="" class="img-fluid">
                                </figure>
                                <h5><?php echo $field['team_heading']; ?></h5>
                                <p><?php echo $field['team_subheading']; ?></p>
                                <div class="hover_box_plus">
                                    <ul class="p-0 text-center">
                                        <li><a href="<?php echo $field['team_twitter_url']; ?>" class="text-decoration-none"><?php echo $field['team_icon_twitter']; ?></a></li>
                                        <li><a href="<?php echo $field['team_facebook_url']; ?>" class="text-decoration-none"><?php echo $field['team_icon_facebook']; ?></a></li>
                                        <li><a href="<?php echo $field['team_pinterest_url']; ?>" class="text-decoration-none"><?php echo $field['team_icon_pinterest']; ?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php }  } ?>
                            <!-- <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="sencare-team-inner">
                                    <figure class="service-figure-mb">
                                        <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/sencare-team-img2.png" alt="" class="img-fluid">
                                    </figure>
                                    <h5>John Deo</h5>
                                    <p>Medical Specialis</p>
                                    <div class="hover_box_plus">
                                        <ul class="p-0 text-center">
                                            <li><a href="#" class="text-decoration-none"><i class="fa-brands fa-twitter"></i></a></li>
                                            <li><a href="#" class="text-decoration-none"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="text-decoration-none"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="sencare-team-inner">
                                    <figure class="service-figure-mb">
                                        <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/sencare-team-img3.png" alt="" class="img-fluid">
                                    </figure>
                                    <h5>Rickey Martin</h5>
                                    <p>Medical Consultant</p>
                                    <div class="hover_box_plus">
                                        <ul class="p-0 text-center">
                                            <li><a href="#" class="text-decoration-none"><i class="fa-brands fa-twitter"></i></a></li>
                                            <li><a href="#" class="text-decoration-none"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="text-decoration-none"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="sencare-team-inner">
                                    <figure class="service-figure-mb">
                                        <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/sencare-team-img4.png" alt="" class="img-fluid">
                                    </figure>
                                    <h5>Anna Clark</h5>
                                    <p class="mb-0">House Nurse</p>
                                    <div class="hover_box_plus">
                                        <ul class="p-0 text-center">
                                            <li><a href="#" class="text-decoration-none"><i class="fa-brands fa-twitter"></i></a></li>
                                            <li><a href="#" class="text-decoration-none"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="text-decoration-none"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>           
    </div>
    <!--Happy-Clients-Section  -->
<section class="happy-clients-section happy-clients-section2 happy-clients-section3">
    <div class="container">
        <div class="row">
            <?php  
 $fields = CFS()->get( 'happy_clients_loop' );
 if(is_array($fields) || is_object($fields)){
foreach ( $fields as $field ) {

?>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div id="demo" class="carousel slide" data-ride="carousel">
                <div class="review-section-outer position-relative">
                    <div class="carousel-card">
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                          <figure><img src="<?php echo $field['happy_client_image']; ?>" alt="" class="img-fluid"></figure>
                        <h4 class="carousel-text"><?php echo $field['happy_client_content']; ?></h4>
                        <div class="about-border"></div>
                       <h4 class="carousel-title"><?php echo $field['happy_client_subheading']; ?></h4>
                       <p class="carousel-end-text"><?php echo $field['happy_client_subtitle']; ?></p>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
            </div> 
<?php }  } ?>
        </div>
    </div>
</section> 

 <?php get_footer(); ?>