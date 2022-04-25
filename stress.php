<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Mental health information system</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>
      <script type="text/javascript" src="js/template-scripts.js"></script> 
                 
      <!--[if lt IE 9]>
	      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]-->
	  
	   </head>
      <body class="size-1140" style=" background-color:rgba(244, 67, 54, 0.7) ;">

  
	  <!-- TOP NAV WITH LOGO -->
	  
      <header>
         <div id="topbar">
            <div class="line">
               <div class="s-12 m-6 l-6">

                    <p><strong><h4 style="color:yellow">Mental Health Information System</h4></strong></p>

               </div>
               <div class="s-12 m-6 l-6">
                  <div class="social right">
                       <a href="http://www.facebook.com"><i class="icon-facebook_circle"></i></a> <a href="http://www.twitter.com"><i class="icon-twitter_circle"></i></a> <a href="http://www.googleplus.com"><i class="icon-google_plus_circle"></i></a> <a href="http://www.instagram.com"><i class="icon-instagram_circle"></i></a>
                  </div>
               </div>
            </div>  
         </div> 
         <nav>
            <div class="line">
               <div class="s-12 l-2">

                   <div class="right">
<img src="img/images1.jpg"/></div>

               </div>
               <div class="top-nav s-12 l-10">
                  <p class="nav-text">Custom menu text</p>
                  <ul class="right">
                     <li class="active-item"><a href="homed.php">Home</a></li>
                     
                     <li><a href="servicesd.php">Services</a></li>
                     <li><a href="aboutusd.php">About Us</a></li>
                     <li><a href="feedback.php">Feedback</a></li>
					 <li><a href="home.php">Log out</a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>  
      <section>
         <!-- profile BLOCK -->
         
       <div class="line">
               <h2 class="section-title">Profile</h2>
               <div class="margin">
                  <div class="s-12 m-12 l-3 hide-m hide-s margin-bottom right-align">
                     <?php
				 session_start();
				 //echo $_SESSION['stress_id'];
				 if($_SESSION["usrname"] == null)
							header("location:index.html");
				$name=$_SESSION['usrname'];
				$sid=$_SESSION['usrid'];
				
				include("config.php");
				$sql="select * from student where sid='$sid';";
				$rs=mysql_query($sql);
				$row=mysql_fetch_array($rs);
					?>
				<img class="col-md-5" src="img/profile/<?php echo ($row['profile_pic']);?>"   />
				<h3><?php echo $name;?></h3>
			</div>
				</br>
			<a href="admin_msg.php"><button class="btn  btn-success btn-ms"> inbox <span class="glyphicon glyphicon-comment"></span></button></a>
			<a href="user_msg.php"><button class=" btn  btn-info btn-ms"> sentbox <span class="glyphicon glyphicon-plane"></span></button></a>
			<a href="ther_msg.php"><button class=" btn  btn-warning btn-ms"> therapist <span class="glyphicon glyphicon-user"></span></button></a>
			<a href="motivation.php"><button class=" btn  btn-danger btn-ms"> motivation videos <span class="glyphicon glyphicon-facetime-video"></span></button></a>
			<a href="print_rep.php"><button class=" btn  btn-primary btn-ms"> print reports <span class="glyphicon glyphicon-file"></span></button></a>
			<a href="upd_info.php"><button class=" btn  btn-success btn-ms"> update profile <span class="glyphicon glyphicon-cog"></span></button></a>
			</div>
       </div>
		
         <!-- FIRST BLOCK -->
		 
         <div class="line">
              
               <div class="margin">
                  <div class="s-12 m-12 l-3 hide-m hide-s margin-bottom right-align">
                   <?php
				 
				 if($_SESSION["usrname"] == null)
							header("location:index.html");
				$name=$_SESSION['usrname'];
				$sid=$_SESSION['usrid'];
				include("config.php");
				$sql="select profile_pic from student where sid='$sid';";
				$rs=mysql_query($sql);
				$row=mysql_fetch_array($rs);
			?>
			
			
                  </div>
                  <div class="s-12 m-12 l-4 margin-bottom right-align">
                     <?php 
					 $i=$_SESSION['i'];
					 ?>
                     </div>
                     
					<div class="s-12 m-12 l-12 margin-bottom right-align"> 
					<form class="customform" method="post">
					<label style="color:red">
					Your Test Status
					</label>
					<div class="progress" >
							<div class="progress-bar progress-bar-primary progress-bar-striped" style="width: <?php echo $i*100/8;?>%">
    <span class="sr-only"><?php echo $i*100/8; ?>% Complete (primary)</span>
  </div>
  
							</div>
    <table border="0">
 

<?php
			
			
			
							$rs=mysql_query("SELECT *
							FROM question where qid=$i and tid=1
							LIMIT 1 ");	
							while($row=mysql_fetch_array($rs))
							{
		
								
							
				?>
        
			<tr >
        	<td ><br><br><br><br><br><br></td>
        	<td ><h3 style="color:green"><?php echo $row["des"]; ?></h3>
			<br>
			<label>
			<input value="yes"  name="r1"  type="radio"  required="required"  />
			YES
			</label>
			<br>
			<label>
			<input value="no" name="r1"  type="radio"  required="required"  />
			NO
			</label>
			<br>
			
			<br></td>
			
            </tr>
		<?php echo "\n";
							}
					?>
	
					
		</table>
		<br>
			<?php
			if($i==7){
				
			?>			<div class="customform l-4 l-offset-4" ><button class="color-btn" type="submit"  name="submit_quiz">Submit Quiz</button></div>

			<?php
			
			}
			else
			{
			?>	
			<div class="customform l-4 l-offset-4" ><button class="color-btn" type="submit"  name="next">Next Question</button></div>

			
	        <?php 
			}
			   if(isset($_POST["next"]))
					{
			$_SESSION['value'][$_SESSION['i']]=$_POST['r1'];
	   if($_SESSION['value'][$_SESSION['i']]=="yes")
	     $_SESSION['y']=$_SESSION['y']+1;
				else if($_SESSION['value'][$_SESSION['i']]=="no")
					$_SESSION['z']=$_SESSION['z']+1;
				
				$_SESSION['i']++;
				
						header("location:stress.php");
					}
							elseif(isset($_POST["submit_quiz"]))
							{
								 $_SESSION['value'][$_SESSION['i']]=$_POST['r1'];
							$_SESSION['score']=($_SESSION['y']/8)*100;
								header("location:testcomp.php");
							}	
					?>
                  </div>
                               
               </div>
            </div>
			
					
		</form>
		
</body>
</html>
