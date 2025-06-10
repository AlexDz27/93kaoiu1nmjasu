// TODO: if there'll be more products, add logic with multipliers inst of translate 100%
// TODO: 40 штук валиков будет - надо как-то по архе подумать)
// TODO: можно просто if else 3 )

const sliderCat = document.querySelector('.slider--cat')
const sliderBtns = document.querySelector('.slider__btns')

let sliderCatUpClass = 'slider--cat--up'
let sliderBtnsUpClass = 'slider__btns--up'
if (showColsCount === 3) {
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
      this.btnPrev.disabled = true
      this.btnNext.disabled = false
      this.btnNext.classList.remove('btn-slider--inactive')
      this.btnPrev.classList.add('btn-slider--inactive')
      this.dots[1].classList.remove('slider__dots__dot--active')
      this.dots[0].classList.add('slider__dots__dot--active')

      this.track.style.transform = `translate3d(0, 0, 0)`

      smoothScrollTo(document.getElementById('qs').offsetTop - 30, 800)
      setTimeout(() => {
        sliderBtns.classList.remove(sliderBtnsUpClass)
        sliderCat.classList.remove(sliderCatUpClass)
      }, 800)
    }

    this.btnNext.onclick = () => {
      this.btnPrev.disabled = false
      this.btnNext.disabled = true
      this.btnPrev.classList.remove('btn-slider--inactive')
      this.btnNext.classList.add('btn-slider--inactive')
      this.dots[0].classList.remove('slider__dots__dot--active')
      this.dots[1].classList.add('slider__dots__dot--active')

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
        if (i === 0) {
          this.btnPrev.click()
        } else if (i === 1) {
          this.btnNext.click()
        }
      }
    }
  }
}

const slider = new Slider('track', 'btnPrev', 'btnNext', 'dots')