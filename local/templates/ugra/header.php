<!DOCTYPE html>
<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;
?>


<html lang="<?= LANGUAGE_ID ?>">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <?
      Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/app.js");
      Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/app.css");
      Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/new.css");

      $APPLICATION->ShowHead();
    ?>
  </head>
  <body>

    <? if ($USER->IsAdmin()) $APPLICATION->ShowPanel(); ?>

    <header class="header">
      <div class="bg">
        <div class="container">
          <a href="/" class="logo header__logo">
            <img
              width="46"
              height="40"
              src="<?= SITE_TEMPLATE_PATH."/img/logo.svg" ?>"
              alt="Югорский калейдоскоп событий"
              class="logo"
            />
            <span class="title">Югорский калейдоскоп событий</span>
          </a>
          <span class="header__heading">Архивная служба Югры</span>
        </div>
      </div>
      <div class="header__container container">
        <div class="header__nav">
          <div class="logo logo-sm">
            <img src="<?= SITE_TEMPLATE_PATH."/img/logo-sm.svg" ?>" alt="" />
          </div>
          <nav class="navbar navbar-expand-md">
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarHeaderToggler"
              aria-controls="navbarHeaderToggler"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarHeaderToggler">
              <ul>
                <li>
                  <a href="">О проекте</a>
                </li>
                <li>
                  <a href="">Обратная связь</a>
                </li>
                <li>
                  <a class="icon icon-search" href=""> Поиск </a>
                </li>
                <li>
                  <a href=""><img src="<?= SITE_TEMPLATE_PATH."/img/view.svg" ?>" alt="" /></a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>