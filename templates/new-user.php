<?php
include 'verifyRole.php';
include __DIR__ . '/../includes/database-connection.php';
include __DIR__ . '/../classes/DatabaseTable.php';

if($_SERVER["REQUEST_METHOD"] == 'POST') {
    $email = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));
    $confirm_password = htmlspecialchars(trim($_POST['confirm-password']));
    $firstname = htmlspecialchars(trim($_POST['firstname']));
    $lastname = htmlspecialchars(trim($_POST['lastname']));
    $role = htmlspecialchars(trim($_POST['role']));

    

    $usersTable = new DatabaseTable($pdo,'utilisateur','username');
    $user = $usersTable->selectLine($email);
    


    $errors = [];

    if (strlen($firstname) < 2) {
        $errors[] = "Le prénom doit contenir au moins 2 caractères.";
    }

    if (strlen($lastname) < 2) {
        $errors[] = "Le nom doit contenir au moins 2 caractères.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "L'email n'est pas valide.";
    }

    if($user) {
        $errors[] = "Cette adresse mail est déjà utilisée par un autre employé";
    }
    
    if (strlen($password) < 8) {
        $errors[] = "Le mot de passe doit contenir au moins 8 caractères.";
    }

    if ($password !== $confirm_password) {
        $errors[] = "Les mots de passe ne correspondent pas.";
    }

    if (empty($role)) {
        $errors[] = "Veuillez sélectionner un rôle.";
    }


    if (empty($errors)){
        
        $fields = [
            'username' => $email,
            'prenom' => $firstname,
            'nom' => $lastname,
            'password' => password_hash($password,PASSWORD_DEFAULT),
            'role_id' => $role,
        ];
        
        $usersTable->insert($fields);
        header('location: employe-crud.php');
    }
} else {
    $email = '';
    $password = '';
    $confirm_password = '';
    $firstname = '';
    $lastname = '';
    $role = '';
}


?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arcadia</title>
    <link rel="stylesheet" href="../public/code/css/styles.css">
</head>
<body>
    <?php include 'header.php'?>
    <form method='post'>
    <h2>Ajouter employé</h2>
    <div>
        <label for="lastname"> Nom</label>
        <input type="text" name="lastname" value='<?= $lastname?>'required>
    </div>
    <div>
        <label for="firstname">Prénom</label>
        <input type="text" name="firstname" value='<?= $firstname?>' required>
    </div>

    <div>
        <label for="username">Adresse Mail</label>
        <input type="email" name="username" value='<?= $email?>' required>
    </div>

    <div>
        <label for="password">Mot de passe</label>
        <input type="password" name="password"  required>
    </div>
    <div>
        <label for="confirm-password">Confirmer mot de passe</label>
        <input type="password" name="confirm-password" required>
    </div>

    <div>
        <label for="role">Poste Occupé</label>
        <select name='role'>
            <option value='2' <?php if($role == '2'){echo("selected");} else {echo '';}?>>Vétérinaire</option>
            <option value='3' <?php if($role == '3'){echo("selected");} else {echo '';}?>>Employé</option>
        </select>
    </div>
    <?php if(isset($errors)) {?>
        <div class='errors'>
            <?php foreach($errors as $error) { ?>
                <p><?= $error ?></p>
            <?php } ?>
        </div>
    <?php } ?>


    <input  class='button' type="submit" name='submit-btn' value='Enregistrer'>
</form>
</body>
</html>






