<!DOCTYPE html>
<html>

 <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
       <title>Mental health information system</title>
      <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="stylesheet/customstyle.css" rel="stylesheet">
    
      <body class="size-1140"  >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
  <div class="container">
	 <div class="row">
	 <div class="panel ">
  
  <div class="panel-body success">
  <?php 
  session_start();
  if($_SESSION['$admin_id'] == null)
			header("location:index.html");
	$admin_id=$_SESSION['$admin_id'];
	?>
    <h2 class="text-success"><?php echo $admin_id;?></h2>
	<li style="align:right;"><a href="logout.php">Log out</a></li>
	
  </div>
</div>
		<div class="btn-group btn-group-justified">
			<div class="btn-group">
				<a href="admin2.php" class="btn  btn-info "> Home </a>
			</div>
                                                    <div class="btn-group">
				<a href="show_user.php" class="btn  btn-warning "> Show User </a>
			</div>
			<div class="btn-group">
				<a href="show_test.php" class="btn  btn-primary "> Show Test </a>
			</div>
			<div class="btn-group">
				<a href="treat_user.php" class="btn  btn-danger "> Show Treatment  </a>
			</div>
			<div class="btn-group">
				<a href="show_feed.php" class="btn  btn-success "> Show Feedback </a>
			</div>
			<div class="btn-group">
				<a href="show_ther.php" class="btn  btn-success "> Show Therapist</a>
			</div>
			
			
		</div>	<hr>
	</div>
	</div>
	
		<div>
            <form class="customform"  method="post" enctype="multipart/form-data">
               <div class="btn-group btn-group-justified" >
                 
				  <div class="col-lg-offset-3 col-lg-3 "><button name="delete_ther" class="thumbnail" >Delete therapist</button></div>
				  <div class="col-lg-offset-1 col-lg-3"><button name="add_ther" class="thumbnail" >Add therapist</button></div>
				 
               </div>
            
         </div>
		 </br>
			<?php		 
			if(isset($_POST["add_ther"]))
			{
				?>
				
			<form method= "post"border="2" >
				<div class="form-group col-lg-offset-3 col-lg-6">
					<label class="control-label" name="th_id" >Therapist id</label>
					<input type="text" name="th_id" placeholder="therapist id" class="form-control" required></input>
				</div>
				<div class="form-group col-lg-offset-3 col-lg-6">
					<label class="control-label" name="name" >Therapist name</label>
					<input type="text" name="name" placeholder="therapist name" class="form-control" required></input>
				</div>
				<div class="form-group col-lg-offset-3 col-lg-6">
					<label class="control-label" name="spec" >Therapist Speciality</label>
					<input type="text" name="spec" placeholder="therapist speciality" class="form-control" required></input>
				</div>
				<div class="form-group col-lg-offset-3 col-lg-6">
					<label class="control-label" name="mob" >Therapist contact</label>
					<input type="text" name="mob" placeholder="therapist contact" class="form-control" required></input>
				</div>
				<div class="form-group col-lg-offset-3 col-lg-6">
					<label class="control-label" name="addr" >Therapist Clinic</label>
					<input type="text" name="addr" placeholder="therapist clinic" class="form-control" required></input>
				</div>
				<div class="form-group col-lg-offset-3 col-lg-6">
					<label class="control-label" name="time" >Therapist consult time</label>
					<input type="text" name="time" placeholder="therapist timing" class="form-control" required></input>
				</div>
				<div class="form-group col-lg-offset-3 col-lg-6">
					<button name="add">Confirm Add</button>
				</div>
			</form>
			</br> 
				<?php
			}
			if(isset($_POST["delete_ther"]))
			{
				mysql_query("select * from therapist;");
				?>
				<div class="row">
				<div class="col-md-offset-3 col-md-2">
				<h3>Enter THER Id</h3>
				</div>
				</br>
				<div><input class="col-lg-3 thumbnail" name="th_id" placeholder="User id" title="User id" type="text" required/>
                </div>
				</div>
				<center>
                <button name="confirm">Confirm Delete</button>
				</center>  </br> 
				<?php
			}
			?>
			</form>  
<div class="row">
<div class="col-md-12">
<div class="panel panel-success">
  
  <div class="panel-body">
    
  <table class="table-bordered table-hover" width="100%">
  <tr style="background-color:#faebd7">
			<td class="col-lg-1">therapist id</td>
			<td class="col-lg-1">name </td>
			<td class="col-lg-1">speciality</td>
			<td class="col-lg-1">contact</td>
			<td class="col-lg-4">clinic address</td>
			<td class="col-lg-4">consult time</td>
	</tr>
<?php
	
	require "config.php";
	if(isset($_POST["add"]))
				{
					$th_id=mysql_real_escape_string($_POST['th_id']);
					$name=$_POST['name'];
					$spec=$_POST['spec'];
					$contact=mysql_real_escape_string($_POST['mob']);
					$addr=$_POST['addr'];
					$time=$_POST['time'];
					mysql_query("insert into therapist values ('$th_id','$name','$spec','$contact','$addr','$time');");
						
					
				}
	if(isset($_POST["confirm"]))
				{
					$th_id=mysql_real_escape_string($_POST['th_id']);
					mysql_query("delete from therapist where th_id = '$th_id'");
						
					
				}
	$rs=mysql_query("select * from therapist");
	while($row=mysql_fetch_array($rs))
	{
		?>
		
        <tr>
        	<td class="col-lg-1"><?php echo $row["th_id"]; ?></td>
            <td class="col-lg-1"><?php echo $row["name"]; ?></td>
            <td class="col-lg-1"><?php echo $row["speciality"]; ?></td>
			<td class="col-lg-1"><?php echo $row["contact"]; ?></td>
            <td class="col-lg-4"><?php echo $row["Address"]; ?></td>
            <td class="col-lg-4"><?php echo $row["Consult_time"]; ?></td>
			</tr>
        <?php	
	}
	mysql_close($con);
?>
 
  </div>

</div>


</div>
</div>
</table> 

</body>
</html>
