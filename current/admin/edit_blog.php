<?php
include('includes/header.php'); 
include('includes/navbar.php'); 

if(isset($_POST['update_blog']))
{
  $id=$_GET["id"];
  $Title=$_POST['title'];
  $Header=$_POST['header'];
  
  $query = "UPDATE `blog` SET `title` = '$Title' , `header`='$Header' WHERE `id` = '$id'";  
  $query_run=mysqli_query($connection,$query);  

  if($query_run)
  {
   
 
      $_SESSION['status'] = "Blog updated";
      $_SESSION['status_code'] = "success";
      header('Location:blog.php');
  }
  else 
  {
      $_SESSION['status'] = "Blog Not updated";
      $_SESSION['status_code'] = "error";
      header('Location:blog.php');
  }
 }
 
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Edit Blog
           
    </h6>
  </div>

   <div class="card-body">

  <?php    
    $connection= mysqli_connect("localhost","root","","banner"); 

    $id= $_GET["id"];
    $query="SELECT * FROM blog WHERE id='{$id}'";
    $query_run=mysqli_query($connection, $query);

    foreach ($query_run as $row )
    {
    
        ?>

      <form action="edit_blog.php?id=<?php echo $row['id']; ?>" method="POST">
            
              
            <div class="form-group">
                <label > Edit Blog</label>
            </div>

                <div class="form-group">

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    
                    <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>" >
                    <input type="text" name="header" class="form-control" value="<?php echo $row['header']; ?>" >

                   
                    </div>
                 <a href="edit_blog.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="update_blog" class="btn btn-primary" > Updated  </button>

                </form>

                <?php }?>

 <?php
include('includes/scripts.php');
//include('includes/footer.php');
?>