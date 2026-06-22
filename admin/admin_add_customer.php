<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/admin_sidebar_topbar_searchbar_profile_icon.css">
    <link rel="stylesheet" href="../css/admin_add_customer.css">
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

        <div class="customer_registration">
    <h3>Customer Registration</h3>

    <form action="admin_add_customer.php" method="POST">

        <div class="form_grid">

            <div class="form_group">
                <label>Account Number:</label>
                <input type="number" name="account_number" required>
            </div>

            <div class="form_group">
                <label>First Name:</label>
                <input type="text" name="first_name" required>
            </div>

            <div class="form_group">
                <label>Middle Name:</label>
                <input type="text" name="middle_name">
            </div>

            <div class="form_group">
                <label>Last Name:</label>
                <input type="text" name="last_name" required>
            </div>

            <div class="form_group">
                <label>Age:</label>
                <input type="number" name="age" required>
            </div>

            <div class="form_group">
                <label>Civil Status:</label>
                <select name="civil_status" required>
                    <option value="">-- Select --</option>
                    <option>Single</option>
                    <option>Married</option>
                    <option>Widowed</option>
                    <option>Separated</option>
                </select>
            </div>

            <div class="form_group">
                <label>Gender:</label>
                <select name="gender" required>
                    <option value="">-- Select --</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>

            <div class="form_group">
                <label>Birth Date:</label>
                <input type="date" name="birth_date" required>
            </div>

            <div class="form_group">
                <label>Barangay:</label>
                <select name="barangay" required>
                    <option value="">-- Select Barangay --</option>
                    <option>Amaya I</option>
                    <option>Amaya II</option>
                    <option>Amaya III</option>
                    <option>Amaya IV</option>
                    <option>Amaya V</option>
                    <option>Amaya VI</option>
                    <option>Amaya VII</option>
                    <option>Bagtas</option>
                    <option>Barangay I</option>
                    <option>Barangay II</option>
                    <option>Barangay III</option>
                    <option>Barangay IV</option>
                    <option>Biga</option>
                    <option>Biwas</option>
                    <option>Bucal</option>
                    <option>Bunga</option>
                    <option>Calibuyo</option>
                    <option>Capipisa</option>
                    <option>Daang Amaya I</option>
                    <option>Daang Amaya II</option>
                    <option>Daang Amaya III</option>
                    <option>Halayhay</option>
                    <option>Julugan I</option>
                    <option>Julugan II</option>
                    <option>Julugan III</option>
                    <option>Julugan IV</option>
                    <option>Julugan V</option>
                    <option>Julugan VI</option>
                    <option>Julugan VII</option>
                    <option>Julugan VIII</option>
                    <option>Lambingan</option>
                    <option>Mulawin</option>
                    <option>Paradahan I</option>
                    <option>Paradahan II</option>
                    <option>Punta I</option>
                    <option>Punta II</option>
                    <option>Sahud Ulan</option>
                    <option>Sanja Mayor</option>
                    <option>Santol</option>
                    <option>Tanauan</option>
                    <option>Tres Cruses</option>
                </select>
            </div>

            <div class="form_group">
                <label>House Number:</label>
                <input type="text" name="house_number" required>
            </div>

            <div class="form_group">
                <label>Street:</label>
                <input type="text" name="street">
            </div>

            <div class="form_group">
                <label>Subdivision:</label>
                <input type="text" name="subdivision">
            </div>

            <div class="form_group">
                <label>Internet Plan:</label>
                <select name="internet_plan" required>
                    <option value="">-- Select Plan --</option>
                    <option>Plan 800 - 50 Mbps</option>
                    <option>Plan 1000 - 100 Mbps</option>
                    <option>Plan 1200 - 150 Mbps</option>
                    <option>Plan 1500 - 200 Mbps</option>
                    <option>Plan 2499 - 250 Mbps</option>
                </select>
            </div>

            <div class="form_group">
                <label>Connection Status:</label>
                <select name="connection_status" required>
                    <option value="">-- Select Status --</option>
                    <option>Connected</option>
                    <option>Disconnected</option>
                </select>
            </div>

            <div class="form_group full_width">
                <input type="submit" value="Register">
            </div>

        </div>

    </form>
</div>
</body>
</html>