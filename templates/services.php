
<?php 
include 'verifyRole.php';
include __DIR__ . '/../classes/DatabaseTable.php';
include __DIR__ . '/../includes/database-connection.php';


$servicesTable = new DatabaseTable($pdo,'service','service_id');

$services = $servicesTable->getAll();
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
    <h1 style='text-align:center;margin:40px auto;'>Nos Services</h1>
    <div class='services-container'>

        <?php foreach($services as $service) { ?>
            <div class='service'>
                <h3><?= htmlspecialchars($service['nom'],ENT_QUOTES) ?></h3>        
                <p><?= htmlspecialchars($service['description'],ENT_QUOTES)?></p>
            </div>
        
        <?php } ?>

    </div>
<script src='./../public/code/js/hamburger-menu.js'></script>

</body>    
</html>

