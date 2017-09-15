// LOGIN
iBtnLogin.addEventListener("click", function () {

    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var jLoginApi = JSON.parse(this.response);
            if (jLoginApi.login == "sUserMatch") {
                console.log('Welcome: ' + jLoginApi.lastName);
                // Hide and remove pages
                iPageWelcome.style.display = 'grid';
                iPageLogin.style.display = 'none';

                iWelcomeUserName.innerHTML = jLoginApi.lastName;
            } else {
                console.log("LOGIN FAIL - TRY AGAIN");
                // Switch hide remove
                iPageWelcome.style.display = 'none';
                iPageLogin.style.display = 'grid';
                lblLoginError.style.display = 'grid';
            }
        }
    }
    ajax.open("POST", "api-login.php", true);
    var jFrmLogin = new FormData(iFrmLogin);
    ajax.send(jFrmLogin);

});

// LOGOUT
iBtnLogout.addEventListener('click', function () {
    var ajax = new XMLHttpRequest();
    ajax.open('GET', 'api-logout.php', true);
    ajax.onreadystatechange = function () {
        iPageWelcome.style.display = 'none';
        iPageLogin.style.display = 'grid';
    };
    ajax.send();
});