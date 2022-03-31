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
				<img class="logo-dark" src="<?php echo get_template_directory_uri() . '/images/logo.svg' ?>" alt="logo">
				<img class="logo-light" src="<?php echo get_template_directory_uri() . '/images/logo-light.svg' ?>" alt="logo">
            </a>
			<div class="top_shortcuts top_shortcuts-light md-hidden">
                <a href="tel:+843-PILONIA (745-6642)">843-PILONIA (745-6642)</a>
                <a href="mailto:info@pilonia.com">info@pilonia.com</a>
			</div>
<!--			<div class="menu-icon menu-icon-light">-->
<!--				<span class="menu-icon__line menu-icon__line-left"></span>-->
<!--				<span class="menu-icon__line"></span>-->
<!--				<span class="menu-icon__line menu-icon__line-right"></span>-->
<!--			</div>-->
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

