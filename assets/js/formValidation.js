const form = document.getElementById("form")

const firstName = document.getElementById("firstname")
const lastName = document.getElementById("lastname")
const phoneNumber = document.getElementById("phonenumber")
const textArea = document.getElementById("textarea")
const formSend = document.getElementById("form_send")

const firstNameError = document.getElementById("firstname-error")
const lastNameError = document.getElementById("lastname-error")
const phoneError = document.getElementById("phone-error")
const messageError = document.getElementById("message-error")
const submitError = document.getElementById("submit-error")

const validateFirstName = () => {
    if(firstName.value === "" || firstName.value == null) {
        firstNameError.innerHTML = "Un prénom complet est nécéssaire"
        return false
    }
    if(!firstName.value.match(/^[A-Za-z_ ]*$/)) {
        firstNameError.innerHTML = "Votre prénom ne doit contenir que des lettres"
        return false
    }
    firstNameError.innerHTML = '<i class="fas fa-check-circle"></i>'
    return true
} 

const validateLastName = () => {
    if(lastName.value === "" || lastName.value == null) {
        lastNameError.innerHTML = "Un nom complet est nécéssaire"
        return false
    }
    if(!lastName.value.match(/^[A-Za-z_ ]*$/)) {
        lastNameError.innerHTML = "Votre nom ne doit contenir que des lettres"
        return false
    }
    lastNameError.innerHTML = '<i class="fas fa-check-circle"></i>'
    return true
} 

const validateNumber = () => {
    if(phoneNumber.value === "" || phoneNumber.value == null) {
        phoneError.innerHTML = "Un numéro de téléphone est nécéssaire"
        return false
    }
    if(!phoneNumber.value.match(/^[0-9]{10}$/)) {
        phoneError.innerHTML = "Veuillez utiliser uniquement des numéros et/ou ne pas dépasser 10 chiffres"
        return false
    }
    phoneError.innerHTML = '<i class="fas fa-check-circle"></i>'
    return true
} 

const validateMessage = () => {
    if(textArea.value === "" || textArea.value == null) {
        messageError.innerHTML = "Un message nous est nécessaire pour comprendre votre besoin"
        return false
    }
    if(!textArea.value.match(/^[A-Za-z_ ]*[0-9_ ]*$/)) {
        messageError.innerHTML = "Votre message ne doit contenir que des lettres et des chiffres"
        return false
    }
    if(textArea.lenght > 255) {
        messageError.innerHTML = "Votre message ne doit pas dépasser 255 caractères"
        return false
    }
    messageError.innerHTML = '<i class="fas fa-check-circle"></i>'
    return true
} 

form.addEventListener("submit", (e) => {
    e.preventDefault()
    
    if(validateFirstName() && validateLastName() && validateMessage() && validateNumber()) {
        submitError.style.display = "block"
        submitError.innerHTML = "Votre formulaire a bien été envoyé."
        setTimeout(function(){submitError.style.display = "none"}, 3000)
        document.forms["form"].submit()
        return true
    } else {
        submitError.style.display = "block"
        submitError.innerHTML = "Remplissez correctement le formulaire avant d'envoyer"
        setTimeout(function(){submitError.style.display = "none"}, 3000)
        return false
    }
})