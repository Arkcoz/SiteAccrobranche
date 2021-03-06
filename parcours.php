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
    <main>

    </main>
        <div class="map_container">
            <img class="map_image" src="source/plan_parcours.jpg" alt="Photo du passe sanitaire">
        </div>
        <div class="map_contenu">
                <div class="map_contenu_title">
                    <h3>Liste des parcours</h3>
                </div>
                <div class="map_contenu_lien">
                    <div class="map_contenu_disposition">
                        <a href=#carousel__slide1 id="map_1">
                                1. Parcours Galaad
                        </a>
                        <a href=#carousel__slide2 id="map_2">
                                2. Parcours Agravain
                        </a>
                    </div>
                    <div class="map_contenu_disposition">
                        <a href=#carousel__slide3 id="map_3">
                                3. Parcours Bohort
                        </a>
                        <a href=#carousel__slide4 id="map_4">
                                4. Parcours Mordred
                        </a>
                    </div>
                    <div class="map_contenu_disposition">
                        <a href=#carousel__slide5 id="map_5">
                                5. Parcours Accolon
                        </a>
                        <a href=#carousel__slide6 id="map_6">
                                6. Parcours Geraint
                        </a>
                    </div>

                    <div class="map_contenu_disposition">
                        <a href=#carousel__slide7 id="map_7">
                                7. Parcours Gauvain
                        </a>
                        <a href=#carousel__slide8 id="map_8">
                                8. Parcours Yvain
                        </a>
                    </div>
                    <div class="map_contenu_disposition">
                        <a href=#carousel__slide9 id="map_9">
                                9. Parcours M??l??agant
                        </a>
                        <a href=#carousel__slide10 id="map_10">
                                10. Parcours Lancelot
                        </a>
                    </div>
                    <div class="map_contenu_disposition">
                        <a href=#carousel__slide11 id="map_11">
                                11. Parcours Perceval
                        </a>
                        <a href=#carousel__slide12 id="map_12">
                                12. Parcours Arthur
                        </a>
                    </div>
                    <div class="map_contenu_disposition">
                        <a href=#carousel__slide13 id="map_13">
                                13. Le Saint Graal
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="section-parcours" id="section-parcours">
            <section class="carousel" aria-label="Gallery">
                <ol class="carousel__viewport">
                    <li id="carousel__slide1" tabindex="0" class="carousel__slide">
                        <div class="carousel__snapper">
                            <div class="parcours-all">
                                <div class="parcours-gauche">
                                    <div class="parcours-photo">
                                        <img src="source/Parcoursenfant1.png" classe="photo">
                                    </div>
                                    <div class="parcours-name">
                                        Parcours Galaad
                                    </div>
                                </div>

                                <div class="parcours-droit">
                                    <div class="parcours-title">
                                        POUR LES PLUS JEUNES
                                    </div>
                                    <div class="parcours-text">
                                        <p>Fils du chevalier Lancelot, Galaad vous mettre au d??fi sur une ??preuve d'??quilibre et d'agilit??.</p>

                                        <p>Allons-nous d??couvrir de futur talent et peut-??tre de futur chevalier de la Table Rond ?</p>
                                    </div>
                                    <div class="parcours-info">
                                        <div class="parcours-info-rapide rapide1">
                                            <div class="parcours-picto">
                                                <img src="source/icon_time.svg" alt="icone dur??e" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Dur??e :</strong> 10min
                                            </div>
                                        </div>
                                        <div class="parcours-info-rapide rapide2">
                                            <div class="parcours-picto">
                                                <img src="source/icon_niveau1.png" alt="icone niveau" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Niveau :</strong> Facile
                                            </div>
                                        </div>
                                        <div class="parcours-info-rapide rapide3">
                                            <div class="parcours-picto">
                                                <img src="source/icon_taille.png" alt="icone taille" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Taille :</strong> > 1m
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#carousel__slide13" class="carousel__prev">Go to last slide</a>
                        <a href="#carousel__slide2" class="carousel__next">Go to next slide</a>
                    </li>
                    <li id="carousel__slide2" tabindex="0" class="carousel__slide">
                        <div class="carousel__snapper">
                            <div class="parcours-all">
                                <div class="parcours-gauche">
                                    <div class="parcours-photo">
                                        <img src="source/Parcoursenfant2.png" classe="photo">
                                    </div>
                                    <div class="parcours-name">
                                        Parcours Agravain
                                    </div>
                                </div>

                                <div class="parcours-droit">
                                    <div class="parcours-title">
                                        POUR LES PLUS JEUNES
                                    </div>
                                    <div class="parcours-text">
                                        <p>Agravain, neveu du roi Arthur et chevalier irr??prochable, vous d??fie sur un parcours de surpassement de soi.</p>

                                        <p>Vous sentez-vous capable de relevez le d??fi d'Agravain ?</p>
                                    </div>
                                    <div class="parcours-info">
                                        <div class="parcours-info-rapide rapide1">
                                            <div class="parcours-picto">
                                                <img src="source/icon_time.svg" alt="icone dur??e" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Dur??e :</strong> 10min
                                            </div>
                                        </div>
                                        <div class="parcours-info-rapide rapide2">
                                            <div class="parcours-picto">
                                                <img src="source/icon_niveau1.png" alt="icone niveau" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Niveau :</strong> Facile
                                            </div>
                                        </div>
                                        <div class="parcours-info-rapide rapide3">
                                            <div class="parcours-picto">
                                                <img src="source/icon_taille.png" alt="icone taille" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Taille :</strong> > 1m
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#carousel__slide1" class="carousel__prev">Go to previous slide</a>
                        <a href="#carousel__slide3" class="carousel__next">Go to next slide</a>
                    </li>
                    <li id="carousel__slide3" tabindex="0" class="carousel__slide">
                        <div class="carousel__snapper">
                            <div class="parcours-all">
                                <div class="parcours-gauche">
                                    <div class="parcours-photo">
                                        <img src="source/Parcoursenfant3.png" classe="photo">
                                    </div>
                                    <div class="parcours-name">
                                        Parcours Bohort
                                    </div>
                                </div>

                                <div class="parcours-droit">
                                    <div class="parcours-title">
                                        POUR LES PLUS JEUNES
                                    </div>
                                    <div class="parcours-text">
                                        <p>Bohort est l'un des meilleurs chevalier de la table ronde. Courageux et vertueux, il obtient sa gloire dans sa qu??te du Graal.</p>

                                        <p>Ce parcours vous mettra sur le chemin du myst??re. Parviendrez-vous ?? d??couvrir le Graal ?</p>
                                    </div>
                                    <div class="parcours-info">
                                        <div class="parcours-info-rapide rapide1">
                                            <div class="parcours-picto">
                                                <img src="source/icon_time.svg" alt="icone dur??e" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Dur??e :</strong> 10min
                                            </div>
                                        </div>
                                        <div class="parcours-info-rapide rapide2">
                                            <div class="parcours-picto">
                                                <img src="source/icon_niveau1.png" alt="icone niveau" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Niveau :</strong> Facile
                                            </div>
                                        </div>
                                        <div class="parcours-info-rapide rapide3">
                                            <div class="parcours-picto">
                                                <img src="source/icon_taille.png" alt="icone taille" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Taille :</strong> > 1m
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#carousel__slide2" class="carousel__prev">Go to previous slide</a>
                        <a href="#carousel__slide4" class="carousel__next">Go to next slide</a>
                    </li>
                    <li id="carousel__slide4" tabindex="0" class="carousel__slide">
                        <div class="carousel__snapper">
                            <div class="parcours-all">
                                <div class="parcours-gauche">
                                    <div class="parcours-photo">
                                        <img src="source/Chemin1.png" classe="photo">
                                    </div>
                                    <div class="parcours-name">
                                        Parcours Mordred
                                    </div>
                                </div>

                                <div class="parcours-droit">
                                    <div class="parcours-title">
                                        POUR LES PLUS T??M??RAIRE
                                    </div>
                                    <div class="parcours-text">
                                        <p>Fils ill??gitime du roi Arthur, la robustesse est un des atouts phares de Mordred.</p>

                                        <p>Le parcours vous fera passer sur des filets et des obstacles atypiques !</p>
                                    </div>
                                    <div class="parcours-info">
                                        <div class="parcours-info-rapide rapide1">
                                            <div class="parcours-picto">
                                                <img src="source/icon_time.svg" alt="icone dur??e" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Dur??e :</strong> 10min
                                            </div>
                                        </div>
                                        <div class="parcours-info-rapide rapide2">
                                            <div class="parcours-picto">
                                                <img src="source/icon_niveau2.png" alt="icone niveau" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Niveau :</strong> Interm??.
                                            </div>
                                        </div>
                                        <div class="parcours-info-rapide rapide3">
                                            <div class="parcours-picto">
                                                <img src="source/icon_taille.png" alt="icone taille" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Taille :</strong> > 1m20
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#carousel__slide3" class="carousel__prev">Go to previous slide</a>
                        <a href="#carousel__slide5" class="carousel__next">Go to next slide</a>
                    </li>
                    <li id="carousel__slide5" tabindex="0" class="carousel__slide">
                        <div class="carousel__snapper">
                            <div class="parcours-all">
                                <div class="parcours-gauche">
                                    <div class="parcours-photo">
                                        <img src="source/Chemin2.png" classe="photo">
                                    </div>
                                    <div class="parcours-name">
                                        Parcours Accolon
                                    </div>
                                </div>

                                <div class="parcours-droit">
                                    <div class="parcours-title">
                                        POUR LES PLUS T??M??RAIRE
                                    </div>
                                    <div class="parcours-text">
                                        <p>Amant d??vou?? ?? la f??e Morgane, Accolon ??tait l'ennemi du Roi Arthur. </p>

                                        <p>Accolon avait souvent la t??te dans les nuages... j'esp??re que vous n'avez pas le vertiges !</p>
                                    </div>
                                    <div class="parcours-info">
                                        <div class="parcours-info-rapide rapide1">
                                            <div class="parcours-picto">
                                                <img src="source/icon_time.svg" alt="icone dur??e" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Dur??e :</strong> 10min
                                            </div>
                                        </div>
                                        <div class="parcours-info-rapide rapide2">
                                            <div class="parcours-picto">
                                                <img src="source/icon_niveau2.png" alt="icone niveau" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Niveau :</strong> Interm??.
                                            </div>
                                        </div>
                                        <div class="parcours-info-rapide rapide3">
                                            <div class="parcours-picto">
                                                <img src="source/icon_taille.png" alt="icone taille" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Taille :</strong> > 1m20
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#carousel__slide4" class="carousel__prev">Go to previous slide</a>
                        <a href="#carousel__slide6" class="carousel__next">Go to next slide</a>
                    </li>
                    <li id="carousel__slide6" tabindex="0" class="carousel__slide">
                        <div class="carousel__snapper">
                            <div class="parcours-all">
                                <div class="parcours-gauche">
                                    <div class="parcours-photo">
                                        <img src="source/Chemin3.png" classe="photo">
                                    </div>
                                    <div class="parcours-name">
                                        Parcours Geraint
                                    </div>
                                </div>

                                <div class="parcours-droit">
                                    <div class="parcours-title">
                                        POUR LES PLUS T??M??RAIRE
                                    </div>
                                    <div class="parcours-text">
                                        <p>Grevaint ??tait un compagnon d'armes du roi Arthur. </p>

                                        <p>Au fur et ?? mesure que vous avancerez sur le parcours, et plus les ??preuves seront difficiles ! Alors utilisez votre force de fa??on strat??gique !</p>
                                    </div>
                                    <div class="parcours-info">
                                        <div class="parcours-info-rapide rapide1">
                                            <div class="parcours-picto">
                                                <img src="source/icon_time.svg" alt="icone dur??e" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Dur??e :</strong> 10min
                                            </div>
                                        </div>
                                        <div class="parcours-info-rapide rapide2">
                                            <div class="parcours-picto">
                                                <img src="source/icon_niveau2.png" alt="icone niveau" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Niveau :</strong> Interm??.
                                            </div>
                                        </div>
                                        <div class="parcours-info-rapide rapide3">
                                            <div class="parcours-picto">
                                                <img src="source/icon_taille.png" alt="icone taille" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Taille :</strong> > 1m20
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#carousel__slide5" class="carousel__prev">Go to previous slide</a>
                        <a href="#carousel__slide7" class="carousel__next">Go to next slide</a>
                    </li>
                    <li id="carousel__slide7" tabindex="0" class="carousel__slide">
                        <div class="carousel__snapper">
                            <div class="parcours-all">
                                <div class="parcours-gauche">
                                    <div class="parcours-photo">
                                        <img src="source/Tirolienne1.png" classe="photo">
                                    </div>
                                    <div class="parcours-name">
                                        Parcours Gauvain
                                    </div>
                                </div>

                                <div class="parcours-droit">
                                    <div class="parcours-title">
                                        PARCOURS TIROLIENNE
                                    </div>
                                    <div class="parcours-text">
                                        <p>Gauvain est le neveu du roi Arthur et demi-fr??re de Mordred, mais surtout chevalier de la table ronde. </p>

                                        <p>Si vous voulez voyager entrer les arbres et avoir une vue ??lev?? du parc, c'est le parcours id??al !</p>
                                    </div>
                                    <div class="parcours-info">
                                        <div class="parcours-info-rapide rapide1">
                                            <div class="parcours-picto">
                                                <img src="source/icon_time.svg" alt="icone dur??e" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Dur??e :</strong> 10min
                                            </div>
                                        </div>
                                        <div class="parcours-info-rapide rapide2">
                                            <div class="parcours-picto">
                                                <img src="source/icon_niveau1.png" alt="icone niveau" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Niveau :</strong> Facile
                                            </div>
                                        </div>
                                        <div class="parcours-info-rapide rapide3">
                                            <div class="parcours-picto">
                                                <img src="source/icon_taille.png" alt="icone taille" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Taille :</strong> > 1m20
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#carousel__slide6" class="carousel__prev">Go to previous slide</a>
                        <a href="#carousel__slide8" class="carousel__next">Go to next slide</a>
                    </li>
                    <li id="carousel__slide8" tabindex="0" class="carousel__slide">
                        <div class="carousel__snapper">
                            <div class="parcours-all">
                                <div class="parcours-gauche">
                                    <div class="parcours-photo">
                                        <img src="source/Chemin4.png" classe="photo">
                                    </div>
                                    <div class="parcours-name">
                                        Parcours Yvain
                                    </div>
                                </div>

                                <div class="parcours-droit">
                                    <div class="parcours-title">
                                        POUR LES PLUS BRAVE
                                    </div>
                                    <div class="parcours-text">
                                        <p>Yvain est un valeureux chevalier qui n'a pas h??site ?? rejoindre Arthur dans sa qu??te au Graal.</p>

                                        <p>Plusieurs obstacles vous demanderont l'utilisation de votre force pour les surpasser.</p>
                                    </div>
                                    <div class="parcours-info">
                                        <div class="parcours-info-rapide rapide1">
                                            <div class="parcours-picto">
                                                <img src="source/icon_time.svg" alt="icone dur??e" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Dur??e :</strong> 15min
                                            </div>
                                        </div>
                                        <div class="parcours-info-rapide rapide2">
                                            <div class="parcours-picto">
                                                <img src="source/icon_niveau2.png" alt="icone niveau" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Niveau :</strong> Interm??.
                                            </div>
                                        </div>
                                        <div class="parcours-info-rapide rapide3">
                                            <div class="parcours-picto">
                                                <img src="source/icon_taille.png" alt="icone taille" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Taille :</strong> > 1m20
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#carousel__slide7" class="carousel__prev">Go to previous slide</a>
                        <a href="#carousel__slide9" class="carousel__next">Go to next slide</a>
                    </li>
                    <li id="carousel__slide9" tabindex="0" class="carousel__slide">
                        <div class="carousel__snapper">
                            <div class="parcours-all">
                                <div class="parcours-gauche">
                                    <div class="parcours-photo">
                                        <img src="source/Chemin5.png" classe="photo">
                                    </div>
                                    <div class="parcours-name">
                                        Parcours M??l??agant
                                    </div>
                                </div>

                                <div class="parcours-droit">
                                    <div class="parcours-title">
                                        POUR LES PLUS BRAVE
                                    </div>
                                    <div class="parcours-text">
                                        <p>Ennemi de Lancelot, M??l??agant est un chevalier de la table ronde ??nigmatique de la l??gende Arthurienne.</p>

                                        <p>Pendant le parcours, M??l??agant vous lancera une ??nigme, ?? vous de jouer !</p>
                                    </div>
                                    <div class="parcours-info">
                                        <div class="parcours-info-rapide rapide1">
                                            <div class="parcours-picto">
                                                <img src="source/icon_time.svg" alt="icone dur??e" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Dur??e :</strong> 15min
                                            </div>
                                        </div>
                                        <div class="parcours-info-rapide rapide2">
                                            <div class="parcours-picto">
                                                <img src="source/icon_niveau2.png" alt="icone niveau" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Niveau :</strong> Interm??.
                                            </div>
                                        </div>
                                        <div class="parcours-info-rapide rapide3">
                                            <div class="parcours-picto">
                                                <img src="source/icon_taille.png" alt="icone taille" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Taille :</strong> > 1m20
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#carousel__slide8" class="carousel__prev">Go to previous slide</a>
                        <a href="#carousel__slide10" class="carousel__next">Go to next slide</a>
                    </li>
                    <li id="carousel__slide10" tabindex="0" class="carousel__slide">
                        <div class="carousel__snapper">
                            <div class="parcours-all">
                                <div class="parcours-gauche">
                                    <div class="parcours-photo">
                                        <img src="source/Chemin6.png" classe="photo">
                                    </div>
                                    <div class="parcours-name">
                                        Parcours Lancelot
                                    </div>
                                </div>

                                <div class="parcours-droit">
                                    <div class="parcours-title">
                                        POUR LES PLUS VAILLANT
                                    </div>
                                    <div class="parcours-text">
                                        <p>Lancelot est un des principal chevalier de la table ronde mais surtout l'assassin du Roi Arthur !</p>

                                        <p>Le parcours que vous devrez traverser ne va ??tre cl??ment avec vous...</p>
                                    </div>
                                    <div class="parcours-info">
                                        <div class="parcours-info-rapide rapide1">
                                            <div class="parcours-picto">
                                                <img src="source/icon_time.svg" alt="icone dur??e" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Dur??e :</strong> 10min
                                            </div>
                                        </div>
                                        <div class="parcours-info-rapide rapide2">
                                            <div class="parcours-picto">
                                                <img src="source/icon_niveau3.png" alt="icone niveau" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Niveau :</strong> Expert
                                            </div>
                                        </div>
                                        <div class="parcours-info-rapide rapide3">
                                            <div class="parcours-picto">
                                                <img src="source/icon_taille.png" alt="icone taille" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Taille :</strong> > 1m30
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#carousel__slide9" class="carousel__prev">Go to previous slide</a>
                        <a href="#carousel__slide11" class="carousel__next">Go to next slide</a>
                    </li>
                    <li id="carousel__slide11" tabindex="0" class="carousel__slide">
                        <div class="carousel__snapper">
                            <div class="parcours-all">
                                <div class="parcours-gauche">
                                    <div class="parcours-photo">
                                        <img src="source/Chemin10.png" classe="photo">
                                    </div>
                                    <div class="parcours-name">
                                        Parcours Perceval
                                    </div>
                                </div>

                                <div class="parcours-droit">
                                    <div class="parcours-title">
                                        POUR LES PLUS VAILLANT
                                    </div>
                                    <div class="parcours-text">
                                        <p>Chevalier de la table ronde courageux et d'??me noble, Perceval est aussi tr??s na??f et distrait.</p>

                                        <p>En esp??rant que sa na??vet?? n'est pas influenc?? sur la difficult?? du parcours...</p>
                                    </div>
                                    <div class="parcours-info">
                                        <div class="parcours-info-rapide rapide1">
                                            <div class="parcours-picto">
                                                <img src="source/icon_time.svg" alt="icone dur??e" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Dur??e :</strong> 10min
                                            </div>
                                        </div>
                                        <div class="parcours-info-rapide rapide2">
                                            <div class="parcours-picto">
                                                <img src="source/icon_niveau3.png" alt="icone niveau" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Niveau :</strong> Expert
                                            </div>
                                        </div>
                                        <div class="parcours-info-rapide rapide3">
                                            <div class="parcours-picto">
                                                <img src="source/icon_taille.png" alt="icone taille" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Taille :</strong> > 1m30
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#carousel__slide10" class="carousel__prev">Go to previous slide</a>
                        <a href="#carousel__slide12" class="carousel__next">Go to next slide</a>
                    </li>
                    <li id="carousel__slide12" tabindex="0" class="carousel__slide">
                        <div class="carousel__snapper">
                            <div class="parcours-all">
                                <div class="parcours-gauche">
                                    <div class="parcours-photo">
                                        <img src="source/Chemin8.png" classe="photo">
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
                                        <p>Vous aimez vous d??penser dans votre qu??te jusqu'?? l'??puisement ? Venez vous mettre ?? l'??preuve sur le parcours du Roi Arthur !</p>

                                        <p>Ce parcours vous offrira des grandes ??preuves physiques avec des obstacles compliqu??s pour le plaisir des plus sportifs !</p>
                                    </div>
                                    <div class="parcours-info">
                                        <div class="parcours-info-rapide rapide1">
                                            <div class="parcours-picto">
                                                <img src="source/icon_time.svg" alt="icone dur??e" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Dur??e :</strong> 15min
                                            </div>
                                        </div>
                                        <div class="parcours-info-rapide rapide2">
                                            <div class="parcours-picto">
                                                <img src="source/icon_niveau3.png" alt="icone niveau" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Niveau :</strong> Expert
                                            </div>
                                        </div>
                                        <div class="parcours-info-rapide rapide3">
                                            <div class="parcours-picto">
                                                <img src="source/icon_taille.png" alt="icone taille" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Taille :</strong> > 1m40
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#carousel__slide11" class="carousel__prev">Go to previous slide</a>
                        <a href="#carousel__slide13" class="carousel__next">Go to next slide</a>
                    </li>
                    <li id="carousel__slide13" tabindex="0" class="carousel__slide">
                        <div class="carousel__snapper">
                            <div class="parcours-all">
                                <div class="parcours-gauche">
                                    <div class="parcours-photo">
                                        <img src="source/Tirolienne2.png" classe="photo">
                                    </div>
                                    <div class="parcours-name">
                                        Le Saint Graal
                                    </div>
                                </div>

                                <div class="parcours-droit">
                                    <div class="parcours-title">
                                        PARCOURS DE FIN
                                    </div>
                                    <div class="parcours-text">
                                        <p>Vous avez finalement vaincu avec brio les diff??rents obstacles de votre qu??te !</p>

                                        <p>Ce parcours vous transportera jusqu'?? l'Accueil en survolant le parc entre les hauteurs des arbres.</p>
                                    </div>
                                    <div class="parcours-info">
                                        <div class="parcours-info-rapide rapide1">
                                            <div class="parcours-picto">
                                                <img src="source/icon_time.svg" alt="icone dur??e" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Dur??e :</strong> 10min
                                            </div>
                                        </div>
                                        <div class="parcours-info-rapide rapide2">
                                            <div class="parcours-picto">
                                                <img src="source/icon_niveau1.png" alt="icone niveau" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Niveau :</strong> Facile
                                            </div>
                                        </div>
                                        <div class="parcours-info-rapide rapide3">
                                            <div class="parcours-picto">
                                                <img src="source/icon_taille.png" alt="icone taille" class="icon">
                                            </div>
                                            <div class="parcours-picto-title">
                                                <strong>Taille :</strong> > 1m20
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#carousel__slide12" class="carousel__prev">Go to previous slide</a>
                        <a href="#carousel__slide1" class="carousel__next">Go to first slide</a>
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
    </main>
    <?php 
        include('footer.php')
    ?>
</body>
</html>