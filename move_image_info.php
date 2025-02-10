   
    
    <head>
        <title>ᴀᴘᴘʟɪᴄᴀᴛɪᴏɴ ꜰᴏʀᴍ</title>
        <link href="move_image_info.css" rel="stylesheet">
    </head>
    <body>
    <div>
    <!-- <img src="https://img.freepik.com/free-vector/abstract-background_53876-90688.jpg"> -->
    <div class="set-application-from">
        <form action="" method="post" enctype="multipart/form-data">
        <label id="l1">ᴄᴀɴᴅɪᴅᴀᴛᴇ ꜰᴜʟʟ ɴᴀᴍᴇ   :</label><br>
        <input type="text" name="CANDIDATE_NAME" id='l1' required placeholder="ꜱᴛᴀʀᴛ ᴡɪᴛʜ ꜱᴜʀɴᴀᴍᴇ"><br><br>
        <label id="l1">ᴄᴀᴛᴇɢᴏʀʏ :</label><br>
        <select id="l1" name='CATEGORY' id="category"  required>
            <option value=''>         </option>
            <option value='SC' >ꜱᴄ </option>
            <option value='ST'>ꜱᴛ</option>
            <option value='VJA'>ᴠᴊᴀ</option>
            <option value='NT-B'>ɴᴛ-ʙ</option>
            <option value='NT-C'>ɴᴛ-ᴄ</option>
            <option value='NT-D'>ɴᴛ-ᴅ</option>
            <option value='OBC'>ᴏʙᴄ</option>
            <option value='EWS'>ᴇᴡꜱ</option>
            <option value='OPEN'>ᴏᴘᴇɴ</option>
        </select><br><br>
        <label id="l1" >Qᴜᴀʟɪꜰʏɪɴɢ ᴇxᴀᴍɪɴᴀᴛɪᴏɴ :</label><br>
        <select id="l1" name='Q_EXAM' id="qeaxm" required >
        <option   value='' >         </option>
            <option value='ART'>ᴀʀᴛ</option>
            <option value='SCIENCE'>ꜱᴄɪᴇɴᴄᴇ</option>
            <option value='COMMERCE'>ᴄᴏᴍᴍᴇʀᴄᴇ</option>
        </select><br><br>
        <label id="l1" >ᴘᴇʀᴄᴇɴᴛᴀɢᴇ ꜱꜱᴄ :</label><br>
        <input type="text"  name="P_SSC" id="l1" required><br><br>
        <label id="l1">ᴘᴇʀᴄᴇɴᴛᴀɢᴇ    ʜꜱᴄ:</label><br>
        <input id="l1" type="text"  name="P_HSC" required><br><br>
        <label id="l2">ʜꜱᴄ ꜰʀᴏᴍ ᴄᴏʟʟᴇɢᴇ :</label><br>
        <input id="l2" type="text"  name="HSC_COLLEGE" required><br><br>
        <label id="l2">ʜꜱᴄ ᴘᴀꜱꜱᴇᴅ ʙᴏᴀʀᴅ :</label><br>
        <input type="text"  name="HSC_BOARD" id="l2" required><br><br>
        <label id="l2" >ꜱᴇʟᴇᴄᴛ ᴘʀᴏɢʀᴀᴍ :</label><br>
        <select id="l2" name='PROGRAM' id="program" required>
            <option value=''>         </option>
            <option value='BCA'>ʙᴄᴀ</option>
            <option value='BCS'>ʙ.ꜱᴄ(ᴇᴄꜱ)</option>
        </select><br><br>
        <label id="l2">ᴅᴏʙ :</label><br>
        <input  type="date"  name="DOB" id="l2" required><br><br>
        <label id="l2">ʜꜱᴄ ᴘᴀꜱꜱɪɴɢ ʏᴇᴀʀ :</label><br>
        <select id="l2" name='PASS_YEAR' id="passyear" required>
            <option value=''>         </option>
            <option value='2015'>2015</option>
            <option value='2016'>2016</option>
            <option value='2017'>2017</option>
            <option value='2018'>2018</option>
            <option value='2019'>2019</option>
            <option value='2020'>2020</option>
            <option value='2021'>2021</option>
            <option value='2022'>2022</option>
            <option value='2023'>2023</option>
            <option value='2024'>2024</option>
            <option value='2025'>2025</option>
            <option value='2026'>2026</option>
            <option value='2027'>2027</option>
            <option value='2028'>2028</option>
            <option value='2029'>2029</option>
            <option value='2030'>2030</option>
        </select><br><br>
        <label  id="l3">ᴄᴏɴᴛᴀᴄᴛ ɴᴏ :</label><br>
        <input type="text"  name="CONTACT_NO" id="l3" required><br><br>
        <label id="l3" >ᴍᴏᴛʜᴇʀ ɴᴀᴍᴇ :</label><br>
        <input type="text" name="MOTHER_NAME" id="l3" required><br><br>
     <div class="set-address"><br>
        <!-- <label id="l3" >ꜰᴜʟʟ ᴀᴅᴅʀᴇꜱꜱ :</label><br><br> -->
        <label id="l3">ᴀ/ᴘ :</label><br>
        <input type="text"  name="A_P" id="l3" required><br><br>
        <label id="l3">ᴛᴀʜꜱɪʟ :</label><br>
        <input type="text"  name="SUB_DISTRICT" id="l3" required><br><br>
        <label id="l4" >ᴅɪꜱᴛʀɪᴄᴛ :</label><br>
        <input type="text"  name="DISTRICT" id="l4" required><br><br>
        <label id="l4">ᴘɪɴ :</label><br>
        <input type="text"  name="PIN" id="l4" required><br><br>
        <label id="l4">ᴄᴀɴᴅɪᴅᴀᴛᴇ ᴘʜᴏᴛᴏ :</label><br>
        <input type="file"  name="c_image" id="l4" required><br><br>
    </div>
    <button id="back"><a href="homepage.php">ʙᴀᴄᴋ</a></button>
  <button id="submit" name='ssubmit'>𝘀𝗮𝘃𝗲</button>  
 </form>
 <!-- <div class="warning">

    
 </div> -->
    </div>
    </body>
