const companyName = document.getElementById('companyName')
const btnSprava = document.getElementById('SPRAVA')
const btnRoshma = document.getElementById('ROSHMA')
let currentCompany = 'SPRAVA'
const currentCompanyToCompanyName = {SPRAVA: 'SPRAVA', ROSHMA: 'Рошма'}
Array.from([btnSprava, btnRoshma]).forEach(i => {
  i.addEventListener('click', () => {
    currentCompany = i.id

    companyName.textContent = currentCompanyToCompanyName[currentCompany]
    document.querySelector('.table-switcher-pane__btn--active').classList.remove('table-switcher-pane__btn--active')
    i.classList.add('table-switcher-pane__btn--active')
  })
})