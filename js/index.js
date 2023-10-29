const searchForm = document.querySelector('.form');
const searchBox = document.querySelector('.searchbox');

document.querySelector('#searchButton').onclick = (e) => {
    searchForm.classList.toggle('active');
    searchBox.focus();
    e.preventDefault();
}