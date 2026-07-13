<?php
include '../database/database_connection.php';

$customer_id = 1;

$query = "SELECT * FROM ticket_tbl WHERE customer_id = $customer_id ORDER BY date_submitted DESC";
$result = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Tickets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/customer_sidebar_header.css?v=4">
    <link rel="stylesheet" href="../css/customer_ticket.css?v=3">
</head>
<body>
<?php include 'customer_sidebar_header.php'; ?>

    <main class="ticket-content">
        <div class="ticket-section">
            <h2>My Tickets</h2>
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
                    <?php while ($ticket = mysqli_fetch_assoc($result)): ?>
<tr>
    <td>Ticket #<?php echo $ticket['ticket_id']; ?></td>
    <td><?php echo $ticket['concern']; ?></td>
    <td><?php echo $ticket['date_submitted']; ?></td>
    <td><?php echo $ticket['priority']; ?></td>
    <td><?php echo $ticket['status']; ?></td>
    <td><button class="view-btn">View</button></td>
</tr>
<?php endwhile; ?>


                </tbody>

            </table>

        </div>

    </main>

</body>
</html>
