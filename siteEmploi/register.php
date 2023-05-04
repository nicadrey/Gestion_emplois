<?php
     $serveur = "localhost";
	 $dbname = "emploiv";
	 $user = "root";
	 $pass = "";
  
   
    
    try{
        //On se connecte à la BDD
		$dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
		$name = $_POST["nom"];
		$email = $_POST["email"];
		$motPasse = $_POST["motPasse"];

        //On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO candidat(nom, email, motPasse)
            VALUES(:nom, :email, :motPasse)");
        $sth->bindParam(':nom',$name);
        $sth->bindParam(':email',$email);
        $sth->bindParam(':motPasse',$motPasse);
     
        $sth->execute();
        
        //On renvoie l'utilisateur vers la page de remerciement
		header('Location: confirmation.php');
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>