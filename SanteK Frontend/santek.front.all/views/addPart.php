<?php
     include "../Controllers/participantC.php";
     include "../Controllers/eventC.php";
     require_once "../model/event.php";
     require_once "../model/part.php";
     include "../config.php";
     
     

     $eventC =  new EventC();
     if (isset($_POST["id_event"])){
      $eventC->participerevent($_POST["id_event"]);}
      header('Location: services-3.php');
             	

?>