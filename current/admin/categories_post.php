<?php
include('includes/header.php'); 
include('includes/navbar.php'); 




if (isset($_POST["submit"]))
{

    $image= $_FILES['image']['name'];
    $path="img/".basename($_FILES['image']['name']);
    $Categories=$_POST['categories'];
  
    
    
    $sql="INSERT INTO `post` (`image`,`categories`) VALUES ('$image','$Categories')";
    $query_run = mysqli_query($connection,$sql); 

    
    

            if($query_run)
            {
              move_uploaded_file($_FILES['image']['tmp_name'],$path);
                $_SESSION['status'] = "Post Added";
                $_SESSION['status_code'] = "success";
                header('location:categories_post.php');
                
            }
            else 
            {
                $_SESSION['status'] = "Post Not Added";
                $_SESSION['status_code'] = "error";
                header('location:categories_post.php');
                
            }
        }


?>


<form action="categories_post.php" method="POST" enctype="multipart/form-data"> 

<div class="modal-body">

<div class="form-group">

            <input type="file" name="image" class="from-control p-1" required>
            <br>
          
            <label for="CategoryTitle"> <span class="FieldInfo"> Chose category </span> </label>
            <select class="form-control" id="CategoryTitle" name="categories">

           
            
        </div>
    </div>
   
    </form>


  
    

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Add Bannerr
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#image">
              Add Imagee
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
       //fetching all the categories from categories table
       $connecting=mysqli_connect("localhost","root","","banner");

       $sql="SELECT * FROM  categories";
        $stmt=$connecting->query($sql);

        
            while ($DataRows=mysqli_fetch_assoc($stmt))
            {

         $id=$DataRows["id"];
        $Categories_title=$DataRows["categories_title"];
   
        ?>

    <option> <?php  echo $Categories_title; ?> </option>
            <?php } ?>
       </select>
       </div>

<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" name="submit" class="btn btn-primary">Save</button>
    </div>




<?php
include('includes/scripts.php');
include('includes/footer.php');
?>


