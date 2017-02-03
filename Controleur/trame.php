<?php
require ('../Modele/connexionBDD.php');

//récupération des données 
$ch = curl_init();
curl_setopt(
$ch,
CURLOPT_URL,
"http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=9999");
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$data = curl_exec($ch);
curl_close($ch);
echo "Raw Data:<br />";
echo("$data");

//on decoupe $data en portion de 33 caracteres dans un tableau
$data_tab = str_split($data,33);
echo "<br><br><br>Tabular Data:";
for($i=0, $size=count($data_tab); $i<$size; $i++){
    echo "<br><br>Trame $i: $data_tab[$i]<br />";
    
    $trame = $data_tab[1];
    
    // décodage avec sscanf
    list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) =
    sscanf($trame,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
    
    $date_recep = ''.$year.'-'.$month.'-'.$day.' '.$hour.':'.$min.':'.$sec.'';
    
    echo("<br />$t,$o,$r,$c,$n,$v,$a,$x,$date_recep<br />");
    
    //Insertion des données de la trame dans la base 
    $req=$db->prepare("INSERT INTO  data(type_trame,numero_objet,type_requete,type_capteur,numero_capteur,valeur,numero_trame,checksum,date_recep) values (:t,:o,:r,:c,:n,:v,:a,:x,:date_recep)");
    $req->bindParam(':t',$t);
    $req->bindParam(':o',$o);
    $req->bindParam(':r',$r);
    $req->bindParam(':c',$c);
    $req->bindParam(':n',$n);
    $req->bindParam(':v',$v);
    $req->bindParam(':a',$a);
    $req->bindParam(':x',$x);
    $req->bindParam(':date_recep',$date_recep);
    $req->execute();
    echo "<br><br>Opération effectuée";

    print("<br>type de trame=" .$t. " val objet=" .$o." requete=" .$r. " type de capteurs=".$c. " numero du capteur=" .$n. " valeur capteur=" .$v. " TIM=".$a. " chk=".$x." date_recep=" .$date_recep. "\n");
}
			
?>