<?php /* Template Name: Rental Assistance Program */

get_header();

 ?>


<!-- BANNER-SECTION -->
         <div class="home-banner-section overflow-hidden d-none">
            <div class="banner-container-box">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 mb-md-0 mb-4 text-lg-left text-center">
                            <div class="home-banner-text"  data-aos="fade-up">
                                <h1>Welcome to the Hamilton Society Housing (HSH) Rental Assistance Program!</h1>
                                <p class="banner-paragraph"></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="image-text-section py-5 rent_sec">
        <div class="container">
            <div class="row align-items-center mb-5 shadows">
            <div class="col-md-12">
                <div class="content">
                    <p><?php echo get_field('rental_top_content') ?></p>
                </div>
            </div>
        </div>
        <div class="row align-items-center mb-5 shadows">
            <div class="col-md-12">
                <div class="content">
                    <h2><?php echo get_field('hsx_heading'); ?></h2>
                    <?php echo get_field('hsx_points'); ?>
                    <!-- <ul>
                        <li>
                            <span>1. Application Process:</span>
                            <p>To be considered for the HSH rental assistance program, interested individuals or families must complete an application form. The application will require personal and financial information to assess eligibility and determine the level of support needed.</p>
                        </li>
                        <li>
                            <span>2. Eligibility Assessment:</span>
                            <p>Our dedicated team will review each application and conduct a thorough eligibility assessment. Factors such as income, family size, and housing needs will be considered to determine the level of rental assistance individuals or families may qualify for.</p>
                        </li>
                        <li>
                            <span>3. Rental Assistance Allocation:</span>
                            <p>Based on the eligibility assessment, approved applicants will receive a predetermined amount of monthly rental assistance. This assistance aims to bridge the gap between the cost of housing and the individual or family's ability to afford it, ensuring that they can secure and maintain stable housing.</p>
                        </li>
                        <li>
                            <span>4. Housing Search and Support:</span>
                            <p>We understand that finding suitable housing can be challenging, especially in a competitive market. Our team will work closely with approved applicants to provide guidance and support in their housing search. We will assist in identifying available housing options, connecting with landlords, and navigating the rental process.</p>
                        </li>
                        <li>
                            <span>5. Ongoing Support and Case Management:</span>
                            <p>At HSH, our commitment to our participants extends beyond rental assistance. We provide ongoing case management services to ensure that individuals and families are thriving in their homes. Our team is available to offer guidance, resources, and referrals to additional support services that may be beneficial.</p>
                        </li>
                    </ul> -->
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="apply-section mb-5">
        <div class="container">
            <div class="col-md-12">
                <div class="content">
                    <h3><?php echo get_field('apply_heading'); ?></h3>
                    <p><?php echo get_field('apply_content'); ?></p>
                </div>
            </div>
        </div>
    </section>


    <section class="touch-section mt-5" style="background-image:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url(<?php echo get_field('assistant_programme_image') ?>);padding:25px;">
    <div class="container">
        <div class="touch-content">
            <h2><?php echo get_field('assistant_programme_heading'); ?></h2>
            <?php echo get_field('assiatant_programme_content'); ?>
            
        </div>
    </div>
</section>



 <?php get_footer(); ?>
