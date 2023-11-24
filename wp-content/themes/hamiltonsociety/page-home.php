<?php /* Template Name: Home */

get_header();

 ?>
<!-- BANNER-SECTION -->
         <!-- <div class="home-banner-section overflow-hidden">
            <div class="banner-container-box">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 mb-md-0 mb-4 text-lg-left text-center">
                            <div class="home-banner-text"  data-aos="fade-up">
                                <h1>
                                    <?php //echo get_field('banner_heading'); ?>
                                </h1>
                                <p class="banner-paragraph">
<?php //echo get_field('banner_sub-heading'); ?>
                                </p>
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
    </div> -->


    <section class="home-banner-section">
        <div class="home-banner">
            <img src="<?php echo get_field('top_banner_image'); ?>">
        </div>
        <div class="home-banner-content">
        <div class="container">
                <div class="content">
                    <h1>
                        <?php echo get_field('top_banner_heading'); ?>
                    </h1>
                    <p><?php echo get_field('top_banner_content'); ?></p>

                    <div class="banner-btn discover-btn-banner">
                        <a href="tel:<?php echo get_field('phone_number',52); ?>" class="text-decoration-none"><?php echo get_field('top_banner_button'); ?></a>
                    </div>
                </div>
        </div>
        </div>
    </section>

<div class="offer-section offer-section1" data-aos="fade-up">
        <h2>
            <?php echo get_field('offer_section_heading'); ?>
            </h2>
        <div class="container">
            <div class="row">
<?php  
 $fields = CFS()->get( 'best_care_loop' );
 if(is_array($fields) || is_object($fields)){
foreach ( $fields as $field ) {

?>


               

                <div class="col-lg-4 col-md-4 col-sm-6 mb-lg-0 mb-md-0 mb-3 px-md-1">
                    <div class="offer-section-box">
                        <!-- <div class="offer-section-inner">
                            <figure>
                                <img src="assets/images/offer-section-img1.png" alt="" class="img-fluid">
                            </figure>
                        </div> -->
                        <h5> <?php echo $field['best_care_heading']; ?></h5>
                        <p><?php echo $field['best_care_content']; ?></p>
                    </div>
                </div>

            <?php }  } ?>
               
               

                <!-- <div class="col-lg-4 col-md-4 col-sm-6 mb-lg-0 mb-md-0 mb-3 px-md-1">
                    <div class="offer-section-box">
                        
                        <h5>Transitional Housing:</h5>
                        <p>If you are in need of temporary housing during a transitional period, our transitional housing options are here to support you. Whether you are transitioning from homelessness, leaving a rehabilitation program, or going through a life change, our transitional housing provides a stable and supportive environment to help you regain independence and stability.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mb-lg-0 mb-md-0 mb-3 px-md-1">
                    <div class="offer-section-box">
                        
                        <h5>Veteran Housing:</h5>
                        <p>We proudly offer housing options specifically tailored to meet the unique needs of our veterans. Our veteran housing provides a safe and welcoming environment for those who have served our country. We offer supportive services, including counseling, job placement assistance, and connections to veteran resources, to help veterans successfully reintegrate into civilian life.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mb-lg-0 mb-md-0 mb-3 px-md-1">
                    <div class="offer-section-box">
                        
                        <h5>Group Homes:</h5>
                        <p>Our group homes provide a supportive living environment for individuals who benefit from a communal setting. Whether you have a developmental disability, mental health condition, or other special needs, our group homes offer a sense of community, companionship, and round-the-clock support. Our outsourced service providers ensures that each resident receives individualized care and assistance tailored to their specific needs.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mb-lg-0 mb-md-0 mb-3 px-md-1">
                    <div class="offer-section-box">
                        
                        <h5>Sober Homes:</h5>
                        <p>For individuals in recovery from addiction, our sober homes provide a substance-free and supportive living environment. We create a structured and accountable setting that fosters sobriety, personal growth, and community support. Our sober homes offer a safe and nurturing space as individuals navigate the challenges of early recovery and work towards achieving long-term sobriety.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mb-lg-0 mb-md-0 mb-3 px-md-1">
                    <div class="offer-section-box">
                        
                        <h5>Mental Health Housing:</h5>
                        <p>We recognize the importance of safe and supportive housing for individuals with mental health conditions. Our mental health housing options provide a stigma-free environment where residents can receive the support and resources they need to manage their mental health effectively. We prioritize creating a sense of community and offering therapeutic services to promote overall well-being.</p>
                    </div>
                </div> -->
            </div>

            <div class="bottom-text">
                <h5><?php echo get_field('offer_section_subtitle'); ?></h5>
            </div>
        </div>
        </div>



        <section class="icntext-section">
            <div class="bg-image">
                <img src="<?php echo get_field('foster_care_image'); ?>">
            </div>
            <div class="icntxt-wrapper">
            <div class="container">
                <div class="icntxt-head">
                    <h4><?php echo get_field('foster_care_heading'); ?></h4>
                    <?php echo get_field('foster_care_content'); ?>
                </div>
                <!-- <div class="row">
                    <div class="col-md-6">
                        <div class="icntxt-inner">
                            <i class="bi bi-caret-right"></i>
                            <span>MHMR With Cognitive and Behavioral Health Conditions</span>
                        </div>
                    </div>
                </div> -->
            </div>
            </div>
        </section>



