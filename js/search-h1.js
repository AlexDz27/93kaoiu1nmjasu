// TODO: правильное (а не руками) подтягивание search -- потом доделаю

// Load search data in needed
let searchData = localStorage.getItem('search')
if (!searchData) {
  fetch('search.json')
    .then(r => r.text())
    .then(r => {
      localStorage.setItem('search', r)
    })
} else {
  searchData = JSON.parse(searchData)
  const h = searchData.h
  const hFromServer = Number(document.getElementById('searchH').text)
  if (h !== hFromServer) {
    fetch('search.json')
      .then(r => r.text())
      .then(r => {
        localStorage.setItem('search', r)
      })
  }
}

// Use search data
/** SEARCH **/
const search = document.getElementById('search')
const searchInput = document.getElementById('searchInput')
const searchResults = document.getElementById('searchResults')
searchInput.onfocus = () => {
  search.classList.add('search--active')
}
window.addEventListener('click', (e) => {
  if (search.contains(e.target)) return
  search.classList.remove('search--active')
})