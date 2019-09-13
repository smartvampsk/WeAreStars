<?php
	if (isset($_SESSION['customer'])) {
        header('location:home');
    }

	$msg = '';
	$date = new DATETIME('now', new DATETIMEZONE('Australia/Sydney'));

	if (isset($_POST['logout'])) {
		session_start();
		$customer_id = $_SESSION['customer_id'];
		$logUp = $pdo->prepare(" UPDATE log 
			SET time_out = :time_out 
			WHERE user_id = :customer_id
			ORDER BY log_id DESC
			LIMIT 1
		");
		$criteriaUpdate = [
			'time_out' => $date->format('H:i:s'),
			'customer_id' => $_SESSION['customer_id']
		];
		$logUp->execute($criteriaUpdate);

		session_destroy();
		session_unset();
		header('location:login');
	}
	
	if (isset($_POST['login'])) {
		$customer = $pdo->prepare("SELECT * FROM customer WHERE username = :username");
		$criteria = [
			'username' => $_POST['username']
		];
		$fault = false;
		$customer->execute($criteria);
		if ($customer->rowCount()>0) {
			$user = $customer->fetch();
			if (password_verify($_POST['password'], $user['password'])) {
				session_start();
				$_SESSION['customer'] = $user['username'];
				$_SESSION['customer_id'] = $user['customer_id'];
				$_SESSION['member_type'] = $user['member_type'];

				$_SESSION['start'] = time();
				$_SESSION['expire'] = $_SESSION['start'] + (1800);

				$log = $pdo->prepare("INSERT INTO log(user_id, user_type, logged_date, time_in) VALUES (:user_id, :user_type, :logged_date, :time_in)");
				$criteriaLog = [
					'user_id' => $_SESSION['customer_id'],
					'user_type' => $_SESSION['member_type'],
					'logged_date' => $date->format('Y-m-d'),
					'time_in' => $date->format('H:i:s')
				];
				$log->execute($criteriaLog);
				header('location:home');
			}
			else
				$fault = true;
		}
		else $fault = true;

		if ($fault == true) {
			$msg = 'Username and Password don\'t matched!<br>Please try again!';
		}
	}

	$templateVars = [
		'msg' => $msg
	];
	
	$title = 'We Are Stars - Login';
	$pagename = 'Login';
	$content = loadTemplate('../views/home.php', $templateVars);
?>