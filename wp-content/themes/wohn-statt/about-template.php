<?php
  /*
    Template Name: About
  */

  get_header(); 
  $ID = get_the_ID();
?>

<section class="about bg--blue">
  <div class="top-padding"></div>
  <div class="about__container _container">
    <div class="about__head">
      <h1 class="title">
        <?= carbon_get_post_meta($ID, 'about_hero_title'); ?>
      </h1>
      <div class="about__head_right">
        <p class="text">
          <?= carbon_get_post_meta($ID, 'about_hero_text'); ?>
        </p>
        <a 
          href="<?= carbon_get_post_meta($ID, 'about_hero_btn_link'); ?>" 
          class="btn btn--outline"
        >
          <?= carbon_get_post_meta($ID, 'about_hero_btn_text'); ?>
        </a>
      </div>
    </div>
  </div>
</section>
<div class="_container">
  <div class="about__images">
    <div class="about__image">
      <img
        src="<?= carbon_get_post_meta($ID, 'about_hero_image_big'); ?>"
        alt="about__image-1"
        class="about__image-1"
      />
    </div>
    <div class="about__image">
      <img
        src="<?= carbon_get_post_meta($ID, 'about_hero_image_small'); ?>"
        alt="about__image-2"
        class="about__image-2"
      />
      <img
        src="<?= carbon_get_post_meta($ID, 'about_hero_logo'); ?>"
        alt="hero-logo"
        class="hero__logo"
      />
    </div>
  </div>
</div>

<?php 
  $items = carbon_get_post_meta($ID, 'where_from');
?>
<section class="common">
  <div class="common__container _container">
    <div class="common__items">
      <?php 
        foreach ($items as $index => $item) { 
          $image = $item['image'];
          $text__line = $item['text__line'];
          $title = $item['title'];
          $text = $item['text'];
          $btn_text = $item['btn_text'];
          $btn_link = $item['btn_link'];
          $btn_type = $item['btn_type'];
          $is_even = $index % 2 === 0;
      ?>

        <div class="common__item <?= $is_even ? 'common__item--first _reverse' : 'common__item--second'; ?>">
          <img
            src="<?= $image; ?>"
            alt="common-img"
            class="common__img"
          />
          <div class="common__content">
            <div class="text__line _end">
              <span></span>
              <?= $text__line; ?>
            </div>
            <div class="common__title_wrap">
              <div class="common__title title title--small">
                <?= $title; ?>
              </div>
            </div>
            <p class="text text--silver-d common__text-first">
              <?= $text; ?>
            </p>
            <div class="btns__wrap common__btns-first">
              <a 
                href="<?= $btn_link; ?>" 
                class="btn btn--<?= $btn_type; ?>"
              >
                <?= $btn_text; ?>
              </a>
            </div>
          </div>
        </div>
      <?php
        }
      ?>
    </div>
  </div>
</section>

<section class="about-values bg--blue">
  <div class="_container">
    <div class="about-values__head">
      <div class="text__line text__line--white">
        <span></span>
        Unsere Werte
        <span></span>
      </div>
      <h2 class="title title--small text--white">
        Diese Werte tragen wir durch alles, was wir machen.
      </h2>
    </div>
    <div class="about-values__items">
      <div class="about-values__item">
        <div class="about-values__item_number">
          01.
        </div>
        <div class="about-values__item_title">Kreativität</div>
        <p class="text">Jedes individuell geplante Möbelstück braucht ein hohes Maß an  Befassung</p>
      </div>
      <div class="about-values__item">
        <div class="about-values__item_number">
          02.
        </div>
        <div class="about-values__item_title">Verlässlichkeit</div>
        <p class="text">Unsere jahrelange Erfahrung  bringt Zuverlässigkeit in Planung und Ausführung</p>
      </div>
      <div class="about-values__item">
        <div class="about-values__item_number">
          03.
        </div>
        <div class="about-values__item_title">Innovation</div>
        <p class="text">Neue Möglichkeiten bei Beschlägen oder Beleuchtungen ermöglichen coole Lösungen</p>
      </div>
      <div class="about-values__item">
        <div class="about-values__item_number">
          04.
        </div>
        <div class="about-values__item_title">Verantwortung</div>
        <p class="text">Wir fühlen uns für eure Zufriedenheit ebenso verantwortlich wie für eine gute Produktion</p>
      </div>
      <div class="about-values__item">
        <div class="about-values__item_number">
          05.
        </div>
        <div class="about-values__item_title">Lösungsorientiert</div>
        <p class="text">Form follows function, das ist unsere Devise, und daraus entstehen beste Möbel</p>
      </div>
      <div class="about-values__item">
        <div class="about-values__item_number">
          06.
        </div>
        <div class="about-values__item_title">Unkompliziert</div>
        <p class="text">Es gibt für jede Situation eine optimale Lösung, die im Dialog entsteht.</p>
      </div>
    </div>
  </div>
</section>

<section class="teams">
  <div class="_container">
    <div class="teams__head">
      <div class="teams__head_col">
        <div class="text__line text__line--black">
          <span></span>
          <?= carbon_get_post_meta($ID, 'about_team_text_line'); ?>
        </div>
        <h2 class="teams__head_title">
          <?= carbon_get_post_meta($ID, 'about_team_title'); ?>
          <br>
          <span>
            <?= carbon_get_post_meta($ID, 'about_team_title_big'); ?>
          </span>
        </h2>
      </div>
      <a 
        href="<?= carbon_get_post_meta($ID, 'about_team_btn_link'); ?>" 
        class="btn"
      >
        <?= carbon_get_post_meta($ID, 'about_team_btn_text'); ?>
      </a>
    </div>
    <div class="teams__items">
      <?php 
        $items = carbon_get_post_meta($ID, 'about_team_items');
        foreach ($items as $index => $item) { 
          $image = $item['image'];
          $name = $item['name'];
          $position = $item['position'];
          $text = $item['text'];
          $link = $item['link'];
      ?>
        <a href="#" class="teams__item">
          <img src="<?= $image; ?>" alt="teams-img" class="teams__item_img">
          <div class="team__name"><?= $name; ?></div>
          <div class="team__position"><?= $position; ?></div>
          <p class="text text--silver-d">
            <?= $text; ?>
          </p>
        </a>
      <?php
        }
      ?>
    </div>
  </div>
</section>

<?php get_template_part('components/blocks/common', null, [
  'custom_class' => 'common--about',
]) ?>

<?php 
  get_template_part('components/blocks/blue-block', null, []);
?>

<?php 
  get_footer(); 
?>