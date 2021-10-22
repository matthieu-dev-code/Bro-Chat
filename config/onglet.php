

<?php

require_once "connexion.php";


$SQL_SELECT="SELECT * FROM `demande` WHERE iddemand=$ID";
        if ($res=mysqli_query($connexion,$SQL_SELECT)){

          $nombre=mysqli_num_rows($res);
                
        }

?>


<link rel="stylesheet" href="chercherami.css">


    

<div class="corps">

<div id="logo"><img src="image/bro.png" alt=""></div>

<div id="onglet">

<a href="./chercherami.php" class="envoi">Envoyer</a>
<a href="./attente.php" class="attend">Attente (<?php  echo $nombre; ?>)</a>

</div>