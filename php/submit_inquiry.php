<?php
include '../database/database_connection.php';

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$contact = mysqli_real_escape_string($conn, $_POST['contact']);
$description = mysqli_real_escape_string($conn, $_POST['description']);
$date = date("Y-m-d H:i:s");
$status = "Pending";

$sql = "INSERT INTO inquiries_tbl
(full_name, email_address, date_received, contact_number, description, status)
VALUES
('$name', '$email', '$date','$contact', '$description', '$status')";

if(mysqli_query($conn, $sql)){
    echo "<script>  
            alert('Inquiry submitted successfully!');
            window.location='../front_page_menus/inquire.php';
          </script>";
}else{
    echo "Error: " . mysqli_error($conn);
}
?>
