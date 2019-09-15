<?php
	$stmt = $pdo->prepare("SELECT * FROM log l JOIN customer c ON l.user_id = c.customer_id ");
	$stmt->execute();

	$templateVars = [
		'logs' => $stmt
	];
	
	$title = 'We Are Stars - View Login Detail';
	$pagename = 'View Log Detail';
	$content = loadTemplate('../views/log_design.php', $templateVars);
?>