<?php
$page = $_GET['page'] ?? 'users';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/admin_user_management.css">
    <link rel="stylesheet" href="../css/admin_sidebar_topbar_searchbar_profile_icon.css">
    <title>User Management</title>
</head>
<body>

    <?php include 'admin_sidebar_header_profile.php'; ?>

    <h1>User Management Tracking</h1>

    <div class="table-container">

<?php
     if ($page == 'add_customer') {
        include 'admin_add_customer.php';
       
		} else {
        ?>

        <table class="table_applicants">
            <thead>
                <tr>
                    <th>ACCOUNT NUMBER</th>
                    <th>Name</th>
                    <th>EMAIL ADDRESS</th>
                    <th>ROLE</th>
                    <th>ACCOUNT STATUS</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            
        </table>

 <?php } ?>

    </div>

</body>
</html>