<?php
	$stmt = $pdo->prepare("SELECT * 
		FROM blog b
		JOIN admin a
		ON b.submitted_by = a.admin_id
		ORDER BY blog_id DESC
		");
	$stmt->execute();
	$templateVars = [
		'blogs' => $stmt
	];
	
	
	$title = 'We Are Stars - Blog';
	$pagename = 'Blog';
	$content = loadTemplate('../views/blog_design.php', $templateVars);
?>