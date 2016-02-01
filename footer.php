<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-md-2 valign">
			<a href='/' > <img class="logo" src="<?php bloginfo('template_directory') ?>/images/logo-footer.png"></a>
		</div>
		<div class="col-md-10 valign">
			<div class="right">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class'=>'menu-horizontal' ) ); ?>
				<div class='social '>
					<a href='https://www.facebook.com/ley3de3/' target="_blank" class='facebook'></a>
					<a href='https://twitter.com/ley3de3' target="_blank" class='twitter'></a>
					<a href='https://www.youtube.com/channel/UC5P7XD5if94XVnABe38sVUg' target="_blank" class='youtube'></a>
				</div>
			</div>
	    </div>
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
