<html>
  <head>
    <title>Admit.card.generate</title>
    <link rel="stylesheet" href="GenerateAdmitCard.css">

    
    
 
  </head>
  <body>
   
    <div class="setimg">
    <img src="https://img.freepik.com/free-vector/mobile-login-concept-illustration_114360-83.jpg?w=740&t=st=1704554151~exp=1704554751~hmac=2f3be64d18735f73b41b477773c8926ab6e7a36bbca7670101066fea14a79839" height=400px width=800px>
    </div>

<div class="generate-set">
  <form action="" method="post">
    <label><b>Mobile Number </b></label><br>
    <input type="text" name="mobile" placeholder="Mobile Number"><br>
    <label><b>ᴍᴏᴛʜᴇʀ ɴᴀᴍᴇ </b></label><br>
    <input type="text" name="mother_name" placeholder="Mother Name"><br><br>
    <label><b>ꜱᴇʟᴇᴄᴛ ᴘʀᴏɢʀᴀᴍ </b></label><br>
    <select id="l2" name='PROGRAM' id="program">
            <option value=''>         </option>
            <option value='BCA'>ʙᴄᴀ</option>
            <option value='BCS'>ʙ.ꜱᴄ(ᴇᴄꜱ)</option>
        </select><br><br>
    <button name='submit' id='next'>Generate</button>
    <button id='previous'><a href="admin.php">Previous</a></button>
  </form>
 </div>
  </body>
</html>

<?php 
 
 if(isset($_POST['submit']))
 {
   require('connection.php');
      if(empty($_POST['mobile']) && empty($_POST['mother_name']))
      {
        echo"<script>alert('ᴀʟʟ ɪɴꜰᴏʀᴍᴀᴛɪᴏɴ ᴀʀᴇ ᴍᴀɴᴅᴛᴀᴛᴏʀʏ');</script>";
      }
      else{

         
        session_start();
        $mobile= $_POST['mobile'];
        $mother_name=strtoupper($_POST['mother_name']);
        $program =strtoupper($_POST['PROGRAM']);
        
     $connection = new Connection();
     $con=$connection->getConnection();
        if(!strcmp($program,'BCA'))
        {
        $check="SELECT MOTHER_NAME,CONTACT_NO FROM final_bca_candidate_info WHERE CONTACT_NO=$mobile AND  MOTHER_NAME='$mother_name' ";
        $ch=mysqli_query($con,$check);
         if(mysqli_num_rows($ch)>0)
         {
          header("Location:Generatepdf.php");    
          mysqli_close($con);  
         }
          else
          {
            echo"<script>alert('Record not found');</script>";
          }
        }

        if(!strcmp($program,'BCS'))
        {
        $check="SELECT MOTHER_NAME,CONTACT_NO FROM final_bcs_candidate_info WHERE CONTACT_NO=$mobile AND  MOTHER_NAME='$mother_name' ";
        $ch=mysqli_query($con,$check);
         if(mysqli_num_rows($ch)>0)
         {
          header("Location:Generatepdf.php");   
          mysqli_close($con);   
         }
          else
          {
            echo"<script>alert('Record not found');</script>";
          }
        }

        $_SESSION['mobile']=$mobile;
        $_SESSION['mother_name']=$mother_name;
        $_SESSION['program']=$program;
        
        
      }
 }

?>
