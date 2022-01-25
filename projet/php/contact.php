<?php 
$array = array("firstname"=>"", "lastname"=>"", "email"=>"", "phone"=>"", "message"=>"", /*Correspond au premier passage sur la page. Les vars ne sont pas innitialisées donc string vide ("") */
"firstNameError"=>"", "lastNameError"=>"", "emailError"=>"", "phoneError"=>"", "messageError"=>"", 
"IsSuccess"=> false);

$emailTo = "damien.miremont@gmail.com";


if ($_SERVER ["REQUEST_METHOD"] =="POST") { /* Une fois que USER à soumis ces données, on les innitialises à la valeur reçus. On est == a POST car nous sommes 2 passages donc informations sont sur serveur */

$array["firstname"] = verifyInput ($_POST ["firstname"]); /* Récupére info dans superglobale POST. ["Firstname"] = au nom du name dans le form*/ 
$array["lastname"]= verifyInput ($_POST ["lastname"]);
$array["email"] = verifyInput ($_POST ["email"]);
$array["phone"] = verifyInput ($_POST["phone"]);
$array["message"] = verifyInput ($_POST ["message"]); /*Les informtations reçu par le formulaire, passe d'abord par la function avant d'être exploitées*/ 
$array["IsSuccess"] = true;
$emailText = "";


if (empty($array["firstname"])) { /*Je regarde si la var FirstName est vide */

    $array["firstNameError"] = "Quel est votre prénom ?"; /* Si la var est vide, afficher ce message*/ 
    $array["IsSuccess"] = false; /* Devient faux, quant il y a une erreur (firstnameError,...)*/ 

}
else { /* Si firstname valide alors un email pourra être envoyé (firstname + contenu de la var*/
    $emailText .= "firstname: {$array["firstname"]}\n";
}
if (empty($array["lastname"])) { 

    $array["lastNameError"] = "Quel est votre nom?"; 
    $array["IsSuccess"] = false;

}
else {
    $emailText .= "lastname: {$array["lastname"]}\n";
}
if (!IsEmail ($array["email"])) {

    $array["emailError"] = "Quel est votre email ?";
    $array["IsSuccess"] = false; 

}
else {
    $emailText .= "email: {$array["email"]}\n";
}
if (!IsPhone($array["phone"])) {
    $array["phoneError"] = "Votre numéro est invalide";
    $array["IsSuccess"] = false;
}
else {
    $emailText .= "Phone: {$array["phone"]}\n";
}
if (empty($array["message"])) { 

    $array["messageError"] = "Hey, laisse moi un message !";
    $array["IsSuccess"] = false;

}
else {
    $emailText .= "message: {$array["message"]}\n";
}
if ($array["IsSuccess"]) {
    $headers = "From: {$array["firstname"]} {$array["lastname"]} <{$array["email"]}>\r\nReply-To: {$array["email"]}"; /* Construction header de l'email */
    mail ($emailTo, "Un message de votre site", $emailText, $headers); /*Si aucune erreur envoi email avec fonction PHP (email destination, sujet email, contenu email, entête email)*/
    $firstName = $lastName = $email = $phone = $message = ""; /* Remet les champs à 0, une fois l'email envoyé */ 
}
echo json_encode($array);
}


function verifyInput ($var) {
    $var = trim($var); /* Enléve tout ce qui est espace, saut de ligne...*/
    $var = stripcslashes($var); /* Enléve tout les "/" */
    $var = htmlspecialchars ($var); /*Protége des attaque XSS */
    return $var;
}

function IsEmail ($var) {
    return filter_var ($var, FILTER_VALIDATE_EMAIL); /* La function va comparer les $var avec un filtre de validation email. Nous renvoie du Bouléen*/ 
}

function IsPhone ($var) {

    return preg_match ("/^[0-9 ]*$/", $var); /* vérifie que c'est un numéro grace à une expression réguliére comparrer à $var. Nous renvoie du Bouléen*/
}

?>