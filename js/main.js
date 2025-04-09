/** SLIDER **/
const track = document.getElementById('track')
const btnPrev = document.getElementById('btnPrev')
const btnNext = document.getElementById('btnNext')
const cardWidth = track.firstElementChild.clientWidth // TODO: del)
// const cardWidth = 385.33
const trackWidth = track.clientWidth
let multiplier = 0
btnPrev.addEventListener('click', () => {
  console.log('prev')
})
btnNext.addEventListener('click', () => {
  multiplier++

  // track.style.transform = `translate3d(-${385 * multiplier}px, 0, 0)`
  // track.style.transform = `translate3d(calc(-(100% - 44px) / 3)px, 0, 0)`
  // track.style.transform = `translate3d(calc(-((100% - 44px) / 3)), 0, 0)`

  // working
  // track.style.transform = `translate3d(calc((-${trackWidth}px - 44px) / 3), 0, 0)`
  // working better
  track.style.transform = `translate3d(calc(-${cardWidth * multiplier}px - 22px), 0, 0)`

  btnPrev.classList.remove('btn-slider--inactive')
})