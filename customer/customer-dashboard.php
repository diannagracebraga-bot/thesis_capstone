<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MitztianPC Customer Dashboard</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: 'Segoe UI', sans-serif;
}

body{
    display:flex;
    background:#f4f6f9;
}

.sidebar{
    width:240px;
    height:100vh;
    background:#ffffff;
    padding:30px 20px;
    box-shadow:2px 0 10px rgba(0,0,0,0.08);
}

.logo{
    text-align:center;
    margin-bottom:40px;
}

.logo img{
    width:80px;
    height:80px;
    border-radius:50%;
}

.sidebar ul{
    list-style:none;
}

.sidebar ul li{
    margin:10px 0;
}

.sidebar ul li a{
    display:block;
    text-decoration:none;
    color:black;
    padding:15px;
    border-radius:8px;
    transition:0.3s;
    font-size:16px;
    font-weight:500;
}

.sidebar ul li a:hover{
    background:#e3f2fd;
}

.sidebar ul li.active a{
    background:#0d47a1;
    color:white;
}

.main{
    flex:1;
}

.navbar{
    background:#0d47a1;
    height:70px;
    display:flex;
    justify-content:flex-end;
    align-items:center;
    padding:0 30px;
}

.user{
    background:white;
    padding:8px 20px;
    border-radius:6px;
    font-weight:bold;
}

.content{
    padding:35px;
}

.top-section{
    display:flex;
    justify-content:space-between;
    margin-bottom:30px;
}

.welcome h1{
    font-size:32px;
    margin-bottom:10px;
}

.welcome p{
    font-size:18px;
    color:#666;
}

.plan-card{
    width:250px;
    background:white;
    padding:20px;
    border-radius:10px;
    box-shadow:0 2px 10px rgba(0,0,0,.08);
    text-align:center;
}

.plan-card h3{
    color:#0d47a1;
    margin-bottom:15px;
}

.plan-price{
    font-size:30px;
    font-weight:bold;
}

.plan-speed{
    color:#666;
    margin-top:8px;
}

.payment-box{
    background:white;
    padding:25px;
    border-radius:10px;
    box-shadow:0 2px 10px rgba(0,0,0,.08);
}

.payment-box h2{
    margin-bottom:20px;
}

table{
    width:100%;
    border-collapse:collapse;
}

th{
    background:#f4b400;
    padding:14px;
}

td{
    padding:14px;
    border-bottom:1px solid #ddd;
    text-align:center;
}

.status{
    color:green;
    font-weight:bold;
}

.download{
    background:#2e7d32;
    color:white;
    border:none;
    padding:7px 14px;
    border-radius:20px;
    cursor:pointer;
}

.actions{
    margin-top:30px;
    display:flex;
    gap:20px;
}

.card{
    flex:1;
    background:white;
    padding:20px;
    border-radius:10px;
    box-shadow:0 2px 10px rgba(0,0,0,.08);
    text-align:center;
}

.card h3{
    margin-bottom:10px;
}

.card button{
    margin-top:10px;
    background:#0d47a1;
    color:white;
    border:none;
    padding:10px 15px;
    border-radius:6px;
    cursor:pointer;
}
</style>

</head>
<body>

<div class="sidebar">
    
    <div class="logo">
        <img src="C:\Users\MWBPI-HP-25-14\Documents\GitHub\thesis_capstone\images\bg_logo.png" alt="Logo">
    </div>

    <ul>
        <li class="active"><a href="dashboard.html">Dashboard</a></li>
        <li><a href="payment.html">Payment</a></li>
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

        <div class="top-section">

            <div class="welcome">
                <h1>Welcome, Dianna Braga</h1>
                <p>Account Number: MTZ-10027</p>
            </div>

            <div class="plan-card">
                <h3>Current Internet Plan</h3>
                <div class="plan-price">₱800</div>
                <div class="plan-speed">50 Mbps</div>
            </div>

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
                        <td><button class="download">Download</button></td>
                    </tr>

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


    </div>
</div>

</body>
</html>