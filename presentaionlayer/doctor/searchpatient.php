<?php include '../../datalayer/bookserver.php'; ?>
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


	
<form method="post" action="searchpatient.php" class="individualsearch">

	<?php include ('../../datalayer/errors.php') ;?>

	<div class="input-group">
		<label style="font-weight: bold; font-size: 30px">Search By:</label>
		<label style="font-weight: bold">*Individual ID</label>
		<label style="font-weight: bold">*Individual Name</label>
		<input type="text" name="IID" >

	</div>

	<div class="input-group">
		<button type="submit" name="SearchP" class="btn">Search</button>
	</div>

	
		</form>
	</form>

		<?php 

         if (isset($_POST['SearchP'])) {

         ?>	
         <table class="table3" >
         	<caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Individuals Information</caption>

		<tr>
		<th>Individual ID</th>
		<th>Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Email</th>
		<th>Citizenship</th>


		</tr> <?php  


		$IID =$mysqli -> real_escape_string($_POST['IID']);

		$sqlP="SELECT  * FROM  individual  WHERE 	UserID=('$IID') OR Name=('$IID') " ;
		$resultP=$mysqli->query($sqlP);
		if(mysqli_num_rows($resultP)==1){
			while ($rowP=$resultP->fetch_assoc()) {

				echo "<tr><td>".$rowP["UserID"]."</td><td>".$rowP["Name"]."</td><td>".$rowP["Address"]."</td><td>".$rowP["ContactNumber"]."</td><td>".$rowP['Email']."</td><td>".$rowP['Citizenship']."</td></tr>";
			}


			echo "</table";
	


		}
	}
	?>
 </table>
		<!-- <?php 	
				 if (isset($_POST['SearchP'])) {

         ?>	<table class="table2">
         	<caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Treatment History</caption>>
		<tr>
		<th>PatientID</th>
		<th>PatientName</th>
		<th>Treatment</th>
		<th>Doctor's Note</th>	


		</tr> <?php  


		$PID =$mysqli -> real_escape_string($_POST['PID']);

		$sqlP2="SELECT  * FROM  description   WHERE descID=('$PID') OR descName=('$PID') " ;
		$resultP2=$mysqli->query($sqlP2);
		if(mysqli_num_rows($resultP2)>1){
			while ($rowP2=$resultP2->fetch_assoc()) {

				echo "<tr><td>".$rowP2["descID"]."</td><td>".$rowP2["descName"]."</td><td>".$rowP2["treatment"]."</td><td>".$rowP2['Note']."</td></tr>";
			}


			echo "</table";
	


		}
	}?>
 </table>
	-->

</body>
</html>


