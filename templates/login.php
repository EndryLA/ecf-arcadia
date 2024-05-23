<?php 

session_start();
include __DIR__ . '/../includes/database-connection.php';
include __DIR__ . '/../classes/DatabaseTable.php';

$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars($_POST['username'],ENT_QUOTES);
    $password = htmlspecialchars($_POST['password'],ENT_QUOTES);
    
    $usersTable = new DatabaseTable($pdo,'utilisateur','username');
    $user = $usersTable->selectLine($username);
    
    if($user) {
        $role = htmlspecialchars($user['role_id'],ENT_QUOTES);
        if (password_verify($password,$user['password'])){
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $role;
            header('location: dashboard.php');
        } else {
            $errorMessage = 'Nom d\'utilisateur ou mot de passe incorrect';
        }
        
    } else {
        $errorMessage = 'Nom d\'utilisateur ou mot de passe incorrect';
    }
    
} 
