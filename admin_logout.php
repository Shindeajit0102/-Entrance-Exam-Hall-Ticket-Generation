<?php
session_start();

$_SESSION['AD_NAME']='';

if(empty($_SESSION['AD_NAME']))
{
    session_destroy();
    echo"<script>alert('Logout succesfully...');</script>";
     echo "<a href='admin_login.php'>continue to Login.......</a>";
}
else{
    echo"<script>alert('Failed to Logout succesfully...');</script>";
}

?>
