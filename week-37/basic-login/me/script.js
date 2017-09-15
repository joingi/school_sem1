btnLogin.addEventListener("click", function () {

    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var jDataFromServer = JSON.parse(this.responseText);
            if (jDataFromServer.login == "ok") {
                var sDivWelcome = '<div><h1>Welcome: ' + jDataFromServer.lastName + '</h1></div>';
                welcomeMsg.innerHTML = sDivWelcome;
            } else {
                console.log("LOGIN FAIL - TRY AGAIN");
            }
        }
    }
    ajax.open("POST", "api-login.php", true);
    var jFrmLogin = new FormData(frmLogin);
    ajax.send(jFrmLogin);

});

btnLogout.addEventListener('click', function () {
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var jDataFromLogout = JSON.parse(this.responseText);

            if (jDataFromLogout.logout == "bye") {
                var sDivBye = '<div><h1>Bye</h1></div>'
                bye.innerHTML = sDivBye;
            }
        }
    }
    ajax.open('GET', 'api-logout.php', true);
    ajax.send();
})