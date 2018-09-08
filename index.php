<?php get_header(); ?>
<div class="pt-container">
	<div class="pt-row">
		<div class="pt-col-6">
			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
		</div>
		<div class="pt-col-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>

