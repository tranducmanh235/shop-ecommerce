function validateForm() {
    var firstname = document.forms["formDangKy"]["ten"].value;
    var lastname = document.forms["formDangKy"]["ho"].value;
    var email = document.forms["formDangKy"]["email"].value;
    var sdt = document.forms["formDangKy"]["sdt"].value;
    var username = document.forms["formDangKy"]["newUser"].value;
    var atposition = email.indexOf("@");
    var dotposition = email.lastIndexOf(".");
    var password = document.forms["formDangKy"]["newPass"].value;
    var confpassword = document.forms["formDangKy"]["confNewPass"].value;
    
    if (firstname.length < 2 || firstname.length > 30) {
        alert(" Please enter firstname must be lenght 2 to 30 characters");
        return false;
    } else if (lastname.length < 2 || lastname.length > 30) {
        alert("Please enter lastname must be lenght 2 to 30 characters");
        return false;

    } else if (username.length < 2 || lastname.length > 30) {
        alert("Please enter userName must be lenght 2 to 30 characters");
        return false;

    } else if (sdt.length < 5 || lastname.length > 30) {
        alert("Please enter SDT must be lenght 5 to 30 characters");
        return false;

    }else if (atposition < 1 || dotposition < 1 ||
        (dotposition + 1) >= email.length) {
        alert("Please enter a valid e-mail address.");
        return false;
    } else if (password == '' || password.length < 2 || password.length > 30) {
        alert("Please enter password must be lenght 2 to 30 characters");
        return false;
    } 
    else if (password != confpassword) {
        alert("Please validate password again");
        return false;
    }else {
        return true;
    }
}