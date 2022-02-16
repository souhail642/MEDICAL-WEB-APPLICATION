<?php
	include "../model/class.php";
	require_once "../controllers/function.php";

	$fct=new consul;
	$listeDossier=$fct->afficherDossier();

?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Rapport Du Patient </title>
    </head>
    <body>
		<button><a href="dossier.php">Ajouter Information du Patient</a></button>
		<hr>
		<table border=1 align = 'center'>
			<tr>
				<th>Nom_patient</th>
				<th>date_n</th>
				<th>adresses</th>
				<th>faxe</th>
				<th>type_rap</th>
				<th>periode</th>
				<th>Supprimer</th>
				<th>Modifier</th>
			</tr>

			<?PHP
				foreach($listeDossier as $dossier){
			?>
				<tr>
					<td><?PHP echo $dossier['nom_patient']; ?></td>
					<td><?PHP echo $dossier['date_n']; ?></td>
					<td><?PHP echo $dossier['adresses']; ?></td>
					<td><?PHP echo $dossier['faxe']; ?></td>
					<td><?PHP echo $dossier['type_rap']; ?></td>
					<td><?PHP echo $dossier['periode']; ?></td>
					<td>
						<!--form method="POST" action="supprimerDossier.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $dossier['nom_patient']; ?> name="nom_patient">
						</form-->
						<a href="supprimerDossier.php?id=<?PHP echo $dossier['nom_patient']; ?>"> Supprimer </a>
					</td>
					<td>
						<a href="modifierDossier.php?id=<?PHP echo $dossier['nom_patient']; ?>"> Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>
