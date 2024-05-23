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
    include 'header.php'; ?>
    <form method='post'>
        <div>
            <h1>Nourrir animal</h1>
            <label>Date</label>
            <input type='date' name='feedingDate' value='<?php ?>'>
        </div>
        <div>
            <label>Hour</label>
            <input type='time' name='feedinHour' value='<?php ?>'>
        </div>
        <div>
            <label>Nourriture</label>
            <textarea name='food'></textarea>
        </div>
        <input type='submit' name='submit-btn' value='Enregistrer' class='button'>
    </form>
    
</body>
</html>


<?php

if(isset($_POST['submit-btn'])){
    echo $_POST['feedingDate'];
    echo 'oui';
} else {
    echo 'pas de var';
}

?>