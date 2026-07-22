<?php
include '../database/database_connection.php';

<<<<<<< HEAD
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
=======
if (isset($_POST['register'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id'] ?? $_POST['account_number'] ?? '');
    $email = mysqli_real_escape_string($conn, $_POST['email'] ?? $_POST['email_address'] ?? '');
    $password_raw = $_POST['password'] ?? '';
    $password = password_hash($password_raw, PASSWORD_DEFAULT);
    $fname = mysqli_real_escape_string($conn, $_POST['f_name'] ?? $_POST['first_name'] ?? '');
    $mname = mysqli_real_escape_string($conn, $_POST['m_name'] ?? $_POST['middle_name'] ?? '');
    $lname = mysqli_real_escape_string($conn, $_POST['l_name'] ?? $_POST['last_name'] ?? '');
    $contact = mysqli_real_escape_string($conn, $_POST['contact_number'] ?? '');
    $age = mysqli_real_escape_string($conn, $_POST['age'] ?? '');
    $sex = mysqli_real_escape_string($conn, $_POST['sex'] ?? $_POST['gender'] ?? '');
    $civil = mysqli_real_escape_string($conn, $_POST['civil_status'] ?? '');
    $birth = mysqli_real_escape_string($conn, $_POST['birth_date'] ?? '');
    $barangay = mysqli_real_escape_string($conn, $_POST['barangay'] ?? '');
    $subdivision = mysqli_real_escape_string($conn, $_POST['subdivision'] ?? '');
    $street = mysqli_real_escape_string($conn, $_POST['street'] ?? '');
    $house = mysqli_real_escape_string($conn, $_POST['house_number'] ?? $_POST['house_name'] ?? '');
    $role = mysqli_real_escape_string($conn, $_POST['role'] ?? 'Customer');
    $plan = mysqli_real_escape_string($conn, $_POST['internet_plan'] ?? '');
    $status = mysqli_real_escape_string($conn, $_POST['connection_status'] ?? 'Connected');

    $address_parts = array_filter([$house, $street, $subdivision, $barangay]);
    $address = mysqli_real_escape_string($conn, implode(', ', $address_parts));
>>>>>>> ac97d6c04cbf26442dd2c4804a9776ed1cff1dde

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
