<?php

  include 'header.php'

?>

<?php

$msg;

var_dump($_SESSION);

if (
    isset($_GET['firstname']) AND
    isset($_GET['lastname']) AND
    isset($_GET['age']) AND
    isset($_GET['adresse']) AND
    !empty($_GET['firstname']) AND
    !empty($_GET['lastname']) AND
    !empty($_GET['age']) AND
    !empty($_GET['adresse'])
) {
    echo $msg = '<p id= green> Elève ajouté ! </p>';
    array_push($_SESSION['list'],[$_GET['firstname'],$_GET['lastname'],$_GET['age'],$_GET['adresse']]);
    
    
} else {
    echo $msg = '<p id= red>Merci de renseigner tout les champs !</p>';
}

?>

<!-- 
    <div><label for="firstname">Votre Prénom</label></div>
    <div><input name= "firstname" type="text" id="firstname"></div>
    <div><label for="lastname">Votre Nom</label></div>
    <div><input name="lastname" type="text" id="lastname"></div>
    <div><label for="age">Votre Âge</label></div>
    <div><input name="age" type="text" id="age"></div>
    <div><label for="adresse">Votre Adresse</label></div>
    <div><input name="adresse" type="text" id="adresse"></div>
    <div><input type="submit" value="Ajouter cet élève"></div> -->

<form action="" method="GET">
<div id= form>
  <div class="mb-3">
    <label for="firstname" class="form-label">Votre Prénom</label>
    <input name= "firstname" type="text" class="form-control" id="firstname" aria-describedby="text">
  </div>
  <div class="mb-3">
    <label for="lastname" class="form-label">Votre Nom</label>
    <input name="lastname" type="text" class="form-control" id="lastname">
  </div>
  <div class="mb-3">
    <label for="age" class="form-label">Votre Âge</label>
    <input name="age" type="text" class="form-control" id="age">
  </div>
  <div class="mb-3">
    <label for="adresse" class="form-label">Votre Adresse</label>
    <input name="adresse" type="text" class="form-control" id="adresse">
  </div>
  <button type="submit" class="btn btn-primary">Ajouter cet élève</button>
</div>
</form>

<?php

include 'footer.php'

?>

