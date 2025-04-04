<?php

function showGlobalNetworks($is_white = false) {
  echo '<div class="networks">';
  $social_media = getSettingsFieldValue('social_media_loop');
  foreach ($social_media as $social_media_item) {
    $type = $social_media_item['social_media_type'];
    $url = $social_media_item['social_media_url'];
    if($url) {
      ?>
        <a href="<?= $url ?>">
          <img src="<?= IMAGE_URI ?>/icons/<?= $type ?><?= $is_white ? '-white' : '' ?>.svg" alt="<?= $type ?>" />
        </a>
      <?php
    }
  }
  echo '</div>';
}
