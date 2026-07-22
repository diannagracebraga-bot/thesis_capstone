<?php
include '../database/database_connection.php';

if(isset($_POST['register'])){
    $id=$_POST['account_number'];
    $email=$_POST['email_address'];
    $password=password_hash($_POST['password'],PASSWORD_DEFAULT);
    $check=mysqli_query($conn,"SELECT * FROM user_accounts_tbl WHERE email='$email'");

    if(mysqli_num_rows($check)>0){
        echo "<script> alert('Email already Exists');
        window.location='admin_add_customer.php'; </script>";
    exit();
}
$sql="INSERT INTO customer_tbl
(id, email, password, f_name, m_name, l_name, age, sex, civil_status,
 birth_date, barangay, subdivision, street, house_name, internet_plan, connection_status)
 VALUES ('$fname', '$mname', '$lname', '$age', '$sex', '$civil',
'$birth','$barangay', '$subdivision', '$street', '$house', '$plan','$status')";

    $check = mysqli_query($conn, "SELECT * FROM customer_tbl WHERE email_address = '$email' OR username = '$email'");

    if (mysqli_num_rows($check) > 0) {
        echo "<script>alert('Email already exists'); window.location='../admin/admin_user_management.php?page=add_customer';</script>";
        exit();
    }

    $sql = "INSERT INTO customer_tbl
        (customer_id, email_address, first_name, middle_name, last_name, birth_date, age, sex, address, contact_number, civil_status, barangay, subdivision, street, house_number, internet_plan_id, username, password, role, status)
        VALUES
        ('$id', '$email', '$fname', '$mname', '$lname', '$birth', '$age', '$sex', '$address', '$contact', '$civil', '$barangay', '$subdivision', '$street', '$house', '$plan', '$email', '$password', '$role', '$status')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Customer Registered Successfully'); window.location='../admin/admin_user_management.php';</script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>
