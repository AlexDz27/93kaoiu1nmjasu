const answers = {
  textContent: null,
  products: {
    details: null,
    text: null,
  },
  categories: null,
  cart: null,
  adminHome: null
}

const textareas = [
  document.getElementById('textContent'),
  document.getElementById('products'),
  document.getElementById('categories'),
  document.getElementById('cart'),
  document.getElementById('adminHome'),
]
const inputsArr = [
  document.querySelectorAll(`input[name=productsDetails]`)
]

/** GATHER SIMPLE INFO **/
textareas.forEach(textarea => {
  textarea.addEventListener('blur', (evt) => {
    if (textarea.id === 'products') {
      answers[textarea.id].text = evt.target.value
    } else {
      answers[textarea.id] = evt.target.value
    }

    console.log(answers)

    sendAnswers()
  })
})

/** GATHER MORE COMPLEX INFO **/
let kindOfContentForProductDetails = null
inputsArr.forEach(inputs => {
  inputs.forEach(input => {
    input.onclick = (e) => {
      kindOfContentForProductDetails = e.target.value
      answers.products.details = kindOfContentForProductDetails
      sendAnswers()

      if (kindOfContentForProductDetails === 'just-text') {
        textareas[1].style.display = 'none'
      } else {
        textareas[1].style.display = 'inline-block'
        if (kindOfContentForProductDetails === 'more-complex-content') {
          textareas[1].placeholder = 'Таблица, что ещё?'
        } else if (kindOfContentForProductDetails === 'other') {
          textareas[1].placeholder = 'Что именно?'
        }
      }
    }
  })
})


function sendAnswers() {
  fetch('server.php', {
    method: 'POST',
    body: JSON.stringify(answers)
  })
}