<div class="article-wrap">
	<article <?php post_class('clearfix'); ?>>
		<header class="row">
			<div class="col-xs-12">
				<h2 class="entry-title">
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
						<i class="entry-title__permalink glyphicon glyphicon-link"></i>
					</a>
				</h2>
			</div>
		</header>
		<div class="row">
			<div class="entry-date col-xs-12">
				<?php get_template_part('templates/entry-meta'); ?>
			</div>
			<div class="entry-summary col-xs-12">
				<?php if (get_field('display_featured_image')): ?>
				<p class="post-image">
					<?php the_post_thumbnail( 'original', array( 'class' => 'img-wide' ) ); ?>
				</p>
				<?php endif; ?>

				<?php the_content( 'Read more&hellip;' ); ?>
			</div>
		</div>
	</article>

</div>