<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" >
  <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
  <link rel="stylesheet" href="info.css" >
  <title>Infos-pratiques</title>
</head>
<body>
  <?php
    include('navigation.php')
  ?>
  <main>
      <!-- TABLEAU TARIF -->
      <h1>TARIF</h1>
      <table>
        <tr>
          <td class="TeteTab">Participant</td>
          <td class="TeteTab">Individuel</td>
          <td class="TeteTab">Groupe<br/>(dès 10 personnes)</td>
        </tr>
        <tr>
          <td>Adultes (16 ans et +)</td>
          <td>22€</td>
          <td>20€</td>
        </tr>
        <tr>
          <td>Juniors (8 à 15 ans)</td>
          <td>18€</td>
          <td>16€</td>
        </tr>
        <tr>
          <td>Enfants (5 à 7 ans)</td>
          <td>13€</td>
          <td>11€</td>
        </tr>
        <tr>
          <td>Etudiant</td>
          <td>18€</td>
          <td>16€</td>
        </tr>
        <tr>
          <td class="AjoutFinTab">
          *équipement fournit
          </td>
        <tr/>
      </table>
                                                                                    <!-- TABLEAU HORAIRES -->
      <h1>HORAIRES</h1>
      <table>
        <tr>
          <td class="HTeteTab">Lundi</td>
          <td class="HTeteTab">Mardi</td>
          <td class="HTeteTab">Mercredi</td>
          <td class="HTeteTab">Jeudi</td>
          <td class="HTeteTab">Vendredi</td>
          <td class="HTeteTab">Samedi</td>
          <td class="HTeteTab">Dimanche</td>
        </tr>
        <tr>
          <td class="HIntTab">Fermé</td>
          <td class="HIntTab">10h → 12h00</td>
          <td class="HIntTab">10h → 12h00</td>
          <td class="HIntTab">10h → 12h00</td>
          <td class="HIntTab">10h → 12h00</td>
          <td class="HIntTab">9h → 12h00</td>
          <td class="HIntTab">9h → 12h00</td>
        </tr>
        <tr>
          <td class="HIntTab">Fermé</td>
          <td class="HIntTab">14h → 17h00</td>
          <td class="HIntTab">14h → 17h00</td>
          <td class="HIntTab">14h → 17h00</td>
          <td class="HIntTab">13h → 22h</td>
          <td class="HIntTab">13h → 18h</td>
          <td class="HIntTab">13h → 18h</td>
        </tr>
        <tr>
          <td class="HAjoutFinTab" colspan="2">
          *ouverts jours fériés
          </td>
        </tr>
      </table>

      <h1>ACCÈS</h1>
      <div class="Info_Acces">
          <div class="Info_Gauche">
            <iframe id="Carte" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d5804.10322255451!2d4.913172466030299!3d47.436849060609426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sfr!2sfr!4v1632001239876!5m2!1sfr!2sfr"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
          </div>


          <div class="Info_Droite">

            <ul>
              <h2>Information supplémentaire</h2>
              <li>Accessible en voiture</li>
              <li>Environ à 20 min de Dijon</li>
              <li>Parking surveillé Gratuit</li>
              <li>Parking avec places handicapé</li>
            </ul>
          </div>

      </div>
  </main>
  <?php
    include('footer.php')
  ?>
</body>
</html>
