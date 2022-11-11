<?php
include('includes/header.php'); 
include('includes/navbar.php'); 


$connection=mysqli_connect("localhost","root","","banner");



if(isset($_POST['update_service_btn']))
{
 $id = $_GET['id'];
 $Image= $_FILES['logo']['name'];
 $path="logo/".basename($_FILES['logo']['name']);
 $Title=$_POST['title'];
 $Service=$_POST['service'];

 if(!empty($_FILES["logo"]["name"]))
 {
 $query = "UPDATE `slide_service` SET `logo`='$Image',`title`='$Title', `service`='$Service' WHERE `id` = '$id'";  
 }
 else
 {
    $query = "UPDATE `slide_service` SET `title`='$Title', `service`='$Service' WHERE `id` = '$id'"; 
 }
 
 $query_run=mysqli_query($connection,$query); 

if ($query_run)
{
       move_uploaded_file($_FILES['logo']['tmp_name'],$path);
        $_SESSION['success']="Your Slide Service is Updated";
        header('Location:slide_service.php');
}else
{
    $_SESSION['status']="Your Slide Service is Not Updated";
    header('Location:slide_service.php');
}

}


?>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Edit Slide_Service 
           
    </h6>
  </div>

  <div class="card-body">
  <?php    
    $connection= mysqli_connect("localhost","root","","banner");
 
    $id= $_GET['id'];
    $query="SELECT * FROM slide_service WHERE id='{$id}'";
    $query_run=mysqli_query($connection, $query);

    foreach ($query_run as $row )
    {
        ?>
        

            <form action="edit_slide_service.php?id=<?php echo $row["id"];  ?>" method="POST"  enctype="multipart/form-data">
            
            <div class="form-group">
                <label > Slide Service</label>
            </div>

                <div class="form-group">
                <img src="logo/<?php echo $row["logo"]; ?>"  witdh="100%" height="100" alt="">
                    <input type="file" name="logo" class="from-control p-1" >
                    <input type="text" name="title" class="form-control" placeholder="Enter Text" value="<?php echo $row['title']; ?>">
                    <input type="text" name="service" class="form-control" placeholder="Enter Text" value="<?php echo $row['service']; ?>">
                </div>
           
           
           


            <a href="slide_service.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="update_service_btn" class="btn btn-primary" > Updated  </button>

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