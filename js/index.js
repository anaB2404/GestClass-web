// altura da tela
var viewHeight = $(window).height();
var menuHeight = $('.navbar-fixed').height();

// Sidenav
const sideNav = document.querySelector('.sidenav')
M.Sidenav.init(sideNav, {})

// Slider
const slider = document.querySelector('.slider')
M.Slider.init(slider, {
    indicators: false,
    transition: 500,
    interval: 4000,
    height: 500
})

// Scrollspy
const ss = document.querySelectorAll('.scrollspy')
M.ScrollSpy.init(ss, {})

// lax init
window.onload = function () {
    lax.setup()
    const updateLax = () => {
        lax.update(window.scrollY)
        window.requestAnimationFrame(updateLax)
    }
    window.requestAnimationFrame(updateLax)
}

// modal
const modal = document.querySelector('.modal')
M.Modal.init(modal, {})

