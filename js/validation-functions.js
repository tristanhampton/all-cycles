let checkboxValidation;

const EmailIsValid = (email) => {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)
}

const CheckboxesAreValid = (list) => {
    checkboxValidation = 0
    for (let i = 0; i < list.length; i++) {
        if (list[i].checked)
            checkboxValidation += 1
    }
    if (checkboxValidation >= 1)
        return true
    else
        return false
}