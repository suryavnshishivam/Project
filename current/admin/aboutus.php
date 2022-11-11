<?php
include('includes/header.php'); 
include('includes/navbar.php'); 

?>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Edit About Details 
     </h6>
  </div>

  <div class="card-body">
  <?php    
    $connection= mysqli_connect("localhost","root","","banner");


  if (isset($_POST['submit']))
{
   
    $Title=$_POST['title'];
    $Title1 = $_POST['title1'];
   
    $Description=$_POST['edit_description'];
    $logo= $_FILES['logo']['name'];
    $path="logo/".basename($_FILES['logo']['name']);
    
    $sql="INSERT INTO `about` (`title`,`title1`,`description`,`logo`,)  VALUES ('$Title','$Title1','$Description','$logo')";
    
    $query_run = mysqli_query($connection,$sql); 


    

    
    if($query_run)
    {
      move_uploaded_file($_FILES['logo']['tmp_name'],$path);
    

        $_SESSION['status'] = "logo Added";
        $_SESSION['status_code'] = "success";
         header('Location:aboutus.php');
    }
    else 
    {
        $_SESSION['status'] = "logo Not Added";
        $_SESSION['status_code'] = "error";
        header('Location:aboutus.php');
    }
}


    




?>
        

        <div class="modal fade" id="image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Logo </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="aboutus.php" method="POST" enctype="multipart/form-data"> 

        <div class="modal-body">

        <div class="form-group">
      
                    <input type="text" name="title" class="form-control" placeholder="Enter Title">
                    <input type="text" name="title1" class="form-control" placeholder="Enter Title1">
                  
                    <input type="text" name="edit_description" class="form-control" placeholder="Enter Description">
                    
                    <input type="file" name="logo" class="form-control p-1" required placeholder="Select logo">
                    
                    
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
<!-- <div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Add Logo
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#image">
              Add Logo
            </button>
    </h6>
  </div> -->

  
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

        $query="SELECT * FROM  about";
        $query_run=mysqli_query($connection,$query);

?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th>Title </th>
            <th>Title1 </th>
        
            <th>Description</th>
            <th>Logo</th>
           
            <th>EDIT </th>
            <th>DELETE </th>
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
            <td> <?php echo $row['title1']; ?> </td>
    
            <td> <?php echo $row['description']; ?> </td>
            <td>  <img src="logo/<?php echo $row["logo"]; ?>"  witdh="100%" height="80px" alt=""> </td>
         
            
            
            <td>

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<a href="edit_about.php?id=<?php echo $row['id']; ?>"> <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button></a>

</td>


<td>
<input type="hidden" name="id" value="<?php echo $row ['id'];?>">
<a href="delete_aboutus.php?id=<?php echo $row['id']; ?>"> <button  class="btn btn-warning"> DELETE</button></a>
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