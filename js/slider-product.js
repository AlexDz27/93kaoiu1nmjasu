// TODO: ЧЕКНУТЬ У СЕРОГО В САФАРИ

class Slider {
  constructor(trackId, btnPrevId, btnNextId, showingImg) {
    this.track = document.getElementById(trackId)
    this.btnPrev = document.getElementById(btnPrevId)
    this.btnNext = document.getElementById(btnNextId)
    this.showingImg = document.getElementById(showingImg)

    this._currentImgIdx = 0

    this.init()
  }

  init() {
    this.btnPrev.onclick = () => {
      this.currentImgIdx--
    }
    this.btnNext.onclick = () => {
      this.currentImgIdx++
    }

    for (let i = 0; i < this.track.children.length; i++) {
      const imgCont = this.track.children[i]
      imgCont.onclick = () => {
        this.currentImgIdx = i
      }
    }
  }

  get currentImgIdx() {
    return this._currentImgIdx
  }
  set currentImgIdx(val) {
    this._currentImgIdx = getBetween(val, this.track.children.length - 1)
    console.log(this._currentImgIdx)
    const currentImgCont = this.track.children[this._currentImgIdx]

    this.track.querySelector('.product-slider__track__img-cont--active').classList.remove('product-slider__track__img-cont--active')
    currentImgCont.classList.add('product-slider__track__img-cont--active')
    if (this._currentImgIdx + 4 <= this.track.children.length - 1) {
      this.track.children[this._currentImgIdx + 4].scrollIntoView({
        behavior: 'smooth',
        block: 'nearest'
      })
    } else if (this._currentImgIdx === 4 && this.track.children.length > 5) {
      this.track.children[this.track.children.length - 1].scrollIntoView({
        behavior: 'smooth',
        block: 'nearest'
      })
    }
    if (this._currentImgIdx === this.track.children.length - 1) {
      this.track.scrollTop = this.track.scrollHeight
    }

    this.showingImg.src = currentImgCont.querySelector('img').src

    this.btnPrev.disabled = this._currentImgIdx > 0 ? false : true
  }
}

const slider = new Slider('track', 'btnPrev', 'btnNext', 'showingImg')


/* Utilities for Slider */
function getBetween(num, max) {
  if (num < 0) return 0
  if (num > max) return max
  return num
}