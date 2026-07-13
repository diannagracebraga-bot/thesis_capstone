<?php
include '../database/database_connection.php';

if(isset($_POST['register'])){
    $idt=$_POST['id'];
    $email=$_POST['email'];
    $password=password_hash($_POST['password'],PASSWORD_DEFAULT);
    $fname=$_POST['f_name'];
    $mname=$_POST['m_name'];
    $lname=$_POST['l_name'];
    $contactnumber=$_POST['contact_number'];
    $age=$_POST['age'];
    $sex=$_POST['sex'];
    $civil=$_POST['civil_status'];
    $birth=$_POST['birth_date'];
    $barangay=$_POST['barangay'];
    $house=$_POST['house_number'];
    $subdivision=$_POST['subdivision'];
    $street=$_POST['street'];
    $plan=$_POST['internet_plan'];
    $status=$_POST['connection_status'];
    $check=mysqli_query($conn,"SELECT * FROM customer_tbl WHERE email='$email'");

    if(mysqli_num_rows($check)>0){
        echo "<script> alert('Email Already Exists');
        window.location='admin_add_customer.php'; </script>";
    exit();
}
$sql="INSERT INTO login_tbl
(id, email, password, f_name, m_name, l_name, age, sex, civil_status,
 birth_date, barangay, subdivision, street, house_name, internet_plan, connection_status)
 VALUES ( '$id', '$email', '$password', '$fname', '$mname', '$lname', '$age', '$sex', '$civil',
'$birth'.'$barangay', '$subdivision', '$street', '$house', '$plan','$status')";

if(mysqli_query($conn,$sql)){
    echo "<script> alert('Customer Registered Successfully');
    window.location='../admin/admin_user_management.php'; </script>";
    }else{
        echo mysqli_error($conn);
}
}
?>