/** SEARCH **/
const search = document.getElementById('search')
const searchInput = document.getElementById('searchInput')
const searchResults = document.getElementById('searchResults')
searchInput.onfocus = () => {
  search.classList.add('search--active')
}
// searchInput.onblur = (e) => {
//   // console.log(e.target.id)
//   setTimeout(() => {
//     search.classList.remove('search--active')
//   }, 50)
// }
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
const navAndOverlay = document.getElementById('navAndOverlay')
const nav = document.getElementById('nav')
const btnNavClose = document.getElementById('btnNavClose')
const btnNav = document.getElementById('btnNav')
btnNav.addEventListener('click', () => {
  navAndOverlay.classList.add('nav-overlay--active')
  btnNavClose.focus()
})
btnNavClose.addEventListener('click', () => {
  navAndOverlay.classList.remove('nav-overlay--active')
})
navAndOverlay.addEventListener('click', (e) => {
  if (nav.contains(e.target)) return
  navAndOverlay.classList.remove('nav-overlay--active')
})
/** NAV MOBILE BUTTON **/
// TODO: 

/** ESCAPE: turn off modals **/
window.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') {
    search.classList.remove('search--active')
    navAndOverlay.classList.remove('nav-overlay--active')
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
