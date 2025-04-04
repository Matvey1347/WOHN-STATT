<footer class="footer">
  <img src="<?= IMAGE_URI ?>/footer__bg.png" alt="footer__bg" class="footer__bg" />
  <div class="footer__head">
    <div class="_container">
      <?php
        $links = getSettingsFieldValue('link_loop');
        foreach ($links as $link) {
          ?>
            <a href="<?= $link['link_url'] ?>"><?= $link['link_text'] ?></a>
          <?php
        }
      ?>
    </div>
  </div>
  <div class="footer__content">
    <div class="_container">
      <div class="footer__item">
        <img
          src="<?= getSettingsFieldValue('footer_logo') ?>"
          alt="footer__logo"
          class="footer__logo"
        />

        <div class="footer__first">
          <div class="footer__item_wrap">
            <a href="mailto:<?= getSettingsFieldValue('email_value') ?>" class="contact__item">
              <img src="<?= IMAGE_URI ?>/icons/email.svg" alt="email" />
              <div class="contact__item_text">
                <span class="text text--blue text--uppercase">
                  <?= getSettingsFieldValue('email_text') ?>
                  </span>
                <span class="text text--black"><?= getSettingsFieldValue('email_value') ?></span>
              </div>
            </a>
          </div>
          <div class="footer__item_wrap">
            <a href="tel:<?= getSettingsFieldValue('phone_value') ?>" class="contact__item">
              <img src="<?= IMAGE_URI ?>/icons/phone.svg" alt="phone" />
              <div class="contact__item_text">
                <span class="text text--blue text--uppercase">
                  <?= getSettingsFieldValue('phone_text') ?>
                </span>
                <span class="text text--black"><?= getSettingsFieldValue('phone_value') ?></span>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="footer__item footer__second">
        <div class="footer__item_wrap">
          <div class="footer__links">
            <?php
              $menuItems = getCustomMenuItemsArr('footer-menu');
              foreach ($menuItems as $item) {
                ?>
                  <a href="<?= $item['link'] ?>" class="text text--blue text--uppercase"><?= $item['name'] ?></a>
                <?php
              }
            ?>
            <!-- <a href="" class="text text--blue text--uppercase">Home</a>
            <a href="" class="text text--blue text--uppercase">Über uns</a>
            <a href="" class="text text--blue text--uppercase">Team</a>
            <a href="" class="text text--blue text--uppercase">Blog</a>
            <a href="" class="text text--blue text--uppercase">Services</a>
            <a href="" class="text text--blue text--uppercase"
              >Single Service</a
            > -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer__bottom">
    <div class="_container">
      <a href="<?= getSettingsFieldValue('link_url_before_arrow') ?>">
        <?= getSettingsFieldValue('link_text_before_arrow') ?>
      </a>
      <img src="<?= IMAGE_URI ?>/footer__arrow.svg" alt="footer__arrow" />
      <a href="<?= getSettingsFieldValue('link_url_after_arrow') ?>">
        <?= getSettingsFieldValue('link_text_after_arrow') ?>
      </a>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="_container">
      <?= showGlobalNetworks(); ?>
      <div class="footer-copyright__text text text--silver-d">
        Copyright © 2025 Die
        <span class="text--blue"> Wohnwerkstatt GmbH</span>
      </div>
      <div class="footer-copyright__text text text--silver-d">
        Erstellt bei
        <span class="text--blue"> SIT GmbH</span>
      </div>
    </div>
  </div>
</footer>