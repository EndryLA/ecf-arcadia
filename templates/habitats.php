<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arcadia</title>
    <link rel="stylesheet" href="../public/code/css/styles.css">
    <link rel="stylesheet" href="../public/code/css/animal.css">
</head>
<body>
    <?php 

    session_start();    
    include 'header.php';
    include __DIR__ . '/../includes/database-connection.php';
    include __DIR__ . '/../classes/DatabaseTable.php';

    $habitatsTable = new DatabaseTable($pdo,'habitat','habitat_id');
    $imageTable = new DatabaseTable($pdo,'image','image_id');

    $habitats = $habitatsTable->getAll();
    ?>
    
    <h1 class='align-center'>Découvrez nos habitats !</h1>
    <div class='habitats-page-container'>
    <?php foreach($habitats as $habitat) {?> 
            <div class='habitats-page-habitat'>
                <img class='habitat-page-image' src='<?= '../uploads/habitats/' . htmlspecialchars($imageTable->selectLine($habitat['image_id'])['image_name'],ENT_QUOTES) ?>'>    
                <h2><?= htmlspecialchars($habitat['nom'],ENT_QUOTES)?></h2>
                <form method='post'>
                    <input type='hidden' name='habitat-id' value='<?= htmlspecialchars($habitat['habitat_id'],ENT_QUOTES) ?>'>
                    <input type='submit' name='submit-btn' class='button' value='Voir habitat'>
                </form>
            </div>
            <?php } ?>    
            
    </div>
</body>
</html>
<script src='./../public/code/js/hamburger-menu.js'></script>

<?php

if (isset($_POST['submit-btn'])) {
    header('location: habitat.php?id=' . htmlspecialchars($_POST['habitat-id'],ENT_QUOTES));
}