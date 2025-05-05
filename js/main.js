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
btnDownloadPriceMob.addEventListener('click', () => {
  btnDownloadPriceMob.classList.toggle('btn--dropdown--active')
})
window.addEventListener('click', (e) => {
  if (btnDownloadPriceMob.contains(e.target)) return
  btnDownloadPriceMob.classList.remove('btn--dropdown--active')
})

/** NAV **/
const navAndOverlay = document.getElementById('navAndOverlay')
const nav = document.getElementById('nav')
const btnNav = document.getElementById('btnNav')
btnNav.addEventListener('click', () => {
  navAndOverlay.classList.add('nav-overlay--active')
})
const btnNavClose = document.getElementById('btnNavClose')
btnNavClose.addEventListener('click', () => {
  navAndOverlay.classList.remove('nav-overlay--active')
})
navAndOverlay.addEventListener('click', (e) => {
  if (nav.contains(e.target)) return
  navAndOverlay.classList.remove('nav-overlay--active')
})
/** NAV MOBILE BUTTON **/
// TODO: 

/** SEARCH **/
const searchInput = document.getElementById('searchInput')
const searchResults = document.getElementById('searchResults')
searchInput.onfocus = () => {
  searchResults.classList.add('search__results--active')
}
searchInput.onblur = () => {
  searchResults.classList.remove('search__results--active')
}

/** SLIDER **/
const track = document.getElementById('track')
const cards = track.children
const btnPrev = document.getElementById('btnPrev')
const btnNext = document.getElementById('btnNext')
const CARD_AND_GAP_WIDTH = 407.5 // .slider__track's children grid-auto-columns + column-gap
// const CLONE_PROGRESSION_SET = new Set([2, 7, 12, 17, 22, 27, 32, 37, 42, 47, 52, 57, 62, 67, 72, 77, 82, 87, 92, 97])
const CLONE_PROGRESSION_SET = new Set([2, 7, 12]) // TODO: add 17 and check with last plus 5
const CLONE_PROGRESSION_SET_LAST = 12
const DELETE_PROGRESSION_SET = new Set([8, 18, 28, 38])
let multiplier = 0
btnPrev.addEventListener('click', () => {
  multiplier--
  btnNext.disabled = false
  if (multiplier === 0) {
    btnPrev.classList.add('btn-slider--inactive')
    btnPrev.disabled = true
  }

  track.style.transform = `translate3d(-${CARD_AND_GAP_WIDTH * multiplier}px, 0, 0)`

  btnNext.classList.remove('btn-slider--inactive')
})
btnNext.addEventListener('click', () => {
  multiplier++
  btnPrev.disabled = false
  console.log(multiplier)
  if (multiplier === (CLONE_PROGRESSION_SET_LAST + 5)) {
    btnNext.classList.add('btn-slider--inactive')
    btnNext.disabled = true
  }

  if (CLONE_PROGRESSION_SET.has(multiplier)) {
    const fragment = document.createDocumentFragment()
    for (const card of cards) fragment.appendChild(card.cloneNode(true))
    track.appendChild(fragment)
    console.log('done')
  }
  // if (DELETE_PROGRESSION_SET.has(multiplier)) {
  //   for (let i = 0; i < 5; i++) {
  //     // console.log(track.children[i])
  //     track.children[i].remove()
  //   }
  // }

  track.style.transform = `translate3d(-${CARD_AND_GAP_WIDTH * multiplier}px, 0, 0)`

  btnPrev.classList.remove('btn-slider--inactive')
})
function isMemberOfCloneProgression(num) {
  if (num === 2) return true
  return (num + 5) === arProg()
}
function arProg(num) {
  if (num === 1) return false
  if (num === 2) return true
  return 5 * num - 3
}