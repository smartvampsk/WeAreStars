<?php 
	if(session_id() == '' || !isset($_SESSION)) {
		session_start();
	}
	if (!isset($_SESSION['customer'])) {
        header('location:login');
    }
?>

	<div class="container-fluid bg-info customer">
		<h2 class="customer1">Our Customer List</h2>
		<div class="row">
			<table class="table table-bordered table-dark">
			  <thead>
			    <tr>
			      <th scope="col">S/N</th>
			      <th scope="col">Name</th>
			      <th scope="col">Gender</th>
			      <th scope="col">Date of Birth</th>
			      <th scope="col">Email</th>
			      <th scope="col">Contact</th>
			      <th scope="col">Address</th>
			      <th scope="col">Skill</th>
			      <th scope="col">Member Subscription</th>
			      <th scope="col">Username</th>
			    </tr>
			  </thead>
			  <tbody>
			    <?php 
			    $sn = 1;
            foreach ($customer as $cus) {
              echo '<tr>';
              echo '<td>'.$sn++.'</td>';
              echo '<td>'.$cus['firstname']." ".$cus['surname'].'</td>';
              echo '<td>'.$cus['gender'].'</td>';
              echo '<td>'.$cus['dob'].'</td>';
              echo '<td>'.$cus['email'].'</td>';
              echo '<td>'.$cus['contact'].'</td>';
              echo '<td>'.$cus['address'].'</td>';
              echo '<td>'.$cus['skills'].'</td>';
              echo '<td>'.$cus['membership'].'</td>';
              echo '<td>'.$cus['username'].'</td>';
              echo '</tr>';
            }
          ?>
			  </tbody>
			</table>
		</div>
	</div>