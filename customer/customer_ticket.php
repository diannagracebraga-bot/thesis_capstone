<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Tickets</title>
    <link rel="stylesheet" href="../css/customer_ticket.css">
</head>
<body>
<?php include 'customer_sidebar_header.php'; ?>


        
        <div class="content">

            <h1>My Tickets</h1>

            <div class="table-container">

                <table>

                    <thead>
                        <tr>
                            <th>Ticket Number</th>
                            <th>Concern</th>
                            <th>Date Submitted</th>
                            <th>Priority</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>Ticket #11</td>
                            <td>Internet Connection</td>
                            <td>04-23-2026</td>
                            <td>Urgent</td>
                            <td>Ongoing</td>
                            <td>
                                <button class="view-btn">View</button>
                            </td>
                        </tr>

                        <tr>
                            <td>Ticket #09</td>
                            <td>Billing</td>
                            <td>02-12-2026</td>
                            <td>Minor</td>
                            <td>Solved</td>
                            <td>
                                <button class="view-btn">View</button>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</body>
</html>