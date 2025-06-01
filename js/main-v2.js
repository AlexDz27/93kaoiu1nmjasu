/** SEARCH **/
const search = document.getElementById('search')
const searchInput = document.getElementById('searchInput')
const searchResults = document.getElementById('searchResults')
searchInput.onfocus = () => {
  search.classList.add('search--active')
}
window.addEventListener('click', (e) => {
  if (search.contains(e.target)) return
  search.classList.remove('search--active')
})

/** DOWNLOAD PRICE BUTTON **/
const btnDownloadPrice = document.getElementById('btnDownloadPrice')
btnDownloadPrice.addEventListener('click', () => {
  btnDownloadPrice.classList.toggle('btn--dropdown--active')
})
window.addEventListener('click', (e) => {
  if (btnDownloadPrice.contains(e.target)) return
  btnDownloadPrice.classList.remove('btn--dropdown--active')
})
/** and same code for mobile **/
const btnDownloadPriceMob = document.getElementById('btnDownloadPriceMob')
btnDownloadPriceMob?.addEventListener('click', () => {
  btnDownloadPriceMob.classList.toggle('btn--dropdown--active')
})
window.addEventListener('click', (e) => {
  if (btnDownloadPriceMob?.contains(e.target)) return
  btnDownloadPriceMob?.classList.remove('btn--dropdown--active')
})

/** NAV **/
const btnNav = document.getElementById('btnNav')
const overlay = document.getElementById('overlay')
const nav = document.getElementById('nav')
const navBtnClose = document.getElementById('navBtnClose')
btnNav.addEventListener('click', () => {
  overlay.classList.add('overlay--db')
  void overlay.offsetWidth
  overlay.classList.add('overlay--blur')

  nav.classList.add('nav--db')
  void nav.offsetWidth
  nav.classList.add('nav--active')
  navBtnClose.focus()
})
navBtnClose.addEventListener('click', () => {
  overlay.classList.remove('overlay--db')
  overlay.classList.remove('overlay--blur')
  nav.classList.remove('nav--db')
  nav.classList.remove('nav--active')
})
overlay.addEventListener('click', () => {
  overlay.classList.remove('overlay--db')
  overlay.classList.remove('overlay--blur')
  nav.classList.remove('nav--db')
  nav.classList.remove('nav--active')
})
/** NAV MOBILE **/
let mode = 'show nav items'  // WARNING: This is important in the mobile search block of code
const btnNavMob = document.getElementById('btnNavMob')
const navMob = document.getElementById('navMob')
const btnNavCloseMob = document.getElementById('btnNavCloseMob')
btnNavMob.onclick = () => {
  navMob.classList.add('nav-mob--active')
}
btnNavCloseMob.onclick = () => {
  if (mode === 'hide nav items') {
    mode = mode === 'show nav items' ? 'hide nav items' : 'show nav items'
    navMobContCont.style.display = mode === 'show nav items' ? 'block' : 'none'
    searchMob.style.display = mode === 'show nav items' ? 'none' : 'inline-block'
    navMobContSearchResults.style.display = 'none'
  } else if (mode === 'show nav items') {
    navMob.classList.remove('nav-mob--active')
  }
}
window.addEventListener('click', (e) => {
  if (btnNavMob.contains(e.target) || navMob.contains(e.target)) return
  navMob.classList.remove('nav-mob--active')
})

const btnNavMobSearch = document.getElementById('btnNavMobSearch')
const navMobCont = document.getElementById('navMobCont')
const navMobContCont = document.getElementById('navMobContCont')
const navMobContSearchResults = document.getElementById('navMobContSearchResults')
const searchMob = document.getElementById('searchMob')
const searchInputMob = document.getElementById('searchInputMob')
btnNavMobSearch.onclick = () => {
  mode = mode === 'show nav items' ? 'hide nav items' : 'show nav items'
  navMobContCont.style.display = mode === 'show nav items' ? 'block' : 'none'
  searchMob.style.display = mode === 'show nav items' ? 'none' : 'inline-block'

  searchInputMob.focus()
  if (searchInputMob.value) {
    navMobContSearchResults.style.display = 'block'
  }
}
searchInputMob.oninput = (e) => {
  if (e.target.value === '') navMobContSearchResults.style.display = 'none'
  else navMobContSearchResults.style.display = 'block'
}

