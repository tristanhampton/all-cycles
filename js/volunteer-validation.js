// Validating forms on front-page, volunteer, and contact
const form = document.querySelector('form');
const submitButton = document.querySelector('[role=submit');
const firstNameField = document.querySelector('#first_name');
const lastNameField = document.querySelector('#last_name');
const emailField = document.querySelector('#email');
let email;
const pronounsField = document.querySelector('#pronouns');
const rolesParent = document.querySelector('#roles')
const rolesCheckboxes = document.querySelectorAll('[type=checkbox]');
const vehicleSelection = document.querySelectorAll('[type=radio');
const vehicleParent = document.querySelector('#vehicle')
const errorContainer = document.querySelector('.error-messages')
const fakeButton = document.querySelector('.clickable')

let formValidity = true;




const ValidateForm = () => {
    errorContainer.innerHTML = ''
    checkboxValidation = 0
    email = emailField.value
    formValidity = true
    firstNameField.classList.remove('form-error')
    lastNameField.classList.remove('form-error')
    emailField.classList.remove('form-error')
    for (let i = 0; i < vehicleSelection.length; i++) {
        vehicleSelection[i].classList.remove('form-error')
    }
    for (let i = 0; i < rolesCheckboxes.length; i++) {
        rolesCheckboxes[i].classList.add('form-error')
    }

    if (firstNameField.textLength < 2) {
        formValidity = false
        firstNameField.classList.add('form-error')
        errorContainer.innerHTML += '<p>First Name must be greater than two characters.</p>'
    }

    if (lastNameField.textLength < 2) {
        formValidity = false
        lastNameField.classList.add('form-error')
        errorContainer.innerHTML += '<p>Last Name must be greater than two characters.</p>'

    }

    if (!EmailIsValid(email)) {
        formValidity = false 
        emailField.classList.add('form-error')
        errorContainer.innerHTML += '<p>Email is incorrect.</p>'

    }

    if(!CheckboxesAreValid(rolesCheckboxes)) {
        formValidity = false
        errorContainer.innerHTML += '<p>You  must select at least one volunteer role.</p>'
        for (let i = 0; i < rolesCheckboxes.length; i++) {
            rolesCheckboxes[i].classList.add('form-error')
        }
    }

    if(!CheckboxesAreValid(vehicleSelection)) {
        formValidity = false
        for (let i = 0; i < vehicleSelection.length; i++) {
            vehicleSelection[i].classList.add('form-error')
        }
        errorContainer.innerHTML += '<p>You must specify if you have a vehicle or not.</p>'
    }

    if (formValidity == true)
        return true
    else
        return false
}


fakeButton.addEventListener('click', (evt) => {
    if (ValidateForm()) {
        submitButton.disabled = !ValidateForm()
        submitButton.click()
    }
})