<section class="form-section image-with-text">
    <div class="img_overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="right-section">
                   <img src="<?php echo get_field('safe_housing_image'); ?>">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="left-section" data-aos="fade-up">
                    <?php echo get_field('safe_housing_content'); ?>

                    <ul class="d-none">
                        <li class=""><i class="fa-solid fa-check ml-0"></i><span class="">Doctor / Nurse home visits</span></li>
                        <li class=""><i class="fa-solid fa-check ml-3 margin-left-check"></i><span class="">Home Health Services</span></li>
                        <li class=""><i class="fa-solid fa-check ml-0 last-li-form-section"></i><span class="">Hospice</span></li>
                        <li class=""><i class="fa-solid fa-check ml-lg-3 ml-md-0 ml-sm-3"></i><span class="">Durable Medical Equipment</span></li>
                        <li class=""><i class="fa-solid fa-check ml-0 last-li-form-section"></i><span class="">Case Management</span></li>
                        <li class=""><i class="fa-solid fa-check ml-lg-3 ml-md-0 ml-sm-3"></i><span class="">Social Work</span></li>
                        <li class=""><i class="fa-solid fa-check ml-0 last-li-form-section"></i><span class="">Behavioural Counselling and Therapy</span></li>
                        <li class=""><i class="fa-solid fa-check ml-lg-3 ml-md-0 ml-sm-3"></i><span class="">Medication Management</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
 </section>







    <!-- MENU-SECTION -->
    <div class="menu-section">
        <div class="container">
            <div class="menu-heading">
                <h3><?php echo get_field('menu_section_heading'); ?></h3>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="menu-section-img">
                        <figure>
                            <img src="<?php echo get_field('menu_section_image'); ?>" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="row">

                        <?php  
 $fields = CFS()->get( 'menu_section_loop' );
 if(is_array($fields) || is_object($fields)){
foreach ( $fields as $field ) {

?>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="menu-right-section">
                                <!-- <figure>
                                    <img src="assets/images/menu-icon1.png" alt="" class="img-fluid">
                                </figure> -->
                                <h5><?php echo $field['menu_section_subheading']; ?></h5>
                                <p><?php echo $field['menu_section_subcontent']; ?></p>
                            </div>
                        </div>
                        <?php }  } ?>

                        <!-- <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="menu-right-section">
                                <h5>Eligibility Assessment:</h5>
                                <p>Our dedicated team will review each application and conduct a thorough eligibility assessment. Factors such as income, family size, and housing needs will be considered to determine the level of rental assistance individuals or families may qualify for.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div  class="menu-right-section">
                                <h5>Rental Assistance Allocation:</h5>
                                <p>Based on the eligibility assessment, approved applicants will receive a predetermined amount of monthly rental assistance. This assistance aims to bridge the gap between the cost of housing and the individual or family's ability to afford it, ensuring that they can secure and maintain stable housing.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div  class="menu-right-section">
                                <h5>Housing Search and Support:</h5>
                                <p>We understand that finding suitable housing can be challenging, especially in a competitive market. Our team will work closely with approved applicants to provide guidance and support in their housing search. We will assist in identifying available housing options, connecting with landlords, and navigating the rental process</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div  class="menu-right-section">
                                <h5>Ongoing Support and Case Management:</h5>
                                <p>At HSH, our commitment to our participants extends beyond rental assistance. We provide ongoing case management services to ensure that individuals and families are thriving in their homes. Our team is available to offer guidance, resources, and referrals to additional support services that may be beneficial.</p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Form-Section -->
