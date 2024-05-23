<?php

try {
    $pdo = new PDO('mysql:dbname=arcadia_db;host=127.0.0.1','root','');
} catch (PDOException $error) {
    echo '<h1>' . 'Une erreur est survenue' .'</h1>' ;
}
