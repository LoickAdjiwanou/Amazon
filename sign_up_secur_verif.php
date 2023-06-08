<?php
    require_once('connect.php');
    if($_POST['mdp']==$_POST['mdp2']){
        $req=$bdd->prepare('INSERT INTO signin(nom, mdp)VALUE(:nom, :mdp)');
        $req->execute(array(
            'nom'=>$_POST['nom'],
            'mdp'=>$_POST['mdp']
        ));
        include('sign_in_secur.php');
    }
    else{
        include('start_new1.php');
    }
?>