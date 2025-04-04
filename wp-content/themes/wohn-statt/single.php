<?php
  global $post;
  $post_type = $post->post_type;

  if($post_type === 'services') {
    include 'single-service.php';
  } else if($post_type === 'work_items') {
    include 'single-work.php';
  } else if($post_type === 'doctors') {
    include 'single-doctor.php';
  } else {
    include 'single-article.php';
  }
?>