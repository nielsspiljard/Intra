<!DOCTYPE html><html>
    <head>



        <link href="css/login.css" rel="stylesheet" type="text/css" />
        <link href="css/login2.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

    </head>
    <body>

    	<div class="heading">
        	Welkom bij Bloed, zweet en vooral tranen
                </div>
        
        <div id="wrapper">
    	
            <form name="login-form" class="login-form" action="" method="post">

            	
                <div class="header">
                	<h1>Login</h1>
                	<span>Please login or if you dont have an account, you can Register!</span>
                </div>
                
            	
                <div class="content">
            		<input name="username" type="text" class="input username" placeholder="Username" />
            		<input name="password" type="password" class="input password" placeholder="Password" />
                </div>
                
                
                <div class="footer">
            		<input type=button onClick="location.href='index.php'" value="Login" class="button" />
            		<input type=button onClick="location.href='register.php'" value="Register" class="register" />
                </div>
              

            </form>
        </div>
    </body>
</html>