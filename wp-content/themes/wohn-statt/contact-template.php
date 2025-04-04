<?php
  /*
    Template Name: Kontakt
  */

  get_header(); 
  $ID = get_the_ID();
?>

<section class="contact bg--blue">
  <div class="top-padding"></div>
  <div class="_container">
    <div class="contact__head">
      <h1 class="title">
        <?= carbon_get_post_meta($ID, 'contact_hero_title'); ?>
      </h1>
      <div class="contact__items">
        <a
          href="mailto:<?= getSettingsFieldValue('email_value') ?>"
          class="contact__item"
        >
          <img src="<?= ICONS_URI ?>/email-white.svg" alt="email" />
          <div class="contact__item_text">
            <span class="text text--silver-d text--500">
              <?= getSettingsFieldValue('email_text') ?>
            </span>
            <div class="text text--white text--uppercase">
              <?= getSettingsFieldValue('email_value') ?>
            </div>
          </div>
        </a>
        <a href="tel:+<?= getSettingsFieldValue('phone_value') ?>" class="contact__item">
          <img src="<?= ICONS_URI ?>/phone-white.svg" alt="phone" />
          <div class="contact__item_text">
            <span class="text text--silver-d text--500">
              <?= getSettingsFieldValue('phone_text') ?>
            </span>
            <div class="text text--white"><?= getSettingsFieldValue('phone_value') ?></div>
          </div>
        </a>
      </div>
    </div>
    <div class="contact__content">
      <div class="contact__content_left">
        <img
          src="<?= carbon_get_post_meta($ID, 'contact_hero_image') ?>"
          alt="contact__img"
          class="contact__content_img"
        />
        <div class="networks__wrap">
          <div class="networks__text text--white">
            <?= carbon_get_post_meta($ID, 'contact_hero_text'); ?>
          </div>
          <?= showGlobalNetworks(true); ?>
        </div>
      </div>
      <div class="contact__content_form form">
        <h2
          class="text text--24 text--white text--uppercase contact__form_title"
        >
          <?= carbon_get_post_meta($ID, 'contact_hero_form_title'); ?>
        </h2>
        <?php
          echo do_shortcode('[contact-form-7 id="e6b7341" title="Kontaktk form"]');
        ?>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('components/blocks/common', null, [
  'custom_class' => 'common--contact  common--about',
]) ?>

<section class="faq">
  <div class="_container">
    <div class="faq__head">
      <div class="text__line text--black">
        <span></span>
        <?= carbon_get_post_meta($ID, 'faq_text_line'); ?>
      </div>
      <h2 class="faq__title title title--small text--blue">
        <?= carbon_get_post_meta($ID, 'faq_title'); ?>
      </h2>
      <p class="text text--silver-d">
        <?= carbon_get_post_meta($ID, 'faq_text'); ?>
      </p>
    </div>
    <div
      data-spollers
      class="spollers flex flex-col justify-between items-center"
    >
      <?php
        $faq_items = carbon_get_post_meta($ID, 'faq_items');
        $faq_items_first_half = array_slice($faq_items, 0, ceil(count($faq_items) / 2));
        $faq_items_second_half = array_slice($faq_items, ceil(count($faq_items) / 2));
      ?>
      <div class="spollers__col">
        <?php 
          foreach ($faq_items_first_half as $item) { 
            $title = $item['title'];
            $text = $item['text'];
        ?>
          <div class="spoller__wrap w-100">
            <div
              data-spoller
              class="spoller__wrap_item flex justify-between items-center w-100"
            >
              <h4 class="spoller__wrap_title title-spoller text text--black text--24 text--600">
                <?= $title; ?>
              </h4>
              <div class="spoller__wrap_img-active">
                <img
                  src="<?= ICONS_URI ?>/open-spollers.svg"
                  alt="close"
                />
              </div>
              <div class="spoller__wrap_img-noactive">
                <img
                  src="<?= ICONS_URI ?>/close-spollers.svg"
                  alt="open"
                />
              </div>
            </div>
            <div class="spoller__wrap_body text-spoller text text--silver-d">
              <?= $text; ?>
            </div>
          </div>
        <?php
          }  
        ?>
      </div>
      <div class="spollers__col">
        <?php 
          foreach ($faq_items_second_half as $item) { 
            $title = $item['title'];
            $text = $item['text'];
        ?>
          <div class="spoller__wrap w-100">
            <div
              data-spoller
              class="spoller__wrap_item flex justify-between items-center w-100"
            >
              <h4 class="spoller__wrap_title title-spoller text text--black text--24 text--600">
                <?= $title; ?>
              </h4>
              <div class="spoller__wrap_img-active">
                <img
                  src="<?= ICONS_URI ?>/open-spollers.svg"
                  alt="close"
                />
              </div>
              <div class="spoller__wrap_img-noactive">
                <img
                  src="<?= ICONS_URI ?>/close-spollers.svg"
                  alt="open"
                />
              </div>
            </div>
            <div class="spoller__wrap_body text-spoller text text--silver-d">
              <?= $text; ?>
            </div>
          </div>
        <?php
          }  
        ?>
      </div>
    </div>
  </div>
</section>

<section class="follow-us">
  <div class="_container">
    <div class="follow-us__head">
      <div class="follow-us__head_left">
        <div class="text__line text--blue">
          <span></span>
          <?= carbon_get_post_meta($ID, 'follow_us_text_line'); ?>
        </div>
        <h2 class="title title--small text--blue">
          <?= carbon_get_post_meta($ID, 'follow_us_title'); ?>
        </h2>
      </div>
      <p class="text text--silver-d">
        <?= carbon_get_post_meta($ID, 'follow_us_text'); ?>
      </p>
    </div>
    <div class="follow-us__images">
      <img
        src="<?= carbon_get_post_meta($ID, 'follow_us_image') ?>"
        alt="follow-us__img"
        class="follow-us__image"
      />
      <div class="follow-us__images_four">
        <?php
          $follow_us_images = carbon_get_post_meta($ID, 'follow_us_images');
          foreach ($follow_us_images as $image) {
            $image_url = $image['image'];
        ?>
        <img
          src="<?= $image_url ?>"
          alt="<?= $image_url ?>"
        />
        <?php
          }
        ?>
      </div>
    </div>
    <a 
      href="<?= carbon_get_post_meta($ID, 'follow_us_button_link') ?>" 
      class="btn"
    >
      <?= carbon_get_post_meta($ID, 'follow_us_button_text') ?>
    </a>
  </div>
</section>

<?php 
  get_template_part('components/blocks/blue-block', null, []);
?>

<?php 
  get_footer(); 
?>