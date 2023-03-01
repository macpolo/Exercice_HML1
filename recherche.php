<?php
if(isset($_POST['submit'])){
	$ANNEE = $_POST['annee'];

	$base = new PDO('mysql:host=localhost; dbname=id20205709_movies', 'id20205709_macpolo', 'Daniela75015/');
<form method="post" action="">
    <select name="choix_annee" id="choix_annee">
        <option>Sélectionnez l'année</option>
        <?php
            $req_annee = $base->query('SELECT DISTINCT annee FROM movies ORDER BY annee ASC');
            while($annee = $req_annee->fetch()) {
        ?>
            <option value="<?php echo $annee['annee']; ?>"><?php echo $annee['annee']; ?></option>
        <?php
            }
        ?>
    </select>
    <input type="submit" value="Rechercher" name="rechercher" />
</form>

<?php
    if(isset($_POST['rechercher'])) {
        $annee = $_POST['choix_annee'];
        $retour = $base->query('SELECT * FROM movies WHERE annee='.$annee.';');
        if($retour->rowCount() > 0) {
?>
            <h3>La liste des films de l'année <?php echo $annee; ?></h3>
            <ul>
<?php
            while($film = $retour->fetch()) {
?>
                <li><?php echo $film['titre']; ?></li>
<?php
            }
?>
            </ul>
<?php
        }
    }
?>
