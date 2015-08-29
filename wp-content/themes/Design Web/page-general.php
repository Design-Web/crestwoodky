<?php /* Template Name: General Template */ get_header(); ?>

	<main role="main">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="topbanner"><?php if ( has_post_thumbnail() ) {the_post_thumbnail();} ?></div>
				<?php the_content(); ?>
		<?php endwhile; ?>


			</article>
<aside>


      </aside>
			
		<?php endif; ?>

		</section>
	</main>

		</div>
		<!-- /wrapper -->

<?php get_footer(); ?>

 