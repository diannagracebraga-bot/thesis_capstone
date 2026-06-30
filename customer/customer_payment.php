<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Payment</title>
    <link rel="stylesheet" href="payment.css">
</head>

<body>


<div class="sidebar">

    <div class="logo">
        <img src="C:\Users\MWBPI-HP-25-14\Documents\GitHub\thesis_capstone\images\bg_logo.png" alt="Logo">
    </div>

    <ul>
        <li><a href="dashboard.html">Dashboard</a></li>
        <li class="active"><a href="payment.html">Payment</a></li>
        <li><a href="support.html">Support</a></li>
        <li><a href="ticket.html">Ticket</a></li>
        <li><a href="profile.html">Profile</a></li>
    </ul>

</div>


<div class="main">

    
    <div class="navbar">
        <div class="user">Customer</div>
    </div>

    
    <div class="content">

        <h1>Payment Centerr</h1>

        
        <div class="payment-container">

            <div class="payment-form">

                <h2>Online Payment</h2>

                <label>Account Number</label>
                <input type="text" placeholder="Enter Account Number">

                <label>Amount</label>
                <input type="number" placeholder="Enter Amount">

                <label>Payment Method</label>
                <select>
                    <option>QR PH</option>
                    <option>Cash</option>
                </select>

                <label>Reference Number</label>
                <input type="text" placeholder="Enter Reference Number">

                <button class="confirm-btn">Confirm Payment</button>

            </div>

        
            <div class="qr-section">

                <h2>Scan QR Payment</h2>

                <div class="qr-box">
                    QR CODE
                </div>

                <p>Scan using GCash / Maya / Banking App</p>

            </div>

        </div>

        
        <div class="history">

            <h2>Recent Transactions</h2>

            <table>

                <thead>
                    <tr>
                        <th>Transaction ID</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Method</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>PAY001</td>
                        <td>06-20-2026</td>
                        <td>₱800</td>
                        <td>QR PH</td>
                        <td class="paid">Paid</td>
                    </tr>

                    <tr>
                        <td>PAY002</td>
                        <td>05-20-2026</td>
                        <td>₱800</td>
                        <td>Cash</td>
                        <td class="paid">Paid</td>
                    </tr>
                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>