<section class="form-section">
    <div class="container">
        <div class="frm-heading">
            <h2><?php echo get_field('form_section_heading') ?></h2>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="left-section" data-aos="fade-up">
                    <?php echo get_field('form_section_content') ?>
                    
                </div>
            </div>
            <div class="col-sm-6">
                <div class="right-section">
                    <?php echo do_shortcode('[contact-form-7 id="ba63d97" title="Home Page Contact form"]'); ?>
                   <!-- <form action="https://html.designingmedia.com/sencare/get">
                    <div class="input-icons">
                     <div class="form-group position-relative">
                         <input type="text" class="form-control input-text" id="validationCustom01" placeholder="Your name" required=""><i class="fa fa-user icon1"></i>
                     </div>
                     <div class="form-group position-relative">
                        <input type="text" class="form-control input-text" id="validationCustom02" placeholder="Phone number" required=""><i class="fa-solid fa-phone icon2"></i>
                     </div>
                     <div class="form-group position-relative">
                         <input type="mail" class="form-control input-text" id="validationCustom03" placeholder="Email" required=""><i class="fa-solid fa-calendar-days icon3"></i>
                     </div>
                    </div>
                   </form> -->
                </div>
            </div>
            
            
        </div>

        <!-- <div class="banner-btn discover-btn-banner primary-button">
                        <a style="position: relative;" href="about.html" class="text-decoration-none">Get In Touch</a>
                    </div> -->
    </div>
 </section>
<!-- Choose-us-section -->
<div class="choose-us-section d-none">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 pt-2">
                <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/why-chooseus-img.png"  alt=""  class="img-fluid"></figure>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="chooseus-content position-relative">
                    <h2 class="why-chooseus">Why Choose <span class="concern">Us</span></h2>
                    <div class="chooseus-content-box" data-aos="fade-up">
                       <figure class="float-left mb-0 pt-2">
                          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/why-chooseus-icon1.png" alt="">
                       </figure>
                       <div class="chooseus-content-box-content float-left">
                       <h4 class="chooseus-title">Medical Record</h4>
                       <p class="chooseus-p">Quis autem vel eum iure reprehenderit qui in eareu voluptate velit esse quam nihil molestiae.</p>
                       </div>
                    </div>
                    <div class="chooseus-content-box" data-aos="fade-up">
                       <figure class="float-left mb-0 pt-2">
                          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/why-chooseus-icon2.png" alt="">
                       </figure>
                       <div class="chooseus-content-box-content float-left">
                       <h4 class="chooseus-title">Ambulance</h4>
                       <p class="chooseus-p">Quis autem vel eum iure reprehenderit qui in eareu voluptate velit esse quam nihil molestiae.</p>
                       </div>
                    </div>
                    <div class="chooseus-content-box" data-aos="fade-up">
                       <figure class="float-left mb-0 pt-2">
                          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/why-chooseus-icon3.png" alt="">
                       </figure>
                       <div class="chooseus-content-box-content float-left">
                       <h4 class="chooseus-title">Medical Advice</h4>
                       <p class="chooseus-p">Quis autem vel eum iure reprehenderit qui in eareu voluptate velit esse quam nihil molestiae.</p>
                       </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</div>
