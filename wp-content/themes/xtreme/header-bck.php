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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'xtreme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$image = wp_get_attachment_image_src($custom_logo_id);
			$image_alt = get_post_meta( $custom_logo_id, '_wp_attachment_image_alt', true );
			if ( empty( $image_alt ) ) {
				$custom_logo_attr['alt'] = get_bloginfo( 'name', 'display' );
			}

			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$xtreme_description = get_bloginfo( 'description', 'display' );
			if ( $xtreme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $xtreme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'xtreme' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $image[0];?>" class="img-thumbnail" alt="<?php echo $custom_logo_attr['alt']; ?>">
            </div>
            <div class="col-sm-6">
                Column
            </div>
        </div>
    </div>