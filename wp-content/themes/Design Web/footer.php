			<!-- footer -->
			<footer class="footer" role="contentinfo">
			<div class="footerwrap">
<!-- Top Footer Section -->
<section class="topfooter">
<div class="yellowtext">

</div>
<div class="yellowtext">
<ul>
<li class="call"><h4>Call Us</h4><p>(502) 456-1742</p></li>
<li class="blog"><h4>Check Out Our</h4><p><a href="/blog/">Blog Page</a></p></li>
<li class="specials"><h4>View Our</h4><p><a href="/specials/">Specials</a></p></li>
</div>
</section>
<section class="midfooter">
<div class="hours">
<h3>Operating Hours:</h3>
<ul>
<li>WEEK DAYS:<p>8:00 a.m. – 5:00 p.m.</p></li>
<li>SATURDAY:<p>Closed</p></li>
<li>SUNDAY:<p>Closed</p></li>
</ul>
</div>
<div class="footspecial">
<h3>Monthly Specials</h3>
<p>Find out more about our Monthly Specials.</p>
<a class="specialbutton" href="/specials/">More Deals</a>
</div>
<div class="textcopy">
<h3>Free Performance Check</h3>
<p>
Your vehicle is important, after all it gets you from Point A to Point B. When you want to maintain the life of your vehicle, call Mr. Transmission for a FREE Performance Check. We’ll make sure you’re always Road Ready. We guarantee our work with a Nationwide Warranty.
</p>
</div>
<div class="blogtitles">
<h3>Latest Blog Posts</h3>
<ul>
<?php
query_posts('cat=0$posts_per_page=-1'); // query to show all posts independant from what is in the center;
if (have_posts()) :
   while (have_posts()) :
      the_post(); ?>
<li>
      <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
</li>
<?php  endwhile;
endif;
wp_reset_query();
?>
</ul>
</div>
</section>
</div>
				<!-- copyright -->
				<section class="copyright">
				<div class="copyrightint">
					<p>&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. </p>
					<p><img src="/wp-content/themes/Mr Transmission/img/logo-footer.png"></p>
					<p><a href="//designweblouisville.com" title="Design Web">Design Web</a>.</p>
					</div>
				</section>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>
<script>
$( ".toggler" ).click(function() {
$(this).siblings("ul").slideToggle(500);
});
</script>
	</body>
</html>
