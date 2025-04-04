<?php
  $menuItems = getCustomMenuItemsArr('main-menu');
?>
<header class="header _fixed">
  <div class="header__container _container">
    <a href="" class="header__logo">
      <img src="<?= getSettingsFieldValue('header_logo') ?>" alt="" />
    </a>
    <div class="header__menu menu">
      <div class="menu__icon">
        <span></span>
      </div>
      <nav class="menu__body">
        <ul class="menu__list">
          <?php 
            foreach($menuItems as $item) { 
              $isActive = $item['isActive'];
              $link = $item['link'];
              $name = $item['name'];
              $subItems = $item['subItems'];
          ?>
            <li class="<?php if($isActive) echo '_active'; ?>">
              <a href="<?= $link; ?>" class="menu__link _hover-undeline"><?= $name; ?></a>
            </li>
          <?php 
            } 
          ?>
          <li>
            <a href="<?= getSettingsFieldValue('header_contact_link') ?>" class="btn"><?= getSettingsFieldValue('header_contact_text') ?></a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</header>
