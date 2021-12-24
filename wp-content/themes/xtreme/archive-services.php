<?php get_header(); ?>
	<main id="main" style="background-color: #EFB514;">
		<!-- ======= Services Section ======= -->
		<section id="services" class="services section-bg">
			<div class="container">
				<?php echo get_breadcrumb();?>
				<div class="section-title pb-0">
					<h1>Services</h1>
				</div>
				<div class="section-description">
					<p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.</p>
				</div>
				<div class="border-top mb-4"></div>
                <div class="row">
                    <?php
                    $args = array(
                      'numberposts' => 10,
                      'post_type'   => 'services',
                      'orderby'          => 'date',
                      'order'            => 'ASC',
                    );
                    $services = new WP_Query( $args );
                    //$services = get_posts( $args );
                    if( $services->have_posts() ){
	                    while( $services->have_posts() ){
		                    $services->the_post();
	                        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
	                        ?>
                            <div class="card">
                                <img class="card-img-top mt-3" src="<?php echo $featured_img_url;?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                    <p class="card-text"><?php the_content(); ?></p>
                                    <div class="button-area text-left"> <a href="#" class="btn btn-primary">Read More</a> </div>
                                </div>
                            </div>
                            <?php
                        }
	                    wp_reset_postdata();
                    }
                    ?>
                </div>
				<div class="border-top mb-4 mt-4"></div>
			</div>
		</section><!-- End Services Section -->
	</main><!-- End #main -->
<?php get_footer(); ?>