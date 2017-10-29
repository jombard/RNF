<?php 

// Add menu support
add_theme_support( 'menus' ); 

// Add featured image to posts and pages
add_theme_support( 'post-thumbnails' ); 

// add 4x3 thumbnail
add_image_size( 'rnf-featured-thumb', 400, 300, true );

// Add HTML5 default gallery styling
add_theme_support( 'html5', array( 'gallery', 'caption' ) );

// Add featured content support
add_theme_support( 'featured-content', array('filter' => 'rnf_get_featured_content', 'max_posts' => 20, 'post_types' => array( 'post', 'page' ), ) );

function rnf_get_featured_content( $num = 3 ) {
  global $featured;
  $featured = apply_filters( 'rnf_get_featured_content', array() );
  return is_array( $featured ) || $num >= count( $featured );
}

// Add current class to selected menu item
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'current ';
     }
     return $classes;
}

// Check page or sub page location
function is_tree($pid) {	// $pid = The ID of the page we're looking for pages underneath
	global $post;			// load details about this page
	return (is_page()&&($post->post_parent==$pid||is_page($pid)));
};

// add primary nav menu
function register_rnf_nav_menu() {
	register_nav_menu("rnf-navigation-menu", __("RNF Navigation Menu"));
}
add_action("init", "register_rnf_nav_menu");

// scripts
function rnftheme_enqueue_scripts() {
	wp_enqueue_style( 'bootstrap', get_theme_file_uri( 'css/bootstrap.min.css' ) );
	wp_enqueue_style( 'style', get_theme_file_uri( '/style.css' ) );

	wp_enqueue_script( 'bootstrap', get_theme_file_uri( 'scripts/bootstrap.min.js' ), array( 'jquery' ), "", true );
	wp_enqueue_script( 'isotope', get_theme_file_uri( 'scripts/isotope.pkgd.min.js' ), array( 'jquery' ), "", true );
	wp_enqueue_script( 'chart', get_theme_file_uri( 'scripts/chart.min.js' ), array( 'jquery' ), "", true );
	wp_enqueue_script( 'script', get_theme_file_uri( 'script.js' ), array( 'jquery' ), "", true );
}
add_action("wp_enqueue_scripts", "rnftheme_enqueue_scripts");

// Comment template
function rnftheme_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
	<<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="media">
		<?php endif; ?>
		<div class="media-left">
			<?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
		</div>

		<?php if ( $comment->comment_approved == '0' ) : ?>
			<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
			<br />
		<?php endif; ?>

		<div class="media-body">
			<?php printf( __( '<h4 class="media-heading">%s</h4>' ), get_comment_author_link() ); ?>
			<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
				<?php
					/* translators: 1: date, 2: time */
					printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?>
			</a>
			<?php edit_comment_link( __( '(Edit)' ), '  ', '' ); ?>
		</div>

		<?php comment_text(); ?>

		<div class="reply">
			<?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div>
		<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php
}
?>