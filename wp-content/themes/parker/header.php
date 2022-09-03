<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0, width=device-width" />
	<?php $color = '#FFB81D'; ?>
	<meta name="theme-color" content="<?php echo $color; ?>">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="<?php echo $color; ?>">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="<?php echo $color; ?>">
	<link rel="mask-icon" href="<?php bloginfo('template_url') ?>/favicon/images/safari-pinned-tab.svg" color="<?php echo $color; ?>">
	<?php include (TEMPLATEPATH . '/favicon/favicon.php'); ?>
	<script src= "https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.1/lottie_svg.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
	<script src="https://cdn.tailwindcss.com"></script>
	<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
	<style>[x-cloak] { display: none !important; }</style>
	<?php wp_head(); ?>
</head>
	<body <?php body_class(); ?>>
    <div class="all line bg-white">
        <header class="py-16">
            <div class="center h-full">
                <div class="flex justify-between items-center w-full h-full">
                    <div class="logo">
                        <?php if (is_home()||is_front_page()) { ?>
                            <h1 class="h1-hide"><?php echo get_bloginfo('name'); ?></h1>
                            <picture>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/swimming-logo.png" alt="Swimming Logo">
                            </picture>
                        <?php } else { ?>
                        <a href="<?php echo esc_url( home_url() ); ?>" title="somadev">
                            <picture>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/swimming-logo.png" alt="Swimming Logo">
                            </picture>
                        </a>
                        <?php } ?>
                    </div>
                    <div class="wrapper-menu h-full items-center">
                        <div class="nav-item">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <i>Menu</i>
                        </div>
                        <nav class="rmm uppercase">
                            <?php wp_nav_menu( array( 'container' => '', 'menu' => 'menu-principal' ) ); ?>
                        </nav>
                        <div class="tap-mobile"></div>                        
                    </div>

                </div>
            </div>
        </header>
