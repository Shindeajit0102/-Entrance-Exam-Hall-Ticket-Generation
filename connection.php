<?php
  class Connection
  {
   
    function getConnection()
        {
        $host='localhost';
        $user='root';
        $password='';
        $db_name='college';
         $con=mysqli_connect($host,$user,$password,$db_name);
        return $con;
        }
  }
?>