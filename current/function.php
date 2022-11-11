<?php 
function Login_Attempt($name,$Password) {
    global $connection;
    $sql =" SELECT * FROM register_user WHERE name=:name AND password=:password LIMIT 1"; 
    $stmt=$connection->prepare($sql);
    $stmt->bindValue(':userName',$name);
    $stmt->bindValue(':passWord',$Password);
    $stmt->execute();
    $Result =$stmt->rowcount();
    if ($Result==1){
      return $Found_Account=$stmt->fetch();
    }else {
       return null;
    }
}

function Confirm_Login()
{
if (isset($_SESSION["name"]))
 {
    return true;
    }
     else
    {
        $_SESSION["ErrorMessage"]="Login Requried !";
        header("Location: login_user.php");
    }
}
?>