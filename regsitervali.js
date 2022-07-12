function validation() {
    let username = document.getElementById('username').value;
    let useremail = document.getElementById('useremail').value;
    let userphone = document.getElementById('userphone').value;
    let userpass = document.getElementById('userpass').value;
    let userConpass = document.getElementById('userConpass').value;


    let namecheck = /^[A-Za-Z. ]{3,30}$/;
    let emailcheck = /^[a-z0-9]+@[a-z]+\.[a-z]{2,3}$/;
    let passcheck = /^(?=.*[0-9])(?=.*[!@#$%&*^])[a-zA-Z0-9!@#$%^&*]{8,16}$/;
    let mobilecheck = /^(\+88)?-?01[0-9]{9}$/;

    //name vali

    if (namecheck.test(username)) {
        document.getElementById('nameError').innerHTML = "";

    } else {
        document.getElementById('nameError').innerHTML = "Invalid Name!!";
        return false;
    }

    //Email vali

    if (emailcheck.test(useremail)) {
        document.getElementById('emailError').innerHTML = "";

    } else {
        document.getElementById('emailError').innerHTML = "Invalid Email!!";
        return false;
    }

    //Number vali

    if (mobilecheck.test(userphone)) {
        document.getElementById('numberError').innerHTML = "";

    } else {
        document.getElementById('numberError').innerHTML = "Invalid Name!!";
        return false;
    }

    //pass vali

    if (passcheck.test(userpass)) {
        document.getElementById('passError').innerHTML = "";

    } else {
        document.getElementById('passError').innerHTML = "Invalid Password!!";
        return false;
    }

    //Confirm pass vali

    if (userpass.match(userConpass)) {
        document.getElementById('conpassError').innerHTML = "";

    } else {
        document.getElementById('conpassError').innerHTML = "Password Not Matched!!";
        return false;
    }

}