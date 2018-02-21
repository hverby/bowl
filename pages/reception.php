<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/jpg" href="images/logo1.png"/>
    <link rel="stylesheet" type="text/css" href="../style/reception.css"/>
    <title>LE GROUPE BOWL||ESMAT</title>
</head>
<body>
    <header>
        <img src="../images/logo2.png" alt="logo" id="logo"/>
    </header>
    <div id="bienvenue">
    
        <p>
        <?php
        
           echo 'Bienvenue' . ' ' . $_POST['prenom'];
            echo '<br/>' . ' Cette page n\'est actuellement pas disponible sur notre site internet mais nous t\'avons bel et bien enrégistré dans notre base de donnée pour une prochaine visite.' . '<br/>' . 'N\'hésite pas à revenir de temps en temps pour voir s\'il ya eu des changements. Merci !';
    
    ?>
        </p>
        <a href="../index.html"><button id="bouton">Revenir à l'accueil</button></a>
    </div>
     <footer>
        <p class="contacts">Contacts: +225 01-02-03-04 / Mail: legroupebowl97@gmail.com</p>
        <p class="licence"> Tous droits reservés - 2018 - AEE Devs</p>
    </footer>
</body>
</html>