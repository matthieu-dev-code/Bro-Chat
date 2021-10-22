<?php
require_once "connexion.php";

session_start();

$ID=$_SESSION['ID'];

$pseudo=$_SESSION['pseudo'];

$iddelademande=$_GET['IDd'];

$SQL_SELECT="SELECT * FROM `demande` WHERE IDdemande='$iddelademande'";

if ($res=mysqli_query($connexion,$SQL_SELECT)){

    
    
    while ($donnes=mysqli_fetch_assoc($res)){
        
      $IDdemandeur=$donnes["ID"];
        
        $IDdemande=$donnes["iddemand"];

        $pseudoami=$donnes["pseudo"];

    }
        
    }
    $SQL_INSERT1="INSERT INTO `ami` (`IDami`, `pseudoami`, `photoami`, `ID`) VALUES ('".$IDdemandeur."', '".$pseudoami."', NULL, '".$ID."')";


    $SQL_INSERT2="INSERT INTO `ami` (`IDami`, `pseudoami`, `photoami`, `ID`) VALUES ('".$ID."', '".$pseudo."', NULL, '".$IDdemandeur."')";


    if ($res=mysqli_query($connexion,$SQL_INSERT1)){

           var_dump($res);
            
                    $tibo=true;
           
         
            
                
            }
          if  ($res2=mysqli_query($connexion,$SQL_INSERT2)){  

                $clement=true;
          }


          if ($tibo == true and $clement == true){

            $SQL_DELETE="DELETE FROM `demande` WHERE `IDdemande` =".$iddelademande;

            $res3=mysqli_query($connexion,$SQL_DELETE);

            
            header("location:../attente.php");

          }
    


?>
