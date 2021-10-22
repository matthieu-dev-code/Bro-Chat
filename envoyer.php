<?php

require_once "config/barre.php";
   

$ID=$_SESSION['ID'];
$pseudo=$_SESSION['pseudo'];
$mdp=$_SESSION['mdp'];
$email=$_SESSION['email'];

require_once "config/onglet.php";

?>





<div class="trouver">
<form action="envoyer.php" methode="POST">
<input type="text" id="élément" name="spseudo" placeholder="Trouve tes amis . . ." autofocus required>
<input type="submit" id="btn_trouver" value="RECHERCHER">
    
</form>
</div>

<?php

require_once "config/connexion.php";



 $pseudor=$_GET["spseudo"];


 $SQL_SELECT="SELECT * FROM `login` WHERE pseudo='$pseudor'";


    if ($res=mysqli_query($connexion,$SQL_SELECT)){

        if ($trouve=mysqli_num_rows($res) == 0 ){

            echo "<div class='ensemble'><div class='message'>aucun ami trouver</div></div>";
            
                }
        
    
        while ($donnes=mysqli_fetch_assoc($res)){
            
         
             $pseudou=$donnes["pseudo"];
             
             $datedc=$donnes["datedc"];

             $heuredc=$donnes["heuredc"];

             $idlogin=$donnes["ID"];

             echo "<div class='ensemble'><div class='message'><div class='pseudo'>".$pseudou."</div> dernière connexion le ".$datedc." à ".$heuredc."<a href='config/demande.php?idami=".$idlogin."' id='ajout'><img src='image/ajouter-un-ami.png' alt=''></a></div></div>";

        } 


    }


          
           
   // require_once "config/footer.php";         
?>



</div>
</body>
</html>