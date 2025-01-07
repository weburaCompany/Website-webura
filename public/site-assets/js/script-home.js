let icon = document.querySelector('.header-icon')

window.onscroll = function () {
    if (scrollY > 150) {
        icon.style.display = 'block'
    }else{
        icon.style.display = 'none'
    }
}
let arrow = document.querySelector('.arrow-top')

arrow.onclick = function () {
    window.scrollTo(0,0)
}