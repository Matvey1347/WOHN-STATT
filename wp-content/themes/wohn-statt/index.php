<?php 
  /*
    Template Name: Main
  */
  get_header(); 
  $ID = get_the_ID();
?>

<!--  -->
<section class="hero">
  <div class="top-padding"></div>
  <div class="hero__container _container">
    <div class="hero__content">
      <h1 class="title hero__title">
        <?= carbon_get_post_meta($ID, 'hero_title'); ?>
      </h1>
      <p class="text hero__text">
        <?= carbon_get_post_meta($ID, 'hero_text'); ?>
      </p>

      <div class="btns__wrap">
        <a
          href="<?= carbon_get_post_meta($ID, 'hero_button_link'); ?>"
          class="btn btn--white"
        >
          <?= carbon_get_post_meta($ID, 'hero_button_text'); ?>
        </a>
        <a
          href="<?= carbon_get_post_meta($ID, 'hero_button_link_outline'); ?>"
          class="btn btn--outline"
        >
          <?= carbon_get_post_meta($ID, 'hero_button_text_outline'); ?>
        </a>
      </div>
    </div>
  </div>
  <div class="hero__right">
    <img
      src="<?= carbon_get_post_meta($ID, 'hero_image'); ?>"
      alt="hero-img"
      class="hero__bg"
    />
    <button class="hero__scroll-btn">
      <img src="<?= IMAGE_URI ?>/scroll-btn.svg" alt="scroll-btn" />
    </button>
  </div>
</section>
<div class="_container">
  <img
    src="<?= carbon_get_post_meta($ID, 'hero_logo'); ?>"
    alt="hero-logo"
    class="hero__logo"
  />
</div>
<section class="main-numbers">
  <div class="main-numbers__container _container">
    <?php foreach (carbon_get_post_meta($ID, 'main_numbers_loop') as $item) { ?>
    <div class="main-numbers__item">
      <div class="main-numbers__item-number">
        <span data-digits-counter
          ><?= $item['main_numbers_item_number']; ?></span
        >+
      </div>
      <div class="main-numbers__item-text">
        <?= $item['main_numbers_item_text']; ?>
      </div>
    </div>
    <?php } ?>
  </div>

  <div class="_container">
    <div class="main-numbers__line"></div>
  </div>
</section>

<?php get_template_part('components/blocks/common') ?>
<?php 
  if (carbon_get_post_meta($ID, 'portfolio_is_show')) { 
?>
  <section class="portfolio">
    <div class="portfolio__container _container">
      <div class="portfolio__head">
        <div class="portfolio__head_item">
          <div class="text__line text__line--white">
            <span></span>
            <?= carbon_get_post_meta($ID, 'portfolio_line_text'); ?>
          </div>
          <div class="title title--small">
            <?= carbon_get_post_meta($ID, 'portfolio_title'); ?>
          </div>
        </div>
        <p class="text portfolio__head_item text--end">
          <?= carbon_get_post_meta($ID, 'portfolio_text'); ?>
        </p>
      </div>
    </div>
  </section>
  <div class="_container">
    <div class="swiper portfolio__swiper">
      <div class="portfolio__arrows">
        <button class="portfolio__swiper_prev">
          <img src="<?= IMAGE_URI ?>/arrow-left.svg" alt="arrow-left" />
        </button>
        <button class="portfolio__swiper_next">
          <img src="<?= IMAGE_URI ?>/arrow-right.svg" alt="arrow-right" />
        </button>
      </div>
      <div class="swiper-wrapper">
        <?php 
          foreach (carbon_get_post_meta($ID, 'portfolio_items') as $item) {
            get_template_part(
              'components/item/product-item', 
              null, 
              [
                'item' => [
                  'item_title' => $item['portfolio_item_title'],
                  'item_description' => $item['portfolio_item_text'],
                  'item_image' => $item['portfolio_item_image'],
                  'item_link' => $item['portfolio_item_link'],
                ],
                'item_class' => 'swiper-slide'
              ]
            );
          }
        ?>
      </div>
    </div>
  </div>
  <div class="portfolio__btn_wrap _container">
    <a href="<?= carbon_get_post_meta($ID, 'portfolio_btn_link'); ?>" class="btn">
      <?= carbon_get_post_meta($ID, 'portfolio_btn_text'); ?>
    </a>
  </div>
<?php
  }
?>

