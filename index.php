<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>BroChat</title>
</head>
<body>
  <?php

session_start();
 
$_SESSION=array();

session_destroy();

   
  ?>
<div class="corps">
        

 

    <div class="contenu">
        <div class="ilu"><img src="./image/Illustration-site-hexagone-83.png" alt=""></div>

            <div class="ensemble">
            
                <div class="inscrip">
                    <img id="logo" src="./image/bro-tchat.png" alt="">
                    
                    <form action="config/select.php" method="POST">
                        
                        <input type="email" class="élément"  required name="semail" placeholder="e-mail">
                        <input type="password" class="élément" required minlength="8" name="smdp" placeholder="mot de passe">
                        
                        <input type="submit" value="connexion" class="Btn_inscrip">
                    </form>
                </div>
                <div class="ccompte">
                vous n'avez pas de compte ? <a href="inscription.php">inscrivez vous</a>
                </div>


                <?php

                if (isset($_GET["err"])){
                    $err=$_GET["err"];

                    switch($err){
                        case 1 : echo "<div id='err'><div id='msg'> E-mail ou mot de passe inccorect</div></div>";
                        break;
                        
                }

            }
                if (isset($_GET["bon"])){
                    $bon=$_GET["bon"];

                    switch($bon){
                        case 1 : echo "<div id='bon'><div id='msg'>  Fécilicitation ! Compte crée ! </div></div>";
                        break;

                        case 2 : echo "<div id='bon'><div id='msg'> Compte supprimez ! </div></div>";
                        break;
                    }

                }

?>
            <div class="img">
                <img class="lien" src="./image/apple.png" alt="">
                <img class="lien" src="./image/google.png" alt="">
            </div>
            </div>  




        </div>
  </div>
    

</div>

</body>
</html>