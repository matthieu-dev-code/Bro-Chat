<?php

 require_once "config/barre.php";
 require_once "config/connexion.php";



if ($_GET["ida"]){

    $idami=$_GET["ida"];
    $_SESSION['idami']=$idami;
  
} else {
    header("location:ami.php");
}


$ID=$_SESSION['ID'];
$pseudo=$_SESSION['pseudo'];
$mdp=$_SESSION['mdp'];
$email=$_SESSION['email'];

;


if (isset($_POST['Envoyer'])){
    $date_time=date_default_timezone_set("Europe/Paris");

              $datemessage= date("d/m/Y"); 
              $heuremessage= date("H:i");

    $message=htmlspecialchars($_POST["message"]);
   $SQL_INSERT="INSERT INTO `chat` (`IDmessage`, `IDexpediteur`, `IDdestinataire`, `message`, `datemessage`, `heuremessage`, `pseudo`) VALUES (NULL, '".$ID."', '".$idami."', '".$message."', '".$datemessage."', '".$heuremessage."','".$pseudo."')";
      mysqli_query($connexion,$SQL_INSERT);

     

      
       
}


?>
<body>
    
<div id="haut"></div>

<?php

//require_once "config/affiamichat.php";


?>



<?php



?>

    <div id="boiteen">

  
    <div id="toutmsg">
   
<?php
require_once "recharge.php";
?>




</div>

    <link rel="stylesheet" href="CSS/messagerie.css">

    <form action="" method="POST">
    <input type="textarea" name="message" id="zonetexte" autofocus>
        
    <input type="submit" name="Envoyer" id="envoi" value="Envoyer">
    </form>
    
    </div>
    </section>

    <script>
  
    
         setInterval('recharge()', 4000);

           function recharge(){

              $('#rep').load('recharge.php');
           }
    </script>
    
</body>
