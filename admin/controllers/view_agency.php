<?php
	$msg = '';
	$stmt = $pdo->prepare("SELECT * FROM customer WHERE member_type = '2'");
	$stmt->execute();

	if (isset($_GET['dId'])) {
		$dId = $_GET['dId'];
		$del = $pdo->prepare("DELETE FROM customer WHERE customer_id = '$dId'");
		$del->execute();
		$msg = "Deleted Successfully";
		header('refresh:5;url=view_agency');
	}

	$templateVars = [
		'msg' => $msg,
		'customer' => $stmt
	];
	
	$title = 'We Are Stars - View Customer Agency';
	$pagename = 'View Customer Agency';
	$content = loadTemplate('../views/view_agency_design.php', $templateVars);
?>