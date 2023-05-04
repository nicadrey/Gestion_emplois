<?php

// Connexion à la base de données
try {
	$bdd = new PDO('mysql:host=localhost;dbname=emploiv;charset=utf8', 'root', '');
  } catch (Exception $e) {
	die('Erreur : ' . $e->getMessage());
  }

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Vérifier si un fichier a été soumis
  if (isset($_FILES['cv'])) {
    $cv_nom = $_FILES['cv']['name'];
    $cv_taille = $_FILES['cv']['size'];
    $cv_tmp = $_FILES['cv']['tmp_name'];
    $cv_type = $_FILES['cv']['type'];
    $cv_extension = strrchr($cv_nom, '.');

    // Vérifier si le fichier est un PDF, un DOC ou un DOCX
    if ($cv_extension == '.pdf' || $cv_extension == '.doc' || $cv_extension == '.docx') {

      // Déplacer le fichier vers le dossier "CV" sur le serveur
      $dossier_cible = 'CV/';
      $cv_cible = $dossier_cible . $cv_nom;
      move_uploaded_file($cv_tmp, $cv_cible);

      // Récupérer les informations du candidat depuis le formulaire
   
	  $poste = $_POST['poste'];
	  $cv = $_POST['cv'];
	  $salaire = $_POST['salaire'];
	  $residence = $_POST['residence'];
	  $typeTravail = $_POST['typeTravail'];
	  $skills = $_POST['skills'];
	  $description = $_POST['description'];
	 
	  
	  
	  
	

	    // Insérer les informations du candidat dans la table "candidat"
		$requete = $bdd->prepare('INSERT INTO candidat ( poste,regionCandidat,  cvCandidat) VALUES (:nom, :email, :region, :cv)');
		$requete->execute(array(
		  'nom' => $nom,
		  'email' => $email,
		  'region' => $region,
		  'cv' => $cv_nom
		));


  
		// Rediriger l'utilisateur vers une page de confirmation
		header('Location: confirmation.php');
		exit();
	  } else {
		echo 'Erreur : le format de fichier n\'est pas valide.';
	  }
	} else {
	  echo 'Erreur : aucun fichier n\'a été soumis.';
	}
  }


  ?>