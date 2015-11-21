<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<!--		</div>-->
<!--		<footer id="colophon" class="site-footer" role="contentinfo">-->
<!--			--><?php //get_sidebar( 'main' ); ?>
<!---->
<!--			<div class="site-info">-->
<!--				--><?php //do_action( 'twentythirteen_credits' ); ?>
<!--				<a href="--><?php //echo esc_url( __( 'https://wordpress.org/', 'twentythirteen' ) ); ?><!--" title="--><?php //esc_attr_e( 'Semantic Personal Publishing Platform', 'twentythirteen' ); ?><!--">--><?php //printf( __( 'Proudly powered by %s', 'twentythirteen' ), 'WordPress' ); ?><!--</a>-->
<!--			</div>-->
<!--		</footer>-->
<!--	</div>-->



<!--[if lt IE 9]>
<script src="<?php bloginfo('template_directory');?>/libs/html5shiv/es5-shim.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/libs/html5shiv/html5shiv.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/libs/respond/respond.min.js"></script>
<![endif]-->


<script src="<?php bloginfo("template_directory");?>/libs/modernizr/modernizr.js"></script>
<script src="<?php bloginfo("template_directory");?>/libs/jquery/jquery-1.11.2.min.js"></script>
<script src="<?php bloginfo("template_directory");?>/libs/waypoints/waypoints.min.js"></script>
<script src="<?php bloginfo("template_directory");?>/libs/animate/animate-css.js"></script>
<script src="<?php bloginfo("template_directory");?>/libs/plugins-scroll/plugins-scroll.js"></script>
<script src="<?php bloginfo("template_directory");?>/libs/bootstrap/js/bootstrap.min.js"></script>

<script src="<?php bloginfo("template_directory");?>/js/drawfillsvg.min.js"></script>
<script src="<?php bloginfo("template_directory");?>/js/zoom.js"></script>
<script src="<?php bloginfo("template_directory");?>/js/scroll.js"></script>
<script src="<?php bloginfo("template_directory");?>/js/wow.js"></script>


<script src="<?php bloginfo("template_directory");?>/js/jquery-ui.js"></script>

<script src="<?php bloginfo("template_directory");?>/js/common.js"></script>




	<?php wp_footer(); ?>
</body>
</html>