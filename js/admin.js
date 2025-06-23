const loadFileForm = document.getElementById('loadFileForm')
const loadBtn = document.getElementById('loadBtn')
loadFileForm.onsubmit = (e) => {
  e.preventDefault()
  
  loadBtn.disabled = true
  loadBtn.classList.add('btn-load--loading')
  loadBtn.innerText = 'Загрузка'
  let counter = 0
  const intervalId = setInterval(() => {
    if (counter === 0) {
      loadBtn.innerText = 'Загрузка'
    } else if (counter === 1) {
      loadBtn.innerText = 'Загрузка.'
    } else if (counter === 2) {
      loadBtn.innerText = 'Загрузка..'
    } else if (counter === 3) {
      loadBtn.innerText = 'Загрузка...'
      counter = -1
    }

    counter++
  }, 400)

  const formData = new FormData(loadFileForm)
  fetch('/load-price-file.php', {
    method: 'POST',
    body: formData
  })
    .then(r => r.json())
    .catch(err => {
      alert('Произошла ошибка чтения результатов операции. Свяжитесь с программистом Алексеем: тг - @rain_xxxx; телефон - +375298191624')
      throw err
    })
    .then(r => {
      loadBtn.disabled = false
      loadBtn.classList.remove('btn-load--loading')
      loadBtn.innerText = 'Загрузить файл прайс-листа'
      counter = 0
      clearInterval(intervalId)

      alert(r.payload)
    })
}