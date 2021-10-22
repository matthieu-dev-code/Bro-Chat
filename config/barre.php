
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <title>Brochat</title>
    <link rel="shortcut icon" href="../image/bro-tchat.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/barre.css">
</head>
    
    <div id="barre">
    <a href="../profil.php" class="logo"><img src='../image/profil.png' alt=""></a>
    <a href='../chercherami.php' class='logo'><img src='../image/ajouter-un-ami.png' alt=''></a>
    <a href='../ami.php' class='logo'><img src='../image/ami.png' alt=''></a>
    <a href='../index.php' class='logo'><img src='../image/se-deconnecter.png' alt=''></a>
    
    </div>


<?php
session_start();
 
if ($_SESSION['ID'] == ""){

        header("location:./index.php");
}

?>

