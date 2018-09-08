<?php get_header(); ?>
<div class="pt-container">
	<div class="pt-row">
		<div class="pt-col-6">
			<div id="post-<?php the_ID(); ?>" <?php post_class("pt-single-post"); ?>>
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<?php setPostViews(get_the_ID()); ?>
					<div class="pt-singe-thumbnail-title">
						<div class="pt-thumb-post"
							<?php if ( has_post_thumbnail()): ?>
							style="background-image: url('<?php the_post_thumbnail_url('medium_large') ?>')"
						<?php endif ?>
						>
						</div>
						<h1 id="pt-single-title">
							<?php the_title(); ?>
						</h1>
					</div>
					<div class="pt-post-container">
						<?php echo the_breadcrumb() ?>
						<div class="pt-single-meta">
							<span class="date" style="margin-right: 10px;"><i class="fas fa-calendar"></i>  <?php the_time('F j, Y'); ?></span>
							<span class="author" style="margin-right: 10px;"><i class="fas fa-user"></i> <?php the_author_posts_link(); ?></span>
							<span class="comments"><i class="fas fa-comment"></i> <?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Bình luận', 'html5blank' ), __( '1 Bình luận', 'html5blank' ), __( '% Bình luận', 'html5blank' )); ?></span>
							<span class="view"><i class="fas fa-eye"></i> <?php echo getPostViews(get_the_ID()); ?> </span>
							<p class="tag-cate"><?php the_tags( __( '<i class="fas fa-star"></i> Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?></p>

							<p class="tag-cate"><i class="fas fa-star"></i>  <?php _e( 'Chuyên mục: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
							<?php edit_post_link(); ?>
						</div>
						<div class="pt-single-content">
							<?php the_content(); ?>
						</div>
						<?php comments_template(); ?>
					</div>
				<?php endwhile; ?>

				<?php else: ?>
					<div class="pt-single-post">
						<h1 style="text-align: center;"><?php _e( 'Xin lỗi, Bài viết đã bị xoá hoặc chưa từng tồn tại', 'html5blank' ); ?></h1>
					</div>
				<?php endif; ?>
			</div>
		</div>
		<div class="pt-col-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
