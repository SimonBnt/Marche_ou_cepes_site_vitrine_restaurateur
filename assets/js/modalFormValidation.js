const form = document.getElementById("disheCreationForm")

const title = document.getElementById("disheCreation_title")
const description = document.getElementById("disheCreation_description")
const categorySelector = document.getElementById("category_selector")
const formSend = document.getElementById("disheCreation_modalBtn")

const titleError = document.getElementById("title-error")
const descriptionError = document.getElementById("description-error")
const selectorError = document.getElementById("selector-error")
const messageError = document.getElementById("message-error")
const submitError = document.getElementById("submit-error")

const validateTitle = () => {
    if(title.value === "" || title.value == null) {
        titleError.innerHTML = "Un titre de plat est nécéssaire"
        return false
    }
    if(!title.value.match(/^[A-Za-z]*$/)) {
        titleError.innerHTML = "Un titre de plat ne doit contenir que des lettres"
        return false
    }
    titleError.innerHTML = '<i class="fas fa-check-circle"></i>'
    return true
} 

const validateDescription = () => {
    if(description.value === "" || description.value == null) {
        descriptionError.innerHTML = "Une description de plat est nécéssaire"
        return false
    }
    if(!description.value.match(/^[A-Za-z]*$/)) {
        descriptionError.innerHTML = "Une description de plat ne doit contenir que des lettres"
        return false
    }
    descriptionError.innerHTML = '<i class="fas fa-check-circle"></i>'
    return true
} 

// const validateSelector = () => {
    
// } 

form.addEventListener("submit", (e) => {
    e.preventDefault()
    
//     if(validateString() && validateSelector()) {
//         submitError.style.display = "block"
//         submitError.innerHTML = "Votre formulaire a bien été envoyé."
//         setTimeout(function(){submitError.style.display = "none"}, 3000)
//         document.forms["form"].submit()
//         return true
//     } else {
//         submitError.style.display = "block"
//         submitError.innerHTML = "Remplissez correctement le formulaire avant d'envoyer"
//         setTimeout(function(){submitError.style.display = "none"}, 3000)
//         return false
//     }
})