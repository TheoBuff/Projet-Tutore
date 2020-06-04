<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mission: Dev</title>
    <link rel="stylesheet" href="listes.css">
    <link rel="stylesheet" href="menu.css">
    <link href="https://fonts.googleapis.com/css?family=Manrope:300,400,600&display=swap" rel="stylesheet">
    <script src="script.js"></script>
    <script src="jquery-3.4.1.min.js"></script>
</head>

<body>
    <div id="myDIV">
        <nav class="menun">
            <a onclick="myFunction()" href="#" class="popupi"><img src="img/menu/retour.png" alt="Retourner"></a>
            <a class="logocontainer" href="accueil.html"> <img class="logo" src="img/LogoBW.png"></a>
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
        <a class="logocontainer" href="accueil.html"> <img class="logo" src="img/LogoBW.png"></a>
        <div class="popupi"><img src="" alt=""></div>
    </nav>
    <header><h1>Écoles spécialisées</h1>
    <p>Retrouvez ici les diplômes proposés par les écoles spécialisées</p></header>
           <!-- <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <label for="vehicle1">Licences</label>
        <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
        <label for="vehicle2">Écoles</label>
        <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
        <label for="vehicle2"> I have a car</label> -->
        <!-- <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
        <label for="vehicle3"> I have a boat</label>
        <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
        <label for="vehicle2"> I have a car</label>
        <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
        <label for="vehicle2"> I have a car</label> -->

        <form method="GET">
    <fieldset>
        <input type="search" name="q" placeholder="Rechercher…">
        <?php
    $db = new PDO('mysql:host=localhost;dbname=projettut', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    $formation = $db->query('SELECT CONCAT(nom_complet," ",nom_etablissement) concatenation FROM formation ORDER BY id');

    if(isset($_GET['q'])) {
        $q = htmlspecialchars($_GET{'q'});
        $formation = $db->query('SELECT CONCAT(nom_complet, " ", nom_etablissement) concatenation, diplome FROM formation  WHERE nom_complet  OR nom_etablissement LIKE "%'.$q.'%" AND diplome = "Bachelor" ORDER BY concatenation ASC' );
    }





        ?>

    </fieldset>
</form>
<?php  if($formation->rowcount() > 0) { ?>
    <?php while ($a = $formation->fetch()) {?>
        <?= $a['concatenation']?><br>
    <?php } ?>
    <?php } else { ?>
        Aucun résultat pour: <?= $q ?> ...
    <?php } ?>

    <div class="container">
        <a class="box" href="#"><h3>Nom-Diplome</h3><h3>Nom-Diplome-Long</h3><p>Type-Diplome</p><p><img src="img/icone-localisation-box.png" alt="">Nom-Ecole - Commune (99)</p><p><span class="initiale">Initiale</span><span class="alternance">Alternance</span><span class="interview">Interview</span></p></a>
        <a class="box" href="#"><h3>Nom-Diplome</h3><h3>Nom-Diplome-Long</h3><p>Type-Diplome</p><p><img src="img/icone-localisation-box.png" alt="">Nom-Ecole - Commune (99)</p><p><span class="initiale">Initiale</span><span class="alternance">Alternance</span><span class="interview">Interview</span></p></a>
        <a class="box" href="#"><h3>Nom-Diplome</h3><h3>Nom-Diplome-Long</h3><p>Type-Diplome</p><p><img src="img/icone-localisation-box.png" alt="">Nom-Ecole - Commune (99)</p><p><span class="initiale">Initiale</span><span class="alternance">Alternance</span><span class="interview">Interview</span></p></a>
        <a class="box" href="#"><h3>Nom-Diplome</h3><h3>Nom-Diplome-Long</h3><p>Type-Diplome</p><p><img src="img/icone-localisation-box.png" alt="">Nom-Ecole - Commune (99)</p><p><span class="initiale">Initiale</span><span class="alternance">Alternance</span><span class="interview">Interview</span></p></a>
        <a class="box" href="#"><h3>Nom-Diplome</h3><h3>Nom-Diplome-Long</h3><p>Type-Diplome</p><p><img src="img/icone-localisation-box.png" alt="">Nom-Ecole - Commune (99)</p><p><span class="initiale">Initiale</span><span class="alternance">Alternance</span><span class="interview">Interview</span></p></a>
        <a class="box" href="#"><h3>Nom-Diplome</h3><h3>Nom-Diplome-Long</h3><p>Type-Diplome</p><p><img src="img/icone-localisation-box.png" alt="">Nom-Ecole - Commune (99)</p><p><span class="initiale">Initiale</span><span class="alternance">Alternance</span><span class="interview">Interview</span></p></a>
        <a class="box" href="#"><h3>Nom-Diplome</h3><h3>Nom-Diplome-Long</h3><p>Type-Diplome</p><p><img src="img/icone-localisation-box.png" alt="">Nom-Ecole - Commune (99)</p><p><span class="initiale">Initiale</span><span class="alternance">Alternance</span><span class="interview">Interview</span></p></a>
    </div>

</body>

</html>