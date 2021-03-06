<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 *
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
    <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/dist/images/favicon.png" type="image/x-icon"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
	<?php wp_head(); ?>
</head>
<body>
<header class="main-menu">
    <div class="container">
        <div class="navbar">
            <a href="/" class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="156.115" height="53.081" viewBox="0 0 156.115 53.081">
                    <g id="Сгруппировать_7" data-name="Сгруппировать 7" transform="translate(1752.04 -466.143)">
                        <g id="Сгруппировать_6" data-name="Сгруппировать 6" transform="translate(-1752.04 466.143)">
                            <path id="Контур_6" data-name="Контур 6"
                                  d="M-1697.023,512.145a3.918,3.918,0,0,1,.312-4.376l-7.226-4.172-7.14-4.122a3.92,3.92,0,0,1-.72,1.155l6.071,3.5-8.985,5.18-8.984-5.18,6.07-3.5a3.894,3.894,0,0,1-.72-1.155l-7.141,4.122-7.226,4.172a3.915,3.915,0,0,1,.311,4.376,3.916,3.916,0,0,1-3.858,1.93v16.566a3.879,3.879,0,0,1,1.361.076l0-7.174,8.978,5.192.006,10.37-6.1-3.528a3.933,3.933,0,0,1-.588,1.232l7.122,4.112,7.208,4.161a3.916,3.916,0,0,1,3.566-2.3,3.916,3.916,0,0,1,3.567,2.3l7.208-4.161,7.122-4.112a3.914,3.914,0,0,1-.588-1.232l-6.1,3.528.008-10.37,8.978-5.192-.006,7.174a3.888,3.888,0,0,1,1.362-.076V514.075A3.918,3.918,0,0,1-1697.023,512.145Zm-28.205,15.353-8.985-5.178,8.985-5.18,8.985,5.18Zm11.237-16.967,8.978-5.192-.008,10.371L-1714,520.9Zm.105,23.394-.008-10.371,8.978,5.191.008,10.371Z"
                                  transform="translate(1737.992 -495.817)" fill="#189d85" fill-rule="evenodd"/>
                            <path id="Контур_7" data-name="Контур 7" d="M-1557.741,466.143a2.2,2.2,0,0,0-2.2,2.2,2.2,2.2,0,0,0,2.2,2.2,2.2,2.2,0,0,0,2.2-2.2,2.2,2.2,0,0,0-2.2-2.2Z"
                                  transform="translate(1581.021 -466.143)" fill="#189d85" fill-rule="evenodd"/>
                            <path id="Контур_8" data-name="Контур 8" d="M-1363.744,578.146a2.2,2.2,0,0,0-3-.805,2.2,2.2,0,0,0-.805,3,2.2,2.2,0,0,0,3,.805,2.2,2.2,0,0,0,.8-3Z"
                                  transform="translate(1410.008 -564.876)" fill="#189d85" fill-rule="evenodd"/>
                            <path id="Контур_9" data-name="Контур 9" d="M-1363.744,802.159a2.2,2.2,0,0,0-.8-3,2.2,2.2,0,0,0-3,.805,2.2,2.2,0,0,0,.805,3,2.2,2.2,0,0,0,3-.805Z"
                                  transform="translate(1410.008 -762.349)" fill="#189d85" fill-rule="evenodd"/>
                            <path id="Контур_10" data-name="Контур 10"
                                  d="M-1557.741,909.769a2.2,2.2,0,0,0-2.2,2.2,2.2,2.2,0,0,0,2.2,2.2,2.2,2.2,0,0,0,2.2-2.2,2.2,2.2,0,0,0-2.2-2.2Z"
                                  transform="translate(1581.021 -861.088)" fill="#189d85" fill-rule="evenodd"/>
                            <path id="Контур_11" data-name="Контур 11" d="M-1747.935,799.96a2.2,2.2,0,0,0-3-.805,2.2,2.2,0,0,0-.805,3,2.2,2.2,0,0,0,3,.805,2.2,2.2,0,0,0,.805-3Z"
                                  transform="translate(1752.04 -762.349)" fill="#189d85" fill-rule="evenodd"/>
                            <path id="Контур_12" data-name="Контур 12" d="M-1747.935,580.346a2.2,2.2,0,0,0-.805-3,2.2,2.2,0,0,0-3,.805,2.2,2.2,0,0,0,.805,3,2.2,2.2,0,0,0,3-.8Z"
                                  transform="translate(1752.04 -564.876)" fill="#189d85" fill-rule="evenodd"/>
                        </g>
                        <path id="Контур_13" data-name="Контур 13"
                              d="M-1221.759,619.018a3.256,3.256,0,0,0-2.308-.958h-9.593V637.1h2.177v-6.993h7.416a3.256,3.256,0,0,0,2.308-.958,3.258,3.258,0,0,0,.958-2.309v-5.514A3.258,3.258,0,0,0-1221.759,619.018Zm-1.219,7.823a1.086,1.086,0,0,1-.32.769,1.084,1.084,0,0,1-.768.319h-7.416v-7.691h7.416a1.084,1.084,0,0,1,.768.319,1.086,1.086,0,0,1,.32.769Z"
                              transform="translate(-461.495 -135.246)" fill="#189d85" fill-rule="evenodd"/>
                        <path id="Контур_14" data-name="Контур 14" d="M-1075.448,618.063V637.1h-2.177V618.063Z" transform="translate(-600.407 -135.249)" fill="#189d85"
                              fill-rule="evenodd"/>
                        <path id="Контур_15" data-name="Контур 15" d="M-1010.434,634.927h9.189V637.1h-11.367V618.063h2.177v16.864Z" transform="translate(-658.287 -135.249)"
                              fill="#189d85" fill-rule="evenodd"/>
                        <path id="Контур_16" data-name="Контур 16"
                              d="M-867.107,619.332a3.5,3.5,0,0,0-2.483-1.032h-7.544a3.5,3.5,0,0,0-2.483,1.032,3.5,3.5,0,0,0-1.031,2.483v11.959a3.5,3.5,0,0,0,1.031,2.483,3.5,3.5,0,0,0,2.483,1.031h7.544a3.5,3.5,0,0,0,2.483-1.031,3.5,3.5,0,0,0,1.031-2.483V621.815A3.5,3.5,0,0,0-867.107,619.332Zm-1.146,14.442a1.335,1.335,0,0,1-.394.944,1.33,1.33,0,0,1-.944.394h-7.544a1.33,1.33,0,0,1-.944-.394,1.334,1.334,0,0,1-.394-.944V621.815a1.334,1.334,0,0,1,.394-.944,1.334,1.334,0,0,1,.944-.394h7.544a1.335,1.335,0,0,1,.944.394,1.334,1.334,0,0,1,.394.944Z"
                              transform="translate(-775.768 -135.46)" fill="#189d85" fill-rule="evenodd"/>
                        <path id="Контур_17" data-name="Контур 17" d="M-702.1,621.322V636.46h-2.177V617.419h2.177l10.184,15.081V617.419h2.177V636.46h-2.177L-702.1,621.322Z"
                              transform="translate(-932.787 -134.676)" fill="#189d85" fill-rule="evenodd"/>
                        <path id="Контур_18" data-name="Контур 18" d="M-523.046,617.419V636.46h-2.177V617.419Z" transform="translate(-1092.191 -134.676)" fill="#189d85"
                              fill-rule="evenodd"/>
                        <path id="Контур_19" data-name="Контур 19"
                              d="M-468.085,617.42h-3.632l-6.343,19.041h2.288l1.567-4.694h8.6l1.567,4.694h2.289Zm-5.393,12.17,3.336-9.993h.478l3.336,9.993Z"
                              transform="translate(-1134.179 -134.676)" fill="#189d85" fill-rule="evenodd"/>
                    </g>
                </svg>
            </a>
            <div class="top_shortcuts md-hidden">
                <a href="tel:+843-PILONIA (745-6642)">843-PILONIA (745-6642)</a>
                <a href="mailto:info@pilonia.com">info@pilonia.com</a>
            </div>
