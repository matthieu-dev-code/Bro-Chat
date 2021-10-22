<?php


require_once "connexion.php";

$NomFichier = "steph_membres.json";/*PS : Il faut penser à rendre accessible n'importe quel fichier
En effet, le fichier json peut provenir d'une autre table, d'une autre requête etc...
*/
//____________________ Les variables ___________________________________



$Pseudo="";
$Email="";
$mdp="";
$date="";
$i=0;
$NbColonne=12; //Nbre de colonne de la table

//____________________ Le traitement du fichier JSON ___________________
$MesDonnees = file_get_contents($NomFichier);
$enrg = json_decode($MesDonnees);

//Exemple : IdMembre, Nom, Prenom, Ville, age, sexe, Pseudo, Photo, Email, MotDePasse, AgeMinPartenaire, AgeMaxPartenaire, SexeChercher
foreach ($enrg as $Donnees) {
    //echo $Donnees."<br>";
    $i++;

switch ($i) {
    case 1 : $ID=$Donnees;break;
    case 2 : $pseudo=$Donnees;break;
    case 3 : $email=$Donnees;break;
    case 4 : $mdp=$Donnees;break;
    case 5 : $date=$Donnes;break;
    
    
    
}
 
$SQL_INSERT="INSERT INTO `login` (`ID`, `pseudo`, `email`, `mdp`, `numéro`, `date`) VALUES (NULL, '".$pseudo."', '".$email."', '".$mdp."', '".$numéro."','".$date."')";


/*Si Connexion PDO
    $stmt = $conn->prepare('insert into product(name, price, quantity) values(:name, :price, :quantity)');
    $stmt->bindValue('name', $enrg->Nom);
    $stmt->bindValue('price', $enrg->Prenom);
    $stmt->bindValue('quantity', $enrg->Ville);
    $stmt->execute();
    */

}

?>