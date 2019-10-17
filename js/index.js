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

// Parallax
const parallax = document.querySelector('.parallax')
M.Parallax.init(parallax,{})

// Scrollspy
const ss = document.querySelectorAll('.scrollspy')
M.ScrollSpy.init(ss, {})

// conta os caracteres do textarea do Contato
$('#mensagemContato').keyup(function () {
    var max = parseInt($('#mensagemContato').attr('maxlength'))
    var tamanho = $('#mensagemContato').val().length
    var newLength = max - tamanho
    if (newLength > 0) {
        $('#spanMensagemContato').html(newLength + ' caracteres restantes')
    } else if (newLength == 0) {
        $('#spanMensagemContato').html(null)
    } else {
        $('#spanMensagemContato').html(null)
    }
})

// lax init
window.onload = function () {
    lax.setup()
    const updateLax = () => {
        lax.update(window.scrollY)
        window.requestAnimationFrame(updateLax)
    }
    window.requestAnimationFrame(updateLax)
}

// mudar o menu apos rolar a pagina
$(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#menu').addClass('navbar-fixed')
        } else {
            $('#menu').removeClass('navbar-fixed')
        }
    })
})

// modal
const modal = document.querySelector('.modal')
M.Modal.init(modal, {})

// slide da secao de login
$(".btnOpenLogin").on("click", function () {
    $(".loginBox").toggleClass("mostraLogin")
    document.body.style.overflowY = "hidden"
});
$(".btnCloseLogin").on("click", function () {
    $(".loginBox").toggleClass("mostraLogin")
    document.body.style.overflowY = "scroll"
});