document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {

        locale: 'pt-br',
        plugins: ['interaction', 'dayGrid', 'list', 'googleCalendar'],
        editable: true,
        eventLimit: true,
        events: 'php/listarEventosCalendario.php',
        extraParams: function () {
            return {
                cachebuster: new Date().valueOf()
            };
        },

        eventClick: function (info) {
            info.jsEvent.preventDefault();

            $('.modal #title').text(info.event.title);
            $('.modal #start').text(info.event.start.toLocaleString());
            $('.modal #end').text(info.event.end.toLocaleString());

            $(document).ready(function () {
                var modal = M.Modal.init($('.modal')[0]);
                modal.open();
            });

            info.el.style.borderColor = '#000';
        },

        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,listYear'
        },

        displayEventTime: false
    });

    calendar.render();
});