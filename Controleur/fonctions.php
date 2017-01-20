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
    
    /* Cette fonction va chercher l'etat du capteur dans la bdd : éteind (couleur : noire, valeur = 0)
    , suit la consigne (couleur : orange, valeur = 2), marche (couleur : vert, valeur = 1), en panne
    (couleur : rouge, valeur = 3) puis affiche la pastille correspondante à droite de la pièce. */
    
    $nom_piece = "";
    
    $reponse = $db->prepare('SELECT Nom, etat_temp FROM Pieces WHERE id_Utilisateur = ? AND presence_temp = 1');
    $reponse->execute(array($id));
    
    echo "<ul>";
    while ($donnees = $reponse->fetch())
    {
        
        $nom_piece = $donnees['Nom'];
        $etat = $donnees['etat_temp'];
        
        if ($etat == 0)
        {
        echo ("<li><a href=\"temperature.php?piece=$nom_piece\">" . $nom_piece . "</a> <span><img src=\"../image/Pastille_noire.png\" title=\"Éteint\"></span></li>");
        }
            
        if ($etat == 1)
        {
        echo ("<li><a href=\"temperature.php?piece=$nom_piece\">" . $nom_piece . "</a> <span><img src=\"../image/Pastille_verte.png\" title=\"Marche\"></span></li>");
        }
        
        if ($etat == 2)
        {
        echo ("<li><a href=\"temperature.php?piece=$nom_piece\">" . $nom_piece . "</a> <span><img src=\"../image/Pastille_orange.png\" title=\"En cours de régulation\"></span></li>");
        }
        
        if ($etat == 3)
        {
        echo ("<li><a href=\"temperature.php?piece=$nom_piece\">" . $nom_piece . "</a> <span><img src=\"../image/Pastille_rouge.png\" title=\"En Panne\"></span></li>");
        }
        
    }
    echo "</ul>";
}

