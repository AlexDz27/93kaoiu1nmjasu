<?php

$title = 'Sprava | Страница не найдена';
$pageName = '404';
load('views/parts/header.php', ['title' => $title, 'pageName' => $pageName]);

?>
<style>
  .section-404 {
    color: #494547;
    padding-bottom: 69px;
  }
  .title-404 {
    font-size: 44px;
  }
  @media (max-width: 560px) {
    .title-404 {
      font-size: 30px;
    }
  }
</style>
<body>
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
      <div id="searchResults" class="search__results">
        <a href="product.html" class="search__results__item">
          <img class="search__results__item__img" src="/img/catalog/kist.png" width="35" height="35" alt="Кисть">
          <span>Кисть <span class="search__results__item__text--gray">плоская СТАНДАРТ, натуральный ворс, 1/25мм</span></span>
        </a>
        <a href="product.html" class="search__results__item">
          <img class="search__results__item__img" src="/img/catalog/kist.png" width="35" height="35" alt="Кисть">
          <span>Кисть плоская <span class="search__results__item__text--gray">СТАНДАРТ, натуральный ворс, 1/25мм</span></span>
        </a>
        <a href="product.html" class="search__results__item">
          <img class="search__results__item__img" src="/img/catalog/kist.png" width="35" height="35" alt="Кисть">
          <span>Кисть плоская СТАНДАРТ<span class="search__results__item__text--gray">, натуральный ворс, 1/25мм</span></span>
        </a>
      </div>
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
        <a href="tel:+375293051111" class="link--no-underline text--bold">+375 (29) 305-11-11</a><br>
        <a href="tel:+375172257637" class="link--no-underline text--bold">+375 (17) 225-76-37 (31)</a>
      </div>
    </div>
    <div class="link-social-cont">
      <a href="https://wa.me/375293051111" class="link-social link-social--whatsapp">
        <img src="/img/icons/whatsapp.svg" width="24" height="24" alt="Ссылка на Whatsapp">
      </a>
      <a href="viber://chat?number=%2B375293051111" class="link-social link-social--viber">
        <img src="/img/icons/viber.svg" width="13" height="14" alt="Ссылка на Viber">
      </a>
      <a href="javascript:void(0)" class="link-social link-social--telegram">
        <img src="/img/icons/telegram.svg" width="24" height="24" alt="Ссылка на Telegram">
      </a>
    </div>
    <button id="btnDownloadPrice" class="btn btn--dropdown" type="button">
      <b>СКАЧАТЬ ПРАЙС</b>
      <img class="btn--dropdown__icon" src="/img/icons/arrow-down.svg" width="17" height="10">
      <div class="btn--dropdown__list">
        <a class="btn--dropdown__list__item" href="Price-2025.04.22.xlsx"><b>Скачать прайс</b></a>
        <a class="btn--dropdown__list__item" target="_blank" href="table.php"><b>Посмотреть прайс</b></a>
      </div>
    </button>
    <button id="btnNav" class="btn-burger"><img src="/img/icons/burger.svg" width="36" height="26"></button>
  </div>
</header>
<header class="header--mob cont--mob--fluid">
  <a class="header--mob__btn-phone header--mob__btn-phone--real" href="tel:+375293051111"><img src="/img/icons/phone--larger.svg" width="32" height="28"></a>
  <button id="btnNavMob" class="header--mob__btn-phone"><img src="/img/icons/burger.svg" width="36" height="26"></button>
</header>

<section class="section-404 section-design--about">
  <div class="cont">
    <h1 class="title-404">Извините, страница не была найдена</h1>
    <p class="text--larger">Перейти на <a href="/">главную</a> или <a href="/catalog">в каталог</a></p>
  </div>
</section>

