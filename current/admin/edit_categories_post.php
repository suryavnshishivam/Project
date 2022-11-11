<?php
include('includes/header.php'); 
include('includes/navbar.php'); 

if(isset($_POST['update_categories_post_btn']))
{
  $id=$_GET["id"];
  $image= $_FILES['image']['name']; 
  $path="img/".basename($_FILES['image']['name']);
  $Categories=$_POST['categories'];
 

  if(!empty($_FILES["image"]["name"]))
  {
    $query = "UPDATE `post` SET `image` = '$image' , `categories`='$Categories' WHERE `id` = '$id'"; 
  }
  else
  {
   $query = "UPDATE `post` SET  `categories`='$Categories' WHERE `id` = '$id'";  
  }
   $query_run=mysqli_query($connection,$query);  

  if($query_run)
  {
   
    move_uploaded_file($_FILES['image']['tmp_name'],$path);

      $_SESSION['status'] = "Categories image updated";
      $_SESSION['status_code'] = "success";
     header('location:post_seen.php');
  }
  else 
  {
      $_SESSION['status'] = "Categories  image Not updated";
      $_SESSION['status_code'] = "error";
      header('location:post_seen.php');
  }
 }
 
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Edit Categories Image
           
    </h6>
  </div>

   <div class="card-body">

  <?php    
   $connection= mysqli_connect("localhost","root","","banner"); 

    $id= $_GET["id"];
    $query="SELECT * FROM post WHERE id='{$id}'";
    $query_run=mysqli_query($connection, $query);

    foreach ($query_run as $row )
    {
    
        ?>

      <form action="edit_categories_post.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
            
              
            <div class="form-group">
                <label > Edit Categories Image </label>
            </div>

                <div class="form-group">

              
                <img src="img/<?php echo $row["image"]; ?>"  witdh="100%" height="100" alt="">
                <input type="file" name="image" class="from-control p-1" > <br>
                
                
            <label for="CategoryTitle"> <span class="FieldInfo"> Chose category </span> </label>
            <select class="form-control" id="CategoryTitle" name="categories">
</div>


<div class="table-responsive">

<?php 
//fetching all the categories from categories table
$connecting=mysqli_connect("localhost","root","","banner");

$sql="SELECT * FROM  categories";
 $stmt=$connecting->query($sql);

 
     while ($DataRows=mysqli_fetch_assoc($stmt))
     {

  $id=$DataRows["id"];
 $Categories_title=$DataRows["categories_title"];

 ?>

<option> <?php  echo $Categories_title; ?> </option>
     <?php } ?>
</select>
</div>

                 <a href="post_seen.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="update_categories_post_btn" class="btn btn-primary" > Updated  </button>

                </form>

                <?php }?>





 <?php
include('includes/scripts.php');
//include('includes/footer.php');
?>