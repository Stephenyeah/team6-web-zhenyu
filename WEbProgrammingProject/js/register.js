function crud_sign() {
    let email = (document.form2.email.value).trim();
    if (email.length < 8) {
        alert("Email must have atleast 8 character");
        return false;
    }
    let name = (document.form2.name.value).trim();
    if (name.length < 5) {
        alert("Name must have atleast 5 character");
        return false;
    }
    let password = (document.form2.password.value).trim();
    if (password.length < 5) {
        alert("Last Name must have atleast 5 character");
        return false;
    }
}