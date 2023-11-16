<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			<div class="footer-section position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-12">
                <figure class="sencare-logo-footer">
                    <a class="navbar-brand mr-0" href="<?php echo get_site_url(); ?>">
                      <img src="<?php echo get_field('logo',52); ?>" alt="" class="img-fluid" style="width:125px;">
                      <!-- <h1 style="font-size:30px;color:#fff;margin:0;">LOGO HERE</h1> -->
                    </a>
                </figure>
                <p class="footer-text">All Rights reserved</p>
                <!-- <div class="social-icons text-center">
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none"><i class="fa-brands fa-twitter social-networks"></i></a></li>
                        <li><a href="#" class="text-decoration-none"><i class="fa-brands fa-facebook-f social-networks"></i></a></li>
                        <li><a href="#" class="text-decoration-none"><i class="fa-brands fa-pinterest-p social-networks"></i></a></li>
                    </ul>
                </div> -->
            </div>
            <div class="col-xl-3 col-lg-3 col-md-2 col-sm-12 d-lg-block">
                <!-- <ul class="list-unstyled footer-list-ul"> -->
                    <li class="list-item footer-margin-left">
                        <h4 class="footer-link  footer-heading">
                            Useful Links
                        </h4>
                    </li>
                    <?php wp_nav_menu( array('menu' => 'footr_menu', 'container' => '', 'items_wrap' => '<ul class="list-unstyled footer-list-ul">%3$s</ul>' )); ?>
                   <!--  <li>
                        <a href="#" class="text-decoration-none footer-link-p">
                           Comming Soon
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo get_site_url() ?>/about-us" class="text-decoration-none footer-link-p">
                            About us
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo get_site_url() ?>/contact-us" class="text-decoration-none footer-link-p">
                            Contact us
                        </a>
                    </li> -->
                </ul>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <ul class="list-unstyled footer-list-ul contact-info-heading">
                    <li class="list-item footer-margin-left">
                        <h4 class="footer-link footer-heading">
                            Contact Info
                        </h4>
                    </li>
                    <!-- <li class="footer-margin-bottom">
                        <a href="about.php" class="text-decoration-none">
                            Address:
                        </a>
                    </li> -->
                    <!-- <li class="pr-2 mb-3">
                        <a  class="text-decoration-none">
                            121 King Street Melbourne,
                            3000, Australia
                        </a>
                    </li> -->
                    <li class="footer-margin-bottom">
                        <a class="text-decoration-none">
                            Email:
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="mailto:<?php echo get_field('email',52); ?>" class="text-decoration-none">
                            <?php echo get_field('email',52); ?>
                        </a>
                    </li>

                    <li class="footer-margin-bottom">
                        <a href="#" class="text-decoration-none">
                            Phone:
                        </a>
                    </li>
                    <li>
                        <a href="tel:<?php echo get_field('phone_number',52); ?>" class="text-decoration-none"><?php echo get_field('phone_number',52); ?></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <ul class="list-unstyled">
                    <li class="list-item">
                        <h4 class="footer-link  footer-heading instagram-heading">
                           Instagram
                        </h4>
                    </li>
                </ul>
                <div class="footer-images">
                    <div class="images-inner-box">
                        <ul class="list-unstyled mb-1">
                            <li class="list-item d-inline-block">
                                <figure class="mb-0"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-img1.png" alt="Snow" class="img-fluid footer-imgs"></figure>
                            </li>
                            <li class="list-item d-inline-block">
                                <figure  class="mb-0"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-img2.png" alt="Snow" class="img-fluid footer-imgs"></figure>
                            </li>
                            <li class="list-item d-inline-block">
                                <figure  class="mb-0"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-img3.png" alt="Snow" class="img-fluid footer-imgs"></figure>
                            </li>
                        </ul>
                    </div>
                    <div class="images-inner-box">
                        <ul class="list-unstyled">
                            <li class="list-item d-inline-block">
                                <figure class="mb-0"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-img4.png" alt="Snow" class="img-fluid footer-imgs"></figure>
                            </li>
                            <li class="list-item d-inline-block">
                                <figure  class="mb-0"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-img5.png" alt="Snow" class="img-fluid footer-imgs"></figure>
                            </li>
                            <li class="list-item d-inline-block">
                                <figure  class="mb-0"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-img6.png" alt="Snow" class="img-fluid footer-imgs"></figure>
                            </li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>
    </div>
</div>
    
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.6.0.min.js"></script>
    <script src='<?php echo get_template_directory_uri(); ?>/assets/mmenu/mmenu-light.js' id='mmenu-main-js'></script>
    <script src='<?php echo get_template_directory_uri(); ?>/assets/mmenu/mmenu-light.polyfills.js' id='mmenu-polyfill-js'></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/animations.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom-script.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.js"></script>
    <!-- <script src="assets/js/aos.js"></script> -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/text-animations.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/carousel.js"></script>

    <!-- <script> 
        $(document).ready(function(){
    
      $('.index2-navlink').click(function(){
      $('.service-menu').animate({height:'0px'}, 500);
    
    $('.service-menu').toggle();
   });
   console.log('jelloworls');
    
    }); 
</script> -->

<script>    
    $('#menu-item-9').on('click', function(e) {
        $('#menu-item-9').toggleClass("active1");
      $('.sub-menu').toggleClass("active");
      e.preventDefault();
    });
</script>
<script>    
    $('#menu-item-10').on('click', function(e) {
      $('.sub-menu').toggleClass("active");
      $('#menu-item-10').toggleClass("active2");
      e.preventDefault();
    });
</script>

<script>
            document.addEventListener(
                "DOMContentLoaded", () => {
                    const menu = new MmenuLight(
                        document.querySelector( "#menu" ),
                        "(max-width: 768px)"
                    );

                    const navigator = menu.navigation();
                    const drawer = menu.offcanvas();

                    document.querySelector( "a[href='#menu']" )
                        .addEventListener( "click", ( evnt ) => {
                            evnt.preventDefault();
                            drawer.open();
                        });
                }
            );
        </script>

    

    
     
    
<?php wp_footer(); ?>

</body>
</html>
