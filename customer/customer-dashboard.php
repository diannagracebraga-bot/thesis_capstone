<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MitztianPC Customer Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard</title>


    <link rel="stylesheet" href="../css/customer_dashboard.css">
</head>

<body>
     <?php include 'customer_sidebar_header.php'; ?>
    

        
        <div class="content">

            
            <div class="top-section">

                <div class="welcome">
                    <h1>Welcome, Dianna Braga</h1>
                    <p>Account Number: MTZ-10027</p>
                </div>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Method</th>
                        <th>Status</th>
                        <th>SOA</th>
                    </tr>
                </thead>
                <div class="plan-card">
                    <h3>Current Internet Plan</h3>
                    <div class="plan-price">₱800</div>
                    <div class="plan-speed">50 Mbps</div>
                </div>

            </div>

                    <tr>
                        <td>028</td>
                        <td>04-12-2026</td>
                        <td>₱800</td>
                        <td>QR PH</td>
                        <td class="status">Paid</td>
                        <td><button class="download">Download</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
            
            <div class="payment-box">

                <h2>Payment History</h2>

                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Amount</th>
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
                            <td class="status">Paid</td>
                            <td>
                                <button class="download">Download</button>
                            </td>
                        </tr>

                        <tr>
                            <td>028</td>
                            <td>04-12-2026</td>
                            <td>₱800</td>
                            <td>QR PH</td>
                            <td class="status">Paid</td>
                            <td>
                                <button class="download">Download</button>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</div>

</body>
</html>