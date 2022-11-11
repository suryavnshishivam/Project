<?php
include('includes/header.php'); 
include('includes/navbar.php'); 

if(isset($_POST['update_features_img_btn']))
{
  $id=$_GET["id"];
  $img= $_FILES['img']['name']; 
  $path="img/".basename($_FILES['img']['name']);
  
  
  $query = "UPDATE `features_image` SET `img` = '$img' WHERE `id` = '$id'";  
  $query_run=mysqli_query($connection,$query);  

  if($query_run)
  {
   
    move_uploaded_file($_FILES['img']['tmp_name'],$path);
      $_SESSION['status'] = "Features image updated";
      $_SESSION['status_code'] = "success";
     header('location:Features_image.php');
  }
  else 
  {
      $_SESSION['status'] = "Features  image Not updated";
      $_SESSION['status_code'] = "error";
      header('location:Features_image.php');
  }
 }
 
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Edit Features Image
           
    </h6>
  </div>

   <div class="card-body">

  <?php    
   $connection= mysqli_connect("localhost","root","","banner"); 

    $id= $_GET["id"];
    $query="SELECT * FROM features_image WHERE id='{$id}'";
    $query_run=mysqli_query($connection, $query);

    foreach ($query_run as $row )
    {
    
        ?>

      <form action="edit_feature_img.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
            
              
            <div class="form-group">
                <label > Edit features Image </label>
            </div>

                <div class="form-group">

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <img src="img/<?php echo $row["img"]; ?>"  witdh="100%" height="100" alt="">
                <input type="file" name="img" class="from-control p-1" >
                   
                   
                    </div>
                 <a href="Features_image.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="update_features_img_btn" class="btn btn-primary" > Updated  </button>

                </form>

                <?php }?>

 <?php
include('includes/scripts.php');
//include('includes/footer.php');
?>