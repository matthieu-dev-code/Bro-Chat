<?php
   require_once "config/barre.php";
   require_once "config/connexion.php";
   

    $ID=$_SESSION['ID'];
    $pseudo=$_SESSION['pseudo'];
    $mdp=$_SESSION['mdp'];
    $date=$_SESSION['date'];
    $email=$_SESSION['email'];
    
?>

<link rel="stylesheet" href="CSS/pofil.css">
<body>
  

<div class="ensemble">
  
    <img  src="./image/profil.png" id="photo" alt="" height="250" width="250">

<?php
        echo  "<div id='pseudo'>".$pseudo."</div>";

  echo "<div id='info'>";
    
          
        echo  "<div id='date'>inscript le<div class='vari'>".$date." </div></div>";
        echo  "<div id='email'>email<div class='vari'>".$email." </div></div>";
        $SQL_SELECT="SELECT * FROM `ami` WHERE ID=$ID";
        if ($res=mysqli_query($connexion,$SQL_SELECT)){

          $nombre=mysqli_num_rows($res);
                
        }
        echo  "<div id='ami'>ami<div class='vari'>".$nombre." </div></div>";

    ?>
  </div>

  </div>
</body>
<?php require_once "config/footer.php"; ?>