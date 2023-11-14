<footer
      class="footer"
      style="background-image: url('<?= SITE_TEMPLATE_PATH."/img/footer-bg.png" ?>')"
    >
      <img class="footer__dec" src="<?= SITE_TEMPLATE_PATH."/img/footer-dec.svg" ?>" alt="" />
      <div class="container">
        <div class="footer__top">
          <div class="row">
            <div class="col-md-6">
              <a href="/" class="logo footer__logo">
                <img
                  width="46"
                  height="40"
                  src="<?= SITE_TEMPLATE_PATH."/img/logo.svg" ?>"
                  alt="Югорский калейдоскоп событий"
                  class="logo"
                />
                <span class="title">Югорский калейдоскоп событий</span>
              </a>
            </div>
            <div class="col-md-6">
              <ul>
                <li>
                  <a href="">Главная</a>
                </li>
                <li>
                  <a href="">События</a>
                </li>
                <li>
                  <a href="">Обратная связь</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer__bottom">
          <div class="row">
            <div class="col-md-5">
              <div class="footer__address">
                <img
                  loading="lazy"
                  src="<?= SITE_TEMPLATE_PATH."/img/address.svg" ?>"
                />
                <? $APPLICATION->IncludeFile("/include/address.php") ?>
              </div>
            </div>
            <div class="col-md-2">
              <div class="footer__phone">
                <img
                  loading="lazy"
                  src="<?= SITE_TEMPLATE_PATH."/img/tel.svg" ?>"
                />
                <? $APPLICATION->IncludeFile("/include/phone_footer_html.php") ?>
              </div>
            </div>
            <div class="col-md-3">
              <div class="footer__email">
                <img
                  loading="lazy"
                  src="<?= SITE_TEMPLATE_PATH."/img/email.svg" ?>"
                  alt="archive@admhmao.ru"
                />
                <? $APPLICATION->IncludeFile("/include/mail.php") ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg">
        <div class="container">
          <div class="footer__rights">
            <? $APPLICATION->IncludeFile("/include/copyrite.php") ?>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>