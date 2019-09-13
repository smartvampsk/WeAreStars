<!DOCTYPE html>
<html lang="en">
<?php 
    if(session_id() == '' || !isset($_SESSION)) {
        session_start();
    }
?>
   <head>
      <title><?php echo $title; ?></title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" type="text/css" href="../css/styles.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


   </head>
   <body>
      <div class="container-fluid bg-dark text-right top-container">
         <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8">
              <form method="POST" action="login">
                <div class="form-group pt-3">
                  <?php 
                    if (isset($_SESSION['customer'])) {
                      echo '<label class="text-white font-weight-bold pr-3">'.$_SESSION['customer'].'</label>';
                      echo '<input type="submit" name="logout" value="Logout" class="bg-info">';
                    } else { 
                      // if (!empty($msg)) {
                      //   echo '<p class="text-white text-center bg-info rounded py-1 pr-3">'.$msg.'</p>';
                      // }
                    ?>
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">
                    <input type="submit" name="login" value="Login" class="bg-info">
                  <?php } ?>
                </div>
              </form>
            </div>
         </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light" id="myHeader" >
         <a class="navbar-brand emily" href="home">We are Stars</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item active">
                  <a class="nav-link font-weight-bold" href="home">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link font-weight-bold" href="blog">Blogs</a>
               </li>
              <?php
                if (!isset($_SESSION['customer'])) { ?>
                  <li class="nav-item dropdown">
                    <a class="nav-link font-weight-bold dropdown-toggle" id="navbarDropdownMenuLink" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Membership</a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                     <a class="dropdown-item" href="custregister">Customer</a>
                     <a class="dropdown-item" href="agenregister">Agency</a>
                   </div>
                 </li>
              <?php  } ?>
              <?php
                if (isset($_SESSION['customer'])) { ?> 
                  <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="portfolio">Portfolio</a>
                  </li> <?php
                  if ($_SESSION['member_type'] == '1') {?>
                    <li class="nav-item">
                      <a class="nav-link font-weight-bold" href="agencylist">Agency List</a>
                    </li>
                  <?php }
                  else if ($_SESSION['member_type'] == '2') {?> 
                    <li class="nav-item">
                      <a class="nav-link font-weight-bold" href="customerlist">Customer List</a>
                    </li>
                  <?php }
                }
              ?>
               <li class="nav-item">
                  <a class="nav-link font-weight-bold" href="about">About Us</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link font-weight-bold" href="contact">Contact</a>
               </li>
            </ul>
         </div>
      </nav>
      <div class="container-fluid bg-white">
   <div class="row">
      <div class="col-md-6">
         <div class="first position-relative">
            <h1>Emily Fox</h1>
            <h2 class="font-weight-light">Discover Your Power</h2>
            <div class="second">
               <a href="#" class="fa fa-facebook p-2 m-2 bg-dark"></a>
               <a href="#" class="fa fa-twitter p-2 m-2 bg-dark"></a>
               <a href="#" class="fa fa-youtube p-2 m-2 bg-dark"></a>
               <a href="#" class="fa fa-instagram p-2 m-2 bg-dark"></a>
            </div>
         </div>
         
      </div>
      <div class="col-md-6 px-4 py-4">
         <img src="../images/image16.png" alt="gym" class="img-fluid image1">
      </div>
   </div>
</div>

<?php echo $content; ?>

<section class="footer_section">
    <div class="container-fluid footer_section1">
        <div class="row">
            <div class="col-md-6 footer_section2">
                <p>Subscribe to Our Newsletter</p>
                <input type="text" name="email" placeholder="Email*" style="width: 250px; height: 40px;" class="pl-3">
                <button class="btn border py-2">Subscribe Now</button>
            </div>
            <div class="col-md-6 footer_section3">
                <div>
                    <a href="#" class="pl-4"><i class="fa fa-facebook-f"></i></a>
                    <a href="#" class="pl-4"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="pl-4"><i class="fa fa-youtube"></i></a>
                </div>
                <p class="pl-4 mb-1">info@mysite.com 123-456-7890</p>
                <p class="pl-4 mb-1">Office: 500 Terry Francois Street, San Francisco, CA 94158</p>
            </div>
        </div>
    </div>
</section>


<div class="container-fluid bg-dark pt-2">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <p class="copy">Copyright &copy;2019 All rights reserved | We Are Stars</p>
        </div>
        <div class="col-md-3"></div>
    </div>
        
</div>





<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/popper.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>

<script>
    window.onscroll = function() {myFunction()};

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    }
</script>

</body>
</html>