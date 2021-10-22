<?php



session_start();



require_once "connexion.php";

$ID=$_SESSION['ID'];

$pseudo=$_SESSION['pseudo'];

$iddemande=$_GET['idami'];

$date_time=date_default_timezone_set("Europe/Paris");

$datedemande= date("d/m/Y"); 

$SQL_SELECT="SELECT * FROM `demande` WHERE iddemand=$iddemande";


$clement=true;

if ($res=mysqli_query($connexion,$SQL_SELECT)){

      
    
        while ($donnes=mysqli_fetch_assoc($res)){
            
                $idv=$donnes["ID"];
              
                if ($ID == $idv){
                  $clement=false;
                  header("location:../chercherami.php?err=1");
                  break;
                }
            
        }

}

$SQL_SELECT="SELECT * FROM `ami` WHERE ID=$ID";

if ($res=mysqli_query($connexion,$SQL_SELECT)){

      
    
        while ($donnes=mysqli_fetch_assoc($res)){
            
                $ida=$donnes["IDami"];
              
                if ($iddemande == $ida){
                  $clement=false;
                  header("location:../chercherami.php?err=2");
                  break;
                }
            
        }

}


if ($clement == true){
$SQL_INSERT="INSERT INTO `demande` (`IDdemande`, `pseudo`, `iddemand`, `ID`, `datedemande`) VALUES (NULL, '".$pseudo."', '".$iddemande."', '".$ID."', '".$datedemande."')";
 
        if ($resl=mysqli_query($connexion,$SQL_INSERT)){
                
                header("location:../chercherami.php?bon=1");
        }
}

?>