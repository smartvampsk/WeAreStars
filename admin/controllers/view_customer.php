<?php
	$msg = '';
	$stmt = $pdo->prepare("SELECT * FROM customer WHERE member_type = '1'");
	$stmt->execute();

	if (isset($_GET['dId'])) {
		$dId = $_GET['dId'];
		$del = $pdo->prepare("DELETE FROM customer WHERE customer_id = '$dId'");
		$del->execute();
		$msg = "Delete Successfully";
		header('refresh:5;url=view_customer');
	}

	$templateVars = [
		'msg' => $msg,
		'customer' => $stmt
	];
	
	$title = 'We Are Stars - View Customer';
	$pagename = 'View Customer';
	$content = loadTemplate('../views/view_customer_design.php', $templateVars);
?>