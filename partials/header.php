<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Blog</title>
</head>


            <!----------- NAVBAR --------------->
<div>
            <nav class="navbar navbar-expand-lg bg-dark-subtle sticky-top  ">
                    <div class="container-fluid">
                    <a class="navbar-brand img-responsive" href="#"><img id="logo" src="images/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link active text-primary" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item ">
                          <a class="nav-link text-warning" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown ">
                          <a class="nav-link dropdown-toggle text-success" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                          </a>
          
                <ul class="dropdown-menu bg-dark-subtle ">
                  <li><a class="dropdown-item text-success" href="#">RPG</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item text-success" href="#">Plate-Forme</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item text-success" href="#">Course</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item text-success" href="#">FPS</a></li>
                  <li><hr class="dropdown-divider"></li>
            
                </ul>

                <?php   if(isset($_SESSION["user"])){?>
          <li class="nav-item ">
          <a class="nav-link text-danger" href="newarticle.php">Ecrire un article</a>            
          <?php    } ;?>

      </ul>
      
      <section>
            <?php
            //ouvrir la session utilisateur

            // si la session est active
            if(isset($_SESSION["user"])){
                ?>         

                  <form id="form_authentification" action="logout.php" method="post">
                  <?php print ("Bonjour " . $_SESSION["user"]['nickname'] . " ! " . "Session connectée.");
                  ?>
                      <button type="submit" value="Se déconnecter" class="btn btn-danger">Déconnexion</button>
                  </form>

                

            <?php
            //si on se déconnecte ou qu'elle est inactive
            } else { ?>

                        <p><button type="button" id="btn-connexion" class="btn btn-warning text-dark" onclick="window.location.href='signup.php';">Inscription</button>                
                        <button type="button" id="btn-connexion" class="btn btn-success text-dark" onclick="window.location.href='connexion.php';">Connexion</button></p>

            </nav>
            </div>

            <?php } ?>
        </section>
    </div>
  </div>
</nav>





