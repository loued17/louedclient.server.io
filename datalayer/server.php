<?php 


session_start();
$errors=array();

$mysqli = new mysqli("localhost","root","","sourcecodester_doctordb");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}




if (isset($_POST['Register'])) {

	



	$UserID 	= $mysqli -> real_escape_string($_POST['UserID']);
	$Username 	= $mysqli -> real_escape_string($_POST['Name']);
	$Address 	= $mysqli -> real_escape_string($_POST['Address']);
	$ContactNumber	 = $mysqli -> real_escape_string($_POST['ContactNumber']);
	$Email 		=  $mysqli -> real_escape_string($_POST['Email']);
	$Password 	= $mysqli -> real_escape_string($_POST['password']);
	$Citizenship 	= $mysqli -> real_escape_string($_POST['Citizenship']);
    
   




	if (empty($UserID)) {
	array_push($errors,"UserID is required");
	# code...
}

if (empty($Username)) {
	array_push($errors,"UserName is required");
	# code...
}


if (empty($Address)) {
	array_push($errors,"Address is required");
	# code...
}

if (empty($ContactNumber)) {
	array_push($errors,"Contact Number is required");
	# code...
}


if (empty($Email)) {
	array_push($errors,"Email is required");
	# code...
}

if (empty($Password)) {
	array_push($errors,"Password is required");
	# code...
}

if (empty($Citizenship)) {
	array_push($errors,"Citizenship is required");
	# code...
}







if(count($errors)==0){


	$Password=md5($Password);

	$sql = "INSERT INTO  individual (UserID, Name, Address, ContactNumber, Email, Password,Citizenship) VALUES ('$UserID','$Username','$Address','$ContactNumber','$Email','$Password','$Citizenship') ";
    
   


	if (!$mysqli -> query($sql)) {
  printf("%d Row inserted.\n", $mysqli->affected_rows);
    
 
}
    if(move_uploaded_file($_FILES['']))


  $_SESSION['UserID']=$UserID;
  $_SESSION['success']="you are now logged in";
  header('location:../presentaionlayer/patient/index.php');


}
	


	# code...
}




if (isset($_POST['Login'])) {

		$UserID 	= $mysqli -> real_escape_string($_POST['UserID']);
		$Password 	= $mysqli -> real_escape_string($_POST['Password']);
if (empty($UserID)) {
	array_push($errors,"UserID is required");
	# code...
}
if (empty($Password)) {
	array_push($errors,"Password is required");
	

		# code...
	}


	if (count ($errors)== 0) {

		$Password=md5($Password);
		
	

	$query="SELECT * FROM individual WHERE UserID=('$UserID')AND Password=('$Password')";
	$result=mysqli_query($mysqli,$query);
	if (mysqli_num_rows($result) ==1 )  {
	
	

	
	$_SESSION['UserID']=$UserID;
  	$_SESSION['success']="you are now logged in";
  header('location:../presentaionlayer/patient/index.php');
}  else{
		array_push($errors,"The ID/Password not correct");
		
	}
}
}


	# code...


if (isset($_GET['logout'])) {

	session_destroy();
	usset($_SESSION['UserID']);
	header('location:login.php');
	}


	if (isset($_GET['My info'])) {
	header('location:login.php');
	}



	$userprofile=isset($_SESSION['UserID']);
$query="SELECT * FROM individual WHERE UserID=('$userprofile')";
 $result= mysqli_query($mysqli, $query);
 $col= mysqli_fetch_assoc($result);







		






 if (isset($_POST['Login2'])) {

		$officialID2= $mysqli -> real_escape_string($_POST['officialID']);
		$officialpassword2= $mysqli -> real_escape_string($_POST['officialpassword']);
if (empty($officialID2)) {
	array_push($errors,"Official ID is required");
	# code...
}
if (empty($officialpassword2)) {
	array_push($errors,"Password is required");
	

		# code...
	}


	if (count ($errors)== 0) {

	
		
	

	$queryD="SELECT * FROM official WHERE officialID=('$officialID2')AND password=('$officialpassword2')";
	$resultD=mysqli_query($mysqli,$queryD);
	if (mysqli_num_rows($resultD) ==1 )  {
	
	

	
	$_SESSION['OfficialID']=$officialID2;
  	$_SESSION['success']="you are now logged in";
  	header('location:../presentaionlayer/doctor/index2.php'); 
}  else{
		array_push($errors,"The ID/Password not correct");
		
	}
}
}




$officialprofile=isset($_SESSION['officialID']);
$queryofficial="SELECT * FROM official WHERE officialID=('$officialprofile')";
 $resultofficial= mysqli_query($mysqli, $queryofficial);
 $colD= mysqli_fetch_assoc($resultofficial);


 if (isset($_GET['logout'])) {

	session_destroy();
	usset($_SESSION['UserID']);
	header('location:login.php');
	}




 if (isset($_POST['appointmentHistory'])) {
		  	header('../presentaionlayer/patient/myinfo.php');
			 ?>
		
         	<table class="table2" style="margin-top: -10px">
         	<caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Appointment History</caption>
		<tr>
		<th>OfficialID</th>  ?>
		<th>OfficialName</th>
		<th>Appointment</th>
		<th>Official's Note</th>	


		</tr> 
		
	<?php  
		$sql11="SELECT  * FROM  description,official WHERE descID=('$userprofile') AND officialIDdesc=officialID" ;
		$result11=$mysqli->query($sql11);
		if(mysqli_num_rows($result11)>=1){
			while ($row11=$result11->fetch_assoc()) {

				echo "<tr><td>".$row11['officialID']."</td><td>".$row11['officialname']."</td><td>".$row11['appointment']."</td><td>".$row11['Note']."</td></tr>";
			}


			echo "</table";
	


		}

	}



		  ?>

 </table>



<?php  

if (isset($_POST['Login3'])) {

		$adminID	= $mysqli -> real_escape_string($_POST['adminID']);
		$adminpassword= $mysqli -> real_escape_string($_POST['adminpassword']);
if (empty($adminID)) {
	array_push($errors,"Admin ID is required");
	# code...
}
if (empty($adminpassword)) {
	array_push($errors,"Password is required");
	

		# code...
	}


	if (count ($errors)== 0) {

	
		
	

	$queryA="SELECT * FROM admin WHERE adminID=('$adminID')AND adminpassword=('$adminpassword')";
	$resultA=mysqli_query($mysqli,$queryA);
	if (mysqli_num_rows($resultA) ==1 )  {
	
	

	
	$_SESSION['adminID']=$adminID;
  	$_SESSION['success']="you are now logged in";
  	header('location:../presentaionlayer/admin/index3.php'); 
}  else{
		array_push($errors,"The ID/Password not correct");
		
	}
}
}


	

 if (isset($_POST['sendfeedback'])) {
 $feedback2	= $mysqli -> real_escape_string($_POST['feedx']);




$sqlfeed = "INSERT INTO  feedback (iID,feedback) VALUES ('$userprofile','$feedback2') ";

	if (!$mysqli -> query($sqlfeed)) {
  printf("%d Row inserted.\n", $mysqli->affected_rows);

}


 
}






 $mysqli -> close();



   
 ?>