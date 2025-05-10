class Slider {
  constructor(trackId, btnPrevId, btnNextId) {
    this.track = document.getElementById(trackId)
    this.btnPrev = document.getElementById(btnPrevId)
    this.btnNext = document.getElementById(btnNextId)

    this.cards = this.track.children
    this.initCardsCount = this.cards.length

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

    if (this.windowPos === this.WINDOW_POS_MAX) {
      const fragment = document.createDocumentFragment()
      let lastCardId = 5 // TODO: del
      for (const card of this.cards) {
        const clone = card.cloneNode(true)
        clone.dataset.cardId = ++lastCardId // TODO: del
        fragment.appendChild(clone)
      }
      this.track.appendChild(fragment)
      console.log('done cloning')
    }

    
    if (this.windowPos === this.initCardsCount) {
      const transHandler = () => {
        for (let i = 0; i < 5; i++) {
          this.track.firstElementChild.remove()
        }
        this.track.style.transition = 'none'
        this.track.style.transform = `translate3d(0px, 0, 0)`
        this.windowPos = 0
      }
      this.track.addEventListener('transitionend', transHandler)

      setTimeout(() => {
        this.track.style.transition = 'transform 400ms cubic-bezier(0.165, 0.84, 0.44, 1)'
        this.track.removeEventListener('transitionend', transHandler)
      }, 450)
    }
  }

  _slide(windowPos) {
    this.track.style.transform = `translate3d(-${this.CHANGE_SLIDE_DISTANCE * windowPos}px, 0, 0)`
  }

  get windowPos() {
    return this._windowPos
  }
  set windowPos(val) {
    this._windowPos = getNonNegative(val)

    if (this._windowPos > 0) {
      this.btnPrev.disabled = false
      this.btnPrev.classList.remove('btn-slider--inactive')
    } else if (this._windowPos === 0) {
      this.btnPrev.disabled = true
      this.btnPrev.classList.add('btn-slider--inactive')
    }
  }
}

const slider = new Slider('track', 'btnPrev', 'btnNext')
console.log(slider)

/* Utilities for Slider */
function getNonNegative(num) {
  return Math.max(0, num);
}