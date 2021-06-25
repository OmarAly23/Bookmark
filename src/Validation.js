function Validation(email, password, confirmPass) {
    
    function checkConfirmation(password, confirmPass) {
        if (password !== confirmPass) {
            return false;
        }
        return true;
    }

    function checkPass(password) {
        var regex = /^(?=.*[a-z])(?=.*\d)(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?=.*[!@#$%]).{8, }$/;

        if (password.value.match(regex)) {
            return true;
        }
        return false;
    }

    function check_Email(email) {
        // temporary regex => prone to be changed (to be checked by hussain)
        var regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

        if (email.value.match(regex)) {
            return true;
        }
        return false;
    }

    if (checkConfirmation(password, confirmPass) && check_Email(email) && checkPassword(password)) {
        alert('Successfully Registered');
    } else {
        alert('Failed to Register');
    }


}