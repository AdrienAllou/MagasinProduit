/** @type HTMLElement lastCommandeChoisi*/
var lastCommandeChoisi = undefined

/**
 * @param id
 */
function seeCommande(id) {
    if (lastCommandeChoisi !== undefined)
        lastCommandeChoisi.style.display = "none"
    lastCommandeChoisi = document.getElementById(id);
    lastCommandeChoisi.style.display = ""
}