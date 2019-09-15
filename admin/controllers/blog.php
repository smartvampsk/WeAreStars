<?php 
	$msg = ''; 
	if(isset($_POST['add'])){
		$date = new DATETIME('now', new DATETIMEZONE('Australia/Sydney'));

		$img = $_FILES['fileToUpload']['name'];
		$img_dir = $_FILES['fileToUpload']['tmp_name'];
		$img_size = $_FILES['fileToUpload']['size'];

		$uploading_dir = '../../images/blog/';
		$imgExtns = strtolower(pathinfo($img, PATHINFO_EXTENSION));
		$validExtns = array('jpg', 'jpeg', 'gif', 'png');
		$imageName = rand(100,100000).".".$imgExtns;
		move_uploaded_file($img_dir, $uploading_dir.$imageName);

		$stmt = $pdo->prepare("INSERT INTO blog(title, description, submitted_by, published_date, image)
			VALUES (:title, :description, :submitted_by, :publishedDate, :image)");
		$criteria = [
			'title' => $_POST['title'],
			'description' => $_POST['description'],
			'submitted_by' => $_POST['submitted_by'],
			'publishedDate' => $date->format('Y-m-d H:i:sa'),
			'image'=>$imageName
		];
		$success = $stmt->execute($criteria);

		if ($success) {
			$msg = "Blog Added Successfully";
			header('refresh:10;url=blog');
		}
		else{
			$msg = 'Failed to Upload';
		}
	}
	
	$templateVars = [
		'msg' => $msg
	];
	
	$title = 'We Are Stars - Add Blog';
	$pagename = 'Add Blog';
	$content = loadTemplate('../views/blog_design.php', $templateVars);
?>