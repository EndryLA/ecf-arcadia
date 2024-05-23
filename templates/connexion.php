<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arcadia</title>
    <link href='../public/code/css/styles.css' rel='stylesheet'>
</head>
<body>
    <?php 
    include 'login.php';
    include 'header.php';
    ?>
    <form method='post'>
        <h1>Se Connecter</h1>
        <div>
            <label for='username' required>Adresse mail</label>
            <input type='email' name='username' required>
        </div>
        <div>
            <label for='password'>Mot de passe</label>
            <input type='password' name='password'>
        </div>
        <div class='errors'>
            <p><?=$errorMessage?></p>
        </div>
        <input class='button' type='submit' value='Se connecter'>
    </form>
</body>
</html>

<?php 
