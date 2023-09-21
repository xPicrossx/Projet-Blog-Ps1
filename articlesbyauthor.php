<?php
require_once 'functions.php';
require_once "partials/header.php";

if($_GET["id"]){
    $id = $_GET["id"];
}

$articlebyauthor = getArticlesByAuthorId($id);
var_dump($articlebyauthor);

    foreach($articlebyauthor as $article)
    {
        

        
     }

?>