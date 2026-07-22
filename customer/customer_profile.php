

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

         <form method="POST">
    <div class="row g-3">

        <div class="col-md-4">
            <label class="form-label">First Name</label>
            <input type="text" class="form-control"
                   value="<?php echo $customer['first_name']; ?>" readonly>
        </div>

        <div class="col-md-4">
            <label class="form-label">Middle Name</label>
            <input type="text" class="form-control"
                   value="<?php echo $customer['middle_name']; ?>" readonly>
        </div>

        <div class="col-md-4">
            <label class="form-label">Last Name</label>
            <input type="text" class="form-control"
                   value="<?php echo $customer['last_name']; ?>" readonly>
        </div>

        <div class="col-md-4">
            <label class="form-label">Birth Date</label>
            <input type="text" class="form-control"
                   value="<?php echo $customer['birth_date']; ?>" readonly>
        </div>

        <div class="col-md-4">
            <label class="form-label">Age</label>
            <input type="text" class="form-control"
                   value="<?php echo $customer['age']; ?>" readonly>
        </div>

        <div class="col-md-4">
            <label class="form-label">Sex</label>
            <input type="text" class="form-control"
                   value="<?php echo $customer['sex']; ?>" readonly>
        </div>

        <div class="col-md-6">
            <label class="form-label">Address</label>
            <input type="text" class="form-control"
                   name="address"
                   value="<?php echo $customer['address']; ?>">
        </div>

        <div class="col-md-3">
            <label class="form-label">Contact Number</label>
            <input type="text" class="form-control"
                   name="contact_number"
                   value="<?php echo $customer['contact_number']; ?>">
        </div>

        <div class="col-md-3">
            <label class="form-label">Civil Status</label>
            <select class="form-select" name="civil_status">
                <option <?php if($customer['civil_status']=="Single") echo "selected"; ?>>Single</option>
                <option <?php if($customer['civil_status']=="Married") echo "selected"; ?>>Married</option>
                <option <?php if($customer['civil_status']=="Widowed") echo "selected"; ?>>Widowed</option>
                <option <?php if($customer['civil_status']=="Separated") echo "selected"; ?>>Separated</option>
            </select>
        </div>

        <div class="col-md-6">
            <label class="form-label">Internet Plan</label>
            <input type="text" class="form-control"
                   value="<?php echo $customer['internet_plan_id']; ?>" readonly>
        </div>

        <div class="col-12 text-center mt-3">
            <button type="submit" class="btn btn-primary ">
                Save
            </button>
        </div>

    </div>
</form>
        </section>
</div>
</div>
    </main>
</body>
</html>
