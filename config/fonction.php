<?php


require_once "connexion.php";

function vérifco($email,$mdp,$connexion){


  





    $SQL_SELECT="SELECT * FROM `login` WHERE email='$email'";

    
    if ($res=mysqli_query($connexion,$SQL_SELECT)){

    
    
        while ($donnes=mysqli_fetch_assoc($res)){
            
          $vemail=$donnes["email"];
            
            $vmdp=$donnes["mdp"];

            $pseudo=$donnes["pseudo"];
            
            $ID=$donnes["ID"];

            $date=$donnes["date"];
            
        }



            
    
           // if ($mdp == $vmdp and $email == $vemail){
          $pass=password_hash($mdp, PASSWORD_DEFAULT);

            if (password_verify($mdp,$pass) and $email == $vemail) {

              
              
              $date_time=date_default_timezone_set("Europe/Paris");

              $datedc= date("d/m/Y"); 
              $heuredc= date("H:i");

              
              $SQL_UPDATE="UPDATE `login` SET `datedc` = '".$datedc."' WHERE `login`.`ID` =".$ID; 
               mysqli_query($connexion,$SQL_UPDATE);


               $SQL_UPDATE="UPDATE `login` SET `heuredc` = '".$heuredc."' WHERE `login`.`ID` =".$ID; 
               mysqli_query($connexion,$SQL_UPDATE);

               session_start();

               $_SESSION['ID']=$ID;
               $_SESSION['email']=$vemail;
               $_SESSION['pseudo']=$pseudo;
               $_SESSION['date']=$date;
               $_SESSION['mdp']=$mdp;
              
               
             
            var_dump($_SESSION['ID']);
            var_dump($ID);
            var_dump($_SESSION);
            
               

             //header("location:../chercherami.php");

             header("location:../config/vérifbar.php");

            } else {
             header("location:../index.php?err=1");
           
            }
          
    
        }
    
    
    
} 






?>