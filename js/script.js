$(function() {

 $('#contact-form').submit(function(e){ /*Lorsque SUBMIt #contact-form alors effectue la fonction*/ 
     e.preventDefault(); /*Permet de ne pas passer par ACTION dans html*/
     $('.comments').empty(); /*Vide tout les commentaires et repart à 0 lors de chaque SUBMIT*/
     var postdata = $('#contact-form').serialize(); /*Va chercher toutes infos dans # et les mettres dans var postdata*/
    
     $.ajax({
         type: 'POST',
         url: 'php/contact.php',/*Vers quel url postdata va envoyer fichier traité*/ 
         data: postdata, /*envoie var definie précédament*/ 
         dataType: 'json',
         success: function (result) {   

            if (result.IsSuccess)/*Est-ce que le resultat obtenu dans PHP au champ IsSuccess est true ? (absence d'erreurs)*/
            {
                $("#contact-form").append("<p class='thank-you'>Votre message à bien été envoyé ! :)</p>"); /* Si oui, envoyer message remerciement*/
                $("#contact-form")[0].reset();/* Videra les champs une fois envoyé*/
            }
            else {
                $("#firstname + .comments").html(result.firstNameError);/* + selectionne l'élément aprés firstname avec class comments. Si pas success alors je suis ...Error*/
                $("#lastname + .comments").html(result.lastNameError);
                $("#email + .comments").html(result.emailError);
                $("#phone + .comments").html(result.phoneError);
                $("#message + .comments").html(result.messageError);
            }   
         }
     });
 })
})