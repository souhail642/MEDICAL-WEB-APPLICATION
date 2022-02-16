<?php
	include "../../../model/class.php";
	require_once "../../../controller/function.php";

	$function=new consul;
	$listeRdv=$function->afficherRdv();

?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste Rendez-Vous </title>
    </head>
    <body>
		<button><a href="ajouterRdv.php">Ajouter un Rendez-Vous</a></button>
		<hr>
		<table border=1 align = 'center'>
			<tr>
				<th>Id_rdv</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>E-mail</th>
				<th>Phone</th>
				<th>Speciality</th>
				<th>Date</th>
				<th>Hours</th>
				<th>Description</th>
				<th>Supprimer</th>
				<th>Modifier</th>
			</tr>

			<?PHP
				foreach($listeRdv as $rdv){
			?>
				<tr>
					<td><?PHP echo $rdv['id_rdv']; ?></td>
					<td><?PHP echo $rdv['first_name']; ?></td>
					<td><?PHP echo $rdv['last_name']; ?></td>
					<td><?PHP echo $rdv['email']; ?></td>
					<td><?PHP echo $rdv['phone']; ?></td>
					<td><?PHP echo $rdv['speciality']; ?></td>
					<td><?PHP echo $rdv['date1']; ?></td>
					<td><?PHP echo $rdv['hours']; ?></td>
					<td><?PHP echo $rdv['description']; ?></td>
					<td>
						<!--form method="POST" action="supprimerRdv.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $rdv['id_rdv']; ?> name="id_rdv">
						</form-->
						<a href="supprimerRdv.php?id=<?PHP echo $rdv['id_rdv']; ?>"> Supprimer </a>
					</td>
					<td>
						<a href="modifierRdv.php?id=<?PHP echo $rdv['id_rdv']; ?>"> Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>
