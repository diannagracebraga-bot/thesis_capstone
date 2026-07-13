<?php
session_start();
include '../database/database_connection.php';

if(isset($_GET['logout'])){
    session_destroy();
    header("Location: ../front_page_menus/login.php");
    exit();
}
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM login_tbl WHERE username='$username'";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result) > 0){
        $admin = mysqli_fetch_assoc($result);
        if(password_verify($password,$admin['password'])){
            $_SESSION['admin_id'] = $admin['id'];
            $_SESSION['admin_name'] = $admin['username'];
            header("Location: ../admin/admin_dashboard.php");
            exit();
        }else{
            $error = "Incorrect Password";
        }
        }else{
            $error = "Username not found";
        }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<title>MITZTIANPC WIRED INTERNET SERVICES</title>
<link rel="stylesheet" href="../css/login.css">
<link rel="stylesheet" href="../css/index_style.css">
</head>
<body>
    <div class="header">
        <div class="logo-section">
            <img src="../images/bg_logo.png" alt="Logo" class="icon2">
            <h5>MITZTIANPC WIRED INTERNET SERVICES</h5>
        </div>
        <div class="dropdown">
            <button class="dropdown_menu">
                <img src="../images/hamburger.png" alt="menu icon" class="icon">
            </button>
            <div class="dropdown-content">
                <a href="../index.php">Home</a>
                <a href="inquire.php">Inquire</a>
                <a href="plan.php">Plan</a>
                <a href="about.php">About</a>
                <a href="login.php">Login</a>
            </div>
        </div>
    </div>
    <div class="login-container">
        <h2>Login</h2>
<?php 
if(isset($error)){
    echo "<p style='color:red;'>$error</p>";
}
?>
<form action="../front_page_menus/login.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" placeholder="Username" required>
    <br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="Password" required>
    <br><br>
    <div class="forgot-password">
        <a href="../front_page_menus/forgot_password.php">
            <i>Forgot Password?</i>
        </a>
    </div>
    <button type="submit" name="login">Login</button>
    <br><br>
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>