<?php 
include 'verifyRole.php';
ob_start();

if (isset($_SESSION['username'])) {
    if ($_SESSION['role'] == 1) {
        include 'admin-dashboard.php';
    } elseif ($_SESSION['role'] == 2) {
        include 'vet-dashboard.php';
    } elseif ($_SESSION['role'] == 3) {
        include 'employe-dashboard.php';
    }
} else {
    header('location : ../public/index.php');
    die();
}

$output = ob_get_clean()

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='../public/code/css/styles.css' rel='stylesheet'>
    
</head>
<body>
<?php 
    include 'header.php';

    echo $output;
?>
</body>
</html>