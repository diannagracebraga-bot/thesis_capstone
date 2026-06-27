<?php
include '../database/database_payment.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $plan = $_POST['Plan'];
    $payment_method = $_POST['Payment_Method'];
    $status = $_POST['status'];
    $due_date = $_POST['d_date'];
    $remarks = $_POST['remarks'];
    $amount = $_POST['amount'];

    $query = "INSERT INTO payment
              (plan, payment_method, status, due_date, remarks, amount)
              VALUES
              ('$plan','$payment_method', '$status', '$due_date', '$remarks', '$amount')";

    $result = mysqli_query($connection, $query);

    if ($result) {
        header("Location: admin_payment.php");
        exit();
    } else {
        echo "Insert failed: " . mysqli_error($connection);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/admin_sidebar_topbar_searchbar_profile_icon.css">
    <link rel="stylesheet" href="../css/admin_add_payment.css">
    <title>MITZTIANPC WIRED INTERNET SERVICES</title>
</head>
<body>
		<?php include 'admin_sidebar_header_profile.php'; ?>
	
<div class="add_payment">
    <h3>Add Payment</h3>

    <form action="" method="post">

        <div class="form_group">
            <label>Plan</label>
            <select name="Plan" required>
                <option value="">-- Select --</option>
                <option>50 mbps</option>
                <option>100 mbps</option>
                <option>150 mbps</option>
                <option>200 mbps</option>
                <option>250 mbps</option>
            </select>
        </div>

        <div class="form_grid">

    
            <div class="form_group">
                <label>Payment Method</label>
                <select name="Payment_Method" required>
                    <option value="">-- Select --</option>
                    <option>Cash</option>
                    <option>Gcash</option>
                </select>
            </div>

            <div class="form_group">
                <label>Due Datesss</label>
                <input type="date" name="d_date" required>
            </div>

            <div class="form_group">
                <label>Remarks</label>
                <select name="remarks" required>
                    <option value="">-- Select --</option>
                    <option>Paid</option>
                    <option>Not Paid</option>
                </select>
            </div>

            <div class="form_group">
                <label>Amount</label>
                <input type="text" name="amount" required>
            </div>

            <div class="form_group full_width">
                <button type="submit" class="payment-plus">
                    Add Customer
                </button>
            </div>

        </div>
    </form>
</div>

</body>
</html>