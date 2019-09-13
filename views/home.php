<div class="bg-light">
   <div class="container pt-4 pb-4">
      <h3 class="text-uppercase text-center py-4 services text-muted">Our Subscription</h3>
      <div class="row py-4">
         <div class="col-md-4  ">
            <div class="m-2 shadow bg-white">
               <h4 class="border-bottom premium mb-0 text-white">Temporary Subscriber</h4>
               <p class="border-bottom price mb-0 text-white"><small>$</small><b>550</b> <small>plus GST</small></p>
               <p class="descrip">Six months access</p>
               <div class="text-center pb-4">
                  <a href="agenregister">
                  <button class="btn btn-info">Agency</button>
                  </a>
                  <a href="custregister">
                  <button class="btn btn-info">Customer</button>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-md-4  ">
            <div class="m-2 shadow bg-white">
               <h4 class="border-bottom premium mb-0 text-white">One Year Subscriber</h4>
               <p class="border-bottom price mb-0 text-white"><small>$</small><b>800</b> <small>plus GST</small></p>
               <p class="descrip">One year access</p>
               <div class="text-center pb-4">
                  <a href="agenregister">
                  <button class="btn btn-info">Agency</button>
                  </a>
                  <a href="custregister">
                  <button class="btn btn-info">Customer</button>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-md-4 ">
            <div class="m-2 shadow bg-white">
               <h4 class="border-bottom premium mb-0 text-white">Premium Subscriber</h4>
               <p class="border-bottom price mb-0 text-white"><small>$</small><b>3500</b> <small>plus GST</small></p>
               <p class="descrip">lifetime access</p>
               <div class="text-center pb-4">
                  <a href="agenregister">
                  <button class="btn btn-info">Agency</button>
                  </a>
                  <a href="custregister">
                  <button class="btn btn-info">Customer</button>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="bg-info py-4">
   <div class="container py-2">
      <p class="test text-center pb-4">Our Blogs</p>
      <div class="row">
         <?php foreach ($blogs as $blog) {?>
         <div class="col-md-4">
            <?php
               if (!empty($blog['image']) AND file_exists('../images/blog/'.$blog['image'])) {
               	echo '<p> <img class="img-fluid img-blog" src="../images/blog/'.$blog['image'].'"></p>';
               }
               else 
               	echo 'No image Available';
               ?>
            <h4 class="py-2"><?php echo $blog['title'] ?></h4>
            <p style="width: 100%;" class="pt-2 text-justify">
               <?php echo substr($blog['description'], 0, 150); ?>
            </p>
            <div class="d-flex">
               <p class="submit font-weight-bold">Author:</p>
               <p class="pl-1 name1">
                  <?php echo $blog['username'] ?>
               </p>
            </div>
            <div class="d-flex position-relative top">
               <p class="submit1 font-weight-bold">published on:</p>
               <p class="name1">
                  <?php echo $blog['published_date'] ?>
               </p>
            </div>
         </div>
         <?php } ?>
      </div>
   </div>
</div>

