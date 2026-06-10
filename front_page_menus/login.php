<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<title>MITZTIANPC WIRED INTERNET SERVICES</title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <div class="header">
        <div class = "image-container">
                 <img src="../images/bg_logo.png" alt="Logo" class="icon2">
              </div>
         <h5>MITZTIANPC WIRED INTERNET SERVICES</h5>
            <div class="dropdown">
                <button class="dropdown_menu"> <img src="../images/hamburger.png" alt="menu icon" class="icon">
                </button>
                 
                 <div class="dropdown-content">
                    <a href=..\index.php>Home</a>
                    <a href= inquire.php>Inquire</a>
                    <a href=plan.php>Plan</a>
                    <a href=about.php>About</a>
                    <a href=login.php>Login</a>
                 </div>
            </div>
    </div>
         <!--<h1 class ="center_name">MITZTIANPC WIRED INTERNET</h1>
          <H6 class ="center_lower_name">NOW YOU'RE CONNECTED</H6>
        -->
	<div class="login-container">
    	<h2>Login</h2>

    	<form action="login.php" method="POST">
       		 <label for="username">Username:</label>
       		 <input type="text" id="username" name="username" placeholder="Username" required>
				<br><br>
      		  <label for="password">Password:</label>
      		  <input type="password" id="password" name="password" placeholder="Password" required>
				<br> <br>
                    <div class="forgot-password">
                          <a href="forgot_password.php"><i>Forgot Password?</i></a>
                    </div>
       		 <button type="submit">Login</button>
			 <br> <br>
			
    	</form>
	</div>

    <div class="bottom-header"></div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>