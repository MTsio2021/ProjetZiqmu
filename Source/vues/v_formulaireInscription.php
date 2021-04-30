
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<center>
<body>
<?php
    echo "Inscription au cours n°".$_GET['numero'];
?>
<form method="POST" action="index.php?action=validInscription">
  <div class="form">
    <div class="col">
        
    </div>
    <div class="col">
      <input type="text" class="form-control" name= "nom" placeholder="Nom">
    </div>
    <br/>
    <div class="col">
      <input type="text" class="form-control" name= "prenom" placeholder="Prénom">
    </div>
    <br/>
    <div class="col">
      <input type="text" class="form-control" name= "tel" placeholder="Téléphone">
    </div>
  </div>
  <br/>
  <button type="submit" class="btn btn-secondary" >S'inscrire</button>
</form>



</body>
</center>
</html>