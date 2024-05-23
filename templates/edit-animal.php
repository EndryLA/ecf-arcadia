<?php 

include 'verifyRole.php';
include __DIR__ . '/../includes/database-connection.php';
include __DIR__ . '/../classes/DatabaseTable.php';

$animalsTable = new DatabaseTable($pdo,'animal','animal_id');
$imagesTable = new DatabaseTable($pdo, 'image', 'image_id');
$raceTable = new DatabaseTable($pdo,'race','race_id');
$vetReportTable = new DatabaseTable($pdo,'rapport_veterinaire','rapport_veterinaire_id');
$habitatTable = new DatabaseTable($pdo,'habitat','habitat_id');

$animal = $animalsTable->selectLine($_GET['id']);
$race = $raceTable->selectLine($animal['race_id']);
$habitat = $habitatTable->selectLine($_GET['id']);
$vetReport = $vetReportTable->selectLine($_GET['id']);
$races = $raceTable->getAll();
$habitats = $habitatTable->getAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/code/css/styles.css">

</head>
<body>
    <?php include 'header.php'?>
    
    <form method='post'>
        <h1>Modifier données</h1>

        <div>
            <label>Prenom</label>
            <input type='text' name='name' value='<?=htmlspecialchars($animal['prenom'],ENT_QUOTES) ?>'> 
        </div>

        <div>
            <label>Race</label>
            <select name='race'> 
                <?php foreach ($races as $race) { ?>
                    <option value='<?=htmlspecialchars($race['race_id'],ENT_QUOTES)?>'><?= htmlspecialchars($race['race_id'] . ' - ' . $race['label'],ENT_QUOTES)?></option>
                <?php } ?>
            </select>
        </div>

        <div>
            <label>Etat</label>
            <input type='text' name='etat' value='<?= $animal['etat']?>'> 
        </div>

        <div>
            <label>Habitat</label>
            <select name='habitat'>
                <?php foreach($habitats as $habitat) {?>
                    <option value='<?=htmlspecialchars($habitat['habitat_id'],ENT_QUOTES)?>' ><?=htmlspecialchars($habitat['habitat_id'] . ' - ' . $habitat['nom'],ENT_QUOTES)?></option>    
                <?php } ?>
             </select>
        </div>
        <input type='submit' class='button' name='submit-btn' value='Enregistrer'>
    </form>

</body>
</html>




<?php 

if (isset($_POST['submit-btn'])) {
    $fields = [
        'nom' => htmlspecialchars($_POST['name'],ENT_QUOTES),
        'race_id' => htmlspecialchars($_POST['race'],ENT_QUOTES),
        'etat' => htmlspecialchars($_POST['etat'],ENT_QUOTES),
        'habitat_id' => htmlspecialchars($_POST['habitat'],ENT_QUOTES)
    ];


    
    /* $user->update($fields,$username); */
    header('location: animal-crud.php');
}
