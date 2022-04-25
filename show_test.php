<!DOCTYPE html>
<html>

 <head>
 <script type="text/javascript">
function Check_tid(val){
 var element=document.getElementById('color');
 if(val=='pick a choice'||val=='others')
   element.style.display='block';
 else  
   element.style.display='none';
}

</script> 
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap lists</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/stylesheet/customstyle.css" rel="stylesheet">
    
      <body class="size-1140" ">
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
	
            <form class="customform"  method="post" enctype="multipart/form-data">
               <div class="btn-group btn-group-justified" >
                  <center><button name="upd_ques" class="thumbnail" >Update Question</button></center>
               </div>
           
        <div class="row">
		 <?php		 
			if(isset($_POST["upd_ques"]))
			{
				?>
				<div class="col-md-offset-3 col-md-2">
				<h3>Enter Question Id</h3>
				</div>
				</br>
				<div><input class="col-lg-3 thumbnail" name="qid" placeholder="question id" title="question id" type="text" required/>
                </div>
				<div class="col-lg-3">
				<select class="thumbnail " name="tid" onchange='Check_tid(this.value);'> 
						<option>Select test id </option>  
						<option value="1">1</option>
						<option value="2">2 Anxiety</option>
						<option value="3">3 Depression</option>
				</select>
				</div>
			</div>
			<div class="col-md-offset-3 col-md-3">
				<h3>Enter Question description</h3>
				</div>
				</br>
				<div><input class="col-lg-3 thumbnail" name="des" placeholder="question description" title="question des" type="text" required/>
                </div>
				<div><center>
				<button class="thumbnail" name="confirm1">Confirm Update</button>
				</center>
				</div>

                </br>
				

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
			<td class="col-lg-2">Question id</td>
			<td class="col-lg-1">Test id</td>
			<td class="col-lg-6">description</td>
			
	</tr>
<?php
	require "config.php";
	if(isset($_POST["confirm1"]))
				{
					$tid=mysql_real_escape_string($_POST['tid']);
					$qid=mysql_real_escape_string($_POST['qid']);
					$des=mysql_real_escape_string($_POST['des']);
					
					mysql_query("UPDATE question
SET des='$des'
WHERE tid = '$tid' and qid = '$qid';");
						
					
				}
	$rs=mysql_query("select * from question");
	while($row=mysql_fetch_array($rs))
	{
		?>
		
        <tr>
        	<td class="col-lg-2"><?php echo $row["qid"]; ?></td>
            <td class="col-lg-1"><?php echo $row["tid"]; ?></td>
            <td class="col-lg-6"><?php echo $row["des"]; ?></td>
            
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