<!--            <div class="menu-icon">-->
<!--                <span class="menu-icon__line menu-icon__line-left"></span>-->
<!--                <span class="menu-icon__line"></span>-->
<!--                <span class="menu-icon__line menu-icon__line-right"></span>-->
<!--            </div>-->
        </div>
    </div>
</header>

<div class="nav">
    <div class="container">
        <div class="nav-wrapper">
            <div class="header">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri() . '/images/logo-light.svg' ?>" alt="">
                </div>
                <div class="close-btn">
                    <img src="<?php echo get_template_directory_uri() . '/images/close.svg' ?>" alt="">
                </div>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-xl-3 col-md-3">

                    </div>
                    <div class="col-xl-9 col-md-9 col-sm-12">
                        <div class="row">
                            <div class="col-xl-4 col-md-4">
                                <ul>
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">4D printer’s</a>4</li>
                                    <li><a href="#">Printing houses</a></li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-md-4">
                                <ul>
                                    <li><a href="#">Partnerships</a></li>
                                    <li><a href="#">Community developers</a></li>
                                    <li><a href="#">Architects</a></li>
                                    <li><a href="#">Real estate developers</a></li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-md-4">
                                <ul>
                                    <li><a href="#">Investment</a></li>
                                    <li><a href="#">Community developers</a></li>
                                    <li><a href="#">Architects</a></li>
                                    <li><a href="#">Real estate developers</a></li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-md-4">
                                <ul>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">First</a></li>
                                    <li><a href="#">Second</a></li>
                                    <li><a href="#">Third</a></li>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-md-4">
                                <ul>
                                    <li><a href="#">Get involved</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="footer">
                <div class="tel">
                    843-PILONIA (745-6642)
                </div>
                <div class="email">
                    info@3pilonia.com
                </div>
                <div class="socials">
                    <a href="#"><img src="<?php echo get_template_directory_uri() . '/images/icons/facebook-light.svg' ?>" alt=""></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri() . '/images/icons/insta-light.svg' ?>" alt=""></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri() . '/images/icons/twitter-light.svg' ?>" alt=""></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri() . '/images/icons/youtube-light.svg' ?>" alt=""></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri() . '/images/icons/linked-light.svg' ?>" alt=""></a>
                </div>
            </div>
        </div>

    </div>

</div>


<script>

    //Navigation
    let app = () => {
        let menuBtn = document.querySelector('.menu-icon');
        let nav = document.querySelector('.nav');
        let body = document.querySelector('body');
        let closeBtn = document.querySelector('.close-btn');

        // menuBtn.addEventListener('click', function () {
        //     nav.classList.add('opened');
        //     body.classList.add('nav-opened');
        // });

        // closeBtn.addEventListener('click', function () {
        //     nav.classList.remove('opened');
        //     body.classList.remove('nav-opened');
        // })
    }

    app();
</script>
<?php
//	        wp_nav_menu( [
//		        'theme_location'  => 'top-menu',
//		        'container'       => 'div',
//		        'menu_class'      => 'menu',
//		        'menu_id'         => 'top-menu',
//		        'echo'            => true,
//		        'fallback_cb'     => 'wp_page_menu',
//		        'walker'          => ''
//	        ] );
//	        ?>

