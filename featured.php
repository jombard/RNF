<div class="col-sm-4 text-center">
	<div class="p-b">
		<a href="<?php the_permalink(); ?>">
			<div class="placeholder" data-large="<?php the_post_thumbnail_url('full'); ?>">
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail('rnf-featured-thumb', ['class' => 'img-responsive m-auto img-small']); } ?>
				<div style="padding-bottom: 66.6%; width:200px;"></div>
			</div>
		</a>
		<div class="caption">
			<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		</div>
	</div>
</div>