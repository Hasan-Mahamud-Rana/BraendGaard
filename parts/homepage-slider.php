<div class="large-12 medium-12 small-12">
    <article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
      <div class="slide" style="display: none;">
        <?php $query = new WP_Query( 'order=asc&post_type=slide&post_status=publish&paged='. get_query_var('paged')); ?>
        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>">
        <div class="large-12 medium-12 columns" style="height:390px;background-size: cover; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
          <div class="content"><div class="row">
		  <div class="large-6 medium-6 float-right slider-inner ">
            <h2 class="sliderHdline trickyLinkToSLide"><?php the_title(); ?></h2>
            <?php the_excerpt (); ?>
          </div>
		  </div></div>
        </div>
        </a>
        <?php endwhile;  wp_reset_postdata(); else : ?>
        <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
        <?php endif; ?>
      </div>
    </article>
</div>