</html>


<?php

class Move_image_info
{
    function move_file()
        {
            $PROGRAM='';
            $temp=0;
            if(empty($_POST['CANDIDATE_NAME'])||empty($_POST['CATEGORY'])||empty($_POST['Q_EXAM'])||empty($_POST['P_SSC'])||empty($_POST['P_HSC'])||empty($_POST['HSC_COLLEGE'])||empty($_POST['HSC_BOARD'])||empty($_POST['PROGRAM'])||empty($_POST['DOB'])||empty($_POST['PASS_YEAR'])||empty($_POST['CONTACT_NO'])||empty($_POST['A_P'])||empty($_POST['SUB_DISTRICT'])||empty($_POST['DISTRICT'])||empty($_POST['PIN']))
                {
                    echo"<script>alert('ᴀʟʟ ɪɴꜰᴏʀᴍᴀᴛɪᴏɴ ᴀʀᴇ ᴍᴀɴᴅᴛᴀᴛᴏʀʏ');</script>";
                    $temp=1;
                }
            if($temp==0)
                {
                    $MOTHER_NAME=strtoupper($_POST['MOTHER_NAME']);
                    $CANDIDATE_NAME=strtoupper($_POST['CANDIDATE_NAME']);
                    $CATEGORY=$_POST['CATEGORY'];
                    $Q_EXAM=$_POST['Q_EXAM'];
                    $P_SSC=$_POST['P_SSC'];
                    $P_HSC =$_POST['P_HSC'];
                    $HSC_COLLEGE=strtoupper($_POST['HSC_COLLEGE']);
                    $HSC_BOARD=strtoupper($_POST['HSC_BOARD']);
                    $PROGRAM=strtoupper($_POST['PROGRAM']);
                
                    $DOB=$_POST['DOB'];
                    
                    $PASS_YEAR=$_POST['PASS_YEAR'];
                    $CONTACT_NO=$_POST['CONTACT_NO'];
                    $A_P=strtoupper($_POST['A_P']);
                    $SUB_DISTRICT=$_POST['SUB_DISTRICT'];
                    $DISTRICT=strtoupper($_POST['DISTRICT']);
                    $PIN=$_POST['PIN'];
                        
                }

                
                require('connection.php');
                $connection=new Connection();
                $con=$connection->getConnection();
                $ps='BCS';
                $ps2='BCA';    
                
                $connection=new Connection();
                $con=$connection->getConnection();
                $image=$_FILES['c_image']['name'];
                $image=filter_var($image,FILTER_SANITIZE_STRING);
                $image_temp=$_FILES['c_image']['tmp_name'];
                $image_folder='../add/upload/'.$image;
                move_uploaded_file($image_temp,$image_folder);

                
                try{
                        
                    if(!strcmp($PROGRAM,$ps2))
                        {
                            $sql="INSERT INTO bca_candidate_info(candidate_name,MOTHER_NAME,CATEGORY,Q_EXAM,P_SSC,P_HSC,HSC_COLLEGE,HSC_BOARD,APPLY_PROGRAM,
                            DOB,PASS_YEAR,CONTACT_NO,A_P,SUB_DISTRICT,DISTRICT,PIN,PHOTO)
                            VALUES('$CANDIDATE_NAME','$MOTHER_NAME','$CATEGORY','$Q_EXAM','$P_SSC','$P_HSC','$HSC_COLLEGE','$HSC_BOARD','$PROGRAM','$DOB','$PASS_YEAR','$CONTACT_NO','$A_P','$SUB_DISTRICT','$DISTRICT','$PIN','$image_folder')";
                        }
                        else if(!strcmp($PROGRAM,$ps))
                        {
                            $sql="INSERT INTO bcs_candidate_info(candidate_name,MOTHER_NAME,CATEGORY,Q_EXAM,P_SSC,P_HSC,HSC_COLLEGE,HSC_BOARD,APPLY_PROGRAM,
                            DOB,PASS_YEAR,CONTACT_NO,A_P,SUB_DISTRICT,DISTRICT,PIN,PHOTO)
                            VALUES('$CANDIDATE_NAME','$MOTHER_NAME','$CATEGORY','$Q_EXAM','$P_SSC','$P_HSC','$HSC_COLLEGE','$HSC_BOARD','$PROGRAM','$DOB','$PASS_YEAR','$CONTACT_NO','$A_P','$SUB_DISTRICT','$DISTRICT','$PIN','$image_folder')";
                        }
                        
                    try{
                        if(!empty($sql))
                            {
                                 if(mysqli_query($con,$sql))
                                    {
                                        echo"<script>alert('Documents and information submitted succesfully');</script>";
                                        mysqli_close($con);
                                     }
                                 else
                                    {
                                        echo"<script>alert('ꜰᴀɪʟᴇᴅ ᴛʀʏ ᴀɢᴀɪɴ');</script>";
                                        
                                    }
                            }
                        }
                    catch(Exception $e)
                        {

                        }
                    }
                catch(Exception)
                    {
                        echo"<script>alert('ꜱᴇʀᴠᴇʀ ɪꜱ ʙᴜꜱʏ ᴛʀʏ ᴀɢᴀɪɴ ᴀꜰᴛᴇʀ ꜱᴏᴍᴇ ᴛɪᴍᴇ ʟᴀᴛᴇʀ');</script>";
                    }
        }
}

if(isset($_POST['ssubmit']))
{
     
    $insert=new Move_image_info();
    $insert->move_file();
}

?>