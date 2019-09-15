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
				<h2 class="pt-3 text-center">Agency Registration</h2>
				<?php
					if (!empty($msg)) {
					 	echo '<p class="text-dark text-center bg-info rounded py-1">'.$msg.'</p>';
					 }
				?>
				<hr>
				<div class="form-group">
                    <label for="">Agency Name</label>
                    <input type="text" class="form-control agenform bg-light" name="agency_name">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control agenform bg-light" name="email" data-validation="email required">
                </div>
                <div class="form-group">
                    <label>Contact No.</label>
                    <input type="text" class="form-control agenform bg-light" name="contact" data-validation = "number required">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control agenform bg-light" name="address">
                </div>
                   <div class="form-group">
                    <label>Skill Requirement</label>
                    <select class="browser-default custom-select bg-light" name="skills" multiple>
                      <option value="" disabled selected style="">Choose your Skill</option>
                      <option value="Marketing">Marketing</option>
                      <option value="Media">Media</option>
                      <option value="Public Relation">Public Relation</option>
                      <option value="Production">Production</option>
                      <option value="Film">Film</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Member Subscription <span class="text-danger">*</span></label>
                    <select class="browser-default custom-select bg-light" name="membership" required="">
                    	<option value="" disabled selected style="display:none;">Choose your Option</option>
                        <option value="Six months - $550 plus GST">Six months - $550 plus GST </option>
                        <option value="One year - $800 plus GST">One year - $800 plus GST </option>
                        <option value="Lifetime access - $3500 plus GST">Lifetime access - $3500 plus GST </option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Username <span class="text-danger">*</span></label>
                    <input type="text" name="username" class="form-control agenform bg-light" required="">
                </div>
                <div class="form-group">
                    <label>Password <span class="text-danger">*</span></label>
                    <input type="password" name="password" class="form-control agenform bg-light" required="">
                </div>
                <div class="form-group">
                    <label>Confirm Password <span class="text-danger">*</span></label>
                    <input type="password" name="confPassword" class="form-control agenform bg-light" required="">
                </div>
                <div class="text-center">
                    <button type="submit" name="register" class="btn btn-lg btn-info text-center mt-3">Register</button>
                </div><br>
			</form>
		</div>
	</div>
</div>

<script>
    $.validate();
</script>