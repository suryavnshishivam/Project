<?php

$connection = mysqli_connect("localhost", "root", "", "banner");


$result_blog = $connection->query("SELECT * FROM blog");

if(isset($_GET["page"])){
    $Page = $_GET["page"];
   if ($Page==0 || $Page<1){
   $ShowPostFrom=0;
   }else{
 $ShowPostFrom=($Page*3)-3;   
     }


 }
$result_blog_profile = $connection->query("SELECT * FROM blog_profile ORDER BY id desc LIMIT $ShowPostFrom,3 ");

$result_footer_get = $connection->query("SELECT * FROM footer_get");
$result_header = $connection->query("SELECT * FROM header");

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>iDESIGN - Interior Design HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="">FAQs</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="">Help</a>
                        <span class="text-white">|</span>
                        <a class="text-white pl-3" href="">Support</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


   
    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container position-relative" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 display-5 text-white"><span class="text-primary">i</span>DESIGN</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                    <?php
                $i = 0;
                foreach ($result_header as $row) {
                    $actives = '';
                    if ($i == 0) {
                        $actives = 'active';
                    }
                ?>
                        <a href="<?php echo $row['link']; ?>" class="nav-item nav-link "><?php echo $row['pages']; ?></a>
                      
                        <?php $i++;
                        
                } ?>
                

                   
                </div>

            </nav>

        </div>
    </div>

    <!-- Navbar End -->


    <!-- Under Nav Start -->
    <div class="container-fluid bg-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-left mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Our Office</h5>
                            <p class="m-0">123 Street, New York, USA</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-left text-lg-center mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-email font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Email Us</h5>
                            <p class="m-0">info@example.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-left text-lg-right mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-telephone font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h5>Call Us</h5>
                            <p class="m-0">+012 345 6789</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Under Nav End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary py-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Our Blog</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="index.php">Home</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">Our Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Blog Start -->
    <div class="container-fluid bg-light pt-5">
        <div class="container py-5">
            <?php
            while ($ccc = mysqli_fetch_assoc($result_blog)) {

            ?>

                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col text-center mb-4">
                        <h6 class="text-primary font-weight-normal text-uppercase mb-3"><?php echo $ccc['title']; ?></h6>
                        <h1 class="mb-4"><?php echo $ccc['header']; ?></h1>
                    </div>
                </div>
            <?php } ?>
            <div class="row pb-3">

                <?php
                while ($nnn = mysqli_fetch_assoc($result_blog_profile)) {

                ?>


                    <div class="col-md-4 mb-4">
                        <div class="card border-0 mb-2">
                            <img class="card-img-top" src="admin/blog_profile_img/<?= $nnn['image']; ?>" alt="">
                            <div class="card-body bg-white p-4">
                                <div class="d-flex align-items-center mb-3">




                                    <a class="btn btn-primary" href="single.php?id=<?php echo $nnn['id']; ?>" target="_black"><i class="fa fa-link"></i></a>
                                    <h5 class="m-0 ml-3 text-truncate"><?php echo $nnn['title']; ?></h5>
                                </div>
                                <p><?php echo $nnn['bio']; ?></p>

                                <?php

                                $sql = "SELECT COUNT(*) FROM comment";
                                $stmt = $connection->query($sql);
                                $TotalRows = $stmt->fetch_row();
                                $TotalPosts = array_shift($TotalRows);
                                $TotalPosts;
                                ?>
                                <?php

                                $sql = "SELECT COUNT(*) FROM register";
                                $stmt = $connection->query($sql);
                                $TotalRows = $stmt->fetch_row();
                                $TotalAdmin = array_shift($TotalRows);
                                $TotalAdmin;
                                ?>


                                <div class="d-flex">
                                    <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin <?php echo $TotalAdmin ?></small>
                                    <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                    <small class="mr-3"><i class="fa fa-comments text-primary"></i> Comment <?php echo $TotalPosts ?></small>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
   

        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center mb-0">

                <?php
    
                ?>
                
                 <?php if (isset($Page)) {
                                if ($Page > 1) { ?>

                            <?php }
                            } ?>
                            
                <li class="page-item ">
                 <a class="page-link" href="blog.php?page=<?php echo $Page - 1; ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                            </li>
                <?php
                
                $sql = "SELECT COUNT(*) FROM blog_profile";
                $stmt =mysqli_query($connection,$sql);
                $RowPagination = $stmt->fetch_array();
                $TotalPosts = array_shift($RowPagination);
              

               $TotalPosts . "<br>";
                $PostPagination = $TotalPosts /3 ; 
                $PostPagination = ceil($PostPagination);

                $PostPagination;
                for ($i = 1; $i <= $PostPagination; $i++) {
                    if (isset($Page)) {
                        if ($i == $Page) {
                            
                ?>
       
                           

                     <li class="page-item active"><a class="page-link" href="blog.php?page=<?php echo  $i;  ?>"><?php echo $i; ?></a></li>
                        <?php } else { ?>

                            </li>
                            <li class="page-item active"><a class="page-link" href="blog.php?page=<?php echo  $i;  ?>"><?php echo $i; ?></a></li>


                <?php }
                    }
                } ?>
                           
                           
                     

                <?php if (isset($Page) && !empty($Page)) {
                    if ($Page + 1 <= $PostPagination) {
                            
                ?> <li>
                        <a class="page-link" href="blog.php?page=<?php echo $Page + 1; ?>" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                        </li>
            </ul>
    <?php }
                } ?>
        </nav>
    



    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <?php
                while ($mmm = mysqli_fetch_assoc($result_footer_get)) {

                ?>

                    <h4 class="text-primary mb-4"><?php echo $mmm['title']; ?></h4>
                    <p><i class="fa fa-map-marker-alt mr-2"></i><?php echo $mmm['address']; ?></p>
                    <p><i class="fa fa-phone-alt mr-2"></i><?php echo $mmm['phone_no']; ?></p>
                    <p><i class="fa fa-envelope mr-2"></i><?php echo $mmm['email']; ?></p>
                <?php } ?>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">

                <h4 class="text-primary mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="about.php"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="service.php"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                    <a class="text-white mb-2" href="project.php"><i class="fa fa-angle-right mr-2"></i>Our Projects</a>
                    <a class="text-white" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Popular Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="about.php"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="service.php"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                    <a class="text-white mb-2" href="project.php"><i class="fa fa-angle-right mr-2"></i>Our Projects</a>
                    <a class="text-white" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">

                <?php

                $connection = mysqli_connect("localhost", "root", "", "banner");


                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];


                    $sql = "INSERT INTO `news` (`name`,`email`) VALUES ('$name','$email')";

                    $query_run = mysqli_query($connection, $sql);
                }


                ?>
                <h4 class="text-primary mb-4">Newsletter</h4>
                <form action="blog.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control border-0" name="name" placeholder="Your Name" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control border-0" name="email" placeholder="Your Email" required="required" />
                    </div>
                    <div>
                        <button name="submit" class="btn btn-lg btn-primary btn-block border-0" type="submit">Submit Now</button>
                    </div>
                </form>


            </div>
        </div>
        <div class="container border-top border-secondary pt-5">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-white font-weight-bold" href="#">Your Site Name</a>. All Rights Reserved. Designed by
                <a class="text-white font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>