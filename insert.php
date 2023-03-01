<html>
<body>
<h1>test</h1>
<?php

$TITRE= $_GET['titre'];
$GENRE = $_GET['genre'];
$ANNEE = $_GET['annee'];

echo $TITRE." ".$GENRE." ".$ANNEE; 

//1° - Connexion à la BDD
$base = new PDO('mysql:host=localhost; dbname=id20205709_movies', 'id20205709_macpolo', 'Daniela75015/');
$base->exec("SET CHARACTER SET utf8");
$sql = 'INSERT INTO movies VALUES(NULL,"'.$TITRE.'","'.$GENRE.'",'.$ANNEE.')';
//2° - Préparation de requette et execution
$retour = $base->query($sql);

?>
</body>
</html>
