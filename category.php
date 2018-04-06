<?php 
get_header();

$name = get_the_category()[0]->name;
if ($name == 'Destaque') :
	$name = get_the_category()[1]->name;
endif;
?>
<script> console.log('category.php'); </script>

<div class=" main-container container">
	<div class="row">
		<h1>Artigos na categoria <span class="title"><?php print($name); ?></span></h1>
	</div>
	<div class="row">

		<div id="main-content">
			<div class="section-title hide">
				<h2 class="cl-light">Main Content </h2>
			</div>
			<section >
				<?php include(get_template_directory().'/assets/views/blogsection.php'); ?>
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