<?php
include('includes/header.php'); 
include('includes/navbar.php'); 

if(isset($_POST['update_blog_profile']))
{
    $id=$_GET['id'];
    $image= $_FILES['image']['name']; 
    $path="blog_profile_img/".basename($_FILES['image']['name']);
    $Title=$_POST['title'];
    $Bio=$_POST['bio'];
    

  if(!empty($_FILES["image"]["name"]))
  {
   $query = "UPDATE `blog_profile` SET `image` = '$image' , `title`='$Title' , `bio`='$Bio' WHERE `id` = '$id'";
  }
  else
  {
  $query = "UPDATE `blog_profile` SET  `title`='$Title' , `bio`='$Bio' WHERE `id` = '$id'";  
  }
    $query_run=mysqli_query($connection,$query);   

  if($query_run)
  {
   
    move_uploaded_file($_FILES['image']['tmp_name'],$path);

      $_SESSION['status'] = "Blog Profile updated";
      $_SESSION['status_code'] = "success";
      header('Location:blog_profile.php');
  }
  else 
  {
      $_SESSION['status'] = "Blog Profile Not updated";
      $_SESSION['status_code'] = "error";
      header('Location:blog_profile.php');
  }
 }
 
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Edit Blog Profile
           
    </h6>
  </div>

   <div class="card-body">

  <?php    
   $connection= mysqli_connect("localhost","root","","banner"); 

    $id= $_GET["id"];
    $query="SELECT * FROM blog_profile WHERE id='{$id}'";
    $query_run=mysqli_query($connection, $query);

    foreach ($query_run as $row )
    {
    
        ?>

      <form action="edit_blog_profile.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
            
              
            <div class="form-group">
                <label > Edit Blog</label>
            </div>

                <div class="form-group">

                
                <img src="blog_profile_img/<?php echo $row["image"]; ?>"  witdh="100%" height="100" alt="">
                <input type="file" name="image" class="from-control p-1" > <br>
                
                <input type="text" name="title" class="form-control" placeholder="Enter Title" value="<?php echo $row['title']; ?>">
                <input type="text" name="bio" class="form-control" placeholder="Enter bio" value="<?php echo $row['bio']; ?>">

</div>


<div class="table-responsive">

<?php 
//fetching all the categories from categories table
$connecting=mysqli_connect("localhost","root","","banner");

$sql="SELECT * FROM  blog_profile";
 $stmt=$connecting->query($sql);

 
     while ($DataRows=mysqli_fetch_assoc($stmt))
     {

  $id=$DataRows["id"];
  $image=$DataRows["image"];
  $Title=$DataRows["title"];
  $Bio=$DataRows["bio"];


 ?>


     <?php } ?>
</select>
</div>

                 <a href="blog_profile.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="update_blog_profile" class="btn btn-primary" > Updated  </button>

                </form>

                <?php }?>





 <?php
include('includes/scripts.php');
//include('includes/footer.php');
?>