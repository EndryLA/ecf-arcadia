<?php

include __DIR__ . '/../includes/database-connection.php';
include __DIR__ . '/../classes/DatabaseTable.php';

$vetReportTable = new DatabaseTable($pdo,'rapport_veterinaire','rapport_veterinaire_id');


$animalId = $_GET['id'];
$rapportVeterinaire = $vetReportTable->selectLine($animalId);

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
    <?php
    include 'verifyRole.php'; 
    include 'header.php';
    ?>

    <form method='post'>
        <h1>Rapport Vétérinaire</h1>
        <p></p>
        <div>
            <label>Etat de l'animal</label>
            <input type='text' name='animal-state' value=''> 
        </div>
        <div>
            <label>Nourriture proposée</label>
            <input type='text' name='proposed-food' value=''> 
        </div>
        <div>
            <label>Grammage de la nourriture</label>
            <input type='text' name='food-dosage' value=''> 
        </div>
        <div>
            <label>Date de passage</label>
            <input type='date' name='report-date' value='<?php date('Y-m-d')?>'> 
        </div>
        <div>
            <label>Detail de l'état de l'animal</label>
            <textarea name='report'><?= htmlspecialchars($rapportVeterinaire['detail'],ENT_QUOTES) ?></textarea>
        </div>
        <input name='submit-btn' class='button' value='Enregister' type='submit'>
    </form>
    
</body>
</html>

<?php

if (isset($_POST['submit-btn'])) {
    $fields = [
        'date' => htmlspecialchars($_POST['report-date'],ENT_QUOTES),
        'detail' => htmlspecialchars($_POST['report'],ENT_QUOTES)
    ];
    $vetReportTable->update($fields,$_GET['id']);
}