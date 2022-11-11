<?php
include('includes/header.php'); 
include('includes/navbar.php'); 


    ?>

<div class="table-responsive">
<?php
   $connection = mysqli_connect("localhost","root","","banner");
 

        $query="SELECT * FROM  post";
       $query_run=mysqli_query($connection,$query);

?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID</th>
            <th> Categories </th>
            <th>Image</th>
            
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
            <td> <?php echo $row['categories']; ?> </td>
            <td>  <img src="img/<?php echo $row["image"]; ?>"  witdh="100%" height="80px" alt=""> </td>
            
          
           
            <td>

                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                   <a href="edit_categories_post.php?id=<?php echo $row['id']; ?>"> <button  type="submit" name="edit_post" class="btn btn-success"> EDIT</button></a>

            </td>
            

                <td>
                <input type="hidden" name="id" value="<?php echo $row ['id'];?>">
                <a href="delete_categories_post.php?id=<?php echo $row['id']; ?>"> <button  class="btn btn-warning"> DELETE</button></a>
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
include('includes/scripts.php');
include('includes/footer.php');
?>


