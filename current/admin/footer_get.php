<?php
include('includes/header.php'); 
include('includes/navbar.php'); 

?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Footer get
     </h6>
  </div>
 <div class="card-body">

 <?php    
    $connection= mysqli_connect("localhost","root","","banner");


  if (isset($_POST['submit']))
{
    $Title = $_POST['title'];
    $Address = $_POST['address'];
    $Phone_no = $_POST['phone_no'];
    $Email = $_POST['email'];
   
 $sql="INSERT INTO `footer_get` (`title`,`address`,`phone_no`,`email`) VALUES ('$Title','$Address','$Phone_no','$Email')"; 
    
    $query_run = mysqli_query($connection,$sql); 

    if($query_run)
    {
     

        $_SESSION['status'] = "Footer Get Added";
        $_SESSION['status_code'] = "success";
        header('Location:footer_get.php');
    }
    else 
    {
        $_SESSION['status'] = "Footer Get Not Added";
        $_SESSION['status_code'] = "error";
        header('Location:footer_get.php');
        
    }
}



?>



<div class="modal fade" id="image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Footer Get</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="footer_get.php" method="POST" > 

        <div class="modal-body">

        <div class="form-group">
      
                     <input type="text" name="title" class="form-control" placeholder="Enter Title">
                    <input type="text" name="address" class="form-control" placeholder="Enter Address">
                    <input type="text" name="phone_no" class="form-control" placeholder="Enter Phone Number">
                    <input type="text" name="email" class="form-control" placeholder="Enter Email">
                    
                     
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
    <!-- <h6 class="m-0 font-weight-bold text-primary"> Add Footer Get -->
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#image">
              Add Footer Get
            </button> -->
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
        
        $query="SELECT * FROM  footer_get ";
        $query_run=mysqli_query($connection,$query);

?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th>Title</th>
            <th>Address </th>
            <th>Phone Number</th>
            <th>Email </th>
            <th>Edit</th>
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
            <td> <?php echo $row['address']; ?> </td>
            <td> <?php echo $row['phone_no']; ?> </td>
            <td> <?php echo $row['email']; ?> </td>

            <td>

                    <i <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                   <a href="edit_footer_get.php?id=<?php echo $row['id']; ?>"> <button  type="submit" name="edit_footer_get" class="btn btn-success"> EDIT</button></a>
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
<!-- edit form -->



<?php
include('includes/scripts.php');
//include('includes/footer.php');
?>