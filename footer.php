			<!-- footer -->
			<footer class="pt-footer" role="contentinfo">
				<div class="pt-container">
					<div class="pt-nav-footer">
						<?php html5blank_nav('bottom-menu'); ?>
					</div>
					<div class="pt-row">
						<?php
              if (is_active_sidebar('footer-1')) { ?>
                <div class="pt-col-3">
                    <?php dynamic_sidebar('footer-1'); ?>
                </div>
            <?php } ?>

            <?php
              if (is_active_sidebar('footer-2')) { ?>
                <div class="pt-col-3">
                    <?php dynamic_sidebar('footer-2'); ?>
                </div>
            <?php } ?>

            <?php
              if (is_active_sidebar('footer-3')) {?>
                <div class="pt-col-3">
                    <?php dynamic_sidebar('footer-3'); ?>
                </div>
            <?php } ?>
					</div>
				</div>
				<div class="pt-copyright">
					<div class="pt-container">
						<p class="copyright">
							&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?> - Giao diện được thiết kế bởi <?php bloginfo('name');?>
						</p>
					</div>
				</div>
			</footer>
		</div>
		<?php wp_footer(); ?>
		<span id="goTop" class="bd-circle t-center" style="display: inline;"><i class="fas fa-chevron-up"></i></span>
	</body>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
</html>
