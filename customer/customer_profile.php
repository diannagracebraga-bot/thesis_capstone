<?php
include '../database/database_connection.php';

$customer_id = 1; // Temporary habang wala pang login session.
$message = "";
$edit_mode = isset($_GET['edit']) && $_GET['edit'] === '1';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $contact_number = mysqli_real_escape_string($conn, $_POST["contact_number"] ?? "");
    $civil_status = mysqli_real_escape_string($conn, $_POST["civil_status"] ?? "");
    $barangay = mysqli_real_escape_string($conn, $_POST["barangay"] ?? "");
    $subdivision = mysqli_real_escape_string($conn, $_POST["subdivision"] ?? "");
    $street = mysqli_real_escape_string($conn, $_POST["street"] ?? "");
    $house_number = mysqli_real_escape_string($conn, $_POST["house_number"] ?? "");

    $address_parts = array_filter([$house_number, $street, $subdivision, $barangay]);
    $address = mysqli_real_escape_string($conn, implode(', ', $address_parts));

    $update_query = "UPDATE customer_tbl SET
        contact_number = '$contact_number',
        civil_status = '$civil_status',
        barangay = '$barangay',
        subdivision = '$subdivision',
        street = '$street',
        house_number = '$house_number',
        address = '$address'
        WHERE customer_id = $customer_id";

    if (mysqli_query($conn, $update_query)) {
        header("Location: customer_profile.php?updated=1");
        exit();
    }

    $message = "Update failed: " . mysqli_error($conn);
}

if (isset($_GET['updated'])) {
    $message = "Profile updated successfully.";
}

$query = "SELECT c.*, p.plan_name, p.internet_mbps, p.internet_price
          FROM customer_tbl c
          LEFT JOIN internet_plan_tbl p ON c.internet_plan_id = p.plan_id
          WHERE c.customer_id = $customer_id";

$result = mysqli_query($conn, $query);

if (!$result) {
    die("Customer query failed: " . mysqli_error($conn));
}

$customer = mysqli_fetch_assoc($result);

if (!$customer) {
    die("Customer record not found.");
}

$email_address = $customer['email_address'] ?? $customer['username'] ?? "";
$role = $customer['role'] ?? "Customer";

