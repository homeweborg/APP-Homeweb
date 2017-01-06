<?php
/* FICHIER REGROUPANT TOUTES LES FONCTIONS PHP ANNEXES */
require("../Modele/connexionBDD.php");

function Etat_eau($id,$db)
{
    
    /* Cette fonction renvoi l'état du capteur d'eau (ON/OFF) 
    dans la base de données. Le capteur d'eau de l'utilisateur
    est identifier grâce à son id. */

    // On initialise la variable 'etat', elle est initialement ni = 0 ni = 1
    $etat = 2;

    // On cherche dans la base de données la valeur de 'etat' grace à id
    
    $reponse = $db->prepare('SELECT etat FROM eau WHERE id= ?');
    $reponse->execute(array($id));

    // On place la valeur trouvée dans la variable 'etat' créée au début de la fonction
    while ($donnees = $reponse->fetch())
    {
	   $etat = $donnees['etat'];
    }

    // On renvoie la variable 'etat' au programme qui a appelé la fonction
    return $etat;
    
    /* 
Le but final de cette fonction est que les boutons correspondants 
au capteur d'eau, indique l'etat du capteur tel qu'il est 
dans la base de données : ON ou OFF. Pour cela on fera une instruction
telle que : <input type="checkbox" <?php if (Etat_eau(1) == 1) { ?> checked <?php } ?> > 

Les fonctions Etat_gaz, Etat_elec etc ... marcherons exactement sur
le même principe.
    */
    
}

function Etat_elec($id,$db)
{
    $etat = 2;
    
    $reponse = $db->prepare('SELECT etat FROM elec WHERE id= ?');
    $reponse->execute(array($id));

    while ($donnees = $reponse->fetch())
    {
	   $etat = $donnees['etat'];
    }
    
    return $etat;
    
}

function Etat_gaz($id,$db)
{
    $etat = 2;
    
    $reponse = $db->prepare('SELECT etat FROM gaz WHERE id= ?');
    $reponse->execute(array($id));

    while ($donnees = $reponse->fetch())
    {
	   $etat = $donnees['etat'];
    }
    
    return $etat;
    
}

function Etat_porte($id,$db)
{
    $etat = 2;
    
    $reponse = $db->prepare('SELECT etat FROM porte WHERE id= ?');
    $reponse->execute(array($id));

    while ($donnees = $reponse->fetch())
    {
	   $etat = $donnees['etat'];
    }
    
    return $etat;
    
}

function Conso_Elec($id,$db)
{
    // Fonction renvoyant la consommation d'électricité présente dans la base de données
    
    $conso = -1;
    
    $reponse = $db->prepare('SELECT consomation FROM elec WHERE id= ?');
    $reponse->execute(array($id));

    while ($donnees = $reponse->fetch())
    {
	   $conso = $donnees['consomation'];
    }
    
    return $conso;  
    
}

function Conso_Gaz($id,$db)
{
    // Fonction renvoyant la consommation de gaz présente dans la base de données
    
    $conso = -1;
    
    $reponse = $db->prepare('SELECT consomation FROM gaz WHERE id= ?');
    $reponse->execute(array($id));

    while ($donnees = $reponse->fetch())
    {
	   $conso = $donnees['consomation'];
    }
    
    return $conso;  
    
}

function Conso_Eau($id,$db)
{
    // Fonction renvoyant la consommation d'eau présente dans la base de données
    
    $conso = -1;
    
    $reponse = $db->prepare('SELECT consomation FROM eau WHERE id= ?');
    $reponse->execute(array($id));

    while ($donnees = $reponse->fetch())
    {
	   $conso = $donnees['consomation'];
    }
    
    return $conso;  
    
}

function Estim_Elec($id,$db)
{
    // Estime le prix de la consommation délectricité
    $estim = -1;
    
    // On multiplie la conso par le prix moyen d'un kWh
    // Ceil arrondit au nombre entier supérieur
    $estim = ceil((Conso_Elec($id,$db))*(0.5691));
    
    return $estim;
    
}

function Estim_Gaz($id,$db)
{
    // Estime le prix de la consommation gaz
    
    $estim = -1;
    
    $estim = ceil((Conso_Gaz($id,$db))*(9.5));
    
    return $estim;
    
}

function Estim_Eau($id,$db)
{
    // Estime le prix de la consommation eau
    $estim = -1;
    
    $estim = ceil((Conso_Eau($id,$db))*(3.1));
    
    return $estim;
    
}

function cascade_temp($id,$db)
{
    /* Cette fonction affiche une a une les pièce que possède un utilisateur (cascade)
     dotée(s) d'un capteur de temperature */
    
    $nom_piece = "";
    
    $reponse = $db->prepare('SELECT Nom FROM Pieces WHERE id_Utilisateur = ? AND presence_temp = 1');
    $reponse->execute(array($id));
    
    echo "<ul>";
    while ($donnees = $reponse->fetch())
    {
        $nom_piece = $donnees['Nom'];
        echo ("<li><a href=\"temperature.php\">" . $nom_piece . "</a></li>") ;
    }
    echo "</ul>";
}

function cascade_lum($id,$db)
{
    /* Cette fonction affiche une a une les pièce que possède un utilisateur (cascade)
     dotée(s) d'un capteur de lumière */
    
    $nom_piece = "";
    
    $reponse = $db->prepare('SELECT Nom FROM Pieces WHERE id_Utilisateur = ? AND presence_lum = 1');
    $reponse->execute(array($id));
    
    echo "<ul>";
    while ($donnees = $reponse->fetch())
    {
        $nom_piece = $donnees['Nom'];
        echo ("<li><a href=\"lumiere.php\">" . $nom_piece . "</a></li>") ;
    }
    echo "</ul>";
}

function temp_moyenne($id,$db)
{
    /* Cette fonction calcul la temperature moyenne de la maison */
    
    
    $temp_m = 0;
    $n = 0;
    
    $reponse = $db->prepare('SELECT temperature FROM Pieces WHERE id_Utilisateur= ? AND presence_temp = 1');
    $reponse->execute(array($id));

    while ($donnees = $reponse->fetch())
    {
        $temp_m = $temp_m + $donnees['temperature'];
        $n = $n + 1;
    }
    
    $temp_m = $temp_m / $n;
    
    return $temp_m;
}

function nombre_lum_on($id,$db)
{
    /* Cette fonction calcul le nombre de lumière allumée(s) */
    
    $n_lum = 0;
    
    $reponse = $db->prepare('SELECT lumiere FROM Pieces WHERE id_Utilisateur= ? AND presence_lum = 1');
    $reponse->execute(array($id));

    while ($donnees = $reponse->fetch())
    {
        $etat = $donnees['lumiere'];
        $n_lum = $n_lum + $etat;
    }
    
    return $n_lum;
}

function cascade_suppr($id,$db)
{
    /* Cette fonction affiche une a une les pièce que possède un utilisateur (cascade)
     dotée(s) d'un capteur de lumière */
    
    $nom_piece = "";
    
    $reponse = $db->prepare('SELECT Nom FROM Pieces WHERE id_Utilisateur = ? AND presence_lum = 1');
    $reponse->execute(array($id));
    
    echo "<ul>
            <li><b>PIÈCES</b> <span><b>SUPPRIMER</b></span></li>
            <form method=\"POST\" action=\"#\"> ";
    while ($donnees = $reponse->fetch())
    {
        $nom_piece = $donnees['Nom'];
        echo ("<li>" . $nom_piece . "<input type=\"checkbox\"></li>") ;
    }
    echo "  </form>
                </ul>";
}
?>