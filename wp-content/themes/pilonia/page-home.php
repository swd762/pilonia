<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

    <div id="page-home">
        <main>
            <div class="container">
                <div class="row products-wrapper">
                    <div class="col-lg-6 col-md-6">
                        <a href="#" class="product">
                            <img src="<?php echo get_template_directory_uri() . '/images/products-printer.svg' ?>" alt="logo">
                            <div class="description">
                                <h3>4D printer’s</h3>
                                <p>Pilonia printers are large-format portal COP-printer
                                    with enhanced performance for printing elements
                                    of buildings</p>
                                <span>
                            learn more
                            <img class="icon" src="<?php echo get_template_directory_uri() . '/images/arrow-right.svg' ?>" alt="">
                        </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <a href="#" class="product">
                            <img src="<?php echo get_template_directory_uri() . '/images/products-homes.png' ?>" alt="logo">
                            <div class="description">
                                <h3>4D printer’s</h3>
                                <p>Pilonia printers are large-format portal COP-printer
                                    with enhanced performance for printing elements
                                    of buildings</p>
                                <span>
                            learn more
                            <img class="icon" src="<?php echo get_template_directory_uri() . '/images/arrow-right.svg' ?>" alt="">
                        </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="about-us">
                    <h2>About us</h2>
                    <div class="row">
                        <div class="subscribe col-lg-3">
                            Subscribe
                            to our social
                            networks
                            <div class="socials">
                                <a href="#"><img src="<?php echo get_template_directory_uri() . '/images/icons/facebook.svg' ?>" alt=""></a>
                                <a href="#"><img src="<?php echo get_template_directory_uri() . '/images/icons/insta.svg' ?>" alt=""></a>
                                <a href="#"><img src="<?php echo get_template_directory_uri() . '/images/icons/twitter.svg' ?>" alt=""></a>
                                <a href="#"><img src="<?php echo get_template_directory_uri() . '/images/icons/youtube.svg' ?>" alt=""></a>
                                <a href="#"><img src="<?php echo get_template_directory_uri() . '/images/icons/linked.svg' ?>" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="desc">
                                Pilonia is an industrial scale 3D printing design and manufacturing company with proprietary concrete
                                toner that can be used to print homes, commercial buildings, landscape details, and infrastructure
                                elements, headquartered in New York.
                            </div>
                            <div class="extra-info">
                                <div class="row">
                                    <div class="label col-3">
                                        <span>3D</span>
                                        <span>printing<br>design</span>
                                    </div>
                                    <div class="text col-9">
                                        Using our processes, as further described below, we produce proprietary based concrete with nanomaterials
                                        toner and develop nano materials (graphene, nanotubes and other nano additives) based technology
                                        for different applications used in 3D printing smart homes and other applications.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-img">
                        <img src="<?php echo get_template_directory_uri() . '/images/home.png' ?>" alt="">
                    </div>
                </div>
                <div class="contact-us">
                    <h2>Contact us</h2>
                    <div class="row">
                        <div class="col-lg-4 interesting">
                            Interested in discussing a project with us?
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-6 instruction">
                                    Just fill out the form or give us call to get started.
                                    <span>We're always happy to discuss your project with you and put together the best proposal.</span>
                                </div>
                                <div class="col-6">
									<?php echo do_shortcode( '[contact-form-7 id="6" title="Contact form 1"]' ) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
<?php get_footer();
