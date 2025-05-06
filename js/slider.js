class Slider {
  constructor(trackId, btnPrevId, btnNextId) {
    this.track = document.getElementById(trackId)
    this.btnPrev = document.getElementById(btnPrevId)
    this.btnNext = document.getElementById(btnNextId)
    this.windowPos = [[1, 2, 3], 4, 5]
    // this.windowPos2 = [1, [2, 3, 4], 5] // TODO: del

    this.CHANGE_SLIDE_DISTANCE = 407.5 // .slider__track's children grid-auto-columns + column-gap
  }

  slide(newWindowPos) {
    // track.style.transform = `translate3d(-${CARD_AND_GAP_WIDTH * slideWindowCount}px, 0, 0)`
  }
}

// const slider = new Slider()
// slider.echo()

// TESTING
const ar1 = [[1, 2, 3], 4, 5]
const ar2 = [1, [2, 3, 4], 5]
const ar3 = [1, 2, [3, 4, 5]]
const ar4 = [1, 2, [3, 4, 5], 6, 7, 8, 9, 10]
const ar5 = [1, 2, 3, [4, 5, 6], 7, 8, 9, 10]
const ar6 = [1, 2, 3, 4, [5, 6, 7], 8, 9, 10]
const ar61 = [1, 2, 3, 4, 5, [6, 7, 8], 9, 10]
const ar7 = [1, 2, 3, 4, 5, 6, 7, [8, 9, 10]]
console.log(ar1.findIndex(i => Array.isArray(i))) // 0
console.log(ar2.findIndex(i => Array.isArray(i))) // 1
console.log(ar3.findIndex(i => Array.isArray(i))) // 2
console.log(ar4.findIndex(i => Array.isArray(i))) // 2
console.log(ar5.findIndex(i => Array.isArray(i))) // 3
console.log(ar6.findIndex(i => Array.isArray(i))) // 4
console.log(ar61.findIndex(i => Array.isArray(i))) // 5
console.log(ar7.findIndex(i => Array.isArray(i))) // 7