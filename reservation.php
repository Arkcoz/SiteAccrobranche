<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" >
    <link rel="stylesheet" href="reservation.css" >
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <title>Réservation</title>
</head>
<body>
    <?php
        include('navigation.php')
    ?>

    <h1>Vous voulez réserver?</h1>
    <div id="soustitre">
      <div id="gauche"></div>
      <h2>Nous avons hâte de vous retrouver chez nous</h2>
      <div id="droite"/></div>
    </div>
    <div class="fond_div">
      <h3>Sélectionnez votre créneau</h3>
      <iframe src="http://winky.fr/winky_widget_calendar/?wid=0" style="width: 100%; height: 100%; border: none;"></iframe>
      <p>Horaires disponible</p>
    </div>

</body>
</html>
