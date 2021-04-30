
<html>
<div id="accueil">
<center><p>
Listes des inscriptions.
</p></center>
</div>
<center><div id="contenu">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Adhérent</th>
      <th scope="col">Cours</th>
      <th scope="col">Pdf</th>
      <th scope="col">Supprimer</th>
    </tr>
   </thead>

<?php
    $i = 0;
    foreach ($lesInscrits as $unInscrit)
    { ?>
    <tr>
        <td><?php echo $i ?>
        <td><?php echo $unInscrit['idAdherent'] ?></td>
        <td><?php echo $unInscrit['idSeance'] ?></td>
        <td><a  href="index.php?action=pdfInscription&numInscription=<?php echo $i ?>" target="_blank"><img src="images/pdf.png"></a></td>
        <td><a  href="index.php?action=supprimerInscription&numInscription=<?php echo $i ?>" onclick="return confirm('Êtes vous sûr ?');"><img src="images/del.png"></a></td>
    </tr>    
        
<?php $i++;
     } ?>
</table>
</div>
</html>