function cascade_lum($id,$db)
{
    /* Cette fonction affiche une a une les pièce que possède un utilisateur (cascade)
     dotée(s) d'un capteur de lumière */
    
    /* Cette fonction va chercher l'etat du capteur dans la bdd : éteind (couleur : noire, valeur = 0)
    , suit la consigne (couleur : orange, valeur = 2), marche (couleur : vert, valeur = 1), en panne
    (couleur : rouge, valeur = 3) puis affiche la pastille correspondante à droite de la pièce. */
    
    $nom_piece = "";
    
    $reponse = $db->prepare('SELECT Nom, lumiere FROM Pieces WHERE id_Utilisateur = ? AND presence_lum = 1');
    $reponse->execute(array($id));
    
    echo "<ul>";
    while ($donnees = $reponse->fetch())
    {
        
        $nom_piece = $donnees['Nom'];
        $etat = $donnees['lumiere'];
        
        if ($etat == 0)
        {
        echo ("<li><a href=\"lumiere.php?piece=$nom_piece\">" . $nom_piece . "</a> <span><img src=\"../image/Pastille_noire.png\" title=\"Eteint\"></span></li>");
        }
            
        if ($etat == 1)
        {
        echo ("<li><a href=\"lumiere.php?piece=$nom_piece\">" . $nom_piece . "</a> <span><img src=\"../image/Pastille_verte.png\" title=\"Allumé\"></span></li>");
        }
        
        if ($etat == 2)
        {
        echo ("<li><a href=\"lumiere.php?piece=$nom_piece\">" . $nom_piece . "</a> <span><img src=\"../image/Pastille_orange.png\" title=\"En cours de régulation\"></span></li>");
        }
        
        if ($etat == 3)
        {
        echo ("<li><a href=\"lumiere.php?piece=$nom_piece\">" . $nom_piece . "</a> <span><img src=\"../image/Pastille_rouge.png\" title=\"En panne\"></span></li>");
        }
        
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
    
    return ceil($temp_m);
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
    
    $reponse = $db->prepare('SELECT Nom FROM Pieces WHERE id_Utilisateur = ?');
    $reponse->execute(array($id));
    
    echo "<ul>
            <li><b>PIÈCES</b> <span><b>SUPPRIMER</b></span></li>
            <form method=\"POST\" action=\"../Controleur/supprimer_page.php\"> ";
    while ($donnees = $reponse->fetch())
    {
        $nom_piece = $donnees['Nom'];
        echo ("<li>" . $nom_piece . "<input type=\"checkbox\" name=\"box[]\" value=\"$nom_piece\" \"></li>") ;
    }
    echo "  
    <input class=\"boutons_retour\" type=\"submit\" value=\"Retour\" onClick=\"window.location.href='etat.php'\">
    <input class=\"boutons_retour\" type=\"submit\" value=\"Confirmer la suppression\" >
    </form>
                </ul>";
}

function etat_general_capteur($id,$db)
{
    // Cette fonction affiche une pastille de couleur générale pour l'état des capteur
    
    $etat_general = 0;
    
    $reponse = $db->prepare('SELECT etat_temp FROM Pieces WHERE id_Utilisateur = ?');
    $reponse->execute(array($id));
    
    while ($donnees = $reponse->fetch())
    {
        if ($donnees['etat_temp'] > $etat_general)
        {
        
        // On prend le max des valeurs des etats des capteurs, plus la valeur est importante
        // plus la donnée l'est aussi.
            
        $etat_general = $donnees['etat_temp'];
        
        }
    }
    
    $reponse = $db->prepare('SELECT lumiere FROM Pieces WHERE id_Utilisateur = ?');
    $reponse->execute(array($id));
    
    while ($donnees = $reponse->fetch())
    {
        if ($donnees['lumiere'] > $etat_general)
        {
        
        $etat_general = $donnees['lumiere'];
        
        }
    }
    
    // On affiche l'etat général du capteur
    
    if ($etat_general == 0)
        {
        echo ("<span><img src=\"../image/Pastille_noire.png\" title=\"Eteint\"></span>");
        }
            
        else if ($etat_general == 1)
        {
        echo ("<span><img src=\"../image/Pastille_verte.png\" title=\"Allumé\"></span>");
        }
        
        else if ($etat_general == 2)
        {
        echo ("<span><img src=\"../image/Pastille_orange.png\" title=\"En cours de régulation\"></span>");
        }
        
        else if ($etat_general == 3)
        {
        echo ("<span><img src=\"../image/Pastille_rouge.png\" title=\"En panne\"></span>");
        }
      
}

function affiche_temperature($id,$db)
{
    // Affiche la température d'une pièce
    
    $nom_piece = $_GET['piece'];
    
    $reponse = $db->prepare('SELECT temperature FROM Pieces WHERE id_Utilisateur = ? AND Nom = ?');
    $reponse->execute(array($id, $nom_piece));
    
    while ($donnees = $reponse->fetch())
    {
        echo ($donnees['temperature']);    
    }
}

function affiche_etat_capt_temp($id,$db)
{
    // Affiche le numéro d'un capteur de température pour une pièce donnée
    
    $nom_piece = $_GET['piece'];
    $etat_general = 4;
    
    $reponse = $db->prepare('SELECT etat_temp FROM Pieces WHERE id_Utilisateur = ? AND Nom = ?');
    $reponse->execute(array($id, $nom_piece));
    
    while ($donnees = $reponse->fetch())
    {
        $etat_general = $donnees['etat_temp'];    
    }
    
    if ($etat_general == 0)
        {
        echo ("<span><img src=\"../image/Pastille_noire.png\" title=\"Eteint\"></span>");
        }
            
        else if ($etat_general == 1)
        {
        echo ("<span><img src=\"../image/Pastille_verte.png\" title=\"Allumé\"></span>");
        }
        
        else if ($etat_general == 2)
        {
        echo ("<span><img src=\"../image/Pastille_orange.png\" title=\"En cours de régulation\"></span>");
        }
        
        else if ($etat_general == 3)
        {
        echo ("<span><img src=\"../image/Pastille_rouge.png\" title=\"En panne\"></span>");
        }
}

function affiche_num_capt_temp($id,$db)
{
    // Affiche le numéro du capteur de température
    
    $nom_piece = $_GET['piece'];
    $num = "ERREUR";
    
    $reponse = $db->prepare('SELECT numero_capteur_t FROM Pieces WHERE id_Utilisateur = ? AND Nom = ?');
    $reponse->execute(array($id, $nom_piece));
    
    while ($donnees = $reponse->fetch())
    {
        $num= $donnees['numero_capteur_t'];
    }
    
    echo ($num);
}

function affiche_contol_tech_temp($id,$db)
{
    // Affiche le numéro du capteur de température
    
    $nom_piece = $_GET['piece'];
    $date = "ERREUR";
    
    $reponse = $db->prepare('SELECT control_tech_t FROM Pieces WHERE id_Utilisateur = ? AND Nom = ?');
    $reponse->execute(array($id, $nom_piece));
    
    while ($donnees = $reponse->fetch())
    {
        $date= $donnees['control_tech_t'];
    }
    
    echo ($date);
}

function affiche_etat_capt_lum($id,$db)
{
    // Affiche le numéro d'un capteur de lumière pour une pièce donnée
    
    $nom_piece = $_GET['piece'];
    $etat_general = 4;
    
    $reponse = $db->prepare('SELECT lumiere FROM Pieces WHERE id_Utilisateur = ? AND Nom = ?');
    $reponse->execute(array($id, $nom_piece));
    
    while ($donnees = $reponse->fetch())
    {
        $etat_general = $donnees['lumiere'];    
    }
    
    if ($etat_general == 0)
        {
        echo ("<span><img src=\"../image/Pastille_noire.png\" title=\"Eteint\"></span>");
        }
            
        else if ($etat_general == 1)
        {
        echo ("<span><img src=\"../image/Pastille_verte.png\" title=\"Allumé\"></span>");
        }
        
        else if ($etat_general == 3)
        {
        echo ("<span><img src=\"../image/Pastille_rouge.png\" title=\"En panne\"></span>");
        }
}

function Etat_lum($id,$db)
{
    // Place le bouton checkbox correctement
    
    $nom_piece = $_GET['piece'];
    $etat = "ERREUR";
    
    $reponse = $db->prepare('SELECT lumiere FROM Pieces WHERE id_Utilisateur = ? AND Nom = ?');
    $reponse->execute(array($id, $nom_piece));
    
    while ($donnees = $reponse->fetch())
    {
        $etat= $donnees['lumiere'];
    }
    
    return ($etat);
}

function affiche_contol_tech_lum($id,$db)
{
    // Affiche le numéro du capteur de lumière
    
    $nom_piece = $_GET['piece'];
    $date = "ERREUR";
    
    $reponse = $db->prepare('SELECT control_tech_l FROM Pieces WHERE id_Utilisateur = ? AND Nom = ?');
    $reponse->execute(array($id, $nom_piece));
    
    while ($donnees = $reponse->fetch())
    {
        $date= $donnees['control_tech_l'];
    }
    
    echo ($date);
}

function affiche_num_capt_lum($id,$db)
{
    // Affiche le numéro du capteur de lumière
    
    $nom_piece = $_GET['piece'];
    $num = "ERREUR";
    
    $reponse = $db->prepare('SELECT numero_capteur_l FROM Pieces WHERE id_Utilisateur = ? AND Nom = ?');
    $reponse->execute(array($id, $nom_piece));
    
    while ($donnees = $reponse->fetch())
    {
        $num= $donnees['numero_capteur_l'];
    }
    
    echo ($num);
}

function affiche_consigne_temp($id,$db)
{
    // Affiche la valeur demandé par l'utilisateur
    
    $nom_piece = $_GET['piece'];
    $consigne = "ERREUR";
    
    $reponse = $db->prepare('SELECT consigne_temp FROM Pieces WHERE id_Utilisateur = ? AND Nom = ?');
    $reponse->execute(array($id, $nom_piece));
    
    while ($donnees = $reponse->fetch())
    {
        $consigne= $donnees['consigne_temp'];
    }
    
    echo ($consigne);
}

function pastille_etat_eau($id,$db)
{
    // Affiche la pastille eau
    
    $etat_general = Etat_eau($id,$db);
        
    if ($etat_general == 0)
        {
        echo ("<span><img src=\"../image/Pastille_noire.png\" title=\"Eteint\"></span>");
        }
            
        else if ($etat_general == 1)
        {
        echo ("<span><img src=\"../image/Pastille_verte.png\" title=\"Allumé\"></span>");
        }
        
        else if ($etat_general == 3)
        {
        echo ("<span><img src=\"../image/Pastille_rouge.png\" title=\"En panne\"></span>");
        }
}

function pastille_etat_gaz($id,$db)
{
    // Affiche la pastille gaz
    
    $etat_general = Etat_gaz($id,$db);
        
    if ($etat_general == 0)
        {
        echo ("<span><img src=\"../image/Pastille_noire.png\" title=\"Eteint\"></span>");
        }
            
        else if ($etat_general == 1)
        {
        echo ("<span><img src=\"../image/Pastille_verte.png\" title=\"Allumé\"></span>");
        }
        
        else if ($etat_general == 3)
        {
        echo ("<span><img src=\"../image/Pastille_rouge.png\" title=\"En panne\"></span>");
        }
}

function pastille_etat_elec($id,$db)
{
    // Affiche la pastille elec
    
    $etat_general = Etat_elec($id,$db);
        
    if ($etat_general == 0)
        {
        echo ("<span><img src=\"../image/Pastille_noire.png\" title=\"Eteint\"></span>");
        }
            
        else if ($etat_general == 1)
        {
        echo ("<span><img src=\"../image/Pastille_verte.png\" title=\"Allumé\"></span>");
        }
        
        else if ($etat_general == 3)
        {
        echo ("<span><img src=\"../image/Pastille_rouge.png\" title=\"En panne\"></span>");
        }
}

?>