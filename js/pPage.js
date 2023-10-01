const image = document.querySelector(".image");
const jumbo = document.querySelector(".jumbo")

image.addEventListener('click', function (e) {
    if (e.target.className == 'thumb') {
        jumbo.src = e.target.src;
    }
})