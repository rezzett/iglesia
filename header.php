<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

    <!--   HEADER   -->
    <header class="top_header cf">
        <div class="wrapper">
            <div class="header_block search-section">
                fafaf
            </div>

            <div class="header_block logo-section">
                <a href="<?php echo home_url('/');?>"><img src="<?php echo ale_get_option('sitelogo')?>" alt=""></a>
            </div>

            <div class="header_block social-section">
                <a href="<?php echo ale_get_option('fb')?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="<?php echo ale_get_option('twi')?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="<?php echo ale_get_option('insta')?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="<?php echo ale_get_option('yt')?>"><i class="fa fa-youtube" aria-hidden="true"></i></a>
            </div>

        </div>
    </header>

    <section class="home_slider">

    </section>



