<?php

$title = 'Sprava | Контакты';
$pageName = 'contacts';
$bodyClass = 'contacts';
load('views/parts/header.php', ['title' => $title, 'pageName' => $pageName, 'bodyClass' => $bodyClass, 'lowDb' => $lowDb]);

?>
<section class="page-title-cont section-design--about">
  <div class="cont yellow">
    <nav>
      <a class="yellow__link" href="/">Главная</a>
      <a class="yellow__link yellow__link--active" href="contacts.html">Контакты</a>
    </nav>
    <h1 class="text--big yellow__title">Контакты</h1>
  </div>
</section>

<section class="section section--black section--black--more-pt section--black--contacts">
  <div class="cont--mob--fluid yellow shown-below-630">
    <nav>
      <a class="yellow__link" href="/">Главная</a>
      <a class="yellow__link yellow__link--active" href="contacts.html">Контакты</a>
    </nav>
  </div>

  <div class="cont">
    <h2 class="title-section section--black__title-section">Мы всегда рядом с вами!</h2>

    <div class="cont contacts__cont">
      <div class="contacts__col-left">
        <p class="text--big p--lower-margin p--no-mt">ООО “Рошма”</p>
        <p class="text--big p--lower-margin">Адрес офиса и склада:</p>
        <div class="text-with-icon">
          <img class="text-with-icon__icon text-with-icon__icon--more-centered" src="img/icons/pin--larger.svg" width="17" height="23">
          <div class="text-with-icon__text-cont text-with-icon--pin__text-cont">
            <span class="text--larger"><b>223056, Минская обл., Минский р-н, Сеницкий с/с,<br class="contacts__br"> д. 64, оф. 8</b></span>
          </div>
        </div>
        <p class="text--big p--lower-margin">Режим работы:</p>
        <div class="text-with-icon">
          <img class="text-with-icon__icon" src="img/icons/clock.svg" width="20" height="20">
          <div class="text-with-icon__text-cont text-with-icon--pin__text-cont">
            <span class="text--larger">Пн-Пт: <b>8:30-17:00</b>, выходные: <b>суббота, воскресенье</b></span>
          </div>
        </div>
        <p class="text--big p--lower-margin">Телефоны:</p>
        <div class="text-with-icon">
          <img class="text-with-icon__icon" src="img/icons/phone--larger.svg" width="24" height="22">
          <div class="text-with-icon__text-cont text-with-icon--pin__text-cont">
            <span class="text--larger"><b>+375 (29) 305-11-11, +375 (17) 225-76-37,<br> +375 (17) 225-76-31</b></span>
          </div>
        </div>
        <p class="text--big p--lower-margin">E-mail:</p>
        <div class="text-with-icon">
          <img class="text-with-icon__icon text-with-icon__icon--envelope--larger" src="img/icons/envelope--larger.svg" width="24" height="18">
          <div class="text-with-icon__text-cont text-with-icon--pin__text-cont">
            <span class="text--larger"><b>office@roshma.by</b></span>
          </div>
        </div>
        <p class="link-social-cont link-social-cont--farther">
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
  </div>
</section>

<?php load('views/parts/footer.php', ['lowDb' => $lowDb]) ?>