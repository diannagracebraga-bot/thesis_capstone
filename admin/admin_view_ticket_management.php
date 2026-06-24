<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/admin_sidebar_topbar_searchbar_profile_icon.css">
    <link rel="stylesheet" href="../css/admin_view_ticket_management.css">
    <title>MITZTIANPC WIRED INTERNET SERVICES</title>
</head>
<body>

    <?php include 'admin_sidebar_header_profile.php'; ?>
  <h1>User Management Tracking</h1>
<div class="ticket_container">

    <div class="container">

        <div class="top-section">
          <form method="POST">
    <div class="status">
        <label>Status</label>

        <select name="status">
            <option value="Ongoing">Ongoing</option>
            <option value="Resolved">Resolved</option>
            <option value="Pending">Pending</option>
        </select>
    </div>
             <div class="status">
        <label>Priority</label>

        <select name="priority">
            <option value="Urgent">Urgent</option>
            <option value="Resolved">Resolved</option>
            <option value="Pending">Pending</option>
        </select>
    </div>

    <div class="action"><br>
        <label>Action</label>
        <button type="submit" class="action-btn">Update</button>
    </div>
</form>
        </div>

        <div class="customer_details">
            <label>Customer Details:</label>
                <textarea readonly>
                </textarea>
            
        </div>

              <div class="ticket_details">
            <label>Ticket Details:</label>
                <textarea readonly>
                </textarea>
            
        </div>
        <div class="customer_concern_description">
            <label>Description:</label>
                <textarea readonly>
</textarea>
                        </div>

    </div>
</div>
</body>
</html>