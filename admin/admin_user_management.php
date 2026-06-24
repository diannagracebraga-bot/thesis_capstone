<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/admin_user_management.css">
    <link rel="stylesheet" href="../css/admin_sidebar_topbar_searchbar_profile_icon.css">
	<title></title>
</head>
<body>
	<?php include 'admin_sidebar_header_profile.php'; ?>
user management
    <h1> User Management Tracking </h1>
		<div class = "table-container">
        <div class="searchbar-container">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit">Search</button>

				<div class = "payment-plus">
                     <form action="admin_add_payment.php" method="get">
                    <button type= "submit">Add customer</button>
                </div>
				          
        </div>
		<br>
				<table class = "table_applicants">
					<thead>
					<tr>
						<th> ID </th>
						<th> NAME </th>
						<th> ROLE </th>
						<th> STATUS </th>
						<th> ACTION </th>
					</tr>
					</thead>
						<tr>
							<div class="icon-container">
  <i class="fa-solid fa-heart"></i>
  <i class="fa-solid fa-share"></i>
</div>
							<td> 1 </td>
							<td> Noel </td>
							<td> Admin </td>
							<td> Active</td>
                        </tr>
						<tr>
							<td> 2 </td>
							<td> Dianna </td>
							<td> Customer </td>
							<td> Inactive </td>
                        </tr>
						
</table>
</div>
        
</body>
</html>