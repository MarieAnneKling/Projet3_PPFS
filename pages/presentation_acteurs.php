<?php
session_start();
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="..\styles\style.css" />
    
    <head>
        <?php include("..\communs\head.php");?>
    </head>

    <body>        
        <?php require ("..\communs\bdd_gbaf.php");?>
        <?php include("..\communs\header.php");?>

         <div id="container">         

                <h1>Présentation du groupement Banque Assurance Français</h1>        
                
                <section id="presentation">
                <p>Le Groupement Banque Assurance Français (GBAF) est une fédération représentant les 6 grands groupes français : </p>
                <p><div class="actors_list">
                    <table>
                        <tr>
                            <td><ul>
                                <li>BNP Paribas</li>
                                <li>BPCE</li>
                                <li>Crédit Agricole</li>
                                </ul>
                            </td>
                            <td><ul>
                                <li>Crédit Mutuel - CIC</li>
                                <li>Société Générale</li>
                                <li>La Banque Postale</li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>
                </p>
                <p>Même s’il existe une forte concurrence entre ces entités, elles vont toutes travailler de la même façon pour gérer près de 80 millions de comptes sur le territoire national.
                Le GBAF est le représentant de la profession bancaire et des assureurs sur tous les axes de la réglementation financière française. Sa mission est de promouvoir l'activité bancaire à l’échelle nationale. C’est aussi un interlocuteur privilégié des pouvoirs publics.</p>
                </section>
            
                <section id="illustration">
                <img src="..\images\Strasbourg_Banque-de-France.jpg" alt="Strasbourg_Banque-de-France"/></div></p> 
                </section>
                
                <section id="actors">    
                <h2>Présentation des acteurs</h2><br/>
                
                <p>Texte acteurs et partenaires</p> 
                <ul>
                    <div class= "list_actors">


                    <?php

                    if(isset( $_SESSION['message']))
                    {
                        echo '<p style="color:green">'.$_SESSION['message'].'</p>';
                     }
                    $requete = $bdd->query('SELECT * FROM actors ORDER BY actor_name');
                    while ($donnees = $requete->fetch()) 
                   
                    { 

                        ?>

                    <img class="img_actor" src= <?php echo $donnees["logo"];?>>
                    <div class="text_actor">
                        <h3> <?php echo $donnees["actor_name"];?></h3>
                        <p class="description"><?php echo substr($donnees["description"],0,100);?></p>
                    <div/>
                    <div class="bouton_suite">
                    <a href="page_acteur.php?id_actor=<?php echo $donnees["id_actor"];?>">
                    <input type="submit" value="Afficher la suite"></a></div>
                    
                    <?php
                    }
                    $requete->closeCursor();        
                    ?>  
                    </div>  

                </section>   

          </ul>    

     	<?php include("../communs/Footer.php");?>
          
    </body>
</html>

