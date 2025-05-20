// TODO: if there'll be more products, add logic with multipliers inst of translate 100%

const sliderCat = document.querySelector('.slider--cat')
const sliderBtns = document.querySelector('.slider__btns')

let sliderCatUpClass = 'slider--cat--up'
let sliderBtnsUpClass = 'slider__btns--up'
if (showFullListColsCount === 3) {
  sliderBtnsUpClass = 'slider__btns--up--3'
}

// TODO: real: count children when working with dots
class Slider {
  constructor(trackId, btnPrevId, btnNextId, dotsContId) {
    this.track = document.getElementById(trackId)
    this.btnPrev = document.getElementById(btnPrevId)
    this.btnNext = document.getElementById(btnNextId)
    this.dotsCont = document.getElementById(dotsContId)
    this.dots = this.dotsCont.children

    this.init()
  }

  init() {
    this.btnPrev.onclick = () => {
      this.track.style.transform = `translate3d(0, 0, 0)`
      smoothScrollTo(document.getElementById('qs').offsetTop - 30, 800)
      setTimeout(() => {
        sliderBtns.classList.remove(sliderBtnsUpClass)
        sliderCat.classList.remove(sliderCatUpClass)
      }, 800)
    }

    this.btnNext.onclick = () => {
      this.track.style.transform = `translate3d(calc(-100% - 5px), 0, 0)`
      smoothScrollTo(document.getElementById('qs').offsetTop - 30, 800)
      setTimeout(() => {
        sliderBtns.classList.add(sliderBtnsUpClass)
        sliderCat.classList.add(sliderCatUpClass)
      }, 800)
    }

    for (let i = 0; i < this.dots.length; i++) {
      const dot = this.dots[i]
      dot.onclick = () => {
        console.log(i)
      }
    }
  }
}

const slider = new Slider('track', 'btnPrev', 'btnNext', 'dots')