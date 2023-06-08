<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <title>AMAZON</title>
    <link rel="stylesheet" href="">
</head>

<body>
    <center>
        <p>SIGN UP</p>
        <form method="post" action="sign_up_secur_verif.php">
            <p>
                <label for="nom">Nom d'utilisateur</label>
                <input type="text" name="nom" id="nom" required="required"/><br/><br/>
                <label for="mdp">Mot de passe</label>
                <input type="password" name="mdp" id="mdp" required="required"/><br/><br/>
                <label for="mdp2">Confirmez le mot de passe</label>
                <input type="password" name="mdp2" id="mdp2" required="required"/><br/><br/>
                <input type="submit" value="S'identifier"/><br/><br/>
                <p>Les mots de passes que vous avez entrés ne se correspondent pas, réessayez !</p>
            </p>
        </form>
    </center>
</body>
</html>