
<?php
$base = new PDO('mysql:host=localhost; dbname=id20205709_movies', 'id20205709_macpolo', 'Daniela75015/');
if (isset($_POST['annee'])){
  $annee=$_POST['annee'];
  $retour = $base->query('SELECT * FROM movies WHERE annee='.$annee.';');
  while ($donnees = $retour->fetch()){
    echo "<p>".$donnees['titre']." (".$donnees['annee'].")</p>";
  }
}
?>
