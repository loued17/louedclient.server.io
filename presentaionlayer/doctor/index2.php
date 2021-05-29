<?php include ('../../datalayer/server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>BRGY. Officials</title>
	<link rel="stylesheet"  href="style3.css">
	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<header>
	<h1 >BRGY. Officials</h1>
		<nav>
		<ul > 
			<li><a href="index2.php">MyInfo</a></li>
			<li><a href="doctorapp.php">My Appointments</a></li>
			<li><a href=" searchpatient.php">Search Individuals</a></li>
			<li><a href="add.php">Add Description</a></li>
			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>
		</ul>
	</nav>
</header>
<body >
	<div class="header">
	<h2>My Information</h2>
</div>
<form method="post" action="index2.php" class="info">
<div class="Dcontent">
	<label>ID: <?php echo "" .isset($_SESSION['officialID']);?></label>
	 	   <br>
	 	  			<br>
	 	   <label> Email : <?php echo $colD['Email']; ?></label>
	 	   			<br>
	 	   <br>
	 	   <label> Name : <?php echo $colD['Officialname']; ?></label>
	 	   	 	    <br>
	 	   <br>
	 	   <label> Address : <?php echo $colD['Address']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Contact Number : <?php echo $colD['ContactNumber']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Specialized In : <?php echo $colD['categorey']; ?></label>
	 	   	 	   <br>
	 	   <br>
	
</div>
</form>
</body>
</html>