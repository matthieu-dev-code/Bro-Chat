<?php

require_once "connexion.php";





$pseudo=$_POST["spseudo"];
$email=$_POST["semail"];
$date=date("d/m/Y"); 

$mdp=$_POST["smdp"];
$cmdp=$_POST["scmdp"];



$Tibo=true;



if ($mdp !==$cmdp ){
    header("location:../inscription.php?err=1");
    $Tibo=false;
    

}



if ($res=is_int($numéro)){

    header("location:../inscription.php?=4");
    $Tibo=false;
    
}



$SQL_EMAIL="SELECT * FROM `login` WHERE email='$email'";


$vemail=mysqli_query($connexion,$SQL_EMAIL);


if ($res=mysqli_num_rows($vemail) >= 1 ){
    $Tibo=false;
    header("location:../inscription.php?err=2");
      
}



$SQL_NUMERO="SELECT * FROM `login` WHERE pseudo='$pseudo'";


$vnuméro=mysqli_query($connexion,$SQL_NUMERO);


if ($res=mysqli_num_rows($vnuméro) >= 1 ){
    $Tibo=false;
    header("location:../inscription.php?err=6");
   
    
}


if ($Tibo == true){

    $cmdp=password_hash($mdp,PASSWORD_DEFAULT);
    
    $SQL_INSERT="INSERT INTO `login` (`ID`, `pseudo`, `email`, `mdp`, `date`, `datedc`, `heuredc`) VALUES (NULL, '".$pseudo."', '".$email."', '".$cmdp."', '".$date."', NULL, NULL)";

    
      

   if (mysqli_query($connexion,$SQL_INSERT)){

        header("location:../index.php?bon=1");

   } else {
      header("location:../inscription.php?err=5");
      // echo "erreur : ".mysqli_error($connexion); 
   }
}

?>