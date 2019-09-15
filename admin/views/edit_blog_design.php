<?php
	if(session_id() == '' || !isset($_SESSION)) {
		session_start();
	}
	if (!isset($_SESSION['admin'])) {
        header('location:login');
    }
?>

<div class="pt-2">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<form method="POST" action="" enctype="multipart/form-data">
				<h2 class="pt-3 text-center font-alice">Edit Blog & News</h2>
				<?php
					if (!empty($msg)) {
					 	echo '<p class="text-dark text-center bg-info rounded py-1">'.$msg.'</p>';
					 }
				?>
				<hr>
				<input type="hidden" name="bid" value="<?php echo $blog['blog_id']; ?>">
				<div class="form-group">
					<label for="">Title <span class="text-danger">*</span></label>
					<input type="text" class="form-control" name="title" value="<?php echo $blog['title']; ?>">
				</div>
				<div class="form-group">
					<label>Description <span class="text-danger">*</span></label>
					<textarea class="form-control" name="description"><?php echo $blog['description']; ?></textarea>
				</div>
				<div class="form-group">
					<label>Picture:</label>
					<input type="file" class="form-control-file" name="fileToUpload" id="fileToUpload" accept="image/*">
					<?php 
						// if (!empty($blog['image'])) {
						// 	echo '<p> <img class="" src="../../images/blog/'.$blog['image'].'"></p>'; 
						// }
					 ?>
				</div>
				<div class="row justify-content-between px-3 pt-2">
					<button type="submit" name="update" class="btn btn-lg btn-primary text-center">Update</button>
					<button type="submit" name="cancel" class="btn btn-lg btn-danger text-center">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div>