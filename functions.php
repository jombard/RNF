<?php 

// Add menu support
add_theme_support( 'menus' ); 

// Add featured image to posts and pages
add_theme_support( 'post-thumbnails' ); 

// Add HTML5 default gallery styling
add_theme_support( 'html5', array( 'gallery', 'caption' ) );

// Add rnf options to admin menu
add_action( 'admin_menu', 'rnf_options_menu' );
function rnf_options_menu() {
	add_menu_page( 'RNF Options', 'RNF Options', 'edit_pages', 'rnf-options-identifier', 'rnf_options_page' );
}
function rnf_options_page() {
	if ( !current_user_can( 'edit_pages' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	include __DIR__."/rnfoptionscontent.php";
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