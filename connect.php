<?php
//Database connection
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Execute script only for POST method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new PDO('mysql:host=localhost;dbname=projettut', 'root', 'root');
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
