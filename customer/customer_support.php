<?php
include '../database/database_connection.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = trim($_POST["full_name"] ?? "");
    $email_address = trim($_POST["email_address"] ?? "");
    $contact_number = trim($_POST["contact_number"] ?? "");
    $concern_type = trim($_POST["concern_type"] ?? "");
    $description = trim($_POST["description"] ?? "");

    if ($full_name === "" || $email_address === "" || $contact_number === "" || $concern_type === "" || $description === "") {
        $message = "Please fill out all required fields.";
    } else {
        $full_name = mysqli_real_escape_string($conn, $full_name);
        $email_address = mysqli_real_escape_string($conn, $email_address);
        $contact_number = mysqli_real_escape_string($conn, $contact_number);
        $concern_type = mysqli_real_escape_string($conn, $concern_type);
        $description = mysqli_real_escape_string($conn, $description);
        $date_received = date("Y-m-d");
        $status = "Pending";

        $query = "INSERT INTO ticket_management_tbl
            (customer_id, full_name, email_address, contact_number, concern_type, date_received, concern, description, priority, status, date_submitted)
            VALUES
            (1, '$full_name', '$email_address', '$contact_number', '$concern_type', '$date_received', '$concern_type', '$description', 'Normal', '$status', '$date_received')";

        if (mysqli_query($conn, $query)) {
            $message = "Your concern has been submitted.";
        } else {
            $message = "Failed to submit concern: " . mysqli_error($conn);
        }
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
    <link rel="stylesheet" href="../css/customer_support.css?v=5">
</head>

<body>
<?php include 'customer_sidebar_header.php'; ?>

<div class="support-content">
    <div class="form-section">
        <?php if ($message !== ""): ?>
            <div class="alert alert-info support-alert">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>

        <form class="form-box" method="POST">
            <div class="row">
                <div class="input-group">
                    <label>Name:</label>
                    <input type="text" name="full_name" required>
                </div>

                <div class="input-group">
                    <label>Contact Number:</label>
                    <input type="text" name="contact_number" required>
                </div>
            </div>

            <div class="row">
                <div class="input-group">
                    <label>Email:</label>
                    <input type="email" name="email_address" required>
                </div>

                <div class="input-group">
                    <label>Type of concern:</label>
                    <select name="concern_type" required>
                        <option value="" selected disabled>Select</option>
                        <option>Billing</option>
                        <option>Internet Connection</option>
                        <option>Internet Upgrade</option>
                        <option>Update Information</option>
                        <option>Others</option>
                    </select>
                </div>
            </div>

            <div class="input-group">
                <label>Description:</label>
                <textarea name="description" placeholder="Describe your concern..." required></textarea>
            </div>

            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</div>
</body>
</html>



