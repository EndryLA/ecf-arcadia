<?php

include __DIR__ . '/../includes/database-connection.php';
include __DIR__ . '/../classes/DatabaseTable.php';
    
session_start();

$usersTable = new DatabaseTable($pdo,'utilisateur','username');

$user = $usersTable->selectLine($_POST['username']);

$hashedPassword = '$2y$10$UgxvkRqSUMq9UI0ByH/MMusk0wQhRnxtZYsdMJbiwJf7NzXKOnJdy';

if (password_verify('password124',$user['password'])){
    //echo 'bon' . '<br>';
} else {
   // echo 'pas bon ' . '<br>';
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "post effectue";
    echo $user['password'];
    if ($user && password_verify($_POST['password'],$user['password'])) {
        echo 'connexion réussie';
    }
}



/* $valid = true;
$errors = [];

if ((isset($_POST['username'])) || (!empty($_POST['username']))) {
    $valid = true;
} elseif (filter_var($_POST['username'], FILTER_VALIDATE_EMAIL) == true) {
    $valid = true;
} else {
    $valid == false;
    $errors[] = 'adresse mail invalide';
}


if (isset($_POST['password'])) {
    $valid = 'true';
} elseif ($_POST['password'])





if ($valid) {
    echo 'informations correctes';
}
var_dump($errors); */
