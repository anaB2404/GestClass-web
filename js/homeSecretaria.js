document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
});



$(document).ready(function(){
  $('.sidenav').sidenav();
});

// Or with jQuery

$('.dropdown-trigger').dropdown();
