<?php
  /*
    Template Name: Team Member
  */

  get_header(); 
  $ID = get_the_ID();
?>
<section class="team-item bg--blue">
  <div class="top-padding"></div>
  <div class="team-item__content _container">
    <div class="team-item__left">
      <h1 class="title text--white">
        <?= carbon_get_post_meta($ID, 'team_member_hero_title'); ?>
      </h1>
      <p class="text">
        <?= carbon_get_post_meta($ID, 'team_member_hero_text'); ?>
      </p>
      <div class="team-item__bottom">
        <a
          href="mailto:<?= carbon_get_post_meta($ID, 'team_member_email'); ?>"
          class="btn btn--outline"
        >
          <?= carbon_get_post_meta($ID, 'team_member_email_text'); ?>
        </a>
        <div class="networks">
          <?php
            $social_media_loop = carbon_get_post_meta($ID, 'social_media_loop');
            foreach ($social_media_loop as $item) {
              $social_media_url = $item['social_media_url'];
              $social_media_type = $item['social_media_type'];
          ?>
            <a href="#">
              <img
                src="<?= ICONS_URI ?>/<?= $social_media_type; ?>-white.svg"
                alt="<?= $social_media_type; ?>"
              />
            </a>
          <?php
            }
          ?>
        </div>
      </div>
    </div>
    <img
      src="<?= carbon_get_post_meta($ID, 'team_member_hero_image'); ?>"
      alt="image"
      class="team-item__right"
    />
  </div>
</section>
<section class="text-section">
  <div class="_container">
    <?php
      $text_section = carbon_get_post_meta($ID, 'text_section');
      foreach ($text_section as $item) {
        $title = $item['title'];
        $text = $item['text'];
        $title_type = $item['title_type'];
    ?>
      <div class="text-section__content">
        <?php if ($title_type == 'title-small') { ?>
          <h2 class="title text--40 text--black">
            <?= $title; ?>
          </h2>
        <?php } else { ?>
          <h3 class="title title--small text--blue">
            <?= $title; ?>
          </h3>
        <?php } ?>
        <?= $text; ?>
      </div>
    <?php
      }
    ?>
  </div>
</section>

<section class="blog-section">
  <div class="_container">
    <div class="blog-section__head">
      <h2 class="title title--small text--blue">
        <?= carbon_get_post_meta($ID, 'blog_title'); ?>
      </h2>
      <a 
        href="<?= carbon_get_post_meta($ID, 'blog_button_link'); ?>" 
        class="btn"
      >
          <?= carbon_get_post_meta($ID, 'blog_button_text'); ?>
      </a>
    </div>
    <div class="blog-section__items">
      <?php
        $blog_items = carbon_get_post_meta($ID, 'blog_items');
        foreach ($blog_items as $item) {
          $blog_item_image = $item['blog_item_image'];
          $blog_item_title = $item['blog_item_title'];
          $blog_item_type = $item['blog_item_type'];
          $blog_item_date = date('M j, Y', strtotime($item['blog_item_date']));
          $blog_item_link = $item['blog_item_link'];
      ?>
        <a href="<?= $blog_item_link; ?>" class="blog-section__item">
          <img
            src="<?= $blog_item_image; ?>"
            class="blog-section__item_image"
            alt="blog-section__item_image"
          />
          <div class="blog-section__top">
            <p class="text text--silver-d"><?= $blog_item_type; ?></p>
            <span></span>
            <p class="text text--silver-d"><?= $blog_item_date; ?></p>
          </div>
          <h4 class="title text--28 text--black blog-section__item_title">
            <?= $blog_item_title; ?>
          </h4>
          <p class="text text--black text--700 blog-section__item_link">
            Read article
            <img src="<?= ICONS_URI ?>/blog-section__item_link-arrow.svg" alt="arrow-right" />
          </p>
        </a>
      <?php
        }
      ?>
    </div>
  </div>
</section>

<div style="background-color: var(--silver-l);">
  <?php 
    get_template_part('components/blocks/blue-block', null, []);
  ?>
</div>

<?php 
  get_footer(); 
?>