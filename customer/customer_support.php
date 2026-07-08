<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Support</title>

    <link rel="stylesheet" href="../css/customer_sidebar_header.css?v=4">
    <link rel="stylesheet" href="../css/customer_support.css?v=3">
    
</head>

<body>

<?php include 'customer_sidebar_header.php'; ?>

<div class="support-content">
    <div class="form-section">
        <form class="form-box">
            <div class="row">
                <div class="input-group">
                    <label>Name:</label>
                    <input type="text">
                </div>

                <div class="input-group">
                    <label>Contact Number:</label>
                    <input type="text">
                </div>
            </div>
            <div class="row">
                <div class="input-group">
                    <label>Email:</label>
                    <input type="email">
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
                <textarea placeholder="Describe your concern..."></textarea>
            </div>

        </form>

        <!-- BUTTON BELOW FORM -->
        <button class="submit-btn">Submit</button>

    </div>

</div>

</body>
</html>
