<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Customer Dashboard</title>
<link rel="stylesheet" href="../css/customer_sidebar_header.css?v=4">
<link rel="stylesheet" href="../css/customer_dashboard.css?v=2">

</head>
<body>
<?php include 'customer_sidebar_header.php'; ?>
<div class="content">




    <div class="top-section">
        <div class="welcome">
            <h2>Welcome, Dianna Braga</h2>
            <p><strong>Account No:</strong> MTZ-10027</p>
        </div>
        <div class="right-top">
            <div class="date-card">
                <p>Tuesday</p>  
                <h3>July 8, 2026</h3>
            </div>
            <div class="plan-card">
                <h3>Current Plan</h3>
                <h2>₱800</h2>
                <p>50 Mbps</p>
            </div>

        </div>
    </div>
    <div class="summary">
     
        <div class="card">
            <h4>Service Status</h4>
            <span class="online">● Connected</span>
        </div>
    
        <div class="card">
            <h4>Next Due Date</h4>
            <span>July 15, 2026</span>
        </div>
    </div>
    <div class="announcement">
        <h3>Latest Announcement</h3>
        <p>
            Scheduled maintenance on July 10, 2026 from
            12:00 AM - 4:00 AM.
        </p>
    </div>
    <div class="payment-box">
        <div class="payment-header">
            <h3>Payment History</h3>
            <input
                type="text"
                placeholder="Search payment..."
            >
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Payment</th>
                    <th>Method</th>
                    <th>Status</th>
                    <th>SOA</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>027</td>
                    <td>05-12-2026</td>
                    <td>₱800</td>
                    <td>Cash</td>
                    <td>Paid</td>
                    <td>
                        <button class="download">
                            Download
                        </button>
                    </td>
                </tr>

                <tr>

                    <td>028</td>
                    <td>04-12-2026</td>
                    <td>₱800</td>
                    <td>QR PH</td>
                    <td>Paid</td>

                    <td>
                        <button class="download">
                            Download
                        </button>
                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>
</body>
</html>
