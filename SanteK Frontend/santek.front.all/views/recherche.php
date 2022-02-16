<?php
    require_once '../Controller/eventC.php';

    $eventC =  new EventC();

?>

	<section class="container">
		<h2></h2>
		<div class="form-container">
            <form action="" method = 'POST'>
                <div class="row">
                    <div class="col-25">                
                        <label>Search Title: </label>
                    </div>
                    <div class="col-75">
                        <input type = "text" name = 'evenement'>

                    </div>
                </div>
                <br>
                <div class="row">
                    <input type = "submit" value = "Search" name ="search">
                </div>
            </form>
		</div>
	</section>
    <?php
		if (isset($_POST['evenement']) && isset($_POST['search'])){
			$result = $eventC->rechercherEventID($_POST['evenement']);
			if ($result !== false) {
	?>
    				<div class="">
					<?= $result['nom_event'] ?> 
					<?= $result['lieu_event'] ?> 
						<?= $result['date_debut'] ?> 
						<?= $result['date_fin'] ?> 
					</div>
				</div>
    <?php
		}
		else {
			echo "<div> No results found!!! </div>";
		}
	}
	?>