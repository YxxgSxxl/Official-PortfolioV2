// Initialisation sous forme de tableau
let touches = [...document.querySelectorAll(".bouton")];

// initialisation des numéros des touches du clavier
let keyCodeListe = touches.map(touche => touche.dataset.key);

// Récupération valeur dans l'écran
let ecran = document.querySelector(".ecran");

// Récupération des touches du clavier
document.addEventListener('keydown', (e) => {
    let valeur = e.keyCode.toString();
    calculer(valeur);
});

// Récupération des clics sur les éléments
document.addEventListener('click', (e) => {
    let valeur = e.target.dataset.key;
    calculer(valeur);
})

// Fonction de calcul
let calculer = (valeur) => {
    if (keyCodeListe.includes(valeur)) {
        switch (valeur) {
            case '8':
                ecran.textContent = "";
                break;
            case '13':
                let calcul = eval(ecran.textContent);
                ecran.textContent = calcul;
                break;
            default:
                let indexKeycode = keyCodeListe.indexOf(valeur);
                let touche = touches[indexKeycode];
                ecran.textContent += touche.innerHTML;
        }
    }
}

window.addEventListener('error', (e) => {
    ecran.textContent = "ERROR";
})