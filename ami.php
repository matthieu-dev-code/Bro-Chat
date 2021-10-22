<?php
   require_once "config/barre.php";
   require_once "config/connexion.php";

    $ID=$_SESSION['ID'];
    $pseudo=$_SESSION['pseudo'];
    $mdp=$_SESSION['mdp'];
    $email=$_SESSION['email'];

    $_SESSION['idami']="";

?>

<link rel="stylesheet" href="CSS/ami.css">
<body>
    
<img src="./image/tchat.png" alt="" id="tchat">



<?php

require_once "config/afficheami.php";
//require_once "config/footer.php";

?>

