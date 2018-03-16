<?php if ( have_posts() ) : ?>

	<div id="blog-section">
		<div class="sub-title hide">
			<h2 class="cl-light">Blog</h2>
		</div>

		<?php while ( have_posts() ) : the_post();  ?>
			<div class="blog-post post post-<?php the_ID(); ?>">
				<div class="row">

					<div class="col">
						<div class="blog-featured-image">
							<style>
								<?php if(get_the_post_thumbnail()) : ?>
									.post-<?php the_ID(); ?> .blog-featured-image {
										background-image: url('<?php the_post_thumbnail_url(); ?>'); 
									}
								<?php else : ?>
									.post-<?php the_ID(); ?> .blog-featured-image {
										background-image: url('<?php bloginfo('template_url') ?>/assets/images/postbackgroundsample.jpg');
									}
								<?php endif; ?>
							</style>
							
						</div>
					</div>
					<div class="col">
						<div class="post-content-wrapper">
							<span class="post-title">
								<a href="<?php the_permalink() ?>">
									<?php the_title(); ?>	
								</a>
							</span>
							<div class="post-content">
								
								<?php /* if (has_excerpt() ): ?>
									<?php the_excerpt(); ?>
									<span>Leia Mais...</span>
								<?php else : ?>
									<?php the_content(' - Leia mais...') ?>
								<?php endif; */ ?>

								<div class="author-widget">
									<div class="author">
										<div class="row">
											<div class="col">
												<div class="author-id-<?php print get_the_author_id(); ?> author-image">
													<style>
														<?php if(get_avatar_url( get_the_author_id() )) : ?>
															.author-id-<?php print get_the_author_id(); ?>.author-image { 
																background-image: url('<?php print get_avatar_url( get_the_author_id() ); ?>'); 
															}
														<?php else : ?>
															.author-id-<?php print get_the_author_id(); ?>.author-image { 
																background-image: url('<?php bloginfo('template_url'); ?>/assets/images/postbackgroundsample.jpg');
															}
														<?php endif; ?>
													</style>
												</div>								
											</div>
											<div class="col">
												<div class="quote">
													<?php 
														$quote = get_post_meta(get_the_ID(), '_author_comment', true);
														if (strlen($quote) > 50 || strlen($quote) < 7 || $quote == '') :
															echo '<div class="author-quote">"Nada a declarar"</div>';
														else:
															echo '<div class="author-quote">"'.$quote.'"</div>';
														endif;
													?>
												</div>
											</div>
										</div>
									</div>
									<div class="author-info">
										<p>
											Mais publicações de 
											<a href="<?php print(get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' )) ); ?>">
												<span class="author-name"> <?php the_author(); ?> </span>
											</a>
											ou entre em contato em 
											<a href="<?php print(the_author_meta( 'user_url', get_the_author_meta( 'ID' ))); ?>" target="blank">
												<span class="author-twitter">  <?php print(the_author_meta( 'user_description', get_the_author_meta( 'ID' ))); ?> </span> 
											</a>
										</p>
									</div>
								</div>
								
								<div class="post-category">
									<?php  

									$categories = get_the_category();
									
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
				</div> 
			</div> <!-- end POST LOOP -->

		<?php endwhile; ?>

		<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
		<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

	</div>
	
<?php endif; ?>