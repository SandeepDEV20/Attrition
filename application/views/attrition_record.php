<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Attrition Record</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
			<h2> Attrition Record </h2>
		</div>	
	</div>

	<!-- Submit Info -->
	<?php 
		$sessioncompname = $this->session->userdata('mc_name');
		$sessioncompyear = $this->session->userdata('year');
	?>
	<?php

	echo "<div class='container'";
	echo "<pre>";
	print_r($joinemp);
	print_r($resemp);
	echo "</pre>";
	echo "</div>";


	 foreach ($joinemp as $row) {
print_r($row);
}?>
	<div class="row">
		<div class="container text-center">
			<h5>Attrition record of <?php echo $sessioncompname;?> in <?php echo $sessioncompyear;?></h5>
		</div>
	</div>



<?php 
foreach ($resemp as $rows) {
print_r($rows);
}

?>

	<!-- Table -->
	<div class="row">
		<div class="container-fluid">
			<table class="table table-striped table-bordered" id="test">
				<thead>
					<tr class="text-center">
						<th rowspan="2" class="align-middle">Department</th>
						<th rowspan="2" class="align-middle">Opening Headcount</th>
						<th colspan="2">Jan</th>
						<th colspan="2">Feb</th>
						<th colspan="2">Mar</th>
						<th colspan="2">Apr</th>
						<th colspan="2">May</th>
						<th colspan="2">Jun</th>
						<th colspan="2">Jul</th>
						<th colspan="2">Aug</th>
						<th colspan="2">Sep</th>
						<th colspan="2">Oct</th>
						<th colspan="2">Nov</th>
						<th colspan="2">Dec</th>
						<th rowspan="2" class="align-middle">Total Resigned</th>
						<th rowspan="2" class="align-middle">Total Employed</th>
						<th rowspan="2" class="align-middle">Attrition Rate(%)</th>
					</tr>
					<tr>
						<th>Resigned</th>
						<th>Joined</th>
						<th>Resigned</th>
						<th>Joined</th>
						<th>Resigned</th>
						<th>Joined</th>
						<th>Resigned</th>
						<th>Joined</th>
						<th>Resigned</th>
						<th>Joined</th>
						<th>Resigned</th>
						<th>Joined</th>
						<th>Resigned</th>
						<th>Joined</th>
						<th>Resigned</th>
						<th>Joined</th>
						<th>Resigned</th>
						<th>Joined</th>
						<th>Resigned</th>
						<th>Joined</th>
						<th>Resigned</th>
						<th>Joined</th>
						<th>Resigned</th>
						<th>Joined</th>
					</tr>
				</thead>
				<?php 
				foreach ($data2 as $row) {
					?>
				<tr>
					
					<td><?php echo $row->md_name;?></td>
					<td>-</td>
					<?php for($i=0; $i<20; $i+=2){?>
						<td><?php echo $i;?></td>
				<?php }?>
				</tr>
				<?php } ?>
			</table>

