<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="stylesheet/customstyle.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
		<?php
		$con=mysql_connect("localhost","root","");
		if(!$con)
		{
			die("Not able to coonect to database");
		}
		else
		mysql_select_db("mhis",$con);
		?>
		</div>
	</div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
</body>
</html>