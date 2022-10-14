function validate() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username == "admin" && password == "admin") {
        alert("login successfully");
        // window.location = "account.html"; // Redirecting to other page.
        return true;
    }
    else {
        alert("login failed retry!");
        document.getElementById("error").innerHTML = "Invalid username or password";
    }

    return false;
}