<?php 
require_once "functions.php";
require_once "partials/header.php";



if (isset($_GET['id'])){
    $id = $_GET['id'];  

    $article = getArticlebyId($id);

    }


if (isset($_POST) && !empty($_POST)){
    $newtext = $_POST['text'];
    $newtitle = $_POST['title'];

 modifyText($newtitle, $newtext, $id);
 header("location:articles.php?id=$id");

}


    ?>

<main class="container text-center"> 
  
<form action="" method="post">

<label for="title">Titre</label>
<input id="title" name="title" type="text" class="form-control" value=" <?php echo $article[0]['title']?>">

<label for="text">Texte</label>
<input id="text" name="text" type="text" class="form-control" value=" <?php echo $article[0]['text']?>">

<input type="submit" value="Modifier" class="btn bg-primary-subtle bg-warning-subtle  ">



</form>
</main>