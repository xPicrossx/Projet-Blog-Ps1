<?php

require_once "functions.php";
require_once "partials/header.php";


if (isset($_GET["message"])) {
    print $_GET ["message"];
}
?>
 <?php  if(isset($_GET['message']) && !empty($_GET['message'])) {
    ?>

<div class="text-center alert alert-success alert-<?php echo $_GET['status'] ?> dismissible fade show" role="alert">
<strong><?php echo $_GET['message'] ?> </strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php }?>

<body>
    <header>
        <section id="titreDuSite" class="container text-center text-white" >
            <nav id="topNav">
                <ul>
                    <div class="alert alert-success" role="alert">
                        Connexion:
                    </div>

                        <form id="form-inscriptionConnexion" action="back_connexion.php" method="POST" enctype="multipart/form-data">
                            <div class="champs">
                                <label for="email">Entrez votre email : </label>
                                <input id="email" name="email" type="email" class="form-control"required>

                                <label for="password">Entrez votre mot de passe : </label>
                                <input id="password" name="password" type="text" class="form-control"required>
            
                            </div>    
                            <input type="submit" value="Se connecter" class="btn bg-primary-subtle bg-success-subtle  ">                     
                        </form> 
                </ul>
            </nav>
        </section>
    </header> 
</body>
</html>
