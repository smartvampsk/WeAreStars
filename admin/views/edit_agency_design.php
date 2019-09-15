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
			<form method="POST" action="">
				<h2 class="pt-3 text-center">Edit Agency</h2>
				<?php
					if (!empty($msg)) {
					 	echo '<p class="text-dark text-center bg-info rounded py-1">'.$msg.'</p>';
					 }
				?>
				<hr>
				<div class="form-group">
                    <label for="">Agency Name</label>
                    <input type="text" class="form-control agenform bg-light" name="agency_name" value="<?php echo $cus['agency_name']; ?>">
                </div>
				<div class="form-group">
					<label>Email <span class="text-danger">*</span></label>
					<input type="email" class="form-control" name="email" value="<?php echo $cus['email']; ?>">
				</div>
				<div class="form-group">
					<label>Contact No.</label>
					<input type="text" class="form-control" name="contact" value="<?php echo $cus['contact']; ?>">
				</div>
				<div class="form-group">
					<label>Address</label>
					<input type="text" class="form-control" name="address" value="<?php echo $cus['address']; ?>">
				</div>
				<div class="form-group">
					<label>Username <span class="text-danger">*</span></label>
					<input type="text" name="username" class="form-control" value="<?php echo $cus['username']; ?>">
				</div>
				<div class="d-flex justify-content-between pt-3">
					<button type="submit" name="update" class="btn btn-lg btn-success text-center">Update</button>
					<button type="submit" name="cancel" class="btn btn-lg btn-danger text-center">Cancel</button>
				</div><br>
			</form>
		</div>
	</div>
</div>