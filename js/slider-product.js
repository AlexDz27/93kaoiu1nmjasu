const track = document.getElementById('track')
const btnPrev = document.getElementById('btnPrev')
const btnNext = document.getElementById('btnNext')
const theFirstProduct = document.getElementById('theFirstProduct')
const theNextProduct = document.getElementById('theNextProduct')
btnPrev.onclick = () => {
  btnPrev.disabled = true
  theFirstProduct.scrollIntoView({
    behavior: 'smooth',
    block: 'nearest'
  })
}
btnNext.onclick = () => {
  btnPrev.disabled = false
  theNextProduct.scrollIntoView({
    behavior: 'smooth',
    block: 'nearest'
  })
}