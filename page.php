<?php get_header(); ?>
<div class="pt-container">
	<section class="pt-page-view">

		<h1><?php the_title(); ?></h1>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<div class="pt-content-page">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>
				<?php edit_post_link(); ?>
				<?php comments_template( '', true );  ?>

			</article>
		</div>
	<?php endwhile; ?>

	<?php else: ?>

		<article>

			<h2 style="text-align: center;"><?php _e( 'Xin lỗi! Trang này đã bị xoá hoặc chưa tồn tại.', 'html5blank' ); ?></h2>

		</article>

	<?php endif; ?>

	</section>
</div>

<?php get_footer(); ?>
