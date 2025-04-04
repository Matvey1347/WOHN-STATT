<?php
  $item = $args['item'];
  $title = $item['item_title'];
  $description = $item['item_description'];
  $image = $item['item_image'];
  $link = $item['item_link'];
  $item_class = $args['item_class'];

?>
<a href="<?= $link ?>" class="article <?= $item_class ?>">
  <img
    src="<?= $image ?>"
    class="article__image"
    alt="portfolio-img"
  />
  <div class="article__link">
    <span class="text--38">
      <?= $title ?>
    </span>
    <img
      src="<?= IMAGE_URI ?>/article-arrow.svg"
      alt="article-arrow"
      class="article__link_arrow"
    />
  </div>
  <p class="text text--silver-d">
    <?= $description ?>
  </p>
</a>