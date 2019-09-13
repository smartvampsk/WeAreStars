<?php 
	$stmt = $pdo->prepare("SELECT * FROM customer WHERE member_type='1'");
	$stmt->execute();

	$templateVars = [
		'customer' => $stmt
	];
	
	$title = 'We Are Stars - Customer List';
	$pagename = 'Customer List';
	$content = loadTemplate('../views/customer_list_design.php', $templateVars);
?>