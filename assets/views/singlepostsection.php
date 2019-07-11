<?php if ( have_posts() ) : the_post();  ?>
<div id="post-<?php the_ID(); ?>">
	<div class="sub-title hide">
		<h2 class="cl-light"> Post </h2>
	</div>
	<div class="single-post post">
		<div class="row">
			<div class="col">
				<div class="post-header">


					<div class="post-share-img-holder d-none">
						<?php if(get_the_post_thumbnail()) : ?>
							<img class="post-share-img d-none" src="<?php  the_post_thumbnail_url(); ?>" alt="Post Header Image">
						<?php else : ?>
							<img class="post-share-img" src="<?php bloginfo('template_url') ?>/assets/images/postbackgroundsample.jpg" alt="Default-Image">
						<?php endif; ?>
						
					</div>
					

					<div class="post-featured-image bg-image">
						<style>
							<?php if(get_the_post_thumbnail()) : ?>
							#post-<?php the_ID(); ?> .single-post .post-featured-image { background-image: url('<?php  the_post_thumbnail_url(); ?>') 
							}
							<?php else : ?>
							#post-<?php the_ID(); ?> .single-post .post-featured-image { background-image: url('<?php bloginfo('template_url') ?>/assets/images/postbackgroundsample.jpg'); 
							}
							<?php endif; ?>
						</style>
						<div>
							<span class="post-title">
								<h2 class="title"><?php the_title(); ?></h2>
							</span>
						</div>
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
		</div>
		<div class="row">
			<div class="col">
				<div class="playerNI">
					<?php include('powerpresscustomniplayer.php'); ?>
				</div>
			</div>
		</div>
		<!-- END POST HEADER -->
		<div class="row">
			<div class="col">
				<div class="post-content">								
					<?php the_content(); ?>
				</div>
			</div>
		</div>
		<!-- END POST CONTENT -->
		<div class="row">
			<div class="col">
				<div class="post-footer">
					<div class="author-widget">
						<div class="author">
							<div class="row">
								<div class="col">
									<div class="author-id-<?php print get_the_author_id(); ?> author-image bg-image">
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
											if (strlen($quote) > 50 || $quote == '') :
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
				</div>
			</div>
		</div>
	</div>
	<!-- end POST LOOP -->
	<div class="clear"></div>
</div>
<?php 

endif; 

if ( comments_open() || get_comments_number() ) :
	comments_template();
endif;

?>

