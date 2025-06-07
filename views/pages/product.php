<?php

$title = 'Абразивные алмазные материалы и оснастка - Круг наждачный лепестковый 125х22, 2мм, “СТАНДАРТ” Р100 | Sprava';
$pageName = 'product';
$bodyClass = 'page--product';
load('views/parts/header.php', ['title' => $title, 'pageName' => $pageName, 'bodyClass' => $bodyClass]);

?>
<style>
  .product-slider {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    /* padding-top: 8px; */
    /* padding-bottom: 8px; */
  }

  .product-slider__btn {
    background-color: transparent;
    border: none;
    cursor: pointer;
    position: relative;
  }
  .product-slider__btn--prev {
    bottom: 5px;
  }
  .product-slider__btn--next {
    position: relative;
    top: 5px;
  }
  .product-slider__btn--inactive svg path {
    stroke: #D8D3D3;
  }

  .product-slider__track {
    display: grid;
    row-gap: 9px;
    max-height: 471px;
    overflow-x: hidden;
    overflow-y: hidden;
    padding-left: 5px;
    padding-top: 4px;
    padding-bottom: 4px;
  }
  @media (max-width: 1058px) {
    .product-slider__track {
      
    }
  }
  .product-slider__track__img-cont {
    width: 75px;
    height: 87px;
    box-sizing: border-box;
    display: flex;
    align-items: center;
    cursor: pointer;
    border-radius: 20px;
    /* outline: 1px solid #E7E3E3; */
  }
  .product-slider__track__img-cont--active {
    outline: 2px solid #FEDE32;
  }
  .product-slider__track__img-cont img {
    width: 88%;
    width: 81%;
    /* object-fit: contain; */
    margin: 0 auto;
    display: block;
  }
</style>
<body class="<?= $bodyClass ?>">
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

<section class="section-design--about">
  <div class="cont yellow">
    <nav>
      <a class="yellow__link" href="/">Главная</a>
      <a class="yellow__link" href="catalog.html">Каталог</a>
      <a class="yellow__link yellow__link--abraziv" href="catalog.html">Абразивные алмазные материалы и оснастка</a>
      <a class="yellow__link yellow__link--active" href="product.html">Круг наждачный лепестковый</a>
    </nav>
  </div>
</section>

<section>
  <div class="cont">
    <div class="product product--hit">
      <div class="product-slider">
        <button id="btnPrev" class="product-slider__btn product-slider__btn--inactive product-slider__btn--prev" disabled>
          <svg width="25" height="15" viewBox="0 0 25 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M23 12.9644L13.2234 2.7554C12.8292 2.3438 12.1713 2.34434 11.7778 2.75657L2 13" stroke-width="3" stroke="#494547" />
          </svg>
        </button>
        <div id="track" class="product-slider__track">
          <div class="product-slider__track__img-cont product-slider__track__img-cont--active">
            <img src="img/catalog-normal-res/krug-w-logo.png">
          </div>
          <div class="product-slider__track__img-cont">
            <img src="img/product/2897-0125-10_resized.jpg">
          </div>
          <div class="product-slider__track__img-cont">
            <img src="img/product/2897-0125-10_resized.jpg">
          </div>
          <div class="product-slider__track__img-cont">
            <img src="img/product/2897-0125-10_resized.jpg">
          </div>
          <div class="product-slider__track__img-cont">
            <img src="img/product/2897-0125-10_resized.jpg">
          </div>

          <div class="product-slider__track__img-cont">
            <img src="img/product/2812-0125-10_resized.jpg">
          </div>
          <div class="product-slider__track__img-cont">
            <img src="img/product/2812-0125-12_2_resized.jpg">
          </div>
          <div class="product-slider__track__img-cont">
            <img src="img/catalog-normal-res/krug-w-logo.png">
          </div>
          <div class="product-slider__track__img-cont">
            <img src="img/catalog-normal-res/krug-w-logo.png">
          </div>
        </div>
        <button id="btnNext" class="product-slider__btn product-slider__btn--next">
          <svg width="23" height="13" viewBox="0 0 23 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M22 1.03559L12.2234 11.2446C11.8292 11.6562 11.1713 11.6557 10.7778 11.2434L1 1" stroke="#494547" stroke-width="2.62591"/>
          </svg>
        </button>
      </div>
      <div></div>
      <div class="product__col-img">
        <img id="showingImg" src="img/catalog-normal-res/krug-w-logo.png" alt="Круг наждачный">
      </div>
      <div></div>
      <div class="product__col-text">
        <p class="product__title">Круг наждачный лепестковый, 125х22, 2мм, “СТАНДАРТ” Р100</p>
        <p class="product__art text--larger">Артикул: 0795-0224-10</p>
        <p class="product__price"><b>3.85 BYN (с НДС 20%) / шт</b></p>
        <p class="product__detail text--larger"><span class="product__detail__1">Единица измерения</span> <span class="product__detail__2">Шт.</span></p>
        <p class="product__detail product__detail--last text--larger"><span class="product__detail__1">Фасовка</span> <span class="product__detail__2">10</span></p>
        <p class="product__mb">
          <button class="btn product__btn" type="button"><b>СКАЧАТЬ ПРАЙС</b></button>
          <button class="btn product__btn product__btn--outlined t__btn" type="button"><b>ПОСМОТРЕТЬ ПРАЙС</b></button>
        </p>
        <a class="product__go-to-cat text--larger" href="catalog.html">Перейти в каталог</a>
      </div>
    </div>
    <div class="product__info">
      <button id="desc" class="product__info__btn product__info__btn--active">Описание</button>
      <button id="details" class="product__info__btn">Детали</button>
    </div>
    <div id="contentsDesc" class="product__info__contents product__info__contents--active">
      <p>Для шлифования металлических и деревянных поверхностей.</p>
    </div>
    <div id="contentsDetails" class="product__info__contents">
      <p>Какой-то другой текст.</p>
    </div>
  </div>
</section>

<script>
  // TODO: put this into main
  const btnDesc = document.getElementById('desc')
  const btnDetails = document.getElementById('details')
  const contentsDesc = document.getElementById('contentsDesc')
  const contentsDetails = document.getElementById('contentsDetails')
  const btnsWContents = [[btnDesc, contentsDesc], [btnDetails, contentsDetails]]
  for (const btnWContent of btnsWContents) {
    btnWContent[0].onclick = () => {
      document.querySelector('.product__info__btn--active').classList.remove('product__info__btn--active')
      document.querySelector('.product__info__contents--active').classList.remove('product__info__contents--active')
      btnWContent[0].classList.add('product__info__btn--active')
      btnWContent[1].classList.add('product__info__contents--active')
    }
  }
</script>

<?php load('views/parts/footer.php') ?>