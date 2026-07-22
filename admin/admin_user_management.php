<?php
$page = $_GET['page'] ?? 'users';
include '../database/database_connection.php';
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
    
    <h1>USER MANAGEMENT TRACKING</h1>
                <div class="card w-75">
  				<div class="card-body">
    <div class="table-container">
<?php
if ($page == 'add_customer') {
    include 'admin_add_customer.php';
    } else 
?>

<table class="table_applicants">
    <thead>
        <tr>
            <th>ACCOUNT NUMBER</th>
            <th>NAME</th>
            <th>EMAIL ADDRESS</th>
            <th>ROLE</th>
            <th>ACCOUNT STATUS</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
<?php
$sql = "SELECT * FROM login_tbl";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
?>
    <tr>
    <td><?php echo $row['id']; ?></td>
    <td>
        <?php 
        echo $row['f_name'] . " " . $row['m_name'] . " " . $row['l_name'];
        ?>

        <table class="table table-secondary table-hover">
            <thead class = "table-info">
                <tr>
                    <th>ACCOUNT NUMBER</th>
                    <th>NAME</th>
                    <th>EMAIL ADDRESS</th>
                    <th>ROLE</th>
                    <th>ACCOUNT STATUS</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            
        </table>
</div>
</div>

 <?php }} ?>

    </div>

</body>
</html>