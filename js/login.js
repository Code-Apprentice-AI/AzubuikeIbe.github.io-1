function login() {
    var uname=document.getElementById('username').value;
    var pass=document.getElementById('password').value;

    if (uname=="admin" && pass=="0000") {
        location.assign("http://localhost/shop/index.html");
    }else {
        window.alert("login failed, try again!");
    }

}