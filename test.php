<div id="particles-js"></div>
<div class="staff">
 
<?php
         
        $bdd = new PDO('mysql:host=*****;dbname=****;charset=utf8', '****', '****');
        $reponse = $bdd->query('SELECT * FROM boutiqueitems');
        ?>
        <div class="container">
        <h1>Nos articles</h1>
 
         
        <div class="card-deck">
 
        <?php
        while ($donnees = $reponse->fetch()) {
            ?>
            <style> .image{margin: auto;}</style>
            <div class="card">
              <img class="image" src="<?php echo $donnees['Imagelink']; ?>" width="50px" height="100px" alt="image">
              <div class="card-body">
                <h5 class="card-title"><?php echo $donnees['Nom']; ?></h5>
                <p class="card-text"><?php echo $donnees['Descriptionlongue']; ?></p>
                <p class="card-text"><small class="text-muted"><?php echo $donnees['Categorie']; ?></small></p>
              </div>
        </div>
        <?php
        }
        ?>