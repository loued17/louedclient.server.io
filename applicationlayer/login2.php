<?php include('../datalayer/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>BRGY. Official</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body class="Dbody">
	<div class="Dheader">
	<h2>BRGY. Officials Login</h2>
</div>

<form method="post" action="login2.php" class="Dform">

	<?php include ('../datalayer/errors.php')?>

	<div class="input-groupD">
		<label>BRGY. Official ID</label>
		<input type="text" name="officialID">

	</div>




	<div class="input-groupD">
		<label>Password</label>
		<input type="Password" name="officialpassword">



	<div class="input-groupD">
		<button type="submit" name="Login2" class="btnD"> Login</button>
	</div>

	
	




</form>

</body>
</html>