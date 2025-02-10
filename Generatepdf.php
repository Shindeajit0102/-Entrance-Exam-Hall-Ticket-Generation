<?php 

session_start();
$seatno=$year=$receipt=$FromNo=$sscper=$hscper=$contact=$pin_code=0;
$program=$categeory=$exam=$cname=$collegename=$board=$subdist=$district=$a_p=$image='';
class Generate{

    function generate_card($mobile,$mother_name,$program)
    {        
        require('connection.php');

         $connection=new Connection();

         $con=$connection->getConnection();
         if(!strcmp($program,'BCA'))
         {
  
          $sql="SELECT * FROM final_bca_candidate_info WHERE CONTACT_NO=$mobile AND MOTHER_NAME='$mother_name'";
         }
         else if(!strcmp($program,'BCS'))
         {
            $sql="SELECT * FROM final_bcs_candidate_info WHERE CONTACT_NO=$mobile AND MOTHER_NAME='$mother_name'";
         }
           $result=mysqli_query($con,$sql);
     
        if(mysqli_num_rows($result)>0)
        {
            
            while($row=mysqli_fetch_assoc($result))
            {
                $seatno=$row['seat_no'];
                $cname=$row['candidate_name'];
                $categeory=$row['CATEGORY'];
                $exam=$row['Q_EXAM'];
                $sscper=$row['P_SSC'];
                $hscper=$row['P_HSC'];
                $collegename=$row['HSC_COLLEGE'];
                $board=$row['HSC_BOARD'];
                $program=$row['APPLY_PROGRAM'];
               
                $contact=$row['CONTACT_NO'];
                $subdist=$row['SUB_DISTRICT'];
                $district=$row['DISTRICT'];
                
                $a_p=$row['A_P'];
                $pin_code=$row['PIN'];
                $image=$row['PHOTO'];
               
           }
            
        }

        $year=$receipt=$FromNo='';

            $date=date("y/m/d");

            require('fpdf/fpdf.php'); 

            $pdf =new FPDF();
            $pdf->AddPage();
            $pdf->SetFont('Arial', 'B', 13); 
            $pdf->Image('clogo.jpg',10,3,30,20);
            $pdf->Cell(160,-8,"SANGOLA MAHAVIDYALAYA SANGOLA",0,1,'R');
            $pdf->Cell(190,20,'(Affiliated to Punyashlok Ahilyadevi Holkar University,Solapur)',0,1,'R');
            $pdf->Cell(140,-8,"SANG-CET $year for $program.",0,1,'R');
            $pdf->Cell(0,11,'',0,1);
            $pdf->Cell(0,0.5,'',1,1);
            $pdf->Cell(0,9 ,"Application for Entrance Test Examination: $program.",0,0);
            $pdf->Cell(-5,8 ,"Receipt No: $receipt",0,1,'R');
            $pdf->Cell(60,7 ,"Application Form No: $FromNo",1,0);
            $pdf->Cell(50,7 ,"Exam Seat No: $seatno",1,0,'R');
            $pdf->Cell(80,7 ,"Date: $date",1,1,'R');
            $pdf->Cell(0,7,'Information of Candidate: ',0,0,);
            $pdf->Cell(0,7,'',0,1); 
            $pdf->Cell(140,7 ,"Name of Candidate: $cname",1,1);
            $pdf->Cell(0,2,'',0,1); 
            $pdf->Cell(140,7 ,"Categeory: $categeory",1,1);
            $pdf->Cell(0,1 ,'',0,1);
            $pdf->Cell(140,7,"Qualifying Examination: $exam",1,1); 
             $pdf->Cell(0,1 ,'',0,1);

            $pdf->Image("$image",156,48,45,55);

            $pdf->Cell(80,7 ,"Percentage obtained at SSC: $sscper",1,0);
            $pdf->Cell(60,7 ,"HSC: $hscper",1,1);
            $pdf->Cell(0,1 ,'',0,1);
            $pdf->Cell(140,7 ,"HSC from: $collegename",1,1);
            $pdf->Cell(0,1 ,'',0,1);
            $pdf->Cell(140,7,"Name of Board: $board",1,1);
            $pdf->Cell(0,1 ,'',0,1);
            $pdf->Cell(70,7 ,"A/P: $a_p",1,0);
            $pdf->Cell(70,7 ,"Sub-district : $subdist",1,1);
            $pdf->Cell(0,1 ,'',0,1);

            $pdf->Cell(70,7 ,"District: $district",1,0);
            $pdf->Cell(40,7 ,"Pin: $pin_code",1,1);
            $pdf->Cell(0,1,'',0,1);
            $pdf->Cell(60,7 ,"Contact No: $contact",1,1);
            $pdf->Cell(0,7 ,'',0,1);
            $pdf->Cell(0,7,"Candidate Signature",0,1,'R');
            $pdf->Cell(0,35,'',0,1);
            $pdf->Cell(0,0.5,'',1,1);
            $pdf->Image('clogo.jpg',15,180,30,20);
            $pdf->Cell(160,20,"SANGOLA MAHAVIDYALAYA SANGOLA",0,1,'R');
            $pdf->Cell(140,-8,"SANG-CET $year for $program.",0,1,'R');
            $pdf->Cell(120,22,"Hall Ticket",0,1,'R');
            $pdf->Cell(0,5,'',0,1);
            $pdf->Cell(140,7,"Candidate Name: $cname",1,0,'L');
            $pdf->Cell(0,8,'',0,1);
            $pdf->Cell(140,7,"Exam Seat No : $seatno",1,0,'L');
            $pdf->Cell(160,0,"",0,1);
            $pdf->Cell(0,10,'',0,1);
            $pdf->Cell(140,7,"CET Applied For: $program",1,0,'L');
            $pdf->Cell(0,10,'',0,1);
            $pdf->Image("$image",156,205,40,50);
            $pdf->Cell(60,7,"CET Date: 02/12/2023",1,0,'L');
            $pdf->Cell(80,7,"CET Time: 02.20 PM to 05.00 PM",1,1,'R');

            $pdf->Cell(0,4,'',0,1);
            $pdf->Cell(0,7,"Exam Center: SANGOLA MAHAVIDYALAYA SANGOLA",0,1,);
            $pdf->Cell(0,18,'',0,1);
            $pdf->Cell(0,4,"Candidate Signature",0,0);
            $pdf->Cell(0,4,"Authority Signatory",0,1,"R");
            
            $file_save=$contact.'.pdf';
            $pdf->Output();

            
    }
    
}


$mobile=$_SESSION['mobile'];
$mother_name=$_SESSION['mother_name'];
$program=$_SESSION['program'];

$generate=new Generate();
$generate->generate_card($mobile,$mother_name,$program);

header('Location:Generate1.php');

  
?>