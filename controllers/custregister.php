<?php 
	$templateVars = [];
	
	$title = 'We Are Stars - Customer Register';
	$pagename = 'Customer Register';
	$content = loadTemplate('../views/customer_register_design.php', $templateVars);
?>

<?php
	$msg = ''; 
	if (isset($_POST['register'])) {
		$password = $_POST['password'];
		$confPassword = $_POST['confPassword'];
		if ($password != $confPassword) {
			$msg = "Password don't match. Please Try again!";
		}
		else{
			$stmt = $pdo->prepare("INSERT INTO customer(firstname, surname, dob, gender, email, contact, address, skills, membership, member_type, username, password)
				VALUES(:firstname, :surname, :dob, :gender, :email, :contact, :address, :skills, :membership, '1', :username, :password)");
			$criteria = [
				'firstname' => $_POST['firstname'],
				'surname' => $_POST['surname'],
				'dob' => $_POST['dob'],
				'gender' => $_POST['gender'],
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
				$msg = "Customer Registered Successfully";
				header('refresh:5;url=custregister');
			}			
		}
	}
	
	$templateVars = [
		'msg' => $msg
	];
	
	$title = 'We Are Stars - Customer Register';
	$pagename = 'Customer Register';
	$content = loadTemplate('../views/customer_register_design.php', $templateVars);
?>