<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" >
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <title>Contact</title>
</head>
<body>
    <?php
    include('navigation.php')
    ?>
    <main style="min-height: 100%">
        <div class="containerDescriptionPage"">
            <h1>Vous n'avez pas trouvé l'information?</h1>
            <h2>A votre écoute pour répondre à vos questions</h2>
            <p class="descriptionPage">Avant de nous écrire, nous vous conseillons de consulter la rubrique Infos-pratiques ainsi que la FAQ. Vos
                questions ont peut-être des réponses qui s'y trouvent déjà. Pour toute demande complémentaire, nous nous tenons
                à votre entière disposition.</p>
            <p>Votre demande sera traitée sous 24 à 48h</p>
        </div>
        <div class="formContainer">
            <form action="">
                <h1 class="formTitle">Contactez-nous</h1>
                <div class="rowInput">
                    <div>
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" id="">
                    </div>
                    <div>
                        <label for="prenom">Prénom</label>
                        <input type="text" name="prenom" id="">
                    </div>
                </div>
                <div class="rowInput">
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="">
                    </div>
                    <div>
                        <label for="tel">Téléphone</label>
                        <input type="phone" name="tel" id="">
                    </div>
                </div>
                <div>
                    <label for="sujet">Sujet</label>
                    <input type="text" name="sujet" id="">
                </div>
                <div>
                    <label for="message">Message</label>
                    <textarea name="message" id=""></textarea>
                </div>
                <div class="rowInput" id="bottomForm">
                    <div>
                        <a href=""><img src="source/logo_gmail.png" alt="Logo de gmail" width="32"></a>
                        <a href=""><img src="source/logo_instagram.png" alt="Logo d'instagram" width="32"></a>
                        <a href=""><img src="source/logo_facebook.png" alt="Logo de facebook" width="32"></a>
                    </div>
                    <button type="submit">Envoyer</button>
                </div>
            </form>
        </div>
    </main>
    <?php
    include('footer.php')
    ?>
</body>
</html>