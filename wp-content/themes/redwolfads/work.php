<?php
/**
* Template name: Template for work
*/
 ?>

<?php get_header(); ?>
<section id="intro">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
						<div class="intro animate-box">
							<h2>We are web agency based in London &amp; we love functional &amp; meaningful design.</h2>
						</div>
					</div>
				</div>
			<div>
		</section>

		<section id="work">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="fh5co-grid animate-box" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/work-1.jpg);">
							<a class="image-popup text-center" href="page.html">
								<div class="work-title">
									<h3>Don’t Just Stand There</h3>
									<span>Illustration, Print</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-grid animate-box" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/work-2.jpg);">
							<a class="image-popup text-center" href="page.html">
								<div class="work-title">
									<h3>Don’t Just Stand There</h3>
									<span>Illustration, Print</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-grid animate-box" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/work-3.jpg);">
							<a class="image-popup text-center" href="page.html">
								<div class="work-title">
									<h3>Don’t Just Stand There</h3>
									<span>Illustration, Print</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-grid animate-box" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/work-4.jpg);">
							<a class="image-popup text-center" href="page.html">
								<div class="work-title">
									<h3>Don’t Just Stand There</h3>
									<span>Illustration, Print</span>
								</div>
							</a>
						</div>
					</div>
				</div>
			<div>
		</section>
<?php get_footer(); ?>

<audio id="playAudio" controls>
		<source src="music.mp3">
	</audio>
	<p class="pre" onclick="soundClick()">Кликни по этому тексту</p>