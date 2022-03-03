<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

    <div id="page-home">
        <main>
            <div class="container">
                <!--                products-->
                <div class="products">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <a href="/4d-printer" class="product-card printer">
                                <div class="description">
                                    <h3>4D printers</h3>
                                    <p>Pilonia printers are large-format portal COP-printer
                                        with enhanced performance for printing elements
                                        of buildings
                                    </p>
                                    <span>
                                learn more
                                    <img class="icon" src="<?php echo get_template_directory_uri() . '/images/arrow-right.svg' ?>" alt="">
                                </span>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <a href="/homes" class="product-card homes">
                                <div class="description">
                                    <h3>Our homes</h3>
                                    <p>3D printed home construction is achieved using a gantry style printer. A gantry style printer operates under the same guiding principles as a
                                        typical plastic 3D printer
                                    </p>
                                    <span>
                                learn more
                                    <img class="icon" src="<?php echo get_template_directory_uri() . '/images/arrow-right.svg' ?>" alt="">
                                </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!--                about us-->
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
                                    <div class="label col-6 col-sm-4 col-xl-3">
                                        <span>3D</span>
                                        <span>printing<br>design</span>
                                    </div>
                                    <div class="text col-6 col-sm-8 col-xl-9">
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
                <!--                news-->
                <div class="news">
                    <h2>News</h2>
                    <div class="news-item">
                        <div class="row">
                            <div class="col-xl-3 header-title">
                                The first piece
                                of news.
                            </div>
                            <div class="col-xl-9">
                                <div class="row">
                                    <div class="col-12 col-xl-4 header-text">
                                        <div class="header">
                                            All structural elements
                                            were finally assembled,
                                            the structure acquired
                                            a finished look.
                                        </div>
                                        <div class="desc">
                                            Field trials were completed successfully in&nbsp;full accordance with the calculations
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-8 header-pic">
                                        <img src="<?php echo get_template_directory_uri() . '/images/news-1-head.jpg' ?>" alt="">
                                    </div>
                                </div>
                                <div class="row news-gallery justify-content-end">
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 gallery-pics align-self-end">
                                        <img src="<?php echo get_template_directory_uri() . '/images/news-1-1.jpg' ?>" alt="">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 gallery-pics align-self-end">
                                        <img src="<?php echo get_template_directory_uri() . '/images/news-1-2.jpg' ?>" alt="">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 gallery-pics align-self-end">
                                        <img src="<?php echo get_template_directory_uri() . '/images/news-1-3.jpg' ?>" alt="">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 gallery-pics align-self-end">
                                        <img src="<?php echo get_template_directory_uri() . '/images/news-1-4.jpg' ?>" alt="">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 gallery-pics align-self-end">
                                        <img src="<?php echo get_template_directory_uri() . '/images/news-1-5.jpg' ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="news-item">
                        <div class="row">
                            <div class="col-xl-3 header-title">
                                The second piece
                                of news.
                            </div>
                            <div class="col-xl-9">
                                <div class="row">
                                    <div class="col-12 col-xl-4 header-text">
                                        <div class="header">
                                            The tests of a concrete
                                            mixture held place.
                                        </div>
                                        <div class="desc">
                                            The characteristics of this concrete mixture
                                            make it possible to use it in construction
                                            at temperatures up to minus five degrees
                                            Celsius. This mixture is used for the
                                            construction of buildings and structures
                                            via 3D printing.
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-8 header-pic">
                                        <img src="<?php echo get_template_directory_uri() . '/images/news-2-head.jpg' ?>" alt="">
                                    </div>
                                </div>
                                <div class="row news-gallery justify-content-end">
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 gallery-pics align-self-end">
                                        <img src="<?php echo get_template_directory_uri() . '/images/news-2-1.jpg' ?>" alt="">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 gallery-pics align-self-end">
                                        <img src="<?php echo get_template_directory_uri() . '/images/news-2-2.jpg' ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news-item">
                        <div class="row">
                            <div class="col-xl-3 header-title">
                                The third piece
                                of news.
                            </div>
                            <div class="col-xl-9">
                                <div class="row">
                                    <div class="col-12 col-xl-4 header-text">
                                        <div class="header">
                                            The construction of the
                                            facility has begun
                                        </div>
                                        <div class="desc">
                                            The first phase of building of the
                                            construction has been completed.
                                            At this stage, the foundation formwork
                                            was printed.
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-8 header-pic">
                                        <img src="<?php echo get_template_directory_uri() . '/images/news-3-head.jpg' ?>" alt="">
                                    </div>
                                </div>
                                <div class="row news-gallery justify-content-end">
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 gallery-pics align-self-end">
                                        <img src="<?php echo get_template_directory_uri() . '/images/news-3-1.jpg' ?>" alt="">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 gallery-pics align-self-end">
                                        <img src="<?php echo get_template_directory_uri() . '/images/news-3-2.jpg' ?>" alt="">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 gallery-pics align-self-end">
                                        <img src="<?php echo get_template_directory_uri() . '/images/news-3-3.jpg' ?>" alt="">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 gallery-pics align-self-end">
                                        <img src="<?php echo get_template_directory_uri() . '/images/news-3-4.jpg' ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                <div class="col-xl-6 col-sm-4 col-12 instruction">
                                    Just fill out the form or give us call to get started.
                                    <span>We're always happy to discuss your project with you and put together the best proposal.</span>
                                </div>
                                <div class="col-xl-6 col-sm-8 col-12">
						            <?php echo do_shortcode( '[contact-form-7 id="6" title="Contact form 1"]' ) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </main>
    </div>
<?php get_footer();
