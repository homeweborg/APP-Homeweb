<?php
/* FICHIER REGROUPANT TOUTES LES FONCTIONS PHP ANNEXES */
require("connexionBDD.php");

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

function Estim_Elec($id,$db,$prix = 0.5691)
{
    // Estime le prix de la consommation délectricité
    $estim = -1;
    
    // On cherche si l'utilisateur a rentré une préférence de tarif dans la bdd

    $reponse = $db->prepare('SELECT prix_elec FROM elec WHERE id= ?');
    $reponse->execute(array($id));

    while ($donnees = $reponse->fetch())
    {
	   $prix = $donnees['prix_elec'];
    }
    
    $prix = floatval($prix);
    
    // On multiplie la conso par le prix moyen d'un kWh
    // Ceil arrondit au nombre entier supérieur
    $estim = ceil((Conso_Elec($id,$db))*($prix));
    
    return $estim;
    
}

function Estim_Gaz($id,$db,$prix = 9.5)
{
    // Estime le prix de la consommation gaz
    
    $estim = -1;
    
    $reponse = $db->prepare('SELECT prix_gaz FROM gaz WHERE id= ?');
    $reponse->execute(array($id));

    while ($donnees = $reponse->fetch())
    {
	   $prix = $donnees['prix_gaz'];
    }
    
    $prix = floatval($prix);
    
    $estim = ceil((Conso_Gaz($id,$db))*($prix));
    
    return $estim;
    
}

function Estim_Eau($id,$db,$prix = 3.1)
{
    // Estime le prix de la consommation eau
    $estim = -1;
    
    // On cherche si l'utilisateur a rentré une préférence de tarif dans la bdd

    $reponse = $db->prepare('SELECT prix_eau FROM eau WHERE id= ?');
    $reponse->execute(array($id));

    while ($donnees = $reponse->fetch())
    {
	   $prix = $donnees['prix_eau'];
    }
    
    $prix = floatval($prix);
    
    $estim = ceil((Conso_Eau($id,$db))*($prix));
    
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
    
    //ON RAFRAICHIS L'ETAT DES PASTILLES ORANGE
    verif_consign($id,$db);
    
    $reponse = $db->prepare('SELECT Nom, etat_temp FROM Pieces WHERE id_Utilisateur = ? AND presence_temp = 1');
    $reponse->execute(array($id));
    
    echo "<ul class=\"current\">";
    while ($donnees = $reponse->fetch())
    {
        
        $nom_piece = $donnees['Nom'];
        $etat = $donnees['etat_temp'];
        
        if ($etat == 0)
        {
        echo ("<li><a href=\"temperature.php?piece=$nom_piece\">" . $nom_piece . "</a> <span><img src=\"../../Styles/image/Pastille_noire.png\" title=\"Éteint\"></span></li>");
        }
            
        if ($etat == 1)
        {
        echo ("<li><a href=\"temperature.php?piece=$nom_piece\">" . $nom_piece . "</a> <span><img src=\"../../Styles/image/Pastille_verte.png\" title=\"Marche\"></span></li>");
        }
        
        if ($etat == 2)
        {
        echo ("<li><a href=\"temperature.php?piece=$nom_piece\">" . $nom_piece . "</a> <span><img src=\"../../Styles/image/Pastille_orange.png\" title=\"En cours de régulation\"></span></li>");
        }
        
        if ($etat == 3)
        {
        echo ("<li><a href=\"temperature.php?piece=$nom_piece\">" . $nom_piece . "</a> <span><img src=\"../../Styles/image/Pastille_rouge.png\" title=\"En Panne\"></span></li>");
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
        echo ("<li><a href=\"lumiere.php?piece=$nom_piece\">" . $nom_piece . "</a> <span><img src=\"../../Styles/image/Pastille_noire.png\" title=\"Eteint\"></span></li>");
        }
            
        if ($etat == 1)
        {
        echo ("<li><a href=\"lumiere.php?piece=$nom_piece\">" . $nom_piece . "</a> <span><img src=\"../../Styles/image/Pastille_verte.png\" title=\"Allumé\"></span></li>");
        }
        
        if ($etat == 2)
        {
        echo ("<li><a href=\"lumiere.php?piece=$nom_piece\">" . $nom_piece . "</a> <span><img src=\"../../Styles/image/Pastille_orange.png\" title=\"En cours de régulation\"></span></li>");
        }
        
        if ($etat == 3)
        {
        echo ("<li><a href=\"lumiere.php?piece=$nom_piece\">" . $nom_piece . "</a> <span><img src=\"../../Styles/image/Pastille_rouge.png\" title=\"En panne\"></span></li>");
        }
        
    }
    echo "</ul>";
}

