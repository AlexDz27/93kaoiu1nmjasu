<?php

$title = 'Sprava | Каталог';
$pageName = 'catalog';
$bodyClass = 'catalog';
load('views/parts/header.php', ['title' => $title, 'pageName' => $pageName, 'bodyClass' => $bodyClass, 'lowDb' => $lowDb]);

?>
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
          <div class="t-list__ts">
            <?php $count = count($products['Кисти малярные']); ?>
            <?php for ($i = 0; $i <= 15; $i++): $product = $products['Кисти малярные']["$i"]; ?>
              <div class="t <?= $product['isHit'] ? 't--hit' : '' ?>">
                <p class="t__iz"><?= $i + 1 ?> из <?= $count ?></p>
                <div class="t__body">
                  <div class="t__img-cont">
                    <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="<?= $product['model'] . ', ' . $product['variant'] ?>">
                  </div>
                  <div class="t__text">
                    <p><?= $product['model'] . ', ' . $product['variant'] ?></p>
                    <p class="text--semibold"><?= $product['price'] ?> BYN<br>(с НДС 20%) / <?= $product['unit'] ?></p>
                    <a class="btn card__btn t__btn" href="<?= $product['uri'] ?>"><b>Подробнее</b></a>
                  </div>
                </div>
              </div>
            <?php endfor ?>
          </div>
          <div class="t-list__slider-btns">
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
          </div>
          <div class="t-list__open-full-list-btn-cont">
            <button id="collapseDesk" class="btn product__btn btn-collapse btn-collapse--desk btn-collapse--show" style=""><b>ОТКРЫТЬ ВЕСЬ СПИСОК</b></button>
          </div>
        </div>

        <div class="t-list t-list--no-stretch">
          <div class="t-list__ts">
            <?php for ($i = 16; $i < $count; $i++): $product = $products['Кисти малярные']["$i"]; ?>
              <div class="t <?= $product['isHit'] ? 't--hit' : '' ?>">
                <p class="t__iz"><?= $i + 1 ?> из <?= $count ?></p>
                <div class="t__body">
                  <div class="t__img-cont">
                    <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="<?= $product['model'] . ', ' . $product['variant'] ?>">
                  </div>
                  <div class="t__text">
                    <p><?= $product['model'] . ', ' . $product['variant'] ?></p>
                    <p class="text--semibold"><?= $product['price'] ?> BYN<br>(с НДС 20%) / <?= $product['unit'] ?></p>
                    <a class="btn card__btn t__btn" href="<?= $product['uri'] ?>"><b>Подробнее</b></a>
                  </div>
                </div>
              </div>
            <?php endfor ?>
          </div>
          <div class="t-list__slider-btns">
            <div class="slider__btns">
              <button id="btnPrev" class="btn-slider">
                <svg width="26" height="26" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.15685 0.798306L0.792893 7.27983C0.402369 7.67757 0.402369 8.32243 0.792893 8.72017L7.15686 15.2017C7.54738 15.5994 8.18055 15.5994 8.57107 15.2017C8.96159 14.804 8.96159 14.1591 8.57107 13.7614L3.91421 9.01848L24.5 9.01847C25.0523 9.01847 25.5 8.56249 25.5 8C25.5 7.43751 25.0523 6.98153 24.5 6.98153L3.91421 6.98153L8.57107 2.23864C8.96159 1.84091 8.96159 1.19604 8.57107 0.798306C8.18054 0.400567 7.54738 0.400567 7.15685 0.798306Z" fill="#FEDE32"/>
                </svg>
              </button>
              <div id="dots" class="slider__dots slider__dots--cat">
                <span class="slider__dots__dot"></span>
                <span class="slider__dots__dot slider__dots__dot--active"></span>
              </div>
              <button id="btnNext" class="btn-slider btn-slider--inactive" disabled>
                <svg width="26" height="26" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M18.8431 0.798306L25.2071 7.27983C25.5976 7.67757 25.5976 8.32243 25.2071 8.72017L18.8431 15.2017C18.4526 15.5994 17.8195 15.5994 17.4289 15.2017C17.0384 14.804 17.0384 14.1591 17.4289 13.7614L22.0858 9.01848L1.5 9.01847C0.947714 9.01847 0.499999 8.56249 0.499999 8C0.499999 7.43751 0.947715 6.98153 1.5 6.98153L22.0858 6.98153L17.4289 2.23864C17.0384 1.84091 17.0384 1.19604 17.4289 0.798306C17.8195 0.400567 18.4526 0.400567 18.8431 0.798306Z" fill="#FEDE32"/>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>

      <button id="collapse" class="btn product__btn btn-collapse btn-collapse--show"><b>ОТКРЫТЬ ВЕСЬ СПИСОК</b></button>
    </div>  
  </div>
