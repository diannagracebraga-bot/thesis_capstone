<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<title>MITZTIANPC WIRED INTERNET SERVICES</title>
    <link rel="stylesheet" href="../css/inquire.css">
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
                    <a href="..\index.php">Home</a>
                    <a href= inquire.php>Inquire</a>
                    <a href=plan.php>Plan</a>
                    <a href="about.php">About</a>
                    <a href="login.php">Login</a>
                 </div>
            </div>
    </div>
        
    <div class = "form ">
        <h3>Inquire</h3>
        <form action="submit.php" method="POST">

             <label for="name">Full Name:</label><br>
             <input type="text" id="name" name="name" placeholder="Full Name" required><br><br>

             <label for="email">Email Address:</label><br>
             <input type="email" id="email" name="email" placeholder="Email Address" required><br><br>

             <label for="contact">Contact Number:</label><br>
             <input type="contact" id="contact" name="contact" placeholder="Contact Number" required><br><br>

             <label for="description">Description:</label><br>
             <textarea id="description" name="description" placeholder="Description" rows="4" cols="30" required></textarea><br><br>

             <button type="submit">Submit</button>

        </form>
    </div>
   <!--<div class="bottom-header"></div>-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>