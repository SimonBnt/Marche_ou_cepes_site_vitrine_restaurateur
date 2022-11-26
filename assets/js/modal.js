// --- script qui permet de récuperer toutes les modales de la page (voir html) et les manipuler/gerer les fermetures --- //

window.onload = () => {

    // on recupere tout les boutons d'ouveture de modales //

    const modalButtons = document.querySelectorAll("[data-toggle=modal]")
    
    for (let button of modalButtons){
        button.addEventListener("click", function(e) { // (e) = évenement et fonction à l'ancienne pour pouvoir utiliser .this //
            
            // on empeche la navigation
            e.preventDefault()
            // on récupere le data-target
            let target = this.dataset.target
            // on récupere la bonne modale
            let modal = document.querySelector(target)
            // on affiche la modale
            modal.classList.add("show")
            // on récupere les boutons de fermeture
            const modalClose = document.querySelectorAll("[data-dismiss=dialog]")
        
            for(let close of modalClose) {
                close.addEventListener("click", () =>{ // fonction fléché car pas besoin de .this //
                    modal.classList.remove("show")
                })
            }

            // on gère la fermeture lors du clic sur la zone grise
            modal.addEventListener("click", function(){
                this.classList.remove("show")
            })
            //on évite la propagation du clic d'un enfant à son parent
            modal.children[0].addEventListener("click", function(e){
                e.stopPropagation()
            })
        }) 
    }
}