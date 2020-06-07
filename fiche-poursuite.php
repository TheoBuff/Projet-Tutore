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
        <?php  if($formation->rowCount() > 0) { 
        while ($a = $formation->fetch()) {
            var_dump($a);
         echo '<header><h1>'.$a['nom_etablissement'].'</h1> <p>'.$a['nom_complet'].'</p>  <div class="localisation"> <p><img src="img/icone-localisation.png" alt="localisation" width="30px" height="30px"></p>
    </div></header> 
    <main>
    <div class"Savoir"><h4> Ce que tu dois savoir </h4> 
            <p>Ce que tu a à savoir, est que cette formation ammène à obtenir un diplome de '.$a['
            diplome'].' donc tu dois bien être sûr que tu veux faire tes études vers ce type de diplome sachant que cette formation mène a devenir la plupart du temps '.$a['debouche_1'].' tu peux toujours aller consulter la page de cette université directement par le lien plus bas si tu souhaites obtenir des informations supplémentaires</p>
        </div>

         <div class="Matières"><h4> Les Matières enseignées </h4> 
            <ul>
                <li>'.$a['matiere_1'].'</li>
                <li>'.$a['matiere_2'].'</li>
                <li>'.$a['matiere_3'].'</li>
                <li>'.$a['matiere_4'].'</li>
                <li>'.$a['matiere_5'].'</li>
            </ul>
        </div>
    
        <div class="Débouchés"><h4> Les Débouchés </h4> 
            <ul>
                <li>'.$a['debouche_1'].'</li>
                <li>'.$a['debouche_2'].'</li>
                <li>'.$a['debouche_3'].'</li>
            </ul> 
        </div>

        <div class="Informations"><h4> Les Informations essentielles </h4>
            <p class="texte">'.$a['diplome'].'</p>
            <p class="site">lien vers le site de '.$a['nom_etablissement'].' : '.$a['lien_site'].'</p>
         </div>

        
     
    </main>';


    
    } ?>
    </div>

</body>
</html>