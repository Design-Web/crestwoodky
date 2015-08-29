<?php /* Template Name: Blog Template */ get_header(); ?>

	<main role="main">

					<!-- post row -->				
					<ul class="blogrow">

					<?php query_posts('category_name=blog'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<!-- .post -->
						<li class="post span6">
							<div class="post-inner">
								<div class="post-header">
									<?php if ( has_post_thumbnail() ) {the_post_thumbnail();} else { ?>
<img src="/img/default-sandwich-image.jpg" alt="<?php the_title(); ?>" /><?php } ?>
								</div>
								<div class="post-body">
									<h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
									<div class="post-date circle">
										<div class="circle-inner"><?php the_time('j') ?><br /><?php the_time('M') ?></div>
									</div>							
									<div class="post-excerpt"><p><?php the_excerpt(); ?></p></div>
								</div>						
							</div>
						</li>
						<!-- /.post -->
						<?php endwhile; endif; ?>   
																				
					</ul>
					<!-- /post row -->

			</article>

		</section>
	</main>

		</div>
		<!-- /wrapper -->

<?php get_footer(); ?>