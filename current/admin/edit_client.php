<?php
include('includes/header.php'); 
include('includes/navbar.php'); 

if(isset($_POST['update_client']))
{
  $id=$_GET["id"];
  $image= $_FILES['image']['name']; 
  $path="client_img/".basename($_FILES['image']['name']);
  $Name=$_POST['name'];
  $Profession=$_POST['profession'];
  $Feed=$_POST['feed'];

  if(!empty($_FILES["image"]["name"]))
  {
   $query = "UPDATE `client` SET `image` = '$image', `name`='$Name', `profession`='$Profession',`feed`='$Feed' WHERE `id` = '$id'";
  }
  else
  {
  
   $query = "UPDATE `client` SET  `name`='$Name', `profession`='$Profession',`feed`='$Feed' WHERE `id` = '$id'";  
  }

  $query_run=mysqli_query($connection,$query);  

  if($query_run)
  {
   
    move_uploaded_file($_FILES['image']['tmp_name'],$path);

      $_SESSION['status'] = "Client updated";
      $_SESSION['status_code'] = "success";
      header('location:client.php');
  }
  else 
  {
      $_SESSION['status'] = "Client Not updated";
      $_SESSION['status_code'] = "error";
      header('location:client.php');
  }
 }
 
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Edit  client
           
    </h6>
  </div>

   <div class="card-body">

  <?php    
   $connection= mysqli_connect("localhost","root","","banner"); 

    $id= $_GET["id"];
    $query="SELECT * FROM client WHERE id='{$id}'";
    $query_run=mysqli_query($connection, $query);

    foreach ($query_run as $row )
    {
    
        ?>

      <form action="edit_client.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
            
              
            <div class="form-group">
                <label > Edit Client </label>
            </div>

                <div class="form-group">

                    
                <img src="client_img/<?php echo $row["image"]; ?>"  witdh="100%" height="100" alt="">
                <input type="file" name="image" class="from-control p-1" >  <br>
                
                <input type="text" name="name" class="from-control p-1" placeholder="Enter Name" value="<?php echo $row['name']?>"> <br>
                
                <input type="text" name="profession" class="from-control p-1" placeholder="Enter Profession" value="<?php echo $row['profession']?>"> <br>
                
                <input type="text" name="feed" class="from-control p-1" placeholder="Enter Feed" value="<?php echo $row['feed']?>">
                   
                   
                    </div>
                 <a href="client.php" class="btn btn-danger" > Cancel</a>
                <button  type="submit"  name="update_client" class="btn btn-primary" > Updated  </button>

                </form>

                <?php }?>

 <?php
include('includes/scripts.php');
//include('includes/footer.php');
?>