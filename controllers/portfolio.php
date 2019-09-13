<?php 
	if(session_id() == '' || !isset($_SESSION)) {
		session_start();
	}
	if (!isset($_SESSION['customer'])) {
        header('location:login');
    }

	$customer_id = $_SESSION['customer_id'];
	$stmt = $pdo->prepare("SELECT * FROM customer WHERE customer_id = '$customer_id'");
	$stmt->execute();

	$templateVars = [
		'customer' => $stmt
	];
	
	$title = 'We Are Stars - Portfolio';
	$pagename = 'Portfolio';
	$content = loadTemplate('../views/portfolio_design.php', $templateVars);
?>