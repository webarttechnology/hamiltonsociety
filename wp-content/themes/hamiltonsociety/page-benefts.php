<?php /* Template Name: Benefits */

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
                                <p class="banner-paragraph">Expert Financial Management for Social Security Beneficiaries</p>
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

<section class="image-text-section py-5">
	<div class="container">
		<div class="row align-items-center mb-5">
			<div class="col-md-6">
				<div class="image">
					<img src="<?php echo get_field('benefit_first_image') ?>">
				</div>
			</div>
			<div class="col-md-6">
				<div class="content">
					<h3><?php echo get_field('benefit_first_heading') ?></h3>
					<p><?php echo get_field('benefit_first_content') ?></p>
					<div class="banner-btn discover-btn-banner">
                                    <a href="tel:<?php echo get_field('phone_number',52); ?>" class="text-decoration-none">Call Us</a>
                                </div>
				</div>
			</div>
		</div>

		<div class="row align-items-center mb-5">
			<div class="col-md-6">
				<div class="image">
					<img src="<?php echo get_field('benefit_second_image') ?>">
				</div>
			</div>
			<div class="col-md-6">
				<div class="content">
					<h3><?php echo get_field('benefit_second_heading') ?></h3>
					<p><?php echo get_field('benefit_second_content') ?></p>
					<div class="banner-btn discover-btn-banner">
                                    <a href="tel:<?php echo get_field('phone_number',52); ?>" class="text-decoration-none">Call Us</a>
                                </div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="offer-section offer-section1 benef_sec mb-5" data-aos="fade-up">
	<div class="container">
        <h2><?php echo get_field('help_section_heading') ?></h2>
        <p><?php echo get_field('help_section_content') ?></p>
        <div class="container">
            <div class="row justify-content-center">
                <?php  
 $fields = CFS()->get( 'help_section_loop' );
 if(is_array($fields) || is_object($fields)){
foreach ( $fields as $field ) {

?>
                <div class="col-lg-4 col-md-4 col-sm-6 mb-lg-0 mb-md-0 mb-3 px-md-1 py-4">
                    <div class="offer-section-box">
                        <!-- <div class="offer-section-inner">
                            <figure>
                                <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/offer-section-img1.png" alt="" class="img-fluid">
                            </figure>
                        </div> -->
                        <h5><?php echo $field['help_section_heading']; ?></h5>
                        <p><?php echo $field['help_section_content']; ?></p>
                    </div>
                </div>
                <?php }  } ?>
                <!-- <div class="col-lg-4 col-md-4 col-sm-6 mb-lg-0 mb-md-0 mb-3 px-md-1 py-4">
                    <div class="offer-section-box">
                        <div class="offer-section-inner">
                            <figure>
                                <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/offer-section-img2.png" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <h5>Budgeting and Bill Payment: </h5>
                        <p>We develop personalized budgets based on your income and expenses, ensuring that bills are paid promptly and that you have enough funds for your day-to-day needs.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mb-lg-0 mb-md-0 mb-3 px-md-1 py-4">
                    <div class="offer-section-box">
                        <div class="offer-section-inner">
                            <figure>
                                <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/offer-section-img3.png" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <h5>Financial Reporting: </h5>
                        <p>We provide regular, detailed reports to you and the SSA, documenting the management of your funds, expenditures, and any changes in your financial situation.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mb-lg-0 mb-md-0 mb-3 px-md-1 py-4">
                    <div class="offer-section-box">
                        <div class="offer-section-inner">
                            <figure>
                                <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/offer-section-img3.png" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <h5>Advocacy and Support: </h5>
                        <p>Our knowledgeable team is here to support you every step of the way. We can assist with understanding your benefits, connecting you with community resources, and advocating on your behalf when necessary.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mb-lg-0 mb-md-0 mb-3 px-md-1 py-4">
                    <div class="offer-section-box">
                        <div class="offer-section-inner">
                            <figure>
                                <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/offer-section-img3.png" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <h5>Empowerment and Education: </h5>
                        <p>We believe in empowering our beneficiaries to gain financial independence. Through financial literacy programs and personalized guidance, we aim to equip you with the skills and knowledge to manage your own finances when the time is right.</p>
                    </div>
                </div> -->
            </div>
        </div>
        </div>
        </section>

        <section class="success-section mb-5 d-none">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				<div class="cont">
        					<h2>Partnering for Success:</h2>
        					<p>At Hamilton Society, we value collaboration and transparency. We work closely with you, your caregivers, and other support networks to ensure that your financial management aligns with your unique goals and needs. We are dedicated to building a trusting and respectful relationship with our beneficiaries, placing their best interests at the forefront of everything we do.</p>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>

        <section class="touch-section py-5" style="background-image:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url(<?php echo get_field('success_section_image'); ?>)">
    <div class="container">
        <div class="touch-content">
            <h2><?php echo get_field('success_section_heading'); ?></h2>
            <p><?php echo get_field('success_section_content'); ?></p>
        </div>
    </div>
</section>

        <section class="contact-section py-5">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				<div class="cont">
        					<h2><?php echo get_field('contact_heading'); ?></h2>
        					<p><?php echo get_field('contact_content'); ?></p>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>

<?php get_footer(); ?>