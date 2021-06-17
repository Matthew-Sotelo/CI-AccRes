<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="icon" href="logo.png">
        <link rel="stylesheet" href="Report.css">
        <link rel="stylesheet" href="login.css">
	</head>
	<body>
	<?php include 'header.php';
    ?>
    <div class="login-form">
        <form class="login-credential">
            <h1 class="login-header">Login</h1>
            <div>
                <input id="input-style" type="text" placeholder="Username">
            </div>
            <div>
            	<input id="input-style" type="password" placeholder="Password">
            </div>
             <input class="login-button" type="submit" value="Login" >
            
             <div class="signup">
                 Don't have an account?
             </br>
             <a href="registration.html">Sign up</a>
             </div>
             <img src="bg.png" style= "width: 600px; height: 400px; position: absolute; top:200px; left: 100px">
        </form>
    </div>
	</body>
</html>
