<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/admin_payment.css">
	<link rel="stylesheet" href="../css/admin_sidebar_topbar_searchbar_profile_icon.css">
	<title></title>
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
            <a class="dashboard" href="#applicants">Applicants</a><br>
            <a class="dashboard" href="admin_customer.php">Customer</a><br>
            <a class="dashboard" href="admin_payment.php">Payments</a><br>
            <a class="dashboard" href="admin_inquiries.php">Inquiries</a><br>
            <a class="dashboard" href="admin_ticket_management.php">Ticket Management</a><br>
            <a class="dashboard" href="admin_user_management.php">User Management</a><br>
            <a class="dashboard" href="admin_content_management.php">Content Management</a><br>
        </div>
		<h1> User Management Tracking </h1>
		<div class = "table-container">
        <div class="searchbar-container">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit">Search</button>
				<div class="payment-plus">
					<div class="payment-add"> Add Payments/Bills </div>
					</div>             
        </div>
		<br>
				<table class = "table_applicants">
					<thead>
					<tr>
						<th> ID </th>
						<th> PLAN </th>
						<th> PAYMENT METHOD </th>
						<th> STATUS </th>
						<th> DUE DATE </th>
						<th> AMOUNT </th>
						<th> REMARKS </th>
					</tr>
					</thead>
						<tr>
							<td> 1 </td>
							<td> 50 mbps </td>
							<td> Cash </td>
							<td> Active</td>
							<td> 07/22/2025 </td>
							<td> ₱1000 </td>
        				    <td> Not Paid </td>
                        </tr>
						<tr>
							<td> 2 </td>
							<td> 100 mbps </td>
							<td> Gcash </td>
							<td> Inactive </td>
							<td> 08/22/2025 </td>
							<td> ₱1300 </td>
        				    <td> Paid </td>
                        </tr>



        

</body>
</html>