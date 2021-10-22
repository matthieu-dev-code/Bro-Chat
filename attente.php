<?php
   require_once "config/barre.php";
   require_once "config/connexion.php";

    $ID=$_SESSION['ID'];
    $pseudo=$_SESSION['pseudo'];
    $mdp=$_SESSION['mdp'];
    $email=$_SESSION['email'];

 $SQL_SELECT="SELECT * FROM `demande` WHERE iddemand='$ID'";


 require_once "config/onglet.php";

?>
<body>
 <link rel="stylesheet" href="CSS/attente.css">   


<div id="resultat">

<?php

if ($res=mysqli_query($connexion,$SQL_SELECT)){

    if ($trouve=mysqli_num_rows($res) == 0 ){

        echo "<div class='ensemble'><div class='message'>vous n'avez pas de demande</div></div>";
        
    
    }

    while ($donnes=mysqli_fetch_assoc($res)){
        
     
         $pseudoami=$donnes["pseudo"];
         
         $iddemandeur=$donnes["ID"];

        $date=$donnes["datedemande"];

        $iddemande=$donnes["IDdemande"];

       

         echo "<div class='ensemble'><div class='message'><div class='pseudo'>".$pseudoami."</div><div class='date'>".$date."</div><div class='msg'>  vous demande en ami</div> <a href='config/accepte.php?IDd=".$iddemande."' id='accept'><img src='image/accepte.png'  alt=''></a><a href='config/refuser.php?IDd=".$iddemande."' id='accept'><img src='image/refuser.png'  alt=''></a></div></div>";
        
    


}

}
?>
</div>
    
</body>
<?php
//require_once "config/footer.php";   
?>

