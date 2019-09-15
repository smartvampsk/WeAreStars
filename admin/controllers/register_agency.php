<?php
	$msg = ''; 
	if (isset($_POST['register'])) {
		$password = $_POST['password'];
		$confPassword = $_POST['confPassword'];

		if ($password != $confPassword) {
			$msg = "Password don't match. Please Try again!";
		}
		if (strlen($_POST['contact'])<10 && strlen($_POST['contact'])>10 && !is_numeric($_POST['contact'])) {
			$msg = "contact is less than or more than 10 digits.";
		}
		else{
			$stmt = $pdo->prepare("INSERT INTO customer(agency_name, email, contact, address, skills, membership, member_type, username, password)
				VALUES(:agency_name, :email, :contact, :address, :skills, :membership, '2', :username, :password)");
			$criteria = [
				'agency_name' => $_POST['agency_name'],
				'email' => $_POST['email'],
				'contact' => $_POST['contact'],
				'address' => $_POST['address'],
				'skills' => $_POST['skills'],
				'membership' => $_POST['membership'],
				'username' => $_POST['username'], 
				'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
			];
			$stmt->execute($criteria);
			if ($stmt == true) {
				$msg = "Agency Registered Successfully";
				header('refresh:5;url=register_agency');
			}			
		}
	}
	
	$templateVars = [
		'msg' => $msg
	];
	
	$title = 'We Are Stars - Register Agency';
	$pagename = 'Register Agency';
	$content = loadTemplate('../views/register_agency_design.php', $templateVars);
?>