

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/customer_sidebar_header.css?v=4">
    <link rel="stylesheet" href="../css/customer_profile.css?v=1">
</head>

<body>
    <?php include 'customer_sidebar_header.php'; ?>

    <main class="profile-content">
        <div class="card w-100">
  				<div class="card-body">
        <section class="profile-section">
            <h2>Customer Information</h2>

           <form class="profile-form" method="POST">
                <div class="form-grid">
                    <div class="field-group">
                        <label for="first_name">First Name:</label>
                        <input id="first_name" type="text" value="<?php echo $customer['first_name']; ?>" readonly>
                    </div>

                    <div class="field-group">
                        <label for="middle_name">Middle Name:</label>
                        <input id="middle_name" type="text" value="<?php echo $customer['middle_name']; ?>" readonly>

                    </div>

                    <div class="field-group">
                        <label for="last_name">Last Name:</label>
                        <input id="last_name" type="text" value="<?php echo $customer['last_name']; ?>" readonly>
                    </div>

                    <div class="field-group">
                        <label for="birth_date">Birth Date:</label>
                       <input id="birth_date" type="text" value="<?php echo $customer['birth_date']; ?>" readonly>
                    </div>

                    <div class="field-group">
                        <label for="age">Age:</label>
                        <input id="age" type="text" value="<?php echo $customer['age']; ?>" readonly>

                    </div>

                    <div class="field-group">
                        <label for="sex">Sex:</label>
                        <input id="sex" type="text" value="<?php echo $customer['sex']; ?>" readonly>
                    </div>

                    <div class="field-group">
                        <label for="address">Address:</label>
                        <input id="address" name="address" type="text" value="<?php echo $customer['address']; ?>">
                    </div>

                    <div class="field-group">
                        <label for="contact_number">Contact Number:</label>
                        <input id="contact_number" name="contact_number" type="text" value="<?php echo $customer['contact_number']; ?>">
                    </div>

                    <div class="field-group">
                        <label for="civil_status">Civil Status:</label>
                        <select id="civil_status" name="civil_status">
                     <option <?php if ($customer['civil_status'] == 'Single') echo 'selected'; ?>>Single</option>
                     <option <?php if ($customer['civil_status'] == 'Married') echo 'selected'; ?>>Married</option>
                     <option <?php if ($customer['civil_status'] == 'Widowed') echo 'selected'; ?>>Widowed</option>
                     <option <?php if ($customer['civil_status'] == 'Separated') echo 'selected'; ?>>Separated</option>
                        </select>
                    </div>

                    <div class="field-group">
                        <label for="internet_plan">Internet Plan:</label>
                        <input id="internet_plan" type="text" value="<?php echo $customer['internet_plan_id']; ?>" readonly>
                    </div>
                </div>

                <button type="submit" class="save-btn">Save</button>
            </form>
        </section>
</div>
</div>
    </main>
</body>
</html>
