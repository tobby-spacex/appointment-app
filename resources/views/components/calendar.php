<?php include VIEW_PATH . '/partials/_header.php';?>

<section>
    <div class="calendar-block">
    <script>

        document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            selectable: true,
            headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        select: function(info) {
            alert('selected ' + info.startStr + ' to ' + info.endStr);
        }
        });
        calendar.render();
        });

</script>

<div id='calendar'></div>

</div>
</section>

<?php include VIEW_PATH . '/partials/_footer.php';?>
