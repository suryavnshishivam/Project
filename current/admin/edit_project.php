<?php
include('includes/header.php'); 
include('includes/navbar.php'); 

if(isset($_POST['update_project_btn']))
{
  $id=$_GET["id"];
  $Title = $_POST['title'];
  $Project = $_POST['project'];
  
  
  $query = "UPDATE `project` SET `title` = '$Title', `Project` = '$Project' WHERE `id` = '$id'";  
  $query_run=mysqli_query($connection,$query);  

  if($query_run)
  {
   
 
      $_SESSION['status'] = "Project updated";
      $_SESSION['status_code'] = "success";
      header('location:project.php');
  }
  else 
  {
      $_SESSION['status'] = "Project Not updated";
      $_SESSION['status_code'] = "error";
      header('location:project.php');
  }
 }
 
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Edit Project
           
    </h6>
  </div>

   <div class="card-body">

  <?php    
   $connection= mysqli_connect("localhost","root","","banner"); 

    $id= $_GET["id"];
    $query="SELECT * FROM project WHERE id='{$id}'";
    $query_run=mysqli_query($connection, $query);

    foreach ($query_run as $row )
    {
    
        ?>

      <form action="edit_project.php?id=<?php echo $row['id']; ?>" method="POST">
            
              
            <div class="form-group">
                <label > Edit Project </label>
            </div>

                <div class="form-group">

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    
                    <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>" >
                    <input type="text" name="project" class="form-control" value="<?php echo $row['project']; ?>" >
                   
                    </div>
                 <a href="project.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="update_project_btn" class="btn btn-primary" > Updated  </button>

                </form>

                <?php }?>

 <?php
include('includes/scripts.php');
//include('includes/footer.php');
?>