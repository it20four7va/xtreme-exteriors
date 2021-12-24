<?php /* Template Name: Contact Page */ ?>
<?php get_header(); ?>
<main id="main" style="">
	<section id="contact" class="contact section-bg">
		<div class="container">
			<?php echo get_breadcrumb();?>
			<div class="row">
                <div class="col-md-6">
                    <div class="section-title pb-0">
                        <h1><?php echo get_the_title() ?></h1>
                    </div>
                    <div class="contact-details">
                        <p> <i class="bi bi-building"></i> 2160 N Glebe Rd., Suite B, Arlington, VA 22207</p>
                        <p> <i class="bi bi-telephone-fill"></i> Tel : <a href="callto:(571) 281 1444">(571) 281 1444</a></p>
                    </div>
<!--                    <div class="social-links mt-5">-->
<!--                        <p><i class="fab fa-facebook-square"></i> Like us on Facebook</p>-->
<!--                    </div>-->
                    <div class="area mt-4">
                        <h2>Area Covered : </h2>
                        <p> <i class="bi bi-geo-alt-fill"></i> ARLINGTON</p>
                        <p> <i class="bi bi-geo-alt-fill"></i> MCLEAN</p>
                        <p> <i class="bi bi-geo-alt-fill"></i> FAIRFAX</p>
                        <p> <i class="bi bi-geo-alt-fill"></i> FALLS CHURCH</p>
                        <p> <i class="bi bi-geo-alt-fill"></i> AND... SURROUND AREAS OF NOVA </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-title pb-0">
                        <h2>Free Consultation</h2>
                    </div>
                    <form method="post">
                        <div class="form-group mb-4">
                            <label for="exampleInputEmail1">Name <span class="required">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group mb-4">
                            <label for="exampleInputEmail1">Phone Number <span class="required">*</span></label>
                            <input type="number" name="phone" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Your Phone">
                            <small id="emailHelp" class="form-text text-muted">0 of 15 max characters.</small>
                        </div>
                        <div class="form-group mb-4">
                            <label for="exampleInputEmail1">Email address <span class="required">*</span></label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                         </div>
                        <div class="form-group mb-4">
                            <label for="exampleFormControlTextarea1">Enter your Message <span class="required">*</span></label>
                            <textarea name="message" class="form-control" placeholder="Please Type Your Message Here" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary mb-4">Submit</button>
                    </form>
                </div>
			</div>
            <div class="row">
                <div class="google-map">
                    <iframe
                            width="100%"
                            height="450"
                            style="border:0"
                            loading="lazy"
                            allowfullscreen
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3105.1895788963093!2d-77.12546928556591!3d38.89677985458734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x62d7f73c97c8a551!2zMzjCsDUzJzQ4LjQiTiA3N8KwMDcnMjMuOCJX!5e0!3m2!1sen!2sin!4v1640164589992!5m2!1sen!2sin">
                    </iframe>
<!--                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3105.1895788963093!2d-77.12546928556591!3d38.89677985458734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b5cadd5b1761%3A0xe519188cbbd4b33b!2s2160%20N%20Glebe%20Rd%20b!5e0!3m2!1sen!2sin!4v1640164358997!5m2!1sen!2sin"   width="100%"-->
<!--                            height="450"-->
<!--                            style="border:0"-->
<!--                            loading="lazy"-->
<!--                            allowfullscreen></iframe>-->
                </div>
            </div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
