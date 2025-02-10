
<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Dashboard </title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="warning">
        <h2> Sorry, this page doesn't support your device, Please use large screen device to see this page </h2>
    </div>

    <section>
        <!-- User Sidebar Starts from Here -->
        <div class="navbar" id="navigation">
            <img src="logo.png" alt="">
            <ul class="center-nav">
                <li><i class="fa-solid fa-house"></i><a href="">ᴅᴀꜱʜᴀʙᴏᴀʀᴅ  </a></li>
                <li><i class="fa-sharp fa-solid fa-chart-simple"></i><a href="GenerateAdmitCard.php"> ᴀᴅᴍɪᴛ ᴄᴀʀᴅ</a></li>
                <li><i class="fa-solid fa-chart-simple"></i><a href="/Entrance/export/index.php"> ʀᴇᴘᴏʀᴛ</a></li>         
                <li><i class="fa-solid "></i><a href=""></a></li>
               
                </ul>
            <ul class="bottom-nav">
                <hr>
                <li><i class="fa-solid fa-power-off"></i><a href="admin_logout.php"> Logout </a></li>
            </ul>
        </div>

        <!-- User Top Naviagation Starts from Here -->
        <div class="main-content">
            <div class="main-top">
                <div class="bars" id="menu">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>

                </div>
            </div>

            <!-- User Dashboard Starts from Here -->
            <div class="dashboard">
                <h2 class="heading"> Dashboard </h2>
                <div class="color-box">
                    <div class="box skyblue">
                        <p> <i class="fa-solid "></i> </p>
                        <a href=""><p> <?php echo 'Hello  '.$_SESSION['AD_NAME'].'...!';?></p></a>
                    </div>
                    <div class="box yellow">
                        <p><i class="fa-solid "></i></p>
                       <p> ꜱᴇʟᴇᴄᴛ ꜱᴛʀᴇᴀᴍ </p>
                       <form action="" method="post">
                       <select id="lrv" name='PRM' id="program"> 
                       <option value=''></option>                       
                        <option value='BCA'>ʙᴄᴀ</option>
                        <option value='BCS'>ʙ.ꜱᴄ(ᴇᴄꜱ)</option>
                        </select>    
                        <button name='getstreamdata'><img src="https://cdn-icons-png.freepik.com/256/14061/14061644.png?ga=GA1.1.2007121448.1706377037&semt=ais" height=23px width=35px alt=""></button>
                        </form>                    
                    </div>
                    <div class="box purple">
                        <p> <i class="fa-solid"></i> </p>
                        <a href="GenerateAdmitCard.php"><p> ᴀᴅᴍɪᴛ ᴄᴀʀᴅ</p></a>
                       
                    </div>
                </div>
            </div>            
            <div class="allstudent">
                
            <?php
             
             if(!empty($_SESSION['AD_NAME']))
             {
             require('connection.php');
                
        

                if(isset($_POST['getstreamdata']))
                {
                    
                    $connection=new Connection();
                     $con=$connection->getConnection();

                    if(!strcmp($_POST['PRM'],'BCA'))
                    {
                        $sql="SELECT SEAT_NO,CANDIDATE_NAME,MOTHER_NAME,CONTACT_NO FROM BCA_CANDIDATE_INFO ";
                    }
                    else if(!strcmp($_POST['PRM'],'BCS'))
                    {
                        $sql="SELECT SEAT_NO,CANDIDATE_NAME,MOTHER_NAME,CONTACT_NO FROM BCS_CANDIDATE_INFO ";
                    }
                    else
                    {
                        $sql='';
                        echo "<script>alert('Please select any stream');</script>";
                    }
                }

                if(!empty($sql))
                  {

                   $result=mysqli_query($con,$sql);

                   if(mysqli_num_rows($result)>0)
                   {
                    echo "<table border=1>
                    <tr>
                        <th>ꜱᴇᴀᴛ ɴᴏ</th>
                        <th>ꜱᴛᴜᴅᴇɴᴛ ɴᴀᴍᴇ</th>
                        <th>ᴍᴏᴛʜᴇʀ ɴᴀᴍᴇ</th>
                        <th>ᴄᴏɴᴛᴀᴄᴛ ɴᴏ</th>
                    </tr>";
                    while($row=mysqli_fetch_assoc($result))
                    {
                        echo "
                        <tr>
                            <td>".$row['SEAT_NO']."</td>
                            <td>".$row['CANDIDATE_NAME']."</td>
                            <td>".$row['MOTHER_NAME']."</td>
                            <td>".$row['CONTACT_NO']."</td>
                        </tr>";
                    }
                    echo "</table>";

                   }
                   mysqli_close($con);
                  }
             }
             else{
                header('Location:check.php');
             }

            ?>
        
            </div>
            
            </section> 
                       
            <div class="recordconfirm">
            <form action="" class="signup" method="post">      
                <h3>Confirm Addmission !!!</h3>            
                     <input type="text" placeholder="ᴍᴏʙɪʟᴇ ɴᴜᴍʙᴇʀ" required name="mnum"><br>                 
                     <input type="text" placeholder="ᴍᴏᴛʜᴇʀ ɴᴀᴍᴇ" required name="mname"><br>                  
                  <select id="l2" name='PROGRAM' id="program">
                        <option value=''>         </option>
                        <option value='BCA'>ʙᴄᴀ</option>
                        <option value='BCS'>ʙ.ꜱᴄ(ᴇᴄꜱ)</option>
                        </select><br> 
                        <button name="confirm" id='bt1'>ᴄᴏɴꜰɪʀᴍ</button>
                        <button name="cancel" id='bt2' >ᴄᴀɴᴄᴇʟ</button>
               </form>
            </div>

            
