function Validation(email, password, confirmPass) {
    
    function checkConfirmation(password, confirmPass) {
        if (password.value !== confirmPass.value) {
            return false;
        }
        return true;
    }

    function checkPass(password) {
        var regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;

        if (password.value.match(regex)) {
            return true;
        }
        return false;
    }

    function check_Email(email) {
        // temporary regex => prone to be changed (to be checked by hussain)
        var regex = /^[a-zA-Z0-9.!#$%&'*+\=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

        if (email.value.match(regex)) {
            return true;
        }
        return false;
    }

    if (checkConfirmation(password, confirmPass) && check_Email(email) && checkPass(password)) {
        alert('Successfully Registered');
    } else {
        if (!checkConfirmation(password, confirmPass)) {
            alert('Passwords do not match');
        }
        if (!checkPass(password)) {
            alert('Weak Password');
        }
        if (!check_Email(email)) {
            alert('Wrong Email Format!');
        }
    }


}