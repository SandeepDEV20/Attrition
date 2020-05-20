<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Joined Employees</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	
</head>
<body>

	<!-- Navbar -->
	<div class="row">
		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
			<div class="container-fluid">
				<a href="" class="text-white font-weight-bold">Indovision Services Pvt. Ltd.</a>
					<ul class="navbar-nav ml-auto">
						<li class="navbar-item">
							<a href="#about" class="nav-link">Support: support@yourcompany.com </a>
						</li>
						<li class="navbar-item">
							<a href="#products" class="nav-link">Welcome Aman Super Admin</a>
						</li>
						<li class="navbar-item">
							<a href="#contact" class="nav-link">Log Out</a>
						</li>
					</ul>
				</div>
			</nav>
	</div>

	<!-- Heading -->
	<div class="row">
		<div class="container text-center mt-5 pt-3">
			<h2>All Joined Employees List</h2>
		</div>	
	</div>

	<!-- Table -->
	<div class="row">
		<div class="container-fluid">
			<table class="table table-striped w-auto">
				<thead>
					<tr>
						<th>S.No.</th>
						<th>Emp. Code</th>
						<th>Old Indo Code</th>
						<th>Resource Name</th>
						<th>Contact</th>
						<th>Email Id</th>
						<th>Department</th>
						<th>Position Code</th>
						<th>Position Role</th>
						<th>Offered Date</th>
						<th>Joining Date</th>
						<th>Status</th>
						<th>View</th>
						<th>Offer Letter Status</th>
						<th>Appointment Letter Status</th>
						<th>Employee Receiving</th>
						<th>Edit</th>
						<th>Resume</th>
					</tr>
				</thead>
				<?php foreach($data as $rows) { ?>
					<tr>
						<td><?php echo $rows->emp_id ;?></td>
						<td><?php echo $rows->emp_code ;?></td>
						<td><?php echo $rows->old_indocode ;?></td>
						<td><?php echo $rows->resource_name ;?></td>
						<td><?php echo $rows->mobile_number;?></td>
						<td><?php echo $rows->email_id ;?></td>
						<td><?php echo $rows->department ;?></td>
						<td><?php echo $rows->position_code ;?></td>
						<td><?php echo $rows->positionRole ;?></td>
						<td><?php echo $rows->offered_date ;?></td>
						<td><?php echo $rows->joining_date ;?></td>
						<td>JOINED</td>
						<td><i class='fas fa-eye' style='font-size:24px;color:green'></i></td>
						<td><i class='fas fa-times' style='font-size:24px;color:red'></i></td>
						<td><i class='fas fa-check' style='font-size:24px;color:green'></i></td>
						<td><i class='fas fa-eye' style='font-size:24px;color:green'></i></td>
						<td><i class='fas fa-edit' style='font-size:24px;color:green'></i></td>
						<td><i class='fas fa-upload' style='font-size:24px;color:#46acf0'></i></td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>

	<!-- Required files for Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>