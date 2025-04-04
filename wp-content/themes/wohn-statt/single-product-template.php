<?php
  /*
    Template Name: Single Product
  */

  get_header(); 
  $ID = get_the_ID();
?>

<section class="product-first bg--blue">
  <div class="top-padding"></div>
  <div class="product-first__wrap">
    <div class="_container">
      <img
        src="<?php echo carbon_get_post_meta($ID, 'product_hero_image'); ?>"
        alt="product-first__left"
        class="product-first__left"
      />
      <div class="product-first__right">
        <h1 class="title text--white">
          <?php echo carbon_get_post_meta($ID, 'product_hero_title'); ?>
        </h1>
        <p class="text">
          <?php echo carbon_get_post_meta($ID, 'product_hero_text'); ?>
        </p>
        <a 
          href="<?php echo carbon_get_post_meta($ID, 'product_hero_btn_link'); ?>" 
          class="btn btn--white"
        >
          <?php echo carbon_get_post_meta($ID, 'product_hero_btn_text'); ?>
        </a>
      </div>
    </div>
  </div>
</section>
<div class="_container">
  <img
    src="<?php echo carbon_get_post_meta($ID, 'product_hero_logo'); ?>"
    alt="hero-logo"
    class="hero__logo hero__logo--right"
  />
</div>

<section class="product-info">
  <div class="_container">
    <div class="product-info__content">
      <div class="product-info__form">
        <h3 class="text text--600 text--24 text--white">
          <?= carbon_get_post_meta($ID, 'product_info_form_title'); ?>
        </h3>
        <?= carbon_get_post_meta($ID, 'product_info_form_text'); ?>
        <div class="form">
          <?= do_shortcode('[contact-form-7 id="64947c3" title="Product Form"]'); ?>
        </div>
      </div>
      <div class="product-info__text">
        <h2 class="title title--small text--black">
          <?= carbon_get_post_meta($ID, 'product_info_title'); ?>
        </h2>
        <?= carbon_get_post_meta($ID, 'product_info_text'); ?>
      </div>
    </div>
    <img
      src="<?= carbon_get_post_meta($ID, 'product_info_image'); ?>"
      alt="product-info__image"
      class="product-info__image"
    />
  </div>
</section>
<section class="products">
  <div class="_container">
    <div class="products__head">
      <h2 class="title title--small text--black">
        <?= carbon_get_post_meta($ID, 'other_products_title'); ?>
      </h2>
      <a 
        href="<?= carbon_get_post_meta($ID, 'other_products_btn_link'); ?>" 
        class="btn"
      >
        <?= carbon_get_post_meta($ID, 'other_products_btn_text'); ?>
      </a>
    </div>
    <div class="products__items">
      <?php foreach (carbon_get_post_meta($ID, 'other_products') as $product) { ?>
        <a 
          href="<?= $product['other_products_link']; ?>" 
          class="article"
        >
          <img
            src="<?= $product['other_products_image']; ?>"
            class="article__image"
            alt="portfolio-img"
          />
          <div class="article__link">
            <span class="text--38"><?= $product['other_products_title']; ?></span>
            <img
              src="<?= IMAGE_URI ?>/article-arrow.svg"
              alt="article-arrow" 
              class="article__link_arrow"
            />
          </div>
          <p class="text text--silver-d">
            <?= $product['other_products_text']; ?>
          </p>
        </a>
      <?php 
        }
      ?>
    </div>
  </div>
</section>

<?php 
  get_template_part('components/blocks/blue-block', null, []);
?>

<?php 
  get_footer(); 
?>