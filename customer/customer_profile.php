<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Profile</title>
    <link rel="stylesheet" href="../css/customer_sidebar_header.css?v=4">
    <link rel="stylesheet" href="../css/customer_profile.css?v=1">
</head>

<body>
    <?php include 'customer_sidebar_header.php'; ?>

    <main class="profile-content">
        <section class="profile-section">
            <h2>Customer Information</h2>

            <form class="profile-form">
                <div class="form-grid">
                    <div class="field-group">
                        <label for="first_name">First Name:</label>
                        <input id="first_name" type="text" value="Dianna" readonly>
                    </div>

                    <div class="field-group">
                        <label for="middle_name">Middle Name:</label>
                        <input id="middle_name" type="text" value="Bautista" readonly>
                    </div>

                    <div class="field-group">
                        <label for="last_name">Last Name:</label>
                        <input id="last_name" type="text" value="Braga" readonly>
                    </div>

                    <div class="field-group">
                        <label for="birth_date">Birth Date:</label>
                        <input id="birth_date" type="text" value="7/20/2006" readonly>
                    </div>

                    <div class="field-group">
                        <label for="age">Age:</label>
                        <input id="age" type="text" value="21" readonly>
                    </div>

                    <div class="field-group">
                        <label for="sex">Sex:</label>
                        <input id="sex" type="text" value="Female" readonly>
                    </div>

                    <div class="field-group">
                        <label for="address">Address:</label>
                        <input id="address" type="text" value="Tanza, Cavite">
                    </div>

                    <div class="field-group">
                        <label for="contact_number">Contact Number:</label>
                        <input id="contact_number" type="text" value="09266468174">
                    </div>

                    <div class="field-group">
                        <label for="civil_status">Civil Status:</label>
                        <select id="civil_status">
                            <option selected>Single</option>
                            <option>Married</option>
                            <option>Widowed</option>
                            <option>Separated</option>
                        </select>
                    </div>

                    <div class="field-group">
                        <label for="internet_plan">Internet Plan:</label>
                        <input id="internet_plan" type="text" value="800 php" readonly>
                    </div>
                </div>

                <button type="submit" class="save-btn">Save</button>
            </form>
        </section>
    </main>
</body>
</html>
