/*jshint esversion: 6 */

function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function passwordChanged() {
    let strength = document.getElementById('strength');
    let strongRegex = new RegExp("^(?=.{10,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
    let mediumRegex = new RegExp("^(?=.{8,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
    let enoughRegex = new RegExp("(?=.{6,}).*", "g");
    let pwd = document.getElementById("password");
    let progress = document.getElementById("passwordStrength");

    if (pwd.value.length == 0) {
        strength.innerHTML = 'Password Strength';
        strength.style.color ="gray";
        progress.style.width = "100%";
        progress.style.backgroundColor = "gray";
    } else if (false == enoughRegex.test(pwd.value)) {
        strength.innerHTML = 'More Characters!';
        strength.style.color ="red";
        progress.style.width = "25%";
        progress.style.backgroundColor = "red";
    } else if (strongRegex.test(pwd.value)) {
        strength.innerHTML = 'Strong!';
        strength.style.color ="green";
        progress.style.width = "100%";
        progress.style.backgroundColor ="green";
    } else if (mediumRegex.test(pwd.value)) {
        strength.innerHTML = 'Medium!';
        strength.style.color ="gold";
        progress.style.width = "75%";
        progress.style.backgroundColor ="gold";
    } else {
        strength.innerHTML = 'Weak!';
        strength.style.color ="red";
        progress.style.width = "50%";
        progress.style.backgroundColor = "red";
    }
}

function passwordConfirmed(){
    let confirmedPass = document.getElementById("passwordConfirm").value;
    let originalPass  = document.getElementById("password").value;
    let msg =  document.getElementById("confirmPassswordMessage");
    if(confirmedPass.length === 0 || originalPass.length === 0){
        msg.style.display = "none";
        msg.innerText = "";
    }
    else if(confirmedPass !== originalPass){
        msg.style.display = "block";
        msg.style.color = "red";
        msg.innerText = "Passwords do not match.";
    }
    else{
        msg.style.display = "block";
        msg.style.color = "green";
        msg.innerText = "Passwords match. You are good to go!";
    }
}

function validate() {
    // for name
    let name = document.getElementById("name").value.trim();
    if (name === "") {
        alert("Kindly enter name before submission of form.");
        return false;
    }

    // for email
    let email = document.getElementById("email").value.trim();
    if (email === "") {
        alert("Kindly enter email before submission of form.");
        return false;
    }

    if (!validateEmail(email)) {
        alert("Kindly enter a valid email.");
        return false;
    }
    
    let enoughRegex = new RegExp("(?=.{6,}).*", "g");
    let confirmedPass = document.getElementById("passwordConfirm").value;
    let originalPass  = document.getElementById("password").value;
    let enoughFlag = enoughRegex.test(originalPass);
    if(!enoughFlag){
        alert("Password not strong enough. Try a stronger password.");
        return false;
    }
    if(confirmedPass!==originalPass){
        alert("Passwords do not match. Please try again.");
        return false;
    }

    return true;
}
