<?php
include('includes/header.php'); 
include('includes/navbar.php'); 

if(isset($_POST['Update_header']))
{
    $id=$_GET['id'];

    $Pages=$_POST['pages'];
    $Link=$_POST['link'];
  
  $query = "UPDATE `header` SET `pages`='$Pages',`link`='$Link' WHERE `id` = '$id'";  
  $query_run=mysqli_query($connection,$query);  

  if($query_run)
  {
   
 
      $_SESSION['status'] = "header  updated";
      $_SESSION['status_code'] = "success";
      header('location:header.php');
  }
  else 
  {
      $_SESSION['status'] = "header Not updated";
      $_SESSION['status_code'] = "error";
      header('location:header.php');
  }
 }
 
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Edit Header
           
    </h6>
  </div>

   <div class="card-body">

  <?php    
   $connection= mysqli_connect("localhost","root","","banner"); 

    $id= $_GET["id"];
    $query="SELECT * FROM header WHERE id='{$id}'";
    $query_run=mysqli_query($connection, $query);

    foreach ($query_run as $row )
    {
    
        ?>

      <form action="edit_header.php?id=<?php echo $row['id']; ?>" method="POST">
            
              
            <div class="form-group">
                <label > Edit Header</label>
            </div>

                <div class="form-group">

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    
               
                    <input type="text" name="pages" class="form-control" value="<?php echo $row['pages']; ?>" >
                    <input type="text" name="link" class="form-control" value="<?php echo $row['link']; ?>" >
                   
                   
                    </div>
                 <a href="header.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="Update_header" class="btn btn-primary" > Updated  </button>

                </form>

                <?php }?>

 <?php
include('includes/scripts.php');
//include('includes/footer.php');
?>