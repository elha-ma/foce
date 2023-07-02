<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">

		<nav id="site-navigation" class="main-navigation">
        <div class="dispo-row">
            <div> </div>
            <div class="site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
            </div>
            
            <div class="m-burger">
                <a href="#" id="openBtn">
                    <span class="burger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a id="closeBtn" href="#" class="close invisible">X</a>
            </div>

            <div id="mySidenav" class="sidenav">    
                <div class="fond-menu">
                    <img src="<?php echo get_theme_file_uri() . '/assets/images/orchid.png'; ?> " alt="orchidée" class="orchide"/>
                    <img src="<?php echo get_theme_file_uri() . '/assets/images/cat-blue.png'; ?> " alt="cat blue" class="cat-blue"/>
                    <img src="<?php echo get_theme_file_uri() . '/assets/images/flower.png'; ?> " alt="flower" class="flower"/>
                    <img src="<?php echo get_theme_file_uri() . '/assets/images/cat-orange.png'; ?> " alt="cat orange" class="cat-orange"/>
                </div>
                
                <div>
                    <ul>
                        <li> <img src="<?php echo get_theme_file_uri() . '/assets/images/logo-small.png'; ?> " alt="logo Fleurs d'oranger & chats errants"></li>
                        <li id="lien-story"><a href="#story">Histoire</a></li>
                        <li id="lien-perso"><a href="#characters">Personnages</a></li>            
                        <li id="lien-lieu"><a href="#new-place">Lieu</a></li>
                        <li id="lien-studio"><a href="#studio">Studio Koukaki</a></li>
                    </ul>
                    <ul>
                        <p class="center">Studio Koukaki</p>
                    </ul>
                </div>

                <div>
                    <img src="<?php echo get_theme_file_uri() . '/assets/images/sunflower.png'; ?> " alt="sun flower" class="sun-flower"/>
                    <img src="<?php echo get_theme_file_uri() . '/assets/images/randomflower.png'; ?> " alt="random flower" class="random-flower"/>
                    <img src="<?php echo get_theme_file_uri() . '/assets/images/cat-black.png'; ?> " alt="cat black" class="cat-black"/>
                    <img src="<?php echo get_theme_file_uri() . '/assets/images/hibiscus.png'; ?> " alt="hibiscus" class="hibiscus"/>
                </div>
            </div>  
     
        </div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
