// TODO: ЧЕКНУТЬ У СЕРОГО В САФАРИ

class Slider {
  constructor(trackId, btnPrevId, btnNextId, dotsContId, dotsContIdMob, showingImg, btnPrevIdMob, btnNextIdMob) {
    this.track = document.getElementById(trackId)
    this.btnPrev = document.getElementById(btnPrevId)
    this.btnNext = document.getElementById(btnNextId)
    this.dotsCont = document.getElementById(dotsContId)
    this.dotsContMob = document.getElementById(dotsContIdMob)
    this.showingImg = document.getElementById(showingImg)
    this.btnPrevMob = document.getElementById(btnPrevIdMob)
    this.btnNextMob = document.getElementById(btnNextIdMob)
    
    this._currentImgIdx = 0
    
    this.init()
  }
  
  init() {
    Array.from([this.btnPrev, this.btnPrevMob]).forEach(b => {
      b.onclick = () => {
        this.currentImgIdx--
      }
    })
    Array.from([this.btnNext, this.btnNextMob]).forEach(b => {
      b.onclick = () => {
        this.currentImgIdx++
      }
    })
    
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
      }
    }
    for (let i = 0; i < this.dotsContMob.children.length; i++) {
      const dot = this.dotsContMob.children[i]
      dot.onclick = () => {
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

    this.dotsCont.querySelector('.slider__dots__dot--active').classList.remove('slider__dots__dot--active')
    this.dotsCont.children[this._currentImgIdx].classList.add('slider__dots__dot--active')
    this.dotsContMob.querySelector('.slider__dots__dot--active').classList.remove('slider__dots__dot--active')
    this.dotsContMob.children[this._currentImgIdx].classList.add('slider__dots__dot--active')
    
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
    // mob btns
    this.btnPrevMob.disabled = this._currentImgIdx > 0 ? false : true
    if (this.btnPrevMob.disabled) {
      this.btnPrevMob.classList.add('product-slider__btn--inactive')
    } else {
      this.btnPrevMob.classList.remove('product-slider__btn--inactive')
    }
    this.btnNextMob.disabled = this._currentImgIdx === this.track.children.length - 1 ? true : false
    if (this.btnNextMob.disabled) {
      this.btnNextMob.classList.add('product-slider__btn--inactive')
    } else {
      this.btnNextMob.classList.remove('product-slider__btn--inactive')
    }
  }

  _changeDistance(mult, goingBack) {
    let pointAtoPointBDistance = 87 + 7
    if (window.innerWidth <= 500) pointAtoPointBDistance = 58 + 4
    let start

    const step = (timestamp) => {
      console.log('sT:', this.track.scrollTop)
      console.log('ran')
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
        if (this.track.scrollTop > pointAtoPointBDistance * mult) {
          requestAnimationFrame(step)
        }
      } else {
        if (window.innerWidth <= 500) {
          if (this.track.scrollTop >= 130) return
        } else {
          if (this.track.scrollTop === 192) return
        }
        if (this.track.scrollTop < pointAtoPointBDistance * mult) {
          requestAnimationFrame(step)
        }
      }
    }

    requestAnimationFrame(step)
  }
}

const slider = new Slider('track', 'btnPrev', 'btnNext', 'dots', 'dotsMob', 'showingImg', 'btnPrevMob', 'btnNextMob')


/* Utilities for Slider */
function getBetween(num, max) {
  if (num < 0) return 0
  if (num > max) return max
  return num
}