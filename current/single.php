
<?php 

$connection=mysqli_connect("localhost","root","","banner");


$result_footer_get= $connection->query("SELECT * FROM footer_get");
$result_blog_profile= $connection->query("SELECT * FROM blog_profile");
$result_comment= $connection->query("SELECT * FROM comment WHERE status ='ON'");
$result_header = $connection->query("SELECT * FROM header");
$result_blog_profile_2= $connection->query("SELECT * FROM blog_profile ORDER BY id desc LIMIT 0,5");
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
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Blog Detail</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="index.php">Home</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">Blog Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Detail Start -->
    <div class="container py-5">
        <div class="row pt-5">
            <div class="col-lg-8">
                <div class="d-flex flex-column text-left mb-4">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Blog Detail Page</h6>
                    <h1 class="mb-4 section-title">Diam dolor est ipsum clita lorem</h1>
                    <div class="d-index-flex mb-2">
                    <?php 
               
               $sql ="SELECT COUNT(*) FROM comment";
               $stmt=$connection->query($sql);
               $TotalRows=$stmt->fetch_row();
               $TotalPosts=array_shift($TotalRows);
               $TotalPosts;
               ?>
                       <?php 
              
              $sql ="SELECT COUNT(*) FROM register";
              $stmt=$connection->query($sql);
              $TotalRows=$stmt->fetch_row();
              $TotalAdmin=array_shift($TotalRows);
              $TotalAdmin;
              ?>
                        <span class="mr-3"><i class="fa fa-user text-primary"></i> Admin <?php echo $TotalAdmin ?></span>
                        <span class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</span>
                        <span class="mr-3"><i class="fa fa-comments text-primary"></i>  Comment <?php echo $TotalPosts ?></span>
                    </div>
                </div>

                <div class="mb-5">

                <?php 

                $id=$_GET['id'];
                $result_blog_profile_1= $connection->query("SELECT * FROM blog_profile WHERE id='$id'");
                        while ($bbb = mysqli_fetch_assoc($result_blog_profile_1))
                        {       
                ?>
                   <h3 class="mb-4 ml-3 section-title">Blog Post</h3>
                    <img src="admin/blog_profile_img/<?= $bbb['image']; ?> " alt="Image" width="100%" height="300px">
                    <h2> <?php echo $bbb['title']; ?></h2>
                    <h6 class="card-title" > <?php echo $bbb['bio']; ?> </h6>
                    
                    <?php } ?>

                </div>



                <div class="mb-5 mx-n3">
                    <h3 class="mb-4 ml-3 section-title">Related Post</h3>
                    <div class="owl-carousel service-carousel position-relative">
                    <?php
                         while ($nnn = mysqli_fetch_assoc($result_blog_profile))
                         {  
                   
                   ?>
                        <div class="card border-0 mx-3">
                            <img class="card-img-top" src="admin/blog_profile_img/<?= $nnn['image']; ?>" alt="">
                            <div class="card-body bg-light p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <a class="btn btn-primary" href="single.php?id=<?php echo $nnn['id']; ?>"><i class="fa fa-link"></i></a>
                                    <h5 class="m-0 ml-3 text-truncate"><?php echo $nnn['title']; ?></h5>
                                </div>
                                <p><?php echo $nnn['bio']; ?></p>
                                <div class="d-flex">
                                    <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                    <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                    <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        
                       
                    </div>
                </div>
                <?php 
                        while ($zzz = mysqli_fetch_assoc($result_comment))
                        {       
                ?>
                <div class="mb-5">
                    <h3 class="mb-4 section-title">Comments</h3>
                    <div class="media mb-4">
                        <img src="img/user.jpg" alt="Image" class=".img-fluid-comment mr-3 mt-1" style="width: 45px;">
                        <div class="media-body">
                            <h6><?php echo $zzz['name']; ?><small><i>  </i></small></h6>
                            <p><?php echo $zzz['message']; ?></p>
                            <button class="btn btn-sm btn-light">Reply</button>
                          
                        </div>
                    </div>
                   

                    
                </div>
                <?php } ?>
                              
 <?php    

$connection= mysqli_connect("localhost","root","","banner");


if (isset($_POST['submit']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$website = $_POST['website'];
$message = $_POST['message'];



$sql="INSERT INTO `comment` (`name`,`email`,`website`,`message`,`status`) VALUES ('$name','$email','$website','$message','OFF')"; 

$query_run = mysqli_query($connection,$sql); 

}


?>

                <div class="bg-light p-5">
                    <h3 class="mb-4 section-title">Leave a comment</h3>
                    <form action="single.php" method="POST">
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="url" name="website" class="form-control" id="website">
                        </div>

                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-0">
                            <input type="submit" name="submit" value="Leave Comment" class="btn btn-primary px-3">
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-4 mt-5 mt-lg-0">
                <div class="d-flex flex-column text-center bg-secondary mb-5 py-5 px-4">
                    <img src="img/user.jpg" class=".img-fluid-comment mx-auto mb-3" style="width: 100px;">
                    <h3 class="text-primary mb-3">John Doe</h3>
                    <p class="text-white m-0">Conset elitr erat vero dolor ipsum et diam, eos dolor lorem ipsum, ipsum ipsum sit no ut est. Guber ea ipsum erat kasd amet est elitr ea sit.</p>
                </div>
                <?php 

                if (isset($_GET["SearchButton"])){
                 $Search =$_GET["Search"]; 

                    $sql = "SELECT * FROM  post
                     WHERE Complete LIKE :search
                     OR Running LIKE    :search 
                     OR Complete LIKE :search 
                     OR post    LIKE :search ";
                     $stmt =$connecting->prepare($sql);
                     $stmt->bindValue(':search','%'.$Search.'%');
                     $stmt->execute();
                }
                ?>
                <div class="mb-5">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-lg"  name="SearchButton" placeholder="Search here">
                            <div class="input-group-append">
                                <span class="input-group-text bg-transparent text-primary"><i
                                        class="fa fa-search"></i></span>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="mb-5">
                    <h3 class="mb-4 section-title">Categories</h3>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Web Design
                            <span class="badge badge-primary badge-pill">150</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Web Development
                            <span class="badge badge-primary badge-pill">131</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Online Marketing
                            <span class="badge badge-primary badge-pill">78</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Keyword Research
                            <span class="badge badge-primary badge-pill">56</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Email Marketing
                            <span class="badge badge-primary badge-pill">98</span>
                        </li>
                    </ul>
                </div>

                <div class="mb-5">
                    <img src="img/blog-1.jpg" alt="" class="img-fluid">
                </div>

                <div class="mb-5">
                    <h3 class="mb-4 section-title">Recent Post</h3>
                    <?php 
                        while ($vvv = mysqli_fetch_assoc($result_blog_profile_2))
                        {       
                ?>
                

                    <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                        <img class="img-fluid" src="admin/img/<?= $vvv['image']; ?>" style="width: 80px; height: 80px;" alt="">
                        <div class="d-flex flex-column pl-3">
                            <a class="text-dark mb-2" href="single.php?id=<?php echo $vvv['id']; ?>"><?php echo $vvv['title'];  ?></a>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                        </div>
                    </div>

                    <?php } ?>

                 

                </div>
                <div class="mb-5">
                    <img src="img/blog-2.jpg" alt="" class="img-fluid">
                </div>
                <div class="mb-5">
                    <h3 class="mb-4 section-title">Tag Cloud</h3>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-outline-primary m-1">Design</a>
                        <a href="" class="btn btn-outline-primary m-1">Development</a>
                        <a href="" class="btn btn-outline-primary m-1">Marketing</a>
                        <a href="" class="btn btn-outline-primary m-1">SEO</a>
                        <a href="" class="btn btn-outline-primary m-1">Writing</a>
                        <a href="" class="btn btn-outline-primary m-1">Consulting</a>
                    </div>
                </div>
                <div class="mb-5">
                    <img src="img/blog-3.jpg" alt="" class="img-fluid">
                </div>
                <div>
                    <h3 class="mb-4 section-title">Plain Text</h3>
                    Aliquyam sed lorem stet diam dolor sed ut sit. Ut sanctus erat ea est aliquyam dolor et. Et no consetetur eos labore ea erat voluptua et. Et aliquyam dolore sed erat. Magna sanctus sed eos tempor rebum dolor, tempor takimata clita sit et elitr ut eirmod.
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
            <?php
                         while ($mmm = mysqli_fetch_assoc($result_footer_get))
                         {  
                   
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

    $connection= mysqli_connect("localhost","root","","banner");


  if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
  
   
 $sql="INSERT INTO `news` (`name`,`email`) VALUES ('$name','$email')"; 
    
    $query_run = mysqli_query($connection,$sql); 

}


?>
                <h4 class="text-primary mb-4">Newsletter</h4>
                <form action="single.php" method="POST">
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