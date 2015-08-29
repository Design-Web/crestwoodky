<?php /* Template Name: Contact Template */ get_header(); ?>
	<main role="main" class="contactpage">
	
				<div id="header-map">
			<iframe width="100%" height="400" frameborder="0" src="https://maps.google.com/maps?q=3014+Hunsinger+Ln+louisville+ky&amp;ie=UTF8&amp;hq=&amp;hnear=3014+Hunsinger+Ln,+Louisville,+KY+40220&amp;gl=us&amp;t=h&amp;z=14&amp;ll=38.2188494,-85.6258977&amp;output=embed&amp;iwloc=near">
			</iframe>
			</div>
			<section class="contactwrap">
<aside>
<h2>Contact us:</h2>

<p class="phones">Phone: <span>(502) 456-1742</span></p>
<p class="addy">Address: <span>3014 Hunsinger Lane<br>Louisville, KY 40220</span></p>
<p class="emails">Email: <span><a href="mailto:contact@louisvillemrtransmission.com">contact@louisvillemrtransmission.com</a></span></p>

</aside>

				<article>
				<div class="articlewrap">
				<h2>Send a message:</h2>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>
		<?php endwhile; ?>

</div>
			</article>

		<?php endif; ?>

</section>
		</section>
	</main>

		</div>
		<!-- /wrapper -->

<?php get_footer(); ?>