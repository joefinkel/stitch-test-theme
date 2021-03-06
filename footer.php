<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
	<?php dynamic_sidebar( 'footer-1' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
    <script type="text/javascript" src="https://use.typekit.net/jlf6rqe.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</body>
</html>
