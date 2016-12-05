<?php
get_header();
$td = get_template_directory_uri();
$device = get_device();
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>


<p>archives blog</p>

<section>
  <h1><?php the_title(); ?></h1>
  <div>
    <?php the_post_thumbnail() ?>
    <?php the_content(); ?>
  </div>
</section>


<?php
endwhile; endif;
?>

<hr />

<aside class="aside_1">
  <h2>ARCHIVES</h2>
  <div class="aside_1__contents">
    
    <div class="list_1">
      <ul class="list_1__items">
        <?php
        /*
        wp_get_archives(array(
          'post_type' => 'blog',
          'show_post_count' => true,
          'type' => 'monthly',
        ));
        */
        $archives = get_archives_array(array(
          'post_type' => 'blog',
          'show_post_count' => true,
          'type' => 'monthly',
        ));
        if ( $archives ) : foreach ( $archives as $archive ) :
        ?>
          <li class="list_1__item">
            <a href="<?php echo bogo_url(home_url() .'/blog/date/'. $archive->year .'/'. sprintf('%02d',$archive->month .'/')); ?>">
              <?php echo $archive->year . '.' . sprintf('%02d',$archive->month) . ' （' . $archive->posts . '）'; ?>
            </a>
          </li>
        <?php
        endforeach; endif;
        ?>
      </ul>
    </div>
    
  </div>
</aside>


<?php
get_footer();
?>