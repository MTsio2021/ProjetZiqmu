
<html>
<div id="cours">
<center><p>
Liste des cours de musique.
</p></center>
</div>
<center><div id="contenu">
<?php
    foreach($lesCours as $unCours)
    {
    $numero = $unCours['idSeance'] ;
    echo "Cours <b>$numero</b> <br/>";

    echo "La date du cours : ".$unCours['jour']." ".$unCours['heureDebut']."h"."<br/>";
    echo "La matière : ".$unCours['idInstrument']."<br/>";
    echo "Le professeur : ".$unCours['nom']."<br/>";
    

    echo '<a href="index.php?action=inscrire&numero='.$numero.'">inscrire</a> <br/><br/>';
    }
?>
</div>
</center>
</html>