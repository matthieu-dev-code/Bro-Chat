



<div id="rep">
<?php

require_once "config/connexion.php";

session_start();

$ID=$_SESSION['ID'];
$idami=$_SESSION['idami'];


$SQL_SELECT="SELECT * FROM `chat` WHERE IDexpediteur=$ID AND IDdestinataire=$idami OR IDexpediteur=$idami AND IDdestinataire=$ID";
if ($res=mysqli_query($connexion,$SQL_SELECT)){

    while ($donnes=mysqli_fetch_assoc($res)){

        $datmessage=$donnes['datemessage'];
        $heurmessage=$donnes['heuremessage'];
        $msg=$donnes['message'];
        $mpseudo=$donnes['pseudo'];
        $IDexpediteur=$donnes['IDexpediteur'];
    
        if ($IDexpediteur == $ID){
    
        echo "<div class='ensemble'><div class='message'><div class='infomsg'>".$mpseudo." le ".$datmessage." à ".$heurmessage." :</div><div class='msg'>".$msg."</div>   </div></div>";
        }
        elseif ($IDexpediteur == $idami){
    
    
        echo "<div class='ensemble'><div class='sessage'><div class='infomsg'>".$mpseudo." le ".$datmessage." à ".$heurmessage." :</div><div class='msg'>".$msg." </div>  </div></div>";
        }
    }
    
    }
    
    

?>
</div>
