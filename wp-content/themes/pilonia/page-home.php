<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<div id="page-home">
    <main>
        <div class="container-fluid">
            <div class="row products-wrapper">
                <div class="product-wrapper col-lg-6">
                    <img src="<?php echo get_template_directory_uri() . '/images/products-printer.svg' ?>" alt="logo">
                </div>
                <div class="product-wrapper col-lg-6">
                    <img src="<?php echo get_template_directory_uri() . '/images/products-homes.svg' ?>" alt="logo">

                </div>
            </div>

        </div>
    </main>
</div>
