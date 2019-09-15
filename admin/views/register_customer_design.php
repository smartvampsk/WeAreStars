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
				<h2 class="pt-3 text-center">Customer Registration</h2>
				<?php
					if (!empty($msg)) {
					 	echo '<p class="text-dark text-center bg-info rounded py-1">'.$msg.'</p>';
					 }
				?>
				<hr>
				<div class="form-group">
					<label for="">First Name</label>
					<input type="text" class="form-control" name="firstname">
				</div>
				<div class="form-group">
					<label>Surname</label>
					<input type="text" class="form-control" name="surname">

				</div>
				<div class="form-group">
					<label>Date of Birth <span class="text-danger">*</span></label>
					<input type="date" class="form-control" name="dob" required="">
					<p class="text-muted"><font size="2" id="checkDate"></font></p>
				</div>
				<fieldset class="form-group">
					<div class="row">
						<legend class="col-form-label col-sm-2 pt-0">Gender</legend>
						<div class="col-sm-10">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="gender" id="genderM" value="Male">
								<label class="form-check-label" for="genderM">Male</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="gender" id="genderF" value="Female">
								<label class="form-check-label" for="genderF">Female</label>
							</div>
						</div>
					</div>
				</fieldset>
				<div class="form-group">
					<label>Email <span class="text-danger">*</span></label>
					<input type="email" class="form-control" name="email" id="email" required="">
					<p class="text-muted"><font size="2" id="checkContact"></font></p>
				</div>
				<div class="form-group">
					<label>Contact No.</label>
					<input type="text" class="form-control" name="contact" id="contact">
					<p class="text-muted"><font size="2" id="checkEmail"></font></p>
				</div>
				<div class="form-group">
					<label>Address</label>
					<input type="text" class="form-control" name="address">
				</div>
				<div class="form-group">
                    <label>Skills <span class="text-danger">*</span></label>
                    <select class="browser-default custom-select bg-light" name="skills" multiple required="">
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
					<input type="text" name="username" id="username" class="form-control" required="">
					<p class="text-muted"><font size="2" id="checkUsername"></font></p>
				</div>
				<div class="form-group">
					<label>Password <span class="text-danger">*</span></label>
					<input type="password" name="password" id="password" class="form-control" required="">
					<p class="text-muted"><font size="2" id="checkPassword"></font></p>
				</div>
				<div class="form-group">
					<label>Confirm Password <span class="text-danger">*</span></label>
					<input type="password" name="confPassword" id="confirmPassword" class="form-control" required="">
					<p class="text-muted"><font size="2" id="checkConfirmPassword"></font></p>
				</div>
				<div class="text-center">
					<button type="submit" id="submit" name="register" class="btn btn-lg btn-primary text-center">Register</button>
				</div><br>
			</form>
		</div>
	</div>
</div>


<script>
    $(document).ready(function()
    {
        $('#checkDate').hide();
        $('#checkEmail').hide();
        $('#checkContact').hide();
        $('#checkUsername').hide();
        $('#checkPassword').hide();
        $('#checkConfirmPassword').hide();
      
        var date_error = true;
        var email_error = true;
        var contact_error = true;
        var username_error = true;
        var password_error = true;
        var confirmPassword_error = true;

        $('#dob').keyup(function() {
            checkDate();
        });

        $('#email').keyup(function() {
            checkEmail();
        });

        $('#contact').keyup(function() {
            checkContact();
        });

        $('#username').keyup(function() {
            checkUsername();
        });

        $('#password').keyup(function() {
            checkPassword();
        });

        $('#confirmPassword ').keyup(function() {
            checkConfirmPassword();
        });  

        function checkDate()
        {
    
            var dateValue = $('#dob').val();

            if(dateValue.length == ''){
            $('#checkDate').show();
            $('#checkDate').html("Please fill the date of birth");
            $('#checkDate').focus();
            $('#checkDate').css("color", "red");
            date_error = false;
            return false;
            } else{
                $('#checkDate').hide();
            }
        }

        function checkEmail()
        {
    
            var emailValue = $('#email').val();

            if(emailValue.length == ''){
            $('#checkEmail').show();
            $('#checkEmail').html("Please fill the email");
            $('#checkEmail').focus();
            $('#checkEmail').css("color", "red");
            email_error = false;
            return false;
            } else{
                $('#checkEmail').hide();
            }
        }

        function checkContact()
        {
            var contactValue = $('#contact').val();
            var letterOnlyRegExp = /^[0-9]*$/;
            if (!(contactValue.match(letterOnlyRegExp))) {
	            $('#checkContact').show();
	            $('#checkContact').html("Contact can only have numerical values");
	            $('#checkContact').focus();
	            $('#checkContact').css("color", "red");
	            contact_error = false;
	            return false;
            } else{
                $('#checkContact').hide();
            }

            if ((contactValue.length < 10 ) || (contactValue.length > 10)) {
	            $('#checkContact').show();
	            $('#checkContact').html("Contact cannot have less or more than 10 digits");
	            $('#checkContact').focus();
	            $('#checkContact').css("color", "red");
	            contact_error = false;
	            return false;
            } else{
                $('#checkContact').hide();
            }
        }

        function checkUsername()
        {
    
            var usernameValue = $('#username').val();
			var letterOnlyRegExp = /^[a-zA-Z\s]*$/;

            if(usernameValue.length == '' || !(usernameValue.match(letterOnlyRegExp))){
            $('#checkUsername').show();
            $('#checkUsername').html("Username cannot contain numerical and special values");
            $('#checkUsername').focus();
            $('#checkUsername').css("color", "red");
            username_error = false;
            return false;
            } else{
                $('#checkUsername').hide();
            }
        }


        function checkPassword(){
            var passwordValue = $('#password').val();

			if(passwordValue.length == ''){
				$('#checkPassword').show();
				$('#checkPassword').html("Please fill the Password");
				$('#checkPassword').focus();
				$('#checkPassword').css("color", "red");
				pass_err = false;
				return false;
			}else{
				$('#checkPassword').hide();
			}
			if((passwordValue.length < 5 ) || ( passwordValue.length > 18)){
				$('#checkPassword').show();
				$('#checkPassword').html("Password must be between 5 to 18 character long");
				$('#checkPassword').focus();
				$('#checkPassword').css("color", "red");
				password_error = false;
				return false;
			}else{
				$('#checkPassword').hide();
			}
		}

		function checkConfirmPassword(){
			var confirmValue = $('#confirmPassword').val();
			var passwordValue = $('#password').val();

			if(confirmValue != passwordValue){
				$('#checkConfirmPassword').show();
				$('#checkConfirmPassword').html("Password are not matching");
				$('#checkConfirmPassword').focus();
				$('#checkConfirmPassword').css("color", "red");
				confirmPassword_error = false;
				return false;
			}else{
				$('#checkConfirmPassword').hide();
			}
		}
       

        $('#submit').click(function(){
        email_error = true;
        contact_error = true;
        username_error = true;
        password_error = true;
        confirmPassword_error = true;
       
        checkEmail();
        checkContact();
        checkUsername();
        checkPassword();
        checkConfirmPassword();
       

        if((email_error == true) && (date_error == true) && (contact_error == true)&& (username_error == true) && (password_error == true) && (confirmPassword_error == true)){
            return true;
        }else{
        	return false;
        }
        });
    });
</script>