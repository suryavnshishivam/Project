<?php
include('includes/header.php'); 
include('includes/navbar.php'); 


if (isset($_POST["submit"]))
{

  
    $Title=$_POST['title'];
    $Heading=$_POST['heading'];
    
    $sql="INSERT INTO `client_head` (`title`,`heading`) VALUES ('$Title','$Heading')"; 
    $query_run = mysqli_query($connection,$sql); 

    
            if($query_run)
            {
           
                $_SESSION['status'] = "Client  head Added";
                $_SESSION['status_code'] = "success";
                header('location:client_head.php');
                
            }
            else 
            {
                $_SESSION['status'] = "Client head Not Added";
                $_SESSION['status_code'] = "error";
                header('location:client_head.php');
                
            }
        }

      


?>


<div class="modal fade" id="image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Client Head</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="client_head.php" method="POST" > 

        <div class="modal-body">

        <div class="form-group">
      
                    
                    <input type="text" name="title" class="form-control" placeholder="Enter Title" >
                    <input type="text" name="heading" class="form-control" placeholder="Enter Heading" >
                    
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
    <h6 class="m-0 font-weight-bold text-primary"> Add Client Head
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#image">
              Add Client Head
            </button> -->
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
 

        $query="SELECT * FROM  client_head";
       $query_run=mysqli_query($connection,$query);

?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID</th>
            <th> Title </th>
            <th>Heading</th>
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
            <td> <?php echo $row['title']; ?> </td>
            <td> <?php echo $row['heading']; ?> </td>
            
          
            <td>

            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <a href="edit_client_head.php?id=<?php echo $row['id']; ?>"> <button  type="submit" name="edit_client_head" class="btn btn-success"> EDIT</button></a>

            </td>


            <td>
            <input type="hidden" name="id" value="<?php echo $row ['id'];?>">
            <a href="delete_client_head.php?id=<?php echo $row['id']; ?>"> <button  class="btn btn-warning"> DELETE</button></a>
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