$internet_plan = "No plan selected";
if (!empty($customer['plan_name'])) {
    $internet_plan = $customer['plan_name'] . " - " . $customer['internet_mbps'] . " Mbps - PHP " . $customer['internet_price'];
} elseif (!empty($customer['internet_mbps']) || !empty($customer['internet_price'])) {
    $internet_plan = ($customer['internet_mbps'] ?? "") . " Mbps - PHP " . ($customer['internet_price'] ?? "");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/customer_sidebar_header.css?v=4">
    <link rel="stylesheet" href="../css/customer_profile.css?v=7">
</head>
<body>
<?php include 'customer_sidebar_header.php'; ?>

<main class="profile-content">
    <section class="profile-card">
        <div class="profile-title-row">
            <h2>Customer Information</h2>

            <?php if (!$edit_mode): ?>
                <a href="customer_profile.php?edit=1" class="btn btn-primary profile-action-btn">Edit Customer Details</a>
            <?php endif; ?>
        </div>

        <?php if ($message !== ""): ?>
            <div class="alert alert-info py-2"><?php echo htmlspecialchars($message); ?></div>
        <?php endif; ?>

        <form method="POST">
            <div class="row g-3">
                <div class="col-md-2">
                    <label class="form-label">ID</label>
                    <input type="text" class="form-control" value="<?php echo htmlspecialchars($customer['customer_id'] ?? ''); ?>" readonly>
                </div>

                <div class="col-md-7">
                    <label class="form-label">Email Address</label>
                    <input type="email" class="form-control" value="<?php echo htmlspecialchars($email_address); ?>" readonly>
                </div>

                <div class="col-md-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" value="password" readonly>
                </div>

                <div class="col-md-4">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control" value="<?php echo htmlspecialchars($customer['first_name'] ?? ''); ?>" readonly>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Middle Name</label>
                    <input type="text" class="form-control" value="<?php echo htmlspecialchars($customer['middle_name'] ?? ''); ?>" readonly>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control" value="<?php echo htmlspecialchars($customer['last_name'] ?? ''); ?>" readonly>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Contact Number</label>
                    <input type="text" class="form-control" name="contact_number" value="<?php echo htmlspecialchars($customer['contact_number'] ?? ''); ?>" <?php echo $edit_mode ? '' : 'readonly'; ?>>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Age</label>
                    <input type="text" class="form-control" value="<?php echo htmlspecialchars($customer['age'] ?? ''); ?>" readonly>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Sex</label>
                    <input type="text" class="form-control" value="<?php echo htmlspecialchars($customer['sex'] ?? ''); ?>" readonly>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Civil Status</label>
                    <?php if ($edit_mode): ?>
                        <select class="form-select" name="civil_status">
                            <option <?php if (($customer['civil_status'] ?? '') === 'Single') echo 'selected'; ?>>Single</option>
                            <option <?php if (($customer['civil_status'] ?? '') === 'Married') echo 'selected'; ?>>Married</option>
                            <option <?php if (($customer['civil_status'] ?? '') === 'Widowed') echo 'selected'; ?>>Widowed</option>
                            <option <?php if (($customer['civil_status'] ?? '') === 'Separated') echo 'selected'; ?>>Separated</option>
                        </select>
                    <?php else: ?>
                        <input type="text" class="form-control" value="<?php echo htmlspecialchars($customer['civil_status'] ?? ''); ?>" readonly>
                    <?php endif; ?>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Birth Date</label>
                    <input type="text" class="form-control" value="<?php echo htmlspecialchars($customer['birth_date'] ?? ''); ?>" readonly>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Barangay</label>
                    <?php if ($edit_mode): ?>
                        <select class="form-select" name="barangay">
                            <option <?php if (($customer['barangay'] ?? '') === 'Amaya I') echo 'selected'; ?>>Amaya I</option>
                            <option <?php if (($customer['barangay'] ?? '') === 'Amaya II') echo 'selected'; ?>>Amaya II</option>
                            <option <?php if (($customer['barangay'] ?? '') === 'Amaya III') echo 'selected'; ?>>Amaya III</option>
                        </select>
                    <?php else: ?>
                        <input type="text" class="form-control" value="<?php echo htmlspecialchars($customer['barangay'] ?? ''); ?>" readonly>
                    <?php endif; ?>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Subdivision</label>
                    <input type="text" class="form-control" name="subdivision" value="<?php echo htmlspecialchars($customer['subdivision'] ?? ''); ?>" <?php echo $edit_mode ? '' : 'readonly'; ?>>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Street</label>
                    <input type="text" class="form-control" name="street" value="<?php echo htmlspecialchars($customer['street'] ?? ''); ?>" <?php echo $edit_mode ? '' : 'readonly'; ?>>
                </div>

                <div class="col-md-4">
                    <label class="form-label">House Number</label>
                    <input type="text" class="form-control" name="house_number" value="<?php echo htmlspecialchars($customer['house_number'] ?? ''); ?>" <?php echo $edit_mode ? '' : 'readonly'; ?>>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Role</label>
                    <input type="text" class="form-control" value="<?php echo htmlspecialchars($role); ?>" readonly>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Internet Plan</label>
                    <input type="text" class="form-control" value="<?php echo htmlspecialchars($internet_plan); ?>" readonly>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Connection Status</label>
                    <input type="text" class="form-control" value="<?php echo htmlspecialchars($customer['status'] ?? ''); ?>" readonly>
                </div>

                <?php if ($edit_mode): ?>
                    <div class="col-12 profile-button-row">
                        <a href="customer_profile.php" class="btn btn-secondary profile-action-btn">Cancel</a>
                        <button type="submit" class="btn btn-success profile-action-btn">Save Changes</button>
                    </div>
                <?php endif; ?>
            </div>
        </form>
    </section>
</main>
</body>
</html>
