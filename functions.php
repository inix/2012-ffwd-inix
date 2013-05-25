<?php
function twtwFFWD_queuing() {
	wp_dequeue_style( 'twentytwelve-fonts' );
	wp_dequeue_script( 'twentytwelve-navigation' );
}

function twtwFFWD_credits() {
	?><a href="http://blog.futtta.be/2012/12/20/2012-ffwd-high-performance-twenty-twelve-child-theme/">2012.FFWD theme</a>, a performance optimized version of Twenty Twelve.<?php 
}

function twtwFFWD_navigation() {
	?><script type="text/javascript">(function(){var e=document.getElementById("site-navigation"),t,n;if(!e)return;t=e.getElementsByTagName("h3")[0];n=e.getElementsByTagName("ul")[0];if(!t)return;if(!n||!n.childNodes.length){t.style.display="none";return}t.onclick=function(){if(-1==n.className.indexOf("nav-menu"))n.className="nav-menu";if(-1!=t.className.indexOf("toggled-on")){t.className=t.className.replace(" toggled-on","");n.className=n.className.replace(" toggled-on","")}else{t.className+=" toggled-on";n.className+=" toggled-on"}}})()</script><?php
}

function twentytwelve_content_nav( $html_id ) {
	global $wp_query;

	$html_id = esc_attr( $html_id );

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo $html_id; ?>" class="navigation" role="navigation">
			 <?php wp_pagenavi(); ?>
		</nav><!-- #<?php echo $html_id; ?> .navigation -->
	<?php endif;
}

add_action('wp_enqueue_scripts', 'twtwFFWD_queuing', 11 );
add_action('twentytwelve_credits', 'twtwFFWD_credits' );
add_action('wp_footer', 'twtwFFWD_navigation' );

<!--
add_action('twentytwelve_content_nav_new', 'twentytwelve_content_nav' );
-->
?>
