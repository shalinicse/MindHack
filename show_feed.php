<!DOCTYPE html>
<html>

 <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
       <title>Mental health information system</title>
      <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="stylesheet/customstyle.css" rel="stylesheet">
    
      <body class="size-1140">
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
				<a href="admin2.php" class="btn  btn-danger "> Home </a>
			</div>
                                                    <div class="btn-group">
				<a href="show_user.php" class="btn  btn-info "> Show User </a>
			</div>
			<div class="btn-group">
				<a href="show_test.php" class="btn  btn-primary "> Show Test </a>
			</div>
			<div class="btn-group">
				<a href="treat_user.php" class="btn  btn-info "> Show Treatment  </a>
			</div>
			<div class="btn-group">
				<a href="show_feed.php" class="btn  btn-warning "> Show Feedback </a>
			</div>
			<div class="btn-group">
				<a href="show_ther.php" class="btn  btn-success "> Show Therapist</a>
			</div>
			
			
		</div>	<hr>
	</div>
	</div>
<div class="row">
<div class="col-md-12">
<div class="panel panel-success">
  
  <div class="panel-body">
    
  <table class="table-bordered table-hover" width="100%">
  <tr style="background-color:#faebd7">
			<td class="col-lg-3">User Id</td>
			<td class="col-lg-3">User Rating</td>
			<td class="col-lg-6">User feedback</td>
			<td class="col-lg-6">Reference No.</td>
			
	</tr>
<?php
	require "config.php";
	$rs=mysql_query("select * from feedback");
	while($row=mysql_fetch_array($rs))
	{
		?>
		
        <tr>
        	<td class="col-lg-3"><?php echo $row["email"]; ?></td>
            <td class="col-lg-3"><?php echo $row["rating"]; ?></td>
            <td class="col-lg-6"><?php echo $row["description"]; ?></td>
            <td class="col-lg-6"><?php echo $row["ref_id"]; ?></td>
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
