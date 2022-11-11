<?php
include('includes/header.php'); 
include('includes/navbar.php'); 



if(isset($_POST['update_user_btn']))
{
 $id = $_GET['id'];
 $username=$_POST['name'];
 $password=$_POST['password'];
 
 
  $query = "UPDATE register_user SET name='$username',  password='$password' WHERE id='$id' ";
$query_run=mysqli_query($connection,$query);

if ($query_run)
{
        $_SESSION['success']="Your Data is Updated";
        header('location:register_user.php');
       
}else
{
    $_SESSION['status']="Your Data is Not Updated";
    header('location:register_user.php');
  

}
}

?>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Edit User Profile 
           
    </h6>
  </div>

  <div class="card-body">
    
  <?php    
    $connection= mysqli_connect("localhost","root","","banner");

    $id= $_GET['id'];
    $query="SELECT * FROM register_user WHERE id='{$id}'";
    $query_run=mysqli_query($connection, $query);

    foreach ($query_run as $row )
    {
        ?>

            <form action="register_user_edit.php?id=<?php echo $row['id']; ?>" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            <div class="form-group">
                <label> Username </label>
                <input type="text" name="name" value="<?php echo $row['name'] ?>" class="form-control" placeholder="Enter Username">
            </div>
           
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" value="<?php echo $row['password'] ?>" class="form-control" placeholder="Enter Password">
            </div>
           



            <a href="register_user.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="update_user_btn" class="btn btn-primary" > Updated  </button>

                </form>
            <?php
    }    


?>     

  </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->


<?php
include('includes/scripts.php');
//include('includes/footer.php');
?>