<footer class="footer" role="contentinfo">
	<div id="inner-footer" class="row">
		<?php if ( is_page( 'contact-us' )) { ?>
		<?php get_sidebar( 'footer' ); ?>
		<?php } ?>
		<div class="large-12 medium-12 columns">
			<nav role="navigation">
				<?php joints_footer_links(); ?>
			</nav>
		</div>
		<div class="large-12 medium-12 columns">
			<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
		</div>
		</div> <!-- end #inner-footer -->
		</footer> <!-- end .footer -->
		</div>  <!-- end .main-content -->
		</div> <!-- end .off-canvas-wrapper-inner -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
		<script type="text/javascript">
		jQuery(document).foundation();
		jQuery(document).ready(function() {
		jQuery('.accordion p:empty, .orbit p:empty').remove();
		jQuery('.archive-grid .columns').last().addClass( 'end' );
		jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').wrap("<div class='flex-video'/>");
			});
			</script>
	</body>
</html> <!-- end page -->