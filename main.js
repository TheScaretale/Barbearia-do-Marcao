/* menu */

const nav = document.querySelector('#header nav')
const toggle = document.querySelectorAll('nav .toggle')

for (const element of toggle) {
  element.addEventListener('click', function () {
    nav.classList.toggle('show')
  })
}

const links = document.querySelectorAll('nav ul li a')

for (const link of links) {
  link.addEventListener('click', function () {
    nav.classList.remove('show')
  })
}

/* sombra do nav */

const header = document.querySelector('#header')
const navHeight = header.offsetHeight
function changeHeaderWhenScrolled() {
  if (window.scrollY >= navHeight) {
    // altura do header maior que o scroll
    header.classList.add('scroll')
  } else {
    // altura do header menor que o scroll
    header.classList.remove('scroll')
  }
}

/* botão para voltar para o topo */
const backToTopButton = document.querySelector('.back-to-top')
function backToTop() {
  if (window.scrollY >= 920) {
    backToTopButton.classList.add('show')
  } else {
    backToTopButton.classList.remove('show')
  }
}


window.addEventListener('scroll', function () {
    changeHeaderWhenScrolled()
    backToTop()
    activeMenuSection()
  })


