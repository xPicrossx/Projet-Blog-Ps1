<?php

require_once "functions.php";
require_once "partials/header.php";

if(isset($_POST) && !empty($_POST)){ 
    //isset on verifie que la page recoit des données en post ET !empty post dit il faut que ce soit different de vide (avec le !)
    // print_r($_FILES);
 
    $comment = addslashes($_POST['comment']);
    $author = $_SESSION['user']['nickname'];
    $idarticle = $_GET['id'];

  




    //la fonction en dessous sert pour ecrire sur la BDD les données rentrées par l'user
addComment($comment, $author, $idarticle);

header("location:articles.php?id=$idarticle");

    }

    



?>