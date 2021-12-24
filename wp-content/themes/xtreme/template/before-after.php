<?php /* Template Name: Before After Page */ ?>
<?php get_header(); ?>
	<main id="main" style="">
		<!-- ======= Services Section ======= -->
		<section id="services" class="services section-bg">
			<div class="container">
				<?php echo get_breadcrumb();?>
				<div class="section-title pb-0">
					<h1><?php echo get_the_title(); ?></h1>
				</div>
				<div class="section-description">
					<p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.</p>
				</div>
				<div class="row">
					<div class="col-md-12 ">
                        <div class="before-after-section">
                            <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?php echo site_url();?>/wp-content/uploads/2021/12/Sanderling-Project-before-4.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo site_url();?>/wp-content/uploads/2021/12/Sanderling-Project-before-1.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo site_url();?>/wp-content/uploads/2021/12/Sanderling-Project-before-4.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo site_url();?>/wp-content/uploads/2021/12/Sanderling-Project-before-1.jpg" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
					</div>

				</div>
			</div>
		</section><!-- End Services Section -->
 	</main><!-- End #main -->

<?php get_footer(); ?>