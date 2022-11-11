<?php
include('includes/header.php'); 
include('includes/navbar.php'); 

?>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Client Image
     </h6>
  </div>

  <div class="card-body">
  <?php    
    $connection= mysqli_connect("localhost","root","","banner");


  if (isset($_POST['submit']))
{
   $id = ['id'];
    $image= $_FILES['image']['name']; 
    $path="client_image/".basename($_FILES['image']['name']);
   
   $sql="INSERT INTO `client_image` (`image`) VALUES ('$image')"; 
   $query_run = mysqli_query($connection,$sql); 

    if($query_run)
            {
              move_uploaded_file($_FILES['image']['tmp_name'],$path);
                $_SESSION['status'] = " Image Added";
                $_SESSION['status_code'] = "success";
                header('location:client_image.php');
                
            }
            else 
            {
                $_SESSION['status'] = "  Image Not Added";
                $_SESSION['status_code'] = "error";
                header('location:client_image.php');
                
            }
        }


?>
        

        <div class="modal fade" id="image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add  Client Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="client_image.php" method="POST" enctype="multipart/form-data"> 

        <div class="modal-body">

        <div class="form-group">       
        <input type="file" name="image" class="from-control p-1" required>
        </div>
            </div>
             <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-primary">Save</button>
            </div>
            </form>


    </div>
  </div>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#image">
            Add Image
            </button> 
    </h6>
  </div>

  
  <?php
        if(isset($_SESSION['success'])&& $_SESSION['success']!='')
        {
          echo '<h2 class="bg-primary text-white">'.$_SESSION['success'].'</h2>';
          unset($_SESSION['success']);
        }
        if(isset($_SESSION['status'])&& $_SESSION['status']!='')
        {
          echo '<h2 class="bg-danger text-white">'.$_SESSION['status'].'</h2>';
          unset($_SESSION['status']);
        }
    
?>


<div class="table-responsive">
<?php 
    $connection = mysqli_connect("localhost","root","","banner");

        $query="SELECT * FROM  client_image ";
        $query_run=mysqli_query($connection,$query);

?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th>Image</th>
            
            <th>Delete </th>
          
          </tr>
        </thead>
        <tbody>
          <?php
         // if (mysqli_num_row($query_run)>0)
          {
            while ($row=mysqli_fetch_assoc($query_run))
            {
              ?>
     
          <tr>
            <td> <?php echo $row['id']; ?> </td>
            <td> <img src="client_image/<?php echo $row["image"]; ?>"  witdh="100%" height="80px" alt=""></td>
          
           
            

                <td>
                <input type="hidden" name="id" value="<?php echo $row ['id'];?>">
                <a href="delete_client_image.php?id=<?php echo $row['id']; ?>"> <button  class="btn btn-warning"> DELETE</button></a>
                </td>
               
          <?php
          }
          //else{
            //echo "No Record Found";
          }
     ?>
        
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>

  </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->



<?php
include('includes/scripts.php');
//include('includes/footer.php');
?>