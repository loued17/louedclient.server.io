<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Individuals</title>
	<link rel="stylesheet"  href="style2.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>Individuals</h1>
		<nav>
		


		
		<ul> 
			
		
			<li><a href=" index.php">MyInfo</a></li>
			<li><a href=" book.php">Book Appointment</a></li>
			<li><a href=" view.php">View Appointment</a></li>
			<li><a href=" cancel.php">Cancel Booking</a></li>
			<li><a href="searchdoctor.php">Search Official</a></li>
			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>
			



	
			

		</ul>
		



	</nav>




</header>

<body>


	
<form method="post" action="searchdoctor.php">

	<?php include ('../../datalayer/errors.php') ;?>

	<div class="input-group">
		<label style="font-weight: bold;">Search By:<br>*Official ID<br>*Official Name<br>*Categorey</label>
		<input type="text" name="iID" >

	</div>

	<div class="input-group">
		<button type="submit" name="Search" class="btn">Search</button>
	</div>

	







		</form>
	</form>


	

		<?php 

         if (isset($_POST['Search'])) {

         ?>	<table class="table2">
		<tr>
		<th>BRGY. Official ID</th>
		<th>BRGY. Official Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Category</th>

		</tr> <?php  


		$iID =$mysqli -> real_escape_string($_POST['iID']);

		$sql6="SELECT  * FROM  official WHERE officialname=('$iID') OR officialID=('$iID') OR categorey=('$iID')" ;
		$result6=$mysqli->query($sql6);
		if(mysqli_num_rows($result6)==1){
			while ($row6=$result6->fetch_assoc()) {

				echo "<tr><td>".$row6["officialID"]."</td><td>".$row6["officialname"]."</td><td>".$row6["Address"]."</td><td>".$row6["ContactNumber"]."</td><td>".$row6['categorey']."</td></tr>";
			}


			echo "</table";
	


		}
	}?>
 </table>
				
	


</body>
</html>


