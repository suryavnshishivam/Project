<?php
include('includes/header.php'); 
include('includes/navbar.php'); 

?>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Services
     </h6>
  </div>

  <div class="card-body">
  <?php    
    $connection= mysqli_connect("localhost","root","","banner");


  if (isset($_POST['submit']))
{
   
    $Title=$_POST['title'];
    $Service = $_POST['service'];
    $Full_read = $_POST['full_read'];
   
    
   

    $sql="INSERT INTO `service` (`title`,`service`,`full_read`)
     VALUES ('$Title','$Service','$Full_read')";
    
    $query_run = mysqli_query($connection,$sql); 

    
    if($query_run)
    {
        
        // echo "Saved";
        $_SESSION['status'] = "Service  Added";
        $_SESSION['status_code'] = "success";
        header('Location:service.php');
        
    }
    else 
    {
        $_SESSION['status'] = "Service Not Added";
        $_SESSION['status_code'] = "error";
        header('Location:service.php');
         
    }
}

?>
        

        <div class="modal fade" id="image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Services</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="service.php" method="POST" > 

        <div class="modal-body">

        <div class="form-group">
      
                    <input type="text" name="title" class="form-control" placeholder="Enter Title">
                    <input type="text" name="service" class="form-control" placeholder="Enter Service">
                    <input type="text" name="full_read" class="form-control" placeholder="Enter Full_read">
                    
                    
               
                    
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


            <?php
        


?>     


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
          <!--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#image">
            Add Services-->
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

        $query="SELECT * FROM  service ";
        $query_run=mysqli_query($connection,$query);

?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th>Title </th>
            <th>Service </th>
            <th>Full_Read </th>
            <th>Edit </th>
          
          
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
            <td> <?php echo $row['service']; ?> </td>
            <td> <?php echo $row['full_read']; ?> </td>
            
           
            
            
            <td>
                <form action="edit_service.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="edit_service" class="btn btn-success"> EDIT</button>
                </form>
            </td>
          
          </tr>
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