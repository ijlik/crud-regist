(function ($) {
    "use strict";

    // Full calendar
    $(window).on('load', function () {
        $('#external-events .fc-event').each(function () {
            $(this).data('event', {
                title: $.trim($(this).text()),
                stick: true
            });
            $(this).draggable({
                zIndex: 999,
                revert: true,
                revertDuration: 0
            });
        });
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            defaultDate: '2019-08-12',
            editable: true,
            droppable: true,
            events: [{
                title: 'All Day Event',
                start: '2019-08-01',
                borderColor: '#2c7be5',
                backgroundColor: '#2c7be5',
                textColor: '#fff'
                }, {
                title: 'Long Event',
                start: '2019-08-07',
                end: '2019-08-10',
                borderColor: '#f44236',
                backgroundColor: '#f44236',
                textColor: '#fff'
                }, {
                id: 999,
                title: 'Repeating Event',
                start: '2019-08-09T16:00:00',
                borderColor: '#f4c22b',
                backgroundColor: '#f4c22b',
                textColor: '#fff'
                }, {
                id: 999,
                title: 'Repeating Event',
                start: '2019-08-16T16:00:00',
                borderColor: '#3ebfea',
                backgroundColor: '#3ebfea',
                textColor: '#fff'
                }, {
                title: 'Conference',
                start: '2019-08-11',
                end: '2019-08-13',
                borderColor: '#00d97e',
                backgroundColor: '#00d97e',
                textColor: '#fff'
                }, {
                title: 'Meeting',
                start: '2019-08-12T10:30:00',
                end: '2019-08-12T12:30:00'
                }, {
                title: 'Lunch',
                start: '2019-08-12T12:00:00',
                borderColor: '#f44236',
                backgroundColor: '#f44236',
                textColor: '#fff'
                }, {
                title: 'Happy Hour',
                start: '2019-08-12T17:30:00',
                borderColor: '#880e4f',
                backgroundColor: '#880e4f',
                textColor: '#fff'
                }, {
                title: 'Birthday Party',
                start: '2019-08-13T07:00:00'
                }, {
                title: 'Click for Google',
                url: 'http://google.com/',
                start: '2019-08-28',
                borderColor: '#880e4f',
                backgroundColor: '#880e4f',
                textColor: '#fff'
                }],
            drop: function () {
                if ($('#drop-remove').is(':checked')) {
                    $(this).remove();
                }
            }
        });
    });

})(jQuery);