// Validating forms on front-page, volunteer, and contact

const submitButton = document.querySelector('[role=submit]');
const emailField = document.querySelector('#email');
let email;
const errorContainer = document.querySelector('.error-messages')
const fakeButton = document.querySelector('.clickable')
let formValidity = true;

const ValidateForm = () => {
    errorContainer.innerHTML = ''
    email = emailField.value
    formValidity = true
    emailField.classList.remove('form-error')

    if (!EmailIsValid(email)) {
        formValidity = false
        emailField.classList.add('form-error')
        errorContainer.innerHTML += '<p>Email is incorrect.</p>'

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

