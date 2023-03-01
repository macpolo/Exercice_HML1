<?php
if(isset($_POST['submit'])){
	$ANNEE = $_POST['annee'];

	$base = new PDO('mysql:host=localhost; dbname=id20205709_movies', 'id20205709_macpolo', 'Daniela75015/');
	$retour = $base->query('SELECT * FROM movies WHERE annee='.$ANNEE.';');

	if($retour->rowCount() > 0){
		echo '<ul>';
		while($ligne = $retour->fetch()){
			echo '<li><h3>'.$ligne['titre'].'</h3></li>';
		}
		echo '</ul>';
	}
	else{
		echo 'Aucun film trouvé pour l\'année '.$ANNEE.'.';
	}
}
?>
