<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" >
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <link rel="stylesheet" href="index.css" >
    <title>WoodLand</title>
</head>
<body>
    <div class="index" id="index">
        <div class="img-background">

        </div>
        <?php
            include('navigation.php')
        ?>

        <h1>Bienvenue à WoodLand</h1>


        <div class="btn-menu">
            <ul>
                <li class="btn-item">
                    <a href="reservation.php">
                        Réserver
                    </a>
                </li>
                <li class="btn-item">
                    <a href="parcours.php">
                        Nos parcours
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <?php 
        include('footer.php')
    ?>
</body>
</html>
