<?php 
	$stmt = $pdo->prepare("SELECT * FROM customer WHERE member_type = '1' LIMIT 5");
	$stmt->execute();
	
	$templateVars = [ 'customer' => $stmt];
	
	$title = 'We Are Stars - Home';
	$pagename = 'Home';
	$content = loadTemplate('../views/home_design.php', $templateVars);
?>