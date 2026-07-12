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
            <?php
					$query = "SELECT * FROM customer_tbl";
					$result = mysqli_query($conn, $query);
					if (!$result) {
						die("Query failed: " . mysqli_error($conn));
					} 
					else {
					while($row = mysqli_fetch_assoc($result)){
						?>
					<tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['acc_number']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['f_name']; ?></td>
                        <td><?php echo $row['m_name']; ?></td>
                        <td><?php echo $row['l_name']; ?></td>
                        <td><?php echo $row['age']; ?></td>
                        <td><?php echo $row['c_status']; ?></td>
                        <td><?php echo $row['sex']; ?></td>
                        <td><?php echo $row['b_date']; ?></td>
                        <td><?php echo $row['barangay']; ?></td>
                        <td><?php echo $row['h_number']; ?></td>
                        <td><?php echo $row['street']; ?></td>
                        <td><?php echo $row['subdivision']; ?></td>
                        <td><?php echo $row['plan']; ?></td>
                        <td><?php echo $row['conn_status']; ?></td>
                        <td>
                            <a href="edit_customer.php?id=<?php echo $row['id']; ?>">Edit</a>
                        </td>
                    </tr>
                    <?php
}
}
?>
            
        </table>

 <?php } ?>

    </div>

</body>
</html>