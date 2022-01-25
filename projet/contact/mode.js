let btn = document.getElementById('couleur');
let header = document.querySelector('header');
let h1 = document.querySelector('h1');
let main = document.querySelector('main');

let change = false;





btn.addEventListener('click', () => {
    if (change == true) {
        header.style.backgroundColor ="#303030";
        main.style.backgroundColor ="white";
        h1.style.color ="white";
        main.style.color ="black";
        change = false;
        
     } else {

        header.style.backgroundColor ="white";
        main.style.backgroundColor ="#303030";
        h1.style.color ="black";
        main.style.color ="white";
        change = true;
     }
    
})