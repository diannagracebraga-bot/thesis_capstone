<?php
include '../database/database_connection.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = mysqli_real_escape_string($conn, $_POST["full_name"]);
    $email_address = mysqli_real_escape_string($conn, $_POST["email_address"]);
    $contact_number = mysqli_real_escape_string($conn, $_POST["contact_number"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $date_received = date("Y-m-d");
    $status = "Pending";

    $query = "INSERT INTO inquiries_tbl 
        (full_name, email_address, contact_number, date_received, status, description)
        VALUES 
        ('$full_name', '$email_address', '$contact_number', '$date_received', '$status', '$description')";

    if (mysqli_query($conn, $query)) {
        $message = "Your concern has been submitted.";
    } else {
        $message = "Failed to submit concern.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Support</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/customer_sidebar_header.css?v=4">
    <link rel="stylesheet" href="../css/customer_support.css?v=3">
    
</head>

<body>

<?php include 'customer_sidebar_header.php'; ?>

<div class="support-content">
    <div class="form-section">
        <?php if ($message !== ""): ?>
    <p class="support-message"><?php echo $message; ?></p>
<?php endif; ?>
        <form class="form-box" method="POST">
            <div class="row">
                <div class="input-group">
                    <label>Name:</label>
                    <input type="text" name="full_name">
                </div>

                <div class="input-group">
                    <label>Contact Number:</label>
                    <input type="text" name="contact_number">
                </div>
            </div>
            <div class="row">
                <div class="input-group">
                    <label>Email:</label>
                    <input type="email"  name="email_address">
                </div>

                <div class="input-group">
                    <label>Type of concern:</label>
                    <select>
                        <option selected disabled>Select</option>
                        <option>Billing</option>
                        <option>Internet Connection</option>
                        <option>Internet Upgrade</option>
                        <option>Update Information</option>
                        <option>Others</option>
                    </select>
                </div>
            </div>

            <div class="input-group">
                <label>Image:</label>
                <input type="file" accept="image/*">
            </div>

            <div class="input-group">
                <label>Description:</label>
                <textarea name="description" placeholder="Describe your concern..."></textarea>
            </div>
                  <button class="submit-btn">Submit</button>

        </form>

    
       
    </div>

</div>

</body>
</html>
