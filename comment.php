<!DOCTYPE html>
<html>

 <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
       <title>Mental health information system</title>
      <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/stylesheet/customstyle.css" rel="stylesheet">
    
      <body class="size-1140" >

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
				<a href="show_feed.php" class="btn  btn-warning "> Show Feedback</a>
			</div>
			<div class="btn-group">
				<a href="#" class="btn  btn-success "> Therapist</a>
			</div>
			
			
		</div>	<hr>
	</div>
	</div>
	<form border="2" background-color="pink">
				<div class="form-group">
					<label class="control-label" name="tid" for="tid">Test id</label>
					<input type="text" name="tid" placeholder="test id" class="form-control" required></input>
				</div>
				
				<div class="form-group">
					<label class="control-label" name="l" for="l">Product Description</label>
					<textarea type="text-area" name="l" placeholder="Comment to user report" class="form-control" rows="5"></textarea>
				</div>
				<div>
					<input type="submit" name="send"class="btn btn-primary" value="send"></input>
				</div>
			</form>
<div class="row">
<div class="col-md-12">
<div class="panel panel-primary">
  
  <div class="panel-body" style="background-color:pink">
    <div class="col-md-8 col-md-offset-2">
			<a href="images/ait6.jpg" class="thumbnail">
			<p></p>
			<img src="img/ait6.jpg"/>
			</a>
	</div>
  </div>
</div> 
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
