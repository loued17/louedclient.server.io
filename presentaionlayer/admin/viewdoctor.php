<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="style5.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>Admin</h1>
		<nav>
		


		
		<ul> 
			
		
		
			<li><a href="index3.php">Add/Delete BRGY. Officials</a></li>
			<li><a href="viewdoctor.php">View BRGY. Officials</a></li>
			<li><a href=" viewpatients.php">View Individuals</a></li>
			<li><a href="viewappointments.php">View Appointments</a></li>
						<li><a href="feedback.php">FeedBack</a></li>


			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>

			


	
			

		</ul>
		



	</nav>




</header>

<body>
	<h1 style="margin-left:35% ;margin-top:80px"   class="asd">Doctors Information</h1>
	<table class="table4">
		<tr>
		<th>BRGY. Official ID</th>
		<th>BRGY. Official Name</th>
		<th>Email</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Password</th>
		<th>Category</th>

		</tr>

		<?php $sql3="SELECT  * FROM  official " ;
		$result3=$mysqli->query($sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["officialID"]."</td><td>".$row3["officialname"]."</td><td>".$row3["email"]."</td><td>".$row3["Address"]."</td><td>".$row3['ContactNumber']."</td><td>".$row3['password']."</td><td>".$row3["categorey"]."</td></tr>";
			}


			echo "</table";
	


		}

		?>
		
	</table>
</body>
</html>