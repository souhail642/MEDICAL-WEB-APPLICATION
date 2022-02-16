<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from androthemes.com/themes/html/medjestic/pages/doctor-schedule/add-schedule.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Nov 2020 13:45:29 GMT -->
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Medjestic</title>

    </head>
<body>
  
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row mt">
          <div class="col-lg-6 col-md-6 col-sm-12">
           
            <h3></h3>
<form name="p" >
<div id='cssmenu'>
<ul>
   <li><a href='add-schedule.html'>Ajouter un évenement</a></li>
   <li><a href='afficherEvent.php'>Afficher tous les évenements</a></li>
   <li class='active'><a href='#'>Trier les évenements</a></li>
   <li><a href='recherche.php'>Chercher un évenement</a></li>

</ul>
</div>
<br>

<?PHP
include "../../../controller/eventC.php";
include "../../../config.php";

$event1C=new EventC();
$listeEvent=$event1C->trierEvents();

//var_dump($listeEmployes->fetchAll());
?>
<div class="row">
<div class="col-md-12">
<div class="content-panel">
<h4><i class="fa fa-angle-right"></i>Les évenements :</h4>
<hr>
<table class="table">

<thead>
<tr>
  <th>Nom d'évenement</th>
  <th>Lieu d'évenement</th>
  <th>Date de début d'évenement</th>
  <th>Date de fin d'évenement</th>
  <th><i class="fas fa-trash-alt"></i></th>
  <th><i class="fas fa-edit"></i></th>
</tr>
</thead>

<?PHP
foreach($listeEvent as $row){

	?>
  <tbody>
  <tr>
    <td><?PHP echo $row['nom_event']; ?></td>
    <td><?PHP echo $row['lieu_event']; ?></td>
    
    <td><?PHP echo $row['date_debut']; ?></td>
    <td><?PHP echo $row['date_fin']; ?></td>

    <td>
          <form method="POST" action="supprimerEvent.php"><a href='ajoutEvent.html'><input type="submit" name="supprimer" value="supprimer"></a>
	          <input type="hidden" value="<?PHP echo $row['nom_event']; ?>" name="nom_event">
	         </form>
	    </td>
  <td><a href="modifierEvent.php?id_event=<?PHP echo $row['id_event']; ?>">Modifier</a></td>
  </tr>
  </tbody>
<?php
}
?>
</table>
</div>
</div>
</div>

    <p>
</div>
<br/>



    </form>
          </div>
          <!-- /col-lg-6 -->
        </div>
        <!--/ row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
   
  </section>

</body>

</html>