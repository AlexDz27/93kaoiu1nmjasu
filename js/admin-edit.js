const editForm = document.getElementById('editForm')
const editBtn = document.getElementById('editBtn')
editForm.onsubmit = (e) => {
  e.preventDefault()

  editBtn.disabled = true
  editBtn.classList.add('btn-edit--loading')
  editBtn.innerText = 'Загрузка'
  let counter = 0
  const intervalId = setInterval(() => {
    if (counter === 0) {
      editBtn.innerText = 'Загрузка'
    } else if (counter === 1) {
      editBtn.innerText = 'Загрузка.'
    } else if (counter === 2) {
      editBtn.innerText = 'Загрузка..'
    } else if (counter === 3) {
      editBtn.innerText = 'Загрузка...'
      counter = -1
    }

    counter++
  }, 400)

  const formData = new FormData(editForm)
  fetch('/edit-product.php', {
    method: 'POST',
    body: formData
  })
    .then(r => r.json())
    .then(r => {
      editBtn.disabled = false
      editBtn.classList.remove('btn-edit--loading')
      editBtn.innerText = 'Подтвердить редактирование'
      counter = 0
      clearInterval(intervalId)

      alert(r.payload)
    })
}