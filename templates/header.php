<header>
    <a class='logo' href="../public/index.php"><img src="../assets/images/logo.svg" alt='arcadia logo' ></a>
    <ul id='menu'>
        <li><a href='../public/index.php'>Accueil</a></li>
        <li><a href='../templates/habitats.php'>Habitats</a></li>
        <li><a href='../templates/services.php'>Services</a></li>
        <li><a href='../templates/contact.php'>Contact</a></li>
        <?php 
         if(isset($_SESSION['username'])) {
             echo "<li><a href='../templates/dashboard.php'>Dashboard</a></li>";
         }?>
    </ul>
    <?php 
        if (isset($_SESSION['username'])) {
            echo "<a class='button' href='../templates/logout.php'>Déconnexion</a>";
        } else {
            echo "<a class='button' href='../templates/connexion.php'>Connexion</a>";
        }
    ?>
    <img id='hamburger-menu' src='../assets/icons/bars-solid (1).svg'>
</header>

<div id='mobile-menu'>
    <img id='close-menu' src='../assets/icons/x-solid.svg'>
    <ul>
        <li><a href='../public/index.php'>Accueil</a></li>
        <li><a href='../templates/habitats.php'>Habitats</a></li>
        <li><a href='../templates/services.php'>Services</a></li>
        <li><a href='../templates/contact.php'>Contact</a></li>
        <?php 
         if(isset($_SESSION['username'])) {
             echo "<li><a href='../templates/contact.php'>Dashboard</a></li>";
         }?>
    </ul>
</div>
