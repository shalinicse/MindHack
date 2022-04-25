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
				<a href="search.php" class="btn  btn-info "> Show User </a>
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
	
            <form class="customform"  method="post" enctype="multipart/form-data">
               <div class="btn-group btn-group-justified" >
                  <center><button name="upd_treat" class="thumbnail" >Update Treatment</button></center>
               </div>
           
        <div class="row">
		 <?php		 
			if(isset($_POST["upd_treat"]))
			{
				?>
				<div class="col-md-offset-3 col-md-2">
				<h3>Enter Question Id</h3>
				</div>
				</br>
				<div><input class="col-lg-3 thumbnail" name="qid" placeholder="question id" title="question id" type="text" required/>
                </div>
				
			</div>
			<div class="row">
			<div class="col-md-offset-2 col-md-3">
				<h3>Enter Treatment description</h3>
				</div>
				</br>
				<div><input class="col-lg-3 thumbnail" name="t_des" placeholder="treatment description" title="question des" type="text" required/>
                </div>
			</div>
				<center>
				<button class="thumbnail" name="confirm2">Confirm Update</button>
				</center>
                </br>
				

				<?php
			}
			?>
			</form>
	
           
        <div class="row">
<div class="row">
<div class="col-md-12">
<div class="panel panel-success">
  
  <div class="panel-body">
    
  <table class="table-bordered table-hover" width="100%">
  <tr style="background-color:#faebd7">
			<td class="col-lg-2">Question </td>
			
			<td class="col-lg-1">Question id</td>
			<td class="col-lg-6">Treatment</td>
			
	</tr>
<?php
	require "config.php";
		if(isset($_POST["confirm2"]))
				{
					
					$qid=mysql_real_escape_string($_POST['qid']);
					$t_des=mysql_real_escape_string($_POST['t_des']);
					
					mysql_query("UPDATE report
						SET treat='$t_des'
						WHERE  qid = '$qid';");
						
					
				}
	$rs=mysql_query("select * from report , question where report.qid=question.qid");
	while($row=mysql_fetch_array($rs))
	{
		?>
		
         <tr>
        	<td class="col-lg-2"><?php echo $row["des"]; ?></td>
            <td class="col-lg-1"><?php echo $row["qid"]; ?></td>
			 <td class="col-lg-6"><?php echo $row["treat"]; ?></td>
            
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
