<?php

require_once "connexion.php";




session_start();

$ID=$_SESSION['ID'];

$SQL_DELETE= "DELETE FROM `login` WHERE ID=".$ID;


$res=mysqli_query($connexion,$SQL_DELETE);

if ($res == true){
    session_destroy();
    $_SESSION[]="";
    session_unset();
    header("location:../index.php?bon=2");
}else {

    header("location:../index.php?err=4");


}


?>