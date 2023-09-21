<?php 
require_once "functions.php";
require_once "partials/header.php";


if (isset($_GET['id'])){
    $articleid = $_GET['id'];    
}

$article = getArticlebyId($articleid);
// var_dump($article);

    $text = $article[0]['text'];
    $image = $article[0]['image'];
    $title = $article[0]['title'];     


    
    ?>


<section class="container text-center bg-secondary-subtle shadow rounded-4 ">
    <h1><?php echo $title ?> </h1>

    <?php if(isset($_SESSION["user"])){    ?>    
    <p><button type="button" id="btn-connexion" class="btn btn-primary" onclick="window.location.href='modifyarticle.php?id=<?php echo $articleid?>';">Modifier article</button></p>
    <?php } ?>    

    <img id="img" src="upload/<?php echo $image ?>">
    <article class="fs-5 mb-3"><?php echo $text ?> </article>





    <?php if(isset($_SESSION["user"])){    
?>    
       <section class="row justify-content-center">      
            <div class="bg-warning-subtle  pb-3 rounded-4 col-8 ">
                <h2 class="mt-5">Poster un commentaire</h2>
                    <form action="traitement_commentaire.php?id=<?php echo $articleid?>" method="post">
                        
                        <label for="comment"></label>
                        <textarea  class="rounded-2" name="comment" rows="4" cols="40" placeholder="Commentaire" required></textarea><br><br>

                        <button type="submit" id="btn-connexion" class="btn btn-warning">Poster le commentaire</button></p>

                    
                    </form>
            </div>
        </section>    
        <?php } ?>    


        <?php   
        if (isset($_GET['id'])){
            $id = $_GET['id'];  
          
        $list_comments = getAllCommentsByArticleId($id);
        }


        foreach($list_comments as $comment) {
         $textcomment = $comment['text'];
         $authorcomment = $comment['nickname'];
         $datecomment = $comment['date'];

         if($comment){ ?>

         <section class="row justify-content-center" >
         <div class="bg-success-subtle rounded-4 col-8 ">
            <section>
            <h6 >Le <?php echo " ".$comment['date'] ?>    
            par: <?php echo " ".$comment['nickname'] ?></h6>   
            </section>
            <h4 class=""><?php echo $comment['text'] ?></h4>             
        </div>
        </section>

            <?php } else { ?>
                <h4><?php echo "Soyez le premier à commenter"; ?></h4>
                
                <?php  }
            
        }    ?>

</section>




    






