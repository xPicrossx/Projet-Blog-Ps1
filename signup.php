<?php

require_once 'functions.php';
require_once "partials/header.php";


if(isset($_POST) && !empty($_POST)){ 
$email = secure_email($_POST['email']);
if ($email){ 
$nickname = $_POST['nickname'];
$password = $_POST['password'];
$hashpassword = password_hash ($password, PASSWORD_ARGON2I);
addMember($nickname, $email, $hashpassword);

header("location:index.php");
}else {
    echo "cette adresse mail n'est pas valide";
}
}?>

<main class="container text-center">
<div class="alert alert-warning" role="alert">
  Inscription:
</div>

    <form action="" method="POST" class="text-white">

        <label for="nickname">Pseudo</label>
        <input id="nickname" name="nickname" type="text" class="form-control">

        <label for="email">Email</label>
        <input id="email" name="email" type="email" class="form-control">

        <label for="password">Password</label>
        <input id="password" name="password" type="text" class="form-control">

        <input type="submit" value="Ajouter" class="btn bg-primary-subtle bg-warning-subtle  ">

    </form>