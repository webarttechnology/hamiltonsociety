<?php /* Template Name: Low Income */

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
                                    <a href="tel:610 421 1999
" class="text-decoration-none">Call Us</a>
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
			<div class="col-md-6 mb-5">
				<div class="image">
					<img src="<?php echo get_field('low_income_first_image') ?>">
				</div>
			</div>
			<div class="col-md-6">
				<div class="content">
					<h3><?php echo get_field('low_income_first_heading') ?></h3>
					<p><?php echo get_field('low_income_first_content') ?></p>
					<div class="banner-btn discover-btn-banner">
                                    <a href="tel:<?php echo get_field('phone_number',52); ?>" class="text-decoration-none">Call Us</a>
                                </div>
				</div>
			</div>
		</div>

		<div class="row align-items-center mb-5">
			<div class="col-md-6 mb-5">
				<div class="image">
					<img src="<?php echo get_field('low_income_second_image') ?>">
				</div>
			</div>
			<div class="col-md-6">
				<div class="content">
					<h3><?php echo get_field('low_income_second_heading') ?></h3>
					<p><?php echo get_field('low_income_second_content') ?></p>
					<div class="banner-btn discover-btn-banner">
                                    <a href="tel:<?php echo get_field('phone_number',52); ?>" class="text-decoration-none">Call Us</a>
                                </div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--Carousel-Section  -->
<section class="Carousel-Section">
    <div class="container">
        <div class="row position-relative wow fadeInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeInUp;">
                <div class="col-lg-12">
                    <div class="review-section-outer position-relative">
                    <div class="carousel-card">
                    <div class="carouse" data-ride="carousel">
                        <div class="carouse-inner">
                          <div class="carouse-item">
                            <div class="position-relative">
                                <h2><?php echo get_field('review_section_heading',5) ?></h2>
                                <?php echo get_field('revew_section_content',5) ?>
                                <div class="banner-btn discover-btn-banner">
                                    <a href="tel:<?php echo get_field('phone_number',52); ?>" class="text-decoration-none">Call Us</a>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
                </a>
                </a>
        </div>
    </div>
</section>


 <?php get_footer(); ?>