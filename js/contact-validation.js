// Validating forms on front-page, volunteer, and contact

const submitButton = document.querySelector('[role=submit]');
const nameField = document.querySelector('#name');
const emailField = document.querySelector('#email');
const messageField = document.querySelector('#message');
let email;
const errorContainer = document.querySelector('.error-messages')
const fakeButton = document.querySelector('.clickable')
let formValidity = true;




const ValidateForm = () => {
    errorContainer.innerHTML = ''
    email = emailField.value
    formValidity = true
    nameField.classList.remove('form-error')
    emailField.classList.remove('form-error')
    messageField.classList.remove('form-error')

    if (nameField.textLength < 2) {
        formValidity = false
        nameField.classList.add('form-error')
        errorContainer.innerHTML += '<p>Name must be greater than two characters.</p>'
    }

    if (!EmailIsValid(email)) {
        formValidity = false
        emailField.classList.add('form-error')
        errorContainer.innerHTML += '<p>Email is incorrect.</p>'

    }

    if (messageField.value == '') {
        formValidity = false
        messageField.classList.add('form-error')
        errorContainer.innerHTML += '<p>Please include a message.</p>'
    }

    if (formValidity == true)
        return true
    else
        return false
}

fakeButton.addEventListener('click', (evt) => {
    if (ValidateForm()) {
        submitButton.disabled = !ValidateForm()
        fakeButton.classList.add('not-clickable')
        fakeButton.classList.remove('clickable')
        submitButton.click()
    }
})