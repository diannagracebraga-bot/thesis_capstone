<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Support</title>
    <link rel="stylesheet" href="support.css">
</head>
<body>

    
    <div class="sidebar">

        <div class="logo">
            <img src="images/logo.png" alt="Logo">
        </div>

        <ul>
            <li><a href="dashboard.html">Dashboard</a></li>
            <li><a href="payment.html">Payments</a></li>
            <li class="active"><a href="support.html">Support</a></li>
            <li><a href="ticket.html">Ticket</a></li>
            <li><a href="profile.html">Profile</a></li>
        </ul>

    </div>

    
    <div class="main">

        
        <div class="navbar">
            <button class="user-btn">User</button>
        </div>

        
        <div class="content">

            
            <div class="left-section">

                <h2>Submit a concern:</h2>

                <label>Type of concern:</label>

                <select size="5">
                    <option>Billing</option>
                    <option>Internet Connection</option>
                    <option>Internet Upgrade</option>
                    <option>Update Information</option>
                    <option>Others</option>
                </select>

            </div>

            
            <div class="form-box">

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
                            <option>Select</option>
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
                    <input type="file">
                </div>

                <div class="input-group">
                    <label>Description:</label>
                    <textarea></textarea>
                </div>

                <button class="submit-btn">Submitt</button>

            </div>

        </div>

    </div>

</body>
</html>