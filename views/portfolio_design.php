<section class="portfolio bg-info">
	<div class="container">
		<?php foreach ($customer as $port){ ?>
		<div class="row">
			
				
			<div class="col-md-6 profile text-center">
				<img src="../images/profile.jpg" class="img-flud" style="width: 390px; height: 400px;">
			</div>

			<div class="col-md-6">
				<h3><?php echo $port['firstname'].' '.$port['surname'] ?></h3>
				<hr class="m-1 py-1">
				<h5 class="mb-0">Username: </h5><p class="profile1 position-relative"><?php echo $port['username']; ?></p>
				<h5 class="mb-0">Gender: </h5><p class="profile1 position-relative"><?php echo $port['gender'] ?></p>
				<h5 class="mb-0">Date of Birth: </h5><p class="profile1 position-relative"><?php echo $port['dob']; ?></p>
				<h5 class="mb-0">Email: </h5><p class="profile1 position-relative"><?php echo $port['email']; ?></p>
				<h5 class="mb-0">Contact: </h5><p class="profile1 position-relative"><?php echo $port['contact']; ?></p>
				<h5 class="mb-0">Address: </h5><p class="profile1 position-relative"><?php echo $port['address']; ?></p>
				<h5 class="mb-0">Skill: </h5><p class="profile1 position-relative"><?php echo $port['skills']; ?></p>
				<h5 class="mb-0">Membership: </h5><p class="profile1 position-relative"><?php echo $port['membership']; ?></p>
			</div>
		
		</div>
		<?php } ?>
	</div>
</section>