<?php 
	$msg = '';
	$bid = $_GET['bid'];
	$blog = $pdo->query("SELECT * FROM blog WHERE blog_id = '$bid'")->fetch();

	if (isset($_POST['cancel'])) {
		header('location:view_blog');
	}
	if(isset($_POST['update'])){
		$stmt = $pdo->prepare("UPDATE blog SET
				title = :title,
				description = :description 
				WHERE blog_id = :bid
			");
		$criteria = [
			'title' => $_POST['title'],
			'description' => $_POST['description'],
			'bid' => $_GET['bid']
		];

		$success = $stmt->execute($criteria);

		if ($success) {
			$msg = "Blog Updated Successfully";
			header('refresh:7;url=view_blog');
		}
		else{
			$msg = 'Failed to Upload';
		}
	}
	
	$templateVars = [
		'blog' => $blog,
		'msg' => $msg
	];
	
	$title = 'We Are Stars - Edit Blog';
	$pagename = 'Edit Blog';
	$content = loadTemplate('../views/edit_blog_design.php', $templateVars);
?>