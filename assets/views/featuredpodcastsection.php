<?php 	
$podcast_cat_id = get_category_by_slug('destaque')->term_id;
$args = array(
	'type'				=> 'post'
	, 'posts_per_page'	=> 4
	, 'cat' 			=> get_category_by_slug('podcast')->term_id
);

$featuredPosts = new WP_Query($args);

if ( $featuredPosts->have_posts() ) :
	$featuredPosts->the_post(); ?>

<div id="featured-posts">

	<div class="section-title hide">
		<h2>Header Featured </h2>
	</div>	
		asdfasdf
		<div class="row">

			<div class="col">
				<div class="single-featured-post post post-<?php the_ID(); ?>">
					<a href="<?php the_permalink(); ?>">
						<div class="single-featured-image bg-image">
							<div class="post-title">
								<?php the_title(); ?>
							</div>
							<style>
								<?php if(get_the_post_thumbnail()) : ?>
								.post-<?php the_ID(); ?> .single-featured-image {
									background-image: url('<?php the_post_thumbnail_url(); ?>'); 
								}
								<?php else : ?>
								.post-<?php the_ID(); ?> .single-featured-image {
									background-image: url('<?php bloginfo('template_url') ?>/assets/images/postbackgroundsample.jpg');
								}
								<?php endif; ?>
							</style>
						</div>
					</a>
					
					<div class="post-category">
						<?php  $categories = get_the_category();
						//print_r($categories); die();
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
			<div class="col">

				<div class="featured-ad-wrapper">
					<div class="row">

						<div class="col">
							<div id="superbanner" class="ad-superbanner-featured">
								<!-- <img src="<?php //bloginfo('template_url') ?>/assets/ad/superbanner728x90/superbanner_welcome.jpg" alt=""> -->
								<div id="ad-728x90" class="ad"></div>
								<script>
									jQuery(document).ready(function($) {
										$( "#ad-728x90" ).load("/nerdignorante/wp-content/themes/niknights/assets/ad/superbanner728x90/html/ad-728x90.html", function( response, status, xhr ) {
											//debugger;
											if ( status == "error" ) {
												var msg = "Sorry but there was an error: ";
												$("#ad-728x90").html( msg + xhr.status + " " + xhr.statusText );
											}
										});
									});		
								</script>
							
							</div>
						</div>

					</div> <!-- Fim da Row -->
				</div>
			
				<div class="featured-double-wrapper">
					<div class="row">

						<?php $featuredPosts->the_post(); ?>

						<div class="col">
							<div class="double-featured-post post post-<?php the_ID(); ?>">
								<a href="<?php the_permalink(); ?>">
									<div class="double-featured-image bg-image">
										<div class="post-title">
											<?php the_title(); ?>
										</div>
										<style>
											<?php if(get_the_post_thumbnail()) : ?>
											.post-<?php the_ID(); ?> .double-featured-image {
												background-image: url('<?php the_post_thumbnail_url(); ?>'); 
											}
											<?php else : ?>
											.post-<?php the_ID(); ?> .double-featured-image {
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

						<?php $featuredPosts->the_post(); ?>
						
						<div class="col">
							<div class="double-featured-post post post-<?php the_ID(); ?>">
								<a href="<?php the_permalink(); ?>">
									<div class="double-featured-image bg-image">
										<div class="post-title">
											<?php the_title(); ?>
										</div>
										<style>
											<?php if(get_the_post_thumbnail()) : ?>
											.post-<?php the_ID(); ?> .double-featured-image {
												background-image: url('<?php the_post_thumbnail_url(); ?>'); 
											}
											<?php else : ?>
											.post-<?php the_ID(); ?> .double-featured-image {
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
					</div> <!-- Fim da Row -->
				</div>
			</div>
		</div> <!-- Fim da Row -->

		<div class="clear"></div>

	<?php wp_reset_postdata(); ?>

</div>

<?php endif; ?>