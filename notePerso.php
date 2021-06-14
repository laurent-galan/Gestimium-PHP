<!-- select :  -->

<?php 
$bdd = new PDO('mysql:host=localhost;dbname=product', 'root' , 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$response = $bdd->query('SELECT * FROM product');
// $requete->execute(array($_GET['nom']));
while ($donnees = $response->fetch())
{
    echo '<p>'. $donnees['id'] . ' - ' . $donnees['name'] . " => " 
    . $donnees['price'] . ' €' .'</p>';
}
?>

<!-- insert into  -->

<?php 
$bdd = new PDO('mysql:host=localhost;dbname=product', 'root' , 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$response = $bdd->query('INSERT INTO product(name, type, price) VALUES (?, ?, ?)');
while ($donnees = $response->fetch())
{
    echo '<p>'. $donnees['id'] . ' - ' . $donnees['name'] . " => " 
    . $donnees['price'] . ' €' .'</p>';
}
?>



<!-- https://fr.wikibooks.org/wiki/Programmation_SQL/Mots_r%C3%A9serv%C3%A9s -->