  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>


  <?php


$connection = mysqli_connect("localhost","root","","banner");

if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirmpassword'];

    if($password === $confirm_password)
    {
        $query = "INSERT INTO register (username,email,password) VALUES ('$username','$email','$password')";
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
           // echo "done";
            $_SESSION['success'] =  "Admin is Added Successfully";
                // Redirect_to('register.php');
        }
        else 
        {
           // echo "not done";
            $_SESSION['status'] =  "Admin is Not Added";
            //Redirect_to('register.php');
        }
    }
    else 
    {
        echo "pass no match";
        $_SESSION['status'] =  "Password and Confirm Password Does not Match";
       // Redirect_to('register.php');
    }

}
?>
<?php




$connection = mysqli_connect("localhost","root","","banner");

if(isset($_POST['postbtn']))
{
    $Image = $_POST['image'];
    $By_Admin = $_POST[' by_admin'];
   
        $query = "INSERT INTO banner (image,by_admin) VALUES ('$Image','$By_Admin')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Banner Added";
                $_SESSION['status_code'] = "success";
                header('Location: banner.php');
            }
            else 
            {
                $_SESSION['status'] = "Banner Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: banner.php');  
            }
        }


?>