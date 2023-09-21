<?php
require_once 'functions.php';
require_once "partials/header.php";
?>

<main class="container text-center text-white"> 
  
<form action="traitement_fichier.php" method="post" enctype="multipart/form-data">

<label for="title">Titre</label>
<input id="title" name="title" type="text" class="form-control">

<label for="text">Texte</label>
<input id="text" name="text" type="text" class="form-control">

<input type="file" name="image" id="image" accept="image/png, image/jpeg">




<!-- <label for="category">Categorie:</label>

<select name="category" id="category">
  <option value="">--Please choose an option--</option>
  <option value="RPG">RPG</option>
  <option value="Course">Course</option>
  <option value="Aventure">Aventure</option>
  <option value="Combat">Combat</option>
</select> -->

<?php   if(isset($_SESSION["user"])){?>
</select>
<input type="submit" value="Ajouter" class="btn bg-primary-subtle bg-warning-subtle  ">
</form>
<?php }?>
</main>

<?php

