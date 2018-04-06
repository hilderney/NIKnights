<?php get_header(); ?>

<script> console.log('single-post.php'); </script>

<div class=" main-container container">
	<div class="row">

		<div id="main-content">
			<div class="section-title hide">
				<h2 class="cl-light">Main Content </h2>
			</div>
			<section >
				<?php include(get_template_directory().'/assets/views/singlepostsection.php'); ?>
			</section>
		</div>

		<section id="main-sidebar" class="sidebar">
			<div class="section-title hide">
				<h2 class="cl-light">Sidebar </h2>
			</div>
			
			<?php get_sidebar(); ?>		
			
		</section> <!-- end main sidebar -->
	</div>
</div>

<div class="clear"></div>
<?php get_footer(); ?>