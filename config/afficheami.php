<link rel="stylesheet" href="CSS/ami.css">

<?php

require_once "connexion.php";

    $SQL_SELECT="SELECT * FROM `ami` WHERE ID=$ID";


    if ($res=mysqli_query($connexion,$SQL_SELECT)){

      
    
        while ($donnes=mysqli_fetch_assoc($res)){

            $pseudoami=$donnes["pseudoami"];

            $idami=$donnes["IDami"];
                  
               
             echo "<div id='boite'><div class='ami'>".$pseudoami."</div><div class='ami'><a href='messagerie.php?ida=".$idami."'id='envoie'><img src='image/envoie.png' alt=''></a></div></div>";
            
        } 
}else {

    echo "erreur : ".mysqli_error($connexion); 
}














?>
</body>