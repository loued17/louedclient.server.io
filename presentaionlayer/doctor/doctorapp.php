<?php include '../../datalayer/bookserver.php '; ?>
<!DOCTYPE html>
<html>
<head>
	<title>BRGY. Officials</title>
	<link rel="stylesheet"  href="style3.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>BRGY. Officials</h1>
		<nav>
		


		
		<ul> 
			
		
			<li><a href="index2.php">My Info</a></li>
			<li><a href="doctorapp.php">My Appointments</a></li>
			<li><a href=" searchpatient.php">Search Individual</a></li>
			<li><a href="add.php">Add Description</a></li>
			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>



	
			

		</ul>
		



	</nav>




</header>

<body>
	<h1 class="my1">My<span class="mys">Appointments</span></h1>

	<table class="table2">
		<tr>
		<th>Appointment ID</th>
		<th>DATE</th>
		<th>TIME</th>
		<th>Individual ID</th>
		<th>Individual Name</th>
		<th>Individual Address</th>
		<th>Individual Email</th>
		<th>Individual ContactNumber</th>


		

		</tr>
		<?php $sqldoc="SELECT  * FROM bookapp , individual   WHERE offID=('$officialprofile') AND  individualID=UserID "  ;
		$resultdoc=$mysqli->query($sqldoc);
		if(mysqli_num_rows($resultdoc)>= 1){
			while ($rowdoc=$resultdoc->fetch_assoc()) {

				echo "<tr><td>".$rowdoc["AppoID"]."</td><td>".$rowdoc["Date"]."</td><td>".$rowdoc["Time"]."</td><td>".$rowdoc["UserID"]."</td><td>".$rowdoc['Name']."</td><td>".$rowdoc['Address']."</td><td>".$rowdoc['Email']."</td><td>".$rowdoc["ContactNumber"]."</td><td>".$rowdoc["Citizenship"]."</td></tr>";
			}


			echo "</table";
	


		}

		?>
		
	</table>





</body>
</html>

