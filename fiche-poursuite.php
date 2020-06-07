<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="fiche-poursuite.css">
    <link rel="stylesheet" href="menu.css">
    <script src="script.js"></script>
    <title>MissionDev</title>
    <link href="https://fonts.googleapis.com/css?family=Manrope:300,400,600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/ico" href="img/favicon.ico" />
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

    <?php

$db = new PDO('mysql:host=localhost;dbname=projettut', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

        ?>

    <div class="container">
    <?php

if(isset($_GET["id"])){  $sql = "SELECT * FROM formation WHERE id=:id;";
$req = $db -> prepare($sql); 
$req -> execute(array(":id" => $_GET["id"]));
$a = $req->fetch();  $req = null;
echo '<header><h1>'.$a['nom_complet'].'</h1> 
<p> <div class="localisation"> <img src="img/icone-localisation.png" alt="localisation" 
width="30px" height="30px"> '.$a['nom_etablissement'].'</p> 


</header> 
<main>
<div class="Savoir"><h4><span> Ce que tu dois savoir </span></h4> 
        <p>C\'est que cette formation amène les étudiants vers un diplome de type <span>'.$a['diplome'].'</span>. Sache que cette formation a pour principal débouché de devenir <span>'.$a['debouche_1'].'</span>. Tu peux toujours aller consulter la page de cette université directement par le <span> lien </span> plus bas si tu souhaites obtenir des <span>informations</span> supplémentaires</p>
    </div>

     <div class="Matières"><h4><span> Les Matières enseignées <span></h4> 
        <ul>
            <li><span>'.$a['matiere_1'].'</span></li>
            <li>'.$a['matiere_2'].'</li>
            <li><span>'.$a['matiere_3'].'</span></li>
            <li>'.$a['matiere_4'].'</li>
            <li><span>'.$a['matiere_5'].'</span></li>
        </ul>
    </div>

    <div class="Débouchés"><h4><span> Les Débouchés </span></h4> 
        <ul>
            <li><span>'.$a['debouche_1'].'</span></li>
            <li>'.$a['debouche_2'].'</li>
            <li><span>'.$a['debouche_3'].'</span></li>
        </ul> 
    </div>

    <div class="Informations"><h4><span> Les Informations essentielles </span></h4>
        <p class="site">lien vers le site de '.$a['nom_etablissement'].' : <a href="'.$a['lien_site'].'" target=”_blank”>Ici</a></div></p>
     </div>

    
 
</main>';

         


    
 } ?>
    </div>

</body>
</html>