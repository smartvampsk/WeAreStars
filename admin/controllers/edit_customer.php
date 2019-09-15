<?php
	if (isset($_POST['cancel'])) {
		header('location:view_customer');
	}
	
	$eid = $_GET['eId'];
	$stmt = $pdo->query("SELECT * FROM customer WHERE customer_id = '$eid'")->fetch();
	
	if (isset($_POST['update'])) {
		$stmt = $pdo->prepare("UPDATE customer
			SET firstname = :firstname, 
				surname = :surname,
				dob = :dob,
				gender = :gender,
				email = :email,
				contact = :contact,
				address = :address,
				username = :username
			WHERE customer_id = '$eid'");
		$criteria = [
			'firstname' => $_POST['firstname'],
				'surname' => $_POST['surname'],
				'dob' => $_POST['dob'],
				'gender' => $_POST['gender'],
				'email' => $_POST['email'],
				'contact' => $_POST['contact'],
				'address' => $_POST['address'],
				'username' => $_POST['username']
		];
		$stmt->execute($criteria);
		header('location:view_customer');
	}

	$templateVars = [
		'cus' => $stmt
	];
	
	$title = 'We Are Stars - Edit customer';
	$pagename = 'Edit Customer';
	$content = loadTemplate('../views/edit_customer_design.php', $templateVars);
?>