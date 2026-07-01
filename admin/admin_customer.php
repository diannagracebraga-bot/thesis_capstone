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
     <?php include 'admin_sidebar_header_profile.php'; ?>

        <div class="header">
        </div>
            <h1>USER MANAGEMENT TRACKING</h1>
            
			<div class = "table-container1">
    <div class = "aligned" >
        <div class="searchbar-container">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit">Search</button>
        </div>
               <div class="add_customer">
    <form action="admin_user_management.php" method="get">
        <input type="hidden" name="page" value="add_customer">
        <button type="submit">Add Customer</button>
    </form>
</div> 
  		  </div>

                <br>
				<table class = "customer-list">
					<thead>
					<tr>
						<th>CUSTOMER ID</th>
						<th>ACCOUNT NO.</th>
						<th>FIRST NAME</th>
						<th>LAST NAME</th>
						<th>AGE</th>
						<th>CONTACT</th>
                        <th>EMAIL</th>
                        <th>STATUS</th>
                        <th>ACTION</th>
					</tr>
					</thead>
						
						
				</table>
				</div>
</body>
</html>