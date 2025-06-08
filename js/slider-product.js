// TODO: ЧЕКНУТЬ У СЕРОГО В САФАРИ

class Slider {
  constructor(trackId, btnPrevId, btnNextId, dotsContId, showingImg) {
    this.track = document.getElementById(trackId)
    this.btnPrev = document.getElementById(btnPrevId)
    this.btnNext = document.getElementById(btnNextId)
    this.dotsCont = document.getElementById(dotsContId)
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

    for (let i = 0; i < this.dotsCont.children.length; i++) {
      const dot = this.dotsCont.children[i]
      dot.onclick = () => {
        this.currentImgIdx = i

        this.dotsCont.querySelector('.slider__dots__dot--active').classList.remove('slider__dots__dot--active')
        dot.classList.add('slider__dots__dot--active')
      }
    }
  }
  
  get currentImgIdx() {
    return this._currentImgIdx
  }
  set currentImgIdx(val) {
    const goingBack = val < this._currentImgIdx
    this._currentImgIdx = getBetween(val, this.track.children.length - 1)
    console.log(this._currentImgIdx)
    const currentImgCont = this.track.children[this._currentImgIdx]
    
    this.track.querySelector('.product-slider__track__img-cont--active').classList.remove('product-slider__track__img-cont--active')
    currentImgCont.classList.add('product-slider__track__img-cont--active')
    this._changeDistance(this._currentImgIdx, goingBack)
    
    this.showingImg.src = currentImgCont.querySelector('img').src
    
    this.btnPrev.disabled = this._currentImgIdx > 0 ? false : true
    if (this.btnPrev.disabled) {
      this.btnPrev.classList.add('product-slider__btn--inactive')
    } else {
      this.btnPrev.classList.remove('product-slider__btn--inactive')
    }
    this.btnNext.disabled = this._currentImgIdx === this.track.children.length - 1 ? true : false
    if (this.btnNext.disabled) {
      this.btnNext.classList.add('product-slider__btn--inactive')
    } else {
      this.btnNext.classList.remove('product-slider__btn--inactive')
    }
  }

  _changeDistance(mult, goingBack) {
    let start

    const step = (timestamp) => {
      if (start === undefined) {
        start = timestamp
      }

      const elapsed = timestamp - start
      const shift = 0.01 * elapsed

      if (goingBack) {
        this.track.scrollTop -= shift
      } else {
        this.track.scrollTop += shift
      }
      
      if (goingBack) {
        if (this.track.scrollTop > (87 + 7) * mult) {
          requestAnimationFrame(step)
        }
      } else {
        if (this.track.scrollTop === 384) return
        if (this.track.scrollTop < (87 + 7) * mult) {
          requestAnimationFrame(step)
        }
      }
    }

    requestAnimationFrame(step)
  }
}

const slider = new Slider('track', 'btnPrev', 'btnNext', 'dots', 'showingImg')


/* Utilities for Slider */
function getBetween(num, max) {
  if (num < 0) return 0
  if (num > max) return max
  return num
}