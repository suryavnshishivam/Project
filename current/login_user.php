<?php
 $connection=mysqli_connect("localhost","root","","banner");
 include("Admin/dbconfig.php");
 
 
 if(isset($_POST["Login_btn"]))
 {
     $name = $_POST['name']; 
     $password= $_POST['password']; 
 
    $query = "SELECT * FROM `register_user` WHERE `name`='$name' AND `password='$password'"; 
     $query_run = mysqli_query($connection, $query);
 
    if(mysqli_fetch_array($query_run))
    {
         $_SESSION['status'] = "Success";
        header('Location: index.php.php');
    } 
    else
    {
         $_SESSION['status'] = "Email / Password is Invalid";
         header('Location: login_user.php');
    }
   }
   ?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>iDESIGN - Interior Design HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

  


  
</head>

<body>

                                        <h1 class="h4 text-gray-900 mb-4">Welcome </h1>
                                        <?php
                    if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
                    {
                        echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
                        unset($_SESSION['status']);
                    }
                ?>
                                    </div>
                                    <form class="user" action="#" method="POST">
                                        <div class="form-group">
                                            <input type="text" name="name" 
                                                placeholder="Enter Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                      
                                            </div>
                                        </div>
                                        <a href="index.php" class="btn btn-primary btn-user btn-block" name="Login_btn">
                                            Login
                                        
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

   
</body>

</html>