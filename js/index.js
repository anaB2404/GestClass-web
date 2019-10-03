// altura da tela
var _AlturaDocumento = $(window).height();
var menuHeight = $(".navbar-fixed").height();

// Sidenav
const sideNav = document.querySelector('.sidenav')
M.Sidenav.init(sideNav, {})

// Slider
const slider = document.querySelector('.slider')
M.Slider.init(slider, {
    indicators: false,
    transition: 500,
    interval: 4000
})

// Parallax
const parallax = document.querySelector('.parallax')
M.Parallax.init(parallax,{})