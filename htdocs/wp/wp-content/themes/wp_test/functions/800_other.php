<?php

/*
## Bogo
*/

add_filter('bogo_localizable_post_types', 'my_localizable_post_types', 10, 1);

function my_localizable_post_types($localizable) {
  $localizable[] = 'blog';
  return $localizable;
}
