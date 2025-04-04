<?php
  /*
    Template Name: History
  */

  get_header(); 
  $ID = get_the_ID();
?>

<section class="umwelt-first history-first bg--blue">
  <div class="top-padding"></div>
  <div class="umwelt-first__content _container">
    <div class="umwelt-first__text">
      <h1 class="title title--small text--white text--uppercase">
        <?= carbon_get_post_meta($ID, 'history_hero_title'); ?>
      </h1>
      <p class="text">
        <?= carbon_get_post_meta($ID, 'history_hero_text'); ?>
      </p>
    </div>
    <img
      src="<?= carbon_get_post_meta($ID, 'history_hero_image'); ?>"
      alt="umwelt-first__image"
      class="umwelt-first__image"
    />
  </div>
</section>
<div class="history__btns">
  <?php
    $links = carbon_get_post_meta($ID, 'link_loop');
    foreach ($links as $link) {
  ?>
    <a href="<?= $link['link_url']; ?>" class="history__btn">
      <?= $link['link_text']; ?>
    </a>
  <?php
    }
  ?>
</div>

<section class="text-block">
  <div class="_container">
    <div class="text-block__content">
      <p class="text text--20 text--center text--silver-d">
        <?= carbon_get_post_meta($ID, 'history_text'); ?>
      </p>
    </div>
  </div>
</section>
<section class="history-items">
  <div class="_container">
    <?php
      $items = carbon_get_post_meta($ID, 'history_items');
      foreach ($items as $index => $item) {
        $is_even = $index % 2 === 0;
    ?>
      <div class="history-items__item <?= $is_even ? '_reverse' : ''; ?>">
        <img
          src="<?= $item['image']; ?>"
          alt=""
          class="history-items__item_img"
        />
        <div class="history-items__item_content">
          <div class="history-items__title">
            <span><?= $item['year']; ?></span>
            <img
              src="<?= IMAGE_URI ?>/history-items__title_img.png"
              alt=""
              class="history-items__title_img"
            />
          </div>
          <p class="text text--20 text--silver-d">
            <span class="bold-b">
              <?= $item['title']; ?>
            </span>
            <br />
            <br />
            <?= $item['text']; ?>
          </p>
        </div>
      </div>
    <?php
      }
    ?>
  </div>
</section>
<section class="text-block">
  <div class="_container">
    <div class="text-block__content">
      <a 
        href="<?= carbon_get_post_meta($ID, 'history_text_btn_link'); ?>" 
        class="btn btn--center text-block__btn"
      >
        <?= carbon_get_post_meta($ID, 'history_text_btn_text'); ?>
      </a>
      <p class="text text--20 text--center text--silver-d">
        <?= carbon_get_post_meta($ID, 'history_text_with_btn'); ?>
      </p>
    </div>
  </div>
</section>

<?php 
  get_template_part('components/blocks/blue-block', null, []);
?>

<?php 
  get_footer(); 
?>
