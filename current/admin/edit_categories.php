<?php
include('includes/header.php'); 
include('includes/navbar.php'); 

if(isset($_POST['update_categories_btn']))
{
  $id=$_GET["id"];
  $Categories_Title=$_POST['categories_title'];
  


  $query = "UPDATE `categories` SET `categories_title` = '$Categories_Title' WHERE `id` = '$id'";  
 
  $query_run=mysqli_query($connection,$query);  

  if($query_run)
  {
   
 
      $_SESSION['status'] = "Categories updated";
      $_SESSION['status_code'] = "success";
      header('location:categories.php');
  }
  else 
  {
      $_SESSION['status'] = "Categories Not updated";
      $_SESSION['status_code'] = "error";
      header('location:categories.php');
  }
 }
 
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Edit Categories
           
    </h6>
  </div>

   <div class="card-body">

  <?php    
    $connection= mysqli_connect("localhost","root","","banner"); 

    $id= $_GET["id"];
    $query="SELECT * FROM categories WHERE id='{$id}'";
    $query_run=mysqli_query($connection, $query);

    foreach ($query_run as $row )
    {
    
        ?>

      <form action="edit_categories.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data>
            
              
            <div class="form-group">
                <label > Edit categories</label>
            </div>

                <div class="form-group">

                
                
                    <input type="text" name="categories_title" class="form-control" value="<?php echo $row['categories_title']; ?>" >
                   
                   
                    </div>
                 <a href="categories.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="update_categories_btn" class="btn btn-primary" > Updated  </button>

                </form>

                <?php }?>

 <?php
include('includes/scripts.php');
//include('includes/footer.php');
?>