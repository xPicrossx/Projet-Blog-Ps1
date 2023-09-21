<?php

require_once "functions.php";

$comail = $_POST['email'];
$comdp = $_POST['password'];

getUser($_POST['email'],$_POST['password']);


 
/*

if($comail && password_verify($comdp)){
    session_start();

    header("location:traitement.php");
   }else{
    header("location:connexion.php?message= Mauvais identifiants");

}
*/?>