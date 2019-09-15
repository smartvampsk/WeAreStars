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
				<h2 class="pt-3 text-center font-alice">Add Blog & News</h2>
				<?php
					if (!empty($msg)) {
					 	echo '<p class="text-dark text-center bg-info rounded py-1">'.$msg.'</p>';
					 }
				?>
				<hr>
				<input type="hidden" name="submitted_by" value="<?php echo $_SESSION['admin_id']; ?>">
				<div class="form-group">
					<label for="">Title <span class="text-danger">*</span></label>
					<input type="text" class="form-control" name="title">
				</div>
				<div class="form-group">
					<label>Description <span class="text-danger">*</span></label>
					<textarea class="form-control" name="description"></textarea>
				</div>
				<div class="form-group">
					<label>Picture:</label>
					<input type="file" class="form-control-file" name="fileToUpload" id="fileToUpload" accept="image/*">
				</div>
				<div class="text-center">
					<button type="submit" name="add" class="btn btn-lg btn-primary text-center">Publish</button>
				</div>
			</form>
		</div>
	</div>
</div>