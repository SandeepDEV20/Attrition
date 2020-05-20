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

	<!-- Dropdown Menu -->
	<div class="row">
	<div class="container text-center pt-5"> 
		<form method="post" action="<?php echo base_url().'Attritioncontrol/compyearsubmit';?>">
			<div class="form-group row">
		        <label class="col-sm-3 form-control-lable">Company Name:</label>
			    <div class="col-sm-6"><select name="compname" class="form-control" required>
			    	<?php foreach ($data as $rows) {?>
			        	<option><?php echo $rows->mc_name?></option> 
			        <?php }?>
			        </select> 
			    </div>	
			</div>
			<div class="form-group row">
				<label class="col-sm-3 form-control-lable">Year:</label>
			    <div class="col-sm-6"><select name="year" class="form-control" required>
			    	<option value="2020">2020</option>
			        <option value="2019">2019</option>
			        <option value="2018">2018</option>
			        <option value="2017">2017</option>   
			        </select>
			    </div>
			</div>
			<input class="btn btn-primary" name="submit-data" type="submit" value="Submit">
		</form>
	</div>
	</div>

	<!-- Required files for Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>