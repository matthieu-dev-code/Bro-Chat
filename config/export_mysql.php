<?php


require_once "connexion.php";

 





//
$token = "steph";/*
Le token peut être un ID de session ou autre chose quelconque d'unique
qui peut permettre de rendre le fichier unique en cas d'accès concurrents...
*/
$table="login";
$enteteJSON="{ ".chr(34).$table.chr(34).":";//Dans le cadre d'un projet autour de Windev, je respect l'espace après l'accolade
$FinSiEntete=" }";

$SQL_MEMBRES = "SELECT * FROM ".$table;
//
if ($res=mysqli_query($db,$SQL_MEMBRES)) {

    $enrg = mysqli_fetch_assoc($res);//Construction du tableau
    echo json_encode($enrg);//J'affiche le résultat du fichier json généré

    //On écrit le fichier json natif MySQL
    file_put_contents($token."_".$table.'.json', json_encode($enrg));
    //On écrit aussi le fichier json, mais pour Windev
    file_put_contents($token."_".$table.'.wdon', $enteteJSON.json_encode($enrg).$FinSiEntete);

}



?>