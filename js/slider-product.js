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
    const goingBack = val < this._currentImgIdx
    this._currentImgIdx = getBetween(val, this.track.children.length - 1)
    console.log(this._currentImgIdx)
    const currentImgCont = this.track.children[this._currentImgIdx]
    
    this.track.querySelector('.product-slider__track__img-cont--active').classList.remove('product-slider__track__img-cont--active')
    currentImgCont.classList.add('product-slider__track__img-cont--active')
    this._changeDistance(this._currentImgIdx, goingBack)
    
    this.showingImg.src = currentImgCont.querySelector('img').src
    
    this.btnPrev.disabled = this._currentImgIdx > 0 ? false : true
  }

  _changeDistance(mult, goingBack) {
    let start

    // console.log(this.track.scrollTop)
    const step = (timestamp) => {
      console.log('cur sT:', this.track.scrollTop)
      // console.log('gb:', goingBack)
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
        if (this.track.scrollTop > 87 * mult) {
          requestAnimationFrame(step)
        }
      } else {
        if (this.track.scrollTop === 384) return
        if (this.track.scrollTop < 87 * mult) {
          requestAnimationFrame(step)
        }
      }
    }

    requestAnimationFrame(step)

    // this.track.scrollTop = 87 * mult
  }
}

const slider = new Slider('track', 'btnPrev', 'btnNext', 'showingImg')


/* Utilities for Slider */
function getBetween(num, max) {
  if (num < 0) return 0
  if (num > max) return max
  return num
}