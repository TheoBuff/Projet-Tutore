<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
</head>
<body>
  
</body>
</html>
<?php
//Database connection
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Execute script only for POST method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new PDO('mysql:host=localhost;dbname=projettut', 'root', ''); // j'ai trouvé pour que ça marche sur ma base de données il faut que j'enlève le root en tant que mdp dans la ligne à gauche si le formulaire ne fonctionne par pour vous avec ça c'est qu'il faut que vous rajoutiez root au lieu de l'espace vide 
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

  // Our SQL query, values will be replaced later
  $sql = "INSERT INTO formulaire (prenom, nom, email, sujet, message) VALUES (:prenom, :nom, :email, :sujet, :message)";

  // Mapped attributes based on sql query values and form input values
  $attributes = array(
    'prenom' => $_POST['prenom'],
    'nom' => $_POST['nom'],
    'email' => $_POST['email'],
    'sujet' => $_POST['sujet'],
    'message' => $_POST['message']
  );

  // Prepare the query, avoid injections
  $stmt = $db->prepare($sql);

  // Execute the query and interpolate proper values
  $stmt->execute($attributes);
//   print_r($stmt->errorInfo());
  // Closing the connexion
  $db = null;

  // Redirect to index with a success message
header('Location: apropos.php?success=true');
} else {
  http_response_code(500);
}
?>
