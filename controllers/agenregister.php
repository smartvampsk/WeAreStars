<?php
	$msg = ''; 
	if (isset($_POST['register'])) {
		$password = $_POST['password'];
		$confPassword = $_POST['confPassword'];
		if ($password != $confPassword) {
			$msg = "Password don't match. Please Try again!";
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
				header('refresh:5;url=agenregister');
			}			
		}
	}
	
	$templateVars = [
		'msg' => $msg
	];

	$title = 'We Are Stars - Agency Register';
	$pagename = 'Agency Register';
	$content = loadTemplate('../views/agency_register_design.php', $templateVars);
?>