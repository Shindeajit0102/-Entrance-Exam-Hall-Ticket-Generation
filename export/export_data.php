<?php
include_once("db_connect.php");

if(isset($_POST['getdata']))
 {
	  if(!strcmp($_POST['prgm'],'BCA'))
	  {
		$sql_query = "SELECT seat_no,candidate_name,mother_name,apply_program,dob,contact_no FROM final_bca_candidate_info ";
	  }
	  if(!strcmp($_POST['prgm'],'BCS'))
	  {
		$sql_query = "SELECT seat_no,candidate_name,mother_name,apply_program,dob,contact_no FROM final_bcs_candidate_info ";
	  }
		
		$resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
		$developer_records = array();
		while( $rows = mysqli_fetch_assoc($resultset) ) {
			$developer_records[] = $rows;
		}	
 }

 if(isset($_POST["export_data"])) 
 {  
	if(!strcmp($_POST['prgm'],'BCA'))
	{
	  $sql_query = "SELECT seat_no,candidate_name,mother_name,apply_program,dob,contact_no FROM final_bca_candidate_info ";
	}
	if(!strcmp($_POST['prgm'],'BCS'))
	{
	  $sql_query = "SELECT seat_no,candidate_name,mother_name,apply_program,dob,contact_no FROM final_bcs_candidate_info ";
	}
	  
	  $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
	  $developer_records = array();
	  while( $rows = mysqli_fetch_assoc($resultset) ) {
		  $developer_records[] = $rows;
	  }	

	$filename = "StudentRecord".date('Ymd') . ".xls";			
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=\"$filename\"");	
	$show_coloumn = false;
	if(!empty($developer_records)) {
	foreach($developer_records as $record) {
		if(!$show_coloumn) {
		// display field/column names in first row
		echo implode("\t", array_keys($record)) . "\n";
		$show_coloumn = true;
		}
		echo implode("\t", array_values($record)) . "\n";
	}
	}
	exit;  

}
?>