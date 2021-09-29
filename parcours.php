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
                <a href=#carousel__slide1>
                    <li>
                        1. Parcours Galaad
                    </li>
                </a> 
                <a href=#carousel__slide2>   
                    <li>
                        2. Parcours Agravain
                    </li>
                </a>
                <a href=#carousel__slide3>  
                    <li>
                        3. Parcours Bohort
                    </li>
                </a>    
                <a href=#carousel__slide4>  
                    <li>
                        4. Parcours Mordred
                    </li>
                </a>
                <a href=#carousel__slide5>  
                    <li>
                        5. Parcours Accolon
                    </li>
                </a>
                <a href=#carousel__slide6>  
                    <li>
                        6. Parcours Geraint 
                    </li>
                </a>
                <a href=#carousel__slide7>  
                    <li>
                        7. Parcours Gauvain
                    </li>
                </a>
                <a href=#carousel__slide8>  
                    <li>
                        8. Parcours Yvain
                    </li>
                </a>
                <a href=#carousel__slide9>  
                    <li>
                        9. Parcours Méléagant
                    </li>
                </a>
                <a href=#carousel__slide10>  
                    <li>
                        10. Parcours Lancelot
                    </li>
                </a>
                <a href=#carousel__slide11>  
                    <li>
                        11. Parcours Perceval
                    </li>
                </a>
                <a href=#carousel__slide12>  
                    <li>
                        12. Parcours Arthur
                    </li>
                </a>
                <a href=#carousel__slide13>  
                    <li>
                        13. Le Saint Graal
                    </li>
                </a>

            </ul>
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
                                    <p>Fils du chevalier Lancelot, Galaad vous mettre au défi sur une épreuve d'équilibre et d'agilité.</p>
                                    
                                    <p>Allons-nous découvrir de futur talent et peut-être de futur chevalier de la Table Rond ?</p>
                                </div>
                                <div class="parcours-info">
                                    <div class="parcours-info-rapide rapide1">
                                        <div class="parcours-picto">
                                            <img src="source/icon_time.svg" alt="icone durée" class="icon">
                                        </div>
                                        <div class="parcours-picto-title">
                                            <strong>Durée :</strong> 10min
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
                                    <p>Agravain, neveu du roi Arthur et chevalier irréprochable, vous défie sur un parcours de surpassement de soi.</p>
                                    
                                    <p>Vous sentez-vous capable de relevez le défi d'Agravain ?</p>
                                </div>
                                <div class="parcours-info">
                                    <div class="parcours-info-rapide rapide1">
                                        <div class="parcours-picto">
                                            <img src="source/icon_time.svg" alt="icone durée" class="icon">
                                        </div>
                                        <div class="parcours-picto-title">
                                            <strong>Durée :</strong> 10min
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
                                    <p>Bohort est l'un des meilleurs chevalier de la table ronde. Courageux et vertueux, il obtient sa gloire dans sa quête du Graal.</p>
                                    
                                    <p>Ce parcours vous mettra sur le chemin du mystère. Parviendrez-vous à découvrir le Graal ?</p>
                                </div>
                                <div class="parcours-info">
                                    <div class="parcours-info-rapide rapide1">
                                        <div class="parcours-picto">
                                            <img src="source/icon_time.svg" alt="icone durée" class="icon">
                                        </div>
                                        <div class="parcours-picto-title">
                                            <strong>Durée :</strong> 10min
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
                                    POUR LES PLUS TÉMÉRAIRE
                                </div>
                                <div class="parcours-text">
                                    <p>Fils illégitime du roi Arthur, la robustesse est un des atouts phares de Mordred.</p>
                                    
                                    <p>Le parcours vous fera passer sur des filets et des obstacles atypiques !</p>
                                </div>
                                <div class="parcours-info">
                                    <div class="parcours-info-rapide rapide1">
                                        <div class="parcours-picto">
                                            <img src="source/icon_time.svg" alt="icone durée" class="icon">
                                        </div>
                                        <div class="parcours-picto-title">
                                            <strong>Durée :</strong> 10min
                                        </div>
                                    </div>
                                    <div class="parcours-info-rapide rapide2">
                                        <div class="parcours-picto">
                                            <img src="source/icon_niveau2.png" alt="icone niveau" class="icon">
                                        </div>
                                        <div class="parcours-picto-title">
                                            <strong>Niveau :</strong> Intermé.
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
                                    POUR LES PLUS TÉMÉRAIRE
                                </div>
                                <div class="parcours-text">
                                    <p>Amant dévoué à la fée Morgane, Accolon était l'ennemi du Roi Arthur. </p>
                                    
                                    <p>Accolon avait souvent la tête dans les nuages... j'espère que vous n'avez pas le vertiges !</p>
                                </div>
                                <div class="parcours-info">
                                    <div class="parcours-info-rapide rapide1">
                                        <div class="parcours-picto">
                                            <img src="source/icon_time.svg" alt="icone durée" class="icon">
                                        </div>
                                        <div class="parcours-picto-title">
                                            <strong>Durée :</strong> 10min
                                        </div>
                                    </div>
                                    <div class="parcours-info-rapide rapide2">
                                        <div class="parcours-picto">
                                            <img src="source/icon_niveau2.png" alt="icone niveau" class="icon">
                                        </div>
                                        <div class="parcours-picto-title">
                                            <strong>Niveau :</strong> Intermé.
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
                                    POUR LES PLUS TÉMÉRAIRE
                                </div>
                                <div class="parcours-text">
                                    <p>Grevaint était un compagnon d'armes du roi Arthur. </p>
                                    
                                    <p>Au fur et à mesure que vous avancerez sur le parcours, et plus les épreuves seront difficiles ! Alors utilisez votre force de façon stratégique !</p>
                                </div>
                                <div class="parcours-info">
                                    <div class="parcours-info-rapide rapide1">
                                        <div class="parcours-picto">
                                            <img src="source/icon_time.svg" alt="icone durée" class="icon">
                                        </div>
                                        <div class="parcours-picto-title">
                                            <strong>Durée :</strong> 10min
                                        </div>
                                    </div>
                                    <div class="parcours-info-rapide rapide2">
                                        <div class="parcours-picto">
                                            <img src="source/icon_niveau2.png" alt="icone niveau" class="icon">
                                        </div>
                                        <div class="parcours-picto-title">
                                            <strong>Niveau :</strong> Intermé.
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
                                    <p>Gauvain est le neveu du roi Arthur et demi-frère de Mordred, mais surtout chevalier de la table ronde. </p>
                                    
                                    <p>Si vous voulez voyager entrer les arbres et avoir une vue élevé du parc, c'est le parcours idéal !</p>
                                </div>
                                <div class="parcours-info">
                                    <div class="parcours-info-rapide rapide1">
                                        <div class="parcours-picto">
                                            <img src="source/icon_time.svg" alt="icone durée" class="icon">
                                        </div>
                                        <div class="parcours-picto-title">
                                            <strong>Durée :</strong> 10min
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
                                    <p>Yvain est un valeureux chevalier qui n'a pas hésite à rejoindre Arthur dans sa quête au Graal.</p>
                                    
                                    <p>Plusieurs obstacles vous demanderont l'utilisation de votre force pour les surpasser.</p>
                                </div>
                                <div class="parcours-info">
                                    <div class="parcours-info-rapide rapide1">
                                        <div class="parcours-picto">
                                            <img src="source/icon_time.svg" alt="icone durée" class="icon">
                                        </div>
                                        <div class="parcours-picto-title">
                                            <strong>Durée :</strong> 15min
                                        </div>
                                    </div>
                                    <div class="parcours-info-rapide rapide2">
                                        <div class="parcours-picto">
                                            <img src="source/icon_niveau2.png" alt="icone niveau" class="icon">
                                        </div>
                                        <div class="parcours-picto-title">
                                            <strong>Niveau :</strong> Intermé.
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
                                    Parcours Méléagant
                                </div>
                            </div>
                        
                            <div class="parcours-droit">
                                <div class="parcours-title">
                                    POUR LES PLUS BRAVE
                                </div>
                                <div class="parcours-text">
                                    <p>Ennemi de Lancelot, Méléagant est un chevalier de la table ronde énigmatique de la légende Arthurienne.</p>
                                    
                                    <p>Pendant le parcours, Méléagant vous lancera une énigme, à vous de jouer !</p>
                                </div>
                                <div class="parcours-info">
                                    <div class="parcours-info-rapide rapide1">
                                        <div class="parcours-picto">
                                            <img src="source/icon_time.svg" alt="icone durée" class="icon">
                                        </div>
                                        <div class="parcours-picto-title">
                                            <strong>Durée :</strong> 15min
                                        </div>
                                    </div>
                                    <div class="parcours-info-rapide rapide2">
                                        <div class="parcours-picto">
                                            <img src="source/icon_niveau2.png" alt="icone niveau" class="icon">
                                        </div>
                                        <div class="parcours-picto-title">
                                            <strong>Niveau :</strong> Intermé.
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
                                    
                                    <p>Le parcours que vous devrez traverser ne va être clément avec vous...</p>
                                </div>
                                <div class="parcours-info">
                                    <div class="parcours-info-rapide rapide1">
                                        <div class="parcours-picto">
                                            <img src="source/icon_time.svg" alt="icone durée" class="icon">
                                        </div>
                                        <div class="parcours-picto-title">
                                            <strong>Durée :</strong> 10min
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
                                    <p>Chevalier de la table ronde courageux et d'âme noble, Perceval est aussi très naïf et distrait.</p>
                                    
                                    <p>En espérant que sa naïveté n'est pas influencé sur la difficulté du parcours...</p>
                                </div>
                                <div class="parcours-info">
                                    <div class="parcours-info-rapide rapide1">
                                        <div class="parcours-picto">
                                            <img src="source/icon_time.svg" alt="icone durée" class="icon">
                                        </div>
                                        <div class="parcours-picto-title">
                                            <strong>Durée :</strong> 10min
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
                                    <p>Vous aimez vous dépenser dans votre quête jusqu'à l'épuisement ? Venez vous mettre à l'épreuve sur le parcours du Roi Arthur !</p>
                                    
                                    <p>Ce parcours vous offrira des grandes épreuves physiques avec des obstacles compliqués pour le plaisir des plus sportifs !</p>
                                </div>
                                <div class="parcours-info">
                                    <div class="parcours-info-rapide rapide1">
                                        <div class="parcours-picto">
                                            <img src="source/icon_time.svg" alt="icone durée" class="icon">
                                        </div>
                                        <div class="parcours-picto-title">
                                            <strong>Durée :</strong> 15min
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
                                    <p>Vous avez finalement vaincu avec brio les différents obstacles de votre quête !</p>
                                    
                                    <p>Ce parcours vous transportera jusqu'à l'Accueil en survolant le parc entre les hauteurs des arbres.</p>
                                </div>
                                <div class="parcours-info">
                                    <div class="parcours-info-rapide rapide1">
                                        <div class="parcours-picto">
                                            <img src="source/icon_time.svg" alt="icone durée" class="icon">
                                        </div>
                                        <div class="parcours-picto-title">
                                            <strong>Durée :</strong> 10min
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

    <?php 
        include('footer.php')
    ?>
</body>
</html>