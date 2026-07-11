<?php
include '../database/database_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$last_name = $_POST['last_name'];
$birth_date = $_POST['birth_date'];
$sex = $_POST['sex'];
$contact_number =$_POST['contact_number'];
$barangay = $_POST['barangay'];
$house_number = $_POST['house_number'];
$street = $_POST['street'];
$subdivision = $_POST['subdivision'];
$internet_plan = $_POST['internet_plan'];
$date_received = date("Y-m-d H:i:s");
$status = "Pending";

$sql = "INSERT INTO internet_application_tbl
(first_name, middle_name, last_name, birth_date , sex, contact_number,barangay,house_number, street , subdivision,
internet_plan, date_received, status)
VALUES
('$first_name', '$middle_name', '$last_name','$birth_date','$sex','$contact_number', '$barangay',
'$house_number','$street','$subdivision','$internet_plan','$date_received', '$status')";

if(mysqli_query($conn, $sql)){
    echo "<script>  
            alert('Internet Application submitted successfully!');
            window.location='../index.php';
          </script>";
}else{
    echo "Failed to Submit inquiry " . mysqli_error($conn);
}}
?>



<!DOCTYPE html>
<html>
<head>
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	 <link rel="stylesheet" href="../css/admin_applicants.css">
	 <link rel="stylesheet" href="../css/admin_sidebar_topbar_searchbar_profile_icon.css">
	<title>MITZTIANPC WIRED INTERNET SERVICES</title>
</head>
<body>
	<?php include 'admin_sidebar_header_profile.php'; ?>
	
        <div class="header">
        </div>
        	<h1>USER MANAGEMENT TRACKING</h1>
			<div class = "table-container">
       <div class= "aligned">
			<div class="searchbar-container">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit">Search</button>
		</div>
        </div>
		<br>
				<table class = "table_applicants">
					<thead>
					<tr>
						<th>APPLICANT ID</th>
						<th>FIRST NAME</th>
						<th>MIDDLE NAME</th>
						<th>LAST NAME</th>
						<th>BIRTH DATE</th>
						<th>SEX</th>
						<th>CONTACT NUMBER</th>
						<th>BARANGAY</th>
						<th>HOUSE NUMBER</th>
						<th>STREET</th>
						<th>SUBDIVISION</th>
						<th>INTERNET PLAN</th>
						<th>DATE RECEIVED</th>
						<th>STATUS</th>
						<th>ACTION</th>
					</tr>
					</thead>
			<?php
$sql = "SELECT * FROM internet_application_tbl";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
?>
    <tr>
        <td><?php echo $row['applicant_id']; ?></td>
        <td><?php echo $row['first_name']; ?></td>
		<td><?php echo $row['middle_name']; ?></td>
		<td><?php echo $row['last_name']; ?></td>
        <td><?php echo $row['birth_date']; ?></td>
		<td><?php echo $row['sex']; ?></td>
        <td><?php echo $row['contact_number']; ?></td>
		<td><?php echo $row['barangay']; ?></td>
		<td><?php echo $row['house_number']; ?></td>
		<td><?php echo $row['street']; ?></td>
		<td><?php echo $row['subdivision']; ?></td>
		<td><?php echo $row['internet_plan']; ?></td>
        <td><?php echo $row['date_received']; ?></td>
        <td><?php echo $row['status']; ?></td>
        <td>
            <a href="admin_applicants.php?applicant_id=<?php echo $row['applicant_id']; ?>">
                <button> submit
					</button>
            </a>
        </td> 	
    </tr>
<?php
} 
?>
				</table>
				</div>
			
</body>
</html>