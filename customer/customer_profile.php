<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Profile</title>
    <link rel="stylesheet" href="profile.css">
</head>

<body>


<div class="sidebar">

    <div class="logo">
        <img src="C:\Users\MWBPI-HP-25-14\Documents\GitHub\thesis_capstone\images\bg_logo.png" alt="Logo">
    </div>

    <ul>
        <li><a href="dashboard.html">Dashboard</a></li>
        <li><a href="payment.html">Payment</a></li>
        <li><a href="support.html">Support</a></li>
        <li><a href="ticket.html">Ticket</a></li>
        <li class="active"><a href="profile.html">Profile</a></li>
    </ul>

</div>


<div class="main">

    
    <div class="navbar">
        <div class="user">Customer</div>
    </div>

    
    <div class="content">

        <h1>My Profile</h1>

        <div class="profile-container">

            
            <div class="profile-card">

                <div class="avatar">
                    <img src="images/profile.png" alt="Profile">
                </div>

                <h2>Dianna Braga</h2>
                <p>Active Customer</p>

            </div>

            
            <div class="profile-details">

                <h2>Account Information</h2>

                <label>Full Name</label>
                <input type="text" value="Dianna Braga">

                <label>Account Number</label>
                <input type="text" value="MTZ-10027">

                <label>Contact Number</label>
                <input type="text" value="09123456789">

                <label>Email Address</label>
                <input type="email" value="dianna@email.com">

                <label>Home Address</label>
                <input type="text" value="San Jose, Occidental Mindoro">

                <label>Current Internet Plan</label>
                <input type="text" value="50 Mbps - ₱800">

                <label>Account Status</label>
                <input type="text" value="Active">

                <button class="update-btn">Updatee Profile</button>

            </div>

        </div>

    </div>

</div>

</body>
</html>