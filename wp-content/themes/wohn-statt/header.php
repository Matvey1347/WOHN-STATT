<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= the_title(); ?></title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="<?= IMAGE_URI ?>/favicon.png" type="image/x-icon" />
  <link rel="stylesheet" href="<?= THEME_URI ?>/verstka/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8.0.7/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

  <?= wp_head(); ?>
</head>
<body>
  <div class="wrapper">
    <div class="content">
      <?php
        include 'themplates/header-themplate.php';
      ?>
      <main>
        