<?php 
	$msg = '';
	
	if (isset($_POST['submit'])) {
		$stmt = $pdo->prepare("INSERT INTO message(name, contact, email, subject, message)
			VALUES(:name, :contact, :email, :subject, :message)");
		$criteria = [
			'name' => $_POST['name'],
			'contact' => $_POST['contact'],
			'email' => $_POST['email'],
			'subject' => $_POST['subject'],
			'message' => $_POST['message']
		];
		$stmt->execute($criteria);
		$msg = "Thank you for your message!<br>We will contact you soon...";
		header('refresh:10;url=contact');
	}
	
	$templateVars = [
		'msg' => $msg
	];
	
	$title = 'We Are Stars - Contact';
	$pagename = 'Contact';
	$content = loadTemplate('../views/contact_design.php', $templateVars);
?>