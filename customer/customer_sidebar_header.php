 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Payment</title>
    <link rel="stylesheet" href="../css/customer_sidebar_header.css">
</head>

<body>
    <header class="top-bar">
        <div class="search-container1">
        <form action="/admin_customer.php" method="GET">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit">Search</button>
        </form>
        </div>
        <button class="profile-button">
                <div class="profile-container">
                        <div class="profile-name"> Dianna Braga </div>
                        <div class="profile-role"> Admin </div>
                        </div>
        </button>
        </header>
    <div class="sidebar">
        <div class="logo">
            <img src="../images/bg_logo.png" alt="Logo" class="icon2">
        </div>
        <a href="customer-dashboard.php">Dashboard</a>
        <a href="customer_payment.php">Payment</a>
        <a href="customer_support.php">Support</a></li>
        <a href="customer_ticket.php">Ticket</a></li>
        <a href="customer_profile.php">Profile</a>
    </div>
    
    </body>
</html>