<?php
/**
* Template name: Template for contact
*/
 ?>

<?php get_header(); ?>
<section id="intro">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
						<div class="intro animate-box">
							<h1>Contact Us</h1>
							<h2>We are web agency based in London &amp; we love functional &amp; meaningful design.</h2>
						</div>
					</div>
				</div>
			<div>
		</section>

		<main id="main">
			<div class="container">
				<div class="col-md-8 col-md-offset-2 animate-box">
                <?php echo do_shortcode('[contact-form-7 id="30" title="Contact"]');?>
				</div>
				<!-- <div class="col-md-4"></div> -->
			</div>
		</main>
<?php get_footer(); ?>

