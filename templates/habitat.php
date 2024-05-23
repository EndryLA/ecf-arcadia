<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arcadia</title>
    <link rel="stylesheet" href="../public/code/css/general-styles.css">
    <link rel="stylesheet" href="../public/code/css/styles.css">
</head>
<body>
    <?php 
    include 'header.php';
    include __DIR__ . '/../includes/database-connection.php';
    include __DIR__ . '/../classes/DatabaseTable.php';
    
    $habitatsTable = new DatabaseTable($pdo,'habitat','habitat_id');
    $animalsTable = new DatabaseTable($pdo,'animal','animal_id');
    $imageTable = new DatabaseTable($pdo,'image','image_id');

    $habitat = $habitatsTable->selectLine($_GET['id']);
    $animals = $animalsTable->getAll();
    $images = $imageTable->getAll();
    ?>

    <h1 class='align-center'><?= $habitat['nom'] ?></h1>

    <div class='habitat-page-wrapper'>
        <img src='<?= '../uploads/habitats/' . htmlspecialchars($imageTable->selectLine($habitat['image_id'])['image_name'],ENT_QUOTES) ?>' alt='' class='habitat-image'>

        <h2 style='text-align:center;' >Description</h2>
        <p><?= htmlspecialchars($habitat['description'],ENT_QUOTES)?></p>

        
        
        <h2 style='text-align:center;'>Découvrez les animaux figurants !</h2>
        <div class='habitat-animals-container'>
            
            <?php 
        foreach($animals as $animal) { ?>
            <div class='habitat-animal'>
                <img src='<?= '../uploads/animals/' . htmlspecialchars($imageTable->selectLine($animal['image_id'])['image_name'],ENT_QUOTES) ?>' class='animal-img'>
                <h3><?= $animal['prenom'] ?></h3>
                <a class='button' href='<?= '../templates/animal.php?id=' . htmlspecialchars($animal['animal_id'],ENT_QUOTES)?>'>Voir animal</a>
            </div>
            
            <?php } ?>
        </div>
    </div>
<script src='./../public/code/js/hamburger-menu.js'></script>

    </body>
    
</html>