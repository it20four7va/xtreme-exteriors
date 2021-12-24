<?php /* Template Name: Home Page */ ?>
<?php get_header(); ?>
    <main id="main" style="">
        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">
                <?php echo get_breadcrumb();?>
                <div class="section-title pb-0">
                    <h1>Welcome</h1>
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


        <!-- Testimonials Section -->
            <section id="testimonial" class="testimonial section-testimonial">
            <div class="container">
                <div class="section-title pb-0">
                    <h2>TESTIMONIALS</h2>
                </div>
                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</p>
                                    <p>John Smith, Yerba Buena, SF</p>
                                </div>
                                <div class="col-md-6">
                                    <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</p>
                                    <p>John Smith, Yerba Buena, SF</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</p>
                                    <p>John Smith, Yerba Buena, SF</p>
                                </div>
                                <div class="col-md-6">
                                    <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</p>
                                    <p>John Smith, Yerba Buena, SF</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</p>
                                    <p>John Smith, Yerba Buena, SF</p>
                                </div>
                                <div class="col-md-6">
                                    <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</p>
                                    <p>John Smith, Yerba Buena, SF</p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- End testimonials Section -->
    </main><!-- End #main -->
<?php get_footer(); ?>