<?php
include('includes/header.php'); 
include('includes/navbar.php'); 


if (isset($_POST["submit"]))
{

  
    $Categories_Title=$_POST['categories_title'];
    
    
    
   $sql="INSERT INTO `categories` (`categories_title`) VALUES ('$Categories_Title')";
    $query_run = mysqli_query($connection,$sql); 

    
    

            if($query_run)
            {
            
                $_SESSION['status'] = "categories Added";
                $_SESSION['status_code'] = "success";
                header('location:categories.php');
                
            }
            else 
            {
                $_SESSION['status'] = "categories Not Added";
                $_SESSION['status_code'] = "error";
                header('location:categories.php');
                
            }
        }

      


?>


<div class="modal fade" id="image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Categories </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="categories.php" method="POST" > 

        <div class="modal-body">

        <div class="form-group">
      
                    <input type="text" name="categories_title" class="form-control" placeholder="Enter Title" >
                   
                    
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


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Add Categories
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#image">
              Add Categories
            </button>
    </h6>
  </div>

  <div class="card-body">
    
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
 

        $query="SELECT * FROM  categories";
       $query_run=mysqli_query($connection,$query);

?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID</th>
            <th> Categories Title </th>
            <th>EDIT</th>
            <th>DELETE</th>
            
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
            <td> <?php echo $row['categories_title']; ?> </td>
     
            
            
          
            <td>

            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <a href="edit_categories.php?id=<?php echo $row['id']; ?>"> <button  type="submit" name="edit_categories" class="btn btn-success"> EDIT</button></a>

            </td>


            <td>
            <input type="hidden" name="id" value="<?php echo $row ['id'];?>">
            <a href="delete_categories.php?id=<?php echo $row['id']; ?>"> <button  class="btn btn-warning"> DELETE</button></a>
            </td>

          </tr>
          <?php
          } }
          //else{
            //echo "No Record Found";
          
     ?>
        
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>