</section>

<template id="tmpl-kisti">
  <div class="t-list">
    <?php $count = count($products['Кисти малярные']); ?>
    <?php for ($i = 0; $i <= 15; $i++): $product = $products['Кисти малярные']["$i"]; ?>
      <div class="t <?= $product['isHit'] ? 't--hit' : '' ?>">
        <p class="t__iz"><?= $i + 1 ?> из <?= $count ?></p>
        <div class="t__body">
          <div class="t__img-cont">
            <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="<?= $product['model'] . ', ' . $product['variant'] ?>">
          </div>
          <div class="t__text">
            <p><?= $product['model'] . ', ' . $product['variant'] ?></p>
            <p class="text--semibold"><?= $product['price'] ?> BYN<br>(с НДС 20%) / <?= $product['unit'] ?></p>
            <a class="btn card__btn t__btn" href="<?= $product['uri'] ?>"><b>Подробнее</b></a>
          </div>
        </div>
      </div>
    <?php endfor ?>
  </div>

  <div class="t-list t-list--no-stretch">
    <?php for ($i = 16; $i < $count; $i++): $product = $products['Кисти малярные']["$i"]; ?>
      <div class="t">
        <p class="t__iz"><?= $i + 1 ?> из <?= $count ?></p>
        <div class="t__body">
          <div class="t__img-cont">
            <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="<?= $product['model'] . ', ' . $product['variant'] ?>">
          </div>
          <div class="t__text">
            <p><?= $product['model'] . ', ' . $product['variant'] ?></p>
            <p class="text--semibold"><?= $product['price'] ?> BYN<br>(с НДС 20%) / <?= $product['unit'] ?></p>
            <a class="btn card__btn t__btn" href="<?= $product['uri'] ?>"><b>Подробнее</b></a>
          </div>
        </div>
      </div>
    <?php endfor ?>
  </div>
</template>
<template id="tmpl-abraziv">
  <div class="t-list t-list--no-stretch">
    <?php $count = count($products['Абразивные алмазные материалы и оснастка']); ?>
    <?php for ($i = 0; $i <= 15; $i++): $product = $products['Абразивные алмазные материалы и оснастка']["$i"]; ?>
      <div class="t <?= $product['isHit'] ? 't--hit' : '' ?>">
        <p class="t__iz"><?= $i + 1 ?> из <?= $count ?></p>
        <div class="t__body">
          <div class="t__img-cont">
            <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="<?= $product['model'] . ', ' . $product['variant'] ?>">
          </div>
          <div class="t__text">
            <p><?= $product['model'] . ', ' . $product['variant'] ?></p>
            <p class="text--semibold"><?= $product['price'] ?> BYN<br>(с НДС 20%) / <?= $product['unit'] ?></p>
            <a class="btn card__btn t__btn" href="<?= $product['uri'] ?>"><b>Подробнее</b></a>
          </div>
        </div>
      </div>
    <?php endfor ?>
  </div>

  <div class="t-list t-list--no-stretch">
    <?php for ($i = 16; $i < 32; $i++): $product = $products['Абразивные алмазные материалы и оснастка']["$i"]; ?>
      <div class="t">
        <p class="t__iz"><?= $i + 1 ?> из <?= $count ?></p>
        <div class="t__body">
          <div class="t__img-cont">
            <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="<?= $product['model'] . ', ' . $product['variant'] ?>">
          </div>
          <div class="t__text">
            <p><?= $product['model'] . ', ' . $product['variant'] ?></p>
            <p class="text--semibold"><?= $product['price'] ?> BYN<br>(с НДС 20%) / <?= $product['unit'] ?></p>
            <a class="btn card__btn t__btn" href="<?= $product['uri'] ?>"><b>Подробнее</b></a>
          </div>
        </div>
      </div>
    <?php endfor ?>
  </div>

  <div class="t-list t-list--no-stretch">
    <?php for ($i = 32; $i < $count; $i++): $product = $products['Абразивные алмазные материалы и оснастка']["$i"]; ?>
      <div class="t">
        <p class="t__iz"><?= $i + 1 ?> из <?= $count ?></p>
        <div class="t__body">
          <div class="t__img-cont">
            <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="<?= $product['model'] . ', ' . $product['variant'] ?>">
          </div>
          <div class="t__text">
            <p><?= $product['model'] . ', ' . $product['variant'] ?></p>
            <p class="text--semibold"><?= $product['price'] ?> BYN<br>(с НДС 20%) / <?= $product['unit'] ?></p>
            <a class="btn card__btn t__btn" href="<?= $product['uri'] ?>"><b>Подробнее</b></a>
          </div>
        </div>
      </div>
    <?php endfor ?>
  </div>
