<div class="footer-contact" role="complementary" data-equalizer>
<h2 class="pHeadline"><span>Contact</span> Info</h2>
	<?php if ( is_active_sidebar( 'footer' ) ) : ?>
	<?php dynamic_sidebar( 'footer' ); ?>
	<?php else : ?>
	<!-- This content shows up if there are no widgets defined in the backend. -->

	<div class="alert help">
		<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
	</div>
	<?php endif; ?>
</div>