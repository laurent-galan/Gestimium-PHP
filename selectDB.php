<?php 
$bdd = new PDO('mysql:host=localhost;dbname=product', 'root' , 'root');
$response = $bdd->query('SELECT * FROM product');
while($donnees = $response->fetch())
{
    echo '<p>' . $donnees['id'] . '</p>';
}
?>