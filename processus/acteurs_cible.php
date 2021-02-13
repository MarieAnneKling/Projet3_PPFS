
<?php
  //Requête pour récupérer les informations des acteurs dans la base de données
    $requete = $bdd->query('SELECT * FROM actors ORDER BY actor_name');
    while ($donnees = $requete->fetch()) 
    { 
    ?>
        <div class= "list_actors">
        <!-- Affichage du logo, du nom de l'acteur, de la description abrégée et d'un bouton pour afficher la suite des informations-->
        <img src= <?php echo $donnees["logo"];?> class="actor_logo">
        <h3> <?php echo $donnees["actor_name"];?></h3>
        <?php echo substr($donnees["description"],0,70);?>
        <a href="page_acteur.php?id_actor=<?php echo $donnees["id_actor"];?>">
        <input type="submit" class="button_suite" value="Afficher la suite"></a></p>
        </div>
        <?php
    }  
    $requete->closeCursor(); 
                       