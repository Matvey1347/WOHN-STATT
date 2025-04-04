
<?php
  $ID = get_the_ID();
  $custom_class = $args['custom_class'] ?? '';
  $is_silver = carbon_get_post_meta($ID, 'is_silver');
  $line_text = carbon_get_post_meta($ID, 'blue_block_line_text');
  $title = carbon_get_post_meta($ID, 'blue_block_title');
  $btn_text = carbon_get_post_meta($ID, 'blue_block_btn_text');
  $btn_link = carbon_get_post_meta($ID, 'blue_block_btn_link');

  if($title) {
?>
  <section class="blue-block blue-block--page <?= $is_silver ? 'blue-block--silver' : '' ?> <?= $custom_class ?>">
    <div class="_container">
      <div class="blue-block__content">
        <img
          src="<?= IMAGE_URI ?>/blue-block__bg.png"
          alt="blue-block__bg"
          class="blue-block__bg"
        />
        <div class="blue-block__content-wrap">
          <div class="blue-block__cols">
            <div class="blue-block__col"> 
              <div class="text__line text__line--white">
                <span></span>
                <?= $line_text; ?>
              </div>
              <h2 class="title title--small text--white">
                <?= $title; ?>
              </h2>
            </div>
            <a 
              href="<?= $btn_link; ?>" 
              class="btn btn--white"
            >
              <?= $btn_text; ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
  }
?>