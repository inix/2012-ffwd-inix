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

add_action('wp_enqueue_scripts', 'twtwFFWD_queuing', 11 );
add_action('twentytwelve_credits', 'twtwFFWD_credits' );
add_action('wp_footer', 'twtwFFWD_navigation' );
?>

<?php

// Use WP-PageNavi when it's active
function twentytwelve_content_nav( $nav_id ) {
	global $wp_query;
	if ( $wp_query->max_num_pages > 1 ) : ?>
		<?php /* add wp-pagenavi support for posts */ ?>
		<?php if(function_exists('wp_pagenavi') ) : ?>
			<?php wp_pagenavi(); ?>
			<br />
		<?php else: ?>
		<nav id="<?php echo $nav_id; ?>">
			<h3 class="assistive-text"><?php _e( 'Post navigation', 'tto' ); ?></h3>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'tto' ) ); ?></div>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&larr;</span>', 'tto' ) ); ?></div>
		</nav><!-- #nav-above -->
	<?php endif; ?>
	<?php endif;
}