function temp_moyenne($id,$db)
{
    /* Cette fonction calcul la temperature moyenne de la maison */
    
    
    $temp_m = 0;
    $n = 0;
    
    $reponse = $db->prepare('SELECT temperature, etat_temp FROM Pieces WHERE id_Utilisateur= ? AND presence_temp = 1');
    $reponse->execute(array($id));

    while ($donnees = $reponse->fetch())
    {
        $etat = $donnees['etat_temp'];
        
        if ($etat != 0)
        {
        // On ne prend en compte que les températures des capteurs allumés 
        $temp_m = $temp_m + $donnees['temperature'];
        $n = $n + 1;
        }
        
    }
    
    if ($n != 0)
    {
        // Pour éviter la division par 0
        
        $temp_m = $temp_m / $n;

        return ceil($temp_m);
        
    }
    
    else
    {
        echo("Aucun capteur connecté");
    }
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
            <form method=\"POST\" action=\"../../Controleur/supprimer_page.php\"> ";
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
        echo ("<span><img src=\"../../Styles/image/Pastille_noire.png\" title=\"Eteint\"></span>");
        }
            
        else if ($etat_general == 1)
        {
        echo ("<span><img src=\"../../Styles/image/Pastille_verte.png\" title=\"Allumé\"></span>");
        }
        
        else if ($etat_general == 2)
        {
        echo ("<span><img src=\"../../Styles/image/Pastille_orange.png\" title=\"En cours de régulation\"></span>");
        }
        
        else if ($etat_general == 3)
        {
        echo ("<span><img src=\"../../Styles/image/Pastille_rouge.png\" title=\"En panne\"></span>");
        }
      
}

function affiche_temperature($id,$db)
{
    // Affiche la température d'une pièce
    
    $nom_piece = $_GET['piece'];
    
    $reponse = $db->prepare('SELECT temperature, etat_temp FROM Pieces WHERE id_Utilisateur = ? AND Nom = ?');
    $reponse->execute(array($id, $nom_piece));
    
    while ($donnees = $reponse->fetch())
    {
        $etat = $donnees['etat_temp'];
        
        if ($etat != 0)
        {
        // Si le capteur n'est pas éteint, on affiche la température
        echo ($donnees['temperature']);
        }
        else
        {
        // Si le capteur est éteint, on n'affiche pas la température
        echo("X");
        }
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
        echo ("<span><img src=\"../../Styles/image/Pastille_noire.png\" title=\"Eteint\"></span>");
        }
            
        else if ($etat_general == 1)
        {
        echo ("<span><img src=\"../../Styles/image/Pastille_verte.png\" title=\"Allumé\"></span>");
        }
        
        else if ($etat_general == 2)
        {
        echo ("<span><img src=\"../../Styles/image/Pastille_orange.png\" title=\"En cours de régulation\"></span>");
        }
        
        else if ($etat_general == 3)
        {
        echo ("<span><img src=\"../../Styles/image/Pastille_rouge.png\" title=\"En panne\"></span>");
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
    
    if ($date == 0000-00-00)
    {
        // Si aucun controle n'a été effectué, cela est indiqué
        echo("Aucun");
    }
    
    else
    {
        // Sinon on affiche la date
    echo ($date);
    }
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
        echo ("<span><img src=\"../../Styles/image/Pastille_noire.png\" title=\"Eteint\"></span>");
        }
            
        else if ($etat_general == 1)
        {
        echo ("<span><img src=\"../../Styles/image/Pastille_verte.png\" title=\"Allumé\"></span>");
        }
        
        else if ($etat_general == 3)
        {
        echo ("<span><img src=\"../../Styles/image/Pastille_rouge.png\" title=\"En panne\"></span>");
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
    
    if ($date == 0000-00-00)
    {
        // Si aucun controle n'a été effectué, cela est indiqué
        echo("Aucun");
    }
    
    else
    {
        // Sinon on affiche la date
    echo ($date);
    }
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
        echo ("<span><img src=\"../../Styles/image/Pastille_noire.png\" title=\"Eteint\"></span>");
        }
            
        else if ($etat_general == 1)
        {
        echo ("<span><img src=\"../../Styles/image/Pastille_verte.png\" title=\"Allumé\"></span>");
        }
        
        else if ($etat_general == 3)
        {
        echo ("<span><img src=\"../../Styles/image/Pastille_rouge.png\" title=\"En panne\"></span>");
        }
}

