
<?php
    if(isset($_SESSION['message']))
    {
        echo '<p style="color:green">'.$_SESSION['message'].'</p>';
    }
    $requete = $bdd->query('SELECT * FROM actors ORDER BY actor_name');
    while ($donnees = $requete->fetch()) 
    { 
    ?>
        <div class= "list_actors">
        <img src= <?php echo $donnees["logo"];?> class="actor_logo">
        <h3> <?php echo $donnees["actor_name"];?></h3>
        <?php echo substr($donnees["description"],0,70);?>
        <a href="page_acteur.php?id_actor=<?php echo $donnees["id_actor"];?>">
        <input type="submit" class="button_suite" value="Afficher la suite"></a></p>
        </div>
        <?php
    }  
    $requete->closeCursor(); 
                       