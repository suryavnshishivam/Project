<?php
include('includes/header.php'); 
include('includes/navbar.php'); 






if(isset($_POST['update_about_btn']))
{

  $id = $_GET['id'];
  $Title=$_POST['title'];
  $Title1 = $_POST['title1'];
 
  $Description=$_POST['edit_description'];
  
  $logo= $_FILES['logo']['name']; 
  $path="logo/".basename($_FILES['logo']['name']);

  if (!empty($_FILES['logo']['name']))
  {
    $query = "UPDATE `about` SET `title` = '$Title', `title1` = '$Title1',`description` = '$Description',
    `logo` = '$logo' WHERE `id` = '$id' ";  
  }
  
else{
 
  $query = "UPDATE `about` SET `title` = '$Title', `title1` = '$Title1', `description` = '$Description' WHERE `id` = '$id' ";
  }

 $query_run=mysqli_query($connection,$query); 

 if($query_run)
 {
   move_uploaded_file($_FILES['logo']['tmp_name'],$path);
 

     $_SESSION['status'] = "logo updated";
     $_SESSION['status_code'] = "success";
       header('Location:aboutus.php');
 }
 else 
 {
     $_SESSION['status'] = "logo Not updated";
     $_SESSION['status_code'] = "error";
     header('Location:aboutus.php');
 }
}


?>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Edit About 
           
    </h6>
  </div>

   <div class="card-body">

  <?php    
   $connection= mysqli_connect("localhost","root","","banner"); 
   
    $id=$_GET["id"];
    $query="SELECT * FROM about WHERE id='{$id}'";
    $query_run=mysqli_query($connection, $query);

    foreach ($query_run as $row )
    {
        ?>
        

            <form action="edit_about.php?id=<?php echo $row["id"];  ?>" method="POST" enctype="multipart/form-data">
            
              
            <div class="form-group">
                <label > Edit About Data</label>
            </div>

                <div class="form-group">
                    
                    <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>" >
                    <input type="text" name="title1" class="form-control" value="<?php echo $row['title1']; ?>" >
                  
                    <input type="text" name="edit_description" class="form-control" value="<?php echo $row['description']; ?>">
                    
                    <img src="logo/<?php echo $row["logo"]; ?>"  witdh="100%" height="100" alt="">
                    <input type="file" name="logo" class="form-control p-1" >
                  
                </div>
           
           
           


            <a href="aboutus.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="update_about_btn" class="btn btn-primary" > Updated  </button>

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