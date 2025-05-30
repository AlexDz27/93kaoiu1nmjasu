<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- TODO: r this -->
  <meta name="robots" content="noindex,nofollow,noarchive">
  <link rel="stylesheet" href="css/style-v4.css">
  <script src="js/main-v2.js" defer></script>
  <script src="js/slider-2.js" defer></script>
  <title>Sprava</title>
</head>
<body class="catalog">
  
<header class="header cont">
  <div class="text-with-icon text-with-icon--pin">
    <img class="text-with-icon__icon" src="img/icons/pin.svg" width="14" height="18">
    <div class="text-with-icon__text-cont text-with-icon--pin__text-cont">
      <span class="text--small">223056, Минская обл., Минский р-н, Сеницкий с/с, д. 64, оф. 8</span>
    </div>
  </div>
  <span class="header__text">Режим работы: Пн-Пт: 8:30-17:00, вых.: Сб-Вс</span>
  <div class="header__row-2-col header__row-2-col--1">
    <a class="header__row-2-col__logo" href="/">
      <img src="img/logo.svg" width="148" height="20" alt="Логотип Sprava">
    </a>
    <div id="search" class="search header__search">
      <input id="searchInput" class="search__input" placeholder="Поиск товаров">
      <button class="btn-icon search__icon" type="button"><img src="img/icons/search.svg" width="15" height="14"></button>
      <div id="searchResults" class="search__results">
        <a href="product.html" class="search__results__item">
          <img class="search__results__item__img" src="img/catalog/kist.png" width="35" height="35" alt="Кисть">
          <span>Кисть <span class="search__results__item__text--gray">плоская СТАНДАРТ, натуральный ворс, 1/25мм</span></span>
        </a>
        <a href="product.html" class="search__results__item">
          <img class="search__results__item__img" src="img/catalog/kist.png" width="35" height="35" alt="Кисть">
          <span>Кисть плоская <span class="search__results__item__text--gray">СТАНДАРТ, натуральный ворс, 1/25мм</span></span>
        </a>
        <a href="product.html" class="search__results__item">
          <img class="search__results__item__img" src="img/catalog/kist.png" width="35" height="35" alt="Кисть">
          <span>Кисть плоская СТАНДАРТ<span class="search__results__item__text--gray">, натуральный ворс, 1/25мм</span></span>
        </a>
      </div>
    </div>
    <div class="text-with-icon header__text-with-icon--row-2-col-1">
      <img class="text-with-icon__icon" src="img/icons/envelope.svg" width="19" height="14">
      <div class="text-with-icon__text-cont">
        <span class="text--semibold">office@roshma.by</span>
      </div>  
    </div>
  </div>
  <div class="header__row-2-col">
    <div class="text-with-icon header__text-with-icon--row-2-col-2">
      <img class="text-with-icon__icon" src="img/icons/phone.svg" width="18" height="18">
      <div class="text-with-icon__text-cont">
        <span class="text--bold">+375 (29) 305-11-11</span><br>
        <span class="text--bold">+375 (17) 225-76-37 (31)</span>
      </div>
    </div>
    <div class="link-social-cont">
      <a href="javascript:void(0)" class="link-social link-social--whatsapp">
        <img src="img/icons/whatsapp.svg" width="24" height="24" alt="Ссылка на Whatsapp">
      </a>
      <a href="javascript:void(0)" class="link-social link-social--viber">
        <img src="img/icons/viber.svg" width="13" height="14" alt="Ссылка на Viber">
      </a>
      <a href="javascript:void(0)" class="link-social link-social--telegram">
        <img src="img/icons/telegram.svg" width="24" height="24" alt="Ссылка на Telegram">
      </a>
    </div>
    <button id="btnDownloadPrice" class="btn btn--dropdown" type="button">
      <b>СКАЧАТЬ ПРАЙС</b>
      <img class="btn--dropdown__icon" src="img/icons/arrow-down.svg" width="17" height="10">
      <div class="btn--dropdown__list">
        <a class="btn--dropdown__list__item" href="Price-2025.04.22.xlsx"><b>Скачать прайс</b></a>
        <!-- TODO: "Посмотреть": в смысле? Это надо обсуждать -->
        <a class="btn--dropdown__list__item" href="Price-2025.04.22.xlsx"><b>Посмотреть прайс</b></a>
      </div>
    </button>
    <button id="btnNav" class="btn-burger"><img src="img/icons/burger.svg" width="36" height="26"></button>
  </div>
