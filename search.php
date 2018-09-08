<?php get_header(); ?>
<div class="pt-container">
	<main role="main">
		<section class="pt-row-cate">

			<h1 style="text-align: center; color: #27AE60; text-transform: uppercase;"><?php echo sprintf( __( 'Kết quả tìm kiếm cho "', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?>"</h1>

			<?php get_template_part('loop-cate'); ?>

		</section>
	</main>
	<?php get_template_part('pagination'); ?>
</div>

<?php get_footer(); ?>