function pastille_etat_gaz($id,$db)
{
    // Affiche la pastille gaz
    
    $etat_general = Etat_gaz($id,$db);
        
    if ($etat_general == 0)
        {
        echo ("<span><img src=\"../../Styles/image/Pastille_noire.png\" title=\"Eteint\"></span>");
        }
            
        else if ($etat_general == 1)
        {
        echo ("<span><img src=\"../../Styles/image/Pastille_verte.png\" title=\"Allumé\"></span>");
        }
        
        else if ($etat_general == 3)
        {
        echo ("<span><img src=\"../../Styles/image/Pastille_rouge.png\" title=\"En panne\"></span>");
        }
}

function pastille_etat_elec($id,$db)
{
    // Affiche la pastille elec
    
    $etat_general = Etat_elec($id,$db);
        
    if ($etat_general == 0)
        {
        echo ("<span><img src=\"../../Styles/image/Pastille_noire.png\" title=\"Eteint\"></span>");
        }
            
        else if ($etat_general == 1)
        {
        echo ("<span><img src=\"../../Styles/image/Pastille_verte.png\" title=\"Allumé\"></span>");
        }
        
        else if ($etat_general == 3)
        {
        echo ("<span><img src=\"../../Styles/image/Pastille_rouge.png\" title=\"En panne\"></span>");
        }
}

function verif_consign($id,$db)
{
    
    // PAS ENCORE TOTALEMENT FONCTIONNELLE 
    /* Cette fonction compare la consigne de chaque capteur de temperature et son etat actuel, si les deux sont différent : la variable etat_temp prend la valeur 2 (en cours de régulation) */
    
    $consigne_temp = -5;
    $temperature = -5;
    
    $reponse = $db->prepare('SELECT temperature, consigne_temp, Nom, etat_temp FROM Pieces WHERE id_Utilisateur = ?');
    $reponse->execute(array($id));
    
    while ($donnees = $reponse->fetch())
    {
        $temperature = $donnees['temperature'];
        $consigne_temp = $donnees['consigne_temp'];
        $nom_piece = $donnees['Nom'];
        $etat_temp = $donnees['etat_temp'];
        
        if ($temperature != $consigne_temp && $etat_temp != 0 && $etat_temp != 3 )
        {
            
            $req = $db->prepare('UPDATE pieces SET etat_temp = :consigne WHERE id_Utilisateur = :id AND Nom = :Nom_piece');
            $req->execute(array(
            'consigne' => 2,
            'id' => $id,
            'Nom_piece' => $nom_piece
	       ));
        }
        
        else if ($temperature == $consigne_temp && $etat_temp != 0 && $etat_temp != 3 )
        {
            $req = $db->prepare('UPDATE pieces SET etat_temp = :consigne WHERE id_Utilisateur = :id AND Nom = :Nom_piece');
            $req->execute(array(
            'consigne' => 1,
            'id' => $id,
            'Nom_piece' => $nom_piece
	       ));
        }
    }
}

function affiche_prix_eau($id,$db)
{
    $prix_eau = 0;
    
    $reponse = $db->prepare('SELECT prix_eau FROM eau WHERE id = ?');
    $reponse->execute(array($id));
    
    while ($donnees = $reponse->fetch())
    {
        $prix_eau = $donnees['prix_eau'];
    }
    
    return($prix_eau);
}

