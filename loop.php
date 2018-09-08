<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>"  <?php post_class('pt-post-item'); ?>>
		<div class="pt-thumbnail-p">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
				style="background-image: url('<?php if ( has_post_thumbnail()) the_post_thumbnail_url('medium_large') ?>')"
				>
			</a>
			<div class="pt-overlay-p">
				<a href="<?php the_permalink(); ?>">
					<div class="pt-overlay-text">
						<?php the_title(); ?>
					</div>
				</a>
			</div>
		</div>
		<div class="pt-meta-p">
			<h2>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
			<span class="pt-date"><i class="fas fa-calendar"></i> <?php the_time('F j, Y'); ?></span>
			<span class="pt-comments" style="margin-left: 5px;"><i class="fas fa-comment"></i> <?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Comment', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
			<span class="pt-view" style="margin-left: 5px;"><i class="fas fa-eye"></i> <?php echo getPostViews(get_the_ID()); ?> </span>
			<?php html5wp_excerpt('html5wp_index');?>
			<a class="pt-read-more" href="<?php the_permalink(); ?>">Xem Thêm &raquo;</a>
			<?php edit_post_link(); ?>
		</div>
		

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2 style="text-align: center;"><?php _e( 'Xin lỗi! Không có gì để hiển thị cả >_<', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
