<?php
include('includes/header.php'); 
include('includes/navbar.php'); 






if(isset($_POST['update_about_btn']))
{

  $id = $_GET['id'];
  
  $Image= $_FILES['image']['name']; 
  $path="image_about/".basename($_FILES['image']['name']);
  $Title=$_POST['title'];
  
 
  
  
  if (!empty($_FILES['image']['name']))
  {
    $query = "UPDATE `about_try` SET `image` = '$Image', `title` = '$Title' WHERE `id` = '$id' ";  
  }
  
  
else{
 
  $query = "UPDATE `about_try` SET `title` = '$Title' WHERE `id` = '$id' ";
  }

 $query_run=mysqli_query($connection,$query); 

 if($query_run)
 {
   move_uploaded_file($_FILES['image']['tmp_name'],$path);
  

     $_SESSION['status'] = "logo updated";
     $_SESSION['status_code'] = "success";
       header('Location:about_try.php');
 }
 else 
 {
     $_SESSION['status'] = "logo Not updated";
     $_SESSION['status_code'] = "error";
     header('Location:about_try.php');
 }
}


?>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Edit About try
           
    </h6>
  </div>

   <div class="card-body">

  <?php    
   $connection= mysqli_connect("localhost","root","","banner"); 
   
    $id=$_GET["id"];
    $query="SELECT * FROM about_try WHERE id='{$id}'";
    $query_run=mysqli_query($connection, $query);

    foreach ($query_run as $row )
    {
        ?>
        

            <form action="edit_about_try.php?id=<?php echo $row["id"];  ?>" method="POST" enctype="multipart/form-data">
            
              
            <div class="form-group">
                <label > Edit About Data</label>
            </div>

                <div class="form-group">
                    
                    <img src="image_about/<?php echo $row["image"]; ?>"  witdh="100%" height="100" alt="">
                    <input type="file" name="image" class="form-control p-1" >
                    <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>" >
                   
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