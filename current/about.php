<?php

$connection = mysqli_connect("localhost", "root", "", "banner");

$output = $connection->query("SELECT * FROM about_try");
$output_about = $connection->query("SELECT * FROM about");
$result_Feature_img = $connection->query("SELECT * FROM features_image");
$features = $connection->query("SELECT * FROM features");
$features_list = $connection->query("SELECT * FROM features_list");
$result_team1 = $connection->query("SELECT * FROM team1");
$result_team_card = $connection->query("SELECT * FROM team");
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
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">About Us</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="index.php">Home</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="about.php">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->


      <!-- About Start -->
      <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
            <?php
                $i = 0;
                foreach ($output_about as $row) {
                    $actives = '';
                    if ($i == 0) {
                        $actives = 'active';
                    }
                ?>

                    <div class="col-lg-5">
                        <div class="d-flex flex-column align-items-center justify-content-center bg-primary h-100 py-5 px-3">
                            <i class="display-1 font-weight-normal text-secondary mb-3"><img src="admin/logo/<?= $row['logo']; ?>" width="100%" height="100px"></i>
                            <h4 class="display-3 mb-3"><?php echo $row['title']; ?></h4>
                            <h1 class="m-0">Years Experience</h1>
                        </div>
                    </div>
                    
                    <div class="col-lg-7 m-0 my-lg-5 pt-5 pb-5 pb-lg-2 pl-lg-5">
                        <h6 class="text-primary font-weight-normal text-uppercase mb-3">Learn About Us</h6>
                        <h1 class="mb-4 section-title"><?php echo $row['title1']; ?></h1>
                        <p> <?php echo $row['description']; ?></p>
                        <?php $i++;
                    } ?>
                        <div class="row py-2">
                        <?php
                $i = 0;
                foreach ($output as $row) {
                    $actives = '';
                    if ($i == 0) {
                        $actives = 'active';
                    }
                ?>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-4">
                                    <h1><img src="admin/image_about/<?= $row['image']; ?>" width="100%" height="100px"></h1>
                                    <h5 class="text-truncate m-0"><?php echo $row['title']; ?></h5>
                                </div>
                            </div>
                            <?php $i++;
                    } ?>
                          </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Features Start -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mt-5 py-5 pr-lg-5">
                    <?php
                    $p = 0;
                    foreach ($features as $qqq) {
                        $active = '';
                        if ($p == 0) {
                            $active = 'active';
                        }
                    ?>


                        <h6 class="text-primary font-weight-normal text-uppercase mb-3">Why Choose Us?</h6>
                        <h1 class="mb-4 section-title"><?php echo $qqq['header']; ?></h1>
                        <p class="mb-4"><?php echo $qqq['bio']; ?></p>
                    <?php $p++;
                    } ?>

                    <ul class="list-inline">
                        <?php
                        $h = 0;
                        foreach ($features_list as $ooo) {
                            $active = '';
                            if ($h == 0) {
                                $active = 'active';
                            }
                        ?>
                            <li>
                                <h5><i class="far fa-check-square text-primary mr-3"></i><?php echo $ooo['name']; ?></h5>
                            </li>

                        <?php $h++;
                        } ?>
                    </ul>


                    <a href="" class="btn btn-primary mt-3 py-2 px-4">View More</a>

                </div>
                <div class="col-lg-5">


                    <?php
                    while ($kkk = mysqli_fetch_assoc($result_Feature_img)) {
                    ?>

                        <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                            <img width="100%" height="600px" src="admin/img/<?= $kkk['img']; ?> ">
                        <?php } ?>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Team Start -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <?php
                    while ($rrr = mysqli_fetch_assoc($result_team1)) {
                    ?>
                        <div class="py-5 px-4 h-100 bg-primary d-flex flex-column align-items-center justify-content-center">
                            <h6 class="text-white font-weight-normal text-uppercase mb-3"><?php echo $rrr['title']; ?></h6>
                            <h1 class="mb-0 text-center"><?php echo $rrr['header']; ?></h1>
                        </div>
                </div>
            <?php } ?>

            <div class="col-md-8 col-sm-6 p-0 py-sm-5">

                <div class="owl-carousel team-carousel position-relative p-0 py-sm-5">
                    <?php
                    while ($zzz = mysqli_fetch_assoc($result_team_card)) {
                    ?>
                        <div class="team d-flex flex-column text-center mx-3">
                            <div class="position-relative">


                                <img class="img-fluid w-100" src="admin/team_img/<?= $zzz['image']; ?>" alt="">
                                <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white"><?php echo $zzz['name']; ?></h5>
                                <p class="m-0"><?php echo $zzz['designation']; ?></p>

                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


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
                <form action="about.php" method="POST">
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