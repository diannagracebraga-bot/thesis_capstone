<?php
include '../database/database_connection.php';

$sql = "SELECT * FROM content_management_about_tbl WHERE about_id = 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$sql_plan = "SELECT * FROM internet_plan_tbl";
$plan_result = mysqli_query($conn, $sql_plan);

if(isset($_POST['update'])){

    $business_name = $_POST['business_name'];
    $business_email = $_POST['business_email'];
    $business_contact = $_POST['business_contact'];
    $business_social_media = $_POST['business_social_media'];
    $business_address = $_POST['business_address'];
    $business_description = $_POST['business_description'];

    $update = "UPDATE content_management_about_tbl SET
                business_name='$business_name',
                business_email='$business_email',
                business_contact='$business_contact',
                business_social_media='$business_social_media',
                business_address='$business_address',
                business_description='$business_description'
                WHERE about_id = 1";

    if(mysqli_query($conn, $update)){
        echo "<script>
                alert('Content updated successfully!');
                window.location='admin_content_management.php';
              </script>";
        exit();
    }else{
        echo "<script>
                alert('Update failed!');
              </script>";
    }
}

if(isset($_POST['save_plans'])){

    foreach($_POST['internet_price'] as $plan_id => $internet_price){

         $mbps = $_POST['internet_mbps'][$plan_id];

        $update = "UPDATE internet_plan_tbl
           SET internet_price='$internet_price',
               internet_mbps='$mbps'
           WHERE plan_id='$plan_id'";

        mysqli_query($conn, $update);}
    echo "<script>
            alert('Internet plans updated successfully!');
            window.location='admin_content_management.php';
          </script>";
    exit();
}?>

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
    <form method="POST">
    <div class="content-wrapper">


        <div class="business-info-card">
           <label>BUSINESS NAME:</label>
           <input type="text" name="business_name"
           value="<?php echo $row['business_name']; ?>">
            
           <label>BUSINESS EMAIL:</label>
           <input type="text" name="business_email"
           value="<?php echo $row['business_email']; ?>">

           <label>BUSINESS CONTACT NUMBER:</label>
           <input type="number" name="business_contact"
           value="<?php echo $row['business_contact']; ?>">

           <label>BUSINESS FACEBOOK PAGE:</label>
           <input type="text" name="business_social_media"
           value="<?php echo $row['business_social_media']; ?>">

           <label>BUSINESS ADDRESS:</label>
           <input type="text" name="business_address"
           value="<?php echo $row['business_address']; ?>">

           <label>BUSINESS DESCRIPTION:</label>
           <input type="text" name="business_description"
           value="<?php echo $row['business_description']; ?>">

        <button type="submit" name="update">Save</button>
        </div>	
</form>
<form method="POST" class="plan-container">

    <div class="labels">
        <label>Internet Plan:</label>
        <label>Mbps:</label>
    </div>

  <?php while($plan = mysqli_fetch_assoc($plan_result)){ ?>

<div class="plan-row">

    <input
        type="text"
        class="plan-input"
        name="internet_price[<?php echo $plan['plan_id']; ?>]"
        value="<?php echo $plan['internet_price']; ?>">

    <input
        type="text"
        class="mbps-input"
        name="internet_mbps[<?php echo $plan['plan_id']; ?>]"
        value="<?php echo $plan['internet_mbps']; ?>">

</div>

<?php } ?>
    <button type="submit" name="save_plans" class="save-btn">
        Save
    </button>

</form>

    </div>
	
</div>
			
</body>
</html>