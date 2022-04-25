<!DOCTYPE HTML>
<html>

<head>  
<?php 
//session_start();
if($_SESSION["usrname"] == null)
							header("location:index.html");

	$x=$_SESSION['x'];
 ?>
	<script type="text/javascript">
	window.onload = function () {
		var chart = new CanvasJS.Chart("chartContainer",
		{
			
                        animationEnabled: true,
			theme: "theme2",
			data: [
			{    
				
				type: "doughnut",
				indexLabelFontFamily: "Garamond",       
				indexLabelFontSize: 20,
				startAngle:0,
				indexLabelFontColor: "dimgrey",       
				indexLabelLineColor: "darkgrey", 
				toolTipContent: "{y} %", 					

				dataPoints: [
				{  y: <?php echo 100-$x;?>, indexLabel: "goodhealth {y}%" },
				{  y: <?php echo $x;?>, indexLabel: "stress {y}%" },

				
				

				]
			}
			]
		});

		chart.render();
	}
	
	</script>
	
	<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        </head>
	<body>
		<div id="chartContainer" style="height: 300px; width: 100%;">
		</div>
	</body>
</html>