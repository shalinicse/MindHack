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
                  <center><button name="delete_user" class="thumbnail" >Delete user</button></center>
               </div>
            
         </div>
		 </br>
			<?php		 
			if(isset($_POST["delete_user"]))
			{
				?>
				<div class="row">
				<div class="col-md-offset-3 col-md-2">
				<h3>Enter user Id</h3>
				</div>
				</br>
				<div><input class="col-lg-3 thumbnail" name="sid" placeholder="User id" title="User id" type="text" required/>
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
			<td class="col-lg-2">User name</td>
			<td class="col-lg-1">User dob</td>
			<td class="col-lg-1">User sex</td>
			<td class="col-lg-2">User contact</td>
			<td class="col-lg-1">User institute</td>
			<td class="col-lg-2">User profile_pic</td>
			<td class="col-lg-2">User id</td>
			<td class="col-lg-1">User book</td>
	</tr>
<?php
	
	require "config.php";
	if(isset($_POST["confirm"]))
				{
					$sid=mysql_real_escape_string($_POST['sid']);
					mysql_query("delete from student where sid = '$sid'");
						
					
				}
	$rs=mysql_query("select * from student");
	while($row=mysql_fetch_array($rs))
	{
		?>
		
        <tr>
        	<td class="col-lg-2"><?php echo $row["name"]; ?></td>
            <td class="col-lg-1"><?php echo $row["dob"]; ?></td>
            <td class="col-lg-1"><?php echo $row["sex"]; ?></td>
            <td class="col-lg-2"><?php echo $row["contact"]; ?></td>
			<td class="col-lg-1"><?php echo $row["institute"]; ?></td>
			<td class="col-lg-2"><img class="thumbnail col-lg-2" src="img/profile/<?php echo ($row['profile_pic']);?>" /></td>
			<td class="col-lg-2"><?php echo $row["sid"]; ?></td>
            <td class="col-lg-1"><?php echo $row["book"]; ?></td>
            
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
