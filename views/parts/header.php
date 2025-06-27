<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/jpg" href="/favicon.ico">
  <!-- TODO: r this -->
  <meta name="robots" content="noindex,nofollow,noarchive">
  <link rel="stylesheet" href="/css/style-v12.css">
  <?php if ($pageName === 'home' || $pageName === 'contacts' || $pageName === '404'): ?>
    <script src="https://api-maps.yandex.ru/v3/?apikey=2b7d9147-4a30-4c29-9a2f-594b90fa8c59&lang=ru_RU" defer></script>
  <?php endif ?>
  <script src="/js/main-v6.js" defer></script>
  <?php if ($pageName === 'home'): ?>
    <script src="/js/slider.js" defer></script>
  <?php elseif ($pageName === 'catalog'): ?>
    <script src="/js/slider-2-h2.js" defer></script>
  <?php elseif ($pageName === 'product'): ?>
    <link rel="stylesheet" href="/css/splide-core.min.css">
    <script src="/js/splide.min.js" defer></script>
    <script src="/js/slider-product-h4.js" defer></script>
  <?php endif; ?>  
  <script src="/js/search-h2.js" defer></script>
  <title><?= $title ?></title>
</head>
<body class="<?= $bodyClass ?>">
<header class="header cont">
  <div class="text-with-icon text-with-icon--pin">
    <img class="text-with-icon__icon" src="/img/icons/pin.svg" width="14" height="18">
    <div class="text-with-icon__text-cont text-with-icon--pin__text-cont">
      <a class="link--no-underline text--small" href="https://yandex.by/maps/29630/minsk-district/house/Zk4YcwBmSUYEQFtpfXRxeXxnYg==/?ll=27.576034%2C53.808047&z=16.62">223056, Минская обл., Минский р-н, Сеницкий с/с, д. 64, оф. 8</a>
    </div>
  </div>
  <span class="header__text">Режим работы: Пн-Пт: 8:30-17:00, вых.: Сб-Вс</span>
  <div class="header__row-2-col header__row-2-col--1">
    <a class="header__row-2-col__logo" href="/">
      <img src="/img/logo.svg" width="148" height="20" alt="Логотип Sprava">
    </a>
    <div id="search" class="search header__search">
      <input id="searchInput" class="search__input" placeholder="Поиск товаров">
      <button class="btn-icon search__icon" type="button"><img src="/img/icons/search.svg" width="15" height="14"></button>
      <div id="searchResults" class="search__results"></div>
    </div>
    <div class="text-with-icon header__text-with-icon--row-2-col-1">
      <img class="text-with-icon__icon" src="/img/icons/envelope.svg" width="19" height="14">
      <div class="text-with-icon__text-cont">
        <a href="mailto:office@roshma.by" class="link--no-underline text--semibold">office@roshma.by</a>
      </div>  
    </div>
  </div>
  <div class="header__row-2-col">
    <div class="text-with-icon header__text-with-icon--row-2-col-2">
      <img class="text-with-icon__icon" src="/img/icons/phone.svg" width="18" height="18">
      <div class="text-with-icon__text-cont">
        <a href="tel:+375445006080" class="link--no-underline text--bold">+375 (44) 500-60-80</a><br>
        <a href="tel:+375172257637" class="link--no-underline text--bold">+375 (17) 225-76-37 (31)</a>
      </div>
    </div>
    <div class="link-social-cont">
      <a href="https://wa.me/375445006080" class="link-social link-social--whatsapp">
        <img src="/img/icons/whatsapp.svg" width="24" height="24" alt="Ссылка на Whatsapp">
      </a>
      <a href="viber://chat?number=%2B375445006080" class="link-social link-social--viber">
        <img src="/img/icons/viber.svg" width="13" height="14" alt="Ссылка на Viber">
      </a>
      <a href="https://t.me/+375445006080" class="link-social link-social--telegram">
        <img src="/img/icons/telegram.svg" width="24" height="24" alt="Ссылка на Telegram">
      </a>
    </div>
    <button id="btnDownloadPrice" class="btn btn--dropdown" type="button">
      <b>СКАЧАТЬ ПРАЙС</b>
      <img class="btn--dropdown__icon" src="/img/icons/arrow-down.svg" width="17" height="10">
      <div class="btn--dropdown__list">
        <a class="btn--dropdown__list__item" href="/price-lists/<?= $lowDb['currentPriceList'] ?>"><b>Скачать прайс</b></a>
        <a class="btn--dropdown__list__item" target="_blank" href="/table.php"><b>Посмотреть прайс</b></a>
      </div>
    </button>
    <button id="btnNav" class="btn-burger"><img src="/img/icons/burger.svg" width="36" height="26"></button>
  </div>
</header>
<header class="header--mob cont--mob--fluid">
  <a class="header--mob__btn-phone header--mob__btn-phone--real" href="tel:+375445006080"><img src="/img/icons/phone--larger.svg" width="32" height="28"></a>
  <button id="btnNavMob" class="header--mob__btn-phone"><img src="/img/icons/burger.svg" width="36" height="26"></button>
</header>