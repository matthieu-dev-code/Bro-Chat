<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/inscription.css">
    <title>BroChat</title>
</head>
<body>
    
<div class="corps">
        
    <div class="image"> <img id="logo" src="./image/bro-tchat.png" alt=""></div>

<div class="ensemble">
        
  <div class="inscrip">
        <form action="config/insert.php" method="POST" id="form">
            <input type="text" class="élément" maxlenght="10" name="spseudo" placeholder="Pseudo*" autofocus required>
            <input type="email" class="élément" name="semail" placeholder="e-mail*" required>
           
            <input type="password" class="élément" minlength="8" name="smdp" placeholder="mot de passe (8 caracères min)*" required>
            <input type="password" class="élément" minlength="8" name="scmdp" placeholder="confirmer mot de passe*" required>
           
        
            <input type="submit" value="envoyer e-mail de confirmation" class="Btn_inscrip">
        </form>
    

    </div>
    <div class="ccompte">
        vous avez un compte ? <a href="index.php">connectez vous !</a>
    </div>

    <?php

    if (isset($_GET["err"])){
        $err=$_GET["err"];
        switch($err){
            case 1 : echo "<div id='err'><div id='msg'> Mot de passe différent de comfirmer </div></div>";
            break;

            case 2 : echo "<div id='err'><div id='msg'> E-mail déja prit </div></div>";
            break;

            case 3 : echo  "<div id='err'><div id='msg'> Numéro de portable déja prit </div></div>";
            break;

            case 4 : echo "<div id='err'><div id='msg'> Rentré un numéro<> de portable valide </div></div>";
            break;

            case 5 : echo "<div id='err'><div id='msg'> Erreur lors de la création du compte </div></div>";
            break;

            case 6 : echo "<div id='err'><div id='msg'> Pseudo déja utilisé </div></div>";
            break;
        }
    }

    ?>
    
    
</div>

</div>


    
</body>
</html>