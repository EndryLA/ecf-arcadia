<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arcadia</title>
    <link rel="stylesheet" href="../public/code/css/styles.css">
</head>
<body>

    <div class='section-wrapper'>

        <?php 
        session_start(); 
        include 'header.php';
        ?>

        
        <section class='hero-section'>
            <img src='../assets/images/hero-image.jpg' alt="cerfs dans des bois">
            <div>
                <h1>Rencontrez les animaux sauvages de Brocéliande</h1>
                <p>Situé au cœur de la forêt enchantée de Brocéliande, le Zoo de Brocéliande vous invite à un voyage extraordinaire à la découverte de la faune sauvage.</p>
                <a class='button' href='../templates/habitats.php'>Je Découvre</a>
            </div>
        </section>
    </div>
        
    <div class='section-wrapper'>

        <section class='habitats-section'>
            <h2>Découvrez des vastes habitats</h2>

             <div class='habitat'>
                <img src='../assets/images/lion-2.jpg'>
                <div class='habitat-info'>
                    <h3>La jungle du roi</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quidem nulla est quos quibusdam natus vitae minus sit. Facere distinctio natus magni qui nisi! Optio eius veritatis voluptatibus reprehenderit maxime? Nesciunt deleniti facilis eaque maiores alias, doloribus nulla provident praesentium!</p>
                    <a class='button' href='../templates/habitat.php?id=1'>Visiter</a>
                </div>
             </div>   

             <div class='habitat habitat-reverse'>
                <img src='../assets/images/bird-3.jpg'>
                <div class='habitat-info'>
                    <h3>La cage aux oiseaux</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quidem nulla est quos quibusdam natus vitae minus sit. Facere distinctio natus magni qui nisi! Optio eius veritatis voluptatibus reprehenderit maxime? Nesciunt deleniti facilis eaque maiores alias, doloribus nulla provident praesentium!</p>
                    <a class='button' href='../templates/habitat.php?id=2'>Visiter</a>
                </div>
             </div> 

             <div class='habitat'>
                <img src='../assets/images/monkey.jpg'>
                <div class='habitat-info'>
                    <h3>Singes en folie</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quidem nulla est quos quibusdam natus vitae minus sit. Facere distinctio natus magni qui nisi! Optio eius veritatis voluptatibus reprehenderit maxime? Nesciunt deleniti facilis eaque maiores alias, doloribus nulla provident praesentium!</p>
                    <a class='button' href='../templates/habitat.php?id=3'>Visiter</a>
                </div>
             </div>   
            
        </section>
    </div>
<script src='./../public/code/js/hamburger-menu.js'></script>

</body>
</html>

<?php 

