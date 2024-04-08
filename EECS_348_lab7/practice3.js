function password_validate() {
    var first_pswd = document.getElementById('first_pswd').value;
    var second_pswd = document.getElementById('second_pswd').value;

    if(first_pswd.length < 8){
        alert("First password is less than 8 characters!");
    }
    else if(second_pswd.length < 8){
        alert("Second password is less than 8 characters!");
    }
    else if(first_pswd != second_pswd){
        alert("The passwords do not match!");
    }
    else{
        alert("Passwords verified!")
    }
}