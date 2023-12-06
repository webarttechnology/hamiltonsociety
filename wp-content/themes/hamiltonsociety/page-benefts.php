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
                
                


<div class="content">
      <!-- Tab links -->
      <div class="tabs">
         <button class="tablinks active" data-country="financial"><p data-title="financial"><?php echo get_field('tab_title1') ?></p></button>
         <button class="tablinks" data-country="protection"><p data-title="protection"><?php echo get_field('tab_title2') ?></p></button>
         <button class="tablinks" data-country="accountability"><p data-title="accountability"><?php echo get_field('tab_title3') ?></p></button>
         <button class="tablinks" data-country="access"><p data-title="access"><?php echo get_field('tab_title4') ?></p></button>
         <button class="tablinks" data-country="reduced"><p data-title="reduced"><?php echo get_field('tab_title5') ?></p></button>
      </div>

      <!-- Tab content -->
      <div class="wrapper_tabcontent">
         <div id="financial" class="tabcontent active">
            <p><?php echo get_field('tab_content1') ?></p>
         </div>

         <div id="protection" class="tabcontent">
            <p><?php echo get_field('tab_content2') ?></p>
         </div>

         <div id="accountability" class="tabcontent">
            <p><?php echo get_field('tab_content3') ?></p>
         </div>

         <div id="access" class="tabcontent">
            <p><?php echo get_field('tab_content4') ?></p>
         </div>

         <div id="reduced" class="tabcontent">
            <p><?php echo get_field('tab_content5') ?></p>
         </div>
      </div>
   </div>

                
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