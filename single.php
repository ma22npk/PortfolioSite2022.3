<?php
  $post = $wp_query->post;
  if ( in_category('works') ) {
	  include(TEMPLATEPATH.'/single-works.php');
  } else {
	  include(TEMPLATEPATH.'/single-default.php');
  }
?>
