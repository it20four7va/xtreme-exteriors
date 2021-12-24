<?php /* Template Name: Certification Page */ ?>
<?php get_header(); ?>
<main id="main" style="">
	<section id="certifications" class="certifications section-bg">
		<div class="container">
			<?php echo get_breadcrumb();?>
			<div class="section-title pb-0">
				<h1><?php echo get_the_title() ?></h1>
			</div>
			<div class="border-top mb-4"></div>
			<div class="row">
				<div class="col-md-3">
					<div class="text-center">
						<img src="<?php echo site_url();?>/wp-content/uploads/2021/12/placeholder_600x400.png" class="img-thumbnail" alt="...">
						<p>Roofing</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="text-center">
						<img src="<?php echo site_url();?>/wp-content/uploads/2021/12/placeholder_600x400.png" class="img-thumbnail" alt="...">
						<p>Roofing</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="text-center">
						<img src="<?php echo site_url();?>/wp-content/uploads/2021/12/placeholder_600x400.png" class="img-thumbnail" alt="...">
						<p>Roofing</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="text-center">
						<img src="<?php echo site_url();?>/wp-content/uploads/2021/12/placeholder_600x400.png" class="img-thumbnail" alt="...">
						<p>Roofing</p>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
