<?php 
	$msg = '';

	if (isset($_GET['did'])) {
		$did = $_GET['did'];
		$delete = $pdo->prepare("DELETE FROM blog WHERE blog_id = '$did'");
		$delete->execute();
		$msg = 'Blog deleted Successfully';
		header('refresh:5;url=view_blog');
	}

	$stmt = $pdo->prepare("SELECT * 
		FROM blog b
		JOIN admin a
		ON b.submitted_by = a.admin_id
		ORDER BY blog_id DESC
		");
	$stmt->execute();
	$templateVars = [
		'blogs' => $stmt,
		'msg' => $msg
	];
	
	$title = 'We Are Stars - View Blog';
	$pagename = 'View Blog';
	$content = loadTemplate('../views/view_blog_design.php', $templateVars);
?>