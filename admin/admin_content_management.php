<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/admin_sidebar_topbar_searchbar_profile_icon.css">
	<link rel="stylesheet" href="../css/admin_content_management.css">
	<title></title>
</head>
<body>
		<?php include 'admin_sidebar_header_profile.php'; ?>
		  <h1>User Management Tracking</h1>

		<div class="content-management-container">

    <div class="content-wrapper">

        <div class="business-info-card">
            <label>Business Name</label>
            <input type="text" value="business_name">

            <label>Business Address</label>
            <input type="text" value="business_address">

            <label>Contact Number</label>
            <input type="text" value="contact_number">

            <label>Business Email</label>
            <input type="text" value="business_email">

            <button type="button">Edit</button>
        </div>	

		<div class ="internet_plan">
				<label > INTERNET PLANS</label><br>
				<a href="admin_edit_internet_plan.php"><button>Edit</button></a>
			
			</div>
			

    </div>
	
</div>
			
</body>
</html>