<?php
    include('connect.php');
    $req=$bdd->prepare('SELECT article FROM articles WHERE article=:nom');
    $req->execute(array(
        'nom'=>strip_tags($POST['aticle'])
    ));
    $info=$req->fetch();
    session_start();
    $_SESSION['art']=$info['article'];
    include('Amazon1.php');
?>