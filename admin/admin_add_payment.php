<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/admin_sidebar_topbar_searchbar_profile_icon.css">
    <link rel="stylesheet" href="../css/admin_add_payment.css">
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
        <div class="add_payment">
            <h3>Add Payment</h3>

            <form action="admin_add_payment.php" method="POST">
                

            <div class="form_group">
                <label>Plan</label>
                <select name="Plan" required>
                    <option value="">-- Select --</option>
                    <option>50 mbps</option>
                    <option>100 mbps</option>
                    <option>150 mbps</option>
                    <option>200mbps</option>
                    <option>250 mbps</option>
                    </select>
                    </div>
                <div class="form_grid">
                     <form action="admin_add_payment.php" method="POST">
                            <div class="form_group">
                                <label>First Name</label>
                                <input type="words" name="First_Name" required>
                                </div>
                            <div class="form_group">
                                <label>Middle Name</label>
                                <input type="words" name="Middle_Name" required>
                                </div>
                            <div class="form_group">
                                <label>Last Name</label>
                                <input type="words" name="Last_Name" required>
                                </div>
                            <div class="form_group">
                            <label>Payment method</label>
                            <select name="Payment_Method" required>
                                <option value="">-- Select --</option>
                                <option>Cash</option>
                                <option>Gcash</option>
                            </select>
                            </div>
                            <div class="form_group">
                                <label>Due Date</label>
                                <input type="words" name="due_date" required>
                            </div>
                            <div class="form_group">
                            <label>Remarks</label>
                            <select name="remarks" required>
                                <option value="">-- Select --</option>
                                <option>Paid</option>
                                <option>Not Paid</option>
                            </select>
                            </div>
                            <div class="form_group">
                                <label>Amount</label>
                                <input type="words" name="amount" required>
                            </div>     
                            <div class="form_group full_width">
                <input type="submit" value="ADD">
            </div>

                </div>
            </form>
</body>
</html>