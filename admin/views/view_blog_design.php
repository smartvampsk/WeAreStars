<?php
  if(session_id() == '' || !isset($_SESSION)) {
    session_start();
  }
  if (!isset($_SESSION['admin'])) {
        header('location:login');
    }
?>

<div class="row justify-content-center">
	<div class="col-lg-6">
		<h2 class="py-3 text-center font-alice">Blogs & News</h2>
		<?php
			if (!empty($msg)) {
				echo '<p class="text-dark text-center bg-info rounded py-1">'.$msg.'</p>';
			}
			foreach ($blogs as $blog) { ?>
			<div class="card mb-3">
				<div class="card-header">
					<div class="row justify-content-between mx-2">
						<div> <h4> <?php echo $blog['title']; ?> </h4> </div>
						<div>
							<?php echo '<a class="btn btn-sm btn-outline-dark text-success" href="edit_blog?bid='.$blog['blog_id'].'"><i class="fas fa-edit"></i></a>'; ?>
							<?php echo '<a class="btn btn-sm btn-outline-dark text-danger" href="view_blog?did='.$blog['blog_id'].'"><i class="fas fa-trash-alt"></i></a>'; ?>
						</div>
					</div>
				</div>
				<div class="card-body row justify-content-between mx-0">
					<div class="col-md-7 pt-2 text-justify">
						<?php echo $blog['description']; ?>
					</div>
					<div class="col-md-5 pt-2">
						<div class="text-center">
							<?php
								if (!empty($blog['image']) AND file_exists('../../images/blog/'.$blog['image'])) {
									echo '<p> <img class="blog-img" src="../../images/blog/'.$blog['image'].'"></p>';
								}
								else 
									echo 'No image Available'
							?>				
						</div>
					</div>
				</div>
				<div class="card-footer small text-muted">
					<div class="row justify-content-between mx-2">
						<div> Published on: <?php echo date('d-M-Y, D, h:m A', strtotime($blog['published_date'])); ?> </div>
						<div> Author: <?php echo $blog['username']; ?></div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>