<?php get_header(); ?>

  <div class="row">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="col-md-4">
        <h2><?php the_title() ?></h2>
        <p><?php the_content() ?></p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
      </div>
    <?php endwhile;
    else: ?>
      <?php _e('Sorry, no posts matched your criteria.'); ?>
    <?php endif; ?>
  </div>

  <hr>

<?php get_footer(); ?>