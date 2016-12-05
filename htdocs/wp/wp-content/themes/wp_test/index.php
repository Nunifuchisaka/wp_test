<?php
get_header();
$td = get_template_directory_uri();
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>


  <section>
    <h1><?php the_title(); ?></h1>
    <div>
      <?php the_post_thumbnail() ?>
      <?php the_content(); ?>
    </div>
  </section>


<?php
endwhile; endif;
get_footer();
?>