<?php
/* FICHIER REGROUPANT TOUTES LES FONCTIONS PHP ANNEXES */



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

?>