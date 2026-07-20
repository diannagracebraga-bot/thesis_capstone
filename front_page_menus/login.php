<?php
session_start();
include '../database/database_connection.php';
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: ../front_page_menus/login.php");
    exit();
}
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $query = "SELECT * FROM login_tbl WHERE email='$email'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];
            switch ($user['role']) {
                //case "super_admin":
                    //header("Location: ../super_admin/super_admin_dashboard.php");
                    //exit(); wala pang superadmin dashboard
                case "admin":
                    header("Location: ../admin/admin_dashboard.php");
                    exit();
                case "customer":
                    header("Location: ../customer/customer_dashboard.php");
                    exit();
                default:
                    session_destroy();
                    $error = "Invalid.";
                    break;
            }
        } else {
            $error = "Incorrect Password";
        }
    } else {
        $error = "Username not found";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MITZTIANPC WIRED INTERNET SERVICES</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
    if (isset($error)) {
        echo "<p style='color:red;'>$error</p>";
    }
    ?>
    <form action="" method="POST">
        <label>Email:</label>
        <input type="email" name="email" placeholder="Email" required>
        <br><br>
        <label>Password:</label>
        <input type="password" name="password" placeholder="Password" required>
        <br><br>
        <div class="forgot-password">
            <a href="../front_page_menus/forgot_password.php">
                <i>Forgot Password?</i>
            </a>
        </div>
        <button type="submit" name="login">Login</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>