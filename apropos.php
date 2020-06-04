<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MissionDev</title>
    <link rel="stylesheet" href="apropos.css">
    <link href="https://fonts.googleapis.com/css?family=Manrope:300,400,600&display=swap" rel="stylesheet">
</head>

<body>
    <a href="accueil.html"> <img src="img/LogoBW.png"></a>
    <header>

        <div class="intro">
            <h1>Notre Projet</h1>
            <p>Agence dédiée à la promotion de l'ensemble des poursuites d'études spécialisées dans le développement
                accessible après un DUT MMi. <span> MissionDev </span> est un projet basé sur la volonté d'aider les
                étudiants <span> MMI
                </span>présents et futures dans ce parcours du combattant qu'est la recherche d'études spécialement dans
                le secteur du <span> développement </span>. Nous avons eu pour volonté de proposer la majorité des
                études disponibles pour développeur avec une aide dans la recherche pour que chaque personne puisse
                trouver ce qui lui correspond en évitant les différents pièges. Ce projet n'aurait jamais pu voir le
                jour sans le travail de notre groupe composé de <span> Paul </span>, <span> Michelle </span>, <span>
                    Léonard </span> et <span> Théo </span>. </p>
        </div>

        <div class="contact">
            <h2>Nous contacter</h2>
            <?php if (!isset($_GET['success'])): ?>

            <form action="connect.php" method="POST">
                <!-- <fieldset> -->

                <p>
                    <label for="nom">Nom</label><input type="text" required name="nom">
                </p>

                <p>
                    <label for="prenom">Prénom</label><input type="text" required name="prenom">
                </p>

                <p>
                <label for="email">Email</label><input type="email" required name="email">

                </p>

                <p>
                    <label for="sujet">Sujet</label> <input type="text" name="sujet" placeholder="Donne lui un titre à ton message">
                </p>

                <p><textarea cols="40" rows="5" name="message" placeholder="Tu peux écrire ton message ici !"></textarea></p>
                <!-- </fieldset> -->

                <input type="submit" value="Envoyer" class="bot" name="submit">

            </form>
            <?php else: ?>
                <p>Merci pour ton message ! <?php echo htmlspecialchars($_POST['prenom']); ?> </p>
            <p>Tu peux découvrir nos CVs interactifs ci-dessous</p>
            <?php endif; ?>

        </div>

    </header>

    <div class="cvs">
        <div>
        <img src="img/paul.png" alt="">
        <h3>Paul - Chef de projet</h3>
        <p>18 ans, passionné par la photographie et la vidéo, je suis le chef de projet de MissionDev. Si vous souhaitez en savoir plus (en vrai je suis intéressant), vous pouvez vous rendre sur mon CV numérique juste ici grâce à ce magnifique bouton ;)</p>
        <a href="#">Venez découvrir mon CV ici</a>
        </div>

        <div class="right">
        <img src="img/michelle.png" alt="">
        <h3>Michelle - Développeuse</h3>
        <p>J'aime coder, penser, <span>resoudre des problèmes</span>. Je vis motivée pour apprendre grâce ma <span>curiosité</span> & avoir le plus possible d'<span>expériences de vie</span>! :p</p>
        <a href="#">Venez découvrir mon CV ici</a>
        </div>

        <div>
        <img src="img/theo.png" alt="">
        <h3>Théo - Développeur</h3>
        <p>Passioné de jeux vidéos, de musique métal et du la culture Geek, je cherche à faire sans cesse de
                nouvelles rencontres et discuter, alors si vous vous reconnaisez dans cette description venez me trouver
                sur les réseaux</p>
        <a href="#">Venez découvrir mon CV ici</a>
        </div>

        <div class="right">
        <img src="img/leonard.png" alt="">
        <h3>Léonard - Graphiste</h3>
        <p>franchement j’adore coder c’est une passion j’adore la France, les baguettes, le fromage, et Macron </p>
        <a href="#">Venez découvrir mon CV ici</a>
        </div>
    </div>

    <footer>
        
<!-- <div class="test">
        <img src="img/test.png" alt="Instagram de MissionDev">
</div> -->
        <a href="https://www.instagram.com/mission.dev/" target="_blank"><img src="img/insta.png" alt="Instagram de MissionDev" class="socialmedia"> </a>
        <a href="" target="_blank"><img src="img/twitter.png" alt="Twitter de MissionDev" class="socialmedia"> </a>
        <a href="" target="_blank"><img src="img/linkedin.png" alt="Linkedin de Paul" class="socialmedia"></a>
        <a href="" target="_blank"><img src="img/linkedin.png" alt="Linkedin de Michelle" class="socialmedia"></a>
        <a href="" target="_blank"><img src="img/linkedin.png" alt="Linkedin de Théo" class="socialmedia"></a>
        <a href="" target="_blank"><img src="img/linkedin.png" alt="Linkedin de Léonard" class="socialmedia"></a>
    </footer>


</body>

</html>