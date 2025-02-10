<?php 
include_once("db_connect.php");
include("export_data.php");
include("header.php"); 
?>
<style>
	#select1{
		height: 2em;
		width: 10em;
		font-size: 18px;
	}
</style>
<div class="container">	
	<h2>Records Of all Students</h2>
	<div class="well-sm col-sm-12">
		<div class="btn-group pull-right">	
			<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">					
				<button type="submit" id="export_data" name='export_data' value="Export to excel" class="btn btn-info">Export to excel</button>
				<select name="prgm" id="select1">
                 <option value="BCA" >BCA</option>
				 <option value="BCS" >B.Sc(ECS)</option>
				</select>
			<button name="getdata"><img src="https://cdn-icons-png.freepik.com/256/14061/14061644.png?ga=GA1.1.2007121448.1706377037&semt=ais" height=32px width=35px alt=""></button>
			<button style="text-decoration:none; color:white; background:skyblue;" ><a href="/Entrance/admin.php">Dashboard</a></button>
			</form>
		</div>
	</div>				  
	<table id="" class="table table-striped table-bordered">
		<tr>
			<th>seat_no</th>
			<th>candidate_name</th>
			<th>mother_name</th>	
			<th>apply_program</th>
			<th>dob</th>
			<th>contact_no</th>
		</tr>
		<tbody>
			
			<?php
			  if(!empty($developer_records))
			  {
				foreach($developer_records as $developer) { ?>
			   <tr>
			   <td><?php echo $developer ['seat_no']; ?></td>
			   <td><?php echo $developer ['candidate_name']; ?></td>
			   <td><?php echo $developer ['mother_name']; ?></td>   
			   <td><?php echo $developer ['apply_program']; ?></td>
			   <td><?php echo $developer ['dob']; ?></td>   
			   <td><?php echo $developer ['contact_no']; ?></td>   
			   </tr>
			
			<?php } } 
			else 
			{				 
				?>
			    <tr>
			   <td><?php echo "null"; ?></td>
			   <td><?php echo "null"; ?></td>
			   <td><?php echo "null"; ?></td>   
			   <td><?php echo "null"; ?></td>
			   <td><?php echo "null"; ?></td>   
			   <td><?php echo "null"; ?></td>   
			   </tr>
			<?php } ?>
		</tbody>
    </table>	
	
</div>
<?php include('footer.php');?>




