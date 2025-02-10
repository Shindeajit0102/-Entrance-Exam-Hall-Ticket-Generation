<?php 
            
            require('connection.php');
            $conn=new Connection();
            $con=$conn->getConnection();
            $user_id=$_POST['user_id'];
            $user_pass=$_POST['user_pass'];


            try{
               
               $sql="SELECT * FROM ADMIN_LOGIN_INFO WHERE ID_NO=$user_id";

            }
            catch(Exception $e)
            {
             echo $e;
            }

            $result=mysqli_query($con,$sql);
            $u_id=$u_pass='';
            $user_name='';
            if(mysqli_num_rows($result)>0)
            {
              while($row=mysqli_fetch_assoc($result))
              {
                    $u_id=$row['ID_NO'];
                    $u_pass=$row['AD_PASS'];
                    $user_name=$row['AD_NAME'];
              }
            }

            if($u_id==$user_id && $u_pass==$user_pass)
            {
             session_start();
             $_SESSION['AD_NAME']=$user_name;
              header('Location:admin.php');
            }
            else{
             echo"<script>alert('INVALID USER');</script>";
             echo "<a href='admin_login.php'>continue to back.......</a>";
            }
            mysqli_close($con);
            
          ?>