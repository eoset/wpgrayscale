<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php 
          the_title();
          the_content(); 
        ?>

<?php endwhile; else: ?>
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<div class="row">
  <?php $my_query = new WP_Query('posts_per_page=4');
    while ($my_query->have_posts()) : $my_query->the_post();
    $link = get_permalink( $post->ID );
    $do_not_duplicate = $post->ID; ?>
    <div class="span4">
      <h2>
        <a href="<?php echo $link ?>"><?php the_title(); ?></a>
      </h2>

      <?php the_content(); ?>
  </div>
  <?php endwhile; ?>
</div>

<?php get_footer(); ?>

