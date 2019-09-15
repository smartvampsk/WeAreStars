<?php
	if (isset($_POST['cancel'])) {
		header('location:view_agency');
	}
	
	$eid = $_GET['eId'];
	$stmt = $pdo->query("SELECT * FROM customer WHERE customer_id = '$eid'")->fetch();
	
	if (isset($_POST['update'])) {
		$stmt = $pdo->prepare("UPDATE customer
			SET agency_name = :agency_name,
				email = :email,
				contact = :contact,
				address = :address,
				username = :username
			WHERE customer_id = '$eid'");
		$criteria = [
				'agency_name' => $_POST['agency_name'],
				'email' => $_POST['email'],
				'contact' => $_POST['contact'],
				'address' => $_POST['address'],
				'username' => $_POST['username']
		];
		$stmt->execute($criteria);
		header('location:view_agency');
	}

	$templateVars = [
		'cus' => $stmt
	];
	
	$title = 'We Are Stars - Edit Agency';
	$pagename = 'Edit Agency';
	$content = loadTemplate('../views/edit_agency_design.php', $templateVars);
?>