</template>
<template id="tmpl-valiki">
  <div class="t-list">
    <?php $count = count($products['Валики малярные']); ?>
    <?php for ($i = 0; $i <= 15; $i++): $product = $products['Валики малярные']["$i"]; ?>
      <div class="t <?= $product['isHit'] ? 't--hit' : '' ?>">
        <p class="t__iz"><?= $i + 1 ?> из <?= $count ?></p>
        <div class="t__body">
          <div class="t__img-cont">
            <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="<?= $product['model'] . ', ' . $product['variant'] ?>">
          </div>
          <div class="t__text">
            <p><?= $product['model'] . ', ' . $product['variant'] ?></p>
            <p class="text--semibold"><?= $product['price'] ?> BYN<br>(с НДС 20%) / <?= $product['unit'] ?></p>
            <a class="btn card__btn t__btn" href="<?= $product['uri'] ?>"><b>Подробнее</b></a>
          </div>
        </div>
      </div>
    <?php endfor ?>
  </div>

  <div class="t-list t-list--no-stretch">
    <?php for ($i = 16; $i < $count; $i++): $product = $products['Валики малярные']["$i"]; ?>
      <div class="t">
        <p class="t__iz"><?= $i + 1 ?> из <?= $count ?></p>
        <div class="t__body">
          <div class="t__img-cont">
            <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="<?= $product['model'] . ', ' . $product['variant'] ?>">
          </div>
          <div class="t__text">
            <p><?= $product['model'] . ', ' . $product['variant'] ?></p>
            <p class="text--semibold"><?= $product['price'] ?> BYN<br>(с НДС 20%) / <?= $product['unit'] ?></p>
            <a class="btn card__btn t__btn" href="<?= $product['uri'] ?>"><b>Подробнее</b></a>
          </div>
        </div>
      </div>
    <?php endfor ?>
  </div>
</template>
<template id="tmpl-nozhi">
  <div class="t-list">
    <?php $count = count($products['Ножи и лезвия']); ?>
    <?php for ($i = 0; $i < $count; $i++): $product = $products['Ножи и лезвия']["$i"]; ?>
      <div class="t <?= $product['isHit'] ? 't--hit' : '' ?>">
        <p class="t__iz"><?= $i + 1 ?> из <?= $count ?></p>
        <div class="t__body">
          <div class="t__img-cont">
            <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="<?= $product['model'] . ', ' . $product['variant'] ?>">
          </div>
          <div class="t__text">
            <p><?= $product['model'] . ', ' . $product['variant'] ?></p>
            <p class="text--semibold"><?= $product['price'] ?> BYN<br>(с НДС 20%) / <?= $product['unit'] ?></p>
            <a class="btn card__btn t__btn" href="<?= $product['uri'] ?>"><b>Подробнее</b></a>
          </div>
        </div>
      </div>
    <?php endfor ?>
  </div>
</template>
<template id="tmpl-vspomogat">
  <div class="t-list">
    <?php $count = count($products['Вспомогательный инструмент']); ?>
    <?php for ($i = 0; $i <= 15; $i++): $product = $products['Вспомогательный инструмент']["$i"]; ?>
      <div class="t <?= $product['isHit'] ? 't--hit' : '' ?>">
        <p class="t__iz"><?= $i + 1 ?> из <?= $count ?></p>
        <div class="t__body">
          <div class="t__img-cont">
            <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="<?= $product['model'] . ', ' . $product['variant'] ?>">
          </div>
          <div class="t__text">
            <p><?= $product['model'] . ', ' . $product['variant'] ?></p>
            <p class="text--semibold"><?= $product['price'] ?> BYN<br>(с НДС 20%) / <?= $product['unit'] ?></p>
            <a class="btn card__btn t__btn" href="<?= $product['uri'] ?>"><b>Подробнее</b></a>
          </div>
        </div>
      </div>
    <?php endfor ?>
  </div>

  <div class="t-list t-list--no-stretch">
    <?php for ($i = 16; $i < $count; $i++): $product = $products['Вспомогательный инструмент']["$i"]; ?>
      <div class="t">
        <p class="t__iz"><?= $i + 1 ?> из <?= $count ?></p>
        <div class="t__body">
          <div class="t__img-cont">
            <img width="150" height="150" src="img/catalog-normal-res/kist.png" alt="<?= $product['model'] . ', ' . $product['variant'] ?>">
          </div>
          <div class="t__text">
            <p><?= $product['model'] . ', ' . $product['variant'] ?></p>
            <p class="text--semibold"><?= $product['price'] ?> BYN<br>(с НДС 20%) / <?= $product['unit'] ?></p>
            <a class="btn card__btn t__btn" href="<?= $product['uri'] ?>"><b>Подробнее</b></a>
          </div>
        </div>
      </div>
    <?php endfor ?>
  </div>
