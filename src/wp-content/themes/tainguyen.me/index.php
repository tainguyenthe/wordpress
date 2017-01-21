<?php get_header(); ?>
  <!--<div id="main">-->
  <!---->
  <!--  <div id="content">-->
  <!--    <h1>Main Area</h1>-->
  <!---->
  <!--    --><?php //if (have_posts()) : while (have_posts()) : the_post(); ?>
  <!--      <h1>--><?php //the_title(); ?><!--</h1>-->
  <!---->
  <!--      <h4>Posted on --><?php //the_time('F jS, Y') ?><!--</h4>-->
  <!---->
  <!--      <p>--><?php //the_content(__('(more...)')); ?><!--</p>-->
  <!---->
  <!--      <hr> --><?php //endwhile;
//    else: ?>
  <!--      <p>--><?php //_e('Sorry, no posts matched your criteria.'); ?><!--</p>--><?php //endif; ?>
  <!--  </div>-->
  <!---->
  <!--  --><?php //get_sidebar(); ?>
  <!--</div>-->
  <!---->
  <!--<div id="delimiter"></div>-->
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-4">
      <h2>Heading</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
        condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec
        sed odio dui. </p>
      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>Heading</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
        condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec
        sed odio dui. </p>
      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>Heading</h2>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta
        felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
        massa justo sit amet risus.</p>
      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>
  </div>

  <hr>

<?php get_footer(); ?>