<section class="main-images">
  <div class="main-images__container _container">
    <div class="main-images__item">
      <div class="text__line text__line--blue">
        <span></span>
        <?= carbon_get_post_meta($ID, 'main_images_line_text'); ?>
      </div>
      <h2 class="title title--small text--blue">
        <?= carbon_get_post_meta($ID, 'main_images_title'); ?>
      </h2>
      <p class="text text--silver-d">
        <?= carbon_get_post_meta($ID, 'main_images_text'); ?>
      </p>
      <?php
        $mainImages = carbon_get_post_meta($ID, 'main_images');
        foreach ($mainImages as $index => $image) {
          $class = $index === 0 ? 'image--first' : 'main-images__image show-1000';
      ?>
        <img src="<?= $image['main_images_image']; ?>" alt="main-image" class="<?= $class; ?>" />
      <?php 
        } 
      ?>
      <p class="text text--silver-d">
        <?= carbon_get_post_meta($ID, 'main_images_text_after'); ?>
      </p>
      <div class="btns__wrap">
        <?php
          $mainBtns = carbon_get_post_meta($ID, 'main_btns');
          foreach ($mainBtns as $btn) {
        ?>
          <a 
            href="<?= $btn['main_btns_link']; ?>" 
            class="btn btn--<?= $btn['type']; ?>"
          >
            <?= $btn['main_btns_text']; ?>
          </a>
        <?php
          }
        ?>
      </div>
      <div class="networks__wrap">
        <div class="networks__text">
          <?= carbon_get_post_meta($ID, 'main_images_networks_text'); ?>
        </div>
        <?= showGlobalNetworks(); ?>
      </div>
    </div>
    <div class="main-images__item main-images__item--2 hide-1000">
      <?php
        $mainImages = carbon_get_post_meta($ID, 'main_images');
        foreach ($mainImages as $index => $image) {
          if($index === 0) continue;
      ?>
        <img src="<?= $image['main_images_image']; ?>" alt="main-image"/>
      <?php 
        } 
      ?>
  </div>
</section>

<section class="blue-block">
  <div class="_container">
    <div class="blue-block__content">
      <img
        src="<?= IMAGE_URI ?>/blue-block__bg.png"
        alt="blue-block__bg"
        class="blue-block__bg"
      />
      <div class="blue-block__content-wrap">
        <div class="text__line text__line--white">
          <span></span>
          <?= carbon_get_post_meta($ID, 'individual_line_text'); ?>
        </div>
        <h2 class="title title--small text--white">
          <?= carbon_get_post_meta($ID, 'individual_title'); ?>
        </h2>
        <p class="text">
          <?= carbon_get_post_meta($ID, 'individual_text'); ?>
        </p>
        <a 
          href="<?= carbon_get_post_meta($ID, 'individual_btn_link'); ?>" 
          class="btn btn--white"
        >
          <?= carbon_get_post_meta($ID, 'individual_btn_text'); ?>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="testimonials">
  <div class="_container">
    <div class="text__line text__line--blue">
      <span></span>
      <?= carbon_get_post_meta($ID, 'testimonials_line_text'); ?>
    </div>
    <div class="testimonials__head">
      <h2 class="title title--small text--blue">
        <?= carbon_get_post_meta($ID, 'testimonials_title'); ?>
      </h2>
      <div class="arrows">
        <button class="arrow testimonials__arrow-prev">
          <img src="<?= IMAGE_URI ?>/arrow-left-white.svg" alt="arrow-left" />
        </button>
        <button class="arrow testimonials__arrow-next">
          <img
            src="<?= IMAGE_URI ?>/arrow-right-white.svg"
            alt="arrow-right"
          />
        </button>
      </div>
    </div>
    <div class="swiper testimonials__swiper">
      <div class="swiper-wrapper">
        <?php
          foreach (carbon_get_post_meta($ID, 'testimonials') as $item) {
        ?>
          <div class="swiper-slide testimonials__item">
            <img
              src="<?= $item['testimonials_image']; ?>"
              alt="testimonials__bg"
              class="testimonials__bg hide-1200"
            />
            <div class="testimonials__content">
              <div class="testimonials__person">
                <img
                  src="<?= $item['testimonials_person']; ?>"
                  alt="testimonials__person"
                  class="testimonials__person_img"
                />
                <span class="testimonials__person_name">
                  <?= $item['testimonials_title']; ?>
                </span>
              </div>
              <img
                src="<?= $item['testimonials_image']; ?>"
                alt="testimonials__image"
                class="testimonials__image show-1200"
              />
              <p class="text">
                <?= $item['testimonials_text']; ?>
              </p>
              <div class="text__line text__line--white _end">
                <span></span>
                <?= $item['testimonials_name']; ?>
              </div>
            </div>
          </div>
        <?php
          }
        ?>
      </div>
    </div>
  </div>
</section>


<?php 
  get_template_part('components/blocks/blue-block', null, [
    'custom_class' => '',
  ]);
?>

<?php 
  get_footer();
?>
