// ---- Form ----- //

const configEditionForm = document.getElementById("configEditionForm")
const disheCreationForm = document.getElementById("disheCreationForm")

// ---- data ----- //

        // ---- dishe data ----- //

const disheTitle = document.getElementById("title")
const disheDescription = document.getElementById("description")
const disheCategory = document.getElementById("setCategory")

        // ---- config data ----- //

const configBio = document.getElementById("bio")
const configAddress = document.getElementById("address")

// ---- succes message ----- //

const succesDisheMessage = document.getElementById("succesMessageDishe")
const configEditionMessage = document.getElementById("succesMessageConfig")

// disheCreationForm.addEventListener("submit", (e) => {
//     e.preventDefault()
    
//     if(isset($_POST) && !empty($_POST) && isset($_POST["title"]) && !empty($_POST["title"]) && isset($_POST["description"]) && !empty($_POST["description"])  && isset($_POST["setCategory"]) && !empty($_POST["setCategory"])) {
//         succesDisheMessage.style.display = "block"
//         succesDisheMessage.innerHTML = "Votre formulaire a bien été envoyé."
//         setTimeout(function(){succesDisheMessage.style.display = "none"}, 3000)
//         document.forms["form"].submit()
//         return true
//     } else {
//         succesDisheMessage.style.display = "block"
//         succesDisheMessage.innerHTML = "Remplissez correctement le formulaire avant d'envoyer"
//         setTimeout(function(){succesDisheMessage.style.display = "none"}, 3000)
//         return false
//     }
// })