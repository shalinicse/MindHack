<!DOCTYPE html>
<html>

 <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
       <title>Mental health information system</title>
      <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/stylesheet/customstyle.css" rel="stylesheet">
    
      <body class="size-1140">

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
				<a href="treat_user.php" class="btn  btn-danger "> Show Treatment  </a>
			</div>
			<div class="btn-group">
				<a href="show_feed.php" class="btn  btn-warning "> Show Feedback</a>
			</div>
			<div class="btn-group">
				<a href="show_ther.php" class="btn  btn-success "> Show Therapist</a>
			</div>
			
		</div>	<hr>
	</div>
	</div>
	
<div class="container">
	<div class="row">
			<form class="customform"  method="post" enctype="multipart/form-data">
               <div class="btn-group btn-group-justified" >
                  <center><button name="show_rep_admin" class="thumbnail " >Show User Report</button></center>
               </div>
           
				 <?php		 
			if(isset($_POST["show_rep_admin"]))
			{
				?>
				<h3>Enter user Id</h3>
				</br>
				<div><input class="col-lg-3 thumbnail" name="sid" placeholder="user id" title="question id" type="text" required/>
                </div>
				
				<button class="thumbnail" name="confirm3">Confirm user</button>
			
				<?php
			}
			
			?>
				
   
							 <div class="col-md-12">
							 <table class="table table-stripted">
			
<?php
require "config.php";
if(isset($_POST['confirm3']))
{
	
	$sid=mysql_real_escape_string($_POST['sid']);
	$_SESSION["uid"]=$sid;
	$sql="select * from result where sid='$sid';";
	$rs=mysql_query($sql);
	while($row=mysql_fetch_array($rs))
	{
		
		?>
		
				</div>	
   </div> 
		<tr class="danger"><td>Test id</td><td>Test Score</td><td>Test date</td><td>Q 1.</td><td>Q 2.</td><td>Q 3.</td><td>Q 4.</td><td>Q 5.</td><td>Q 6.</td><td>Q 7.</td><td>Q 8.</td></tr>
        <tr class="success">
        	<td><?php echo $row["test_id"]; ?></td>
			<td><?php echo $row["test_score"]; ?></td>
            <td><?php echo $row["date"]; ?></td>
            <td><?php echo $row["one"]; ?></td>
            <td><?php echo $row["two"]; ?></td>
			<td><?php echo $row["three"]; ?></td>
			
			<td><?php echo $row["four"]; ?></td>
            <td><?php echo $row["five"]; ?></td>
            <td><?php echo $row["six"]; ?></td>
            <td><?php echo $row["seven"]; ?></td>
			<td><?php echo $row["eight"]; ?></td>
        </tr>
		
        <?php	
	}
		
	?>
	
		</table>
		
<?php
}
if(isset($_POST["comment"])|| isset($_POST["confirm3"]))
{?>

					<label class="control-label" name="tid" for="tid">Test id</label>
					<input type="text" name="tid_comm" placeholder="test id" class="form-control" required></input>
				
					<label class="control-label" name="l" for="l">Comment User Report</label>
					<textarea type="text-area" name="txt_comment" placeholder="Comment to user report" class="form-control" rows="5"></textarea>
				
				<div>
					<input type="submit" name="send"class="btn btn-primary" value="send"></input>
				</div>

<?php
}
	if(isset($_POST["send"]))
	{
		$_SESSION["tid"]=$_POST["tid_comm"];
		$_SESSION["comment"]=$qid=mysql_real_escape_string($_POST['txt_comment']);
		header("location:comment_send.php");
	}

?>
</form>

	<div class="col-lg-offset-2 col-lg-8">
				<a href="img/ait6.jpg" class="thumbnail">
			<img src="img/ait6.jpg"/>
			</a>
	
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
