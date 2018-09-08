<div class="pt-comments" id="comments">
	<?php if (post_password_required()) : ?>
	<p><?php _e( 'Bài đăng được bảo vệ bởi mật khẩu. Nhập mật khẩu để hiển thị bình luận', 'html5blank' ); ?></p>
</div>

	<?php return; endif; ?>

<?php if (have_comments()) : ?>

	<h2 style=""><i class="fas fa-comment" style="margin-right: 10px;"></i> <?php comments_number(); ?></h2>

	<ul>
		<?php wp_list_comments('type=comment&callback=html5blankcomments'); // Custom callback in functions.php ?>
	</ul>

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<p><?php _e( 'Tạm thời đóng chức năng bình luận.', 'html5blank' ); ?></p>

<?php endif; ?>

<?php comment_form(); ?>

</div>
