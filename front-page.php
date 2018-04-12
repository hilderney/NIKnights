<?php get_header(); ?>
<script> console.log('front-page.php'); </script>
<div class=" main-container container">
	<div class="row">
		<section id="main-featured-content">
			<?php include(get_template_directory().'/assets/views/featuredsection.php') ?>
		</section>
		<div id="main-content">
			<section id="podcast-content">
				<div class="section-title hide">
					<h2 class="cl-light">Main Content </h2>
				</div>
				<?php include(get_template_directory().'/assets/views/podcastsection.php'); ?>
			</section>
			<section id="news-content">
				<?php include(get_template_directory().'/assets/views/newssection.php') ?>
			</section>
		</div>
		<section id="main-sidebar" class="sidebar">
			<div class="section-title hide">
				<h2 class="cl-light">Sidebar </h2>
			</div>
			<?php get_sidebar(); ?>
		</section>
		<!-- end main sidebar -->
	</div>
</div>
<div class="clear"></div>
<?php get_footer(); ?>