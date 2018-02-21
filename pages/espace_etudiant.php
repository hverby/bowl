<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Espace etudiant BOWL || ESMAT</title>
    <link rel="stylesheet" type="text/css" href="../style/espaceetudiants.css"/>
</head>
<body>
    <header>
    <img src="../images/logo2.PNG" alt="logo" id="logo"/>
        <nav>
            <ul class="list1">
                <a href="../index.html"><li>ACCUEIL</li></a> 
                <a href="apropos.php"><li>A PROPOS</li></a> 
            </ul>
            <ul class="list2">
                <a href="##"><li>CONNEXION</li></a>
                <a href="inscription.html"><li>INSCRIPTION</li></a>
            </ul>
        </nav>
    </header>
    <hr id="ligne"/>
    <div id="connexion">
    <h2>Connexion | Groupe bowl</h2>
    <hr/>
        <form action="##" method="post" id="form">
        <label for="mail">Adresse email<br/>
        <input type="text" name="mail" id="mail" required/>    
        </label><br/>
        <label for="password">Mot de passe<br/>
        <input type="password" name="password" id="password" required/><br/>
        <input type="submit" name="bouton" value="CONNEXION" id="bouton"/>
        </label>
        </form>
    </div>
    <div id="oublié">
    <h2>Mot de passe oublié | Groupe bowl</h2>
    <hr/>
        <form action="##" method="post" id="form2">
        <label for="mail">Adresse email<br/>
        <input type="text" name="mail" id="mail" required/>    
        </label><br/>
        <label for="bouton2">
        <input type="submit" name="bouton" value="VALIDER" id="bouton2"/>
        </label>
        </form>
    </div>
    <footer>
        <p class="contacts">Contacts: +225 01-02-03-04 / Mail: legroupebowl97@gmail.com</p>
        <p class="licence"> Tous droits reservés - 2018 - AEE Devs</p>
    </footer>
</body>
</html>
