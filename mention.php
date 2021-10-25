<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" >
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
    <title>Mentions légales</title>
    <style>
        /*Gestion du footer*/
        body{
            display: flex;
            flex-direction: column;
        }

        footer{
            flex: none;
            margin-top: auto;
        }
    </style>
</head>
<body>
<?php
include('navigation.php')
?>
<main>
    <div class="containerDescriptionPage">
        <h1>Mentions légales</h1>
        <h2>En savoir plus sur nos mentions légales</h2>
    </div>
    <div class="contenuFlex">
        <h2>Éditeur</h2>
        <p>
            Ce site est édité par :
            <br>
            <p>Woodland – 26 rue des templiers, 21666, La Diablerie</p>
            <p>Tel : 03 66 66 66 66</p>
            <p>Contact électronique : Woodland@gmail.com</p>
            <p>SARL au capital de 37 000,00 € euros</p>
            <br>
            Directeur de Publication
            Arthur Pendragon, Directeur de Woodland
            <br>
            Ce site est déclaré auprès de la Cnil. N° d’autorisation : 6666666 v 0
        </p>
    </div>

    <div class="contenuFlex">
        <h2 class="titre">Collecte et Traitement de Renseignements Personnels</h2>
        <p>Conception & réalisation du site : Woodland</p>
        <p>26 rue des templiers, 21666, La Diablerie</p>
        <p>Tel : 03 66 66 66 66</p>
        <p>Email: Woodland@gmail.com</p>
    </div>

    <div class="contenuFlex">
        <p>
            Le site internet Woodland.com est hébergé sur les serveurs de l’IUT Informatique DIJON/AUXERRE – Université de Bourgogne-Franche-Comté – France. L’IUT informatique de Dijon est une structure de l’université de bourgogne Franche-Comté (UB), qui se situe au 36 Rue Chabot Charny, 21000 Dijon – France.
        </p>
    </div>
</main>
<?php
include('footer.php')
?>
</body>
</html>
