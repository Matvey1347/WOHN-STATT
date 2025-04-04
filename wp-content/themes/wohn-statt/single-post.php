<?php
  /*
    Template Name: Single Post
  */

  get_header(); 
  $ID = get_the_ID();
?>

<section class="umwelt-first bg--blue">
  <div class="top-padding"></div>
  <div class="umwelt-first__content _container">
    <div class="umwelt-first__text">
      <h1 class="title title--small text--white">
        <?= carbon_get_post_meta($ID, 'post_hero_title'); ?>
      </h1>
      <p class="text">
        <?= carbon_get_post_meta($ID, 'post_hero_text'); ?>
      </p>
    </div>
    <img
      src="<?= carbon_get_post_meta($ID, 'post_hero_image'); ?>"
      alt="umwelt-first__image"
      class="umwelt-first__image"
    />
  </div>
</section>

<?php 
  $info_loop = carbon_get_post_meta($ID, 'info_loop');
  foreach ($info_loop as $item) {
    if ($item['_type'] == 'text_block') {
      $title = $item['title'];
      $text = $item['text'];
?>
<section class="text-block">
  <div class="_container">
    <div class="text-block__content">
      <h2 class="text-block__title">
        <?= $title; ?>
      </h2>
      <p class="text text--20 text--center text--silver-d">
        <?= $text; ?>
      </p>
    </div>
  </div>
</section>
<?php 
    } else if ($item['_type'] == 'image_block') {
      $image = $item['image'];
      $is_right = $item['is_right'];
      $text = $item['text'];
      $text_line = $item['text__line'];
      $title = $item['title'];
?>
<section class="common">
  <div class="common__container _container">
    <div class="common__items">
      <div class="common__item _center <?= $is_right ? '_reverse' : ''; ?>">
        <img src="<?= $image; ?>" alt="common-img" class="common__img" />
        <div class="common__content">
          <div class="text__line _end">
            <span></span>
            <?= $text_line; ?>
          </div>
          <div class="common__title_wrap">
            <div class="common__title title title--small">
              <?= $title; ?>
            </div>
          </div>
          <?= $text; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
    }
  }
?>

<?php 
  $mobility_title = carbon_get_post_meta($ID, 'mobility_title');
  $mobility_btn_text = carbon_get_post_meta($ID, 'mobility_btn_text');
  $mobility_btn_link = carbon_get_post_meta($ID, 'mobility_btn_link');
  $mobility_images = carbon_get_post_meta($ID, 'mobility_images');
  $mobility_text = carbon_get_post_meta($ID, 'mobility_text');
  $mobility_info_loop = carbon_get_post_meta($ID, 'mobility_info_loop');
?>
<section class="mobility">
  <div class="_container">
    <div class="section__head">
      <h2 class="title title--small text--blue">
        <?= $mobility_title; ?>
      </h2>
      <a 
        href="<?= $mobility_btn_link; ?>" 
        class="btn"
      >
        <?= $mobility_btn_text; ?>
      </a>
    </div>
    <div class="mobility__images">
      <?php foreach ($mobility_images as $image) { ?>
        <img src="<?= $image['image']; ?>" alt="mobility-img" />
      <?php } ?>
    </div>
    <div class="text-block text-block--p-0">
      <?= $mobility_text; ?>
    </div>
    <?php
      foreach ($mobility_info_loop as $item) {
        if ($item['_type'] == 'text_block') {
          $title = $item['title'];
          $text = $item['text'];
        
    ?>
        <div class="text-block text-block--blue">
          <div class="text-block__content">
            <h2 class="text-block__title">
              <?= $title; ?>
            </h2>
            <p class="text text--20 text--center text--silver-d">
              <?= $text; ?>
            </p>
          </div>
        </div>
    <?php
        } else if ($item['_type'] == 'image_block') {
          $image = $item['image'];
          $is_right = $item['is_right'];
          $text = $item['text'];
          $text_line = $item['text__line'];
          $title = $item['title'];
    ?>
            <section class="common">
              <div class="common__container">
                <div class="common__items">
                  <div class="common__item _center <?= $is_right ? '_reverse' : ''; ?>">
                    <img
                      src="<?= $image; ?>"
                      alt="common-img"
                      class="common__img"
                    />
                    <div class="common__content">
                      <div class="text__line _end">
                        <span></span>
                        <?= $text_line; ?>
                      </div>
                      <div class="common__title_wrap">
                        <div class="common__title title title--small">
                          <?= $title; ?>
                        </div>
                      </div>
                      <?= $text; ?>
                    </div>
                  </div>
                </div>
              </div>
            </section>
    <?php
        }
      }
    ?>
    
  </div>
</section>

<?php 
  get_template_part('components/blocks/blue-block', null, []);
?>

<?php 
  get_footer(); 
?>
