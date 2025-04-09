/** SLIDER **/
const track = document.getElementById('track')
const btnPrev = document.getElementById('btnPrev')
const btnNext = document.getElementById('btnNext')
const CARD_AND_GAP_WIDTH = 407.5 // .slider__track's children grid-auto-columns + column-gap
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
  if (multiplier === 2) {
    btnNext.classList.add('btn-slider--inactive')
    btnNext.disabled = true
  }

  track.style.transform = `translate3d(-${CARD_AND_GAP_WIDTH * multiplier}px, 0, 0)`

  btnPrev.classList.remove('btn-slider--inactive')
})