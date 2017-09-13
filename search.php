<?php get_header(); ?>
<div id="content">
	<div id="inner-content" class="row">
		<?php get_sidebar(); ?>
		<main id="main" class="large-9 medium-9 columns first" role="main">
		<header>
			<h1 class="archive-title"><?php _e( 'Search Results for:', 'jointswp' ); ?> <?php echo esc_attr(get_search_query()); ?></h1>
		</header>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php get_template_part( 'parts/loop', 'archive' ); ?>
		<?php endwhile; ?>
		<?php joints_page_navi(); ?>
		<?php else : ?>
		<?php get_template_part( 'parts/content', 'missing' ); ?>
		<?php endif; ?>
		</main>
	</div>
</div>
<?php get_footer(); ?>