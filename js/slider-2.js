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
    }

    this.btnNext.onclick = () => {
      this.track.style.transform = `translate3d(-100%, 0, 0)`
      smoothScrollTo(document.getElementById('qs').offsetTop - 30, 800)
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


function smoothScrollTo(targetPosition, duration) {
  const startPosition = window.pageYOffset;
  const distance = targetPosition - startPosition;
  let startTime = null;
  
  function animation(currentTime) {
    if (!startTime) startTime = currentTime;
    const timeElapsed = currentTime - startTime;
    const progress = Math.min(timeElapsed / duration, 1);
    
    // Easing function (easeInOutQuad)
    const ease = progress < 0.5 
    ? 2 * progress * progress 
    : 1 - Math.pow(-2 * progress + 2, 2) / 2;
    
    window.scrollTo(0, startPosition + (distance * ease));
    
    if (timeElapsed < duration) {
      requestAnimationFrame(animation);
    }
  }
  
  requestAnimationFrame(animation);
}