</header>
<header class="header--mob cont--mob--fluid">
  <a class="header--mob__btn-phone header--mob__btn-phone--real" href="tel:+375293051111"><img src="img/icons/phone--larger.svg" width="32" height="28"></a>
  <button id="btnNavMob" class="header--mob__btn-phone"><img src="img/icons/burger.svg" width="36" height="26"></button>
</header>

<section class="page-title-cont section-design--about">
  <div class="cont yellow">
    <nav>
      <a class="yellow__link" href="/">Главная</a>
      <a class="yellow__link yellow__link--active" href="catalog.html">Каталог</a>
    </nav>
    <h1 class="text--big yellow__title">Каталог</h1>
  </div>
</section>

<section class="section section--black section--black--more-pt section--black--contacts section--black--contacts--cat">
  <div class="cont--mob--fluid yellow shown-below-630">
    <nav>
      <a class="yellow__link" href="/">Главная</a>
      <a class="yellow__link yellow__link--active" href="catalog.html">Каталог</a>
    </nav>
  </div>

  <div class="cont">
    <div id="qs" class="qs__cont">
      <button id="kisti" class="q q--active" type="button">Кисти малярные</button>
      <button id="abraziv" class="q q--with-second-line" type="button"><span class="q__text--with-second-line">Абразивные алмазные<span class="card__title__2nd-line"> материалы и оснастка</span></span></button>
      <button id="valiki" class="q" type="button">Валики и ролики</button>
      <button id="nozhi" class="q" type="button">Ножи и лезвия</button>
      <button id="vspomogat" class="q q--with-second-line" type="button"><span class="q__text--with-second-line">Вспомогательный<span class="card__title__2nd-line"> инструмент</span></span></button>
    </div>

    <h2 id="titleSection" class="title-section title-section--mob">Кисти малярные</h2>

    <div class="slider--cat">
      <div id="track" class="slider--cat__track t-list__mb">
        <div class="t-list">
          <div class="t t--hit">
            <p class="t__iz">1 из 25</p>
            <div class="t__body">
              <div class="t__img-cont">
                <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="Кисть">
              </div>
              <div class="t__text">
                <p>Кисть плоская СТАНДАРТ, натуральный ворс, 1/25мм</p>
                <p class="text--semibold">1.02 BYN<br>(с НДС 20%) / шт</p>
                <a class="btn card__btn t__btn" href="product.html"><b>Подробнее</b></a>
              </div>
            </div>
          </div>
          <div class="t t--hit">
            <p class="t__iz">2 из 25</p>
            <div class="t__body">
              <div class="t__img-cont">
                <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="Кисть">
              </div>
              <div class="t__text">
                <p>Кисть плоская СТАНДАРТ, натуральный ворс, 1/25мм</p>
                <p class="text--semibold">1.02 BYN<br>(с НДС 20%) / шт</p>
                <a class="btn card__btn t__btn" href="product.html"><b>Подробнее</b></a>
              </div>
            </div>
          </div>
          <div class="t ">
            <p class="t__iz">3 из 25</p>
            <div class="t__body">
              <div class="t__img-cont">
                <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="Кисть">
              </div>
              <div class="t__text">
                <p>Кисть плоская СТАНДАРТ, натуральный ворс, 1/25мм</p>
                <p class="text--semibold">1.02 BYN<br>(с НДС 20%) / шт</p>
                <a class="btn card__btn t__btn" href="product.html"><b>Подробнее</b></a>
              </div>
            </div>
          </div>
          <div class="t ">
            <p class="t__iz">4 из 25</p>
            <div class="t__body">
              <div class="t__img-cont">
                <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="Кисть">
              </div>
              <div class="t__text">
                <p>Кисть плоская СТАНДАРТ, натуральный ворс, 1/25мм</p>
                <p class="text--semibold">1.02 BYN<br>(с НДС 20%) / шт</p>
                <a class="btn card__btn t__btn" href="product.html"><b>Подробнее</b></a>
              </div>
            </div>
          </div>

          <div class="t ">
            <p class="t__iz">5 из 25</p>
            <div class="t__body">
              <div class="t__img-cont">
                <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="Кисть">
              </div>
              <div class="t__text">
                <p>Кисть плоская СТАНДАРТ, натуральный ворс, 1/25мм</p>
                <p class="text--semibold">1.02 BYN<br>(с НДС 20%) / шт</p>
                <a class="btn card__btn t__btn" href="product.html"><b>Подробнее</b></a>
              </div>
            </div>
          </div>
          <div class="t ">
            <p class="t__iz">6 из 25</p>
            <div class="t__body">
              <div class="t__img-cont">
                <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="Кисть">
              </div>
              <div class="t__text">
                <p>Кисть плоская СТАНДАРТ, натуральный ворс, 1/25мм</p>
                <p class="text--semibold">1.02 BYN<br>(с НДС 20%) / шт</p>
                <a class="btn card__btn t__btn" href="product.html"><b>Подробнее</b></a>
              </div>
            </div>
          </div>
          <div class="t ">
            <p class="t__iz">7 из 25</p>
            <div class="t__body">
              <div class="t__img-cont">
                <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="Кисть">
              </div>
              <div class="t__text">
                <p>Кисть плоская СТАНДАРТ, натуральный ворс, 1/25мм</p>
                <p class="text--semibold">1.02 BYN<br>(с НДС 20%) / шт</p>
                <a class="btn card__btn t__btn" href="product.html"><b>Подробнее</b></a>
              </div>
            </div>
          </div>
          <div class="t ">
            <p class="t__iz">8 из 25</p>
            <div class="t__body">
              <div class="t__img-cont">
                <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="Кисть">
              </div>
              <div class="t__text">
                <p>Кисть плоская СТАНДАРТ, натуральный ворс, 1/25мм</p>
                <p class="text--semibold">1.02 BYN<br>(с НДС 20%) / шт</p>
                <a class="btn card__btn t__btn" href="product.html"><b>Подробнее</b></a>
              </div>
            </div>
          </div>

          <div class="t ">
            <p class="t__iz">9 из 25</p>
            <div class="t__body">
              <div class="t__img-cont">
                <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="Кисть">
              </div>
              <div class="t__text">
                <p>Кисть плоская СТАНДАРТ, натуральный ворс, 1/25мм</p>
                <p class="text--semibold">1.02 BYN<br>(с НДС 20%) / шт</p>
                <a class="btn card__btn t__btn" href="product.html"><b>Подробнее</b></a>
              </div>
            </div>
          </div>
          <div class="t ">
            <p class="t__iz">10 из 25</p>
            <div class="t__body">
              <div class="t__img-cont">
                <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="Кисть">
              </div>
              <div class="t__text">
                <p>Кисть плоская СТАНДАРТ, натуральный ворс, 1/25мм</p>
                <p class="text--semibold">1.02 BYN<br>(с НДС 20%) / шт</p>
                <a class="btn card__btn t__btn" href="product.html"><b>Подробнее</b></a>
              </div>
            </div>
          </div>
          <div class="t ">
            <p class="t__iz">11 из 25</p>
            <div class="t__body">
              <div class="t__img-cont">
                <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="Кисть">
              </div>
              <div class="t__text">
                <p>Кисть плоская СТАНДАРТ, натуральный ворс, 1/25мм</p>
                <p class="text--semibold">1.02 BYN<br>(с НДС 20%) / шт</p>
                <a class="btn card__btn t__btn" href="product.html"><b>Подробнее</b></a>
              </div>
            </div>
          </div>
          <div class="t ">
            <p class="t__iz">12 из 25</p>
            <div class="t__body">
              <div class="t__img-cont">
                <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="Кисть">
              </div>
              <div class="t__text">
                <p>Кисть плоская СТАНДАРТ, натуральный ворс, 1/25мм</p>
                <p class="text--semibold">1.02 BYN<br>(с НДС 20%) / шт</p>
                <a class="btn card__btn t__btn" href="product.html"><b>Подробнее</b></a>
              </div>
            </div>
          </div>

          <div class="t ">
            <p class="t__iz">13 из 25</p>
            <div class="t__body">
              <div class="t__img-cont">
                <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="Кисть">
              </div>
              <div class="t__text">
                <p>Кисть плоская СТАНДАРТ, натуральный ворс, 1/25мм</p>
                <p class="text--semibold">1.02 BYN<br>(с НДС 20%) / шт</p>
                <a class="btn card__btn t__btn" href="product.html"><b>Подробнее</b></a>
              </div>
            </div>
          </div>
          <div class="t ">
            <p class="t__iz">14 из 25</p>
            <div class="t__body">
              <div class="t__img-cont">
                <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="Кисть">
              </div>
              <div class="t__text">
                <p>Кисть плоская СТАНДАРТ, натуральный ворс, 1/25мм</p>
                <p class="text--semibold">1.02 BYN<br>(с НДС 20%) / шт</p>
                <a class="btn card__btn t__btn" href="product.html"><b>Подробнее</b></a>
              </div>
            </div>
          </div>
          <div class="t ">
            <p class="t__iz">15 из 25</p>
            <div class="t__body">
              <div class="t__img-cont">
                <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="Кисть">
              </div>
              <div class="t__text">
                <p>Кисть плоская СТАНДАРТ, натуральный ворс, 1/25мм</p>
                <p class="text--semibold">1.02 BYN<br>(с НДС 20%) / шт</p>
                <a class="btn card__btn t__btn" href="product.html"><b>Подробнее</b></a>
              </div>
            </div>
          </div>
          <div class="t ">
            <p class="t__iz">16 из 25</p>
            <div class="t__body">
              <div class="t__img-cont">
                <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="Кисть">
              </div>
              <div class="t__text">
                <p>Кисть плоская СТАНДАРТ, натуральный ворс, 1/25мм</p>
                <p class="text--semibold">1.02 BYN<br>(с НДС 20%) / шт</p>
                <a class="btn card__btn t__btn" href="product.html"><b>Подробнее</b></a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="t-list t-list--no-stretch">
          <div class="t ">
            <p class="t__iz">17 из 25</p>
            <div class="t__body">
              <div class="t__img-cont">
                <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="Кисть">
              </div>
              <div class="t__text">
                <p>Кисть плоская СТАНДАРТ, натуральный ворс, 1/25мм</p>
                <p class="text--semibold">1.02 BYN<br>(с НДС 20%) / шт</p>
                <a class="btn card__btn t__btn" href="product.html"><b>Подробнее</b></a>
              </div>
            </div>
          </div>
          <div class="t ">
            <p class="t__iz">18 из 25</p>
            <div class="t__body">
              <div class="t__img-cont">
                <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="Кисть">
              </div>
              <div class="t__text">
                <p>Кисть плоская СТАНДАРТ, натуральный ворс, 1/25мм</p>
                <p class="text--semibold">1.02 BYN<br>(с НДС 20%) / шт</p>
                <a class="btn card__btn t__btn" href="product.html"><b>Подробнее</b></a>
              </div>
            </div>
          </div>
          <div class="t ">
            <p class="t__iz">19 из 25</p>
            <div class="t__body">
              <div class="t__img-cont">
                <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="Кисть">
              </div>
              <div class="t__text">
                <p>Кисть плоская СТАНДАРТ, натуральный ворс, 1/25мм</p>
                <p class="text--semibold">1.02 BYN<br>(с НДС 20%) / шт</p>
                <a class="btn card__btn t__btn" href="product.html"><b>Подробнее</b></a>
              </div>
            </div>
          </div>
          <div class="t ">
            <p class="t__iz">20 из 25</p>
            <div class="t__body">
              <div class="t__img-cont">
                <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="Кисть">
              </div>
              <div class="t__text">
                <p>Кисть плоская СТАНДАРТ, натуральный ворс, 1/25мм</p>
                <p class="text--semibold">1.02 BYN<br>(с НДС 20%) / шт</p>
                <a class="btn card__btn t__btn" href="product.html"><b>Подробнее</b></a>
              </div>
            </div>
          </div>
          <div class="t ">
            <p class="t__iz">21 из 25</p>
            <div class="t__body">
              <div class="t__img-cont">
                <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="Кисть">
              </div>
              <div class="t__text">
                <p>Кисть плоская СТАНДАРТ, натуральный ворс, 1/25мм</p>
                <p class="text--semibold">1.02 BYN<br>(с НДС 20%) / шт</p>
                <a class="btn card__btn t__btn" href="product.html"><b>Подробнее</b></a>
              </div>
            </div>
          </div>
          <div class="t">
            <p class="t__iz">22 из 25</p>
            <div class="t__body">
              <div class="t__img-cont">
                <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="Кисть">
              </div>
              <div class="t__text">
                <p>Кисть плоская СТАНДАРТ, натуральный ворс, 1/25мм</p>
                <p class="text--semibold">1.02 BYN<br>(с НДС 20%) / шт</p>
                <a class="btn card__btn t__btn" href="product.html"><b>Подробнее</b></a>
              </div>
            </div>
          </div>
          <div class="t">
            <p class="t__iz">23 из 25</p>
            <div class="t__body">
              <div class="t__img-cont">
                <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="Кисть">
              </div>
              <div class="t__text">
                <p>Кисть плоская СТАНДАРТ, натуральный ворс, 1/25мм</p>
                <p class="text--semibold">1.02 BYN<br>(с НДС 20%) / шт</p>
                <a class="btn card__btn t__btn" href="product.html"><b>Подробнее</b></a>
              </div>
            </div>
          </div>
          <div class="t">
            <p class="t__iz">24 из 25</p>
            <div class="t__body">
              <div class="t__img-cont">
                <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="Кисть">
              </div>
              <div class="t__text">
                <p>Кисть плоская СТАНДАРТ, натуральный ворс, 1/25мм</p>
                <p class="text--semibold">1.02 BYN<br>(с НДС 20%) / шт</p>
                <a class="btn card__btn t__btn" href="product.html"><b>Подробнее</b></a>
              </div>
            </div>
          </div>
          <div class="t">
            <p class="t__iz">25 из 25</p>
            <div class="t__body">
              <div class="t__img-cont">
                <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="Кисть">
              </div>
              <div class="t__text">
                <p>Кисть плоская СТАНДАРТ, натуральный ворс, 1/25мм</p>
                <p class="text--semibold">1.02 BYN<br>(с НДС 20%) / шт</p>
                <a class="btn card__btn t__btn" href="product.html"><b>Подробнее</b></a>
              </div>
            </div>
          </div>
         </div>
      </div>

      <button id="collapse" class="btn product__btn btn-collapse btn-collapse--show" style="display: none;"><b>ОТКРЫТЬ ВЕСЬ СПИСОК</b></button>

      <div class="slider__btns">
        <button id="btnPrev" class="btn-slider btn-slider--inactive" disabled>
          <svg width="26" height="26" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.15685 0.798306L0.792893 7.27983C0.402369 7.67757 0.402369 8.32243 0.792893 8.72017L7.15686 15.2017C7.54738 15.5994 8.18055 15.5994 8.57107 15.2017C8.96159 14.804 8.96159 14.1591 8.57107 13.7614L3.91421 9.01848L24.5 9.01847C25.0523 9.01847 25.5 8.56249 25.5 8C25.5 7.43751 25.0523 6.98153 24.5 6.98153L3.91421 6.98153L8.57107 2.23864C8.96159 1.84091 8.96159 1.19604 8.57107 0.798306C8.18054 0.400567 7.54738 0.400567 7.15685 0.798306Z" fill="#FEDE32"/>
          </svg>
        </button>
        <div id="dots" class="slider__dots slider__dots--cat">
          <span class="slider__dots__dot slider__dots__dot--active"></span>
          <span class="slider__dots__dot"></span>
        </div>
        <button id="btnNext" class="btn-slider">
          <svg width="26" height="26" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.8431 0.798306L25.2071 7.27983C25.5976 7.67757 25.5976 8.32243 25.2071 8.72017L18.8431 15.2017C18.4526 15.5994 17.8195 15.5994 17.4289 15.2017C17.0384 14.804 17.0384 14.1591 17.4289 13.7614L22.0858 9.01848L1.5 9.01847C0.947714 9.01847 0.499999 8.56249 0.499999 8C0.499999 7.43751 0.947715 6.98153 1.5 6.98153L22.0858 6.98153L17.4289 2.23864C17.0384 1.84091 17.0384 1.19604 17.4289 0.798306C17.8195 0.400567 18.4526 0.400567 18.8431 0.798306Z" fill="#FEDE32"/>
          </svg>
        </button>
      </div>

      <button id="collapseDesk" class="btn product__btn btn-collapse btn-collapse--desk btn-collapse--show" style=""><b>ОТКРЫТЬ ВЕСЬ СПИСОК</b></button>
    </div>  
  </div>
