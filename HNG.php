<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		body{
			background: url(Figma.jpg);
			background-repeat: no-repeat;
			background-size: 1000px 500px;
			background-position: center;
			font-family:  fantasy;
			font-style:  bold;
		}

		h1{
			
			font-style: italic;
			font-family: monospace;
			color: #FF00FF;
			
		}

		p{
			position: relative;
			font-family: Roboto;
			font-style: italic;
			font-weight: bold;
			line-height: normal;
			font-size: 50px;
			text-align: center;
		

			color: #2F80ED;
		}

		div{
			position: static;
			padding: 200px;
			border: 1px solid #4CAF50
			width: 900px;

		}

	</style>

</head>
<body>

	<div>
	<P>WELCOME TO FIGMA PAGE</P>
	<h1>
<?php 
date_default_timezone_set("Africa/Lagos");
echo date("h:i:sa"); ?>
</h1>

<h1>
<?php 
echo date("l j \of F Y");

 ?>
</h1>
</div>

</body>
</html>