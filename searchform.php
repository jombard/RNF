<?php
?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<div class="row">
	<div class="col-sm-6 col-md-4">
		<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<div class="form-group">
				<label for="<?php echo $unique_id; ?>">
					<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'twentyseventeen' ); ?></span>
				</label>
				<input type="search" id="<?php echo $unique_id; ?>" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentyseventeen' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
			</div>
			<button type="submit" class="search-submit btn btn-rnf">
				<span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'twentyseventeen' ); ?></span>
			</button>
		</form>
	</div>
</div>