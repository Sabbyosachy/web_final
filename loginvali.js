function myfun() {


    let useremail = document.getElementById('useremail').value;
    let userpass = document.getElementById('userpass').value;

    let emailcheck = "/[a-z0-9]+@[a-z]+\.[a-z]{2,3}/";
    let passcheck = "/^(?=.*[0-9])(?=.*[!@#$%&*^])[a-zA-Z0-9!@#$%^&*]{8,16}$/";

    if (emailcheck.test(useremail)) {
        document.getElementById('emailError').innerHTML = "";

    } else {
        document.getElementById('emailError').innerHTML = "Invalid Email!!";
        return false;
    }


    if (passcheck.test(userpass)) {
        document.getElementById('passError').innerHTML = "";

    } else {
        document.getElementById('passError').innerHTML = "Invalid Password!!";
        return false;
    }


}