function affiche_prix_elec($id,$db)
{
    $prix_elec = 0;
    
    $reponse = $db->prepare('SELECT prix_elec FROM elec WHERE id = ?');
    $reponse->execute(array($id));
    
    while ($donnees = $reponse->fetch())
    {
        $prix_elec = $donnees['prix_elec'];
    }
    
    return($prix_elec);
}

function affiche_prix_gaz($id,$db)
{
    $prix_gaz = 0;
    
    $reponse = $db->prepare('SELECT prix_gaz FROM gaz WHERE id = ?');
    $reponse->execute(array($id));
    
    while ($donnees = $reponse->fetch())
    {
        $prix_gaz = $donnees['prix_gaz'];
    }
    
    return($prix_gaz);
}

function detail_piece($id,$db)
{
    // Cette fonction affiche en détails les caractéristiques des pièces
    
    $reponse = $db->prepare('SELECT Nom, presence_temp, presence_lum, numero_capteur_t, numero_capteur_l FROM pieces WHERE id_Utilisateur = ?');
    $reponse->execute(array($id));
    
    while ($donnees = $reponse->fetch())
    {
        $nom_piece = $donnees['Nom'];
        $presence_temp = $donnees['presence_temp'];
        $presence_lum = $donnees['presence_lum'];
        $numero_capteur_t = $donnees['numero_capteur_t'];
        $numero_capteur_l = $donnees['numero_capteur_l'];
        
        // On affiche le nom de la pièce
        
        echo("<tr>
                        <td>".$nom_piece."</td>
                        <td></td>
                        <td></td>
                    </tr>");
        
        // On affiche le capteur de température
        // Si il y en a un, on coche la case et on affiche son numéro
        
        if ($presence_temp == 1)
        {
        echo("<tr>
                        <td></td>
                        <td>Température</td>
                        <td><input class=\"colonne_I\" type=\"checkbox\" checked name=\"box_temp[]\" value=\"");echo($nom_piece);echo("\"><input class=\"colonne\" type=text name=\"numero_capteur_t[]\" value=".$numero_capteur_t."></td>
                    </tr>");
        }
        
        // Si il y en a pas on décoche 
        
        else if ($presence_temp == 0)
        {
        echo("<tr>
                        <td></td>
                        <td>Température</td>
                        <td><input class=\"colonne_I\" type=\"checkbox\" name=\"box_temp[]\" value=\"");echo($nom_piece);echo("\"><input class=\"colonne\" name=\"numero_capteur_t[]\" type=text placeholder=".$numero_capteur_t."></td>
                    </tr>");
        }
        
        // On affiche le capteur de lumière
        // Si il y en a un, on coche la case et on affiche son numéro
        
        if ($presence_lum == 1)
        {
        echo("<tr>
                        <td></td>
                        <td>Lumière</td>
                        <td><input class=\"colonne_I\" type=\"checkbox\" checked name=\"box_lum[]\" value=\"");echo($nom_piece);echo("\"><input class=\"colonne\" type=text name=\"numero_capteur_l[]\" value=".$numero_capteur_l."></td>
                    </tr>");
        }
        
        // Si il y en a pas on décoche 
        
        else if ($presence_lum == 0)
        {
        echo("<tr>
                        <td></td>
                        <td>lumière</td>
                        <td><input class=\"colonne_I\" type=\"checkbox\" name=\"box_lum[]\" value=\"");echo($nom_piece);echo("\"><input class=\"colonne\" type=text name=\"numero_capteur_l[]\" placeholder=".$numero_capteur_l."></td>
                    </tr>");
        }
        
    }
}

function verif_existance_capt($num,$id,$db)
{
    $reponse = $db->prepare('SELECT numero_capteur FROM capteur');
    $reponse->execute(array($id));
    
    while ($donnees = $reponse->fetch())
    {
        $num_capt = $donnees['numero_capteur'];
        
        if ($num == $num_capt)
        {
            return(1);
        }
    }
    
    return(0);
}
?>