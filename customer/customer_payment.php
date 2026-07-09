<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Payment</title>
    <link rel="stylesheet" href="../css/customer_sidebar_header.css?v=4">
    <link rel="stylesheet" href="../css/customer_payment.css?v=5">
</head>

<body>
    <?php include 'customer_sidebar_header.php'; ?>

    <div class="content">
<<<<<<< HEAD
        <div class="payment-container">

        
            <div class="qr-section">
=======
        <h1>Payment Center</h1>

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
>>>>>>> ccd9d295575c7bde5e55814dc40a39372630e2cd

            <div class="qr-section">
                <h2>Scan QR Payment</h2>

                <div class="qr-box">
<<<<<<< HEAD
                   <img src="../images/qrph.jfif" alt="qrph">
                </div>
=======
                    QR CODE
                </div>

>>>>>>> ccd9d295575c7bde5e55814dc40a39372630e2cd
                <p>Scan using GCash / Maya / Banking App</p>
            </div>
        </div>

<<<<<<< HEAD
            

       
      
=======
        <div class="history">
            <h2>Recent Transactions</h2>

            <table>
                <thead>
                    <tr>
                        <th>Transactions ID</th>
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
>>>>>>> ccd9d295575c7bde5e55814dc40a39372630e2cd
        </div>
    </div>
</body>
</html>

