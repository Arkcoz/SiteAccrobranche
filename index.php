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
    <div class="index" id="index">
            <a id="mylink" href="#news">
                <div class="fleche_container">
                    <img src="source/fleche_bas.png" alt="fleche" class="fleche">
                </div>
            </a>

        <div class="img-background">

        </div>
        <?php
            include('navigation.php')
        ?>

        <h1>Bienvenue à WoodLand</h1>


        <div class="btn-menu">
            <a href="reservation.php" id="btn">
                Réserver
            </a>
            <a href="parcours.php" id="btn">
                Nos parcours
            </a>  
        </div>
    </div>
    
    <div class="banderol">
        Rejoignez nous jeunes héros ! Nous vous attendons pour la quête du Saint Graal ! 
    </div>

    <div class="news" id="news">
        

        <h2>Nos dernières informations</h2>
        <div class="news_menu">
            <div class="news_container">
                <img class="news_image" src="source/passe_sanitaire.png" alt="Photo du passe sanitaire">
                <div class="news_contenu">
                    <h3>Pass sanitaire obligatoire</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga ex explicabo iusto nesciunt aliquid placeat ratione inventore! Laudantium beatae vero tempora excepturi atque iusto ducimus officia iure fugiat, amet dicta!</p>
                </div>
            </div>
            <div class="news_container">
                <img class="news_image" src="source/detente.jpg" alt="Photo de hamac">
                <div class="news_contenu">
                    <h3>Un nouveau coin détente... en pleine forêt !</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga ex explicabo iusto nesciunt aliquid placeat ratione inventore! Laudantium beatae vero tempora excepturi atque iusto ducimus officia iure fugiat, amet dicta!</p>
                </div>
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
