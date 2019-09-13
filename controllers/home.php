<?php 
	if(session_id() == '' || !isset($_SESSION)) {
		session_start();
	}

    $stmt = $pdo->prepare("SELECT * 
		FROM blog b
		JOIN admin a
		ON b.submitted_by = a.admin_id
		ORDER BY blog_id DESC
		LIMIT 3
		");
	$stmt->execute();
	$templateVars = [
		'blogs' => $stmt
	];
	
	$title = 'We Are Stars - Home';
	$pagename = 'Home';
	$content = loadTemplate('../views/home.php', $templateVars);
?>