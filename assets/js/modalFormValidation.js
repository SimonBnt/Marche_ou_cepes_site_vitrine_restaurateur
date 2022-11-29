const form = document.getElementById("disheCreationForm")

const title = document.getElementById("disheCreation_title")
const description = document.getElementById("disheCreation_description")
const categorySelector = document.getElementById("category_selector")
const formSend = document.getElementById("disheCreation_modalBtn")
const acceptedCategory = ["entree", "plat", "partager", "dessert"]

const titleError = document.getElementById("title-error")
const descriptionError = document.getElementById("description-error")
const selectorError = document.getElementById("selector-error")
const formError = document.getElementById("form-error")


const validateTitle = () => {
    if(title.value === "" || title.value == null) {
        titleError.innerHTML = "Un titre de plat est nécéssaire"
        return false
    }
    if(!title.value.match(/^[a-zA-Z_ ]*$/)) {
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
    if(!description.value.match(/^[a-zA-Z0-9_ ]*$/)) {
        descriptionError.innerHTML = "Une description de plat ne doit contenir que des lettres"
        return false
    }
    descriptionError.innerHTML = '<i class="fas fa-check-circle"></i>'
    return true
} 

const validateSelector = () => {
    if(categorySelector.value === "" || categorySelector.value == null) {
        selectorError.innerHTML = "Une catégorie de plat est nécéssaire"
        return false
    }
    if(categorySelector.value == "selectCategory") {
        selectorError.innerHTML = "Vous devez selectionner une catégorie"
        return false
    }
    // if(categorySelector.value !== acceptedCategory.value) {
    //     selectorError.innerHTML = "Vous devez selectionner une catégorie valide parmis les options suivantes, entrée; plat; a partager; déssert"
    //     return false
    // }
    selectorError.innerHTML = '<i class="fas fa-check-circle"></i>'
    return true
} 

form.addEventListener("submit", (e) => {
    e.preventDefault()
    
    if(validateTitle() && validateSelector() && validateDescription()) {
        formError.style.display = "block"
        formError.innerHTML = "Votre plat a bien été créer."
        setTimeout(function(){formError.style.display = "none"}, 3000)
        document.forms["disheCreationForm"].submit()
        return true
    } else {
        formError.style.display = "block"
        formError.innerHTML = "Remplissez correctement le formulaire."
        setTimeout(function(){formError.style.display = "none"}, 3000)
        return false
    }
})