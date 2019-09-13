<section class="bg-info">
   <div class="container blogsection">
      <h2 class="text-center py-3">Our Blogs</h2>
      <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>
      <div class="row blog">
         <?php
            if (!empty($msg)) {
            	echo '<p class="text-dark text-center bg-info rounded py-1">'.$msg.'</p>';
            }
            foreach ($blogs as $blog) { ?>
         <div class="col-md-4 blogs py-4">
            <a href="#">
            <?php
               if (!empty($blog['image']) AND file_exists('../images/blog/'.$blog['image'])) {
               	echo '<p> <img class="img-fluid img-blog" src="../images/blog/'.$blog['image'].'"></p>';
               }
               else 
               	echo 'No image Available';
               ?>			
            </a>
            <a href="#" class="parag">
               <p class="py-2">
                  <?php echo $blog['title']; ?>
               </p>
            </a>
            <div class="d-flex">
               <p class="submit font-weight-bold">Author:</p>
               <p class="pl-1 name">
                  <?php echo $blog['username']; ?>
               </p>
               <p class="submit pl-4 font-weight-bold">published on:</p>
               <p class="pl-2 name">
                  <?php echo $blog['published_date']; ?>
               </p>
            </div>
            <p style="width: 100%;" class="pt-2 text-justify">
               <?php echo substr($blog['description'], 0, 140).' [...]'; ?>
            </p>
            <button class="btn btn-info view btn-outline-dark">More Details</button>
         </div>
         <?php } ?>
      </div>
   </div>
</section>

