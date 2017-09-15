<?php
session_start();
$sShowWelcome = "";
$sShowLogin = "";
if ( isset( $_SESSION['sUserLastName'])) {
    echo "YES";
    $sShowWelcome = "show";
}
else {
    echo "NO USER";
    $sShowLogin = "show";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- *******************LOGIN******************** -->
    <div id="iPageLogin" class="cPage <?php echo $sShowLogin; ?>">

        <div class="frmContainer">
            <form id="iFrmLogin">
                <input class="cMarginTop10" type="text" name="txtUserName" placeholder="user name">
                <input class="cMarginTop10" type="text" name="txtUserPassword" placeholder="user password">
                <button class="cMarginTop10 cBtnLogin btn" id="iBtnLogin" type="button">LOGIN</button>
                <div id="lblLoginError">ERROR - PLEASE TRY AGAIN</div>
            </form>
        </div>
    </div>

    <!-- *******************WELCOME******************** -->
    <div id="iPageWelcome" class="cPage <?php echo $sShowWelcome; ?>">

        <div class="cWelcome-box">
            <h1>Welcome <span id="iWelcomeUserName"></span></h1>
            <button class="btn cBtnLogout" id="iBtnLogout" type="button" action="api-logout.php">Log Out</button>
        </div>

    </div>


    <script src="script.js"></script>
</body>
</html>