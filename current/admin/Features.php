<?php
include('includes/header.php'); 
include('includes/navbar.php'); 

?>





<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Features
     </h6>
  </div>

  <div class="card-body">
<div class="modal fade" id="image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Features</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="Features.php" method="POST" > 

        <div class="modal-body">

        <div class="form-group">
      
                    <input type="text" name="header" class="form-control" placeholder="Enter Header">
                    <input type="text" name="bio" class="form-control" placeholder="Enter Bio">
                     
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

<div class="table-responsive">
<?php 
    $connection = mysqli_connect("localhost","root","","banner");
        
        $query="SELECT * FROM  features ";
        $query_run=mysqli_query($connection,$query);

?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th>Header</th>
            <th>Bio </th>
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
            <td> <?php echo $row['header']; ?> </td>
            <td> <?php echo $row['bio']; ?> </td>

            <td>

                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                   <a href="edit_features.php?id=<?php echo $row['id']; ?>"> <button  type="submit" name="edit_features" class="btn btn-success"> EDIT</button></a>
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
<!-- edit form -->



<?php
include('includes/scripts.php');
//include('includes/footer.php');
?>