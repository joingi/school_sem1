<?php
	session_start();
	$sShowWelcome = "";
	$sShowLogin = "";
	if( isset( $_SESSION['sUserLastName'] ) )
	{
		// show the welcome page
		// echo "YES";
		$sShowWelcome  = "show";
	}
	else
	{
		// show the login page
		// echo "NO";
		$sShowLogin = "show";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>SIMPLE - LOGIN</title>
	<link rel="stylesheet" href="style-main.css">
</head>
<body>


		<div id="iPageLogin" class="cPage  <?php echo $sShowLogin; ?> ">
			
			<div></div>

			<form id="frmLogin">
				
				<input class="cMarginTop10" type="text" name="txtUserName" placeholder="user name">
				<input class="cMarginTop10" type="text" name="txtUserPassword" placeholder="user password">
				<button class="cMarginTop10" id="btnLogin" type="button">LOGIN</button>
				<div id="lblLoginError" class="cMarginTop10">ERROR - PLEASE TRY AGAIN</div>

			</form>

			<div></div>

		</div>


		<!-- ************************************************** -->
		<!-- ************************************************** -->
		<!-- ************************************************** -->

		<div id="iPageWelcome" class="cPage <?php echo $sShowWelcome; ?>">
			
			<button id="btnLogout" type="button">LOGOUT</button>
			<h1>WELCOME <span id="iLblWelcomeUserName"></span>USER-LASTNAME-HERE</h1>

		</div>






		<script>


		btnLogout.addEventListener( "click" , function(){
		  var ajax = new XMLHttpRequest();
		  ajax.onreadystatechange = function() 
		  {
		  	iPageWelcome.style.display = "none";
		  	iPageLogin.style.display = "grid";
	    }			
		  ajax.open( "GET", "api-logout.php" , true );
		  ajax.send();	
		});

		/**************************************************/
		/**************************************************/
		/**************************************************/
		btnLogin.addEventListener( "click" , function(){
			console.log("X");
			
		  var ajax = new XMLHttpRequest();
		  ajax.onreadystatechange = function() 
		  {
		    if (this.readyState == 4 && this.status == 200) 
		    {
		     	var jDataFromServer = JSON.parse( this.responseText );

	   			if( jDataFromServer.login == "ok" )		   			
	   			{
   					console.log("WELCOME:" , jDataFromServer.lastName );
   					iPageWelcome.style.display = "grid";
   					iPageLogin.style.display = "none";
	   			}		   		
					else
					{
						console.log("LOGIN FAIL - TRY AGAIN");
   					iPageWelcome.style.display = "none";
   					iPageLogin.style.display = "grid";						
					}
	   		}
	    }			
		  ajax.open( "POST", "api-login.php" , true );
		  var jFrmLogin = new FormData( frmLogin );
		  ajax.send( jFrmLogin );		
			
		});


		/**************************************************/
		/**************************************************/
		/**************************************************/

			  	

    </script>
    

    
</body>
</html>