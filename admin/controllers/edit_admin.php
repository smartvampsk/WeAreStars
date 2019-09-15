<?php
	if (isset($_POST['cancel'])) {
		header('location:view_admin');
	}
	
	$eid = $_GET['eId'];
	$stmt = $pdo->query("SELECT * FROM admin WHERE admin_id = '$eid'")->fetch();
	
	if (isset($_POST['update'])) {
		$stmt = $pdo->prepare("UPDATE admin
			SET firstname = :firstname,
				surname = :surname,
				username = :username
			WHERE admin_id = '$eid'");
		$criteria = [
				'firstname' => $_POST['firstname'],
				'surname' => $_POST['surname'],
				'username' => $_POST['username']
		];
		$stmt->execute($criteria);
		header('location:view_admin');
	}

	$templateVars = [
		'cus' => $stmt
	];
	
	$title = 'We Are Stars - Edit Admin';
	$pagename = 'Edit Admin';
	$content = loadTemplate('../views/edit_admin_design.php', $templateVars);
?>