<!-- Our-teams-section -->
<div class="Our-teams-section d-none">
    <div class="container">
        <h2 class="text-center">Our Care Givers <span class="concern">Team</span></h2>
        <p class="teams-title">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat
            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <div class="row" data-aos="fade-up">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <figure class="text-center teams1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/teams-img1.png" alt="" class="img-fluid">
                    </figure>
                    <div class="teams-content">
                        <h4>Kevin Andrew</h4>
                        <p>Duis aute irure dolor in reprehen voluptate velit esse cillum.</p>
                    </div>
                    <div class="social-icons aos-init aos-animate text-center">
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-decoration-none"><i class="fa-brands fa-twitter social-networks"></i></a></li>
                            <li><a href="#" class="text-decoration-none"><i class="fa-brands fa-facebook-f social-networks"></i></a></li>
                            <li><a href="#" class="text-decoration-none"><i class="fa-brands fa-pinterest-p social-networks"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <figure class="text-center teams1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/teams-img2.png" alt="" class="img-fluid">
                    </figure>
                    <div class="teams-content">
                        <h4>Elina Cambson</h4>
                        <p>Duis aute irure dolor in reprehen voluptate velit esse cillum.</p>
                    </div>
                    <div class="social-icons aos-init aos-animate text-center">
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-decoration-none"><i class="fa-brands fa-twitter social-networks"></i></a></li>
                            <li><a href="#" class="text-decoration-none"><i class="fa-brands fa-facebook-f social-networks"></i></a></li>
                            <li><a href="#" class="text-decoration-none"><i class="fa-brands fa-pinterest-p social-networks"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <figure class="text-center teams1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/teams-img3.png" alt="" class="img-fluid">
                    </figure>
                    <div class="teams-content">
                        <h4>Jonathan Drawn</h4>
                        <p>Duis aute irure dolor in reprehen voluptate velit esse cillum.</p>
                    </div>
                    <div class="social-icons aos-init aos-animate text-center">
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-decoration-none"><i class="fa-brands fa-twitter social-networks"></i></a></li>
                            <li><a href="#" class="text-decoration-none"><i class="fa-brands fa-facebook-f social-networks"></i></a></li>
                            <li><a href="#" class="text-decoration-none"><i class="fa-brands fa-pinterest-p social-networks"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <figure class="text-center teams1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/teams-img4.png" alt="" class="img-fluid">
                    </figure>
                    <div class="teams-content">
                        <h4>Ainna Lauren</h4>
                        <p>Duis aute irure dolor in reprehen voluptate velit esse cillum.</p>
                    </div>
                    <div class="social-icons aos-init aos-animate text-center">
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-decoration-none"><i class="fa-brands fa-twitter social-networks"></i></a></li>
                            <li><a href="#" class="text-decoration-none"><i class="fa-brands fa-facebook-f social-networks"></i></a></li>
                            <li><a href="#" class="text-decoration-none"><i class="fa-brands fa-pinterest-p social-networks"></i></a></li>
                        </ul>
                    </div>
                </div>
        </div>
    </div>
</div>

<!-- Pricing-cards-section -->
<div class="pricing-section">
    <div class="container">
        <h2 class="text-center pricing-section-heading"><?php echo get_field('pricing_section_heading') ?></h2>
        <?php echo get_field('pricing_section_content') ?>
        <div class="row" data-aos="fade-up">
            <div class="col-lg-6 col-md-6 col-sm-6 mb-sm-3">
                <div class="pricing-box text-center">
                    <h5>One Beds</h5>
                    <h2 class="pricing-text"><sup>$</sup>500</h2>
                </div>
                <div class="pricing-box-bottom">
                    <ul class="list-unstyled pricing-section-list">
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Baking.png"><span>Baking Classes</span>  </li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bingo.png"><span>Bingo</span></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/donation.png"><span>Donation Drives</span></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/music-therapy.png"><span>Happy Hours</span></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ice-cream.png"><span>
                    Ice Cream</span></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bible.png"><span>Mass Services</span></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/music-therapy.png"><span>Music Therapy</span></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/animal-therapy.png"><span>Pet Therapy</span></li>
                    </ul>
                    <div class="banner-btn discover-btn-banner">
                        <a href="about.html" class="text-decoration-none">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="pricing-box text-center">
                    <h5>Two Beds</h5>
                    <h2 class="pricing-text"><sup>$</sup>1000</h2>
                </div>
                <div class="pricing-box-bottom">
                    <ul class="list-unstyled pricing-section-list">
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ice-cream.png"><span>
                    Ice Cream</span></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bible.png"><span>Mass Services</span></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/music-therapy.png"><span>Music Therapy</span></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/animal-therapy.png"><span>Pet Therapy</span></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Baking.png"><span>Baking Classes</span>  </li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bingo.png"><span>Bingo</span></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/donation.png"><span>Donation Drives</span></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/music-therapy.png"><span>Happy Hours</span></li>
                    </ul>
                    <div class="banner-btn discover-btn-banner">
                        <a href="about.html" class="text-decoration-none">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
                                <h2><?php echo get_field('review_section_heading') ?></h2>
                                <?php echo get_field('revew_section_content') ?>
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