<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
    <link rel="stylesheet" href="style.css" >
    <link rel="stylesheet" href="parcours.css" >
    <title>Nos Parcours</title>
</head>
<body>
    <?php 
        include('navigation.php')
    ?>

    <div class="map_container">
        <img class="map_image" src="source/plan_parcours.jpg" alt="Photo du passe sanitaire">
        <div class="map_contenu">
            <h3>Liste des parcours</h3>
            <ul>
                <li>
                    1. Parcours Galaad
                </li>
                <li>
                    2. Parcours Agravain
                </li>
                <li>
                    3. Parcours Bohort
                </li>
                <li>
                    4. Parcours Mordred
                </li>
                <li>
                    5. Parcours Accolon
                </li>
                <li>
                    6. Parcours Erec
                </li>
                <li>
                    7. Parcours Gauvain
                </li>
                <li>
                    8. Parcours Yvain
                </li>
                <li>
                    9. Parcours Méléagant
                </li>
                <li>
                    10. Parcours Lancelot
                </li>
                <li>
                    11. Parcours Perceval
                </li>
                <li>
                    12. Parcours Arthur
                </li>
                <li>
                    13. Le Saint Graal
                </li>

            </ul>
        </div>
    </div>
    <div class="section-parcours" id="section-parcours">
        <section class="carousel" aria-label="Gallery">
            <ol class="carousel__viewport">
                <li id="carousel__slide1" tabindex="0" class="carousel__slide">
                    <div class="carousel__snapper">
                        <a href="#carousel__slide13" class="carousel__prev">Go to last slide</a>
                        <a href="#carousel__slide2" class="carousel__next">Go to next slide</a>
                    </div>
                </li>
                <li id="carousel__slide2"
                    tabindex="0"
                    class="carousel__slide">
                <div class="carousel__snapper"></div>
                <a href="#carousel__slide1"
                    class="carousel__prev">Go to previous slide</a>
                <a href="#carousel__slide3"
                    class="carousel__next">Go to next slide</a>
                </li>
                <li id="carousel__slide3"
                    tabindex="0"
                    class="carousel__slide">
                <div class="carousel__snapper"></div>
                <a href="#carousel__slide2"
                    class="carousel__prev">Go to previous slide</a>
                <a href="#carousel__slide4"
                    class="carousel__next">Go to next slide</a>
                </li>
                <li id="carousel__slide4"
                    tabindex="0"
                    class="carousel__slide">
                <div class="carousel__snapper"></div>
                <a href="#carousel__slide3"
                    class="carousel__prev">Go to previous slide</a>
                <a href="#carousel__slide5"
                    class="carousel__next">Go to next slide</a>
                </li>
                <li id="carousel__slide5"
                    tabindex="0"
                    class="carousel__slide">
                <div class="carousel__snapper"></div>
                <a href="#carousel__slide4"
                    class="carousel__prev">Go to previous slide</a>
                <a href="#carousel__slide6"
                    class="carousel__next">Go to next slide</a>
                </li>
                <li id="carousel__slide6"
                    tabindex="0"
                    class="carousel__slide">
                <div class="carousel__snapper"></div>
                <a href="#carousel__slide5"
                    class="carousel__prev">Go to previous slide</a>
                <a href="#carousel__slide7"
                    class="carousel__next">Go to next slide</a>
                </li>
                <li id="carousel__slide7"
                    tabindex="0"
                    class="carousel__slide">
                <div class="carousel__snapper"></div>
                <a href="#carousel__slide6"
                    class="carousel__prev">Go to previous slide</a>
                <a href="#carousel__slide8"
                    class="carousel__next">Go to next slide</a>
                </li>
                <li id="carousel__slide8"
                    tabindex="0"
                    class="carousel__slide">
                <div class="carousel__snapper"></div>
                <a href="#carousel__slide7"
                    class="carousel__prev">Go to previous slide</a>
                <a href="#carousel__slide9"
                    class="carousel__next">Go to next slide</a>
                </li>
                <li id="carousel__slide9"
                    tabindex="0"
                    class="carousel__slide">
                <div class="carousel__snapper"></div>
                <a href="#carousel__slide8"
                    class="carousel__prev">Go to previous slide</a>
                <a href="#carousel__slide10"
                    class="carousel__next">Go to next slide</a>
                </li>
                <li id="carousel__slide10" tabindex="0" class="carousel__slide">
                    <div class="carousel__snapper">
                        <div class="parcours-all">
                            <div class="parcours-gauche">
                                <div class="parcours-photo">
                                    <img src="source/Chemin10.png" classe="photo">
                                </div>
                                <div class="parcours-name">
                                    Parcours Arthur
                                </div>
                            </div>
                        
                            <div class="parcours-droit">
                                <div class="parcours-title">
                                    POUR LES PLUS VAILLANT
                                </div>
                                <div class="parcours-text">
                                    <p>Vous aimez vous dépenser dans votre quête sur qu'à l'épuisement ? Venez vous mettre à l'épreuve sur le parcours du Roi Arthur !</p>
                                    
                                    <p>Ce parcours vous offrira des grandes épreuves physiques avec des obstacles compliqués pour le plaisir des plus sportifs !</p>
                                </div>
                                <div class="parcours-info">
                                    
                                </div>
                            </div>
                        </div>
                    </div> 
                    <a href="#carousel__slide9" class="carousel__prev">Go to previous slide</a>
                    <a href="#carousel__slide11" class="carousel__next">Go to next slide</a>
                </li>
                <li id="carousel__slide11"
                    tabindex="0"
                    class="carousel__slide">
                <div class="carousel__snapper"></div>
                <a href="#carousel__slide10"
                    class="carousel__prev">Go to previous slide</a>
                <a href="#carousel__slide12"
                    class="carousel__next">Go to next slide</a>
                </li>
                <li id="carousel__slide12"
                    tabindex="0"
                    class="carousel__slide">
                <div class="carousel__snapper"></div>
                <a href="#carousel__slide11"
                    class="carousel__prev">Go to previous slide</a>
                <a href="#carousel__slide13"
                    class="carousel__next">Go to next slide</a>
                </li>
                <li id="carousel__slide13"
                    tabindex="0"
                    class="carousel__slide">
                <div class="carousel__snapper"></div>
                <a href="#carousel__slide12"
                    class="carousel__prev">Go to previous slide</a>
                <a href="#carousel__slide1"
                    class="carousel__next">Go to first slide</a>
                </li>
            </ol>
            <aside class="carousel__navigation">
                <ol class="carousel__navigation-list">
                <li class="carousel__navigation-item">
                    <a href="#carousel__slide1"
                    class="carousel__navigation-button">Go to slide 1</a>
                </li>
                <li class="carousel__navigation-item">
                    <a href="#carousel__slide2"
                    class="carousel__navigation-button">Go to slide 2</a>
                </li>
                <li class="carousel__navigation-item">
                    <a href="#carousel__slide3"
                    class="carousel__navigation-button">Go to slide 3</a>
                </li>
                <li class="carousel__navigation-item">
                    <a href="#carousel__slide4"
                    class="carousel__navigation-button">Go to slide 4</a>
                </li>
                <li class="carousel__navigation-item">
                    <a href="#carousel__slide5"
                    class="carousel__navigation-button">Go to slide 5</a>
                </li>
                <li class="carousel__navigation-item">
                    <a href="#carousel__slide6"
                    class="carousel__navigation-button">Go to slide 6</a>
                </li>
                <li class="carousel__navigation-item">
                    <a href="#carousel__slide7"
                    class="carousel__navigation-button">Go to slide 7</a>
                </li>
                <li class="carousel__navigation-item">
                    <a href="#carousel__slide8"
                    class="carousel__navigation-button">Go to slide 8</a>
                </li>
                <li class="carousel__navigation-item">
                    <a href="#carousel__slide9"
                    class="carousel__navigation-button">Go to slide 9</a>
                </li>
                <li class="carousel__navigation-item">
                    <a href="#carousel__slide10"
                    class="carousel__navigation-button">Go to slide 10</a>
                </li>
                <li class="carousel__navigation-item">
                    <a href="#carousel__slide11"
                    class="carousel__navigation-button">Go to slide 11</a>
                </li>
                <li class="carousel__navigation-item">
                    <a href="#carousel__slide12"
                    class="carousel__navigation-button">Go to slide 12</a>
                </li>
                <li class="carousel__navigation-item">
                    <a href="#carousel__slide13"
                    class="carousel__navigation-button">Go to slide 13</a>
                </li>
                </ol>
            </aside>
        </section>
    </div>

    <?php 
        include('footer.php')
    ?>
</body>
</html>