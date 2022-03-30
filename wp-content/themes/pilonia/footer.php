<?php
/**
 * The footer for our theme
 *
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 *
 */
?>
<?php wp_footer(); ?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-xl-4 logo">
                <img src="<?php echo get_template_directory_uri() . '/images/logo-light.svg' ?>" alt="">
                <div class="desc">
                    Pilonia is an industrial scale 3D printing design and manufacturing company with proprietary concrete toner that can be used to print homes, commercial
                    buildings, landscape details, and infrastructure elements.
                </div>
            </div>
            <!--            <div class="col-xl-1 col-md-1"></div>-->
            <div class="col-xl-8 navs">
                <div class="row justify-content-end">
                    <!--                    <div class="col-xl-3 col-md-3 col-sm-6 col-6">-->
                    <!--                        <div class="sitemap">-->
                    <!--                            <div class="header">-->
                    <!--                                sitemap-->
                    <!--                            </div>-->
                    <!--                            <ul class="content">-->
                    <!--                                <li>Technology</li>-->
                    <!--                                <li>Partnerships</li>-->
                    <!--                                <li>Investment</li>-->
                    <!--                                <li>News</li>-->
                    <!--                                <li>Get involved</li>-->
                    <!--                                <li>Contact us</li>-->
                    <!--                            </ul>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                        <div class="contacts">
                            <div class="header">
                                contacts
                            </div>
                            <div class="content">
                                <div class="phone">
                                    843-PILONIA (745-6642)
                                </div>
                                <div class="email">
                                    info@pilonia.com
                                </div>
                                <div class="address">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-5 col-sm-12 col-12">
                        <div class="subscribe">
                            <div class="header">
                                newsletter
                                <form action="#" class="newsletter-subscribe">
                                    <input type="text">
                                    <button type="submit" class="btn-offer">
                                        <span>subscribe</span>
                                        <img src="<?php echo get_template_directory_uri() . '/images/arrow-right-light.svg' ?>" alt="">
                                    </button>
                                </form>
                            </div>
                            <!--                            <div class="socials">-->
                            <!--                                <a href="#"><img src="-->
							<?php //echo get_template_directory_uri() . '/images/icons/facebook-light.svg' ?><!--" alt=""></a>-->
                            <!--                                <a href="#"><img src="-->
							<?php //echo get_template_directory_uri() . '/images/icons/insta-light.svg' ?><!--" alt=""></a>-->
                            <!--                                <a href="#"><img src="-->
							<?php //echo get_template_directory_uri() . '/images/icons/twitter-light.svg' ?><!--" alt=""></a>-->
                            <!--                                <a href="#"><img src="-->
							<?php //echo get_template_directory_uri() . '/images/icons/youtube-light.svg' ?><!--" alt=""></a>-->
                            <!--                                <a href="#"><img src="-->
							<?php //echo get_template_directory_uri() . '/images/icons/linked-light.svg' ?><!--" alt=""></a>-->
                            <!--                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>


