<?php
session_start();
if(isset($_POST['nom']) && isset($_POST['motPasse']))
{
 // connexion à la base de données
 $db_username = 'root';
 $db_password = '';
 $db_name = 'emploiv';
 $db_host = 'localhost';
 $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
 or die('could not connect to database');
 
 // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
 // pour éliminer toute attaque de type injection SQL et XSS
 $identifiant = mysqli_real_escape_string($db,htmlspecialchars($_POST['nom'])); 
 $motPasse = mysqli_real_escape_string($db,htmlspecialchars($_POST['motPasse']));

 
 if($identifiant !== "" && $motPasse !== "")
 {
 $requete = "SELECT count(*) FROM candidat where 
 nom = '".$identifiant."' and motPasse = '".$motPasse."' ";
 $exec_requete = mysqli_query($db,$requete);
 $reponse = mysqli_fetch_array($exec_requete);
 $count = $reponse['count(*)'];
 if($count!=0) // nom d'utilisateur et mot de passe correctes
 {
 $_SESSION['nom'] = $identifiant;
 header('Location:espaceCandi.php');
 }
 else
 {
    // $matricule = verify ($POST[''])
 header('Location: login1.php?erreur=1'); // utilisateur ou mot de passe incorrect
 }
 }
 else
 {
 header('Location: login1.php?erreur=2'); // utilisateur ou mot de passe vide
 }
}
else
{
 header('Location: login1.php');
}
mysqli_close($db); // fermer la connexion
?>