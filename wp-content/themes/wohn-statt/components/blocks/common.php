<?php
  $ID = get_the_ID();
  $commonItems = carbon_get_post_meta($ID, 'common_loop');

  $class = $args['custom_class'];
?>

<?php 
  foreach ($commonItems as $item) { 
    $isRightImage = $item['common_is_right_image'];
    $image = $item['common_img'];
    $lineText = $item['common_line_text'];
    $title = $item['common_title'];
    $text = $item['common_text'];
    $contentLoop = $item['common_content_loop'];
?>
  <section class="common common--center <?= $class ?>">
    <div class="common__container _container">
      <img src="<?= $image ?>" alt="common-img" class="common__img" />
      <div class="common__content">
        <div class="text__line _end">
          <span></span>
          <?= $lineText ?>
        </div>
        <div class="common__title_wrap">
          <div class="common__title title title--small">
            <?= $title ?>
          </div>
        </div>
        <p class="text text--silver-d common__text-first">
          Urna varius vestibulum pellentesque egestas etiam sodales elementum
          senectus iaculis ac ultricies in rhoncus pharetra porttitor rhoncus
          tortor urna tincidunt laoreet amet urna.
        </p>
        <div class="btns__wrap common__btns-first">
          <?php 
            foreach ($contentLoop as $contentItem) { 
              $type = $contentItem['_type'];
              if ($type === 'buttons') {
                foreach ($contentItem['btns__loop'] as $button) {
                  $buttonType = $button['type'];
                  $buttonText = $button['text'];
                  $buttonLink = $button['link'];
                  $buttonClass = $buttonType === 'primary' ? 'btn' : 'btn ' . 'btn--' . $buttonType;
                  ?>
                    <a href="<?= $buttonLink ?>" class="<?= $buttonClass ?>">
                      <?= $buttonText ?>
                    </a>
                  <?php 
                }
              } else if ($type === 'more_info') {
                foreach ($contentItem['more_info__loop'] as $moreInfo) {
                  $moreInfoTitle = $moreInfo['title'];
                  $moreInfoTextOne = $moreInfo['text_one'];
                  $moreInfoTextTwo = $moreInfo['text_two'];
                ?>
                    <div class="about-common__content">
                      <h2 class="about-common__title"><?= $moreInfoTitle ?></h2>
                      <div class="about-common__link">
                        <img src="<?= ICONS_URI ?>/city.svg" alt="city" />
                        <?= $moreInfoTextOne ?>
                      </div>
                      <div class="about-common__link">
                        <img src="<?= ICONS_URI ?>/email.svg" alt="email" />
                        <?= $moreInfoTextTwo ?>
                      </div>
                    </div>               
                  <?php 
                }
              }
            } 
          ?>
        </div>
      </div>
    </div>
  </section>
<?php 
  } 
?>
