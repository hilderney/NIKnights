<?php 
	$args = array(
		'type'				=> 'post'
		, 'posts_per_page'	=> 5
		, 'category_name' => 'Notícia'
	);
	$newsPosts = new WP_Query($args);
	if ( $newsPosts->have_posts() ) :
	?>
<div id="news-section">
	<div class="sub-title hide">
		<h2 class="cl-light">News Latest Post </h2>
	</div>
	<?php while( $newsPosts->have_posts() ) : $newsPosts->the_post(); ?>
	<div class="row ">
		<div class="col">
			<div class="news-post post post-<?php the_ID(); ?>">
				<a href="<?php the_permalink(); ?>">
					<div class="news-featured-image bg-image">
						<div class="post-title">
							<?php the_title(); ?>
						</div>
						<style>
							<?php if(get_the_post_thumbnail()) : ?>
							.post-<?php the_ID(); ?> .news-featured-image {
								background-image: url('<?php the_post_thumbnail_url(); ?>'); 
							}
							<?php else : ?>
							.post-<?php the_ID(); ?> .news-featured-image {
								background-image: url('<?php bloginfo('template_url') ?>/assets/images/postbackgroundsample.jpg'); 
							}
							<?php endif; ?>
						</style>
					</div>
				</a>
				<div class="post-category">
					<?php  $categories = get_the_category();
						$hasnt_cat = true;
						for ($i=0; $i <= count($categories); $i++) {
							if ($i >= 0 && $i < count($categories)) {
								if ($hasnt_cat) {
									if ($categories[$i]->slug != 'destaque' && $categories[$i]->slug != 'sem-categoria') {
										echo '<a href="' . get_category_link( $categories[$i]->cat_ID ) . '">' . $categories[$i]->name . '</a>';
										$hasnt_cat = false;
									}
								}
							}
						} ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Fim da Row -->
	<?php endwhile; ?>
	<div class="clear"></div>
	<?php wp_reset_postdata(); ?>
</div>
<?php endif; ?>