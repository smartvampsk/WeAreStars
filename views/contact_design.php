<div class="container-fluid">
	<div class="row">
		<div class="col-md-5 bg-info left">
			<h1 class="font-weight-bolder">Get in Touch</h1>
			<p>I'm a paragraph. Click here to add <br> your own text and edit me.</p>
			<p><i class="fa fa-fw fa-map"></i> 500 3 Doris St, Sydney, CA 94158</p>
			<p><i class="fa fa-fw fa-envelope"></i> info@wearestars.com </p>
			<p><i class="fa fa-fw fa-phone"></i> Phone. 555-555-555</p>
		</div>
		<div class="col-md-7 text-center right pt-5">
			<div class="row justify-content-center">
			<?php
				if (!empty($msg)) {
				 	echo '<p class="text-dark text-center bg-info rounded py-2 px-5">'.$msg.'</p>';
				}
			?>
			</div>
			<form method="POST">
				<input type="text" name="name" placeholder="Full name" class="form font-weight-light" style="width: 250px;">
				<input type="text" name="contact" placeholder="Contact" class="form font-weight-light" style="width: 250px;"><br>
				<input type="text" name="email" placeholder="Email" class="form font-weight-light" style="width: 250px;">
				<input type="text" name="subject" placeholder="Subject" class="form font-weight-light" style="width: 250px;"><br>
				<input type="text" name="message" placeholder="Type your message here" class="forms font-weight-light position-relative" style="width: 250px;"><br>
				<input type="submit" name="submit" class="btn btn-info submits" value="Submit">
			</form>
		</div>
	</div>
</div>