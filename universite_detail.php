<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Universite_detail</title>
    <link rel="stylesheet" href="fiche-poursuite.css">
</head>
<body>

<?php

$db = new PDO('mysql:host=localhost;dbname=projettut', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    $formation = $db->query('SELECT * FROM formation');

    if(isset($_GET['q'])) {
        $q = htmlspecialchars($_GET{'q'});
        $formation = $db->query('SELECT * FROM formation');
    }
        ?>

        <div class="container">
<?php  if($formation->rowcount() > 0) { ?>
    <?php while ($a = $formation->fetch()) {?>
    <?php echo '
        <a class="box" href="#"><h3>'.$a['nom_complet'].'</h3><p>'.$a['diplome'].'</p><p><img src="img/icone-localisation-box.png" alt="">'.$a['nom_etablissement'].' </p><p><span class="initiale">'.$a['type_enseignement'].'</span></p></a>';

    
    } ?>
    </div>

    
</body>
</html>