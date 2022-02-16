<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="fullcalendar/fullcalendar.min.css" />
<script src="fullcalendar/lib/jquery.min.js"></script>
<script src="fullcalendar/lib/moment.min.js"></script>
<script src="fullcalendar/fullcalendar.min.js"></script>

<script>

$(document).ready(function () {
    var calendar = $('#calendar').fullCalendar({
        editable: true,
        events: "fetch.php",
        displayEventTime: false,
        eventRender: function (event, element, view) {
            if (event.allDay === 'true') {
                event.allDay = true;
            } else {
                event.allDay = false;
            }
        },
        selectable: true,
        selectHelper: true,
        select: function (date_debut, date_fin, allDay) {
            var nom_event = prompt('Votre évenement:');

            if (nom_event) {
                var date_debut = $.fullCalendar.formatDate(date_debut, "Y-MM-DD HH:mm:ss");
                var date_fin = $.fullCalendar.formatDate(date_fin, "Y-MM-DD HH:mm:ss");

                $.ajax({
                    url: 'ajoutEvent.php',
                    data: 'nom_event=' + nom_event +'lieu_event=' + lieu_event + '&date_debut=' + date_debut + '&date_fin=' + date_fin,
                    type: "POST",
                    success: function (data) {
                        displayMessage("Added Successfully");
                    }
                });
                calendar.fullCalendar('renderEvent',
                        {
                            nom_event: nom_event,
                            lieu_event: lieu_event,
                            date_debut: date_debut,
                            date_fin: date_fin,
                            allDay: allDay
                        },
                true
                        );
            }
            calendar.fullCalendar('unselect');
        },
        
        editable: true,
        eventDrop: function (event, delta) {
                    var date_debut = $.fullCalendar.formatDate(event.date_debut, "Y-MM-DD HH:mm:ss");
                    var date_fin = $.fullCalendar.formatDate(event.date_fin, "Y-MM-DD HH:mm:ss");
                    $.ajax({
                        url: 'modifierEvent.php',
                        data: 'nom_event=' + nom_event +'lieu_event=' + lieu_event + '&date_debut=' + date_debut + '&date_fin=' + date_fin + '&id_event=' + event.id_event,
                        type: "POST",
                        success: function (response) {
                            displayMessage("Updated Successfully");
                        }
                    });
                },
        eventClick: function (event) {
            var deleteMsg = confirm("Do you really want to delete?");
            if (deleteMsg) {
                $.ajax({
                    type: "POST",
                    url: "supprimerEvent.php",
                    data: "&id_event=" + event.id_event,
                    success: function (response) {
                        if(parseInt(response) > 0) {
                            $('#calendar').fullCalendar('removeEvents', event.id_event);
                            displayMessage("Deleted Successfully");
                        }
                    }
                });
            }
        }

    });
});

function displayMessage(message) {
	    $(".response").html("<div class='success'>"+message+"</div>");
    setInterval(function() { $(".success").fadeOut(); }, 1000);
}
</script>

<style>
body {
    margin-top: 50px;
    text-align: center;
    font-size: 12px;
    font-family: "Lucida Grande", Helvetica, Arial, Verdana, sans-serif;
}

#calendar {
    width: 700px;
    margin: 0 auto;
}

.response {
    height: 60px;
}

.success {
    background: #cdf3cd;
    padding: 10px 60px;
    border: #c3e6c3 1px solid;
    display: inline-block;
}
</style>
</head>
<body>
    <h2> Consulter Votre évenements : </h2>
    
   <li><a href='add-schedule.html'>Ajouter un évenement</a></li>
   <li><a href='afficherEvent.php'>Afficher tous les évenements</a></li>
   <li class='active'><a href='#'>Consulter tous les évenements dans votre calendrier</a></li>
   <li><a href='afficherEventri.php'>Trier les évenements</a></li>
   <li><a href='recherche.php'>Chercher un évenement</a></li>

   
    <div class="response"></div>
    <div id='calendar'></div>
</body>


</html>