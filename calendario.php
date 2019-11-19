<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8' />

    <link href='css/core/main.min.css' rel='stylesheet' />
    <link href='css/daygrid/main.min.css' rel='stylesheet' />
    <link href='css/list/main.min.css' rel='stylesheet' />

    <script src='js/core/main.min.js'></script>
    <script src='js/core/locales/pt-br.js'></script>
    <script src='js/interaction/main.min.js'></script>
    <script src='js/daygrid/main.min.js'></script>
    <script src='js/list/main.min.js'></script>
    <script src='js/google-calendar/main.min.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {

                locale: 'pt-br',
                plugins: ['interaction', 'dayGrid'],
                editable: true,
                eventLimit: true,
                events: 'php/listarEventosCalendario.php',
                extraParams: function () {
                    return {
                        cachebuster: new Date().valueOf()
                    };
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
    </script>
    <style>
        body {
            margin: 40px 10px;
            padding: 0;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
            font-size: 14px;
        }

        #loading {
            display: none;
            position: absolute;
            top: 10px;
            right: 10px;
        }

        #calendar {
            max-width: 900px;
            margin: 0 auto;
        }
    </style>
</head>

<body>

    <div id='loading'>loading...</div>

    <div id='calendar'></div>

</body>

</html>