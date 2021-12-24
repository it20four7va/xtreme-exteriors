<?php /* Template Name: Book Online Page */ ?>
<?php get_header(); ?>
<main id="main" style="">
	<section id="certifications" class="certifications section-bg">
		<div class="container">
			<?php echo get_breadcrumb();?>
			<div class="section-title pb-0">
				<h1><?php echo get_the_title() ?></h1>
			</div>
			<div class="border-top mb-4"></div>
            <!-- Calendly inline widget begin -->
            <div class="calendly-inline-widget" data-url="https://calendly.com/timmy-vanvonno/15min" style="min-width:320px;height:630px;"></div>
            <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
            <!-- Calendly inline widget end -->
		</div>
	</section>
</main>
<?php get_footer(); ?>
