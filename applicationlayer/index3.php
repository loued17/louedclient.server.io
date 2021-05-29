<?php include ('bookserver.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="style5.css" type="text/css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>Admin</h1>
		<nav>
		


		
		<ul> 
			
		
			<li><a href="index3.php">Add/Delete BRGY. Official</a></li>
			<li><a href="viewdoctor.php">View BRGY. Official</a></li>
			<li><a href=" viewpatients.php">View Individual</a></li>
			<li><a href="viewappointments.php">View Appointments</a></li>
			<li><a href="feedback.php">FeedBack</a></li>

  			<li><a href="Doctorpatient.php">Logout</a></li>

			



	
			

		</ul>
		



	</nav>




</header>
<body>

		<div class="headerA">
	<h2>Add BRGY. Official</h2>
</div>

<form method="post" action="index3.php">

	<?php include ('errors.php'); ?>

	<div class="input-groupA">
		<label>BRGY. Official ID</label>
		<input type="text" name="addID" >

	</div>


	<div class="input-groupA">
		<label>Officer Name</label>
		<input type="text" name="addname" >


	</div>

	<div class="input-groupA">
		<label>Address</label>
		<input type="text" name="addAddress">

	</div>

	<div class="input-groupA">
		<label>Contact Number</label>
		<input type="text" name="addContactNumber">


	</div>


	<div class="input-groupA">
		<label>Email address</label>
		<input type="text" name="addEmail">

	</div>

	<div class="input-groupA">
		<label>Password</label>
		<input type="text" name="addpassword">

	</div>
<div class="input-groupA">
	<label>Category</label>
	   	<select name="addcategory" class="xd">
	   		<option value="Cedula" >Cedula</option>
	   		<option value="clearance">clearance</option>
	   		<option value="Certificate">Certificate</option>
	   		<option value="Payments">Payments</option>
	   		<option value="Others">Others</option>

	   		


	   	</select>
	   	</div>

	<div class="input-groupA">
		<button type="submit" name="Add" class="btnA">Add BRGY. Officials</button>
	</div>


	




</form>
	<div class="headerAD">
	<h2>Delete BRGY. Officials</h2>
</div>

<form method="post" action="index3.php" class="delete">

	<div class="input-groupA">
		<label>BRGY. Officials ID</label>
		<input type="text" name="deleteID" >

	</div>

	<div class="input-groupA">
		<button type="submit" name="Delete" class="btnA">Delete</button>
	</div>

</form>





	

</body>
</html>