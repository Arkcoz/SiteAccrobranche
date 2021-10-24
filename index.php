<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
    <link rel="stylesheet" href="style.css" >
    <link rel="stylesheet" href="index.css" >
    <title>WoodLand</title>
</head>
<body>
    <?php
    include('navigation.php')
    ?>
    <header>
        <div class="index" id="index">
            <h1 id="mainTitle">Bienvenue à WoodLand</h1>
            <div class="btn-menu">
                <a href ="reservation.php" style="--clr : #5ad6a2;--i:0;" class= "moveBtn"> <span> Réserver </span> </a>
                <a href ="parcours.php" style="--clr : #5ad6a2;--i:0;" class= "moveBtn"> <span> Nos parcours </span> </a>
            </div>
            <a id="mylink" href="#news"><img src="source/fleche_bas.png" alt="fleche" class="fleche"></a>
            <div class="banderol">
                Rejoignez nous jeunes héros ! Nous vous attendons pour la quête du Saint Graal !
            </div>
        </div>
    </header>
    <div class="news_wrapper" id="news">
        <h2>Nos dernières informations</h2>
        <div class="news_container">
            <div class="imgNewsContainer">
                <img class="news_image" src="source/passe_sanitaire.png" alt="Photo du passe sanitaire">
            </div>
            <div class="newsDescription">
                <div class="textNews">
                    <h3>Pass sanitaire obligatoire</h3>
                    <p style="text-align: justify">
                        Au vu du décret du gouvernement paru le 20/07/2021 et s’appliquant à notre activité,
                        nous sommes à ce jour dans l’obligation de contrôler le Pass sanitaire pour les plus de 18 ans qui payent une entrée pour eux même.
                        Ce contrôle consiste à vérifier votre QR code soit sur l’application Tousanticovid,
                        soit sur un support imprimé et votre identité (toutes pièces d’identités acceptées ou bien votre nom sur votre réservation est suffisant).
                    </p>
                </div>
                <a href ="#" class= "voirBtn"> Voir plus </a>
            </div>
        </div>

        <div class="news_container">
            <div class="imgNewsContainer">
                <img class="news_image" src="source/detente.jpg" alt="Photo du passe sanitaire">
            </div>
            <div class="newsDescription">
                <div class="textNews">
                    <h3>Pass sanitaire obligatoire</h3>
                    <p style="text-align: justify">
                        Venez vous détendre entre 2 parcours, dans un merveilleux espace de détente. Nous vous rappelons
                        que les chevaliers ont aussi le droit de se détendre!
                    </p>
                </div>
                <a href ="#" class= "voirBtn"> Voir plus </a>
            </div>
        </div>
    </div>
    <?php 
        include('footer.php')
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/index.js?<?=filemtime("js/index.js") ?>"></script>
</body>
</html>
