<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="fiche-poursuite.css">
    <title>MissionDev</title>
    <link href="https://fonts.googleapis.com/css?family=Manrope:300,400,600&display=swap" rel="stylesheet">
</head>

<body>

    <?php

$db = new PDO('mysql:host=localhost;dbname=projettut', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    $formation = $db->query('SELECT * FROM formation');
        ?>

    <div class="container">
    <?php
       $a = $formation->fetch();
         echo '<header><h1>'.$a['nom_etablissement'].'</h1> <p>'.$a['nom_complet'].'</p>  <div class="localisation"> <p><img src="img/icone-localisation.png" alt="localisation" width="30px" height="30px"></p>
    </div></header> 
    <main>
    <div class="Savoir"><h4><span> Ce que tu dois savoir </span></h4> 
            <p>Ce que tu as à <span> savoir </span>, est que cette formation ammène les étudiants un diplome de <span>'.$a['diplome'].'</span>. tu dois donc être bien sûr que tu veux faire tes études pour obtenir ce diplôme. Sachant que cette formation a pour principale débouché de devenir <span>'.$a['debouche_1'].'</span>. Tu peux toujours aller consulter la page de cette université directement par le <span> lien </span> plus bas si tu souhaites obtenir des informations supplémentaires</p>
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
            <p class="texte">'.$a['diplome'].'</p>
            <p class="site">lien vers le site de '.$a['nom_etablissement'].' : <div class="lien-bleu"> '.$a['lien_site'].' </div></a></p>
         </div>

        
     
    </main>';


    
     ?>
    </div>

</body>
</html>