function showHiddenPassword() {
    var password = document.getElementById("password");
    if (password.type == "password") {
        password.type = "text";
    } else {
        password.type = "password";
    }
}

function showHiddenPasswords() {
    var cpassword = document.getElementById("cpassword");
    var ccpassword = document.getElementById("ccpassword");
    
    if(cpassword.type == "password" && ccpassword.type=="password"){
        cpassword.type = "text";
        ccpassword.type = "text";
    } else{
        cpassword.type = "password";
        ccpassword.type = "password";
    }
}
        </script>


