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
			
			
		</div>	<hr>
	</div>
	</div>

<?php
	require "config.php";
	
	$tid=$_SESSION["tid"];
	$comment=$_SESSION["comment"];
	$sid=$_SESSION["uid"];
	$rs=mysql_query("insert into inbox values(CURDATE(),$tid,'$comment','$sid');");
	if($rs)
	{
	?>
 <div class="row">
<div class="col-md-12">
<div class="panel panel-success">
  
  <div class="panel-body">
    <label class="control-label" name="l" for="l">Comment send</label>
	
  </div>

</div>


</div>
</div><?php
	}?>


</body>
</html>
