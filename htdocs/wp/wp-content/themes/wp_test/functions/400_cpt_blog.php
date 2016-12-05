<?php

add_action('init', 'register_post_type__blog');
//add_action('save_post', 'save_post__meta_blog');


function register_post_type__blog() {
  
  register_post_type('blog', array(
    'label' => 'ブログ',
    'public' => true,
    'has_archive' => true,
    //'rewrite' => true,
    'rewrite' => array('with_front' => false),
    'hierarchical' => false,
    'menu_position' => 5,
    //'can_export' => true,
    'supports' => array(
      'title',
      'editor',
      'thumbnail',
      'custom-fields',
    ),
    //'show_ui' => false,
  ));
  
  //カテゴリ
  register_taxonomy(
    'blog_cat',
    'blog',
    array(
      'hierarchical' => true,
      'update_count_callback' => '_update_post_term_count',
      'label' => 'カテゴリ',
      'singular_label' => 'カテゴリ',
      'public' => true,
      'show_ui' => true
    )
  );
  
}


?>