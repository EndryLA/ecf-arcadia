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
    session_start();
    include __DIR__ . '/header.php';
    ;?>

    <form method='post'> 
        <h1>Nous Contacter</h1> 
        <div>
            <label for='lastname'>Nom</label>
            <input id='lastname' name='lastname'> 
        </div>
        <div>
            <label for='firstname'>Prénom</label>
            <input id='firstname' name='firstname'> 
        </div>
        <div>
            <label for='email'>Adresse mail</label>
            <input type='email' id='email' name='email'> 
        </div>
        <div>
            <label for="message">Message</label>
            <textarea name='message' ></textarea>
        </div>
        <input type="submit" class='button'>
    </form>
    <script src='./../public/code/js/hamburger-menu.js'></script>

</body>
</html>


