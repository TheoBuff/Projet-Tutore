<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MissionDev</title>
    <link rel="stylesheet" href="apropos.css">
    <link rel="stylesheet" href="menu.css">
    <link href="https://fonts.googleapis.com/css?family=Manrope:300,400,600&display=swap" rel="stylesheet">
    <script src="script.js"></script>
    <script src="jquery-3.4.1.min.js"></script>
</head>

<body>
    <div id="myDIV">
        <nav class="menun">
            <a onclick="myFunction()" href="#" class="popupi"><img src="img/menu/retour.png" alt="Retourner"></a>
            <a class="logocontainer" href="index.html"> <img class="logo" src="img/LogoBW.png"></a>
            <div class="popupi"><img src="" alt=""></div>
        </nav>
        <div>
            <ul class="line-ul">
                <li class="box-li"><a class="nodec" href="conseils.html"><img class="miniature" src="img/menu/lamp.svg" alt="">Conseils</a></li>
                <li class="box-li"><a class="nodec" href="https://www.instagram.com/mission.dev/?hl=fr"><img class="miniature" src="img/menu/instagram.svg" alt="">Instagram</a></li>
                <li class="box-li"><a class="nodec" href="apropos.php"><img class="miniature" src="img/menu/question-mark.svg" alt="">À Propos</a></li>
            </ul>
            <ul class="line-ul">
                <li class="box-li"><a class="nodec" href="universites.php"><img class="miniature" src="img/menu/school.svg" alt="">Universités</a></li>
                <li class="box-li"><a class="nodec" href="ecoles-spe.php"><img class="miniature" src="img/menu/data.svg" alt="">Écoles spécialisées</a></li>
                <li class="box-li"><a class="nodec" href="ecoles-ing.php"><img class="miniature" src="img/menu/university.svg" alt="">École d'ingénieur</a></li>
            </ul>

        </div>
    </div>
    <nav class="mainnav">
        <a class="popupi" href="#myDIV" onclick="myFunction()" ><img src="img/popup.png" alt="Menu"></a>
        <a class="logocontainer" href="index.html"> <img class="logo" src="img/LogoBW.png"></a>
        <div class="popupi"><img src="" alt=""></div>
    </nav>

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
                <p>Merci pour ton message !</p>
            <p>Tu peux découvrir nos CVs interactifs ci-dessous</p>
            <?php endif; ?>

        </div>

    </header>

    <div class="cvs">
        <div class="left">
            <img class="portrait imgleft" src="img/paul.png" alt="">
            <div class="contain-left">
                <h3>Paul - Chef de projet</h3>
                <p>18 ans, passionné par la photographie et la vidéo, je suis le chef de projet de MissionDev. Si vous souhaitez en savoir plus (en vrai je suis intéressant), vous pouvez vous rendre sur mon CV numérique juste ici grâce à ce magnifique bouton ;)</p>
                <a href="https://paulbarbosa.fr">Venez découvrir mon CV ici</a><br>
                <a href="" target="_blank"><img src="img/linkedin.png" alt="Linkedin de Paul" class="socialmedia"></a>
            </div>
        </div>

        <div class="right">
            <img class="portrait imgright" src="img/michelle.png" alt="">
            <div class="contain-right">
                <h3>Michelle - Développeuse</h3>
                <p>J'aime coder, penser, <span>resoudre des problèmes</span>. Je vis motivée pour apprendre grâce ma <span>curiosité</span> & avoir le plus possible d'<span>expériences de vie</span>! :p</p>
                <a href="#">Venez découvrir mon CV ici</a><br>
                <a href="" target="_blank"><img src="img/linkedin.png" alt="Linkedin de Michelle" class="socialmedia"></a>
            </div>
        </div>

        <div class="left">
            <img class="portrait imgleft" src="img/theo.png" alt="">
            <div class="contain-left">
                <h3>Théo - Développeur</h3>
                <p>Passioné de <span>Jeux vidéos</span>, de musique <span>Métal </span>et du la culture <span>Geek</span>, je cherche à faire sans cesse de
                        nouvelles rencontres et discuter, alors si vous vous reconnaisez dans cette description venez me trouver
                        sur les <span>Réseaux</span></p>
                <a href="#">Venez découvrir mon CV ici</a><br>
                <a href="" target="_blank"><img src="img/linkedin.png" alt="Linkedin de Théo" class="socialmedia"></a>
            </div>
        </div>

        <div class="right">
            <img class="portrait imgright" src="img/leonard.png" alt="">
            <div class="contain-right">
                <h3>Léonard - Graphiste</h3>
                <p>J'ai rédigé la charte graphique et codé la mise en page de MissionDev.</p>
                <a href="https://perso-etudiant.u-pem.fr/~lkim1">Venez découvrir mon CV ici</a><br>
                <a href="" target="_blank"><img src="img/linkedin.png" alt="Linkedin de Léonard" class="socialmedia"></a>
            </div>
        </div>

    </div>

    <footer>
        <p>Rejoignez-nous aussi sur<a class="instap" href="https://www.instagram.com/mission.dev/" target="_blank"><img src="img/insta.png" alt="Instagram de MissionDev" class="instagram">Instagram !</a></p>        
    </footer>


</body>

</html>