</section>

<hr class="hr">

<footer class="footer">
  <div class="cont">
    <div class="footer__cont">
      <div class="footer__col-1">
        <img src="img/logo.svg" width="148" height="20" alt="Логотип Sprava">
        <div class="link-social-cont link-social-cont--bigger hide-below-800">
          <a href="javascript:void(0)" class="link-social link-social--bigger link-social--whatsapp">
            <img src="img/icons/whatsapp.svg" width="30" height="30" alt="Ссылка на Whatsapp">
          </a>
          <a href="javascript:void(0)" class="link-social link-social--bigger link-social--viber link-social--bigger--viber">
            <img src="img/icons/viber.svg" width="19" height="20" alt="Ссылка на Viber">
          </a>
          <a href="javascript:void(0)" class="link-social link-social--bigger link-social--telegram">
            <img src="img/icons/telegram.svg" width="30" height="30" alt="Ссылка на Telegram">
          </a>
        </div>
        <div class="footer__copyright hide-below-800">© 2025 Все права защищены</div>
      </div>

      <div class="footer__col-2">
        <p class="footer__nav-title text--larger text--bold hide-below-800">Навигация</p>
        <a class="footer__nav-link" href="/">Главная</a>
        <a class="footer__nav-link" href="about-company.html">О компании</a>
        <a class="footer__nav-link" href="catalog.html">Каталог</a>
        <a class="footer__nav-link" href="contacts.html">Контакты</a>
      </div>

      <div class="footer__col-3">
        <p class="footer__office-title text--larger text--bold">Офис и склад</p>
        <div class="text-with-icon">
          <img class="text-with-icon__icon" src="img/icons/pin.svg" width="16" height="21">
          <div class="text-with-icon__text-cont text-with-icon--pin__text-cont">
            <span class="text--small text--semibold">223056, Минская обл., Минский р-н, Сеницкий с/с, д. 64, оф. 8</span>
          </div>
        </div>
        <div class="text-with-icon">
          <img class="text-with-icon__icon" src="img/icons/phone.svg" width="21" height="21">
          <div class="text-with-icon__text-cont text-with-icon--pin__text-cont">
            <span class="text--small text--semibold">+375 (29) 305-11-11, <span class="text--bold">+375 (17) 225-76-37 (31)</span></span>
          </div>
        </div>
        <div class="text-with-icon">
          <img class="text-with-icon__icon footer__text-with-icon__icon" src="img/icons/envelope.svg" width="19" height="14">
          <div class="text-with-icon__text-cont text-with-icon--pin__text-cont">
            <span class="text--small text--bold">office@roshma.by</span>
          </div>
        </div>
        <div class="text-with-icon">
          <img class="text-with-icon__icon footer__text-with-icon__icon-2" src="img/icons/clock.svg" width="18" height="18">
          <div class="text-with-icon__text-cont text-with-icon--pin__text-cont">
            <span class="text--small"><span class="text--bold">Пн-Пт:</span> 8:30-17:00, <span class="text--bold">выходные:</span> Сб - Вс</span>
          </div>
        </div>
        <p class="link-social-cont link-social-cont--farther link-social-cont--footer show-below-800--flex">
          <a href="javascript:void(0)" class="link-social link-social--whatsapp link-social--mob">
            <img src="img/icons/whatsapp.svg" width="24" height="24" alt="Ссылка на Whatsapp">
          </a>
          <a href="javascript:void(0)" class="link-social link-social--viber link-social--mob">
            <img src="img/icons/viber.svg" width="13" height="14" alt="Ссылка на Viber">
          </a>
          <a href="javascript:void(0)" class="link-social link-social--telegram link-social--mob">
            <img src="img/icons/telegram.svg" width="24" height="24" alt="Ссылка на Telegram">
          </a>
        </p>
      </div>

      <div class="footer__col-4 show-below-800">
        <div class="footer__copyright" style="color: #707070;">© 2025 Все права защищены</div>
      </div>
    </div>
  </div>
