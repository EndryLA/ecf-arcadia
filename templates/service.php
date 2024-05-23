<?php 
include 'verifyRole.php';
include __DIR__ . '/../includes/database-connection.php';
include __DIR__ . '/../classes/DatabaseTable.php';


$servicesTable = new DatabaseTable($pdo,'service','service_id');
$service = $servicesTable->selectLine($_GET['id']);


$serviceName = htmlspecialchars($service['nom'],ENT_QUOTES);
$serviceDescription = htmlspecialchars($service['description'],ENT_QUOTES);
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
        <h1>Modifier Service</h1>
        <div>
            <label>Nom</label>
            <input type='text' name='service-name' value='<?=$serviceName ?>'> 
        </div>
        
        <div>
            <label>Description</label>
            <textarea name='service-description'><?= $serviceDescription ?></textarea> 
        </div>
        <input type='submit' class='button' name='submit-btn' value='Enregistrer'>
    </form>

</body>
</html>




<?php 

if (isset($_POST['submit-btn'])) {
    $fields = [
        'nom' => htmlspecialchars($_POST['service-name'],ENT_QUOTES),
        'description' => htmlspecialchars($_POST['service-description'],ENT_QUOTES)
    ];
    
    $servicesTable->update($fields,$_GET['id']);
    header('location: service-config.php');
}
