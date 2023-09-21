<?php

require_once "functions.php";
require_once "partials/header.php";

if(isset($_POST) && !empty($_POST)){ 
    //isset on verifie que la page recoit des données en post ET !empty post dit il faut que ce soit different de vide (avec le !)
    // print_r($_FILES);
    $title = addslashes($_POST['title']);
	$image = $_FILES["image"]["name"];	
    $text = addslashes($_POST['text']);
    $author = $_SESSION['user']['id'];


    //la fonction en dessous sert pour ecrire sur la BDD les données rentrées par l'user
addArticle($title, $image, $text, $author);
    
    }

if (isset($_FILES['image']) && ($_FILES['image']['error']) === UPLOAD_ERR_OK);




	move_uploaded_file($_FILES["image"]["tmp_name"],"upload/".$_FILES["image"]["name"]);

	

	
    header("location:index.php");

?>
<!--<a href="<?php // print "upload/".$_FILES["fichier"]["name"];?>" target="_blank">Fichier</a>-->