</body>
<?php
 

if(isset($_POST['confirm']))
{
    $MN=$_POST['mname'];
    $CN=$_POST['mnum'];

   
    $con=new Connection();
    $conn=$con->getConnection();
    
     if(!strcmp($_POST['PROGRAM'],'BCA'))
     {
         $check="SELECT MOTHER_NAME,CONTACT_NO FROM bca_candidate_info WHERE CONTACT_NO=$CN AND  MOTHER_NAME='$MN' ";

         $ch=mysqli_query($conn,$check);
        if(mysqli_num_rows($ch)>0)
        {
         $sql="INSERT INTO final_bca_candidate_info SELECT * FROM bca_candidate_info WHERE CONTACT_NO=$CN AND  MOTHER_NAME='$MN'" ;
         $sql2="DELETE FROM bca_candidate_info WHERE CONTACT_NO=$CN AND  MOTHER_NAME='$MN' ";
        }
        else
        {
            echo "<script>alert('Record not found...');</script>";
        }
     }
     else if(!strcmp($_POST['PROGRAM'],'BCS'))
     {
        $check="SELECT MOTHER_NAME,CONTACT_NO FROM bcs_candidate_info WHERE CONTACT_NO=$CN AND  MOTHER_NAME='$MN' ";

        $ch=mysqli_query($conn,$check);

        if(mysqli_num_rows($ch)>0)
        {
        $sql="INSERT INTO final_bcs_candidate_info SELECT * FROM bcs_candidate_info WHERE CONTACT_NO=$CN AND MOTHER_NAME='$MN' ";
        $sql2="DELETE FROM bcs_candidate_info WHERE CONTACT_NO=$CN AND  MOTHER_NAME='$MN' ";
        }
        else
        {
            echo "<script>alert('Record not found...');</script>";
        }
     }
     else{
        $sql='';
     }
    
    
try
 {
    if(!empty($sql))
    {
        if(mysqli_query($conn,$sql))
        {
            echo "<script>alert('Addmission Confirmation sucessfully...!!!');</script>";
        }
        else
        {
            echo "<script>alert('Addmission Confirmation Failed...!!!');</script>";         
        }   
    }

       mysqli_query($conn,$sql2);
       mysqli_close($conn);
 }
catch(Exception $s)
{
   echo $s;
}
}

  
if(isset($_POST['cancel']))
{
   
    $MN=$_POST['mname'];
    $CN=$_POST['mnum'];
    
    $con=new Connection();
    $conn=$con->getConnection();

     if(!strcmp($_POST['PROGRAM'],'BCA'))
     {
        $check="SELECT MOTHER_NAME,CONTACT_NO FROM bca_candidate_info WHERE CONTACT_NO=$CN AND  MOTHER_NAME='$MN' ";

        $ch=mysqli_query($conn,$check);
       if(mysqli_num_rows($ch)>0)
       {
         $sql2="DELETE FROM bca_candidate_info WHERE CONTACT_NO=$CN AND  MOTHER_NAME='$MN' ";
       }
       else
       {
           echo "<script>alert('Record not found...');</script>";
       }

     }
     else if(!strcmp($_POST['PROGRAM'],'BCS'))
     {
        $check="SELECT MOTHER_NAME,CONTACT_NO FROM bcs_candidate_info WHERE CONTACT_NO=$CN AND  MOTHER_NAME='$MN' ";

        $ch=mysqli_query($conn,$check);
       if(mysqli_num_rows($ch)>0)
       {
        $sql2="DELETE FROM bcs_candidate_info WHERE CONTACT_NO=$CN AND  MOTHER_NAME='$MN' ";
       }
       else
       {
           echo "<script>alert('Record not found...');</script>";
       }
       
     }
     else{
        $sql='';
     }

try
 {
    if(!empty($sql2))
    {
        if(mysqli_query($conn,$sql2))
        {
            echo "<script>alert('Addmission canceletion sucessfully...!!!');</script>";
        }
        else
        {
            echo "<script>alert('Addmission canceletion Failed...!!!');</script>";         
        }   
    }

       mysqli_close($conn);
 }
catch(Exception $s)
{
   echo $s;
}   
}
?>


<script>
    const hamburger = document.getElementById('menu');
    const navigation = document.getElementById('navigation');
    hamburger.addEventListener('click', function () {
        navigation.classList.toggle('active')
        console.log('clicked');
    })
</script>

</html>