
<?php
include '../database/database_connection.php';

$customer_id = 1;

$query = "SELECT * FROM ticket_management_tbl WHERE customer_id = $customer_id ORDER BY date_received DESC, ticket_id DESC";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Ticket query failed: " . mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Tickets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/customer_sidebar_header.css?v=4">
    <link rel="stylesheet" href="../css/customer_ticket.css?v=5">
</head>
<body>
<?php include 'customer_sidebar_header.php'; ?>

    <main class="ticket-content">
        <div class="ticket-section">
            <h2>My Tickets</h2>
            <table>
                <thead>
                    <tr>
                        <th>Ticket ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Concern Type</th>
                        <th>Date Received</th>
                         <th>Status</th>
                         <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php while ($ticket = mysqli_fetch_assoc($result)): ?>
<tr>
<td><?php echo $ticket['ticket_id']; ?></td>
<td><?php echo $ticket['full_name']; ?></td>
<td><?php echo $ticket['email_address']; ?></td>
<td><?php echo $ticket['contact_number']; ?></td>
<td><?php echo $ticket['concern_type']; ?></td>
<td><?php echo $ticket['date_received']; ?></td>
<td><?php echo $ticket['status']; ?></td>
<td><button class="view-btn">View</button></td>
</tr>
<?php endwhile; ?>


                </tbody>

            </table>

        </div>

    </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


