<?php

function check_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if(!empty($_POST['userFirstName']) && !empty($_POST['userLastName'])){
	$userFirstName = check_input($_POST['userFirstName']);
	$userLastName = check_input($_POST['userLastName']);
	
	$userEmail = check_input($_POST['userEmail']);
	
	$userPassword = check_input($_POST['userPassword']);
	
	$birthDate = check_input($_POST['birthDate']);
	
	$userGender = check_input($_POST['userGender']);
	
	$userAddress = check_input($_POST['userAddress']);
	
	$userSchool = check_input($_POST['userSchool']);
	
	$fileToUpload = check_input($_POST['fileToUpload']);


}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="assets/css/signup_style.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Sign Up</title>
	<script>
		function myFunction() {
			var x = document.getElementById("myNavBar");
			if (x.className === "navbar") {
				x.className += " responsive";
			} else {
				x.className = "navbar";
			}
		}

	</script>
</head>

<body>
	<div class="navbar" id="myNavBar">
		<img class="logo" alt="Worksew Logo" src="../assets/images/logo_optimized.png" width="100">
		<div class="floatNav">
			<a href="#">Sign In</a>
			<a href="signup.html" class="active">Sign up</a>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
		</div>
	</div>




</body>

</html>