</footer>

<div id="overlay" class="overlay"></div>
<nav id="nav" class="nav">
  <div class="nav__row--btn-close">
    <button id="navBtnClose" class="btn-nav-close" type="button"></button>
  </div>
  <div class="nav__row"><a class="nav__link" href="/">ГЛАВНАЯ</a></div>
  <div class="nav__row"><a class="nav__link" href="about-company.html">О КОМПАНИИ</a></div>
  <div class="nav__row"><a class="nav__link" href="catalog.html">КАТАЛОГ</a></div>
  <div class="nav__row"><a class="nav__link" href="contacts.html">КОНТАКТЫ</a></div>
</nav>

<nav id="navMob" class="nav-mob">
  <div class="nav-mob__row__btns">
    <button class="btn-nav-close btn-nav-search">
      <svg width="28" height="28" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M8.66004 17.3226C13.4339 17.3226 17.3201 13.4359 17.3201 8.66131C17.3201 3.88674 13.4339 0 8.66004 0C3.88618 0 0 3.88674 0 8.66131C0 13.4359 3.88618 17.3226 8.66004 17.3226ZM8.66004 2.03317C12.3124 2.03317 15.2872 5.00499 15.2872 8.66131C15.2872 12.3176 12.3158 15.2894 8.66004 15.2894C5.00426 15.2894 2.03288 12.3176 2.03288 8.66131C2.03288 5.00499 5.00764 2.03317 8.66004 2.03317Z" fill="#DF2623"/>
        <path d="M14.102 15.5386C13.705 15.1416 13.705 14.498 14.102 14.101C14.4989 13.704 15.1425 13.704 15.5394 14.101L20.7023 19.2646C21.0992 19.6616 21.0992 20.3052 20.7023 20.7022C20.3053 21.0992 19.6618 21.0993 19.2648 20.7022L14.102 15.5386Z" fill="#DF2623"/>
      </svg>
    </button>
    <button id="btnNavCloseMob" class="btn-nav-close"></button>
  </div>

  <div class="nav__row"><a class="nav__link" href="/">ГЛАВНАЯ</a></div>
  <div class="nav__row"><a class="nav__link" href="about-company.html">О КОМПАНИИ</a></div>
  <div class="nav__row"><a class="nav__link" href="catalog.html">КАТАЛОГ</a></div>
  <div class="nav__row nav__row__some-mb"><a class="nav__link" href="contacts.html">КОНТАКТЫ</a></div>

  <div class="text-with-icon nav__row-2">
    <img class="text-with-icon__icon" src="img/icons/phone.svg" width="21" height="21">
    <div class="text-with-icon__text-cont text-with-icon__adjust-1">
      <a style="text-decoration: none;" href="tel:+375293051111" class="text--semibold">+375 (29) 305-11-11</a>
    </div>
  </div>
  <div class="text-with-icon nav__row-2">
    <img class="text-with-icon__icon" src="img/icons/envelope.svg" width="24" height="17">
    <div class="text-with-icon__text-cont text-with-icon__adjust-2">
      <span class="text--semibold">office@roshma.by</span>
    </div>
  </div>

  <p class="link-social-cont link-social-cont--farther nav__row-2 nav__row-2__adjust-1">
    <a href="javascript:void(0)" class="link-social link-social--whatsapp link-social--mob">
      <img src="img/icons/whatsapp.svg" width="24" height="24" alt="Ссылка на Whatsapp">
    </a>
    <a href="javascript:void(0)" class="link-social link-social--viber link-social--mob">
      <img src="img/icons/viber.svg" width="13" height="14" alt="Ссылка на Viber">
    </a>
    <a href="javascript:void(0)" class="link-social link-social--telegram link-social--mob">
      <img src="img/icons/telegram.svg" width="24" height="24" alt="Ссылка на Telegram">
    </a>
  </p>

  <div class="nav__row nav__row__some-mb"><a id="gal" class="nav__link" href="javascript:void(0)">Включить галочку</a></div>
