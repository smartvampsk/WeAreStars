<?php 
	$stmt = $pdo->prepare("SELECT * FROM customer WHERE member_type='2'");
	$stmt->execute();

	$templateVars = [
		'customer' => $stmt
	];


	$title = 'We Are Stars - Agency List';
	$pagename = 'Agency List';
	$content = loadTemplate('../views/agency_list_design.php', $templateVars);
?>