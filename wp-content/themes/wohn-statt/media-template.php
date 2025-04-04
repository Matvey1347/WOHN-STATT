<?php
  /*
    Template Name: Media
  */

  get_header(); 
  $ID = get_the_ID();
?>

<section class="media-top bg--blue">
  <div class="top-padding"></div>
  <div class="_container">
    <h1 class="title title--small text--uppercase text--white text--center text--600">
      <?= carbon_get_post_meta($ID, 'media_hero_title'); ?>
    </h1>
  </div>
</section>
<section class="media-videos">
  <div class="_container">
    <h2 class="title title--small text--uppercase text--40 text--blue text--700">
      <?= carbon_get_post_meta($ID, 'media_videothek_title'); ?>
    </h2>
    <div class="media-videos__swiper_wrap">
      <button class="media-videos__arrow-prev">
        <img
          src="<?= ICONS_URI ?>/media-videos-arrow-left.svg"
          alt="arrow-left"
        />
      </button>
      <button class="media-videos__arrow-next">
        <img
          src="<?= ICONS_URI ?>/media-videos-arrow-right.svg"
          alt="arrow-right"
        />
      </button>
      <div class="swiper media-videos__swiper">
        <div class="swiper-wrapper">
          <?php
            $media_videothek_items = carbon_get_post_meta($ID, 'media_videothek_items');
            foreach ($media_videothek_items as $key => $item) {
              $media_videothek_item_link = $item['link'];
              $media_videothek_item_image = $item['image'];
          ?>
            <div class="swiper-slide">
              <img
                data-show-image="<?= $key; ?>"
                src="<?= $media_videothek_item_image; ?>"
                alt="media-videos__item"
              />
              <iframe 
                data-show-video="<?= $key; ?>"
                width="560" 
                height="315" 
                data-src="<?= $media_videothek_item_link; ?>" title="YouTube video player" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
                allowfullscreen
              ></iframe>
            </div>
          <?php
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="media-images">
  <div class="_container">
    <h2 class="title title--small text--uppercase text--40 text--blue text--700">
      <?= carbon_get_post_meta($ID, 'media_images_title'); ?>
    </h2>
    <div class="media-images__items">
      <?php
        $media_images_items = carbon_get_post_meta($ID, 'media_images_items');
        foreach ($media_images_items as $key => $item) {
          $media_images_item_image = $item['images'];
      ?>
        <div class="media-images__item__col">
          <?php
            foreach ($media_images_item_image as $key => $image) {
              $media_images_item_image_url = wp_get_attachment_url($image); 
          ?>
            <img
              src="<?= $media_images_item_image_url; ?>"
              alt="media-images__item"
              class="media-images__item"
            />
          <?php
            }
          ?>
        </div>
      <?php
        }
      ?>
    </div>
  </div>
</section>

<?php 
  get_footer(); 
?>