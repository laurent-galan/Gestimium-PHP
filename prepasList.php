<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css"rel="stylesheet"type="text/css">
    <title>Gestimium</title>
</head>
<body>
    <div class="header">
        <?php include 'navbar.php'; ?>
    </div>
<div>
<?php 
$bdd = new PDO('mysql:host=localhost;dbname=product', 'root' , 'root');
$response = $bdd->query('SELECT * FROM product');
while($donnees = $response->fetch())
{
    echo  '<p>' . $donnees['id'] 
                .' - '
                . $donnees['name'] 
                .' - '
                . $donnees['price']
                . ' € ' 
                . '</p>';
}
?>

</body>
</html>