</template>

<script>
  // TODO: put this into main.js and then think how to handle TypeErrors when an element is absent
  const CATALOG_track = document.getElementById('track')

  /** CATALOG CATEGORIES TOGGLE **/
  let currentCategory = 'kisti'

  const btnKisti = document.getElementById('kisti')
  const btnAbraziv = document.getElementById('abraziv')
  const btnValiki = document.getElementById('valiki')
  const btnVspomogat = document.getElementById('vspomogat')
  const btnNozhi = document.getElementById('nozhi')
  const titleSection = document.getElementById('titleSection')
  const catBtns = [btnKisti, btnAbraziv, btnValiki, btnVspomogat, btnNozhi]
  for (const btn of catBtns) {
    btn.onclick = () => {
      currentCategory = btn.id
      document.querySelectorAll('.t-list').forEach(t => t.remove())
      CATALOG_track.append(document.getElementById('tmpl-' + currentCategory).content.cloneNode(true))

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
  let listViewState = LIST_VIEW_STATE.SHOW_IN_SLIDER
  let showColsCount = 4
  if (window.innerWidth <= 830) {
    showColsCount = 3
  }

  // TODO: mb this won't work cuz now i use qsAll(.t-list)
  const firstTList = document.querySelector('.t-list')
  const secondTList = document.querySelector('.t-list--no-stretch')
  if (window.innerWidth <= 670) {
    tListManipulations()
  }

  const CATALOG_sliderBtns = document.querySelector('.slider__btns')
  const collapseBtn = document.getElementById('collapse')
  const collapseDeskBtn = document.getElementById('collapseDesk')
  Array.from([collapseBtn, collapseDeskBtn]).forEach(i => {
    i.onclick = () => {
      listViewState = listViewState === LIST_VIEW_STATE.SHOW_IN_SLIDER ? LIST_VIEW_STATE.SHOW_FULL_LIST : LIST_VIEW_STATE.SHOW_IN_SLIDER

      if (listViewState === LIST_VIEW_STATE.SHOW_FULL_LIST) {
        if (window.innerWidth > 670) tListManipulations()
        firstTList.classList.add('t-list--return')
        CATALOG_sliderBtns.classList.add('slider__btns--hidden')
        i.innerHTML = '<b>СВЕРНУТЬ СПИСОК</b>'
        i.classList.remove('btn-collapse--show')
        i.classList.add('btn-collapse--collapse')
      } else if (listViewState === LIST_VIEW_STATE.SHOW_IN_SLIDER) {
        if (window.innerWidth > 670) undoTListManipulations()
        firstTList.classList.remove('t-list--return')
        CATALOG_sliderBtns.classList.remove('slider__btns--hidden')
        i.innerHTML = '<b>ОТКРЫТЬ ВЕСЬ СПИСОК</b>'
        i.classList.remove('btn-collapse--collapse')
        i.classList.add('btn-collapse--show')
        smoothScrollTo(document.getElementById('qs').offsetTop - 30, 800)
      }
    }
  })
  function tListManipulations() {
    const fragment = document.createDocumentFragment()
    for (const t of secondTList.children) {
      const clone = t.cloneNode(true)
      fragment.appendChild(clone)
    }
    firstTList.appendChild(fragment)
    secondTList.remove()
  }
  function undoTListManipulations() {
    const fragment = document.createDocumentFragment()
    console.log(firstTList.children.length)
    for (let i = firstTList.children.length - 1; i > 15; i--) {
      const t = firstTList.children[i]
      const clone = t.cloneNode(true)
      fragment.appendChild(clone)

      t.remove()
    }
    const newSecondTList = document.createElement('div')
    newSecondTList.classList.add('t-list', 't-list--no-stretch')
    newSecondTList.appendChild(fragment)
    CATALOG_track.appendChild(newSecondTList)
  }


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

<?php load('views/parts/footer.php') ?>