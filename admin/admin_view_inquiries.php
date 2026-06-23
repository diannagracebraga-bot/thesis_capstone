<?php
include '../database/database_connection.php';

if(isset($_POST['status'])){
    $new_status = $_POST['status'];
    $id = $_GET['id'];

    $sql_update = "UPDATE inquiries_tbl 
                   SET status='$new_status' 
                   WHERE id='$id'";

    mysqli_query($conn, $sql_update);

   header("Location: admin_inquiries.php");
    exit();
}

$id = $_GET['id'];

$sql = "SELECT * FROM inquiries_tbl WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/admin_sidebar_topbar_searchbar_profile_icon.css">
	<link rel="stylesheet" href="../css/admin_view_inquiries.css">
    <title></title>
</head>
<body>
	<?php include 'admin_sidebar_header_profile.php'; ?>
       
      <h1>User Management Tracking</h1>
<div class="form_container">

    <div class="container">

        <div class="top-section">
          <form method="POST">
    <div class="status">
        <label>Status</label>

        <select name="status">
            <option value="Ongoing" <?php if($row['status'] == 'Ongoing') echo 'selected'; ?>>Ongoing</option>
            <option value="Resolved" <?php if($row['status'] == 'Resolved') echo 'selected'; ?>>Resolved</option>
            <option value="Pending" <?php if($row['status'] == 'Pending') echo 'selected'; ?>>Pending</option>
        </select>
    </div>

    <div class="action"><br>
        <label>Action</label>
        <button type="submit" class="action-btn">Update</button>
    </div>
</form>
        </div>

        <div class="customer_details">
            <label>Customer Details:</label>
                <textarea readonly><?php
                        echo "Name: " . $row['full_name'] . "\n";
                        echo "Email: " . $row['email_address'] . "\n";
                        echo "Contact: " . $row['contact_number'];
                    ?>
                </textarea>
            
        </div>

        <div class="customer_concern_description">
            <label>Description:</label>
                <textarea readonly><?php echo $row['description']; ?>
                 </textarea>
                        </div>

    </div>
</div>

</body>
</html>