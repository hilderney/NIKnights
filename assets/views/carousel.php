<?php 
$args = array(
	'category_name' 	=> 'destaque'
	, 'order'			=> 'date'
	, 'posts_per_page'	=> '5'
);

$query_carousel = new WP_Query( $args );
$index = 0; 

if ( $query_carousel->have_posts() ) : ?>
	<div id="carousel">
		<div class="section-title hide">
			<h2 class="cl-light">Featured Slider </h2>
		</div>
		
		<div class="nik-carousel-container">
			<div id="nik_carousel" class="carousel slide" data-ride="carousel">
				
				<div class="carousel-inner">
					<?php while ( $query_carousel->have_posts() ) : $query_carousel->the_post(); ?>
						<div class="carousel-item <?php if ($index == 0) echo 'active'; ?> ">
							<a href="<?php the_permalink() ?>">
								<div class="post-<?php the_ID(); ?> carousel-featured-image ">
									<div class="post-title">
										<?php the_title(); ?>
									</div>
									<!-- <div class="carousel-content">
										<?php  /*if (has_excerpt() ): ?>
											<?php the_excerpt(); ?>
											<span class="btn read-more">Leia Mais...</span>
										<?php else : ?>
											<?php the_content( ' Mais... ')  ?>
											<span class="btn read-more">Leia Mais...</span>
										<?php endif; */?>
									</div> -->
									<style>
										<?php if(get_the_post_thumbnail()) : ?>
											.post-<?php the_ID(); ?>.carousel-featured-image {
											background-image: url('<?php the_post_thumbnail_url(); ?>'); 
										}
										<?php else : ?>
										.post-<?php the_ID(); ?>.carousel-featured-image {
											background-image: url('<?php bloginfo('template_url') ?>/assets/images/postbackgroundsample.jpg'); 
										}
										<?php endif; ?>
									</style>
								</div>
								
							</a>
						</div>
						<?php $index++; ?>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				</div>
				<a class="carousel-control-prev" href="#nik_carousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#nik_carousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>	

	</div>

<div class="clear"></div>

	
<?php endif; ?>



