<?php
include('includes/header.php'); 
include('includes/navbar.php'); 



if (isset($_POST['edit_banner_btn']))
{
    $id= $_POST['edit_banner_id'];
    $query="SELECT * FROM banner WHERE id='$id'";
    $query_run=mysqli_query($connection, $query);


}



if(isset($_POST['update_banner_btn']))
{
 $id = $_GET['id'];
 $image= $_FILES['image']['name'];
 $path="photos/".basename($_FILES['image']['name']);
 $Text=$_POST['text'];
 $Text1=$_POST['text1'];

 if(!empty($_FILES["image"]["name"]))
 {
  $query = "UPDATE `banner` SET `image`='$image',`text`='$Text',`text1`='$Text1' WHERE `banner`.`id` = '$id'"; 

 }
 else
  {
    $query = "UPDATE `banner` SET `text`='$Text',`text1`='$Text1' WHERE `banner`.`id` = '$id'"; 
 }

$query_run=mysqli_query($connection,$query); 



 if ($query_run)
{
  move_uploaded_file($_FILES['image']['tmp_name'],$path);
        $_SESSION['success']="Your Banner is Updated";
        header('Location:banner.php');
} else
{
    $_SESSION['status']="Your Banner is Not Updated";
    header('Location:banner.php');
}

}


?>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Edit Banner 
           
    </h6>
  </div>

  <div class="card-body">
  <?php    
    $connection= mysqli_connect("localhost","root","","banner");
 
    $id= $_GET['id'];
    $query="SELECT * FROM banner WHERE id='{$id}'";
    $query_run=mysqli_query($connection, $query);

    foreach ($query_run as $row )
    {
        ?>
        

            <form action="edit_banner.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            <div class="form-group">
                <label > Banner</label>
            </div>

                <div class="form-group">
                  <img src="photos/<?php echo $row["image"]; ?>"  witdh="100%" height="100" alt="">
                    <input type="file" name="image" class="from-control p-1">
                    <input type="text" name="text" class="form-control" placeholder="Enter Text" value="<?php echo $row['text']; ?>">
                    <input type="text" name="text1" class="form-control" placeholder="Enter Text" value="<?php echo $row['text1']; ?>">
                </div>
           
           
           


            <a href="banner.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="update_banner_btn" class="btn btn-primary" > Updated  </button>

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