<?php



try {
    $bdd = new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8','root', '');
} catch (Exception $e) {
    die('Erreur: '.$e->getMessage());
}

// La première fois que l'utilisateur vient, le formulaire est vide 

$nom = $email = $adresse = $message = "";


//  L'utilisateur à soumis les données 
//la var données va récupére chacune des frappes de l'utilisateur


if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['adresse']) && isset($_POST['message']))
{
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];
    $message = $_POST['message'];

    $requete = $bdd->prepare('INSERT INTO users (nom, email, adresse, message) VALUES (?,?,?,?)');
    $requete->execute(array($nom, $email, $adresse, $message));
}
