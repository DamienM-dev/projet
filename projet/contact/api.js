document.getElementById('adresse').addEventListener('input', function () {

if(this.value.length == 5)
{
    fetch('https://api-adresse.data.gouv.fr/search/?q=' + this.value +'&limit=6&autocomplete=1').then(response => response.json().then(data => 
    {
        let affichage = '<ul>';
        for (let ville of data.features)
        {
            affichage += `<li>${ville.properties.label}</li>`;
            
        }
        affichage += '</ul>';
        document.querySelector("#villes").innerHTML = affichage;
    }))
}

})
// 1) connecter Api
// 2) Récupérer donne frapper dans l'input
// 3) les comparer avec l'API
// 4)les afficher
// 5)les stocker dans l'input

