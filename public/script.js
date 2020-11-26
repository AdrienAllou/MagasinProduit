let toutLesBoutton = document.getElementsByClassName("js-button");
let toutesLesCommande = document.getElementsByClassName("js-commande");

for (let i = 0; i < toutesLesCommande.length; i++){
    toutLesBoutton[i].addEventListener("click", () => {
        if(getComputedStyle(toutesLesCommande[i]).display !== "none"){
            toutesLesCommande[i].style.display = "none";
        } else {
            toutesLesCommande[i].style.display = "block";
        }
    });
}