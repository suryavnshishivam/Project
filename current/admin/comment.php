<?php
include('includes/header.php'); 
include('includes/navbar.php'); 

?>

<?php 
   $connection = mysqli_connect("localhost","root","","banner");
 

       $query="SELECT * FROM  comment WHERE status='OFF' ORDER BY  id desc"; 
        $query_run=mysqli_query($connection,$query);

?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID</th>
            <th> Comments </th>
            <th>Approve</th>
            <th>Delete</th>
            
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
            <td> <?php echo $row['message']; ?> </td>
           
            <td>

            
            <a href="approve_comment.php?id=<?php echo $row['id']; ?>"> <button  type="submit" name="approve" class="btn btn-success"> Approve</button></a>

            </td>


            <td>
            <input type="hidden" name="id" value="<?php echo $row ['id'];?>">
            <a href="delete_comment.php?id=<?php echo $row['id']; ?>"> <button  class="btn btn-warning"> DELETE</button></a>
            </td>

          </tr>
          <?php
          } }
          //else{
            //echo "No Record Found";
          
     ?>
        
        </tbody>
      </table>
      
<?php 
   $connection = mysqli_connect("localhost","root","","banner");
 

        $query="SELECT * FROM  comment WHERE status='ON' ORDER BY  id desc";
       $query_run=mysqli_query($connection,$query);

?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID</th>
            <th> Comments </th>
            <th>Dis-Approve</th>
            <th>Delete</th>
            
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
            <td> <?php echo $row['message']; ?> </td>
           
            <td>

           
            <a href="Dis-approve_comment.php?id=<?php echo $row['id']; ?>"> <button  type="submit" name="Dis-approve" class="btn btn-dark"> Dis-Approve</button></a>

            </td>
          

            <td>
            <input type="hidden" name="id" value="<?php echo $row ['id'];?>">
            <a href="delete_comment.php?id=<?php echo $row['id']; ?>"> <button  class="btn btn-warning"> DELETE</button></a>
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