<?php
require_once "connexion.php";

$iddelademande=$_GET['IDd'];

$SQL_DELETE="DELETE FROM `demande` WHERE `IDdemande` =".$iddelademande;

          if  ($res=mysqli_query($connexion,$SQL_DELETE)){


            header("location:../attente.php");
          }



?>
