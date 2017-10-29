<div class="col-sm-4 text-center">
	<div class="p-b">
		<a href="<?php the_permalink(); ?>">
			<div class="placeholder" data-large="<?php the_post_thumbnail_url('full'); ?>">
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail('rnf-featured-thumb', ['class' => 'img-responsive m-auto']); } ?>
				<div style="padding-bottom: 66.6%; width:200px;"></div>
			</div>
		</a>
		<div class="caption">
			<h3><?php the_title(); ?></h3>
			<a href="<?php the_permalink(); ?>" class="btn btn-primary">
				Read more
				<i class="glyphicon glyphicon-chevron-right"></i>
			</a> 
		</div>
	</div>
</div>