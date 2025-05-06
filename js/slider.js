class Slider {
  constructor(trackId, btnPrevId, btnNextId) {
    this.track = document.getElementById(trackId)
    this.btnPrev = document.getElementById(btnPrevId)
    this.btnNext = document.getElementById(btnNextId)

    this._windowPos = 0 // Notion of 'window' represents viewing window for the cards, e.g. [[1, 2, 3], 4, 5,], and it could be [[1, 2], 3, 4, 5] for mobile

    this.WINDOW_POS_MAX = 2
    this.CHANGE_SLIDE_DISTANCE = 407.5 // .slider__track's children grid-auto-columns + column-gap

    this.init()
  }

  init() {
    this.btnPrev.onclick = () => {
      this.slidePrev()
      console.log(this.windowPos)
    }
    this.btnNext.onclick = () => {
      this.slideNext()
      console.log(this.windowPos)
    }
  }

  slidePrev() {
    this.windowPos--
    this._slide(this.windowPos)
  }
  slideNext() {
    this.windowPos++
    this._slide(this.windowPos)
  }

  _slide(windowPos) {
    this.track.style.transform = `translate3d(-${this.CHANGE_SLIDE_DISTANCE * windowPos}px, 0, 0)`
  }

  get windowPos() {
    return this._windowPos
  }
  set windowPos(val) {
    this._windowPos = clamp(val, 0, this.WINDOW_POS_MAX)

    if (val > 0) {
      this.btnPrev.disabled = false
      this.btnPrev.classList.remove('btn-slider--inactive')
    } else if (val === 0) {
      this.btnPrev.disabled = true
      this.btnPrev.classList.add('btn-slider--inactive')
    }
  }
}

const slider = new Slider('track', 'btnPrev', 'btnNext')
console.log(slider)

/* Utilities for Slider */
function clamp(val, min, max) {
  return Math.min(Math.max(val, min), max)
}