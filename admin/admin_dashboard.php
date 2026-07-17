<?php
session_start();
include '../database/database_connection.php';
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin') {
    header("Location: ../front_page_menus/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>MITZTIANPC WIRED INTERNET SERVICES</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/admin_dashboard.css">
        <link rel="stylesheet" href="../css/admin_sidebar_topbar_searchbar_profile_icon.css">
        <script type="module" src="https://cdn.landbot.io/landbot-3/landbot-3.0.0.mjs"></script>
<script type="module">
  var myLandbot = new Landbot.Popup({
    configUrl: 'https://storage.googleapis.com/landbot.online/v3/H-3474225-XXVB9WE5W6WPVY0W/index.json',
  });
</script>
</head>
        
<body>
        <?php include 'admin_sidebar_header_profile.php'; ?>

        <h1>USER MANAGEMENT TRACKING</h1>
        <div class="stats-container">
                <div class="stat">
                        <div class="customer-value value">11</div>
                        <div class="type">Total Customer</div>
                </div>
                <div class="stat">
                        <div class="user-value value">12</div>
                        <div class="type">Active User</div>
                </div>
                <div class="stat">
                        <div class="applicants-value value">13</div>
                        <div class="type">Pending Applicants</div>
                </div>
        </div>
        <div class="dashboard">
                <div class="metrics-grid">
                        <div class="metric-card">
                                <div class="metric-header">
                                        Active Users <i class="fa-solid fa-circle-info"></i>
                                </div>
                                <div class="metric-value">$23,000</div>
                                <div class="metric-change positive">
                                        vs past months <i class="fa-solid fa-arrow-up"></i>50%
                                </div>
                                <div class="metric-icon">
                                        <div class="bar-chart-icon">
                                                <div class="bar" style="height: 40px"></div>
                                                <div class="bar" style="height: 50px"></div>
                                                <div class="bar" style="height: 60px"></div>
                                        </div>
                                </div>
                                <a href="#" class="see-details">See Details<i class="fa-solid fa-arrow-right"></i></a> 
                        </div>
                </div>
        </div>
        <script src="js/script.js"></script>
</body>
</html>