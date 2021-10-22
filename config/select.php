<?php


require_once "connexion.php";
require_once "fonction.php";



$email=$_POST["semail"];
$mdp=$_POST["smdp"];





vérifco($email,$mdp,$connexion);





?>