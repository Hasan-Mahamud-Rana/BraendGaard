<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
	<header class="article-header">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</header>
	<?php if ( has_post_thumbnail() ) { ?>
	<div class="pageFeaturedImage" style="height:200px;background-size: cover; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
	</div>
	<?php }?>
	<section class="entry-content" itemprop="articleBody">
		<?php the_content(); ?>
		<?php wp_link_pages(); ?>
	</section>
</article>