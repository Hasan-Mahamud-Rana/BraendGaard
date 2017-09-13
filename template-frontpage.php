<?php
/*
Template Name: Frontpage
*/
get_header(); ?>
<div id="content">
	<div id="inner-content" class="row">
		<?php //get_template_part( 'parts/homepage', 'slider' ); ?>
		<main id="main" class="large-12 medium-12 columns" role="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<!-- To see additional archive styles, visit the /parts directory -->
		<?php get_template_part( 'parts/loop', 'page' ); ?>
		<?php endwhile; ?>
		<?php joints_page_navi(); ?>
		<?php else : ?>
		<?php get_template_part( 'parts/content', 'missing' ); ?>
		<?php endif; ?>
		</main> <!-- end #main -->
	</div> <!-- end #inner-content -->
</div> <!-- end #content -->
<?php get_template_part( 'parts/homepage', 'product' ); ?>
<?php get_template_part( 'parts/homepage', 'supplier' ); ?>
<?php get_footer(); ?>