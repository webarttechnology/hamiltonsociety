<?php /* Template Name: Counselling */

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
 $fields = CFS()->get( 'counelling_page_loop' );
 if(is_array($fields) || is_object($fields)){
foreach ( $fields as $field ) {

?>
		<div class="row align-items-center mb-5">
			<div class="col-md-6 mb-4">
				<div class="image">
					<img src="<?php echo $field['counselling_page_image']; ?>">
				</div>
			</div>
			<div class="col-md-6">
				<div class="content">
					<h3><?php echo $field['counselling_page_heading']; ?></h3>
					<p><?php echo $field['counselling_page_content']; ?></p>
					<div class="banner-btn discover-btn-banner">
                                    <a href="tel:<?php echo get_field('phone_number',52); ?>" class="text-decoration-none"><?php echo $field['counselling_page_button']; ?></a>
                                </div>
				</div>
			</div>
		</div>
		<?php }  } ?>

		<!-- <div class="row align-items-center mb-5">
			<div class="col-md-6">
				<div class="image">
					<img src="<?php //echo get_template_directory_uri(); ?>/assets/images/banner7.jpg">
				</div>
			</div>
			<div class="col-md-6">
				<div class="content">
					<h3>Empowerment and Education</h3>
					<p>We believe in empowering our beneficiaries to gain financial independence. Through financial literacy programs and personalized guidance, we aim to equip you with the skills and knowledge to manage your own finances when the time is right.</p>
					<div class="banner-btn discover-btn-banner">
                                    <a href="tel:610 421 1999" class="text-decoration-none">Call Us</a>
                                </div>
				</div>
			</div>
		</div>

		<div class="row align-items-center">
			<div class="col-md-6">
				<div class="image">
					<img src="<?php //echo get_template_directory_uri(); ?>/assets/images/service-offer-left-img.png">
				</div>
			</div>
			<div class="col-md-6">
				<div class="content">
					<h3>Emotional Support and Mentoring</h3>
					<p>We understand that the transition from foster care to independent living can be emotionally challenging. Our program offers access to counseling services and support groups to help you navigate any emotional hurdles you may encounter. Additionally, we provide mentoring programs that connect you with experienced adults who can offer guidance, encouragement, and a listening ear. We believe in the power of a supportive community to help you thrive.</p>
					<div class="banner-btn discover-btn-banner">
                                    <a href="tel:610 421 1999" class="text-decoration-none">Call Us</a>
                                </div>
				</div>
			</div>
		</div> -->
	</div>
</section>



<?php get_footer(); ?>

