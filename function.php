<?php 
include('database/dbconfig.php');

function Redirect_to($new_Location)
{
header("Location:".$new_Location);
exit;

}

?>