</nav>

<input type="checkbox" class="gal">

<script>
  // TODO: put this into main.js and then think how to handle TypeErrors when an element is absent
  /** CATALOG CATEGORIES TOGGLE **/
  const btnKisti = document.getElementById('kisti')
  const btnAbraziv = document.getElementById('abraziv')
  const btnValiki = document.getElementById('valiki')
  const btnVspomogat = document.getElementById('vspomogat')
  const btnNozhi = document.getElementById('nozhi')
  const titleSection = document.getElementById('titleSection')
  const curCar = 'kisti'  // TODO: unused mb del?
  const catBtns = [btnKisti, btnAbraziv, btnValiki, btnVspomogat, btnNozhi]
  for (const btn of catBtns) {
    btn.onclick = () => {
      document.querySelector('.q--active').classList.remove('q--active')
      btn.classList.add('q--active')
      titleSection.textContent = btn.textContent
    }
  }

  /** LIST VIEW LOGIC **/
  const LIST_VIEW_STATE = {
    SHOW_FULL_LIST: 'SHOW_FULL_LIST',
    SHOW_IN_SLIDER: 'SHOW_IN_SLIDER'
  }
  let listViewState = LIST_VIEW_STATE.SHOW_FULL_LIST
  let showFullListColsCount = 4
  if (window.innerWidth <= 830) {
    showFullListColsCount = 3
  }
  if (window.innerWidth <= 670) {
    listViewState = LIST_VIEW_STATE.SHOW_IN_SLIDER
  }

  if (listViewState === LIST_VIEW_STATE.SHOW_IN_SLIDER) {
    const firstTList = document.querySelector('.t-list')
    const secondTList = document.querySelector('.t-list--no-stretch')
    const fragment = document.createDocumentFragment()
    for (const t of secondTList.children) {
      const clone = t.cloneNode(true)
      fragment.appendChild(clone)
    }
    firstTList.appendChild(fragment)
    secondTList.remove()

    const collapseBtn = document.getElementById('collapse')
    collapseBtn.style.display = 'block'
    collapseBtn.onclick = () => {
      listViewState = listViewState === LIST_VIEW_STATE.SHOW_IN_SLIDER ? LIST_VIEW_STATE.SHOW_FULL_LIST : LIST_VIEW_STATE.SHOW_IN_SLIDER

      if (listViewState === LIST_VIEW_STATE.SHOW_FULL_LIST) {
        firstTList.classList.add('t-list--return')
        collapseBtn.innerHTML = '<b>СВЕРНУТЬ СПИСОК</b>'
        collapseBtn.classList.remove('btn-collapse--show')
        collapseBtn.classList.add('btn-collapse--collapse')
      } else if (listViewState === LIST_VIEW_STATE.SHOW_IN_SLIDER) {
        firstTList.classList.remove('t-list--return')
        collapseBtn.innerHTML = '<b>ОТКРЫТЬ ВЕСЬ СПИСОК</b>'
        collapseBtn.classList.remove('btn-collapse--collapse')
        collapseBtn.classList.add('btn-collapse--show')
        smoothScrollTo(document.getElementById('qs').offsetTop - 30, 800)
      }
    }
  }

  /** COLLAPSE BTN ON DESKTOP **/
  const collapseDesk = document.getElementById('collapseDesk')
  


  function smoothScrollTo(targetPosition, duration) {
    const startPosition = window.pageYOffset;
    const distance = targetPosition - startPosition;
    let startTime = null;
    
    function animation(currentTime) {
      if (!startTime) startTime = currentTime;
      const timeElapsed = currentTime - startTime;
      const progress = Math.min(timeElapsed / duration, 1);
      
      // Easing function (easeInOutQuad)
      const ease = progress < 0.5 
      ? 2 * progress * progress 
      : 1 - Math.pow(-2 * progress + 2, 2) / 2;
      
      window.scrollTo(0, startPosition + (distance * ease));
      
      if (timeElapsed < duration) {
        requestAnimationFrame(animation);
      }
    }
    
    requestAnimationFrame(animation);
  }
</script>

</body>
</html>