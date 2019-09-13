<?php 
    if(session_id() == '' || !isset($_SESSION)) {
        session_start();
    }
    if (isset($_SESSION['customer'])) {
        header('location:home');
    }
?>

<div class="pt-2 bg-info">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form method="POST" action="">
                <h2 class="pt-3 text-center agen">Customer Registration</h2>
                <?php
                    if (!empty($msg)) {
                         echo '<p class="text-dark text-center bg-info rounded py-1">'.$msg.'</p>';
                     }
                ?>
                <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" class="form-control bg-info agenform" name="firstname">
                </div>
                <div class="form-group">
                    <label>Surname</label>
                    <input type="text" class="form-control bg-info agenform" name="surname">
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
                    <label>Date of Birth</label>
                    <input type="date" name="dob" class="bg-info form-control border-dark agenform">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control bg-info agenform" name="email">
                </div>
                <div class="form-group">
                    <label>Contact No.</label>
                    <input type="text" class="form-control bg-info agenform" name="contact">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control bg-info agenform" name="address">
                </div>
                <div class="form-group">
                    <label>Skills</label>
                    <select class="browser-default custom-select bg-info option" multiple name="skills">
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
                    <select class="browser-default custom-select bg-info option" name="membership">
                        <option value="" disabled selected style="display:none;">Choose your Option</option>
                        <option value="Six months - $550 plus GST">Six months - $550 plus GST </option>
                        <option value="One year - $800 plus GST">One year - $800 plus GST </option>
                        <option value="Lifetime access - $3500 plus GST">Lifetime access - $3500 plus GST </option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Username <span class="text-danger">*</span></label>
                    <input type="text" name="username" class="form-control bg-info agenform" required="">
                </div>
                <div class="form-group">
                    <label>Password <span class="text-danger">*</span></label>
                    <input type="password" name="password" class="form-control bg-info agenform" required="">
                </div>
                <div class="form-group">
                    <label>Confirm Password <span class="text-danger">*</span></label>
                    <input type="password" name="confPassword" class="form-control bg-info agenform" required="">
                </div>
                <div class="text-center">
                    <button type="submit" name="register" class="btn btn-lg btn-info text-center mt-3">Register</button>
                </div><br>
            </form>
        </div>
    </div>
</div>