<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Xtremexteriors
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <script src="https://kit.fontawesome.com/8e00497db6.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php
$custom_logo_attr = array();
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src($custom_logo_id);
$image_full = wp_get_attachment_image_src($custom_logo_id, 'full');
$image_alt = get_post_meta( $custom_logo_id, '_wp_attachment_image_alt', true );
if ( empty( $image_alt ) ) {
	$custom_logo_attr['alt'] = get_bloginfo( 'name', 'display' );
}
?>
<!-- ======= Hero Section ======= -->
<section class="d-flex align-items-center">
    <div class="container">
        <div class="mobile-logo mobile-view">
            <img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/uploads/2021/12/cropped-logo.png">
        </div>
        <div class="hero-image img desk-view">
            <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/12/sample3.jpg">
        </div>
        <div class="hero-text-container desk-view">
            <div class="mesh-container-content p-3">
                <p class="font_7">
                    <span>we are only a phone call away</span>
                </p>
                <h5 class="font_5"><a href="tel:(571) 281 1444">(571) 281 1444</a></h5>
                <h5 class="font_5">CALL US NOW</h5>
                <h6 class="font_6">​for a price estimate</h6>
            </div>
        </div>
    </div>
</section><!-- End Hero -->
<!-- ======= Header ======= -->
<header id="header" class="">
        <div class="container d-flex align-items-center"> <!--justify-content-between-->
            <!--        <a href="--><?php //echo site_url(); ?><!--" class="logo"><img src="--><?php //echo get_template_directory_uri();?><!--/assets/img/logo.png" alt="" class="img-fluid"></a>-->
            <!-- Uncomment below if you prefer to use text as a logo -->
            <!-- <h1 class="logo"><a href="index.html">Butterfly</a></h1> -->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto <?php if(get_the_ID() == 9) echo 'active'; ?>"" href="<?php echo site_url() ?>">Home</a></li>
                    <li><a class="nav-link scrollto <?php if(get_the_ID() == 11) echo 'active'; ?>" href="<?php echo get_permalink(11) ?>">Services</a></li>
                    <li><a class="nav-link scrollto <?php if(get_the_ID() == 13) echo 'active'; ?>"" href="<?php echo get_permalink(13) ?>">Before & After</a></li>
                    <li><a class="nav-link scrollto <?php if(get_the_ID() == 15) echo 'active'; ?>"" href="<?php echo get_permalink(15) ?>">Certifications</a></li>
                    <li><a class="nav-link scrollto <?php if(get_the_ID() == 19) echo 'active'; ?>"" href="<?php echo get_permalink(19) ?>">Contact</a></li>
                    <li><a class="nav-link scrollto <?php if(get_the_ID() == 17) echo 'active'; ?>"" href="<?php echo get_permalink(17) ?>">Book Online</a></li>
                    <!--                <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>-->
                    <!--                    <ul>-->
                    <!--                        <li><a href="#">Drop Down 1</a></li>-->
                    <!--                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>-->
                    <!--                            <ul>-->
                    <!--                                <li><a href="#">Deep Drop Down 1</a></li>-->
                    <!--                                <li><a href="#">Deep Drop Down 2</a></li>-->
                    <!--                                <li><a href="#">Deep Drop Down 3</a></li>-->
                    <!--                                <li><a href="#">Deep Drop Down 4</a></li>-->
                    <!--                                <li><a href="#">Deep Drop Down 5</a></li>-->
                    <!--                            </ul>-->
                    <!--                        </li>-->
                    <!--                        <li><a href="#">Drop Down 2</a></li>-->
                    <!--                        <li><a href="#">Drop Down 3</a></li>-->
                    <!--                        <li><a href="#">Drop Down 4</a></li>-->
                    <!--                    </ul>-->
                    <!--                </li>-->
                    <!--                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>-->
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header>
<!-- End Header -->
