<?php
    session_start();
    if(!$_SESSION['mdp']){
        header('location:admin_connexion.php');
    }
?>