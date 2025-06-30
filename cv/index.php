<?php

$title = 'PHP Developer';
$expYears = 6;

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main.css">
  <title>Алексей Дзюба – <?= $title ?></title>
</head>
<body>

<header class="header">
  <div class="cont">
    <h1 class="header__name">Алексей Дзюба</h1>
    <h2 class="header__title"><?= $title ?></h2>
    <section class="header__links">
      <a href="mailto:alexeydzyuba27@gmail.com" class="header__link">
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
          <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
        </svg>
        alexeydzyuba27@gmail.com
      </a>
      <a href="tel:+375298191624" class="header__link">
        <svg width="10" height="10" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
        </svg>
        +375 (29) 819 16 24
      </a>
      <a href="//t.me/rain_xxxx" class="header__link">
        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09"/>
        </svg>
        @rain_xxxx
      </a>
      <a class="header__link">
        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
          <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
        </svg>
        Кобрин, Беларусь
      </a>
    </section>

    <!-- TODO: avatar and change layout for that) -->
  </div>
</header>

<main class="main cont">
  <div class="main__col">
    <h2 class="main__col__title">Опыт работы (<?= $expYears ?>+ лет)</h2>

    <section class="workplace-experience">
      <a href="//kiberon.kz" target="_blank">
        <h3 class="workplace-experience__workplace-name">
          Kiberon
          <svg class="workplace-experience__workplace-name__icon" width="21" height="21" fill="currentColor" viewBox="0 0 16 16">
            <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1 1 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4 4 0 0 1-.128-1.287z"/>
            <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243z"/>
          </svg>
        </h3>
      </a>
      <p class="workplace-experience__time">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-calendar-week-fill" viewBox="0 0 16 16">
          <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2M9.5 7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m3 0h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5M2 10.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5"/>
        </svg>
        <span class="workplace-experience__time__text">2025.03 — 2025.06</span>
      </p>
      <p class="workplace-experience__project-desc">Сервис, который показывает юридические и экономические данные о компаниях в СНГ.</p>
      <ul class="workplace-experience__list">
        <li>
          <a href="https://www.notion.so/Project-1d04122274e180afbfdeebf4b7c83e67?source=copy_link" class="workplace-experience__link" target="_blank">решал проблемы</a>
          архитектуры вместе с командой и предлагал решения; собирал бизнес-требования
        </li>
        <li>
          <a href="https://github.com/AlexDz27/php-money-format/blob/main/money-format.php" class="workplace-experience__link" target="_blank">написал функцию</a>
          для преобразования чисел типа 20025.05 в "20 тыс. 25 рублей 5 копеек"
        </li>
        <li>
          <a href="https://github.com/AlexDz27/php-arr-db-updater/blob/main/PhpArrDbWriter.php" class="workplace-experience__link" target="_blank">написал класс</a>
          небольшой для простых in-memory CRUD-операций над PHP-массивом. Используется рекурсия. Выполняет задачи по хранению данных (а-ля JSON), но используется обычный PHP-массив
        </li>
      </ul>
    </section>

    <section class="workplace-experience">
      <a href="//itechartgroup.by" target="_blank">
        <h3 class="workplace-experience__workplace-name">
          iTechArt
          <svg class="workplace-experience__workplace-name__icon" width="21" height="21" fill="currentColor" viewBox="0 0 16 16">
            <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1 1 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4 4 0 0 1-.128-1.287z"/>
            <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243z"/>
          </svg>
        </h3>
      </a>
      <p class="workplace-experience__time">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-calendar-week-fill" viewBox="0 0 16 16">
          <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2M9.5 7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m3 0h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5M2 10.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5"/>
        </svg>
        <span class="workplace-experience__time__text">2021.01 — 2022.01</span>
      </p>
      <p class="workplace-experience__project-desc">Outstaff в немецкую e-commerce компанию PAYONE.</p>
      <ul class="workplace-experience__list">
        <li>
          писал небольшие full-stack приложения на React/Vue и PHP/Node.js с документацией:
          <ul>
            <li><a href="//github.com/AlexDz27/paytest" target="_blank">приложение</a> на Vue.js для тестирования запросов, которые идут на PAYONE API</li>
            <li><a href="//github.com/AlexDz27/payone-github-issues-assigner-bot" target="_blank">бот</a>, который интегрируется с Github</li>
            <li><a href="//github.com/AlexDz27/payone-github-issues-visualizer-app" target="_blank">front-end</a>, для вышеописанного бота</li>
          </ul>
        </li>
        <li>
          работал с Paypal API
        </li>
        <li>
          занимался менторством Junior PHP разработчика
        </li>
      </ul>
    </section>

    <section class="workplace-experience">
      <a href="//godeltech.com" target="_blank">
        <h3 class="workplace-experience__workplace-name">
          Godel Technologies Europe
          <svg class="workplace-experience__workplace-name__icon" width="21" height="21" fill="currentColor" viewBox="0 0 16 16">
            <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1 1 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4 4 0 0 1-.128-1.287z"/>
            <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243z"/>
          </svg>
        </h3>
      </a>
      <p class="workplace-experience__time">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-calendar-week-fill" viewBox="0 0 16 16">
          <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2M9.5 7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m3 0h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5M2 10.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5"/>
        </svg>
        <span class="workplace-experience__time__text">2022.01 — 2023.06</span>
      </p>
      <p class="workplace-experience__project-desc">Онлайн-магазин товаров для инженеров-строителей, офлайн-точки расположены во многих странах мира.</p>
      <ul class="workplace-experience__list">
        <li>
          писал с нуля слой BFF (Backend-for-Frontend) для одного из модулей на Nest.js
        </li>
        <li>
          фиксинг багов в Next.js – GraphQL приложении
        </li>
        <li>
          писал техническую документацию для проекта
        </li>
      </ul>
    </section>

    <!-- TODO: junior experience and freelance -->
    <section class="workplace-experience">
      <h3 class="workplace-experience__workplace-name">
        Symfa, Intetics, freelance
      </h3>

      <p class="workplace-experience__time">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-calendar-week-fill" viewBox="0 0 16 16">
          <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2M9.5 7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m3 0h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5M2 10.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5"/>
        </svg>
        <span class="workplace-experience__time__text">2017.01 — 2020.01</span>
      </p>
      <p class="workplace-experience__project-desc">Набирался опыта в небольших аутсорс-компаниях и на фрилансе.</p>
      <ul class="workplace-experience__list pt-1-when-print">
        <li>
          работал как Junior Full-stack программист
        </li>
        <li>
          имел опыт общения с заказчиками из СНГ
        </li>
        <li>
          примеры работ на фрилансе:
          <ul>
            <li><a href="//rainlab.by" target="_blank">Сайт-каталог</a> компании "СПРАВА"</li>
            <li><a href="//metida-torg.by" target="_blank">Сайт-каталог</a> компании "Метида-торг"</li>
          </ul>
        </li>
      </ul>
    </section>
  </div>

  <div class="main__col">
    <h2 class="main__col__title">Навыки</h2>

    <section class="skill">
      <p class="skill__name"><span class="skill__name__name">PHP</span> <span class="subskill">ver. 5 – 8.+</span></p>

      <p class="skill__cat">Frameworks</p>
      <div class="subskills">
        <span class="subskill">Laravel</span>
        <span class="subskill">Symfony</span>
        <span class="subskill">Yii 2</span>
      </div>

      <p class="skill__cat">CMSes</p>
      <div class="subskills">
        <span class="subskill">WordPress</span>
        <span class="subskill">OpenCart</span>
        <span class="subskill">Drupal</span>
      </div>

      <p class="skill__cat">Misc</p>
      <div class="subskills">
        <span class="subskill">Composer</span>
        <span class="subskill">PSR</span>
        <span class="subskill">PHPUnit</span>
        <span class="subskill">cURL</span>
      </div>
    </section>

    <section class="skill">
      <p class="skill__name"><span class="skill__name__name">Databases</span></p>

      <p class="skill__cat">SQL</p>
      <div class="subskills">
        <span class="subskill">MySQL</span>
        <span class="subskill">PostgreSQL</span>
        <span class="subskill">SQLite</span>
      </div>

      <p class="skill__cat">NoSQL</p>
      <div class="subskills">
        <span class="subskill">MongoDB</span>
      </div>

      <p class="skill__cat">ORMs</p>
      <div class="subskills">
        <span class="subskill">Doctrine</span>
        <span class="subskill">Eloquent</span>
      </div>
    </section>

    <section class="skill">
      <p class="skill__name"><span class="skill__name__name">Front-end JS + Node.js</span></p>

      <p class="skill__cat">JS</p>
      <div class="subskills">
        <span class="subskill">TypeScript</span>
        <span class="subskill">ES6</span>
        <span class="subskill">fetch; async/await</span>
      </div>

      <br class="di-when-print">

      <p class="skill__cat mt-when-print">Frameworks</p>
      <div class="subskills">
        <span class="subskill">React</span>
        <span class="subskill">Vue</span>
        +
        <span class="subskill">Nest.js</span>
      </div>

      <p class="skill__cat">Libraries</p>
      <div class="subskills">
        <span class="subskill">Splide (slider)</span>
        <span class="subskill">Sortable (drag&drop)</span>
      </div>

      <p class="skill__cat">Misc</p>
      <div class="subskills">
        <span class="subskill">Webpack, Parcel</span>
      </div>
    </section>

    <section class="skill">
      <p class="skill__name"><span class="skill__name__name">Web</span></p>

      <p class="skill__cat">Unix</p>
      <div class="subskills">
        <span class="subskill">Linux</span>
        <span class="subskill">Docker</span>
      </div>

      <p class="skill__cat">In-memory databases</p>
      <div class="subskills">
        <span class="subskill">Redis</span>
      </div>

      <p class="skill__cat">High-load (just theory)</p>

      <p class="skill__cat">Security</p>
      <div class="subskills">
        <span class="subskill">Auth</span>
        <span class="subskill">XSS; CSRF</span>
      </div>
    </section>

    <section class="skill">
      <p class="skill__name"><span class="skill__name__name">Misc</span></p>

      <p class="skill__cat">Git</p>

      <p class="skill__cat">Search engines</p>
      <div class="subskills">
        <span class="subskill">ElasticSearch</span>
      </div>

      <p class="skill__cat">ORMs</p>
      <div class="subskills">
        <span class="subskill">Doctrine</span>
        <span class="subskill">Eloquent</span>
      </div>

      <p class="skill__cat">Other languages</p>
      <div class="subskills">
        <span class="subskill">C++ (junior)</span>
      </div>
    </section>
  </div>
</main>
  
</body>
</html>