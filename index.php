<?php 
require_once "functions.php";
require_once "partials/header.php";





if(isset($_POST) && !empty($_POST)){
  
  $_SESSION['user']['nickname'];
}



?>
<body>    

<div class="container text-center">


    <h1 class="text-white">Le blog de la Playstation 1</h1>

  <section class="row">

      <?php 
        $list_articles = getAllarticles();


        foreach($list_articles as $article) {

       

          $image = $article['image'];
          $title = $article['title'];
          $date = $article['date'];
          $author = $article['fk_id_author'];

          $nameauthor = getUserAllbyId($author);
          



          
          ?>
 <div class="card col-3 m-3 bg-dark-subtle " style="width: 18rem;">
                  <img src="upload/<?php echo $image ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title"><?php echo $title ?></h5> 

                      <p class="card-text"><?php echo $date ?></p>
                      <p class="card-text">Ecris par: <a href="articlesbyauthor.php?id=<?php echo $article['fk_id_author'] ?>"><?php echo " ".$nameauthor[0]['nickname'] ?></a></p>
                        
                      <?php // echo " ".$nameauthor[0]['nickname'] ?></p>

                      <!-- <p class="card-text"><?php //echo $article ?></p> -->

                      <a href="articles.php?id=<?php echo $article['id_article'] ?>" class="btn btn-primary">Lire plus</a>
                  </div>
              </div>




              <?php   }?>

             

  </section>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