<section class="section section--black pb section--contacts">
  <h2 class="title-section section--black__title-section">Наши контакты</h2>

  <div class="contacts__cont">
    <div class="cont contacts__col-left">
      <p class="text--big p--lower-margin p--no-mt">ООО “Рошма”</p>
      <p class="text--big p--lower-margin">Адрес офиса и склада:</p>
      <div class="text-with-icon">
        <img class="text-with-icon__icon text-with-icon__icon--more-centered" src="/img/icons/pin--larger.svg" width="17" height="23">
        <div class="text-with-icon__text-cont text-with-icon--pin__text-cont">
          <a href="https://yandex.by/maps/29630/minsk-district/house/Zk4YcwBmSUYEQFtpfXRxeXxnYg==/?ll=27.576034%2C53.808047&z=16.62" class="link--no-underline text--larger">223056, Минская обл., Минский р-н, Сеницкий с/с,<br>д. 64, оф. 8</a>
        </div>
      </div>
      <p class="text--big p--lower-margin">Режим работы:</p>
      <div class="text-with-icon">
        <img class="text-with-icon__icon" src="/img/icons/clock.svg" width="20" height="20">
        <div class="text-with-icon__text-cont text-with-icon--pin__text-cont">
          <span class="text--larger"><b>Пн-пт</b>: 8:30-17:00, <b>выходные</b>: суббота, воскресенье</span>
        </div>
      </div>
      <p class="text--big p--lower-margin">Телефоны:</p>
      <div class="text-with-icon">
        <img class="text-with-icon__icon" src="/img/icons/phone--larger.svg" width="24" height="22">
        <div class="text-with-icon__text-cont text-with-icon--pin__text-cont">
          <span class="text--larger"><a class="link--no-underline" href="tel:+375293051111">+375 (29) 305-11-11</a>,<br class="show-below-577"> <a class="link--no-underline" href="tel:+375172257637">+375 (17) 225-76-37</a>,<br> <a class="link--no-underline" href="tel:+375172257631">+375 (17) 225-76-31</a></span>
        </div>
      </div>
      <p class="text--big p--lower-margin">E-mail:</p>
      <div class="text-with-icon">
        <img class="text-with-icon__icon text-with-icon__icon--envelope--larger" src="/img/icons/envelope--larger.svg" width="24" height="18">
        <div class="text-with-icon__text-cont text-with-icon--pin__text-cont">
          <a href="mailto:office@roshma.by" class="link--no-underline text--larger">office@roshma.by</a>
        </div>
      </div>
      <p class="link-social-cont link-social-cont--farther">
        <a href="javascript:void(0)" class="link-social link-social--whatsapp link-social--mob">
          <img src="/img/icons/whatsapp.svg" width="24" height="24" alt="Ссылка на Whatsapp">
        </a>
        <a href="viber://chat?number=%2B375293051111" class="link-social link-social--viber link-social--mob">
          <img src="/img/icons/viber.svg" width="13" height="14" alt="Ссылка на Viber">
        </a>
        <a href="javascript:void(0)" class="link-social link-social--telegram link-social--mob">
          <img src="/img/icons/telegram.svg" width="24" height="24" alt="Ссылка на Telegram">
        </a>
      </p>
    </div>
    <div class="cont contacts__col-right">
      <div id="map" style="max-width: 780px; height: 400px; border-radius: 35px; margin: 0 auto;"></div>
    </div>
  </div>

  <div class="cont contacts__cont-2">
    <div>
      <h3 class="title-and-text__title card__title">Работаем по всей Беларуси</h3>
      <p class="title-and-text__text card__list text--larger">Мы всегда рядом с вами! Наши торговые представители работают во всех городах. Нам важно, чтобы любой ваш вопрос был решён в самый короткий срок.</p>
    </div>
    <div>
      <h3 class="title-and-text__title card__title">Экспресс-доставка</h3>
      <p class="title-and-text__text card__list text--larger">Доставка за наш счёт! Без ограничений суммы!<br>В любую точку Беларуси! Быстро!</p>
    </div>
    <div class="items-spaced-list-design__line contacts__cont-2__items-spaced-list-design__line"></div>
  </div>
</section>

<?php load('views/parts/footer.php') ?>