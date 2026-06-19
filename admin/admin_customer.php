<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/admin_sidebar_topbar_searchbar_profile_icon.css">
    <link rel="stylesheet" href="../css/admin_customer.css">
    <title>MITZTIANPC WIRED INTERNET SERVICES</title>
</head>
<body>
     <header class="top-bar">
        <div class="search-container1">
        <form action="/admin_customer.php" method="GET">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit">Search</button>
        </form>
        </div>
        <button class="profile-button">
                <div class="profile-container">
                        <div class="profile-name"> Dianna Braga </div>
                        <div class="profile-role"> Admin </div>
                        </div>
        </button>
        </header>

		<div class="sidebar">
               <div class="image-container">
                        <img src="../images/bg_logo.png" alt="Logo" class="icon2">
        </div>
            <a class="dashboard" href="admin_dashboard.php">Dashboard</a><br>
            <a href="#applicants">Applicants</a><br>
            <a href="admin_customer.php">Customer</a><br>
            <a href="admin_payment.php">Payments</a><br>
            <a href="admin_inquiries.php">Inquiries</a><br>
            <a href="admin_ticket_management.php">Ticket Management</a><br>
            <a href="admin_user_management.php">User Management</a><br>
            <a href="admin_content_management.php">Content Management</a><br>
        </div>
</body>
</html>