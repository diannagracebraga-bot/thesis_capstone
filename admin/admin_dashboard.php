<!DOCTYPE html>
<html>
<head>
	<title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/admin_dashboard.css">
        
</head>
        
<body>
        <header class="top-bar">
        <div class="search-container">
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
            <a class="dashboard" href="#dashboard">Dashboard</a><br>
            <a class="dashboard" href="#applicants">Applicants</a><br>
            <a class="dashboard" href="#customer">Customer</a><br>
            <a class="dashboard" href="#payments">Payments</a><br>
            <a class="dashboard" href="#inquiries">Inquiries</a><br>
            <a class="dashboard" href="#ticket_management">Ticket Management</a><br>
            <a class="dashboard" href="#user_management">User Management</a><br>
            <a class="dashboard" href="#content_management">Content Management</a><br>
        </div>
        <div class="header">    
        </div>

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