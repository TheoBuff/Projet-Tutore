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
            <h1>Qui sommes nous?</h1>
            <p> Agence dédiée à la promotion de l'ensemble des poursuites des études spécialisées dans le développement
                accessible après un DUT MMi. <span> MissionDev </span> est laboriosam quis omnis odio fugit, repellendus
                adipisci iure quibusdam. <span> Paul </span> unt commodi repudiandae, laboriosam quis omnis odio fugit,
                quaerat dolorem reprehenderit dolores alias.<span> Michelle </span> unt commodi repudiandae, laboriosam
                quis omnis odio fugit, quaerat dolorem reprehenderit dolores alias. <span>Théo</span> unt commodi
                repudiandae, laboriosam quis omnis odio fugit, quaerat dolorem reprehenderit dolores alias.
                <span>Léonard</span> unt commodi repudiandae, laboriosam quis omnis odio fugit, quaerat dolorem
                reprehenderit dolores alias. </p>
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
                <p>Merci pour ton message<?php echo htmlspecialchars($_POST['prenom']); ?>!<br>
            Tu peux découvrir nos CVs interactifs ci-dessous</p>
            <?php endif; ?>

        </div>

    </header>

    <div class="cvs">
        <div>
        <img src="img/paul.png" alt="">
        <h3>Paul - Chef de projet</h3>
        <p>franchement j’adore coder c’est une passion j’adore la France, les baguettes, le fromage, et Macron </p>
        <a href="#">Venez découvrir mon CV ici</a>
        </div>

        <div class="right">
        <img src="img/michelle.png" alt="">
        <h3>Michelle - Développeuse</h3>
        <p>J'aime coder, penser, resoudre des problèmes et avoir des expériences de vie!</p>
        <a href="#">Venez découvrir mon CV ici</a>
        <a href="#">Venez découvrir mon CV ici</a>
        </div>

        <div>
        <img src="img/theo.png" alt="">
        <h3>Théo - Développeur</h3>
        <p>franchement j’adore coder c’est une passion j’adore la France, les baguettes, le fromage, et Macron </p>
        <a href="#">Venez découvrir mon CV ici</a>
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


<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></body>

</html>