/** ESCAPE: turn off modals **/
window.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') {
    search.classList.remove('search--active')
    
    overlay.classList.remove('overlay--db')
    overlay.classList.remove('overlay--blur')
    nav.classList.remove('nav--db')
    nav.classList.remove('nav--active')
  }
})

/** SLIDER **/
// const track = document.getElementById('track')
// if (track) {
//   const cards = track.children
//   const btnPrev = document.getElementById('btnPrev')
//   const btnNext = document.getElementById('btnNext')
//   const CARD_AND_GAP_WIDTH = 407.5 // .slider__track's children grid-auto-columns + column-gap
//   let slideWindowCount = 0
//   btnPrev.addEventListener('click', () => {
//     slideWindowCount--
//     btnNext.disabled = false
//     if (slideWindowCount === 0) {
//       btnPrev.classList.add('btn-slider--inactive')
//       btnPrev.disabled = true
//     }

//     track.style.transform = `translate3d(-${CARD_AND_GAP_WIDTH * slideWindowCount}px, 0, 0)`

//     btnNext.classList.remove('btn-slider--inactive')
//   })
//   btnNext.addEventListener('click', () => {
//     slideWindowCount++
//     btnPrev.disabled = false
//     console.log(slideWindowCount)
//     if (slideWindowCount === 2) {
//       const fragment = document.createDocumentFragment()
//       let lastCardId = 5
//       for (const card of cards) {
//         const clone = card.cloneNode(true)
//         clone.dataset.cardId = ++lastCardId
//         fragment.appendChild(clone)
//       }
//       track.appendChild(fragment)
//       console.log('done cloning')
//     }
//     if (slideWindowCount === 5) {
//       track.style.transform = `translate3d(-${CARD_AND_GAP_WIDTH * slideWindowCount}px, 0, 0)`
//       setTimeout(() => {
//         for (i = 0; i < 5; i++) {
//           track.firstElementChild.remove()
//         }
//         track.style.transition = 'none'
//         track.style.transform = `translate3d(0px, 0, 0)`
//         slideWindowCount = 0
//       }, 800)
//       setTimeout(() => {
//         track.style.transition = 'transform 400ms cubic-bezier(0.165, 0.84, 0.44, 1)'
//       }, 900)

//       // slideWindowCount = 0
//       // btnPrev.classList.add('btn-slider--inactive')
//       // btnPrev.disabled = true
//       return
//     }

//     track.style.transform = `translate3d(-${CARD_AND_GAP_WIDTH * slideWindowCount}px, 0, 0)`

//     btnPrev.classList.remove('btn-slider--inactive')
//   })
// }

/** YMAPS **/
if (document.getElementById('map')) main()
async function main() {
  await ymaps3.ready;
  const {YMapOpenMapsButton} = await ymaps3.import('@yandex/ymaps3-default-ui-theme-extra')

  const {YMap, YMapDefaultSchemeLayer, YMapDefaultFeaturesLayer, YMapMarker} = ymaps3;
  
  // Иницилиазируем карту
    const map = new YMap(
        // Передаём ссылку на HTMLElement контейнера
        document.getElementById('map'),

        // Передаём параметры инициализации карты
        {
            location: {
                // Координаты центра карты
                center: [27.576033, 53.808046],

                // Уровень масштабирования
                zoom: 16
            }
        }
    );

    // Добавляем слой для отображения схематической карты
    map.addChild(new YMapDefaultSchemeLayer());

    // Добавьте слой для маркеров
    map.addChild(new YMapDefaultFeaturesLayer());

    // Создайте DOM-элемент для содержимого маркера.
    // Важно это сделать до инициализации маркера!
    // Элемент можно создавать пустым. Добавить HTML-разметку внутрь можно после инициализации маркера.
    const content = document.createElement('section');

    // Инициализируйте маркер
    const marker = new YMapMarker(
      {
        coordinates: [27.576033, 53.808046],
      },
      content
    );
    map.addChild(marker);
    content.innerHTML = `
      <section class="pin">
        <img class="pin" src="img/icons/pin-ymap.svg" style="position: relative; top: -63.5px; left: -28px;">
        <span>ООО “Рошма”</span>
      </section>
    `;

    document.querySelector('ymaps').style = 'border-radius: 30px;'
}
