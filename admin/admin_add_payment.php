<?php
include '../database/database_payment.php';
?>
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
            <form action="record.php" method="post">
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
                            <div class="form_group">
                                <label for="f_name">First Name</label>
                                <input type="words" name="f_name" required>
                                </div>
                            <div class="form_group">
                                <label for="m_name">Middle Name</label>
                                <input type="words" name="m_name" required>
                                </div>
                            <div class="form_group">
                                <label for="l_name">Last Name</label>
                                <input type="words" name="l_name" required>
                                </div>
                            <div class="form_group">
                            <label for = "p_method">Payment method</label>
                            <select name="Payment_Method" required>
                                <option value="">-- Select --</option>
                                <option>Cash</option>
                                <option>Gcash</option>
                            </select>
                            </div>
                            <div class="form_group">
                                <label for="d_date">Due Date</label>
                                <input type="words" name="d_date" required>
                            </div>
                            <div class="form_group">
                            <label for="remarks">Remarks</label>
                            <select name="remarks" required>
                                <option value="">-- Select --</option>
                                <option>Paid</option>
                                <option>Not Paid</option>
                            </select>
                            </div>
                            <div class="form_group">
                                <label for="amount">Amount</label>
                                <input type="words" name="amount" required>
                            </div>     
                            <div class="form_group full_width">
                            <form action="admin_payment.php" method="get"> 
                                <button class= "payment-plus" >Add customer</button>
                                
</form>
                
            </div>



                </div>
            </form>
</body>
</html>